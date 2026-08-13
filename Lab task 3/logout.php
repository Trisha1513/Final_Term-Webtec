<?php
session_start();

session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Removed</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>

<div class="container">

    <h2>Session Removed Successfully</h2>

    <p>Student session data is no longer available.</p>

    <a href="dashboard.php">
        <button>Go to Dashboard</button>
    </a>

    <a href="index.php">
        <button>Back to Registration</button>
    </a>

</div>

</body>
</html>
