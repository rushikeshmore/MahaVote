<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MahaVot | Register</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Malar" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    
    <div class="header">
       <h1 class="text-muted"><img class="votepng" src="images/Vote-PNG.png" alt="Votting_png"> MahaVot Online Votting</h1>
    </div>
<!--    Navbar Starts Here-->
       <div class="container">
        <div class="nav">
            <nav>
                <ul class="nav nav-justified">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="#">Register <i class="fa fa-registered" aria-hidden="true"></i></i></a></li>
                    <li><a href="help.html">Help <i class="fa fa-question-circle" aria-hidden="true"></i></a><li><a href="voteverification.html">Votting</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
        </div>
        
        <?php
    include "db.php";
    if(isset($_POST["submit"]))
    {
        $a=$_POST["text1"];
        
        $sql="insert into register(`r_no`,`adhar_no`) values(NULL,'$a');";
    }?>
       
       
        
        <footer>
            <p>Posted by : WebHat</p>
            <p>Copyright &copy; WebHat 2018</p>
            <p>Designed and Coded in India <i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
        </footer>        
    </div>
   
</body>
</html>