<?php 
error_reporting(0);
    include 'db.php';

    $sql = "SELECT * FROM patients";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        if ($row['id'] == $_GET['id']){
                echo '<div class="card" style="width: 50%; margin-left: auto; margin-right: auto; margin-bottom: 5%;">'; //background-image: url(../images/FloppyDisc.jpeg); object-fit: cover;
                    echo '<div class="card-body">';

                    echo '<form  class="form-inline m-2" action="updatePatients.php" method="POST" autocomplete="off" enctype="multipart/form-data">';

                    echo '<div class="form-group">';
                    echo '<label>Name</label>';
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
                    echo '<label>Password</label>';
                    echo '<input type="password" class="form-control" name="password" value="'.$row['password'].'">';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label>Phone Number</label>';
                    echo '<input type="text" class="form-control" name="phone_number" value="'.$row['phone_number'].'">';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label>Medical Aid Number</label>';
                    echo '<input type="text" class="form-control" name="medical_aid_number" value="'.$row['medical_aid_number'].'">';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="image">Update Image</label><br>';
                    echo '<input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""><br><br>';
                    echo '</div>';

                    echo '<input type="submit" name="submit2" class="btn btn-primary" value="Save">';

                    echo '<input type="hidden" name="id" value="'.$row['id'].'">';
                    echo '</form>';
                echo '</div>';
            echo '</div>';
        }else{
            echo '<div class="card" style="width: 50%; margin-left: auto; margin-right: auto; margin-bottom: 5%;">'; //background-image: url(../images/FloppyDisc.jpeg); object-fit: cover;
                echo '<div class="card-body" style="text-align: center;">';
                    echo '<img style="width:100px;  height: 100px; border-radius: 50%; background-size: cover; background-image: url(../images/' .$row["profile_img"]. ');"><br><hr>';
                    echo '<h5 class="card-title" style="margin-left:auto; margin-right:auto;">' .$row["name_surename"]. '</h5>';
                    echo '<p class="card-text">' .$row["email"]. '</p>';
                    echo '<p class="card-text">' .$row["phone_number"]. '</p>';
                    echo '<a class="btn btn-primary" href="patients.php?id=' . $row['id'] . '" role="button" style="margin: 1%">Update</a>';//EDIT
                    echo '<a class="btn btn-danger" href="deletePatients.php?id=' . $row['id'] . '" role="button" style="margin: 1%">Delete</a>';//UPDATE 
                echo '</div>';
            echo '</div>';
        }
    }

    $conn->close();

?>