<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    <title>Catch Match</title>
      <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">

</head>

<body class="body">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-center">
          <h5 class="modal-title modal-title-centered" id="exampleModalLabel">Catch Match</h5>
        </div>
        <div class="modal-body d-flex justify-content-center">
          <p>Congratulations!!<br>You Win...</p>
        </div>
        <div class="modal-footer">
          <a href="index.html"><button type="button" class="btn btn-primary">Back to Home</button></a> 
        </div>
      </div>
    </div>
  </div>

  <div class="progress progress-bar-vertical">
    <div class="progress-bar progress-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%;"> </div>
</div>


    <section class="memory-game">
        <div class="memory-card" data-framework="monica">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i1.jpg" alt="Monica" class="front-face"/>
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face"/>
        </div>

        <div class="memory-card" data-framework="monica">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i1.jpg" alt="Monica" class="front-face"/>
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face"/>
        </div>

        <div class="memory-card" data-framework="joey">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i2.jpg" alt="Joey" class="front-face"/>
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face"/>
        </div>

        <div class="memory-card" data-framework="joey">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i2.jpg" alt="Joey" class="front-face"/>
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face"/>
        </div>

        <div class="memory-card" data-framework="phoebe">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i3.jpg" alt="Phoebe" class="front-face"/>
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face"/>
        </div>

        <div class="memory-card" data-framework="phoebe">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i3.jpg" alt="Phoebe" class="front-face"/>
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face"/>
        </div>

        <div class="memory-card" data-framework="rachael">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i4.jpg" alt="Rachael" class="front-face"/>
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face"/>
        </div>

        <div class="memory-card" data-framework="rachael">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i4.jpg" alt="Rachael" class="front-face"/>
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face"/>
        </div>

        <div class="memory-card" data-framework="ross">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i5.jpg" alt="Ross" class="front-face"/>
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face"/>
        </div>

        <div class="memory-card" data-framework="ross">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i5.jpg" alt="Ross" class="front-face"/>
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face"/>
        </div>

        <div class="memory-card" data-framework="chandler">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i6.jpg" alt="Chandler" class="front-face"/>
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face"/>
        </div>

        <div class="memory-card" data-framework="chandler">
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/i6.jpg" alt="Chandler" class="front-face"/>
            <img src="images/<?php echo $_COOKIE['gettheme']; ?>/back-photo.jpg" alt="back" class="back-face"/>
        </div>
    </section>

    <p id="minutes" >00</p><p>:</p><p id="seconds">00</p>

    <script src="script.js"></script>
    <script type="text/javascript">
        var b = localStorage.getItem("theme");
        $(document).ready(function () {
          createCookie("gettheme", b);
          function createCookie(name, value)
          {
            document.cookie = escape(name) + "=" + escape(value) + "; path=/";
          };
        });
    


</script>

<script>var minutesLabel = document.getElementById("minutes");
      var secondsLabel = document.getElementById("seconds");
      var totalSeconds = 0;
      setInterval(setTime, 1000);
      
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
      }</script>

</body>
</html>
