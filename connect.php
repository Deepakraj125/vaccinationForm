<?php

//variables
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phoneNo = $_POST['phoneNo'];
$birth_date = $_POST['birth_date'];
$gender = $_POST['gender'];
$Address = $_POST['Address'];
$center = $_POST['center'];
$slot = $_POST['slot'];


//database connection

$con = new mysqli('localhost', 'root', '','vaccination');

if($con->connect_error){
    die('connection Failed : ' .$con->connect_error);
}
else{
    $stmt = $con->prepare("insert into registration (firstName,middleName, lastname, gender,email,phoneNo,birth_date, Address, center, slot) values(?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssissss", $firstName, $middleName,$lastName, $gender, $email,$phoneNo, $birth_date,$Address, $center,  $slot  );
    $stmt->execute();
    echo " Registration Successfull !!! ";
    $stmt->close();
    $con->close();
    
}

?>
