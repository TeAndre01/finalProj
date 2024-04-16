<?php
// Function to sanitize and validate input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email format
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate password strength (minimum length)
function validate_password($password) {
    return strlen($password) >= 6; // Adjust as needed
}

// Function to check if username is valid (alphanumeric and underscores only)
function validate_username($username) {
    return preg_match('/^[a-zA-Z0-9_]+$/', $username);
}

// Function to validate registration form data
function validate_registration($username, $email, $password) {
    $errors = array();

    // Validate username
    if (empty($username) || !validate_username($username)) {
        $errors['username'] = "Username must be alphanumeric and may contain underscores only";
    }

    // Validate email
    if (empty($email) || !validate_email($email)) {
        $errors['email'] = "Invalid email format";
    }

    // Validate password
    if (empty($password) || !validate_password($password)) {
        $errors['password'] = "Password must be at least 6 characters long";
    }

    return $errors;
}

// Example usage:
// $username = test_input($_POST['username']);
// $email = test_input($_POST['email']);
// $password = test_input($_POST['password']);
// $errors = validate_registration($username, $email, $password);
// if (empty($errors)) {
//     // Proceed with registration
// } else {
//     // Display errors
// }
?>
