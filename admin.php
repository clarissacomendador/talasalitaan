<?php
session_start();
ob_start(); // Start output buffering
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Accounts</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<style>
/* Common styles */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: #FFFF;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    overflow: hidden;
}

h2 {
    margin-left: 0;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    background: #FFFF;
}

.login-container {
    padding: 60px;
    background-color: white;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
    border-radius: 80px 20px 80px 20px;
    width: 100%;
    margin-left: 10px;
    margin-right: 10px;
    max-width: 400px;
    box-sizing: border-box;
    margin-top: 80px;
}

.login-container h2 {
    text-align: center;
    margin-bottom: 50px;
    font-size: 28px;
    color: #333;
}

.login-container .form-group {
    margin-bottom: 25px;
}

.login-container input[type="text"], 
.login-container input[type="password"] {
    width: 100%;
    padding: 10px;
    border-bottom: 1px solid black;
    font-size: 20px;
    border-right: 0;
    border-left: 0;
    border-top: 0;
    color: #333;
}

.login-container button[type="submit"] {
    padding: 10px 80px;
    background-color: #fdca54;
    color: #ffffff;
    border-radius: 30px;
    cursor: pointer;
    font-size: 22px;
    display: flex;
    justify-content: center;
    border: none;
    margin: 0 auto;
    margin-top: 40px;
}

.login-container .new-user {
    background-color: transparent;
    color: #333;
    cursor: pointer;
    font-size: 15px;
    display: flex;
    justify-content: center;
    margin: 30px auto 20px;
    border: none;
    text-decoration: underline;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
}

.login-container .error-message {
    color: red;
    text-align: center;
    font-size: 12px;
}

header {
    background-color: #fdca54;
    color: #FFFF;
    top: 0;
    height: 100px ;
    font-size: 35px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: 600;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
}
tr, th{
    font-size: 20px;
    text-align: center;
}
a {
    text-decoration: none;
}
</style>

<center><header>TALASALITAAN (Accounts) 
<button class='btn btn-danger' onclick="location.href='sql_logout.php'">Logout</button></header></center>

<body>
    <div class="container">
        <table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th><th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('includes/database.php');
        $sql = "SELECT id, name, username, password, level FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["username"]."</td>
                <td><button class='btn btn-danger' onclick=\"location.href='admin_resetpass.php?id=".$row["id"]."'\">Reset</button></td>
                <td>".$row["level"]."</td>
                <td><button class='btn btn-danger' onclick=\"confirmDelete(".$row['id'].")\">Delete</button></td>
                </tr>";

            }
        } else {
            echo "0 results";
        }
        $conn->close();
        
        ob_end_flush(); 
        ?>
    </tbody>
</table>
</div>
<script>
    function confirmDelete(userId) {
        var result = confirm("Are you sure you want to delete this user?");
        if (result) {
            location.href = 'sql_deluser.php?id=' + userId;
        }
    }
</script>

</body>
</html>
