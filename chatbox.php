<!DOCTYPE html>
<?php
session_start();

$s=$_GET["s"];
?>
<head>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Kaushan+Script&family=Yeseva+One&display=swap"rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">


<script src="jquery-3.7.0.mini.js"></script>


 <style>
          body {
            color: black;

        }

        .table td {
            border: none !important;
            border-right: solid 1px #ccc
        }

        .table th {
            border: none !important;
            border-right: solid 1px #ccc;

        }

        .table {
            margin-top: 40px;
            text-align: center;
            font-family: "Times New Roman", Times, serif;
            font-size: 18px;
            margin-left:50px;
            font-weight: bold;
        }

        
         h1 {
            text-align: center;
            font-family: 'Kaushan Script', cursive;
            font-weight: bolder;

            text-shadow: 3px 1px 1px darkred;
        }
        

        .form-control {
            background: transparent;
            border-radius: 50px;


        }

        .btn {
            height: 50px;
            width: 150px;
            margin-top: 10px;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
            color: white;
            font-weight: bold;
            font-size: 15px;
            border: 2px white;
          
        }

        .btn:hover {
            background: rgb(131, 58, 180);
            background: linear-gradient(90deg, rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);
        }

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

        .pic:hover {

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

        .nj {
            font-weight: bolder;
            padding-top: 100px;
            font-size: 60px;
            text-shadow: 3px 1px 5px black;
            color: white;
            font-family: 'Koulen', cursive;
            letter-spacing: 8px;
        }

        .nk {
            color: white;
            font-size: 25px;
            text-align: center;
            font-family: Times New Roman, Times, serif;
            text-shadow: 3px 1px 5px black;
        }

       

.main {
width: 700px;
height: 600px;
margin: 0 auto;
margin-top: 50px;
background-color: transparent;
border-radius: 5px;
 
padding: 20px;
color: white;
}

.y {
height: 300px;
width: 450px;
border: 1px solid black;
box-shadow: 5px 4px 10px black;
color:black;
font-size: 18px;
text-shadow: 2px 2px 10px green;
padding-left: 50px;
overflow: scroll;
background-image: url(chat.jpg);
background-size: 450px 250px;
margin-top: 20px;


}

.down {
height: 200px;
width: 400px;
float: left;
}

.left {
float: left;
height: 200px;
width: 200px;
}

input[type="text"] {
margin-top: 50px;
width: 400px;
height: 120px;
border: 1px solid black;
box-shadow: 5px 4px 10px black;
padding-bottom: 90px;

}

input[type="button"] {
height: 60px;
margin-top: 80px;
width: 150px;
margin-left: 30px;
box-shadow: 5px 4px 10px black;
font-size: 20px;
font-weight: bold;
background-color: #4CAF50;
font-family: Papyrus;
}

input[type="button"]:hover {
background-color: #45a049;
}

h1 {
text-align: center;
font-family: Papyrus;
-webkit-text-stroke: 0.1px yellow;

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
                    <li><a href="workplace.php" class="c">BACK</a></li>
                        <li><a href="starting.php" class="c">HOME</a></li>
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
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="body">
    <div class="main">
        <h1>GAP-SUPP !</h1>
        <div class="y"> </div>

        <div class="down">
            <input type="text" id="p1" placeholder="WRITE YOUR MASSAGE HERE..! ">
        </div>
        <div class="left">
            <input type="button" value="SEND" id="b2">
        </div>

    </div>
   </div>
    <div class="col-md-3"></div>

<input type="hidden" value="<?php echo $s?>" id="p9">


</div>
</body>
<?php
    if (isset($_SESSION['u']) == false) {
        echo "<script>
    window.location='teacher.php'
    </script>";
    }
    $a = $_SESSION['u'];

    ?>
    <?php





    ?>

<script>
 

 
 $(document).ready(function(){
   setInterval(function() {
     $.post('show chat.php',{k1:$("#p9").val()},function(data){
       $(".y").html(data)
     });
   },1000);
   
   $("#b2").click(function(){  
        
       $.post('backend.php',{k1:$("#p1").val(),k2:$("#p9").val()},function(data){
         alert(data);
    
   });
   });
 });
 </script>
 </div>
 <div>
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

</div>

 