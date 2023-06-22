<?php
    include 'db.php';
    echo '<form class="form-inline m-2" action="pages/createIndex.php" method="POST">';
        echo '<br>';
        echo '<label for="patient_id">Patient</label>
                <select class="form-control" name="patient_id">';
                echo '<option value="0"> Patient </option>';
                $sql2 = "SELECT * FROM patients";
                $result2 = $conn->query($sql2);
                
                while($row2 = $result2->fetch_assoc()) {
                    echo '<option value="' .$row2["id"]. '">' . $row2["name_surename"] . '</option>';
                }
        echo '</select>';
        echo '<br>';
        
        //Receptionist
        // echo '<td><input type="int" class="form-control" name="receptionist_id" value="'.$columnValue3.'"></td>';
        echo '<label for="receptionist_id">Receptionist</label>
                <select class="form-control" name="receptionist_id">';
                echo '<option value="0"> Receptionist </option>';
                $sql4 = "SELECT * FROM receptionists";
                $result4 = $conn->query($sql4);
                
                while($row4 = $result4->fetch_assoc()) {
                    echo '<option value="' .$row4["id"]. '">' . $row4["name_surename"] . '</option>';
                }
        echo '</select>';
        echo '<br>';

        //Doctor
        // echo '<td><input type="int" class="form-control" name="doctor_id" value="'.$columnValue2.'"></td>';
        echo '<label for="doctor_id">Doctor</label>
                <select class="form-control" name="doctor_id">';
                    echo '<option value="0"> Doctor </option>';
                    $sql3 = "SELECT * FROM doctors";
                    $result3 = $conn->query($sql3);
                    
                    while($row3 = $result3->fetch_assoc()) {
                        echo '<option value="' .$row3["id"]. '">' . $row3["name_surename"] . '</option>';
                    }
        echo '</select>';
        echo '<br>';

        //Date
        echo '<label for="date">Date</label>';
        echo '<input type="date" class="form-control m-2" id="Date" name="Date">';
        echo '<br>';
        echo '<button type="submit" name="submit" class="btn btn-primary">Save</button>';
    echo '</form>';

    $conn->close();
    
?>