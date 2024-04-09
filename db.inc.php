<!DOCTYPE html>
<html>
<head>
    <title>Database Content</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "adatabase";
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT id, content FROM mytable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Content: " . $row["content"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
