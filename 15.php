<?php
// This PHP block is used to read the content of bca.txt and send it as a response to AJAX.
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Path to your text file
    $file_path = 'bca.txt';

    // Check if the file exists
    if (file_exists($file_path)) {
        // Read the contents of the file and return as response
        echo file_get_contents($file_path);
    } else {
        echo "File not found!";
    }
    exit; // Terminate PHP processing after sending the response
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCA Description</title>
    <script>
        // Function to load the content from bca.txt using AJAX
        function loadBCAContent() {
            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();
            
            // Define the method, URL, and asynchronous flag
            xhr.open('GET', '', true); // Empty string will call the same PHP file

            // Set up the callback function when the request is complete
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Display the file content in the 'content' div
                    document.getElementById('content').innerHTML = xhr.responseText;
                }
            };

            // Send the AJAX request
            xhr.send();
        }
    </script>
</head>
<body onload="loadBCAContent()">
    <h1>BCA Program Description</h1>
    <div id="content">Loading content...</div>
</body>
</html>
