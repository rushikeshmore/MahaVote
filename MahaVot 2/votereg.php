<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MahaVot | Vote Registration Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Malar" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <?php
    include "db.php";
    if(isset($_POST["submit"]))
    {
        $a=$_POST["text1"];
         $b=$_POST["text2"];
         $c=$_POST["text3"];
         $d=$_POST["text4"];
         $e=$_POST["text5"];
         $f=$_POST["text6"];
         $g=$_POST["text7"];
        $h=$_POST["text8"];
        $i=$_POST["text"];
        $j=$_POST["date"];
        $k=$_POST{"radio"};
        
        $sql="insert into `user`(`u_id`,`name`,`f_name`,`addr`,`current_city`,`email`,`password`,`m_no`,`adhar_no`,'dob',`gender`) values (NULL,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j');";
            
    }
    ?>

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
                    <li><a href="#">Help <i class="fa fa-question-circle" aria-hidden="true"></i></a></li>
                    <li><a href="voteverification.html">Votting</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
        </div>

        <form class="votereg container1" action="register.php">
          <h1>Enter Your Votting Card Details</h1>
          <hr>
            <div class="votereg">
                <input class="inputs" type="text1" id="Name" placeholder=" Enter full name"><span id="fullNameMsg" class="star"> *</span>
            </div>
            <div class="votereg">
                <input class="inputs" type="text2" id="fullName" placeholder=" Father's Full Name"><span class="star" id="fatherNameMsg"> *</span>
            </div>
            <div class="votereg">
                <input class="inputs" type="text3" id="addr" placeholder=" Address"><span class="star"> *</span>
            </div>
            <div class="votereg">
                <input class="inputs" type="text4" id="current_city" placeholder=" current city"><span class="star"> *</span>
            </div>
            <div class="votereg">
                <input class="inputs" type="text5" id="email" placeholder=" email"><span class="star"> *</span>
            </div>
            <div class="votereg">
                <input class="inputs" type="text6" id="password" placeholder=" password"><span class="star"> *</span>
            </div>
            <div class="votereg">
                <input class="inputs" type="text7" id="m_no" placeholder=" mobile no"><span class="star"> *</span>
            </div>
               <div class="votereg">
                <input class="inputs" type="text8" id="adhar_no" placeholder=" adhar no"><span class="star"> *</span>
            </div>
               <div class="votereg">
                <input class="inputs" type="text9" id="pan_no" placeholder=" pan no"><span class="star"> *</span>
            </div>
                <label class="fsize" for="gender">Date of Birth </label>
            <div class="votereg">
                <input class="inputs" type="date" id="dob" placeholder=" Date of Birth"><span class="star"> *</span>
            </div>
            <div class="votereg">
                <label class="fsize" for="gender">Gender :
                    <div class="checkbox inputs">
                     <label><input type="radio" value="male"> Male</label>
                     </div>
                     <div class="checkbox">
                     <label><input type="radio" value="female"> Female</label>
                     </div>
                </label>
            </div>
            <button class="btn btn-primary" onclick="regDetail()"><a href="#">Submit</a></button>
        </form>


        <footer>
            <p>Posted by : WebHat</p>
            <p>Copyright &copy; WebHat 2018</p>
            <p>Designed and Coded in India <i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
        </footer>
    </div>
    <script src="js/aadharnoverify.js"></script>
</body>
</html>
