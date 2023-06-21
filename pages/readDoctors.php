<?php error_reporting(0);
    include 'db.php';

    $sql = "SELECT * FROM doctors";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        if ($row['id'] == $_GET['id']){
                echo '<div class="card" style="width: 50%; margin-left: auto; margin-right: auto; margin-bottom: 5%;">'; //background-image: url(../images/FloppyDisc.jpeg); object-fit: cover;
                    echo '<div class="card-body">';
                    echo '<form class="form-inline m-2" action="updateDoctors.php" method="POST">';
                    echo '<div class="form-group">';
                    echo '<label>Name and Surname</label>';
                    echo '<input type="text" class="form-control" name="name_surename" value="'.$row['name_surename'].'">';
                    echo '</div>';
                    echo '<div class="form-group">';
                    echo '<label>Age</label>';
                    echo '<input type="number" class="form-control" name="age" value="'.$row['age'].'">';
                    echo '</div>';
                    echo '<div class="form-group">';
                    echo '<label>Gender</label>';
                    echo '<input type="text" class="form-control" name="gender" value="'.$row['gender'].'">';
                    echo '</div>';
                    echo '<div class="form-group">';
                    echo '<label>Email</label>';
                    echo '<input type="email" class="form-control" name="email" value="'.$row['email'].'">';
                    echo '</div>';
                    echo '<div class="form-group">';
                    echo '<div class="form-group">';
                    echo '<label>Phone Number</label>';
                    echo '<input type="text" class="form-control" name="phone_number" value="'.$row['phone_number'].'">';
                    echo '</div>';
                    echo '<div class="form-group">';
                    echo '<label>Specialisation</label>';
                    echo '<input type="text" class="form-control" name="specialisation" value="'.$row['specialisation'].'">';
                    echo '</div>';
                    echo '<div class="form-group">';
                    echo '<label>Room</label>';
                    echo '<input type="int" class="form-control" name="room_id" value="'.$row['room_id'].'">';
                    echo '</div>';
                    echo '<label>Password</label>';
                    echo '<input type="password" class="form-control" name="password" value="'.$row['password'].'">';
                    echo '</div>';
                    echo '<button type="submit" class="btn btn-primary">Save</button>';
                    echo '<input type="hidden" name="id" value="'.$row['id'].'">';
                    echo '</form>';
                echo '</div>';
            echo '</div>';
        }else{
            echo '<div class="card" style="width: 50%; margin-left: auto; margin-right: auto; margin-bottom: 5%;">'; //background-image: url(../images/FloppyDisc.jpeg); object-fit: cover;
                echo '<div class="card-body" style="text-align: center;">';
                    echo '<img src="../images/' .$row["profile_img"]. '" style="width:100px;  height: 100px; border-radius: 50%;"><br><hr>';
                    echo '<h5 class="card-title">' .$row["name_surename"]. '</h5>';
                    echo '<p class="card-text">' .$row["email"]. '</p>';
                    echo '<p class="card-text">' .$row["phone_number"]. '</p>';
                    echo '<p class="card-text">' .$row["specialisation"]. '</p>';
                    echo '<a class="btn btn-primary" href="doctors.php?id=' . $row['id'] . '" role="button" style="margin: 1%">Update</a>';//EDIT
                    echo '<a class="btn btn-danger" href="deleteDoctors.php?id=' . $row['id'] . '" role="button" style="margin: 1%">Delete</a>';//UPDATE 
                echo '</div>';
            echo '</div>';
        }
    }

    $conn->close();

?>