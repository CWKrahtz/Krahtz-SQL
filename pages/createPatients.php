<?php

    include 'db.php';

    $name = $_POST['name_surename'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone_number'];
    $medical = $_POST['medical_aid_number'];

    $sql = "INSERT INTO patients (name_surename, age, gender, email, password, phone_number, medical_aid_number) VALUES ('$name', '$age', '$gender', '$email', '$password', '$phone', '$medical')";

    $conn->query($sql);
    $conn->close();

    header("location: patients.php");
?>