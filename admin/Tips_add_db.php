<?php
session_start();
if(isset($_SESSION['uname'])){
    include_once('includes/config.php');

    // Escape inputs
    $tipsname = mysqli_real_escape_string($conn, $_POST['tipsname']);
    $tipsdescription = mysqli_real_escape_string($conn, $_POST['tipsdescription']);

    // Handle file upload
    $filename = time() . "_" . $_FILES['image']['name'];
    $path = "../images/tips/" . $filename;

    if(move_uploaded_file($_FILES['image']['tmp_name'], $path)){
        // Use correct table name
        $qry = "INSERT INTO caretips (tipsname, tipsdescription, image) 
                VALUES ('$tipsname', '$tipsdescription', '$filename')";

        mysqli_query($conn, $qry) or exit("Tips insert failed: " . mysqli_error($conn));

        $_SESSION['success'] = "Caretips added successfully";
        header("location:tips_add.php");
        exit();
    } else {
        $_SESSION['error'] = "File upload failed";
        header("location:tips_add.php");
        exit();
    }

} else {
    $_SESSION['error'] = "You are not authorized to access this page without login";
    header("location:index.php");
    exit();
}
?>
