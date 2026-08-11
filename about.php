<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

    <head> 
        <link rel="stylesheet" href="css/style.css">

        <!-- Basic -->
        <title>BloomBudy Plant</title>

        <!-- Define Charset -->
        <meta charset="utf-8">

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Page Description and Author -->
        <meta name="description" content="Sulfur - Responsive HTML5 Template">
        <meta name="author" content="Shahriyar Ahmed">

     
        

    </head>
    <?php
    include_once('include/style.php');
    ?>

    <body>
    <!-- Loader Start --> 
      <div id="loader">
          <i class="fa-solid fa-seedling"></i>
          <p>Loading BloomBudy...</p>
      </div>
      <!-- Loader End -->
      
       <?php
           include_once('include/config.php');
                     $settingqry="select * from sitesettings";
                     $settingresult = mysqli_query($conn,$settingqry) or exit("settings select fail" . mysqli_error($conn));
                     $settingrow=mysqli_fetch_array($settingresult);
        ?>
    <?php
    include_once('include/header.php');
    ?>
    
        
        
        
<!-- About Us Section -->
<section id="about-us">
  <div class="container">
    <div class="about-text">
       <h1 class="display-1 animated slideInLeft">🌱 Discover BloomBudy</h1><br>
      <p>
        Welcome to <b>BloomBudy</b> – your trusted green companion! 🌿  
        We believe plants are not just decorations, they are <i>living friends</i> that bring 
        peace, beauty, and fresh air into our homes.  
      </p>
      <p>
        From <b>easy-care indoor plants</b> to <b>rare species</b>, we provide 
        detailed guides, care tips, and inspiration to help every plant lover thrive.  
        Whether you’re a beginner or an expert, BloomBudy makes your plant journey joyful.  
      </p>
      <a href="contact.php" class="btn-explore">Join Our Green Family</a>
    </div>
  </div>
</section>





<!-- Mission & Vision -->
<section id="mission-vision">
  <div class="container">
    <div class="mv-box">
      <h3>🌱 Our Mission</h3>
      <p>
        To spread awareness about the importance of plants and make plant care 
        simple and joyful for everyone. We aim to create a greener and healthier lifestyle.
      </p>
    </div>
    <div class="mv-box">
      <h3>🌎 Our Vision</h3>
      <p>
        To build a community where every home has plants, and every plant lover 
        feels supported with the right knowledge and care.
      </p>
    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section id="why-choose">
  <div class="container">
    <h2>Why Choose <span>BloomBudy?</span></h2>
    <ul class="why-list">
      <li>✔ Easy & practical plant care tips</li>
      <li>✔ Knowledge about rare & exotic plants</li>
      <li>✔ Community of plant lovers 🌿</li>
      <li>✔ Guidance for beginners and experts alike</li>
      <li>✔ Support for eco-friendly lifestyle</li>
    </ul>
  </div>
</section><br>

 <?php
include_once('include/config.php');

$qry = "SELECT * FROM feedback ORDER BY submitted_at DESC LIMIT 3";
$result = mysqli_query($conn, $qry);
?>

<section class="feedback-display">
  <div class="container">
    <h2 class="section-title" data-aos="fade-up">💬 What Our Clients Say</h2>
    <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
      Here’s what our plant lovers have to say about BloomBudy 🌿
    </p>

    <div class="feedback-grid">
      <?php if($result && mysqli_num_rows($result) > 0): ?>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
          <?php
            // safe values
            $photoFile = !empty($row['photo']) ? 'uploads/feedback/' . $row['photo'] : 'assets/default-user.png';
            $name = htmlspecialchars($row['name'] ?? 'Anonymous');
            $message = htmlspecialchars($row['message'] ?? '');
            $rating = isset($row['rating']) ? (int)$row['rating'] : 0;
            $displayDate = isset($row['submitted_at']) ? date('d M Y', strtotime($row['submitted_at'])) : '';
          ?>
          <div class="feedback-card" data-aos="zoom-in">
            <div class="feedback-photo">
              <img src="<?php echo $photoFile; ?>" alt="<?php echo $name; ?>">
            </div>

            <div class="feedback-content">
              <h3><?php echo $name; ?></h3>

              <div class="rating">
                <?php for($i=1; $i<=5; $i++): ?>
                  <span class="<?php echo ($i <= $rating) ? 'star filled' : 'star'; ?>">★</span>
                <?php endfor; ?>
              </div>

              <p class="message">"<?php echo $message; ?>"</p>

              <?php if($displayDate): ?>
                <small class="date">🗓️ <?php echo $displayDate; ?></small>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p class="no-feedback">No feedback yet. Be the first to share your experience!</p>
      <?php endif; ?>
    </div>
  </div>
</section>
<br>

 <!-- Start Footer Section -->
      <?php
      include_once('include/footer.php');
      ?>
        <!-- End Footer Section -->
        
        
         <!-- Start Copyright Section -->
        <div id="copyright-section" class="copyright-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="copyright">
                            Copyright © 2014. All Rights Reserved.Design and Developed by <a href="http://www.themefisher.com">Themefisher</a>
                        </div>
                    </div>
                    
                    <div class="col-md-5">
                        <div class="copyright-menu pull-right">
                            <ul>
                                <li><a href="#" class="active">Home</a></li>
                                <li><a href="#">Sample Site</a></li>
                                <li><a href="#">getbootstrap.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!--/.row -->
            </div><!-- /.container -->
        </div>
        <!-- End Copyright Section -->
        
       
        
     <!-- Sulfur JS File -->
      <?php
      include_once('include/script.php');
      ?>
   
        
    
    </body>
</html>