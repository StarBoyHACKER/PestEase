<div class="container-fluid">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
            <a href="index.html" class="navbar-brand">
                <img src="logo.png" height="100px" width="80%">
            </a>
            <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-dark"></span>
            </button>
            <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <!-- Profile Dropdown -->
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <b>Profile</b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            // Initialize session

                            // Check if the user is logged in
                            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                                // Include database connection
                                require_once "./db/conn.php";

                                // Prepare a select statement to retrieve user name
                                $sql = "SELECT name FROM UserDetails WHERE id = ?";

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
                                            $stmt->bind_result($name);
                                            if ($stmt->fetch()) {
                                                // Display user's name in the dropdown menu
                                                echo "<li><span class='dropdown-item-text'>Welcome, $name</span></li>";
                                            }
                                        }
                                    }
                                    // Close statement
                                    $stmt->close();
                                }
                            }
                            ?>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <!-- End of Profile Dropdown -->
                </div>
            </div>
        </nav>
    </div>
</div>