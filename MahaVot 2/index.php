
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>MahaVot | Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Malar" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>

    

</body>



<body>

    <div class="header">
       <h1 class="text-muted"><img class="votepng" src="images/Vote-PNG.png" alt="Votting_png"> MahaVot Online Votting</h1>
    </div>
<!--    Navbar Starts Here-->
       <div class="container">
        <div class="sticky-top">
            <nav>
                <ul class="nav nav-justified">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="register.html">Register <i class="fa fa-registered" aria-hidden="true"></i></i></a></li>
                    <li><a href="help.html">Help <i class="fa fa-question-circle" aria-hidden="true"></i></a></li>
                    <li><a href="voteverification.html">Votting</a></li>
                    <li><a href="#">About</a></li>
           </nav>
           </div>
    </body>

<!-- carousal section starts here -->
        
          <div class="container row slidesCarousel">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide trans" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner trans trans" role="listbox">
                    <div class="item active">
                      <img src="images/Carousal/First.jpg" alt="Chania">
                    </div>

                    <div class="item">
                      <img src="images/Carousal/second.jpg" alt="Chania">
                    </div>

                    <div class="item">
                      <img src="images/Carousal/third.jpg" alt="Flower">
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>

        
<!--    Carousal ends Here-->

        <div class="jumbotron">
           <img src="images/voteingpng.png" alt="votting_hand"><br>
            <p>A man without a vote ... is like a man without a hand.</p>
<!--            <button class="btn btn-success btn-lg"><a href="register.html">Get Register</a></button>-->
           <form action="" method="POST" role="button">
               <input type="button" name="getreg" class="btn btn-lg btn-success" value="Get Register">
           </form>
        </div>

        <div class="container stepcontainer">
            <div class="row">
                <div class="col-md-4 step">
                   <img src="images/register.png" alt="">
                    <h4>Step 1 : Registration</h4>
                    <p>Register for Vote using Aadhar</p>
                </div>
                <div class="col-md-4 step">
                    <img src="images/verification.png" alt="">
                    <h4>Step 2 : Verification</h4>
                    <p>Verfication using Aadhar OTP</p>
                </div>
                <div class="col-md-4 step">
                    <img src="images/vote.png" alt="">
                    <h4>Step 3 : Vote for bright future</h4>
                    <p>Lets Vote for Best India</p>
                </div>
            </div>
        </div>


        <footer>
            <p>Posted by : WebHat</p>
            <p>Copyright &copy; WebHat 2018</p>
            <p>Designed and Coded in India <i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
        </footer>
</html>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    

