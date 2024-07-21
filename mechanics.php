<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f6dcf461c1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
<title>Popup Modal with Carousel Slider</title>
<style>
  body {
    background-color: white;
    margin: 0;
    overflow: hidden;
  }

  header #quiz-homepage {
    background-color: #fdca54;
    color: white;
    text-align: center;
    padding-top: 15px;
    margin-bottom: 0;
    padding-bottom: 15px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 30px;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
  /* Styles for modal */
  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.5);
  }

  .modal-content {
    background-color: #fefefe;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 600px;
    text-align: center;
    height: auto;
    top: 3%;
    overflow: auto;
  }

  @media only screen and (max-width: 800px) {
    .modal-content {
    background-color: #fefefe;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 97%;
        height: 85%;
        max-width: 600px;
        text-align: center;
        overflow: auto;
  }
  }

  /* Styles for carousel */
  .carousel-container {
    position: relative;
    width: 100%;
    overflow: auto;
  }

  .carousel {
    display: flex;
    transition: transform 0.5s ease; /* Smooth transition between slides */
    overflow: auto;
  }

  .carousel img {
    width: 90%;
    object-fit: cover;
  }

  .carousel-item {
    text-align: center;
    display: none; /* Initially hide all carousel items */
  }

  .carousel-item.active {
    display: block; /* Display only active carousel item */
  }

  .arrow {
    cursor: pointer;
    position: absolute;
   /* top: 50%;*/
   top: 40%;
   /* width: 50px;
    height: 50px;*/
        width: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;
    color: black;
  }

  .arrow.left {
    left: 10px;
    color: #333;
  }

  .arrow.right {
    right: 10px;
    color: #333;
  }
  
  .btns {
      margin-top: 80px;
  }
.btns span {
    font-size: 16px;
    position: absolute;
    left: 131px;
    margin-top: -20px;
}
  .btns button {
   /* margin: 0 5px;
    cursor: pointer;
    border: none;
   /* background-color: rgba(255, 255, 255, 0.5);
   background-color: rgb(186 41 41 / 50%);
    border-radius: 5px;
    padding: 5px 10px;
    overflow: hidden;
    font-size: 16px;*/

    background-color: #eeeeeeab;
    color: #333;
    padding: 30px;
    font-size: 22px;
    text-align: left;
    border: none;
    font-family: Arial, Helvetica, sans-serif;
    cursor: pointer;
    width: 100%;
    position: relative;
    margin-bottom: 8px;
    box-shadow:0 4px 8px rgb(255 255 255 / 10%);
  }

.btns p{
    font-size: 25px;
}
  .btns button:hover {
    background-color: rgba(255, 255, 255, 0.8);
  }
  #myModal1 .close,
  #myModal2 .close,
  #myModal3 .close{
    display: flex;
    justify-content: end;
    font-size: 40px;
    cursor: pointer;
    color: #333;
    margin-top: -30px;
    overflow: hidden;
  }
  #paragraph, #paragraph1,
  #paragraph2, #paragraph3,
  #paragraph4, #paragraph5,
  #paragraph6, #paragraph7, 
  #paragraph8, #paragraph9{
 /*   font-size: 20px;
    margin: 30px 0; */
    font-size: 18px;
    margin: 20px 0;
    color: #333;
  }
  #myModal1 button, 
  #myModal2 button, 
  #myModal3 button {
    font-size: 18px;
    border: none;
    text-decoration: underline;
    background: transparent;
    color: #333;
}
.btns img{
  width: 100px;
}
</style>
</head>
<header>
    <h1 id="quiz-homepage">Panuto</h1>
</header>
<section id="nav-list">
<ul>
        <li><a href="start.php"><i class="fa-solid fa-house fa-lg"></i></a></li>
        <li><a href="searchpage.php"><i class="fa-solid fa-magnifying-glass fa-lg"></i></a></li>
        <li><a href="quiz.php"><i class="fa-solid fa-gamepad fa-lg"></i></a></li>
        <li><a href="mechanics.php"><i class="fa-solid fa-question fa-lg" style="color:#fdca54"></i></a></li>
        <li><a href="user-profile.php"><i class="fa-solid fa-user fa-lg"></i></i></a></li>
    </ul>
</section>
<body>


<!-- Buttons to open modals -->
<div class="btns">
  <!-- Button to open first modal -->
  <button onclick="openModal(1)"><img src="img/identification.png" alt="Image">Kilalanin <br><span>Identification</span></button>

  <!-- Button to open second modal -->
  <button onclick="openModal(2)"><img src="img/ToF.png" alt="Image">Tama o Mali <br><span>True or False</span></button>

  <!-- Button to open third modal -->
  <button onclick="openModal(3)"><img src="img/word-search.png" alt="Image">Pagpili ng Salita <br><span>Word Search</span></button>
</div>

<div id="myModal1" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal(1)">&times;</span>
    <div class="carousel-container">
      <div class="carousel">
        <div class="carousel-item active">
            
              <!--identifiation 1st img-->
          <img src="img/identification-levels.png" alt="Image 1">
          <p id="paragraph">Mayroong tatlong antas ang pagsusulit, ang madali, katamtaman at mahirap. Upang ma-access ng manlalaro ang susunod na antas, kinakailangan na mapasa at makakuha ng perpektong puntos ang sinusundang antas. </p>
          <button onclick="translateParagraph(this)">Isasalin</button>
        </div>
        <!--EASY-->
        <div class="carousel-item">
            <!--identifiation 2nd img-->
          <img src="img/identification-easy.png" alt="Image 2">
          <p id="paragraph1">Ang layunin ng identification game ay matukoy ng manlalaro ang tamang salita na naglalarawan sa tanong.</p>
          <button onclick="translateParagraph1(this)">Isasalin</button>
        </div>
          <div class="carousel-item">
              <!--identifiation 3rd img-->
          <img src="img/identification-easy-life.png" alt="Image 3">
          <p id="paragraph2">Ang hugis na puso na nasa taas ng bandang kaliwa ay sumisimbolong buhay o lakas ng manlalaro upang matagumpay na matapos ang pagsusulit. Nababawasan ka ng isang buhay o lakas sa tuwing magbibigay ka ng maling sagot.</p>
          <button onclick="translateParagraph2(this)">Isasalin</button>
        </div>
         <div class="carousel-item">
             <!--identifiation 4th img-->
          <img src="img/identification-easy-timer.png" alt="Image 4">
          <p id="paragraph3">Nagpapakita ang timer ng hamon para sa mga manlalaro na kumpletuhin ang bawat tanong sa loob ng itinakdang oras. Ang madaling antas ay nagbibigay ng dalawampung (20) segundo, ang katamtamang antas ay magkakaroon ng labinlimang (15) segundo, at ang mahirap na antas ay nangangailangan ng pagkumpleto sa loob ng sampung (10) segundo.</p>
          <button onclick="translateParagraph3(this)">Isasalin</button>
        </div>
        
        
      </div>
    </div>
    <div class="arrow left" onclick="prevSlide(1)">&#10094;</div>
    <div class="arrow right" onclick="nextSlide(1)">&#10095;</div>
  </div>
</div>

<div id="myModal2" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal(2)">&times;</span>
    <div class="carousel-container">
      <div class="carousel">
        <div class="carousel-item active">
              <!--TAMA O MALI 1ST img-->
          <img src="img/tama-mali-levels.png" alt="Image 1">
          <p id="paragraph4">Mayroong tatlong antas ang pagsusulit, ang madali, katamtaman at mahirap. Upang ma-access ng manlalaro ang susunod na antas, kinakailangan na mapasa ng manlalaro at makakuha ng perpektong puntos sa kasalukuyang antas.</p>
          <button onclick="translateParagraph4(this)">Isasalin</button>
        </div>
        <div class="carousel-item">
             <!--TAMA O MALI 2nd img-->
          <img src="img/tama-mali-easy.png" alt="Image 2">
          <p id="paragraph5">Ang layunin ng tama o mali ay matukoy ng manlalaro kung ang salita ay nagamit ng tama sa pangungusap.</p>
          <button onclick="translateParagraph5(this)">Isasalin</button>
        </div>
        <div class="carousel-item">
             <!--TAMA O MALI 3rd img-->
          <img src="img/tama-mali-easy-life.png" alt="Image 3">
          <p id="paragraph6">Ang hugis na puso na nasa taas ng bandang kaliwa ay sumisimbolong buhay o lakas ng manlalaro upang matagumpay na matapos ang pagsusulit. Mababawasan ka ng isang buhay o lakas sa bawat maling sagot.</p>
          <button onclick="translateParagraph6(this)">Isasalin</button>
        </div>
        <div class="carousel-item">
             <!--TAMA O MALI 4th img-->
          <img src="img/tama-mali-easy-hints.png" alt="Image 4">
          <p id="paragraph7">Ang mga pahiwatig ay makakatulong sa manlalaro na matapos ang pagsusulit. Sa bawat round, ang manlalaro ay makakatanggap ng limitadong mga pahiwatig ayon sa kahirapan ng laro. Para sa madaling antas, mayroon lamang walong (8) pahiwatig. Para sa katamtamang(normal) antas, mayroong limang (5) pahiwatig, habang ang mahirap na antas ay may tatlong (3) pahiwatig.</p>
          <button onclick="translateParagraph7(this)">Isasalin</button>
        </div>
        
      </div>
    </div>
    <div class="arrow left" onclick="prevSlide(2)">&#10094;</div>
    <div class="arrow right" onclick="nextSlide(2)">&#10095;</div>
  </div>
</div>

<!-- The third modal -->
<div id="myModal3" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal(3)">&times;</span>
    <div class="carousel-container">
      <div class="carousel">
        <div class="carousel-item active">
          <img src="img/word-search-game.png" alt="Image 1">
          <p id="paragraph8">Ang layunin ng word search ay matulungan na maging pamilyar ang manlalaro sa mga bokabularyo sa Filipino.</p>
          <button onclick="translateParagraph8(this)">Isasalin</button>
        </div>
        <div class="carousel-item">
          <img src="img/word-search-timer.png" alt="Image 2">
          <p id="paragraph9">Ang manlalaro ay may 60 segundo upang mahanap ang lahat ng salita sa loob ng kahon.</p>
          <button onclick="translateParagraph9(this)">Isasalin</button>
        </div>
      </div>
    </div>
    <div class="arrow left" onclick="prevSlide(3)">&#10094;</div>
    <div class="arrow right" onclick="nextSlide(3)">&#10095;</div>
  </div>
</div>

<script>
  // Function to open modal
  function openModal(modalNumber) {
    document.getElementById("myModal" + modalNumber).style.display = "block";
  }

  // Function to close modal
  function closeModal(modalNumber) {
    document.getElementById("myModal" + modalNumber).style.display = "none";
  }

  // Function to move to the previous slide
  function prevSlide(modalNumber) {
    let modal = document.getElementById("myModal" + modalNumber);
    let carousel = modal.querySelector(".carousel");
    let activeItem = modal.querySelector(".carousel-item.active");
    let prevItem = activeItem.previousElementSibling;
    if (!prevItem) {
      prevItem = carousel.lastElementChild;
    }
    activeItem.classList.remove("active");
    prevItem.classList.add("active");
  }

  // Function to move to the next slide
  function nextSlide(modalNumber) {
    let modal = document.getElementById("myModal" + modalNumber);
    let carousel = modal.querySelector(".carousel");
    let activeItem = modal.querySelector(".carousel-item.active");
    let nextItem = activeItem.nextElementSibling;
    if (!nextItem) {
      nextItem = carousel.firstElementChild;
    }
    activeItem.classList.remove("active");
    nextItem.classList.add("active");
  }

  // Function to translate the paragraph
  //identifiation 1st img//
  function translateParagraph(button) {
    var paragraph = document.getElementById('paragraph');
    var translatedText = "There are three levels of the quiz: easy, medium, and hard. To access the next level, the player must pass and obtain a perfect score on the preceding level.";

    if (paragraph.innerHTML === translatedText) {
      paragraph.innerHTML = "Mayroong tatlong antas ang pagsusulit, ang madali, katamtaman at mahirap. Upang ma-access ng manlalaro ang susunod na antas, kinakailangan na mapasa at makakuha ng perpektong puntos ang sinusundang antas.";
      button.innerHTML = "Isasalin";
    } else {
      paragraph.innerHTML = translatedText;
      button.innerHTML = "Translate";
    }
  }

  function translateParagraph1(button) {
    var paragraph = document.getElementById('paragraph1');
    var translatedText = "The goal of the identification game is for the player to identify the correct word that describes the question.";

    if (paragraph.innerHTML === translatedText) {
      paragraph.innerHTML = "Ang layunin ng identification game ay matukoy ng manlalaro ang tamang salita na naglalarawan sa tanong.";
      button.innerHTML = "Isasalin";
    } else {
      paragraph.innerHTML = translatedText;
      button.innerHTML = "Translate";
    }
  }

  function translateParagraph2(button) {
    var paragraph = document.getElementById('paragraph2');
    var translatedText = "The heart shape at the top left represents the player's life or strength to successfully complete the quiz. You lose a life or strength each time you give an incorrect answer.";

    if (paragraph.innerHTML === translatedText) {
      paragraph.innerHTML = "Ang hugis na puso na nasa taas ng bandang kaliwa ay sumisimbolong buhay o lakas ng manlalaro upang matagumpay na matapos ang pagsusulit. Nababawasan ka ng isang buhay o lakas sa tuwing magbibigay ka ng maling sagot.";
      button.innerHTML = "Isasalin";
    } else {
      paragraph.innerHTML = translatedText;
      button.innerHTML = "Translate";
    }
  }

  function translateParagraph3(button) {
    var paragraph = document.getElementById('paragraph3');
    var translatedText = "The timer presents a challenge for players to complete each question within the allotted time. The easy level gives twenty (20) seconds, the medium level will have fifteen (15) seconds, and the hard level requires completion within ten (10) seconds.";

    if (paragraph.innerHTML === translatedText) {
      paragraph.innerHTML = "Nagpapakita ang timer ng hamon para sa mga manlalaro na kumpletuhin ang bawat tanong sa loob ng itinakdang oras. Ang madaling antas ay nagbibigay ng dalawampung (20) segundo, ang katamtamang antas ay magkakaroon ng labinlimang (15) segundo, at ang mahirap na antas ay nangangailangan ng pagkumpleto sa loob ng sampung (10) segundo.";
      button.innerHTML = "Isasalin";
    } else {
      paragraph.innerHTML = translatedText;
      button.innerHTML = "Translate";
    }
  }
  
//TAMA O MALI//
//TAMA O MALI 1ST IMG//
  function translateParagraph4(button) {
    let paragraph4 = document.getElementById("paragraph4");
    let text4 = paragraph4.innerText.trim();
    if (text4 === "The quiz game has three levels: easy, normal, and hard. For the player to access the next level, the player must pass and get a perfect score in the current level.") {
      // Translate from English to Tagalog
      paragraph4.innerText = "Mayroong tatlong antas ang pagsusulit, ang madali, katamtaman at mahirap. Upang ma-access ng manlalaro ang susunod na antas, kinakailangan na mapasa ng manlalaro at makakuha ng perpektong puntos sa kasalukuyang antas.";
      button.innerHTML = "Isasalin";
    } else if (text4 === "Mayroong tatlong antas ang pagsusulit, ang madali, katamtaman at mahirap. Upang ma-access ng manlalaro ang susunod na antas, kinakailangan na mapasa ng manlalaro at makakuha ng perpektong puntos sa kasalukuyang antas.") {
      // Translate from Tagalog to English
      paragraph4.innerText = "The quiz game has three levels: easy, normal, and hard. For the player to access the next level, the player must pass and get a perfect score in the current level.";
      button.innerHTML = "Translate";
    }
  }

  //TAMA O MALI 2ND IMG//
  function translateParagraph5(button) {
    let paragraph5 = document.getElementById("paragraph5");
    let text5 = paragraph5.innerText.trim();
    if (text5 === "The objective of true or false is for the player to determine if the word is used correctly in the sentence.") {
      // Translate from English to Tagalog
      paragraph5.innerText = "Ang layunin ng tama o mali ay matukoy ng manlalaro kung ang salita ay nagamit ng tama sa pangungusap.";
      button.innerHTML = "Isasalin";
    } else if (text5 === "Ang layunin ng tama o mali ay matukoy ng manlalaro kung ang salita ay nagamit ng tama sa pangungusap.") {
      // Translate from Tagalog to English
      paragraph5.innerText = "The objective of true or false is for the player to determine if the word is used correctly in the sentence.";
      button.innerHTML = "Translate";
    }
  }

  //TAMA O MALI 3RD IMG//
  function translateParagraph6(button) {
    let paragraph6 = document.getElementById("paragraph6");
    let text6 = paragraph6.innerText.trim();
    if (text6 === "The heart shape in the upper left symbolizes your lives, you lose one life each time you give an incorrect answer.") {
      // Translate from English to Tagalog
      paragraph6.innerText = "Ang hugis na puso na nasa taas ng bandang kaliwa ay sumisimbolong buhay o lakas ng manlalaro upang matagumpay na matapos ang pagsusulit. Mababawasan ka ng isang buhay o lakas sa bawat maling sagot.";
      button.innerHTML = "Isasalin";
    } else if (text6 === "Ang hugis na puso na nasa taas ng bandang kaliwa ay sumisimbolong buhay o lakas ng manlalaro upang matagumpay na matapos ang pagsusulit. Mababawasan ka ng isang buhay o lakas sa bawat maling sagot.") {
      // Translate from Tagalog to English
      paragraph6.innerText = "The heart shape in the upper left symbolizes your lives, you lose one life each time you give an incorrect answer.";
      button.innerHTML = "Translate";
    }
  }

  //TAMA O MALI 4TH IMG//
  function translateParagraph7(button) {
    let paragraph7 = document.getElementById("paragraph7");
    let text7 = paragraph7.innerText.trim();
    if (text7 === "The hints will help the player to be able to finish the quiz. In each round, the player will receive limited hints as per game difficulty. For the easy level, there are only eight (8) hints. For the medium level, there are five (5) hints, while the hard level has three (3) hints.") {
      // Translate from English to Tagalog
      paragraph7.innerText = "Ang mga pahiwatig ay makakatulong sa manlalaro na matapos ang pagsusulit. Sa bawat round, ang manlalaro ay makakatanggap ng limitadong mga pahiwatig ayon sa kahirapan ng laro. Para sa madaling antas, mayroon lamang walong (8) pahiwatig. Para sa katamtamang(normal) antas, mayroong limang (5) pahiwatig, habang ang mahirap na antas ay may tatlong (3) pahiwatig.";
      button.innerHTML = "Isasalin";
    } else if (text7 === "Ang mga pahiwatig ay makakatulong sa manlalaro na matapos ang pagsusulit. Sa bawat round, ang manlalaro ay makakatanggap ng limitadong mga pahiwatig ayon sa kahirapan ng laro. Para sa madaling antas, mayroon lamang walong (8) pahiwatig. Para sa katamtamang(normal) antas, mayroong limang (5) pahiwatig, habang ang mahirap na antas ay may tatlong (3) pahiwatig.") {
      // Translate from Tagalog to English
      paragraph7.innerText = "The hints will help the player to be able to finish the quiz. In each round, the player will receive limited hints as per game difficulty. For the easy level, there are only eight (8) hints. For the medium level, there are five (5) hints, while the hard level has three (3) hints.";
      button.innerHTML = "Translate";
    }
  }

  
//word search//
//word search 1ST IMG//
 function translateParagraph8(button) {
    let paragraph8 = document.getElementById("paragraph8");
    let text8 = paragraph8.innerText.trim();
    if (text8 === "The objective of word search is to help player become familiar with Filipino vocabulary.") {
      // Translate from English to Tagalog
      paragraph8.innerText = "Ang layunin ng word search ay matulungan na maging pamilyar ang manlalaro sa mga bokabularyo sa Filipino.";
      button.innerHTML = "Isasalin";
    } else if (text8 === "Ang layunin ng word search ay matulungan na maging pamilyar ang manlalaro sa mga bokabularyo sa Filipino.") {
      // Translate from Tagalog to English
      paragraph8.innerText = "The objective of word search is to help player become familiar with Filipino vocabulary.";
      button.innerHTML = "Translate";
    }
  }

  function translateParagraph9(button) {
    let paragraph9 = document.getElementById("paragraph9");
    let text9 = paragraph9.innerText.trim();
    if (text9 === "The player has 60 seconds to find all the words inside the box.") {
      // Translate from English to Tagalog
      paragraph9.innerText = "Ang manlalaro ay may 60 segundo upang mahanap ang lahat ng salita sa loob ng kahon.";
      button.innerHTML = "Isasalin";
    } else if (text9 === "Ang manlalaro ay may 60 segundo upang mahanap ang lahat ng salita sa loob ng kahon.") {
      // Translate from Tagalog to English
      paragraph9.innerText = "The player has 60 seconds to find all the words inside the box.";
      button.innerHTML = "Translate";
    }
  }
  // Close the modal when user clicks outside of it
  window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
      event.target.style.display = "none";
    }
  }
</script>

<script>
  let touchStartX = 0;
  let touchEndX = 0;
  let touchThreshold = 50; // Minimum swipe distance threshold

  // Function to handle touch start event
  function handleTouchStart(event) {
    touchStartX = event.touches[0].clientX;
  }

  // Function to handle touch move event
  function handleTouchMove(event, modalNumber) {
    touchEndX = event.touches[0].clientX;
    const diff = touchStartX - touchEndX;
    if (Math.abs(diff) > touchThreshold) { // Check if swipe distance exceeds threshold
      if (diff > 0) {
        nextSlide(modalNumber); // Swipe left
      } else {
        prevSlide(modalNumber); // Swipe right
      }
    }
  }

  // Add touch event listeners to the carousel container
  document.querySelectorAll('.carousel-container').forEach(function(container, index) {
    container.addEventListener('touchstart', function(event) {
      handleTouchStart(event);
    }, false);
    container.addEventListener('touchmove', function(event) {
      handleTouchMove(event, index + 1);
    }, false);
  });
  
  document.addEventListener('DOMContentLoaded', () => {
    var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
    if (disclaimer){
        disclaimer.remove();
    }
});
</script>


</body>
</html>
<!--SLIDE USING FINGER -->
