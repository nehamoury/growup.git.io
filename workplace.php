<!DOCTYPE html>
<?php
session_start();
?>
<head>
    
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>




    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Kaushan+Script&family=Yeseva+One&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <style>
        .navbar-brand {
            font-weight: bolder;
            font-family: 'Kaushan Script', cursive;
            text-shadow: 3px 1px 1px darkred;
            word-spacing: 20px;
            font-size: 55px;
            padding-left: 250px;
            padding-top: 40px;
        }

        .navbar {
            height: 80px;
            border-bottom: none;
            background-color: white;
        }

        .c {
            margin-left: 60px;
            font-size: 20px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 38px;
            color: blue;
            font-family: Times New Roman, Times, serif;

        }

        .nav {
            color: blue;
            margin-left: 250px;
        }

        .nav:hover {
            color: red;
        }

        .pic {
            margin-top: 80px;
            height: 300px;
            width: 300px;
            text-align: center;
            box-shadow: 5px 5px 20px black;
            border-radius: 50%;
            transition: 0.3s;
        }
        .pic:hover
        {
         
            margin-top: 80px;
            height: 315px;
            width: 315px;
            text-align: center;
            box-shadow: 5px 5px 20px black;
            border-radius: 50%; 
        }


      

        

        h3 {
            text-align: center;
            font-weight: bold;
        }




        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 1170px;
            margin: auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        ul {
            list-style: none;
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

        .nft {
            height: 200px;
            width: 700px;
            margin-top: 20px;          
            font-size: 20px;

        }

        .col-md-10 {
            height: 400px;
            text-align: center;
            margin-top: 50px;
            background-color: lightseagreen;
        }
        .col-md-4
        {
            text-align: center;
        }
        .col-md-6
        {
            text-align: center;
        }
        input[type=submit]:hover
        {
            background-color: #3e8e41;
            color: white;
            
        }

        .nj{font-weight:bolder; padding-top: 100px; font-size: 60px;text-shadow: 3px 1px 5px black;color: white;font-family: 'Koulen', cursive;letter-spacing: 8px;}

        .nk{color: white;font-size: 25px; text-align:center;font-family:Times New Roman, Times, serif;
                     text-shadow: 3px 1px 5px black;}

         @media(max-width:600px){
          .nj{font-size:40px}
          .nk{font-size:20px}

         }            
    </style>
</head>

<body>

    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#" style="color:black;">GROW UP.</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href=" #" class="c">HOME</a></li>
                        <li><a href="#" class="c">SERVICES</a></li>
                        <li><a href="#" class="c">ABOUT</a></li>
                        <li><a href="logout.php" class="c">LOGOUT</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- Background image -->
            <div class="p-5 text-center bg-image"
                style="background-image: url('https://leapintohope.org/wp-content/uploads/2019/10/children-at-school.jpg'); height: 500px;">

                <div class="mask" style="color:white;">
                    <div class="d-flex">
                        <div class="text-white" align="center">
                            <h1 class="nj mb-3">
                                GROW UP. TUTORIAL CLASSES</h1>

                            <p class="nk mb-3" style=" ">Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br>
                                Officia sit voluptate error beatae natus dolore, iste ullam provident expedita <br>
                                dicta maiores deserunt minus repudiandae dolorum architecto, nemo quasi cupiditate
                                distinctio!</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <h1 style="text-align:center;font-weight:bold; margin-top:80px; ;
            text-shadow: 3px 1px 5px red;font-size: 50px;">TEACHER TOOLS</h1>
    <div class="row">


        <div class="col-md-4"> <a href="student reg.php"> <img
                    src="https://th.bing.com/th/id/OIP.jIErZUwnIaf6Bto-PsDJugHaHa?pid=ImgDet&w=500&h=500&rs=1" class="pic"></a>
            <h3 style="border-bottom: 1px solid rgb(0, 0, 0);">ADD STUDENTS</h3>
        </div>
        <div class="col-md-4"> <a  href="addnote.php"> <img
                    src="https://static.vecteezy.com/system/resources/previews/000/504/617/original/notes-icon-design-vector.jpg"
                    class="pic"></a>
            <h3 style="border-bottom: 1px solid rgb(0, 0, 0);">ADD NOTES</h3>
        </div>
        <div class="col-md-4"> <a  href="attendance.php"> <img
                    src="https://qnt.com.co/wp-content/uploads/2019/01/Iconos-Qnt-instrucciones-03.png"
                    class="pic"></a>
            <h3 style="border-bottom: 1px solid rgb(0, 0, 0);">ATTENDANCE</h3>
        </div>
        <div class="col-md-6"> <a  href="add test.php"> <img
                    src="https://media.istockphoto.com/vectors/cute-education-icon-report-card-vector-id1010040034?k=6&m=1010040034&s=612x612&w=0&h=5IXArwYfdVP9ioeR9EQ0bXTftqJsdaJtsruXKZ6PfH4=" class="pic"></a>
            <h3 style="border-bottom: 1px solid rgb(0, 0, 0);">ADD TEST</h3>
        </div>
        <div class="col-md-6"> <a href="viewunreadchat.php"> <img
                    src="https://cdn.shopify.com/s/files/1/0455/4617/files/GIG_communication_copy.png?v=1627022639" class="pic"></a>
            <h3 style="border-bottom: 1px solid rgb(0, 0, 0);">CHAT</h3>
        </div>

    </div>
    <div class="row">
        <div class="col-md-1" style="background-color: lightseagreen;margin-top: 50px;"></div>
        <div class="col-md-10">
            <h1 style=" text-shadow: 3px 1px 1px darkred;word-spacing: 20px;
           
           font-size: 55px; font-family: 'Kaushan Script', cursive;">NOTIFICATION FOR STUDENTS</h1>
           <form method="post" action="notification.php">
            <input type="text" placeholder="GIVE NOTIFICATIONS TO STUDENTS" class="nft" name="notifi">
            <input type="submit" value="Send" style="height:50px;width:100px;font-weight:bold;font-size:20px; transition: 0.3s;" id="send">
        </form>
        </div>
        <div class="col-md-1"style="background-color: lightseagreen;margin-top: 50px;"></div>
    </div>

    <marquee behavior="alternate" scrollamount="10" style="font-size: 20px; font-weight: bolder; color: red; text-shadow: 1px 1px 1px rgb(224, 51, 51);">
.*WELCOME ADMIN &nbsp; &emsp;&emsp;* WELCOME ADMIN &nbsp;&nbsp; &emsp;&emsp;* WELCOME ADMIN &nbsp; &emsp;&emsp;*WELCOME ADMIN . </marquee>



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

<?php
if(isset($_SESSION['u'])==false)
{
    echo"<script>
    window.location='teacher.php'
    </script>";
}
?>
</body>

</html>