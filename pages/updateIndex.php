<?php
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
        $id = $_POST['id'];
        $date = $_POST['Date'];
    }

    // $sql = "UPDATE appointments SET patient_id='$selected' WHERE id=$id";
    $sql = "UPDATE appointments SET patient_id='$selected', receptionist_id='$selected3', doctor_id='$selected2', Date='$date' WHERE id=$id";

    $result = $conn->query($sql);
    $conn->close();
    header("location: ../home.php");
?>