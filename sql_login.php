<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    include('includes/database.php');
    $stmt = $conn->prepare("SELECT id, password, level FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['id'] = $row['id'];
            
            if (isset($_POST['remember_me'])) {
                // Set a cookie for 30 days
                setcookie('user_id', $row['id'], time() + (86400 * 30), "/"); // 86400 = 1 day
            }

            if ($row['level'] == 'admin') {
                header('Location: admin.php');
            } elseif ($row['level'] == 'user') {
                header('Location: start.php');
            } else {
                header('Location: login.php');
            }
            exit;
        } else {
            $_SESSION['login_error'] = "Mali ang password mo.";
        }
    } else {
        $_SESSION['login_error'] = "Wala kang akawn o mali ang password mo.";
    }
    
    $stmt->close();
    $conn->close();
    header('Location: login.php');
    exit;
}
?>
