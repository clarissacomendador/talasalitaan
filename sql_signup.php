<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $user_level = 'user';
    include('includes/database.php');
    $conn->begin_transaction();

    try {
        // Prepare the statement for inserting user data
        $stmt = $conn->prepare("INSERT INTO users (name, username, password, level) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $username, $hashed_password, $user_level);
        $stmt->execute();
        $user_id = $stmt->insert_id;
        $stmt->close();

        // Prepare the statement for inserting progress data
        $stmt = $conn->prepare("INSERT INTO progress (user_id, quiz, level, access) VALUES (?, ?, ?, '0')");
        $quizzes = ['identification', 'tama_mali'];
        $levels = ['easy', 'normal', 'hard'];

        foreach ($quizzes as $quiz) {
            foreach ($levels as $level) {
                $stmt->bind_param("iss", $user_id, $quiz, $level);
                $stmt->execute();
            }
        }
        $stmt->close();
        $conn->commit();
        header('Location: start.php');
        exit;
    } catch (Exception $e) {
        $conn->rollback();
        echo "Error: " . $e->getMessage();
    }
    $conn->close();
}
?>
