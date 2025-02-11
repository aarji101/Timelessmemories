<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photography";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['photographer_name']);
    $email = $conn->real_escape_string($_POST['photographer_email']);
    $speciality = $conn->real_escape_string($_POST['photographer_speciality']);

    // File upload handling
    $target_dir = "uploads/";
    $imageFileType = strtolower(pathinfo($_FILES["photographer_photo"]["name"], PATHINFO_EXTENSION));
    $newFileName = uniqid() . "." . $imageFileType;
    $target_file = $target_dir . $newFileName;
    $uploadOk = 1;

    // Check if image file is real or fake
    if (!empty($_FILES["photographer_photo"]["tmp_name"])) {
        $check = getimagesize($_FILES["photographer_photo"]["tmp_name"]);
        if ($check === false) {
            echo "<script>alert('File is not a valid image.'); window.location.href='admin.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('No file selected.'); window.location.href='admin.php';</script>";
        exit();
    }

    // Allow certain file formats
    $allowedFormats = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "<script>alert('Only JPG, JPEG, PNG & GIF files are allowed.'); window.location.href='admin.php';</script>";
        exit();
    }

    // Check file size (5MB max)
    if ($_FILES["photographer_photo"]["size"] > 5000000) { 
        echo "<script>alert('File is too large. Maximum allowed size is 5MB.'); window.location.href='admin.php';</script>";
        exit();
    }

    // Move uploaded file to target directory
    if (move_uploaded_file($_FILES["photographer_photo"]["tmp_name"], $target_file)) {
        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO photographers (name, email, photo, speciality) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $newFileName, $speciality);

        if ($stmt->execute()) {
            echo "<script>alert('New photographer added successfully'); window.location.href='admin.php';</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='admin.php';</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Error uploading file.'); window.location.href='admin.php';</script>";
    }
}

$conn->close();
?>
