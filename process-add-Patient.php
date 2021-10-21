<?php
include 'config.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dateofbirth = $_POST['dateofbirth'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $blood_type = $_POST['blood_type'];
    $created_on = $_POST['created_on'];
    $modified_on = $_POST['modified_on'];
    
    // Bước 02:
    $sql = "INSERT INTO patient (firstname, lastname, dateofbirth, gender, mobile, email, height, eweight, blood_type, created_on, modified_on)
    VALUES ('$firstname','$lastname','$dateofbirth','$gender','$mobile','$email','$height','$weight','$blood_type','$created_on','$modified_on')";

    echo $sql;
    $result = mysqli_query($conn,$sql);
    // Bước 03:
    if($result > 0){
        header("Location:patient.php");
    }else{
        echo "Lỗi!";
    }


    //Bước 04: Đóng kết nối
    mysqli_close($conn);


?>