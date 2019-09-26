<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Eddie Ozuna Portfolio" />
  <title>Eddie Ozuna</title>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="./img/face.ico" type="image/x-icon" />
</head>

<body>
  <section id="home">
    <div class="container">
      <header>
        <img src="./img/logo.svg" alt="EO logo" class="logo">
        <nav>
          <div class="hide-desktop">
            <img src="./img/hamburger.svg" alt="toggle-menu" class="menu" id="menu">
          </div>

          <ul class="show-desktop hide-mobile" id="nav">
            <li id="exit" class="exit-btn hide-desktop"><img src="./img/exit.svg" alt="exit menu"></li>
            <li class="nav-li"><img class="hide-desktop" src="./img/home.png" alt=""><a href="#home" class="home-btn">Home</a></li>
            <li class="nav-li"><img class="hide-desktop" src="./img/suitcase.png" alt=""><a href="#portfolio" class="portfolio-btn">Portfolio</a></li>
            <li class="nav-li"><img class="hide-desktop" src="./img/info.png" alt=""><a href="#about" class="about-btn">About</a></li>
            <li class="nav-li"><img class="hide-desktop" src="./img/envelope.png" alt=""><a href="#contact" class="contact-btn">Contact</a></li>
          </ul>
        </nav>
      </header>
      <h1 class="home-head">Software Engineer.</h1>
      <div class="social-img">
        <img src="./img/linkedin.png" alt="linkedin icon" class="in-icon linked-icon">
        <img src="./img/instagram.png" alt="instagram icon" class="ig-icon insta-icon">
        <img src="./img/github.png" alt="github icon" class="git-icon github-icon">
      </div>
      <p class="subhead">Eddie Ozuna </p>
      <a class="download" href="./resume/EddieOzunaResume.pdf" download><button class="resume-btn">Download
          Resume</button></a>

      <img src="./img/arrow.svg" alt="arrow button" class="arrow-img scroll arrow-btn hide-mobile">
    </div>
  </section>
  <section id="portfolio">
    <div class="container">
      <h1>Portfolio</h1>
      <div class="card-container">
        <div class="card">
          <img class="btn-one" src="./img/dema.png" alt="" style="width:100%">
          <div class="card-content">
            <h4><b>Hackathon Management</b></h4>
            <p>Management Platform</p>
            <button class="card-btn btn-one">View</button>
          </div>
        </div>
        <div class="card">
          <img class="btn-two" src="./img/alexa.gif" alt="" style="width:100%">
          <div class="card-content">
            <h4><b>BMCC Hub - Alexa app</b></h4>
            <p>Hackathon Winner</p>
            <button class="card-btn btn-two">View</button>
          </div>
        </div>
        <!-- 
        <div class="card">
          <img src="/img/clothing.jpg" alt="" style="width:100%">
          <div class="card-content">
            <h4><b>Clothing Store</b></h4>
            <p>Architect & Engineer</p>
            <button class="card-btn">View</button>
          </div>
          
      </div>
      -->
      </div>
    </div>
  </section>
  <section id="about">
    <div class="container">
    <h1>About me</h1>
      <div class="profile-container">
          <img src="./img/new.png" alt="" class="profile-pic">
        <div class="profile-content">
          <p>Hello, My name is Eddie Ozuna. I am a Software Engineer who loves to tackle interesting problems.
            Currently, I am pursuing my Bachelor Degree in Computer Science. My interests include Artificial Intelligence, Data Science, and Web development. I am open to collaborations, project work. My most recent collaboration took Best used of Amazon Alexa skill. Below I have listed the technologies I am most
            comfortable and familiar with.</p>
          <div class="about-icon">
            <div class="icon-container">
              <img src="./img/c++.png" alt="">
            <p>C++</p>
            </div>
            <div class="icon-container">
              <img src="./img/html.svg" alt="">
              <p>HTML</p>
            </div>
            <div class="icon-container">
              <img src="./img/css.png" alt="">
              <p>CSS</p>
            </div>
            <div class="icon-container">
              <img src="./img/js.svg" alt="">
              <p>Javascript</p>
            </div>
            <div class="icon-container">
              <img src="./img/python.svg" alt="">
              <p>Python</p>
            </div>
            <div class="icon-container">
              <img src="./img/sql.png" alt="">
              <p>MySql</p>
            </div>
            <div class="icon-container">
              <img src="./img/php.svg" alt="">
              <p>PHP</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact">
    <div class="contact-sec">
      <div class="container">
        <form action="" method="POST">
          <div class="form-container">
            <h1>Contact Me</h1>
            <div class="form-content">
              <label for="txt-name">Full name:</label>
              <input type="text" name="fullName" id="txt-name" placeholder="Full name" required>
            </div>
            <div class="form-content">
              <label for="txt-email">Email Address:</label>
              <input type="text" name="emailAddress" id="txt-email" placeholder="Email" required>
            </div>

            <div class=" form-content">
              <label>Message:</label>
              <textarea name="message" required></textarea>
            </div>
            <button class="message-btn" name="Submit">Send</button>
            <?php
               if (isset($_POST['Submit']))  {
                $admin_email = "admin@eddieozuna.com";
                $fullName = $_REQUEST['fullName'];
                $emailAddress = $_REQUEST['emailAddress'];
                $message = $_REQUEST['message'];
                mail($admin_email,"From " . $emailAddress,$message);
                echo'
                    <script>
                    window.onload = function() {
                    alert("Thank you for your message");
                    location.href = "https://www.eddieozuna.com";  
                                                }
                    </script>';
               }
                ?>
          </div>
        </form>
      </div>
    </div>
  </section>
  <footer>
    <div class=" footer-content">
      <p>&copy;Eddie Ozuna</p>
      <div class="footer-icon">
        <img src="./img/insta.svg" class="insta-icon" alt="">
        <img src="./img/git.svg" class="github-icon" alt="">
        <img src="./img/in.svg" class="linked-icon" alt="">
      </div>
    </div>
  </footer>
  <script src="./js/redirect.js"></script>
  <script src="./js/animation.js"></script>
</body>

</html>