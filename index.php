<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Kevin Kranenburg">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>KevinKranenburg.nl</title>
</head>

<body>

    <div class="container">
    <img src="../afb/9798dcf6a285ee6151743fb4c5886b55.jpg" alt="blackwood" style="width:100%">
  <div class="centered"><h1>Welcome to my portfolio page!</h1></div>
  <a class="not-centered scroll-button" href="#section1">Take a look here</a>
  <div class="scroll-down"></div>
</div>

    
   
    <div id="section1"></div>
    <?php include 'header.php'; ?>

<!-- MAIN (Center website) -->
<div class="main">

<h2>ABOUT ME</h2><br><br>
<div id="about-text">
    <p>Hi! my name is Kevin Kranenburg.<br>
    Im a web-development student at MediaCollege Amsterdam.
    <br><br>
    I have work experience with different languages such as Javascript, PHP, CSS, and HTML.<br>
    Also, i like to work with Adobe programs such as Premiere, Xd, Photoshop and so on.<br><br>
    Working on front-end development, user-experience and web-design is what i enjoy doing the most.<br></p>
</div>
<img id="profiel-img" src="../afb/snap.png" alt="profiel"><br><br><br>
<hr>



<h2>SOCIALS</h2><br><br>
<div id="social-icons">
    <a href="https://twitter.com/KevinKranenburg" target="_blank" class="fa fa-twitter"></a>
    <a href="https://www.linkedin.com/in/kevin-kranenburg-536a3a171/" target="_blank" class="fa fa-linkedin"></a>
    <a href="#" class="fa fa-instagram"></a>
    <a href="https://old.reddit.com/r/pcmasterrace/" target="_blank" class="fa fa-reddit"></a>
    <a href="#" class="fa fa-snapchat-ghost"></a><br><br><br><br><br>
</div>



<hr>
<h2>PROJECTS</h2><br>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img id="project-img" src="../afb/hyvergram.png" alt="hyvergram" style="width:100%">
      <h3>Project thewall</h3>
      <p>In this project we worked as a team to create a social platform.</p>
      <a href="http://26301.hosts2.ma-cloud.nl/bewijzenmap/the_wall/test/timeline.php" target="_blank" class="button"><b>Check it out</b></a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img id="project-img" src="../afb/10408127_693779877421131_7125258102067123994_n-683x683.jpg" alt="carrally" style="width:100%">
      <h3>Project myband</h3>
      <p>In this project i made a site about car rally's that i like.</p>
      <br>
      <a href="http://25953.hosts2.ma-cloud.nl/bewijzenmap/periode1.3/proj/testcode/public/index.php" target="_blank" class="button"><b>Check it out</b></a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img id="project-img" src="../afb/fortcard.png" alt="fortcard" style="width:100%">
      <h3>Fortcard</h3>
      <p>In this project i made a cardgame in Fortnite style.</p>
      <br>
      <a href="http://25953.hosts2.ma-cloud.nl/bewijzenmap/periode1.1/proj/cardgame/" target="_blank" class="button"><b>Check it out</b></a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img id="project-img" src="../afb/rekengame.png" alt="reken" style="width:100%">
      <h3>Math game</h3>
      <p>In this project i made a math game with sound effects.</p>
      <br>
      <a href="http://25953.hosts2.ma-cloud.nl/bewijzenmap/periode1.1/pro1/reken/" target="_blank" class="button"><b>Check it out</b></a>
    </div>
  </div>
<!-- END GRID -->
</div>
<div class="content">
  <img src="/w3images/p3.jpg" alt="Bear" style="width:100%">
  <h3>Some Other Work</h3>
  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
</div><br><br>



<hr>
<h2>CONTACT</h2>

<div id="contact">
<form action="mailto:25953@ma-web.nl" method="post" enctype="text/plain">
Name:<br>
<input type="text" name="name" size="60" style="height:30px"><br>
E-mail:<br>
<input type="text" name="mail" size="60" style="height:30px"><br>
Message:<br>
<input type="text" name="comment" size="60" style="height:100px"><br><br>
<input id="submit-button" type="submit" value="Send">
<input id="reset-button" type="reset" value="Reset">
</form>
</div>


<!-- END MAIN -->
</div>

<?php include 'footer.php'; ?>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</html>
