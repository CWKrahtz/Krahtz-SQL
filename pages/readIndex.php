<?php 
error_reporting(0); 
    include 'db.php';

    $sql = "SELECT * FROM appointments";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        // echo "Hello";
        $patientID = $row['patient_id'];
        $sql2 = "SELECT name_surename FROM patients WHERE id = $patientID";

        $result2 = $conn->query($sql2);
        $columnValue = "";

        if ($result2->num_rows > 0) {
            // Loop through each row and fetch the column value
            while ($row2 = $result2->fetch_assoc()) {
                $columnValue = $row2["name_surename"];
            }
        }

        echo "<tr>";
        if ($row['id'] == $_GET['id']){
            echo '<form class="form-inline m-2" action="pages/updateIndex.php" method="POST">';
            echo '<td><input type="int" class="form-control" name="patient_id" value="'.$columnValue.'"></td>';
            // echo '<td>
            //         <select>
            //             <input type="int" class="form-control" name="patient_id" value="'.$columnValue.'">
            //         </select>
            //     </td>';
            // get value from dropdown
            echo '<td><input type="int" class="form-control" name="receptionist_id" value="'.$row['receptionist_id'].'"></td>';
            echo '<td><input type="int" class="form-control" name="doctor_id" value="'.$row['doctor_id'].'"></td>';
            echo '<td><input type="date" class="form-control" name="Date" value="'.$row['Date'].'"></td>';
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '</form>';
        }else{

            echo "<td>" . $columnValue . "</td>";
            echo "<td>" . $row['receptionist_id'] . "</td>";
            echo "<td>" . $row['doctor_id'] . "</td>";
            echo "<td>" . $row['Date'] . "</td>";
            echo '<td><a class="btn btn-primary" href="index.php?id=' . $row['id'] . '" role="button">Update</a></td>';//EDIT
        }
        
        echo '<td><a class="btn btn-danger" href="pages/deleteIndex.php?id=' . $row['id'] . '" role="button">Delete</a></td>';//UPDATE
        echo "</tr>";
    }

    $conn->close();

?>