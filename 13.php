<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script>
        // Function to check if the username exists in the database
        function checkUsername() {
            const username = document.getElementById('username').value.trim();  // Trim the input
            const resultDiv = document.getElementById('result');

            // If the input field is empty, display a message
            if (username === '') {
                resultDiv.innerHTML = 'Please enter a valid username.';
                return;
            }

            // Create an XMLHttpRequest object
            const xhr = new XMLHttpRequest();
            xhr.open('GET', '?username=' + username, true);  // Use the same PHP file for AJAX

            // Define what to do when the response is received
            xhr.onload = function() {
                if (xhr.status === 200) {
                    const response = xhr.responseText;
                    resultDiv.innerHTML = response;  // Display the result
                }
            };

            // Send the request
            xhr.send();
        }
    </script>
</head>
<body>

    <h1>Password Reset</h1>
    <p>Enter Username:</p>
    <input type="text" id="username" onkeyup="checkUsername()" placeholder="Username">
    <div id="result"></div>

    <?php
    // Only execute this block if the username is passed via the URL
    if (isset($_GET['username'])) {
        $username = $_GET['username'];

        // Connect to the database (adjust your connection details accordingly)
        $servername = "localhost";  // Your server
        $username_db = "root";      // Your database username
        $password_db = "";          // Your database password
        $dbname = "db_pkmc_2079_sl";  // Your database name

        // Create a connection
        $conn = new mysqli($servername, $username_db, $password_db, $dbname);

        // Check if the connection was successful
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to check if the username exists
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if the username exists in the database
        if ($result->num_rows > 0) {
            echo "Username is already taken.";
        } else {
            echo "Username is available.";
        }

        // Close the database connection
        $conn->close();
    }
    ?>

</body>
</html>
