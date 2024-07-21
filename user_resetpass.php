<?php
include('includes/database.php');
include('session.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newpassword = $_POST['newpassword'];
    $confirmnewpassword = $_POST['confirmnewpassword'];

    if ($newpassword != $confirmnewpassword) {
        echo '<script>alert("Passwords do not match."); window.location.href = "user-profile.php";</script>';
    } else {
        $hashed_password = password_hash($newpassword, PASSWORD_DEFAULT);

        // Update password in the database for the logged-in user
        $sql = "UPDATE users SET password='$hashed_password' WHERE username='$username'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<script>window.location.href = "login.php";</script>';
        } else {
            echo '<script>alert("Error updating password."); window.location.href = "user-profile.php";</script>';
        }
    }
}
?>
