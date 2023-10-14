<?php
// Start a session
session_start();

// Include database configuration
include '../config/db_config.php';

// Disable error reporting (you can enable it for debugging)
error_reporting(0);

// Create a single PDO database connection
$dbname = DB_NAME;
$pdo = new PDO("mysql:host=localhost;dbname=$dbname", DB_USER, DB_PASS);

// Get user input and sanitize it
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$useradmin = filter_var($_POST['useradmin'], FILTER_SANITIZE_STRING);

// Initialize an empty array for login responses
$login_response = array();

// Check for empty username or password
if (empty($username) || empty($password)) {
    $login_response[] = array("login_result" => "empty_fields");
} else {
    // Prepare SQL query to retrieve user information
    $stmt = $pdo->prepare('SELECT * FROM tbl_admin WHERE username = :username LIMIT 1');
    $stmt->bindValue(':username', $username);
    $stmt->execute();
    $resultCheck = $stmt->rowCount();

    // Check if username exists in the database
    if ($resultCheck > 0) {
        foreach ($stmt as $row) {
            // Check if the entered password matches the stored password
            if ($password == $row['password']) {
                // Check the user's role and set appropriate session variables
                if ($row['admin_role'] == 'librarian') {
                    $login_response[] = array("login_result" => "librarian_success");
                } elseif ($row['admin_role'] == 'staff') {
                    $login_response[] = array("login_result" => "staff_success");
                }

                // Set session variables
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['loggedName'] = $row['fname'] . " " . $row['lname'];
            } else {
                $login_response[] = array("login_result" => "wrong_password");
            }
        }
    } else {
        $login_response[] = array("login_result" => "user_not_found");
    }
}

// Encode and return the login response as JSON
echo json_encode($login_response);
?>
