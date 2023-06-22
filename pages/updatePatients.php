
<?php
error_reporting(0);
    require 'db.php';
    if (isset($_POST["submit2"])){
        $id = $_POST['id'];
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
                
                $sql = "UPDATE patients SET name_surename='$name', age='$age', gender='$gender', email='$email', password='$password', phone_number='$phone', medical_aid_number='$medical', profile_img='$newImageName'  WHERE id=$id";
                mysqli_query($conn, $sql);
                echo "<script> alert('Successfully Added'); </script>";
                
            }
        }
        // $conn->query($sql);
        // $conn->close();
        header("location: patients.php");
       
    }
    
?>