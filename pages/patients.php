<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name_surename'])) {

?>
<?php
error_reporting(0);

    require 'db.php';
    if (isset($_POST["submit"])){
        $name = $_POST['name_surename'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone_number'];
        $medical = $_POST['medical_aid_number'];

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
                $sql = "INSERT INTO patients (name_surename, age, gender, email, password, phone_number, medical_aid_number, profile_img) VALUES ('$name', '$age', '$gender', '$email', '$password', '$phone', '$medical', '$newImageName')";
                mysqli_query($conn, $sql);
                echo "<script> alert('Successfully Added'); </script>";
            }
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christian Krahtz - Patients</title>

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
            <a class="navbar-brand mt-2 mt-lg-0" href="../home.php">
                <img src="../images/FloppyDisc.jpeg" height="50" width="50" style="object-fit: cover;" alt="krahtz Project" loading="lazy"/>
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../home.php">Appointments</a>
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
            <div class="container m-2" style="width: auto;">
                <!-- Log out section - Update all relevant information -->
                <h1 id="User"><?php echo $_SESSION['name_surename']; ?></h1>
            </div>
            <div class="container m-2" style="width: auto;">
                <!-- Log out section - Update all relevant information -->
                <a class="btn btn-primary" href="../logout.php">LOGOUT</a>
            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <!-- Body -->
    <div class="container">
        <h1 style="margin-top:3%;">Patients</h1>
        <hr style="margin-bottom:3%;">
        <table class="table">
            <!-- <tbody>  -->
            <div class="container">
                <?php include 'readPatients.php'; ?>
            </div>
            <!-- </tbody> -->
        </table>
    </div>

    
    <table class="table">
        <div class="container">
            <div class="card" style="width: 50%; margin-left: auto; margin-right: auto; margin-bottom: 5%;">
                <div class="card-body">
                    <h4> Add new Patient </h4>
                    <form  class="form-inline m-2" action="" method="POST" autocomplete="off" enctype="multipart/form-data"><!-- action="createPatients.php" -->
                        <label for="name">Name and Surname</label>
                        <input type="text" class="form-control m-2" id="name_surename" name="name_surename" required="required">

                        <label for="age">Age</label>
                        <input type="number" class="form-control m-2" id="age" name="age" required="required">

                        <label for="gender">Gender</label>
                        <input type="text" class="form-control m-2" id="gender" name="gender" required="required">

                        <label for="email">Email</label>
                        <input type="email" class="form-control m-2" id="email" name="email" required="required">

                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control m-2" id="phone_number" name="phone_number" required="required">

                        <label for="medical_aid">Medical Aid Number</label>
                        <input type="text" class="form-control m-2" id="medical_aid_number" name="medical_aid_number" required="required">

                        <label for="password">Password</label>
                        <input type="password" class="form-control m-2" id="password" name="password" required="required">

                        <label for="image">Upload Image</label><br>
                        <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="" required="required"><br><br>
                        
                        <input type="submit" name="submit" class="btn btn-primary" value="Add">
                        <!-- <button type="submit" name="upload" class="btn btn-primary">Add</button> -->
                    </form>
                </div>
            </div>
        </div> 
    </table>
    
    <!-- Body -->
</body>
</html>

<?php
}else {
    header("Location: index.php");
    exit();
}
?>