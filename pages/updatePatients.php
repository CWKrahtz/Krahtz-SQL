<?php
    include 'db.php';

    $id = $_POST['id'];
    $name = $_POST['name_surename'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone_number'];
    $medical = $_POST['medical_aid_number'];

    $sql = "UPDATE patients SET name_surename='$name', age='$age', gender='$gender', email='$email', password='$password', phone_number='$phone', medical_aid_number='$medical' WHERE id=$id";

    $result = $conn->query($sql);
    $conn->close();
    header("location: patients.php");
?>