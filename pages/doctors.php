
<?php
// error_reporting(0);

    require 'db.php';
    if (isset($_POST["submit"])){
        $name = $_POST['name_surename'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone_number'];
        $specialisation = $_POST['specialisation'];
        $room_id = $_POST['room_id'];

        if ($_FILES["image"]["error"] === 4) {
            echo "<script> alert('Image Does Not Exist'); </script>";
        } 
        
        else{
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if ( !in_array($imageExtension, $validImageExtension) ){
                echo
                "
                <script>
                  alert('Invalid Image Extension');
                </script>
                ";
              }
              else  if($fileSize > 1000000){
                echo "<script> alert('Image Size To Large'); </script>";
            }
            else {
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;

                move_uploaded_file($tmpName, '../images/'. $newImageName);
                
                $sql = "INSERT INTO doctors(name_surename, age, gender, email, password, phone_number, specialisation, room_id, profile_img) VALUES ('$name','$age','$gender','$email','$password','$phone','$specialisation','$room_id','$newImageName')";
                mysqli_query($conn, $sql);
                echo "<script> alert('Successfully Added'); </script>";
            }
        }
        // $conn->query($sql);
        // $conn->close();

        // header("location: patients.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christian Krahtz - Doctors</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet"/>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img src="../images/FloppyDisc.jpeg" height="50" width="50" style="object-fit: cover;" alt="krahtz Project" loading="lazy"/>
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="patients.php">Patients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="doctors.php">Doctors</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Avatar -->
            <div class="dropdown">
                <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false" >
                    <img src="#" class="rounded-circle" height="25" alt="Name / Image" loading="lazy"/>
                </a>
            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    <!-- Body -->
    <div class="container">
        <h1 style="margin-top:3%;">Doctors</h1>
        <hr style="margin-bottom:3%;">
        <table class="table">
            <tbody>
            <?php include 'readDoctors.php'; ?>
            </tbody>
        </table>
    </div>
    <!-- Body -->

    <table class="table">
        <div class="container">
            <div class="card" style="width: 50%; margin-left: auto; margin-right: auto; margin-bottom: 5%;">
                <div class="card-body">
                    <h4> Add new Doctor </h4>
                    <form  class="form-inline m-2" action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                        <label for="name">Name and Surname</label>
                        <input type="text" class="form-control m-2" id="name_surename" name="name_surename">

                        <label for="age">Age</label>
                        <input type="number" class="form-control m-2" id="age" name="age">

                        <label for="gender">Gender</label>
                        <input type="text" class="form-control m-2" id="gender" name="gender">

                        <label for="email">Email</label>
                        <input type="email" class="form-control m-2" id="email" name="email">

                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control m-2" id="phone_number" name="phone_number">

                        <label for="medical_aid">Specialisation</label>
                        <input type="text" class="form-control m-2" id="specialisation" name="specialisation">

                        <label for="room_id">Room Id</label>
                        <input type="text" class="form-control m-2" id="room_id" name="room_id">

                        <label for="password">Password</label>
                        <input type="password" class="form-control m-2" id="password" name="password">

                        <label for="image">Upload Image</label><br>
                        <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""><br><br>

                        <input type="submit" name="submit" class="btn btn-primary" value="Add">
                    </form>
                </div>
            </div>
        </div> 
    </table>
</body>
</html>