<?php
// Initialize session
session_start();

// Check if the user is logged in, if not redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: /PestEase1/#login");
    exit;
}

// Include database connection
require_once "./db/conn.php";

// Prepare a select statement to retrieve user details
$sql = "SELECT name, email FROM UserDetails WHERE id = ?";

if ($stmt = $conn->prepare($sql)) {
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("i", $param_id);

    // Set parameters
    $param_id = $_SESSION["id"];

    // Attempt to execute the prepared statement
    if ($stmt->execute()) {
        // Store result
        $stmt->store_result();

        // Check if user exists
        if ($stmt->num_rows == 1) {
            // Bind result variables
            $stmt->bind_result($name, $email);
            if ($stmt->fetch()) {
                // Display user details
                echo "<h2>Welcome, " . $name . "!</h2>";
                echo "<p>Your Email: " . $email . "</p>";
                echo "<p><a href='reset-password.php'>Reset Password</a></p>";
                echo "<p><a href='logout.php'>Logout</a></p>";
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
