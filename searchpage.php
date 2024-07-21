<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f6dcf461c1.js" crossorigin="anonymous"></script>
    <title>Talasalitaan App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css" />

</head>
<header>
    <section id="nav-list">
    <ul>
        <li><a href="start.php"><i class="fa-solid fa-house fa-lg"></i></a></li>
        <li><a href="searchpage.php"><i class="fa-solid fa-magnifying-glass fa-lg" style="color:#fdca54"></i></a></li>
        <li><a href="quiz.php"><i class="fa-solid fa-gamepad fa-lg"></i></a></li>
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
</header>
<style>
    body, html{
        touch-action:none;
    }
</style>
<body>
<?php include('session.php'); ?>
<section id="search-bar">
    <div class="wrapper" id="search-page">
        <div id="div1">
            <form class="form-inline" action="searchpage.php" method="post">
                <button type="submit" name="search" id="searchButton"><i class="fa fa-search"></i></button>
                <input id="word" type="text" placeholder="Hanapin..." value="<?php echo isset($_POST['word']) ? $_POST['word'] : ''; ?>" name="word"><br>
                <button type="button" onclick="startListening()"><i class="fa fa-microphone"></i></button>
            </form>

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
    triggerSearch(); // Call the function to trigger search
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

// Function to trigger search action
function triggerSearch() {
    document.getElementById('searchButton').click(); // Simulate click event on search button
}

            </script>

<?php
include('includes/database.php');

// Check if a word is clicked in the list
if (isset($_GET['word'])) {
    $word = $_GET['word'];

    // Fetch word information from the database
    $sql = "SELECT * FROM dictionary WHERE Word = '$word' OR English_Word = '$word' ORDER BY Word ASC";
    $result = mysqli_query($conn, $sql);

    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        while ($info = mysqli_fetch_array($result)) {
            // Display the word information
            echo "<div class='ans'>";
            echo "<h2 class='word'>";
            if (!empty($info['Audio_File'])) {
                echo "<div class='audio-container'>";
                echo "<audio id='audioPlayer{$info['id']}' controls>";
                echo "<source src='{$info['Audio_File']}' type='audio/mpeg'>";
                echo "Your browser does not support the audio element.";
                echo "</audio>";
                echo "<button onclick='playAudio({$info['id']})' class='play-button'><i class='fa-solid fa-volume-high'></i></button>";
                echo "</div>";
            }
            echo $info['Word'] . "<br>";
            echo "<h2 class='eng'>" . $info['English_Word'] . "</h2>";
            echo "</h2><br>";
            echo "<h2 class='halimbawa'>Kahulugan</h2>";
            echo "<h2 class='def'>" . $info['Meaning'] . "</h2>";
            echo "<h2 class='halimbawa'>Halimbawa</h2>";
            echo "<h2 class='def'>" . $info['Sentence'] . "</h2>";
            echo "</div>";
        }
    } else {
        // Display message when no word exactly matches the user's search query
        echo "<div class='no-words-message'>Hindi mahanap ang salitang \"$word\".</div>";
    }
} else {
    // Check if a word is input in the search bar
    if (isset($_POST['search'])) {
        if (!empty($_POST['word'])) {
            $word = $_POST['word'];

            // Modify the SQL query to fetch only the complete word that matches the user's search query
            $sql = "SELECT * FROM dictionary WHERE Word = '$word' OR English_Word = '$word' ORDER BY Word ASC";
            $result = mysqli_query($conn, $sql);

            // Check if any rows are returned
            if (mysqli_num_rows($result) > 0) {
                while ($info = mysqli_fetch_array($result)) {
                    // Display the word information
                    echo "<div class='ans'>";
                    echo "<h2 class='word'>";
                    if (!empty($info['Audio_File'])) {
                        echo "<div class='audio-container'>";
                        echo "<audio id='audioPlayer{$info['id']}' controls>";
                        echo "<source src='{$info['Audio_File']}' type='audio/mpeg'>";
                        echo "Your browser does not support the audio element.";
                        echo "</audio>";
                        echo "<button onclick='playAudio({$info['id']})' class='play-button'><i class='fa-solid fa-volume-high'></i></button>";
                        echo "</div>";
                    }
                    echo $info['Word'] . "<br>";
                    echo "<h2 class='eng'>" . $info['English_Word'] . "</h2>";
                    echo "</h2><br>";
                    echo "<h2 class='halimbawa'>Kahulugan</h2>";
                    echo "<h2 class='def'>" . $info['Meaning'] . "</h2>";
                    echo "<h2 class='halimbawa'>Halimbawa</h2>";
                    echo "<h2 class='def'>" . $info['Sentence'] . "</h2>";
                    echo "</div>";
                }
            } else {
                // Display message when no word exactly matches the user's search query
                echo "<div class='no-words-message'>Hindi mahanap ang salitang \"$word\".</div>";
            }
        } else {
            // Display all words when no search keyword is provided
            $sql = "SELECT * FROM dictionary ORDER BY Word ASC";
            $result = mysqli_query($conn, $sql);

            // Check if any rows are returned
            if (mysqli_num_rows($result) > 0) {
                while ($info = mysqli_fetch_array($result)) {
                    // Display each word as clickable links
                    echo "<div class='list-words'>";
                    echo "<h2 class='word'><a href='searchpage.php?word={$info['Word']}'>" . $info['Word'] . "</a></h2>";
                    echo "</div>";
                }
            } else {
                // Display message when no words are found
                echo "<div class='no-words-message'>Hindi mahanap ang salita.</div>";
            }
        }
    }
}
?>


<script>
    function playAudio(id) {
        var audioPlayer = document.getElementById('audioPlayer' + id);
        audioPlayer.play();
    }
</script>


        </div>
    </div>
</section>

<!-- Script -->
<script src="js/script.js"></script>

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
