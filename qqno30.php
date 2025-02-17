<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Define allowed file types and maximum size
    $allowedTypes = ['image/png', 'image/jpeg'];
    $maxFileSize = 512000; // 500KB in bytes

    // Check if a file was uploaded
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['profile_image']['tmp_name'];
        $fileName = $_FILES['profile_image']['name'];
        $fileSize = $_FILES['profile_image']['size'];
        $fileType = $_FILES['profile_image']['type'];
        $uploadDir = 'uploads/';

        // Validate file type
        if (!in_array($fileType, $allowedTypes)) {
            echo "Invalid file type. Only PNG and JPEG files are allowed.";
            exit;
        }

        // Validate file size
        if ($fileSize > $maxFileSize) {
            echo "File size exceeds the maximum limit of 500KB.";
            exit;
        }

        // Sanitize file name and move file to the upload directory
        $fileNameSafe = uniqid() . "_" . basename($fileName);
        $destination = $uploadDir . $fileNameSafe;

        if (move_uploaded_file($fileTmpPath, $destination)) {
            echo "Profile image uploaded successfully!";
        } else {
            echo "Image upload failed. Please try again.";
        }
    } else {
        echo "No file uploaded or there was an upload error.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="profile_image">Upload your Profile Image (PNG, JPEG):</label>
        <input type="file" name="profile_image" id="profile_image" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
