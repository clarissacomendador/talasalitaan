<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Navigation Bar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css" />
    <style>

        .typewriter p {
            opacity: 0;
            transition: opacity 2s;
        }
        
        .typewriter p.visible {
            opacity: 1;
        }
        #main p{
            color: white;
            font-size: 15px;
        }
    </style>
    <script>
      if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
          navigator.serviceWorker.register('/service-worker.js')
            .then(registration => {
              console.log('Service worker registered:', registration);
            })
            .catch(error => {
              console.error('Service worker registration failed:', error);
            });
        });
      }
    </script>
</head>
<body>
    <section id="main">
        <img class="main-logo" src="img/logo-splash-screen.png" alt="logo"> 
        <div class="typewriter">
            <h1 style="text-align:center">TALASALITAAN</h1>
            <p id="subtext">An Android based Filipino Vocabulary Learning Application</p>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const subtext = document.getElementById('subtext');
            setTimeout(() => {
                subtext.classList.add('visible');
            }, 2000); // 3.5 seconds to match the typing animation duration
        });

        // Removing the disclaimer if it exists
        document.addEventListener('DOMContentLoaded', () => {
            const disclaimer = document.querySelector("img[alt='www.000webhost.com']");
            if (disclaimer) {
                disclaimer.remove();
            }
        });

        // Redirect to login page after a delay
        setTimeout(() => {
            window.location.href = "login.php";
        }, 5000);
    </script>
</body>
</html>
