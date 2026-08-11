<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

    <head>

        <!-- Basic -->
        <title>BloomBudy Plant</title>
        <link rel="stylesheet" href="css/style.css"> 

        <!-- Define Charset -->
        <meta charset="utf-8">

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Page Description and Author -->
        <meta name="description" content="BloomBudy plant - Responsive HTML5 Template">
        <meta name="author" content="Shahriyar Ahmed">

      <?php
      include_once('include/style.php');
      ?>
    

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
                     $settingqry="select * from sitesettings";
                     $settingresult = mysqli_query($conn,$settingqry) or exit("settings select fail" . mysqli_error($conn));
                     $settingrow=mysqli_fetch_array($settingresult);
        ?>
    
      <?php
      include_once('include/header.php');
      ?>
      <!-- Start Header Section -->
       
       
<!-- Direct Image -->
<div class="banner">
  <div class="overlay">
    <div class="container">
      <div class="intro-text right-align">

        <!-- Main Welcome Heading (First) -->
        <h1>🌿 Welcome to <span>BloomBudy Plant</span></h1>

        <!-- Tagline Below -->
        <p>Discover your green companion</p>

        <!-- Button -->
        <a href="plantinfo.php" class="btn alazea-btn mr-30">Explore Plants</a>

        <!-- Description -->
        <p>Expert tips, care guides, and beautiful plants for your home and garden.</p>

        <div class="welcome-btn-group">
          <!-- Additional buttons if needed -->
        </div>

      </div>
    </div>
  </div>
</div>

<style>
/* Right-aligned text */
.intro-text.right-align {
  text-align: right;
  margin-right: 0;
  padding-right: 50px;
}

/* Heading style (Welcome first) */
.intro-text.right-align h1 {
  font-size: 44px; /* Smaller than before (54px → 44px) */
  font-weight: 800;
  color: #fff;
  line-height: 1.3;
  margin-bottom: 10px;
}
.intro-text.right-align h1 span {
  background: linear-gradient(90deg, #a5d6a7, #00e676, #43a047);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Paragraphs */
.intro-text.right-align p {
  font-size: 20px;
  color: #dff0d8;
  margin-top: 15px;
  line-height: 1.6;
}

/* Button styling */
.intro-text.right-align .btn {
  display: inline-block;
  margin-top: 60px; /* was 20px — increased spacing */
  background-color: #28a745;
  color: #fff;
  padding: 12px 30px;
  border-radius: 50px;
  text-decoration: none;
  font-weight: 600;
  transition: all 0.3s ease;
}
.intro-text.right-align .btn:hover {
  background-color: #1e7e34;
  transform: translateY(-3px);
}

/* Add a soft fade animation (optional) */
.intro-text.right-align {
  animation: fadeInUp 1.2s ease-in-out;
}
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>

<br>
 <!-- End Header Section -->

      <!-- Start About Us Section -->
        
      <section id="about-us">
        <div class="container">
          <div class="about-text">
            <h2>About <span>BloomBudy</span></h2>
            <p>
              Welcome to <b>BloomBuddy</b> – your trusted green companion! 🌿  
              We believe plants are not just decorations, they are <i>living friends</i> that bring 
              peace, beauty, and fresh air into our homes.  
            </p>
            <p>
              From <b>easy-care indoor plants</b> to <b>rare species</b>, we provide 
              detailed guides, care tips, and inspiration to help every plant lover thrive.  
              Whether you’re a beginner or an expert, BloomBuddy makes your plant journey joyful.  
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
     <!-- Start category Section -->
          <div class="section-categories bg2-pattern p-t-115 p-b-120">
    <div class="container">
        <!-- Title -->
        <div class="title-section-categories t-center m-b-40">
           <center> <h1 class="tit5">🌿 Categories</h1>
            <p class="subtitle">Choose your favorite type of plants</p></center>
        </div>

        <!-- Categories Grid -->
        <div class="row justify-content-center">
            <?php
            $homecatqry = "SELECT * FROM categories LIMIT 6";
            $homecatresult = mysqli_query($conn, $homecatqry) or exit("Category query failed: " . mysqli_error($conn));
            while ($homecatrow = mysqli_fetch_array($homecatresult)) {
            ?>
                <div class="col-sm-6 col-md-4 col-lg-3 m-b-40"> <!-- Bigger boxes -->
                    <div class="item-categories big-box bo-rad-15 hov-img-zoom pos-relative shadow-lg">
                        <img src="images/categories/<?php echo $homecatrow['image']; ?>" 
                             alt="<?php echo $homecatrow['catname']; ?>">

                        <!-- Overlay Title -->
                        <div class="overlay">
                            <h3 class="category-name">
                                <a href="subcategories.php?id=<?php echo $homecatrow['id']; ?>" class="cat-link">
                                    <?php echo $homecatrow['catname']; ?>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div><br>

       <!-- End category Section -->
      <?php
      include_once('include/config.php');

      $qry = "SELECT * FROM feedback ORDER BY submitted_at DESC";
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
        <!-- End About Us Section -->


 
      <!-- Start Portfolio Section -->                             
      <?php
    include_once('admin/includes/config.php');

    // Fetch all plants from database
    $qry = "SELECT * FROM plantinformation ORDER BY id ASC";
    $result = mysqli_query($conn, $qry);

    $plants = [];
    while($row = mysqli_fetch_assoc($result)){
      $plants[] = $row;
    }
    ?>
<script>
// Animate on scroll
document.addEventListener("scroll", function () {
  const boxes = document.querySelectorAll(".tip-box");
  const triggerBottom = window.innerHeight * 0.85;

  boxes.forEach(box => {
    const boxTop = box.getBoundingClientRect().top;
    if (boxTop < triggerBottom) {
      box.classList.add("show");
    }
  });
});
</script>
 
        <!-- Start Footer Section -->
      <?php
      include_once('include/footer.php');
      ?>
        <!-- End Footer Section -->
        
        
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
      
     <?php
     include_once('include/script.php');
     ?>
    
    </body>
</html>