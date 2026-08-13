<?php


setcookie("student_name", "", time() - 3600, "/");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Removed</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>

<div class="container">

    <h2>Cookie Removed Successfully</h2>

    <p>Student name cookie has been deleted.</p>

    <a href="dashboard.php">
        <button>Go to Dashboard</button>
    </a>

</div>

</body>
</html>