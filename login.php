<?php
session_start();
    include 'pages/db.php';

    if (isset($_POST['name_surename']) && isset($_POST['password'])) {
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['name_surename']);
    $password = validate($_POST['password']);
    
    if (empty($username)) {
        header("Location: index.php?error=Username is required");
        exit();
    } else if (empty($password)){
        header("Location: index.php?error=Password is required");
        exit();
    }else {
        $sql = "SELECT * FROM receptionists WHERE name_surename='$username' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['name_surename'] === $username && $row['password'] === $password) {
                $_SESSION['name_surename'] = $row['name_surename'];
                $_SESSION['rank'] = $row['rank'];
                $_SESSION['id'] = $row['id'];

                header("Location: home.php");
                exit();
            }
        }else {
            header("Location: index.php?error=Incorrect Username or Password");
            exit();
        }
    }

  }else {
    header("Location: index.php");
    exit();
  }
?>