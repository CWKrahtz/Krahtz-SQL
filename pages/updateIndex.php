<?php
    include 'db.php';

    $id = $_POST['id'];
    $patient = $_POST['patient_id'];
    $doctor = $_POST['doctor_id'];
    $recept = $_POST['receptionist_id'];
    $date = $_POST['Date'];

    $sql = "UPDATE appointments SET patient_id='$patient', receptionist_id='$recept', doctor_id='$doctor', Date='$date' WHERE id=$id";

    $result = $conn->query($sql);
    $conn->close();
    header("location: ../index.php");
?>