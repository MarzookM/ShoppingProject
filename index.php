<?php
$pageTitle = "Home";
include "view-header.php";
?> 
<style>
    body {
        margin: 0;
        overflow: hidden;
        background-color: black;
    }

    video {
        width: 100vw;
        height: 100vh;
        object-fit: cover;
    }
</style>
</head>
<body>
 
    <video id="welcomeVideo" controls autoplay loop>
        <source src="WelcomeVid.mp4" type="video/mp4">
    </video>

 
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
