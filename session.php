
<?php
    include('includes/database.php');
    session_start();
    if (!isset($_SESSION['id'])){
        header('location:index.php');
    }
    $id = $_SESSION['id'];
    $query=mysqli_query ($conn,"SELECT * FROM `users` WHERE id ='$id'");
    $row=mysqli_fetch_array($query);
    $name=$row['name'];
    $username=$row['username'];
    $id=$row['id'];
?>