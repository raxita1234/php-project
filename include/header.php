  <header class="clearfix">
        
            <!-- Start Top Bar -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar">
                            <div class="row">
                                    
                                <div class="col-md-6">
                                    <!-- Start Contact Info -->
                                   
                                    <!-- End Contact Info -->
                                </div><!-- .col-md-6 -->
                                
                                <div class="col-md-6">
                                    <!-- Start Social Links -->
                                   
                                    <!-- End Social Links -->
                                </div><!-- .col-md-6 -->
                            </div>
                            
                                
                                
                        </div>
                    </div>                        

                </div><!-- .row -->
            </div><!-- .container -->
            <!-- End Top Bar -->
        
            <!-- Start  Logo & Navigation  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                         <a class="navbar-brand" href="index.php">
                            <?php
                            if(isset($settingrow['image']) && $settingrow['image']!=null ){
                                ?>
                           <img src="images/logo/<?php echo $settingrow['image']; ?> "class ="logo" alt="" >
                                <?php
                            }else{
                                ?>
                                <h1><?php echo $settingrow['sitename']; ?></h1>
                                <?php
                            }
                           ?>
                        </a>
                    </div>
                    <div class="navbar-collapse collapse"><br>

                 <!-- navigation -->
<div class="container">
    <div class="d-flex justify-content-center my-4"> <!-- my-4 adds top & bottom margin -->
        <div class="p-3 bg-light rounded shadow d-flex align-items-center" style="gap:10px;">
            <!-- Home -->
            <a class="btn <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : 'btn-outline-success'; ?>" href="index.php">Home</a>
            <!-- About Us -->
            <a class="btn <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : 'btn-outline-success'; ?>" href="about.php">About Us</a>
            <!-- Category Dropdown (Original Code) -->
            <?php $category_active_pages = ['category.php','subcategories.php']; ?>
            <div class="btn-group">
                <a href="#" class="btn <?php echo in_array(basename($_SERVER['PHP_SELF']), $category_active_pages) ? 'active' : 'btn-outline-success'; ?> dropdown-toggle" data-toggle="dropdown">
                    Category
                </a>
                <ul class="dropdown-menu megamenu p-3" role="menu">
                    <?php
                    $catqry = "SELECT * FROM categories LIMIT 6";
                    $catresult = mysqli_query($conn, $catqry);
                    while ($catrow = mysqli_fetch_array($catresult)) {
                        $subcatqry = "SELECT * FROM subcategories WHERE catid='" . $catrow['id'] . "'";
                        $subcatresult = mysqli_query($conn, $subcatqry);
                    ?>
                    <li class="megamenu-container">
                        <ul class="megamenu-col">
                            <li class="megamenu-title"><?php echo $catrow['catname']; ?></li>
                            <?php while ($subcatrow = mysqli_fetch_array($subcatresult)) { ?>
                                <li>
                                    <a href="subcategories.php?id=<?php echo $catrow['id']; ?>&subcatid=<?php echo $subcatrow['id']; ?>" class="dropdown-item">
                                        <?php echo $subcatrow['subcatname']; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- Care Tips -->
            <a class="btn <?php echo basename($_SERVER['PHP_SELF']) == 'caretips.php' ? 'active' : 'btn-outline-success'; ?>" href="caretips.php">Care Tips</a>
            <!-- Plant Info -->
            <a class="btn <?php echo basename($_SERVER['PHP_SELF']) == 'plantinfo.php' ? 'active' : 'btn-outline-success'; ?>" href="plantinfo.php">Plant Info</a>
            <!-- Contact -->
            <a class="btn <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : 'btn-outline-success'; ?>" href="contact.php">Contact</a>
            <!-- Logout -->
            <a class="btn btn-outline-danger" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>
</div>
                   <!-- End Navigation List -->
                    </div>
                </div>
            </div>
            <!-- End Header Logo & Naviagtion -->
            
        </header>
        <html>
            <head>
                 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

            </head>
        </html>