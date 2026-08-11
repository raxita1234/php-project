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
        <meta name="description" content="Sulfur - Responsive HTML5 Template">
        <meta name="author" content="Shahriyar Ahmed">

      <?php
      include_once('include/style.php');
      ?>
      <!-- Start Header Section -->

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
     <!-- End Header Section -->

        <!-- Start Call to Action Section -->
   <br><br>
    <!-- End Call to Action Section -->
        
        
   <!-- Start category Section -->
                 <div class="section-categories bg2-pattern p-t-115 p-b-120">
                    <div class="container">
                        <div class="title-section-categories t-center m-b-22">
                            <div class="t-center m-t-2">
                    <center> <h2 class="tit5">Variety</h2></center>
                    <center><p>Discover unique plant varieties that bring freshness, beauty, and positivity to every corner of your life</p></center><br>
                    </div>

                        </div>

                        <div class="row">
                            <?php
                            $catid = $_REQUEST['id'];
                            $subcatqry = "SELECT * FROM subcategories where catid='".$catid."' ";
                            $subcatresult = mysqli_query($conn, $subcatqry) or exit("Category query failed: " . mysqli_error($conn));
                            while ($subcatrow = mysqli_fetch_array($subcatresult)) {
                            ?>
                                <div class="col-sm-6 col-md-3 m-b-30"> <!-- 4 equal boxes -->
                                    <div class="item-categories square-box bo-rad-10 hov-img-zoom pos-relative">
                                        <img src="images/subcategories/<?php echo $subcatrow['image']; ?>" alt="<?php echo $homecatrow['subcatname']; ?>">
                                        
                                        <!-- Category Name Overlay -->
                                      <a href="description.php?id=<?php echo $subcatrow['id']; ?>" class="cat-link">
                                      <?php echo $subcatrow['subcatname']; ?>
                                        </a>

                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    </div>
                    <br>


        <!-- End category Section -->
        
        
        
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
        
        
        
            <!-- Sulfur JS File -->
            <?php
            include_once('include/script.php');
            ?>
            
    </body>
</html>