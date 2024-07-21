<?php
// Database connection
include('includes/database.php');
// Query to fetch data
$sql = "SELECT `id`, `question`, `answer`, `level` FROM `identification` WHERE `level` = 'hard'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Question</th><th>Answer</th><th>Level</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["question"] . "</td><td>" . $row["answer"] . "</td><td>" . $row["level"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quiz Questions</title>
<style>
  table {
    width: 100%;
    border-collapse: collapse;
  }

  table, th, td {
    border: 1px solid black;
  }

  th, td {
    padding: 15px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }
</style>
</head>
<body>

<h1>Quiz Questions (Level: Normal)</h1>
<div>
  <?php include 'fetch_data.php'; ?>
</div>

</body>
</html>
