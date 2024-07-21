<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Responsive 3 Box Layout</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>

  body{
    margin: 0;
    overflow: auto;
  }
  .container {
    display: flex;
    justify-content: space-between;
    margin: 0 20px;
}

.box, .box1{
    flex: 1;
    background-color: #ededed94;
    border: 1px solid #ccc;
    text-align: center;
    padding: 20px;
    margin: 0 10px;
    border-radius: 50px;
}

header {
    width: 100%;
    z-index: 1;
  }

header #quiz-homepage {
    background-color: #fdca54;
    color: white;
    text-align: center;
    padding-top: 15px;
    padding-bottom: 15px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 30px;
    margin: 0;
    position: fixed;
    z-index: 1;
    width: 100%;
}

.box img, .box1 img{
    max-width: 65%;
    height: auto;
    margin-bottom: -30px;
}

.box button, .box1 button {
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 20px;
    color: #333;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    width: auto;
    position: relative;
    top: 40px;
    font-family: Arial, Helvetica, sans-serif;
}

@media only screen and (max-width: 450px) {

    .box1 {
       /* margin: 80px 50px 30px 50px;*/
       margin: 90px 50px 20px 50px;
    }
}

@media only screen and (max-width: 450px) {
    .container {
        flex-direction: column;
        overflow: auto;
        margin-bottom: 80px;
    }

    .box {
        margin: 20px 50px;
    }
}
@media only screen and (max-width: 300px) {
    .container {
        flex-direction: column;
    }

    .box {
        margin: 10px 10px;
    }
}
.box a, .box1 a{
  text-decoration: none;
    margin: 5px;
    color: white;
    background: #fdca54;
    padding: 5px 8px;
    border-radius: 50px;
    font-size: 10px;
}

#nav-list{
  list-style: none;
  overflow: hidden;
  background-color:#ffff ;
   position: fixed;
   bottom: 0;
   width: 100%;
   padding:0;
   display: flex;
  justify-content: center;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  z-index: 1;
}

#nav-list a{
    color: #BBBBBB;
    font-size: 16px;
    margin-right: 30px;
    margin-left: 30px;
    font-weight: bold;
    text-decoration: none;
  
}

#nav-list li{
  display: inline;
    float: left;
    padding: 0 20px;
}

#nav-list ul{
  list-style: none;
    padding: 0;
    margin: 0;
}

#nav-list i {
  color: #BBBBBB;
  padding: 10px 0;
  display: flex;
  justify-content: center;
}

</style>
<header>
  <h1 id="quiz-homepage">Pagsusulit</h1>
    </header>
<body><?php include('session.php'); ?>
    <div class="container">
    <div class="box1">
    <img src="img/identification.png" alt="Image 1"><br>
    <?php
        include('includes/database.php');
    $total_count_query = "SELECT COUNT(*) AS total_count FROM `progress` WHERE `quiz` = 'identification' AND user_id = $id";
    $total_count_result = $conn->query($total_count_query);
    $total_count_row = $total_count_result->fetch_assoc();
    $total_count = $total_count_row['total_count'];

    $access_count_query = "SELECT COUNT(*) AS access_count FROM `progress` WHERE `quiz` = 'identification' AND `access` = 1 AND user_id = $id";
    $access_count_result = $conn->query($access_count_query);
    $access_count_row = $access_count_result->fetch_assoc();
    $access_count = $access_count_row['access_count'];

    $ratio_percentage = 0;
    if ($total_count > 0) {
        $ratio_percentage = ($access_count / $total_count) * 80;
    }

    echo "Progress: " . round($ratio_percentage, 2) . "%";

    $conn->close();
    ?>
    <button>Kilalanin <br><span style="font-size: 14px; text-align: center;">Identification</span> <a href="identification/index.php?id=<?php echo $id?>">&#10095;</a></button>
</div>

        <div class="box">
            <img src="img/ToF.png" alt="Image 2"><br>
            <?php
        include('includes/database.php');
    $total_count_query = "SELECT COUNT(*) AS total_count FROM `progress` WHERE `quiz` = 'tama_mali' AND user_id = $id";
    $total_count_result = $conn->query($total_count_query);
    $total_count_row = $total_count_result->fetch_assoc();
    $total_count = $total_count_row['total_count'];

    $access_count_query = "SELECT COUNT(*) AS access_count FROM `progress` WHERE `quiz` = 'tama_mali' AND `access` = 1 AND user_id = $id";
    $access_count_result = $conn->query($access_count_query);
    $access_count_row = $access_count_result->fetch_assoc();
    $access_count = $access_count_row['access_count'];

    $ratio_percentage = 0;
    if ($total_count > 0) {
        $ratio_percentage = ($access_count / $total_count) * 80;
    }

    echo "Progress: " . round($ratio_percentage, 2) . "%";

    $conn->close();
    ?>
            <button>Tama o Mali <br><span style="font-size: 14px; text-align: center;">True or False</span><a href="tama-o-mali/index.php?id=<?php echo $id?>">&#10095;</a></button>
        </div>
        <div class="box">
            <img src="img/word-search.png" alt="Image 3">
            <button> Pagpili ng Salita <br><span style="font-size: 14px; text-align: center;">Word Search</span><a href="word-search/index.php">&#10095;</a></button>
        </div>
    </div>

    <section id="nav-list">
    <ul>
        <li><a href="start.php"><i class="fa-solid fa-house fa-lg"></i></a></li>
        <li><a href="searchpage.php"><i class="fa-solid fa-magnifying-glass fa-lg"></i></a></li>
        <li><a href="quiz.php"><i class="fa-solid fa-gamepad fa-lg" style="color:#fdca54"></i></a></li>
        <li><a href="mechanics.php"><i class="fa-solid fa-question fa-lg"></i></a></li>
        <li><a href="user-profile.php"><i class="fa-solid fa-user fa-lg"></i></a></li>
    </ul>
  
   <script>
      $(document).ready(function(){
        $('.btn').click(function(){
          $('.items').toggleClass("show");
          $('ul li').toggleClass("hide");
        });
      });
   </script>
  </section>

    <script src="script.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
    var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
    if (disclaimer){
        disclaimer.remove();
    }
});
    </script>
</body>
</html>
