<?php
    if (isset($_POST['upload'])){
        $msg = "";
        $target = "images/".basename($_FILES['image']['name']);

        include 'db.php';

        $name = $_POST['name_surename'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone_number'];
        $medical = $_POST['medical_aid_number'];
        $profile_img = $_FILES['image']['name'];

        $sql = "INSERT INTO patients (name_surename, age, gender, email, password, phone_number, medical_aid_number, profile_img) VALUES ('$name', '$age', '$gender', '$email', '$password', '$phone', '$medical', '$profile_img')";

        // mysqli_query($conn, $sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image Upload Success";
        }else {
            $msg = "There was aproblem uploading the image";
        }

        $conn->query($sql);
        $conn->close();

        header("location: patients.php");
    }
    
?>