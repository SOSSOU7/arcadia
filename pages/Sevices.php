<?php
require '../functions.php';


// Récupérer la liste des services
$services = getServices();


//récupérer les horaires
$schedules = getSchedules();

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from astrozoo-html.asdesignsgalaxy.com/pages/Services/Sevices.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jul 2024 17:05:59 GMT -->
<head>   

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <!-- Title --> 
  <title>Astro Zoo | Safari Park</title>  

  <!-- Favicon -->
 <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">

  <!-- Font-Awesome (CSS) -->
  <link rel="stylesheet" href="../assets/vendors/font-awesome/css/all.min.css">

  <!-- Custom Stylesheets -->
  <link rel="stylesheet" href="../assets/css/main.css">
  <link rel="stylesheet" href="../assets/css/responsive.css">


</head>
<body>
 
  <!-- ==================== Scroll-Top Area (Start) ==================== -->
  <a href="#" class="scroll-top">
    <i class="fas fa-long-arrow-alt-up"></i>
  </a>
  <!-- ==================== Scroll-Top Area (End) ==================== -->


  
  <!-- ==================== Header Area (Start) ==================== -->
  <?php include_once('includes/header.php'); ?>
  <!-- ==================== Header Area (End) ==================== -->



  <!-- ==================== Page-Title (Start) ==================== -->
  <div class="page-title">

    <div class="title">
      <h2>Services</h2>
    </div> 

    <div class="link">
      <a href="index.php">Accueil</a>
      <i class="fas fa-angle-double-right"></i>
      <span class="page">Services</span>
    </div>

  </div>
  <!-- ==================== Page-Title (End) ==================== -->


 
  <!-- ==================== Services Area (Start) ==================== -->



  <section class="about">
  <div class="heading">  
      <h2>Nos services</h2>  
    </div>
    <?php foreach ($services as $service): ?>
    <section class="about">
        <div class="box-container">
            
                
                    <div class="image">
                        <?php if ($service['image']): ?>
                        <img src="<?php echo $service['image']; ?>" alt="Image du service" >
                    <?php endif; ?>
                    </div>
                    <div class="content">
                        <h3><?php echo htmlspecialchars($service['nom']); ?></h3>
                        <p><?php echo htmlspecialchars($service['description']); ?></p>
                    </div>
              
            
        </div>
    </section>
  <?php endforeach; ?>

  
  </section>
  
  
  <!-- ==================== About Area (End) ==================== -->
  <!-- ==================== Services Area (End) ==================== -->


    
  <!-- ==================== Footer Area (Start) ==================== -->
  <?php include_once('includes/footer.php'); ?>
  <!-- ==================== Footer Area (End) ==================== -->

 

  <!-- Jquery -->
  <script src="../assets/vendors/jquery/jquery.min.js"></script>

  <!-- Custom Script Files -->
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/nav-link-toggler.js"></script>


</body>

<!-- Mirrored from astrozoo-html.asdesignsgalaxy.com/pages/Services/Sevices.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jul 2024 17:05:59 GMT -->
</html>