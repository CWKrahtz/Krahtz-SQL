<?php

    include 'db.php';

    $name = $_POST['name_surename'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone_number'];
    $specialisation = $_POST['specialisation'];
    $room_id = $_POST['room_id'];

    $sql = "INSERT INTO patients (name_surename, age, gender, email, password, phone_number, specialisation, room_id) VALUES ('$name', '$age', '$gender', '$email', '$password', '$phone', '$specialisation', '$room_id')";

    $conn->query($sql);
    $conn->close();

    header("location: doctors.php");
?>