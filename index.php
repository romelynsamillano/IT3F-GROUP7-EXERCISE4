<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function sanitize_input($data) {
    return htmlspecialchars(trim($data));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processed Data</title>
</head>
<body>
    <h1>Processed Data</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["name"]) && isset($_GET["age"])) {
            $name = sanitize_input($_GET["name"]);
            $age = sanitize_input($_GET["age"]);
            echo "<h2>GET Request Result</h2>";
            echo "<p>Name: " . $name . "</p>";
            echo "<p>Age: " . $age . "</p>";
        } else {
            echo "<h2>GET Request Result</h2>";
            echo "<p>No data received via GET.</p>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["name"]) && isset($_POST["age"])) {
            $name = sanitize_input($_POST["name"]);
            $age = sanitize_input($_POST["age"]);
            echo "<h2>POST Request Result</h2>";
            echo "<p>Name: " . $name . "</p>";
            echo "<p>Age: " . $age . "</p>";
        } else {
            echo "<h2>POST Request Result</h2>";
            echo "<p>No data received via POST.</p>";
        }
    }
    ?>
    
    <a href="index.html">Go back to form</a>
</body>
</html>
