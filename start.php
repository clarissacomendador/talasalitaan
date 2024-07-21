<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f6dcf461c1.js" crossorigin="anonymous"></script>
    <title>Talasalitaan App</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<?php include('session.php'); ?>

<section id="search-bar">
    <div class="wrapper">
        <div id="div1" class="searchbar1">
            <img class="image-logo" src="img/logo.png" alt="logo">
        
            <form id="search-form" class="form-inline" action="searchpage.php" method="post" onclick="hideKeyboard()"> 
   <button type="submit" name="search"><i class="fa fa-search" id="searchButton"></i></button>
             <input id="word1" placeholder=" Hanapin..." value="" name="word" outline="none" onclick="submitEmptySearch()"><br>
            
          
            </form>
            <a href="quiz.php"><button class="btns">PAGSUSULIT<p>Assessment</p></button></a><BR>
            <a href="mechanics.php"><button class="btns">PANUTO<p>Instruction</p></button></a><BR>
        </div>
    </div>
</section>

<script>
    const searchInput = document.getElementById('word');
    let recognizing = false;
    let recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition || window.mozSpeechRecognition || window.msSpeechRecognition)();

    recognition.lang = 'en-US';

    recognition.onstart = function() {
        recognizing = true;
        console.log('Speech recognition started...');
    };

    recognition.onresult = function(event) {
        let transcript = event.results[0][0].transcript;
        searchInput.value = transcript;
        recognizing = false;
    };

    recognition.onend = function() {
        console.log('Speech recognition ended.');
        if (recognizing) {
            recognition.start();
        }
    };

    function startListening() {
        if (recognizing) {
            recognition.stop();
        } else {
            recognition.start();
        }
    }

    function submitEmptySearch() {
        document.getElementById('searchButton').click();
    }
    function hideKeyboard() {
        const wordInput = document.getElementById('word1');
        wordInput.blur(); // Blurs the input field, hiding the keyboard
    }
</script>

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