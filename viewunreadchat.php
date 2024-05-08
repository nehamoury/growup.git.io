
<!DOCTYPE html>
<head>
<?php
  session_start();
  ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Kaushan+Script&family=Yeseva+One&display=swap"
        rel="stylesheet">

    <style>
        .navbar-brand {
            font-weight: bolder;
            font-family: 'Kaushan Script', cursive;
            text-shadow: 3px 1px 1px darkred;
            word-spacing: 20px;
            font-size: 55px;
            padding-left: 20px;
            padding-top: 20px;

        }

        .navbar {

            background-color: #fde3e9;
            background: transparent;
            border-bottom: none;
        }

        h1 {
            margin-top: 50px;
        }

        .c {
            margin-left: 60px;
            font-size: 20px;

            margin-top: 10px;

            border-radius: 0;
            background-color: ;
            font-family: Times New Roman, Times, serif;

        }

        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: black;
        }

        h2 {
            font-size: 40px;


            font-weight: bolder;

            text-align: center;
        }

        .jumbotron {
            background-image: url("https://edindia.org/wp-content/uploads/2023/02/fxg.jpg");

            color: black;
            opacity: 1.0;
            background-position: center;
            /* Center the image */
            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: cover;
        }

        .jumbotron {
            background-color: white;
            padding: 100px 15px;
            font-family: Montserrat, sans-serif;
            opacity: 1.0;
        }

        .container {
            
            padding-right: 80px;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
        }


        .footer {
            background-color: #24262b;
            padding: 70px 0;
           
        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
        }

        .footer-col h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: -box;
            width: 50px;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 8px;
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: #000000;
            background-color: #ffffff;
        }

        /*responsive*/
        @media(max-width: 767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
            }
        }

        @media(max-width: 574px) {
            .footer-col {
                width: 100%;
            }
        }
        .x{
      width:200px;
      height:200px;
      background-color:white;
      background:Transparent;
      
      font-variant: small-caps;

    }
    .chat
    {
    letter-spacing: 10px;
     font-size: 20px;
    font-weight: bold;
   width: 100%;
   height: 250px;
    }

     

    
    </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar">
        <div class="container1">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#myPage" style="color:black;">GROW UP.</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="growup page.php" class="c">Home</a></li>
                    <li><a href="#about" class="c">About</a></li>

                    <li><a href="#services" class="c"> Services</a></li>

                    <li><a href="#contact" class="c">Contact</a></li>
                    <li><a href="#" class="c">LogOut</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron text-center">
        <h1 style="color:white;"> GROW UP. TUTORIAL CLASSES</h1>
        <p style="font-weight: bolder; color:white">"Empowering Dreams Through Knowledge: Unleashing Your Potential at
            Our Coaching Institute.
            Join us to embark on a transformative learning journey guided by expert mentors and innovative teaching
            techniques</p>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <h2>ALL CHATS</h2>
        </div>
    </div>
    <br>
    <br>
<div class="chat">
   <ul>
<?php
 
    $u=$_SESSION['u'];
    $con=mysqli_connect("localhost","root","","growup");

   $jj="select distinct sendby from chat where sentto='$u'";
   $jj2=mysqli_query($con,$jj);

   while($jj3=mysqli_fetch_array($jj2)){
$name=$jj3["sendby"];
echo"<li><a href='chatbox.php?s=$name'>$name</a></li>";

   }
?>
</ul>
</div>


<footer class="footer">
    <div class="container">
     <div class="row">
       <div class="footer-col">
         <h4>company</h4>
         <ul>
           <li><a href="#">about us</a></li>
           <li><a href="#">our services</a></li>
           <li><a href="#">privacy policy</a></li>
           <li><a href="#">affiliate program</a></li>
         </ul>
       </div>
       <div class="footer-col">
         <h4>get help</h4>
         <ul>
           <li><a href="#">FAQ</a></li>
           <li><a href="#">conditions</a></li>
           <li><a href="#">works</a></li>
           <li><a href="#">experince</a></li>
           <li><a href="#">payment options</a></li>
         </ul>
       </div>
       <div class="footer-col">
         <h4>extra courses</h4>
         <ul>
           <li><a href="#">c++</a></li>
           <li><a href="#">css</a></li>
           <li><a href="#">html</a></li>
           <li><a href="#">java</a></li>
         </ul>
       </div>
       <div class="footer-col">
         <h4>follow us</h4>
         <div class="social-links">
           <a href="#"><i class="fab fa-facebook-f"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
           <a href="#"><i class="fab fa-linkedin-in"></i></a>
         </div>
       </div>
     </div>
    </div>
 </footer> 

</body>
</html>