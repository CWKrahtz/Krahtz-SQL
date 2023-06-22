
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name_surename'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christian Krahtz - Home</title>

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
            <a class="navbar-brand mt-2 mt-lg-0" href="home.php">
                <img src="images/FloppyDisc.jpeg" height="50" width="50" style="object-fit: cover;" alt="krahtz Project" loading="lazy"/>
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/patients.php">Patients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/doctors.php">Doctors</a>
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
                <a class="btn btn-primary" href="logout.php">LOGOUT</a>
            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <!-- Body -->
    <div class="container">
        <h1 style="margin-top:3%; margin-bottom:2%;">Upcoming Appointments</h1>
        <table class="table" >
            <!-- <thead> -->
                <tr>
                    <th>Patient</th>
                    <th>Recetpionist</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th></th>
                    <th></th>
                </tr>
            <!-- </thead> -->
            <tbody>
                <?php include 'pages/readIndex.php'; ?>
            </tbody>
        </table>
    </div>
    <!-- Body -->
    <table class="table">
        <!-- Test -->
        <div class="container">
            <div class="card" style="width: 50%; margin-left: auto; margin-right: auto; margin-bottom: 5%;">
                <div class="card-body">
                    <h4> New Appointment </h4>
                    <?php include 'pages/formIndex.php'; ?>                    
                </div>
            </div>
        </div> 
    </table>
</body>
</html>

<?php
}else {
    header("Location: index.php");
    exit();
}
?>