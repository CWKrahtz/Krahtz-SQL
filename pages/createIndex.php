<?php

    include 'db.php';

    $patient_id = $_POST['patient_id'];
    $receptionist_id = $_POST['receptionist_id'];
    $doctor_id = $_POST['doctor_id'];
    $Date = $_POST['Date'];

    $sql = "INSERT INTO appointments (patient_id, receptionist_id, doctor_id, Date) VALUES ('$patient_id', '$receptionist_id', '$doctor_id', '$Date')";

    $conn->query($sql);
    $conn->close();

    header("location: ../index.php");
?>