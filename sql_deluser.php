<?php
session_start();
include('includes/database.php');
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $userId = $_GET['id'];

    // Prepare SQL statement to delete user
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);

    $sql1 = "DELETE FROM `progress` WHERE user_id = ?";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->bind_param("i", $userId);

    // Execute the first deletion
    if ($stmt->execute()) {
        // If the first deletion is successful, execute the second deletion
        if ($stmt1->execute()) {
            $_SESSION['success'] = "User deleted successfully.";
            header("Location: admin.php");
            exit();
        } else {
            $_SESSION['error'] = "Error deleting user progress.";
            header("Location: admin.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Error deleting user.";
        header("Location: admin.php");
        exit();
    }
} else {
    $_SESSION['error'] = "User ID not provided.";
    header("Location: admin.php");
    exit();
}

// Close the database connection
$conn->close();
?>
