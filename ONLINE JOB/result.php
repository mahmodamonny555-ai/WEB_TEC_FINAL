<!DOCTYPE html>
<html>
<head>
    <title>Application Result</title>
</head>

<body>

<?php

$applicant_id = $_GET["applicant_id"];
$name = $_GET["name"];
$email = $_GET["email"];
$phone = $_GET["phone"];
$gender = $_GET["gender"];
$job_position = $_GET["job_position"];
$qualification = $_GET["qualification"];
$address = $_GET["address"];
$cv = $_GET["cv"];

$request_name = $_REQUEST["name"];
$request_email = $_REQUEST["email"];

?>

<h2>=================================</h2>

<h2>APPLICATION SUCCESSFUL</h2>

<h2>=================================</h2>

<p>
    <strong>Applicant ID:</strong>
    <?php echo $applicant_id; ?>
</p>

<p>
    <strong>Name:</strong>
    <?php echo $request_name; ?>
</p>

<p>
    <strong>Email:</strong>
    <?php echo $request_email; ?>
</p>

<p>
    <strong>Phone:</strong>
    <?php echo $phone; ?>
</p>

<p>
    <strong>Gender:</strong>
    <?php echo $gender; ?>
</p>

<p>
    <strong>Job Position:</strong>
    <?php echo $job_position; ?>
</p>

<p>
    <strong>Qualification:</strong>
    <?php echo $qualification; ?>
</p>

<p>
    <strong>Address:</strong>
    <?php echo $address; ?>
</p>

<p>
    <strong>Uploaded CV:</strong>
    <?php echo $cv; ?>
</p>

<p>
    Application submitted successfully.
</p>

</body>
</html>