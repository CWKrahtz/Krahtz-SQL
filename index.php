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
<script> alert('Successfully Added'); </script>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
                <img src="images/FloppyDisc.jpeg" height="50" width="50" style="object-fit: cover;" alt="krahtz Project" loading="lazy"/>
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Appointments</a>
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
        <h1 style="margin-top:3%; margin-bottom:2%;">Upcoming Appointment</h1>
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
                    <form class="form-inline m-2" action="pages/createIndex.php" method="POST">
                        <label for="name">Patient</label>
                        <input type="number" class="form-control m-2" id="patient_id" name="patient_id">

                        <label for="age">Receptionist</label>
                        <input type="number" class="form-control m-2" id="receptionist_id" name="receptionist_id">

                        <label for="gender">Doctor</label>
                        <input type="number" class="form-control m-2" id="doctor_id" name="doctor_id">

                        <label for="date">Date</label>
                        <input type="date" class="form-control m-2" id="Date" name="Date">
                        
                        <button type="submit" name="upload" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div> 
    </table>
</body>
</html>