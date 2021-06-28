<?php
    session_start(); //we need session for the log in thingy XD 
    include("../functions.php");
    if($_SESSION['login']!==true){
        header('location:../login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WeebStream Watch Now</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <button> <a href="forum/index.php">forum</a></button>
  <?php
                if(isset($_POST['logout'])){
                    session_destroy();
                    header('location:../login.php');
                }
    
                ?>
  <!-- Favicons -->
  <!-- Favicons -->
  <link href="../assets/img/image-icon/favicon.png" rel="icon">
  <link href="../assets/img/touch-icon.png" rel="touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <link href="assets/css/style3.css" rel="stylesheet">
  <script src="assets/js/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
        <a href="index.html" class="scrollto"><img src="assets/img/logo.png" alt="touch-icon" title=""></a>
      </div>

      

    </div>
  </header><!-- End Header -->

  


<section id="pics" class="section-with-bg">

<div class="container" data-aos="fade-up">
  <div class="section-header">
    <h2>Anime List</h2>
   
  </div>

  <div class="row" data-aos="fade-up" data-aos-delay="100">

    <div class="col-lg-3 col-md-3 col-xs-3">
      <div class="pic">
        <div class="img">
        
          <img src="images/BC.jpg" alt=" poster" class="img-fluid">
        </div>
        <h3><a href="blackclover/episode1.php">Black Clover</a></h3>
        
 
      </div>
    </div>

    <div class="col-lg-3 col-md-3 col-xs-3">
      <div class="pic">
        <div class="img">
        
          <img src="images/FMA.jpg" alt=" poster" class="img-fluid">
        </div>
        <h3><a href="fullmetal/episode1.php">Full metal alchemist</a></h3>
        
        
      </div>
    </div>

    <div class="col-lg-3 col-md-3 col-xs-3">
      <div class="pic">
        <div class="img">
        
          <img src="images/YN.jpg" alt=" poster" class="img-fluid">
        </div>
        <h3><a href="yourname/episode1.php">Your name</a></h3>
        
  
      </div>
    </div>

    <div class="col-lg-3 col-md-3 col-xs-3">
      <div class="pic">
        <div class="img">
        
          <img src="images/ST.jpg" alt=" poster" class="img-fluid">
        </div>
        <h3><a href="steinsgate/episode1.php">Steins; Gate</a></h3>
        
     
      </div>
    </div>

    <div class="col-lg-3 col-md-3 col-xs-3">
      <div class="pic">
        <div class="img">
        
          <img src="images/AOT.jpg" alt=" poster" class="img-fluid">
        </div>
        <h3><a href="attacktitan/episode1.php">Attack on titan</a></h3>
        
  
      </div>
    </div>

    <div class="col-lg-3 col-md-3 col-xs-3">
      <div class="pic">
        <div class="img">
        
          <img src="images/DN.jpg" alt=" poster" class="img-fluid">
        </div>
        <h3><a href="deathnote/episode1.php">Death note</a></h3>
        

      </div>
    </div>

    <div class="col-lg-3 col-md-3 col-xs-3">
      <div class="pic">
        <div class="img">
        
          <img src="images/WWY.jpg" alt=" poster" class="img-fluid">
        </div>
        <h3><a href="weatheringwithyou/episode1.php">Weathering with you</a></h3>
        
    
      </div>
    </div>

    <div class="col-lg-3 col-md-3 col-xs-3">
      <div class="pic">
        <div class="img">
        
          <img src="images/PN.jpg" alt=" poster" class="img-fluid">
        </div>
        <h3><a href="promiseneverland/episode1.php">The Promised Neverland</a></h3>
        
       
      </div>
    </div>

    <div class="col-lg-3 col-md-3 col-xs-3">
      <div class="pic">
        <div class="img">
        
          <img src="images/DS.jpg" alt=" poster" class="img-fluid">
        </div>
        <h3><a href="demonslayer/episode1.php">Demon slayer</a></h3>
        
 
      </div>
    </div>

    

    
</section>





    <!-- ======= Schedule Section ======= -->
    <section id="schedule" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          
        </div>

        <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">New & Hot</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Recent Addition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Most Popular</a>
          </li>
        </ul>

        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

          <div class="row schedule-item">
              
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/gallery/attackontitan.jpg" alt=" pic">
                </div>
                <a href="attacktitan/episode1.php"> <h4>Attack on Titan</h4></a>
                <p>Action fiction, Dark fantasy, Apocalyptic and post-apocalyptic fiction</p>
              </div>
            </div>

            <div class="row schedule-item">
              
              <div class="col-md-10">
                <div class="speaker">
                <img src="images/FMA.jpg" alt=" poster" class="img-fluid">
                </div>  
                <a href="fullmetal/episode1.php"> <h4>Full metal alchemist</h4></a>
                <p>Adventure fiction, Fantasy, Steampunk, Dieselpunk</p>
              </div>
            </div>

            <div class="row schedule-item">
             
              <div class="col-md-10">
                <div class="speaker">
                <img src="images/YN.jpg" alt=" poster" class="img-fluid">
                </div>
                <a href="yourname/episode1.php"> <h4>Your name</h4></a>
                <p>Genres. Animation, Drama, Fantasy, Romance </p>
              </div>
            </div>

          
            
           
          </div>
        

   
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

          <div class="row schedule-item">
              
              <div class="col-md-10">
                <div class="speaker">
                <img src="images/ST.jpg" alt=" poster" class="img-fluid">
                </div>
                <a href="steinsgate/episode1.php"> <h4>Steins; Gate</h4></a>
                <p>Anime, Science fiction, Comedy, Drama, Psychological thriller, Animation, Thriller</p>
              </div>
            </div>

            <div class="row schedule-item">
              
              <div class="col-md-10">
                <div class="speaker">
                <img src="images/WWY.jpg" alt=" poster" class="img-fluid">
                </div>  
                <a href="weatheringwithyou/episode1.php"> <h4>Weathering with you</h4></a>
                <p> Genres: fantasy, drama, anime</p>
              </div>
            </div>

            <div class="row schedule-item">
             
              <div class="col-md-10">
                <div class="speaker">
                <img src="images/PN.jpg" alt=" poster" class="img-fluid">
                </div>
                <a href="promiseneverland/episode1.php"> <h4>The Promised Neverland</h4></a>
                <p>Genres: Dark fantasy, Science fiction, Thriller</p>
              </div>
            </div>

            


            

          </div>
   

          
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

          <div class="row schedule-item">
              
              <div class="col-md-10">
                <div class="speaker">
                <img src="images/DN.jpg" alt=" poster" class="img-fluid">
                </div>
                <a href="deathnote/episode1.php"> <h4>Death Note</h4></a>
                <p>Genres: Mystery, Psychological thriller, Thriller</p>
              </div>
            </div>

            <div class="row schedule-item">
              
              <div class="col-md-10">
                <div class="speaker">
                <img src="images/BC.jpg" alt=" poster" class="img-fluid">
                </div>  
                <a href="blackclover/episode1.php"> <h4>Black Clover</h4></a>
                <p>Genres: Adventure fiction, Fantasy</p>
              </div>
            </div>

            <div class="row schedule-item">
             
              <div class="col-md-10">
                <div class="speaker">
                <img src="images/DS.jpg" alt=" poster" class="img-fluid">
                </div>
                <a href="demonslayer/episode1.php"> <h4>Demon Slayer </h4></a>
                <p>Genres: Adventure fiction, Dark fantasy, Martial Arts</p>
              </div>
            </div>

           

          </div>
         
        </div>
      </div>
    </section>

    

    

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>