<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = htmlspecialchars($_GET['name']);
        $age = htmlspecialchars($_GET['age']);
        echo "Submitted via GET<br>";
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
    } else {
        echo "GET: Name or Age not provided.<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']) && isset($_POST['age'])) {
        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST['age']);
        echo "Submitted via POST<br>";
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
    } else {
        echo "POST: Name or Age not provided.<br>";
    }
}
?>
