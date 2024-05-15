<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $location=$_POST['location'];
    $phonenumber=$_POST['phone'];
    $description=$_POST['description'];

    $con = new mysqli('localhost', 'host', 'ojoksoebprch');

    if($con){
        // echo "connection successful";
        $sql = "insert into data (firstname, lastname, location, phone, description) values ('$firstname', '$lastname', '$location', '$phonenumber', '$description')";
        $result = $con->query($sql);

        if($result){
            echo "Data inserted successfully";
        } else {
            die(mysqli_error($con));
        }

    } else {
        die(mysqli_error($con));
    }
}
?>