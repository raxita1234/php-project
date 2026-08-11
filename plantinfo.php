<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

    <head>
    <link rel="stylesheet" href="css/style.css"></link>
        <!-- Basic -->
        <title>BloomBudy Plant</title>

        <!-- Define Charset -->
        <meta charset="utf-8">

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Page Description and Author -->
        <meta name="description" content="Sulfur - Responsive HTML5 Template">
        <meta name="author" content="Shahriyar Ahmed">

      
          <?php
             include_once('include/style.php');
             ?>
        


        <!-- Sulfur JS File -->
       
          <?php
    include_once('include/script.php');
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

<!-- Start Portfolio Section -->
<section id="plant-info">
  <div class="container">
 <h1 class="display-1 animated slideInLeft">Plant info</h1>
    <p class="section-subtitle">Click on a plant to know more</p>

    <!-- Plant Buttons -->
    <div class="plant-buttons">
      <?php foreach($plants as $p): ?>
        <button onclick="showPlant('<?php echo $p['id']; ?>')">
          <?php echo htmlspecialchars($p['plantname']); ?>
        </button>
      <?php endforeach; ?>
    </div>

    <!-- Plant Display Area -->
    <div id="plant-display" class="plant-display">
      <p>👆 Select a plant above to see details</p>
    </div>
  </div>
</section>

<script>
// Convert PHP data to JavaScript
const plantsData = <?php echo json_encode($plants); ?>;

function showPlant(id) {
  const plant = plantsData.find(p => p.id === id);

  if (plant) {
    document.getElementById("plant-display").innerHTML = `
      <img src="images/plant/${plant.image}" alt="${plant.plantname}">
      <h3>${plant.plantname}</h3>
      <p>${plant.plantdescription}</p>
    `;
  } else {
    document.getElementById("plant-display").innerHTML = "<p>No details found.</p>";
  }
}
</script>

        
        
        
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
        
        
        
        
        
    
    </body>
</html>