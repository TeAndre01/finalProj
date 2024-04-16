<?php
// Include database connection file
include_once 'db_connection.php';

// Include validation functions
include_once 'validation.php';

// Initialize variables
$username = $email = $password = '';
$errors = array();

// Process registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form data
    $username = test_input($_POST['username']);
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);

    // Validate registration data
    $errors = validate_registration($username, $email, $password);

    // If no validation errors, proceed with registration
    if (empty($errors)) {
        // Check if username or email already exists in the database
        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // If user exists
            if ($user['username'] === $username) {
                array_push($errors, "Username already exists");
            }
            if ($user['email'] === $email) {
                array_push($errors, "Email already exists");
            }
        }

        // If no duplicate username or email, insert user data into database
        if (count($errors) == 0) {
            $password_hash = password_hash($password, PASSWORD_DEFAULT); // Encrypt password before storing
            $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password_hash')";
            mysqli_query($conn, $query);

            // Redirect to login page
            header('location: login.php');
        }
    }
}

// Display errors if any
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>Error: $error</p>";
    }
}
?>
