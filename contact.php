<?php
 
if(isset($_POST['submit'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "admin@fabdj.co.uk";
 
    $email_subject = "New enquiry from fabdj.com";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['mail']) ||
        
        !isset($_POST['phoneno']) ||
 
        !isset($_POST['message'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['name']; // required
 
    $email_from = $_POST['mail']; // required
 
    $telephone = $_POST['phoneno']; // not required
 
    $comments = $_POST['message']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>






  <?php
 
}
 
?>
    <!DOCTYPE html>
    <!-- saved from url=(0040)http://bluelineilford.co.uk/fab/fab.html -->
    <html lang="en">

    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


      <title>Thank You - Fab Events And Dj London - The Best Asian Wedding Dj And Services available!</title>
      <meta name="generator" content="Bootply">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="Fab Events pride ourselves on being among the best Asian Wedding Dj And Services available!">
      <link href="./Fab Events And Dj London_files/bootstrap.min.css" rel="stylesheet">

      <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
      <link rel="apple-touch-icon" href="http://s.bootply.com/bootstrap/img/apple-touch-icon.png">
      <link rel="apple-touch-icon" sizes="72x72" href="http://s.bootply.com/bootstrap/img/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="http://s.bootply.com/bootstrap/img/apple-touch-icon-114x114.png">
      <link rel="stylesheet" href="http://bluelineilford.co.uk/fab/contact.css">











      <!-- CSS code from Bootply.com editor -->

      <style type="text/css">
        /* BOOTSTRAP 3.x GLOBAL STYLES
-------------------------------------------------- */

        body {
          padding-bottom: 40px;
          color: #5a5a5a;
        }



        /* CUSTOMIZE THE NAVBAR
-------------------------------------------------- */

        /* Special class on .container surrounding .navbar, used for positioning it into place. */

        .navbar-wrapper {
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          z-index: 10;
        }



        /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

        /* Carousel base class */

        .carousel {
          margin-bottom: 60px;
        }

        /* Since positioning the image, we need to help out the caption */

        .carousel-caption {
          z-index: 1;
        }

        /* Declare heights because of positioning of img element */

        .carousel .item {
          height: 400px;
          background-color: #555;
        }

        .carousel img {
          position: absolute;
          top: 0;
          left: 0;
          min-height: 400px;
        }



        /* MARKETING CONTENT
-------------------------------------------------- */

        /* Pad the edges of the mobile views a bit */

        .marketing {
          padding-left: 15px;
          padding-right: 15px;
        }

        /* Center align the text within the three columns below the carousel */

        .marketing .col-lg-4 {
          text-align: center;
          margin-bottom: 20px;
        }

        .marketing h2 {
          font-weight: normal;
        }

        .marketing .col-lg-4 p {
          margin-left: 10px;
          margin-right: 10px;
        }


        /* Featurettes
------------------------- */

        .featurette-divider {
          margin: 80px 0;
          /* Space out the Bootstrap <hr> more */
        }

        .featurette {
          padding-top: 120px;
          /* Vertically center images part 1: add padding above and below text. */
          overflow: hidden;
          /* Vertically center images part 2: clear their floats. */
        }

        .featurette-image {
          margin-top: -120px;
          /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
        }

        /* Give some space on the sides of the floated elements so text doesn't run right into it. */

        .featurette-image.pull-left {
          margin-right: 40px;
        }

        .featurette-image.pull-right {
          margin-left: 40px;
        }

        /* Thin out the marketing headings */

        .featurette-heading {
          font-size: 50px;
          font-weight: 300;
          line-height: 1;
          letter-spacing: -1px;
        }



        /* RESPONSIVE CSS
-------------------------------------------------- */

        @media (min-width: 768px) {

          /* Remve the edge padding needed for mobile */
          .marketing {
            padding-left: 0;
            padding-right: 0;
          }

          /* Navbar positioning foo */
          .navbar-wrapper {
            margin-top: 20px;
            margin-bottom: -90px;
            /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
          }
          /* The navbar becomes detached from the top, so we round the corners */
          .navbar-wrapper .navbar {
            border-radius: 4px;
          }

          /* Bump up size of carousel content */
          .carousel-caption p {
            margin-bottom: 20px;
            font-size: 21px;
            line-height: 1.4;
          }

        }
      </style>
    </head>

    <!-- HTML code from Bootply.com editor -->

    <body>

      <div class="navbar-wrapper">
        <div class="container">
          <div class="navbar navbar-inverse navbar-static-top">

            <div class="navbar-header">
              <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <a class="navbar-brand" href="http://fabdj.co.uk">Fab Events</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li>
                  <a href="http://fabdj.co.uk">Home</a>
                </li>
                <li>
                  <a href="http://fabdj.co.uk/about.html">About</a>
                </li>
                <li>
                  <a href="http://fabdj.co.uk/gallery.html">Gallery</a>
                </li>
                <li class="active">
                  <a href="http://fabdj.co.uk/contact.html">Contact</a>
                </li>

              </ul>
            </div>

          </div>
        </div>
        <!-- /container -->
      </div>
      <!-- /navbar wrapper -->


      <!-- Carousel
================================================== -->
      <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="./Fab Events And Dj London_files/indian-dj-murder.jpg" style="width:100%" class="img-responsive">
            <div class="container">
              <div class="carousel-caption">
                <h1>FAB EVENTS</h1>
                <p></p>
                <p>
                  <a class="btn btn-lg btn-primary" href="http://fabdj.co.uk/about.html">Learn More</a>
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="./Fab Events And Dj London_files/slider-1.jpg" class="img-responsive">
            <div class="container">
              <div class="carousel-caption">
                <h1>FAB EVENTS</h1>
                <p>
                  <a class="btn btn-large btn-primary" href="http://fabdj.co.uk/about.html">Learn more</a>
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="./Fab Events And Dj London_files/how-to-become-a-dj-header-updated-final.jpg" class="img-responsive">
            <div class="container">
              <div class="carousel-caption">
                <h1>FAB EVENTS</h1>
                <p>
                  <a class="btn btn-large btn-primary" href="http://fabdj.co.uk/about.html">LEARN more</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="http://s.bootply.com/render/ErniW7HVND#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="http://s.bootply.com/render/ErniW7HVND#myCarousel" data-slide="next">
          <span class="icon-next"></span>
        </a>
      </div>
      <!-- /.carousel -->
      <div class="success">Thank you. A member of our Team will contact you back shortly</div>

      </div>
      <!-- /.container -->

      <footer>
        <p class="pull-right" style=" margin-top: 34px;">Copyright 2016 - Fab Events All rights reserved</p>
      </footer>

      <script async="" src="./Fab Events And Dj London_files/analytics.js"></script>
      <script async="" src="./Fab Events And Dj London_files/analytics(1).js"></script>
      <script type="text/javascript" src="./Fab Events And Dj London_files/jquery.min.js"></script>


      <script type="text/javascript" src="./Fab Events And Dj London_files/bootstrap.min.js"></script>







      <!-- JavaScript jQuery code from Bootply.com editor  -->

      <script type="text/javascript">
        $(document).ready(function () {



        });
      </script>

      <script>
        (function (i, s, o, g, r, a, m) {
          i['GoogleAnalyticsObject'] = r;
          i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
          }, i[r].l = 1 * new Date();
          a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
          a.async = 1;
          a.src = g;
          m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-40413119-1', 'bootply.com');
        ga('send', 'pageview');
      </script>



    </body>

    </html>