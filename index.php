<?php
$pageTitle = "Home";
include "view-header.php";
?> 
<style>
        body {
            margin: 0;
            overflow: hidden;
        }

        video {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <!-- Embedding the video element -->
    <video id="welcomeVideo" controls autoplay loop>
        <source src="WelcomeVid.mp4" type="video/mp4">
       
    </video>

    <!-- Include your JavaScript code -->
    <script>
        document.getElementById('welcomeVideo').addEventListener('ended', function () {
            this.currentTime = 0;
            this.play();
        });

        document.getElementById('welcomeVideo').play();
    </script>
<?php
include "view-footer.php";
?> 
