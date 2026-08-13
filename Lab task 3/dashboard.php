<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>

<div class="container">

    <h2>Student Dashboard</h2>
    <h3>session Information</h3>
    <?php
    if (isset($_SESSION['student_name']) && isset($_SESSION['student_id'])) {
        echo "<p><strong>Student name:</strong>"

            . $_SESSION['student_name'] . "</p>";
        echo "<p><strong>Student ID:</strong>"
            . $_SESSION['student_id'] . "</p>";
    } else {
        echo "<p>session data is not available.</p>";
    }
    ?>
    <h3>Cookie Information</h3>
    <?php
    if (isset($_COOKIE['student_name'])) {
        echo "<p><strong>Student name:</strong>"
            . $_COOKIE['student_name'] . "</p>";
    } else {
        echo "<p>Cookie  is not available.</p>";

    }
    ?>
    <br>
    <a href="logout.php">
        <button>Remove Cookie</button>
    </a>
    </div>

</body>
</html>