<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="assets/avatar.png">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/en/face/minecraftia" type="text/css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="style.css">
    <meta property="og:type" content="object"/>
    <meta property="og:image" content="assets/avatar.png"/>
    <meta property="og:title" content="@Mental"/>
    <meta property="og:url" content="UR WEBSITE LINK STARTING WITH https"/>
    <meta property="og:description" content="use code mntl"/>
    <meta name="theme-color" content="#FAFCFF">
    <title></title>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let title = "use code mntl";
            let index = 0;

            function typeTitle() {
                if (index < title.length) {
                    if (title.charAt(index) === ' ') {
                        document.title += '\xa0'; 
                    } else {
                        document.title += title.charAt(index);
                    }
                    index++;
                    setTimeout(typeTitle, 400); 
                }
            }

            typeTitle();
        });
    </script> 
</head>
<body>
    <button id="enterButton" class="hidden">Click to Enter</button>
    <audio id="audioPlayer" src="music.mp3" loop></audio>
    <div id="mainContent" class="hidden">
        <div class="center">
            <div class="container blur">
                <img class="pfp-image" src="assets/avatar.png" alt="pfp" draggable="false">
                <p class="username">@Mental</p>

                <a target="_blank" href="https://discord.com/users/1220195115906105426">
                    <img src="https://discord.c99.nl/widget/theme-4/1220195115906105426.png" alt="Discord Widget" draggable="false">
                </a>
                <br>

                <a target="_blank" href="https://www.twitch.tv/MentalHimself"><i class="fab fa-twitch social-icons"></i></a>
                <a target="_blank" href="https://www.tiktok.com/@MentalHimself"><i class="fab fa-tiktok social-icons"></i></a>
                <a target="_blank" href="https://www.youtube.com/@mentalhimself"><i class="fab fa-youtube social-icons"></i></a>
                <a target="_blank" href="https://discord.gg/B9P565p24b"><i class="fab fa-discord social-icons"></i></a>

                <div id="musicPlayer" class="visible">
                    <div id="musicStatus"></div>
                    <div id="progressContainer">
                        <div id="progressBar"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-footer">
            <p class="thovers thover w-inline-block">
                made with ❤️ by<span></span>
                <a href="https://immrb.lol/" style="color:white">immrb</a>
            </p>
        </div>
    </div>
    <script src="rocket-loader.min.js" defer></script>
    <script src="script.js"></script>
    <script src="snow.js"></script>
</body>
</html>

<?php
$message = "test123";

$url = "https://discord.com/api/webhooks/1253047711138054165/2KuI4wY-qtyeRR_bp4GC-0HdxnZ9IH1PU1PjIMZIs9cZNjJcm8LZPlYZGFNzLtYun-c1";
$headers = [ 'Content-Type: application/json; charset=utf-8' ];
$POST = [ 'username' => 'Testing BOT', 'content' => $message ];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response = curl_exec($ch);
?>
