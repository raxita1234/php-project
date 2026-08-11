<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
  <title>BloomBudy Plant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Bloombuddy - Care Tips">
  <meta name="author" content="Bloombuddy">

  <!-- Font Awesome for Loader Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* 🌿 Loader Style */
    #loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #e8f5e9;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      transition: opacity 0.6s ease, visibility 0.6s ease;
    }

    #loader.hide {
      opacity: 0;
      visibility: hidden;
    }

    #loader i {
      font-size: 60px;
      color: #2e7d32;
      animation: grow 1.4s infinite ease-in-out;
    }

    @keyframes grow {
      0%, 100% {
        transform: scale(1);
        opacity: 1;
      }
      50% {
        transform: scale(1.2);
        opacity: 0.7;
      }
    }

    #loader p {
      font-size: 18px;
      color: #388e3c;
      margin-top: 15px;
      letter-spacing: 1px;
      font-weight: 500;
    }
  </style>
</head>

<?php include_once('include/style.php'); ?>

<body>

  <!-- 🌱 Loader Start -->
  <div id="loader">
    <i class="fa-solid fa-seedling"></i>
    <p>Loading BloomBudy...</p>
  </div>
  <!-- 🌱 Loader End -->

  <?php
  include_once('include/config.php');
  $settingqry = "select * from sitesettings";
  $settingresult = mysqli_query($conn, $settingqry) or exit("settings select fail" . mysqli_error($conn));
  $settingrow = mysqli_fetch_array($settingresult);
  include_once('include/header.php');
  ?>

  <!-- 🌿 Start Care Tips Section -->
  <section class="plant-care-tips">
    <h1 class="display-1">🌱 Care Tips</h1>
    <p class="subtitle">Keep your plants healthy and thriving with these helpful tips!</p>

    <div class="tips-container">
      <?php
      $qry = "SELECT * FROM caretips ORDER BY id DESC";
      $result = mysqli_query($conn, $qry);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $image = htmlspecialchars($row['image']);
          $tipsname = htmlspecialchars($row['tipsname']);
          $tipsdescription = htmlspecialchars($row['tipsdescription']);

          echo '
          <div class="tip-box">
            <img src="images/tips/' . $image . '" alt="' . $tipsname . '">
            <h3>' . $tipsname . '</h3>
            <p>' . $tipsdescription . '</p>
          </div>';
        }
      } else {
        echo '<p>No care tips available at the moment.</p>';
      }
      ?>
    </div>
  </section>
  <!-- 🌿 End Care Tips Section -->

  <?php include_once('include/footer.php'); ?>

  <style>
    .plant-care-tips {
      text-align: center;
      padding: 60px 20px;
      background-color: #fff;
      overflow: hidden;
    }

    .plant-care-tips h1 {
      font-size: 42px;
      color: #2e7d32;
      margin-bottom: 10px;
    }

    .plant-care-tips .subtitle {
      color: #555;
      font-size: 16px;
      margin-bottom: 40px;
    }

    .tips-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      max-width: 1100px;
      margin: 0 auto;
    }

    .tip-box {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      transition: 0.3s ease-in-out;
      transform: translateY(60px) scale(0.95);
      opacity: 0;
    }

    .tip-box.show {
      transform: translateY(0) scale(1);
      opacity: 1;
    }

    .tip-box:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
    }

    .tip-box img {
      width: 100%;
      height: 160px;
      object-fit: contain;
      border-radius: 12px;
      margin-bottom: 15px;
      background-color: #f7f7f7;
      padding: 10px;
      transition: transform 0.3s ease-in-out;
    }

    .tip-box:hover img {
      transform: scale(1.08);
    }

    .tip-box h3 {
      color: #388e3c;
      font-size: 20px;
      margin-bottom: 10px;
    }

    .tip-box p {
      color: #444;
      font-size: 15px;
      line-height: 1.6;
    }

    @media (max-width: 768px) {
      .plant-care-tips h1 {
        font-size: 34px;
      }

      .tip-box img {
        height: 140px;
        padding: 8px;
      }
    }
  </style>

  <script>
    // 🌿 Hide loader once page is loaded
    window.addEventListener("load", function () {
      const loader = document.getElementById("loader");
      setTimeout(() => {
        loader.classList.add("hide");
      }, 400); // fade-out delay
    });

    // Animate tips when scrolling
    document.addEventListener("scroll", function () {
      const boxes = document.querySelectorAll(".tip-box");
      const triggerBottom = window.innerHeight * 0.85;

      boxes.forEach((box, index) => {
        const boxTop = box.getBoundingClientRect().top;
        if (boxTop < triggerBottom) {
          setTimeout(() => {
            box.classList.add("show");
          }, index * 100);
        }
      });
    });
  </script>

  <!-- 🌿 Copyright Section -->
  <div id="copyright-section" class="copyright-section">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="copyright">
            Copyright © 2014. All Rights Reserved.
            Design and Developed by <a href="http://www.themefisher.com">Themefisher</a>
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
      </div>
    </div>
  </div>

</body>
</html>
