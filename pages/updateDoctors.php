<?php
    include 'db.php';

    $id = $_POST['id'];
    $name = $_POST['name_surename'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone_number'];
    $specialisation = $_POST['specialisation'];
    $room_id = $_POST['room_id'];

    $sql = "UPDATE doctors SET name_surename='$name', age='$age', gender='$gender', email='$email', password='$password', phone_number='$phone', specialisation='$specialisation' WHERE id=$id";

    $result = $conn->query($sql);
    $conn->close();
    header("location: doctors.php");
?>