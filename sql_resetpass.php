<?php
// Start session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include('includes/database.php');

    // Get form data
    $newPassword = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];
    $userId = $_POST['userId']; // Get user ID from the hidden input field

    // Validate passwords
    if ($newPassword !== $confirmPassword) {
        // Passwords don't match, redirect back to the reset password form with error
        $_SESSION['error'] = "Passwords do not match.";
        header("Location: reset_password_form.php");
        exit();
    }

    // Hash the new password
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Update the user's password in the database
    $sql = "UPDATE users SET password = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $hashedPassword, $userId);

    if ($stmt->execute()) {
        // Password updated successfully, redirect to login page or wherever needed
        $_SESSION['success'] = "Password updated successfully.";
        header("Location: admin.php");
        exit();
    } else {
        // Error updating password
        $_SESSION['error'] = "Error updating password.";
        header("Location: reset_password_form.php");
        exit();
    }

} else {
    // If the form is not submitted, redirect to the reset password form
    header("Location: reset_password_form.php");
    exit();
}
?>
