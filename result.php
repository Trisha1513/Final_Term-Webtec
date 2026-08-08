<!DOCTYPE html>
<html>
<head>
    <title>Application Result</title>
</head>

<body>

<h2>Application Result</h2>

<?php

$id = $_GET['id'] ?? '';
$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$phone = $_GET['phone'] ?? '';
$gender = $_GET['gender'] ?? '';
$position = $_GET['position'] ?? '';
$qualification = $_GET['qualification'] ?? '';
$address = $_GET['address'] ?? '';

if ($id == '' || $name == '' || $email == '') {

    echo "<h3>Application Failed!</h3>";
    echo "<p>Required information is missing.</p>";

} else {

    echo "<h3>Application Submitted Successfully!</h3>";

    echo "<p><b>Applicant ID:</b> " . htmlspecialchars($id) . "</p>";

    echo "<p><b>Full Name:</b> " . htmlspecialchars($name) . "</p>";

    echo "<p><b>Email:</b> " . htmlspecialchars($email) . "</p>";

    echo "<p><b>Phone Number:</b> " . htmlspecialchars($phone) . "</p>";

    echo "<p><b>Gender:</b> " . htmlspecialchars($gender) . "</p>";

    echo "<p><b>Job Position:</b> " . htmlspecialchars($position) . "</p>";

    echo "<p><b>Educational Qualification:</b> " . htmlspecialchars($qualification) . "</p>";

    echo "<p><b>Address:</b> " . htmlspecialchars($address) . "</p>";

    echo '<br><a href="index.php">Go Back</a>';
}

?>

</body>
</html>