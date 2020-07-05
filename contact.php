<?php
require_once "Mail.php";

$from = "all4paws97@gmail.com";
$to = 'melissa.j.richards@btinternet.com';

$host = "ssl://smtp.gmail.com";
$port = "465";
$username = 'all4paws97@gmail.com';
$password = 'Melissajayne22';


$subject = "Contact form submitted from website";
$body = "Name: " . $_POST['name'] . "\r\n\r\n";
$body .= "Email: " . $_POST['email'] . "\r\n\r\n";
$body .= "Need: " .$_POST['need'] . "\r\n\r\n";
$body .= "Message: " . $_POST['message']; 

$okMessage = 'contact form successfully submitted. Thank you, I will get back to you soon!';

$errorMessage = 'There was an error while submitting the form. Please try again later';

$headers = array ('From' => $from, 'To' => $to,'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'port' => $port,
'auth' => true,
'username' => $username,
'password' => $password));

$mail = $smtp->send($to, $headers, $body);
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>thank-you</title>
    </head>
<body>
     <nav class="navbar navbar-expand-md">
    <img class="navbar-brand" src="https://drive.google.com/thumbnail?id=1cd0BjyOIh0t04kWXBz9TECwhwuKMkQl8" width="10%">
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="main-navigation">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="#">Personal Training</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="#">Tips</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
    <header class="page-header header container-fluid" id="about">
    <div class="overlay" id="about-overlay"></div>
         <div class="container section-about">
    <?php if (PEAR::isError($mail)) {
    echo($mail->getMessage());
        } else { ?>
    <h2>Thank You!</h2>
    <p>Your message has been sent</p>
    <p>We aim to reply within 24 hours</p>
    <img src="https://drive.google.com/uc?id=1deqqHnAmdUfRe2v2l-Q1QrReBG1hQgq9" width="440" height="370">
        <?php } ?>
        </div>
    </header>
   <div class="container features">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
        <h3 class="feature-title"><a href="boxing.html" class="feature-title">Boxercise Classes</a></h3>
            <img class="img-fluid" src="https://drive.google.com/thumbnail?id=1T2zATXCouTfm6fpjMabNh5TDu_vV848P" width="70%">
            <p>Want to get a sweat on without lifting any weights? Try on of our boxercise classes!</p>
            <a href="boxing.html">Click here for more info</a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
        <h3 class="feature-title"><a href="specials.html" class="feature-title">Specializations</a></h3>
            <img class="img-fluid" src="https://drive.google.com/thumbnail?id=1T2zATXCouTfm6fpjMabNh5TDu_vV848P" width="70%">
            <p>Skilled training in various specialisation groups</p>
            <a href="specials.html">Click here for more info</a>
        </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <p><i class="fa fa-map-marker fa-lg"></i>
                <span>Stoneworks Gymnasium Antrim</span><br>
                <span>Unit 2 Windmill Court</span>
                <span>Antrim BT41 2TX</span>
                </p>
                <p><i class="fa fa-envelope fa-lg"></i>
                <span>Email me at: </span>
                <span>melissa.j.richards@btinternet.com</span>
                </p>
                <p><i class="fa fa-mobile-phone fa-lg"></i>
                <span>Call me at: </span>
                <span>07526635172</span>
                </p>
              <a class="social" href="https://www.instagram.com/bfit_by_mj/?fbclid=IwAR2h0RRJ7ik71Hm26H0RUWhdmoif_udyEVhiDiZzVbHhx_wyAYHWLkBwZks" target="_blank"><i class="fa fa-instagram" id="insta"></i></a>
              <a class="social" href="https://www.facebook.com/BfitbyMJ/" target="_blank"><i class="fa fa-facebook" id="fb"></i></a>
            </div>
        </div>
    </div>
    <footer class="page-footer">
      <div class="footer-copyright text-center">&copy; 2020; BFit by MJ</div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="jsfile.js"></script>
</body>
</html>