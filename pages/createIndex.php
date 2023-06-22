<?php

    // $patient_id = $_POST['patient_id'];
    // $receptionist_id = $_POST['receptionist_id'];
    // $doctor_id = $_POST['doctor_id'];
    // $Date = $_POST['Date'];
    include 'db.php';

    if(isset($_POST['submit'])){
        if(!empty($_POST['patient_id'])) {
            $selected = $_POST['patient_id'];
        }
        if(!empty($_POST['doctor_id'])) {
            $selected2 = $_POST['doctor_id'];
        }
        if(!empty($_POST['receptionist_id'])) {
            $selected3 = $_POST['receptionist_id'];
        }
        $Date = $_POST['Date'];
    }

    $sql = "INSERT INTO appointments (patient_id, receptionist_id, doctor_id, Date) VALUES ('$selected', '$selected3', '$selected2', '$Date')";
    
    $conn->query($sql);
    $conn->close();

    header("location: ../index.php");

?>