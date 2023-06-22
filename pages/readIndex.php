<?php 
error_reporting(0); 
    include 'db.php';

    $sql = "SELECT * FROM appointments";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        // Patient Name
        $patientID = $row['patient_id'];
        $sql2 = "SELECT * FROM patients WHERE id = $patientID";

        $result2 = $conn->query($sql2);
        $columnValue = "";

        if ($result2->num_rows > 0) {
            // Loop through each row and fetch the column value
            while ($row2 = $result2->fetch_assoc()) {
                $columnValue = $row2["name_surename"];
            }
        }
        // Doctor Name
        $doctorID = $row['doctor_id'];
        $sql3 = "SELECT * FROM doctors  WHERE id = $doctorID";

        $result3 = $conn->query($sql3);
        $columnValue2 = "";

        if ($result3->num_rows > 0) {
            // Loop through each row and fetch the column value
            while ($row3 = $result3->fetch_assoc()) {
                $columnValue2 = $row3["name_surename"];
            }
        }
        // Receptionist Name
        $receptionistsID = $row['receptionist_id'];
        $sql4 = "SELECT * FROM receptionists  WHERE id = $receptionistsID";

        $result4 = $conn->query($sql4);
        $columnValue3 = "";

        if ($result4->num_rows > 0) {
            // Loop through each row and fetch the column value
            while ($row4 = $result4->fetch_assoc()) {
                $columnValue3 = $row4["name_surename"];
            }
        }

        echo "<tr>";
        if ($row['id'] == $_GET['id']){
            echo '<form class="form-inline m-2" action="pages/updateIndex.php" method="POST" autocomplete="off" enctype="multipart/form-data">';
            //Patient
            // echo '<td><input type="int" class="form-control" name="patient_id" value="'.$columnValue.'"></td>';
            echo '<td>
                    <select class="form-control" name="patient_id">';
                    $sql2 = "SELECT * FROM patients";
                    $result2 = $conn->query($sql2);
                    
                    while($row2 = $result2->fetch_assoc()) {
                        echo '<option value="' .$row2["id"]. '">' . $row2["name_surename"] . '</option>';
                    }
            echo '</select></td>';
            //Receptionist
            // echo '<td><input type="int" class="form-control" name="receptionist_id" value="'.$columnValue3.'"></td>';
            echo '<td>
                    <select class="form-control" name="receptionist_id">';
                    $sql4 = "SELECT * FROM receptionists";
                    $result4 = $conn->query($sql4);
                    
                    while($row4 = $result4->fetch_assoc()) {
                        echo '<option value="' .$row4["id"]. '">' . $row4["name_surename"] . '</option>';
                    }
            echo '</select></td>';
            //Doctor
            // echo '<td><input type="int" class="form-control" name="doctor_id" value="'.$columnValue2.'"></td>';
            echo '<td>
                    <select class="form-control" name="doctor_id">';
                    $sql3 = "SELECT * FROM doctors";
                    $result3 = $conn->query($sql3);
                    
                    while($row3 = $result3->fetch_assoc()) {
                        echo '<option value="' .$row3["id"]. '">' . $row3["name_surename"] . '</option>';
                    }
            echo '</select></td>';
            //Date
            echo '<td><input type="date" class="form-control" name="Date" value="'.$row['Date'].'"></td>';
            echo '<td><button type="submit" name="submit" class="btn btn-primary">Save</button></td>';
            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '</form>';
        }else{

            echo "<td value='" .$row['patient_id']. "'>" . $columnValue . "</td>";
            echo "<td value='" .$row['receptionist_id']. "'>" . $columnValue3 . "</td>";
            echo "<td value='" .$row['doctor_id']. "'>" . $columnValue2 . "</td>";
            echo "<td>" . $row['Date'] . "</td>";
            echo '<td><a class="btn btn-primary" href="home.php?id=' . $row['id'] . '" role="button">Update</a></td>';//EDIT
        }
        
        echo '<td><a class="btn btn-danger" href="pages/deleteIndex.php?id=' . $row['id'] . '" role="button">Delete</a></td>';//UPDATE
        echo "</tr>";
    }

    $conn->close();

?>