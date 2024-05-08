<!DOCTYPE html>
<html lang="en">

<head>
      
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen"/>



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Kaushan+Script&family=Yeseva+One&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <script type="text/javascript">
      $(document).ready(function() {
  
          $('a.fancybox').fancybox({
     type: "iframe"
  });
  
      });
  </script>
    <style>

        * {
            margin: 0px;
        }

        .header {
            height: 100px;
            width: 100%;
        }

        .head {
            font-size: 55px;
            color: black;
            padding-left: 250px;
            padding-top: 10px;
            font-weight: bolder;
            font-family: 'Kaushan Script', cursive;
            text-shadow: 3px 1px 1px rgb(90, 90, 90);
            word-spacing: 20px;
            
        }

        .content {
            width: 100%;
            height: 500px;

        }

        .img {
            width: 100%;
            height: 500px;
            position: relative;

        }

        .pic {
            width: 100%;
            height: 500px;
            object-fit: cover;


        }

        .h1 {

            position: absolute;
            top: 100px;
            left: 250px;
            font-size: 60px;
            text-shadow: 3px 1px 5px black;
            color: white;
            font-family: 'Koulen', cursive;
            letter-spacing: 8px;
        }

        .p1 {
            position: absolute;
            top: 200px;
            left: 250px;
            color: white;
            font-size: 25px;
            text-shadow: 3px 1px 5px black;
        }

        .side1 {
            width: 50%;
            height: 100px;
            float: left;
        }

        .lnk {
            width: 50%;
            height: 50px;
            float: left;
            margin-top: 40px;

        }

        .c {
            padding-left: 100px;
            font-size: 20px;
            text-decoration: none;
            font-weight: bold;


        }

        a:hover {
            color: red;
            text-decoration: underline;

        }

        .text {
            height: 500px;
            width: 100%;
            text-align: center;
            font-size: 30px;
        }

        .h2 {
            padding-top: 90px;
            text-decoration: underline solid rgb(127, 0, 0);
            text-underline-offset: 30px;


        }

        .caption {
            padding-top: 80px;
            font-size: 25px;
        }

        .box {

            height: 400px;
            width: 100%;
            background-color: rgb(45, 92, 211);
            
        }

        .teacher {
            height: 300px;
            width: 300px;
            background-color: rgb(67, 185, 34);
            float: left;
            margin-left: 27%;
            margin-top: 80px;
            border-radius: 50%;
        }

        .student {
            height: 300px;
            width: 300px;
            background-color: rgb(99, 21, 21);
            float: left;
            margin-left: 50px;
            margin-top: 80px;
            border-radius: 50%;

        }

        .btn {
            height: 300px;
            width: 300px;
            border-radius: 50%;
        }
        .login
        {
            margin-right: 280px;
            height: 50PX;
        }
        h5:hover
        {
            color: rgb(255, 254, 254);
        }
    
*{
  margin:0;
  padding:0;
  box-sizing: border-box;
}
.container{
  max-width: 1170px;
  margin:auto;
}
.row{
  display: flex;
  flex-wrap: wrap;
}
ul{
  list-style: none;
}
.footer{
  background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
  font-size: 18px;
  color: #ffffff;
  text-transform: capitalize;
  margin-bottom: 35px;
  font-weight: 500;
  position: relative;
}
.footer-col h4::before{
  content: '';
  position: absolute;
  left:0;
  bottom: -10px;
  background-color: #e91e63;
  height: 2px;
  box-sizing: -box;
  width: 50px;
}
.footer-col ul li:not(:last-child){
  margin-bottom: 10px;
}
.footer-col ul li a{
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
  font-weight: 300;
  color: #bbbbbb;
  display: block;
  transition: all 0.3s ease;
}
.footer-col ul li a:hover{
  color: #ffffff;
  padding-left: 8px;
}
.footer-col .social-links a{
  display: inline-block;
  height: 40px;
  width: 40px;
  background-color: rgba(255,255,255,0.2);
  margin:0 10px 10px 0;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
  color: #000000;
  background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
} 
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}


   
    </style>
</head>

<body>
    <div class="header">
        <div class="side1">
            <h1 class="head">GROW UP.</h1>
        </div>
        <div class="lnk">

            <a href="#" class="c">HOME</a>
            <a href="#"class="c">SERVICES</a>
            <a href="#"class="c">ABOUT</a>
            <a href="#"class="c">CONTACT</a>

        </div>
    </div>
    <div class="content">
        <div class="img">
            <img src="https://leapintohope.org/wp-content/uploads/2019/10/children-at-school.jpg" class="pic">
            <h1 class="h1">GROW UP. TUTORIAL CLASSES</h1>
            <p class="p1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br>
                Officia sit voluptate error beatae natus dolore, iste ullam provident expedita <br>
                dicta maiores deserunt minus repudiandae dolorum architecto, nemo quasi cupiditate distinctio! </p>
                
        </div>
    </div>
    <div class="text">
        <h1 class="h2">Strategies for Success</h1>
        <p class="caption">Lorem ipsum dolor sit amet consectetur adipisicing elit.and i am happy with all this things
            <br>
            Harum ratione quam ullam assumenda labore unde, corporis illum fuga deleniti don't feel bad dear<br>
            alias error consectetur sequi explicabo, nulla beatae nostrum, consequatur dicta iusto you are going to be
            happy soon.</p>
            

        <div class="teacher"> 
          <a class="fancybox fancybox.iframe" href="teacher.php"><img src="teacher.png" class="btn"> </a>
          <script type="text/javascript">
            $(document).ready(function() {
        
                $('a.fancybox').fancybox({
                  'width':550,
                  'height':350,
                  'padding' : 0,

                 
                  
           type: "iframe"
        });
        
            });
        </script>
              <h5 style="border-bottom: 1px solid black; ">TEACHER LOGIN </h5>
        </div>

        <div class="student">
                
          <a class="fancybox fancybox.iframe" href="student.php"><img src="https://png.pngtree.com/png-vector/20190217/ourmid/pngtree-vector-female-student-icon-png-image_558802.jpg"
                class="btn"></a>
                <h5 style="border-bottom: 1px solid rgb(0, 0, 0);">STUDENT LOGIN</h5>
        </div>
        
    </div>    

    <div class="box">
        
    </div>



<marquee behavior="alternate" scrollamount="10" style="font-size: 20px; font-weight: bolder; color: red; text-shadow: 1px 1px 1px rgb(224, 51, 51);">
.*JOIN US NOW FOR BEST FUTURE &nbsp; &emsp;&emsp;* JOIN US NOW FOR BEST FUTURE&nbsp; &emsp;&emsp;*JOIN US NOW FOR BEST FUTURE . </marquee>

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