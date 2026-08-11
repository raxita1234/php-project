<?php
session_start();
if(isset($_SESSION['uname'])){
    include_once('includes/config.php');
    extract($_POST);

    $plantdescription = mysqli_real_escape_string($conn, $plantdescription);

    //Correct image upload check
    if(!empty($_FILES['image']['name'])) {
        $filename = time() . "_" . $_FILES['image']['name'];
        $path = "../images/plantinfo/" . $filename;

        if(move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
            $qry = "UPDATE Plantinformation SET plantname='$plantname', plantdescription='$plantdescription', image='$filename' WHERE id=$id";
            mysqli_query($conn, $qry) or exit("plantinfo update failed: " . mysqli_error($conn));
            $_SESSION['error'] = "plantinfo updated successfully";
            header("Location:plantinfo.php");
            exit();
        } else {
            $_SESSION['error'] = "File upload failed";
            header("Location: plantinfo_add.php");
            exit();
        }
    } else {
        // No image uploaded – update without changing image
        $qry = "UPDATE Plantinformation SET plantname='$plantname', plantdescription='$plantdescription' WHERE id=$id";
        mysqli_query($conn, $qry) or exit("plantinfo update failed: " . mysqli_error($conn));
        $_SESSION['error'] = "plantinfo updated successfully";
        header("Location: plantinfo.php");
        exit();
    }
} else {
    $_SESSION['error'] = "You are not authorized to access this page without login";
    header("Location: index.php");
    exit();
}
?>
