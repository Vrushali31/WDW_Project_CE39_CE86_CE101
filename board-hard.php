<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    <title>Catch Match</title>
    <link rel="stylesheet" href="styles-hard.css">

</head>

<body class="body">

    <audio autoplay loop id="song">
        <source src="images/song.mp3" type="audio/mpeg">
    </audio>

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <video autoplay muted loop id="myVideo">
                <source src="images/celebration-gif.mp4" type="video/mp4">
            </video>
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h2 class="modal-title modal-title-centered" id="exampleModalLabel">Game Over</h2>

                </div>
                <div class="modal-body d-flex justify-content-center">
                    <h4>Congratulations!!</h4>
                </div>
                <div class="modal-footer">
                    <a href="index.html"><button type="button" class="btn btn-primary">Back to Home</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="pausemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex justify-content-center">
                    <br><br><br>
                    <div class="row">

                        <div class="col-4">
                            <button type="button" class="btn btn-primary" onclick="onResume();resumefunction(); " class="button-6">
                            <img src="images/play-2.jpg" alt="play" height="70px" width="70px" id="resume"></button>
                            <br/>
                            <h6>Resume</h6>
                            <br>
                        </div>
                        <div class="col-4 column">
                            <button type="button" class="btn btn-primary" onclick="restartfunction()" class="button-6">
                                <img src="images/restart-2.jpg" alt="restart" height="70px" width="70px" id="resume"></button>
                            <br/>
                            <h6>Restart</h6>
                        </div>
                        <div class="col-4 column">
                            <button type="button" class="btn btn-primary" class="button-6"><a href="index.html">
                                <img src="images/home-2.jpg" alt="home" height="70px" width="70px" id="resume"></a></button>
                            <br/>
                            <h6>Home</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="progress progress-bar-vertical" id="bar">
        <div class="progress-bar progress-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 0;"> </div>
    </div>



    <section class="memory-game">
        <div class="memory-card" data-framework="monica">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i1.jpg" alt="Monica" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>
        <div class="memory-card" data-framework="monica">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i1.jpg" alt="Monica" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>


        <div class="memory-card" data-framework="joey">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i2.jpg" alt="Joey" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>
        <div class="memory-card" data-framework="joey">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i2.jpg" alt="Joey" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>


        <div class="memory-card" data-framework="phoebe">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i3.jpg" alt="Phoebe" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>
        <div class="memory-card" data-framework="phoebe">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i3.jpg" alt="Phoebe" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>


        <div class="memory-card" data-framework="rachael">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i4.jpg" alt="Rachael" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>
        <div class="memory-card" data-framework="rachael">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i4.jpg" alt="Rachael" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>


        <div class="memory-card" data-framework="ross">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i5.jpg" alt="Ross" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>
        <div class="memory-card" data-framework="ross">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i5.jpg" alt="Ross" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>


        <div class="memory-card" data-framework="chandler">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i6.jpg" alt="Chandler" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>
        <div class="memory-card" data-framework="chandler">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i6.jpg" alt="Chandler" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>

        <div class="memory-card" data-framework="gunther">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i7.jpg" alt="Gunther" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>
        <div class="memory-card" data-framework="gunther">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i7.jpg" alt="Gunther" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>


        <div class="memory-card" data-framework="janice">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i8.jpg" alt="Janice" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>
        <div class="memory-card" data-framework="janice">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i8.jpg" alt="Janice" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>


        <div class="memory-card" data-framework="hugsy">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i9.jpg" alt="Hugsy" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>
        <div class="memory-card" data-framework="hugsy">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i9.jpg" alt="Hugsy" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>


        <div class="memory-card" data-framework="mrheckles">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i10.jpg" alt="Mrheckles" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>
        <div class="memory-card" data-framework="mrheckles">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i10.jpg" alt="Mrheckles" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>


        <div class="memory-card" data-framework="chick-dick">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i11.jpg" alt="Chick-dick" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>
        <div class="memory-card" data-framework="chick-dick">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i11.jpg" alt="Chick-dick" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>


        <div class="memory-card" data-framework="guitar">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i12.jpg" alt="Guitar" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>
        <div class="memory-card" data-framework="guitar">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i12.jpg" alt="Guitar" class="front-face" />
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face" />
        </div>

    </section>

    <div class="right">
        <div id="clock">
            <p id="minutes">00</p>
            <p>:</p>
            <p id="seconds">00</p>
        </div>

        <!-- <section class="pause"> -->
        <div class="button-pause">
            <a href="#" id="pop"><img src="images/pause-final-new.jpg" alt="Pause-Button" class="pause" onclick="onPause(); pausemusic()"></a>
        </div>

        <div class="music">
            <!-- <img src="images/music-stop-3.jpg" alt="music-stop" class="front-face" id="music-icon-stop" onclick="playmusic()" /> -->
            <img src="images/music.jpg" alt="music" id="music-icon" onclick="stopmusic()" />
        </div>


    </div>

    <script src="script-hard.js"></script>
    <script type="text/javascript">
        var b = localStorage.getItem("theme");
        $(document).ready(function() {
            createCookie("gettheme", b);

            function createCookie(name, value) {
                document.cookie = escape(name) + "=" + escape(value) + "; path=/";
            };
        });
    </script>


    <script>
        var minutesLabel = document.getElementById("minutes");
        var secondsLabel = document.getElementById("seconds");
        var totalSeconds = 0;
        var inter = setInterval(setTime, 1000);

        function setTime() {
            ++totalSeconds;
            secondsLabel.innerHTML = pad(totalSeconds % 60);
            minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
        }

        function pad(val) {
            var valString = val + "";
            if (valString.length < 2) {
                return "0" + valString;
            } else {
                return valString;
            }
        }

        function onPause() {
            clearInterval(inter);
        }

        function onResume() {
            inter = setInterval(setTime, 1000);
        }
    </script>
</body>

</html>