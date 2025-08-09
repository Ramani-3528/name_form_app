<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    $sql = "INSERT INTO users (name) VALUES ('$name')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Name saved successfully!'); window.location.href='display.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
