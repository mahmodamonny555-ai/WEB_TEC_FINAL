<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $applicant_id = $_POST["applicant_id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $qualification = $_POST["qualification"];
    $address = $_POST["address"];
    $job_position = $_POST["job_position"];

    if (isset($_POST["gender"])) {
        $gender = $_POST["gender"];
    } else {
        $gender = "";
    }

    $error = "";

    if ($applicant_id == "") {
        $error .= "Applicant ID is required.<br>";
    }

    if ($name == "") {
        $error .= "Name is required.<br>";
    }

    if ($email == "") {
        $error .= "Email is required.<br>";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error .= "Enter a valid email address.<br>";
    }

    if ($phone == "") {
        $error .= "Phone number is required.<br>";
    }
    elseif (strlen($phone) != 11) {
        $error .= "Phone number must contain 11 digits.<br>";
    }

    if ($password == "") {
        $error .= "Password is required.<br>";
    }
    elseif (strlen($password) < 6) {
        $error .= "Password must contain at least 6 characters.<br>";
    }

    if ($gender == "") {
        $error .= "Please select your gender.<br>";
    }

    if ($job_position == "") {
        $error .= "Please select a job position.<br>";
    }

    if ($qualification == "") {
        $error .= "Qualification is required.<br>";
    }

    if ($address == "") {
        $error .= "Address is required.<br>";
    }

    if (!isset($_FILES["cv"]) || $_FILES["cv"]["name"] == "") {
        $error .= "Please upload your CV.<br>";
    }
    else {

        $fileName = $_FILES["cv"]["name"];
        $fileSize = $_FILES["cv"]["size"];

        $fileExtension = strtolower(
            pathinfo($fileName, PATHINFO_EXTENSION)
        );

        if ($fileExtension != "pdf" &&
            $fileExtension != "doc" &&
            $fileExtension != "docx") {

            $error .= "Only PDF, DOC and DOCX files are allowed.<br>";
        }

        if ($fileSize > 2 * 1024 * 1024) {
            $error .= "CV file size must be maximum 2 MB.<br>";
        }
    }

    if ($error != "") {

        echo "<h2>Application Failed!</h2>";
        echo $error;

    }
    else {

        if (!is_dir("uploads")) {
            mkdir("uploads");
        }

        $fileName = $_FILES["cv"]["name"];
        $tmpName = $_FILES["cv"]["tmp_name"];

        move_uploaded_file(
            $tmpName,
            "uploads/" . $fileName
        );

        header(
            "Location: result.php?" .
            "applicant_id=" . urlencode($applicant_id) .
            "&name=" . urlencode($name) .
            "&email=" . urlencode($email) .
            "&phone=" . urlencode($phone) .
            "&gender=" . urlencode($gender) .
            "&job_position=" . urlencode($job_position) .
            "&qualification=" . urlencode($qualification) .
            "&address=" . urlencode($address) .
            "&cv=" . urlencode($fileName)
        );

        exit();
    }
}

?>