<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Define allowed file types and maximum size
    $allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
    $maxFileSize = 1048576; // 1MB in bytes

    // Check if a file was uploaded
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['cv']['tmp_name'];
        $fileName = $_FILES['cv']['name'];
        $fileSize = $_FILES['cv']['size'];
        $fileType = $_FILES['cv']['type'];
        $uploadDir = 'uploads/';

        // Validate file type
        if (!in_array($fileType, $allowedTypes)) {
            echo "Invalid file type. Only PDF and DOC files are allowed.";
            exit;
        }

        // Validate file size
        if ($fileSize > $maxFileSize) {
            echo "File size exceeds the maximum limit of 1MB.";
            exit;
        }

        // Sanitize file name and move file to the upload directory
        $fileNameSafe = uniqid() . "_" . basename($fileName);
        $destination = $uploadDir . $fileNameSafe;

        if (move_uploaded_file($fileTmpPath, $destination)) {
            echo "File uploaded successfully!";
        } else {
            echo "File upload failed. Please try again.";
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
        <label for="cv">Upload your CV (PDF, DOC, DOCX):</label>
        <input type="file" name="cv" id="cv" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
