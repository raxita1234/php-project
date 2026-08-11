<?php
include_once('include/config.php'); // apka DB connection file

// Check if ID provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<h2 style='text-align:center;color:red;'>Invalid Request!</h2>";
    exit;
}

$id = $_GET['id'];

// Fetch description from database
$qry = "SELECT * FROM subcategories WHERE id = '$id'";
$result = mysqli_query($conn, $qry);

// Agar koi record nahi mila
if (!$result || mysqli_num_rows($result) == 0) {
    echo "<h2 style='text-align:center;color:red;'>Description Not Found!</h2>";
    exit;
}

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $row['subcatname']; ?> - Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #e8f5e9, #ffffff);
            margin: 0;
            min-height: 100vh; /* full height */
            display: flex;
            justify-content: center; /* horizontally center */
            align-items: center; /* vertically center */
        }
        .description-box {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            max-width: 900px;
            width: 90%;
            display: flex;
            align-items: center;
            gap: 30px;
        }
        .description-box img {
            width: 300px;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
            flex-shrink: 0;
        }
        .text-content {
            flex: 1;
        }
        .text-content h2 {
            color: #2e8b57;
            font-size: 28px;
            margin-bottom: 15px;
        }
        .text-content p {
            font-size: 18px;
            line-height: 1.6;
            color: #444;
            text-align: justify;
        }
        .back-btn {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #fff;
            background-color: #2e8b57;
            padding: 10px 18px;
            border-radius: 6px;
            transition: 0.3s;
        }
        .back-btn:hover {
            background-color: #256b45;
        }

        /* Responsive layout for mobile */
        @media (max-width: 768px) {
            .description-box {
                flex-direction: column;
                text-align: center;
            }
            .description-box img {
                width: 100%;
                max-width: 350px;
            }
            .text-content p {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="description-box">
        <img src="images/subcategories/<?php echo $row['image']; ?>" alt="<?php echo $row['subcatname']; ?>">
        <div class="text-content">
            <h2><?php echo $row['subcatname']; ?></h2>
            <p><?php echo $row['subcatdescription']; ?></p>
            <a href="javascript:history.back()" class="back-btn">⬅ Back</a>
        </div>
    </div>
</body>
</html>
