


<?php
if(isset($_POST['submit']))
{
  $email =$_POST['email'];
  $ur = $_POST['ur'];
  $file = fopen("newlist.txt","a+") or die("file not open");

  $s= $email;
  $u = $ur;
  fputs($file,$s." ".$u."    ") or die("data not written");
  fclose($file);
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

Redirect('thanks1.html', false);

  /*http html response from server  
  generating html from php*/

}


?>




























<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Title -->
      <title>GLITCHEY: Play n Earn</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="20x20" href="logo2.png">
      <!--Bootstrap css-->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!--Magnific css-->
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
      <!--Animate css-->
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <!--Slicknav css-->
      <link rel="stylesheet" href="assets/css/slicknav.min.css">
      <!--Site Main Style css-->
  
             
            <link rel="stylesheet" href="assets/css/style2.css">

      <!--Responsive css-->
      <link rel="stylesheet" href="assets/css/responsive.css">
   </head>
   <body>
       
       
      <!-- Header Area Start -->
      <header class="filmoja-header-area">
          
         <!-- Header Top Area Start -->
         <div class="header-top-area">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-sm-4">
                     <div class="header-top-social">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                           <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-8">
                     <div class="header-top-menu">
                        <ul>
                           <li><a href="#"></a></li>
                           <li><a href="#"></a></li>
                           <li><a href="#"></a></li>
                           <li><a href="#">About</a></li>
                           <li><a href="register1.php">Register</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Header Top Area End -->
          
         <!-- Main Header Area Start -->
         <div class="main-header-area">
            <div class="container">
               <div class="row">
                  <div class="col-lg-2">
                     <div class="site-logo">
                        <a href="gaming.php">
                        <img src="logo.png" alt="logo" />
                        </a>
                     </div>
                     <!-- Responsive Menu Start -->
                     <div class="filmoja-responsive-menu"></div>
                     <!-- Responsive Menu End -->
                  </div>
                 
         <!-- Main Header Area End -->
          
      </header>
      <!-- Header Area End -->
      <!-- Header Area End -->
       
       
      <!-- Breadcrumb Area Start -->
      <section class="filmoja-breadcrumb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcrumb-box">
                     <h2>Register</h2>
                     <ul>
                        <li><a href="gaming.php">Home</a></li>
                        <li class="active-breadcromb">Register</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb Area End -->
       
       
      <!-- Login Area Start -->
      <section class="filmoja-login-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="auth-box-right">
                     <h3>rules</h3>
                     <div class="login-box">
                        <h4>WINNER WOULD NOT BE SELECTED ON THE BASIS OF YOUTUBE VIEWS/LIKES </h4>
                       <p> <h4>ONLY 1 ENTRY ALLOWED PER WEEK</h4></p>
                       <p><h4>WINNER WOULD RECIEVE EMAIL AND HIS VIDEO WOULD BE DISPLAYED AT THE TOP </h4></p>
                       <h4>CASH PRIZE WOULD BE SENT THROUGH PAYTM</h4>
                       <h6>ALL THE BEST !</h6>

                     
                       
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="auth-box-left margin-top">
                     <h3>Enter Details</h3>
                     <div class="login-box">
                        <form action="#" method="post">
                           <div class="row">
                             
                              <div class="col-lg-6">
                                 <p>
                                    <label for="Email">Email Address</label>
                                    <input type="email" name="email" id="Email" placeholder="Email">
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-6">
                                 <p>
                                    <label for="password">YouTube URL</label>
                                    <input type="text" name="ur" id="ur" placeholder="URL">
                                 </p>
                              </div>
                            
                           </div>
                           <div class="row">
                              <div class="col-md-12">

                              
                                 <p>
                                    <button type="submit" id="submit"  name="submit" value="SUBMIT">SUBMIT</button>
                                 </p>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Login Area End -->
       
       
      <!-- Footer Area Start -->
      <footer class="filmoja-footer-area">
         <div class="footer-top-area section_70">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="single-footer-widget">
                        <a href="gaming.php"><img src="logo.png" alt="footer logo" /></a>
                       
                        <div class="footer-contact">
                           <p> <a href="#"><span class="__cf_email__" data-cfemail="5a292f2a2a35282e1a3c3633223d3574393537"></span></a></p>
                           <p> <a href="#"></a></p>
                           <ul>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="single-footer-widget">
                        <h3>quick links</h3>
                        <ul>
                           <li><a href="register1.php"><i class="fa fa-angle-double-right"></i>Register</a></li>
                           <li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
                        
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="single-footer-widget">
                        <h3></h3>
                        <ul>
                          
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="single-footer-widget">
                        <div class="footer-app-box">
                         
                           <ul class="apps-list">
                              <li><a href="#"></a></li>
                              <li><a href="#"></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright-area">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="copyright-box">
                        <p>2019 © GLITCHEY <a href="#">ENJOY YOUR DAY !</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer> 
      <!-- Footer Area End -->
       
       
      <!--Jquery js-->
      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.0.0.min.js"></script>
      <!--Jquery-ui js-->
      <script src="assets/js/jquery-ui.min.js"></script>
      <!--Bootstrap js-->
      <script src="assets/js/bootstrap.min.js"></script>
      <!--Owl-Carousel js-->
      <script src="assets/js/owl.carousel.min.js"></script>
      <!--SlickNav js-->
      <script src="assets/js/jquery.slicknav.min.js"></script>
      <!--Magnific js-->
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <!--Main js-->
      <script src="assets/js/main.js"></script>
   </body>
</html>

