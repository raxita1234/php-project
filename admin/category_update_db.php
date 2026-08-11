<?php
session_start();
if(isset($_SESSION['uname'])){
    include_once('includes/config.php');
    extract($_POST);

    $catdescription = mysqli_real_escape_string($conn, $catdescription);

    //Correct image upload check
    if(!empty($_FILES['image']['name'])) {
        $filename = time() . "_" . $_FILES['image']['name'];
        $path = "../images/categories/" . $filename;

        if(move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
            $qry = "UPDATE categories SET catname='$catname', catdescription='$catdescription', image='$filename' WHERE id=$id";
            mysqli_query($conn, $qry) or exit("Category update failed: " . mysqli_error($conn));
            $_SESSION['error'] = "Category updated successfully";
            header("Location: category.php");
            exit();
        } else {
            $_SESSION['error'] = "File upload failed";
            header("Location: category_add.php");
            exit();
        }
    } else {
        // No image uploaded – update without changing image
        $qry = "UPDATE categories SET catname='$catname', catdescription='$catdescription' WHERE id=$id";
        mysqli_query($conn, $qry) or exit("Category update failed: " . mysqli_error($conn));
        $_SESSION['error'] = "Category updated successfully";
        header("Location: category.php");
        exit();
    }
} else {
    $_SESSION['error'] = "You are not authorized to access this page without login";
    header("Location: index.php");
    exit();
}
?>
