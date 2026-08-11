<?php
// Contact details
$name = "BloomBuddy Plant";
$email = "raxita25@gmail.com";
$phone = "+91 6354499311";
$address = "To:Nani Monpari,Ta:Visavadar";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BloomBudy plant</title>

  <?php include_once('include/style.php'); ?>

  <!-- Font Awesome Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
  
  <!-- AOS Animation CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

  <!-- Custom Contact CSS -->
  <link rel="stylesheet" href="contact.css">
</head>

<body>

  <!-- Loader Start --> 
      <div id="loader">
          <i class="fa-solid fa-seedling"></i>
          <p>Loading BloomBudy...</p>
      </div>
      <!-- Loader End -->
       
<?php
include_once('include/config.php');
$settingqry = "select * from sitesettings";
$settingresult = mysqli_query($conn, $settingqry) or exit("settings select fail" . mysqli_error($conn));
$settingrow = mysqli_fetch_array($settingresult);

// Original Header
include_once('include/header.php');
?>



<!-- Contact Section -->
<section class="contact-section">
  <div class="contact-container">

    <h1 class="display-1 animated slideInLeft">Contact us</h1>
    <p data-aos="fade-up" data-aos-delay="100">
      We're here to help you. Reach out to us anytime!
    </p>

    <div class="contact-row">

      <!-- Name Box -->
      <div class="contact-box" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon name"><i class="fa-solid fa-user"></i></div>
        <h3>Name</h3>
        <p><?php echo $name; ?></p>
      </div>

      <!-- Email Box -->
      <div class="contact-box" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon email"><i class="fa-solid fa-envelope"></i></div>
        <h3>Email</h3>
        <p><?php echo $email; ?></p>
      </div>

      <!-- Phone Box -->
      <div class="contact-box" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon phone"><i class="fa-solid fa-phone"></i></div>
        <h3>Phone</h3>
        <p><?php echo $phone; ?></p>
      </div>

      <!-- Address Box -->
      <div class="contact-box" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon address"><i class="fa-solid fa-location-dot"></i></div>
        <h3>Address</h3>
        <p><?php echo $address; ?></p>
      </div>

    </div>

  </div>
</section>
<section class="feedback-section" id="feedback">
  <div class="container">
    <h2 class="section-title" data-aos="fade-up">🌿 Share Your Feedback</h2>
    <p data-aos="fade-up" data-aos-delay="100">
      We’d love to hear from you! Let us know your thoughts and suggestions 🌸
    </p>

    <div class="feedback-form-container" data-aos="zoom-in">
      <form action="submit_feedback.php" method="POST" enctype="multipart/form-data" class="feedback-form">
        <!-- Left Column -->
        <div class="form-left">
          <div class="form-group">
            <label for="fname"><i class="fa-solid fa-user"></i> Your Name</label>
            <input type="text" name="name" id="fname" required placeholder="Enter your name">
          </div>

          <div class="form-group">
            <label for="femail"><i class="fa-solid fa-envelope"></i> Email</label>
            <input type="email" name="email" id="femail" required placeholder="Enter your email">
          </div>

          <div class="form-group">
            <label><i class="fa-solid fa-star"></i> Rate Us</label>
            <!-- Simpler star layout from first snippet -->
            <div class="rating-container">
              <span>⭐</span>
              <span>⭐</span>
              <span>⭐</span>
              <span>⭐</span>
              <span>⭐</span>
            </div>
          </div>
        </div>

        <!-- Right Column -->
        <div class="form-right">
          <div class="form-group">
            <label for="fmessage"><i class="fa-solid fa-comment-dots"></i> Your Feedback</label>
            <textarea name="message" id="fmessage" rows="6" required placeholder="Write your feedback..."></textarea>
          </div>

          <div class="form-group">
            <label for="fphoto"><i class="fa-solid fa-image"></i> Upload a Photo (optional)</label>
            <input type="file" name="photo" id="fphoto" accept="image/*">
          </div>

          <div class="form-group" style="text-align:center;">
            <button type="submit" class="btn alazea-btn">Submit Feedback</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<br>

<!-- Footer -->
<?php include_once('include/footer.php'); ?>
    <!-- Start CCopyright Section -->
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
        <!-- End CCopyright Section -->

<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true
  });
</script>

<?php include_once('include/script.php'); ?>
</body>
</html>
