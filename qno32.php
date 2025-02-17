ini_set('display_errors', 1);
error_reporting(E_ALL);
<?php
$host = 'localhost';
$user = 'root';
$pass = ''; 
$dbname = 'Anupa_db';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'] ?? null;
    $name = trim($_POST['name']);
    $rank = trim($_POST['rank']);
    $status = trim($_POST['status']);
    $created_by = trim($_POST['created_by']);
    $updated_by = trim($_POST['updated_by']);
    $image = $_FILES['image']['name'] ? basename($_FILES['image']['name']) : null;

    $errors = [];

    if (!$name) $errors[] = "Name is required.";
    if (!$rank) $errors[] = "Rank is required.";
    if (!$status) $errors[] = "Status is required.";

    if ($image) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . $image;
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
    }

    if (empty($errors)) {
        if ($id) {
            $sql = "UPDATE records SET name=?, rank=?, status=?, image=?, updated_by=?, updated_at=NOW() WHERE id=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('sssssi', $name, $rank, $status, $image, $updated_by, $id);
        } else {
            $sql = "INSERT INTO records (name, rank, status, image, created_by, created_at) VALUES (?, ?, ?, ?, ?, NOW())";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('sssss', $name, $rank, $status, $image, $created_by);
        }
        $stmt->execute();
        echo "Record saved successfully.";
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM records WHERE id=$id");
    echo "Record deleted successfully.";
}

$result = $conn->query("SELECT * FROM records");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<h1>Manage Records</h1>
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" id="id">
    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name" required><br><br>

    <label for="rank">Rank:</label><br>
    <input type="text" name="rank" id="rank" required><br><br>

    <label for="status">Status:</label><br>
    <input type="text" name="status" id="status" required><br><br>

    <label for="created_by">Created By:</label><br>
    <input type="text" name="created_by" id="created_by" required><br><br>

    <label for="updated_by">Updated By:</label><br>
    <input type="text" name="updated_by" id="updated_by"><br><br>

    <label for="image">Image:</label><br>
    <input type="file" name="image" id="image"><br><br>

    <input type="submit" value="Save">
</form>

<h2>Record List</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Rank</th>
        <th>Status</th>
        <th>Image</th>
        <th>Created By</th>
        <th>Updated By</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['rank']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><img src="uploads/<?php echo $row['image']; ?>" width="50"></td>
            <td><?php echo $row['created_by']; ?></td>
            <td><?php echo $row['updated_by']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td><?php echo $row['updated_at']; ?></td>
            <td>
                <a href="?edit=<?php echo $row['id']; ?>">Edit</a> |
                <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
