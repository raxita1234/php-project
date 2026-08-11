<?php
include_once('include/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $rating = (int)$_POST['rating'];
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Handle Image Upload
    $photo = null;
    if (!empty($_FILES['photo']['name'])) {
        $target_dir = "uploads/feedback/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $file_name = time() . "_" . basename($_FILES["photo"]["name"]);
        $target_file = $target_dir . $file_name;

        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($imageFileType, $allowed_types)) {
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                $photo = $file_name;
            }
        }
    }

    // Insert Data into Database
    $sql = "INSERT INTO feedback (name, email, rating, message, photo) 
            VALUES ('$name', '$email', '$rating', '$message', '$photo')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Thank you for your feedback!'); window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again.'); window.location.href='contact.php';</script>";
    }
}
?>
