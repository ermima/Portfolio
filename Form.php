<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST["name"];
    $idNumber = $_POST["idNumber"];
    $region = $_POST["Region"];
    $zone = $_POST["Zone"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $birthDate = $_POST["birthDate"];
    $eyeColor = $_POST["eye-color"];
    $otherEyeColor = $_POST["other-eye-color"];
    $hobbies = $_POST["hobbies"];

    // Validate the form data
    $errors = [];

    // Validate the name field
    if (empty($name)) {
        $errors[] = "Name is required";
    } elseif (preg_match('/\d/', $name)) {
        $errors[] = "Name cannot contain numbers";
    }

    // Validate the ID number field
    if (empty($idNumber)) {
        $errors[] = "ID number is required";
    }

    // Validate the region field
    if (empty($region)) {
        $errors[] = "Region is required";
    }

    // Validate the zone field
    if (empty($zone)) {
        $errors[] = "Zone is required";
    }
    if (empty($age)){
        $errors[] = "age is required";
    }

    // Validate the sex field
    if (empty($sex)) {
        $errors[] = "Sex is required";
    }

    // Validate the birth date field
    if (empty($birthDate)) {
        $errors[] = "Birth date is required";
    }

    // Validate the eye color field
    if ($eyeColor == "other" && empty($otherEyeColor)) {
        $errors[] = "Please enter your eye color";
    }

    // Display the validation errors or success message
    if (!empty($errors)) {
        echo "<h2>Validation Errors:</h2>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        echo "<h2>Form submitted successfully!</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>ID Number: $idNumber</p>";
        echo "<p>Region: $region</p>";
        echo "<p>Zone: $zone</p>";
        echo "<p>Sex: $sex</p>";
        echo "<p>Birth Date: $birthDate</p>";
        echo "<p>Eye Color: ";
        if ($eyeColor == "other") {
            echo $otherEyeColor;
        } else {
            echo $eyeColor;
        }
        echo "</p>";
        echo "<p>Hobbies: $hobbies</p>";
    }
}
?>