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

 

    $id = $_POST['id'];

 

    $sql = "UPDATE bige SET name = '$name', dateandtime ='$dateandtime',image ='$image',description='$description',capacity='$capacity',contact='$contact',contact_phone='$contact_phone',address='$address',URL='$URL',type='$type' WHERE id = {$id}";

    if($connect->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='../update.php?id=".$id."'><button type='button'>Back</button></a>";

        echo "<a href='../home.php'><button type='button'>Home</button></a>";

    } else {

        echo "Erorr while updating record : ". $connect->error;

    }

 

    $connect->close();

 

}

 

?>