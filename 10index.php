<?php
// login.php (Embedded into the same file)

$valid_users = [
    "user1" => "password123",
    "user2" => "password456"
];

// Check if user credentials are provided
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['userid']) && isset($_POST['password'])) {
        $userid = $_POST['userid'];
        $password = $_POST['password'];

        // Validate credentials (static validation)
        if (isset($valid_users[$userid]) && $valid_users[$userid] === $password) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }
    exit;  // Exit after handling the POST request
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .hidden { display: none; }
        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            text-align: center;
        }
        input {
            margin: 10px 0;
            padding: 10px;
            width: 80%;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .error { color: red; }
        .welcome { color: green; }
    </style>
</head>
<body>

<div class="container" id="login-form">
    <h2>Login</h2>
    <div class="error hidden" id="error-message">Invalid credentials, please try again.</div>
    <div class="welcome hidden" id="welcome-message">Welcome, you are logged in!</div>

    <form id="loginForm">
        <input type="text" id="userid" name="userid" placeholder="User ID" required /><br>
        <input type="password" id="password" name="password" placeholder="Password" required /><br>
        <button type="submit">Login</button>
    </form>
</div>

<script>
$(document).ready(function() {
    $("#loginForm").on("submit", function(e) {
        e.preventDefault();  // Prevent the page from reloading on form submission

        var userid = $("#userid").val();
        var password = $("#password").val();

        // AJAX request
        $.ajax({
            url: '',  // Current page (self-submit)
            type: 'POST',
            data: {
                userid: userid,
                password: password
            },
            success: function(response) {
                if (response == "success") {
                    // Hide form inputs and show welcome message
                    $("#login-form").html('<div class="welcome">Welcome, you are logged in!</div>');
                } else {
                    // Show error message
                    $("#error-message").removeClass("hidden");
                }
            },
            error: function() {
                // Show error message in case of server issues
                $("#error-message").removeClass("hidden").text('Server error, please try again.');
            }
        });
    });
});
</script>

</body>
</html>
