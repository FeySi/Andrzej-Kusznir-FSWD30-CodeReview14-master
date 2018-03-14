<?php

 

require_once 'db_connect.php';

 

if($_POST) {

    $name = $_POST['name'];
    $dateandtime = $_POST['dateandtime'];
    $image = $_POST['image'];  
    $description = $_POST['description'];
    $capacity = $_POST['capacity']; 
    $contact = $_POST['contact'];
    $contact_phone = $_POST['contact_phone'];
    $address = $_POST['address'];
    $URL = $_POST['URL'];
    $type = $_POST['type'];

    
 

    $sql = "INSERT INTO bige (name,dateandtime,image,description,capacity,contact,contact_phone,address,URL,type) VALUES ('$name','$dateandtime','$image','$description','$capacity','$contact','$contact_phone','$address','$URL','$type')";

    if($connect->query($sql) === TRUE) {

        echo "<p>New Record Successfully Created</p>";

        echo "<a href='../create.php'><button type='button'>Back</button></a>";

        echo "<a href='../home2.php'><button type='button'>Home</button></a>";

    } else {

        echo "Error " . $sql . ' ' . $connect->connect_error;

    }

 

    $connect->close();

}

 

?>