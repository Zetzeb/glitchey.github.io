<?php
if(isset($_POST['submit']))
{
  $email =$_POST['email'];
  $file = fopen("list22.txt","a+") or die("file not open");

  $s= $email;
  fputs($file,$s."  ") or die("data not written");
  fclose($file);
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

Redirect('a.html', false);

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
      <link rel="stylesheet" href="assets/css/style.css">
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
                           <li><a href="aboutgame.php">About</a></li>
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
       
       
      <!-- Breadcrumb Area Start -->
      <section class="filmoja-breadcrumb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcrumb-box">
                     <h2>GAMING FEVER </h2>
                     <ul>
                        <li><a href="index.html"><h3>Send Gameplay And Earn Money $$</h3></a></li>
                        
                      </ul>
                      <ul>
                        <li>youtube pe video upload karo apne gameplay ka or uska link dalo neeche</li>
                        <li>or agar already hai to uska link dalo</li>

                      </ul>
                    <ul><li>har week top 100 me se winner niklega jisko cash price milega</li></ul>


         <div class="container">
            <div class="row">
               <div class="col-md-12">
       
                     <a href="#" class="mouse-icon hidden-sm"><span class="wheel"><i class="fa fa-long-arrow-down"></i></span></a>
                    <div class="quote-box">

                     <form >
                        
                        <input type="text" placeholder="Name Of The Game" name="email">
                     

                        <button ><a href="register1.php">SUBMIT</a></button>
          
</div>
                      
                                       

                     </form>
               
               </div>
            </div>
         </div>
  




                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb Area End -->
       
       
      <!-- Movie List Area Start -->
      <section class="filmoja-movie-list-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-3">
                  <div class="list-sidebar">
                      
                     <!-- Single Widget Start -->
                     <div class="single-sidebar-widget">
                        <h3 class="sidebar-widget-title">ADD SPACE</h3>
                     </div>
                     <!-- Single Widget End -->
                      
                     <!-- Single Widget Start -->
                     <div class="single-sidebar-widget">
                        <h3 class="sidebar-widget-title">add</h3>
                        <ul>
                           <li class="checkbox">
                              <label for="Freelance"><span></span>A</label>
                           </li>
                           <li class="checkbox">
                              <label for="Full_Time"><span></span>D</label>
                           </li>
                           <li class="checkbox">
                              <label for="Internship"><span></span>V</label>
                           </li>
                           <li class="checkbox">
                              <label for="Part_Time"><span></span>E</label>
                           </li>
                           <li class="checkbox">
                              <label for="Temporary"><span></span>R</label>
                           </li>
                           <li class="checkbox">
                              <label for="Crime"><span></span>T</label>
                           </li>
                           <li class="checkbox">
                              <label for="Drama"><span></span>S</label>
                           </li>
                           <li class="checkbox">
                              <label for="animation"><span></span></label>
                           </li>
                        </ul>
                     
                     </div>
                     <!-- Single Widget End -->
                      
                     <!-- Single Widget Start -->
                  
                     <!-- Single Widget End -->
                      
                     <!-- Single Widget Start -->
                     
                     <!-- Single Widget End -->
                      
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="browse-option-box margin-top">
                     <div class="total-item-show">
                        <p> WEEK </p>
                     </div>
                     <div class="total-item-show sorter">
                        
                     </div>
                  </div> 
                  <div class="movie-grid-box">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="single-movie-list movie-grid-layout">
                              <div class="single-movie-list-left">
                                <iframe width="400" height="170" src="https://www.youtube.com/embed/r7JecscaJNA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="single-movie-list-right">
                                 <h3><a href="#">GAMER NAME HERE</a></h3>
                                
                               
                              </div>
                           </div>
                        </div>
                        <!-- End Col -->
                        <div class="col-lg-6">
                           <div class="single-movie-list movie-grid-layout">
                              <div class="single-movie-list-left">
                                 <iframe width="400" height="170" src="https://www.youtube.com/embed/HCZivocZUGg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="single-movie-list-right">
                                 <h3><a href="#">GAMER NAME HERE </a></h3>
                                
                                 
                                 <div class="movie-list-info">
                                    <div class="list-info-left">
                                      
                                    </div>
                                    <div class="top-action">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                    
                        <!-- End Col -->
                     </div>
                     <!-- End Row -->
                     <div class="row">
                       
                        <!-- End Col -->
                      
                     <!-- End Row -->
                  </div>
                  <!-- Pagination Start -->
                  <div class="pagination-box-row responsive-pag margin-top">
                  
                     <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                       
                     </ul>
                  </div>
                  <!-- Pagination End -->
               </div>
            </div>
         </div>
      </section>
      <!-- Movie List Area End -->
       
       
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

