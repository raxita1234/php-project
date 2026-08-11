<?php
session_start();
if(isset($_SESSION['uname'])){
    include_once('includes/config.php');

    // Escape inputs
    $id = intval($_POST['id']); // Ensure ID is integer
    $tipsname = mysqli_real_escape_string($conn, $_POST['tipsname']);
    $tipsdescription = mysqli_real_escape_string($conn, $_POST['tipsdescription']);

    // Handle image upload
    if(!empty($_FILES['image']['name'])) {
        $filename = time() . "_" . $_FILES['image']['name'];
        $path = "../images/tips/" . $filename;

        if(move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
            $qry = "UPDATE caretips SET tipsname='$tipsname', tipsdescription='$tipsdescription', image='$filename' WHERE id=$id";
        } else {
            $_SESSION['error'] = "File upload failed";
            header("Location: Tips_add.php");
            exit();
        }
    } else {
        // No new image – keep old image
        $qry = "UPDATE caretips SET tipsname='$tipsname', tipsdescription='$tipsdescription' WHERE id=$id";
    }

    // Execute query
    mysqli_query($conn, $qry) or exit("Caretips update failed: " . mysqli_error($conn));

    $_SESSION['success'] = "Caretips updated successfully";
    header("Location: Tips.php");
    exit();

} else {
    $_SESSION['error'] = "You are not authorized to access this page without login";
    header("Location: index.php");
    exit();
}
?>
