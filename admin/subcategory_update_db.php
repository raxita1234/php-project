<?php
session_start();
if(isset($_SESSION['uname'])){
    include_once('includes/config.php');
    extract($_POST);

    $subcatdescription = mysqli_real_escape_string($conn, $subcatdescription);

    //Correct image upload check
    if(!empty($_FILES['image']['name'])) {
        $filename = time() . "_" . $_FILES['image']['name'];
        $path = "../images/subcategories/" . $filename;

        if(move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
            $qry = "UPDATE subcategories SET catid='$catid',subcatname='$subcatname', subcatdescription='$subcatdescription', image='$filename' WHERE id=$id";
            mysqli_query($conn, $qry) or exit("SubCategory update failed: " . mysqli_error($conn));
            $_SESSION['error'] = "SubCategory updated successfully";
            header("Location: subcategory.php");
            exit();
        } else {
            $_SESSION['error'] = "File upload failed";
            header("Location: subcategory_add.php");
            exit();
        }
    } else {
        // No image uploaded – update without changing image
        $qry = "UPDATE subcategories SET catid='$catid',subcatname='$subcatname', subcatdescription='$subcatdescription' WHERE id=$id";
        mysqli_query($conn, $qry) or exit("Category update failed: " . mysqli_error($conn));
        $_SESSION['error'] = "SubCategory updated successfully";
        header("Location: subcategory.php");
        exit();
    }
} else {
    $_SESSION['error'] = "You are not authorized to access this page without login";
    header("Location: index.php");
    exit();
}
?>
