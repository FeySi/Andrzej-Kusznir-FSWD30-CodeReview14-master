<?php

 

require_once 'actions/db_connect.php';

 

if($_GET['id']) {

    $id = $_GET['id'];

 

    $sql = "SELECT * FROM bige WHERE id = {$id}";

    $result = $connect->query($sql);

 

    $data = $result->fetch_assoc();

 

    $connect->close();

 

?>

 

<!DOCTYPE html>

<html>

<head>

    <title>Edit Event</title>

 

    <style type="text/css">

        fieldset {

            margin: auto;

            margin-top: 100px;

            width: 50%;

        }

 

        table tr th {

            padding-top: 20px;

        }

    </style>

 

</head>

<body>

 

<fieldset>

    <legend>Edit Event</legend>

 

    <form action="actions/a_update.php" method="post">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>Name</th>

                <td><input type="text" name="name" placeholder="Name of Event" value="<?php echo $data['name'] ?>" /></td>

            </tr>     

            <tr>

                <th>Image</th>

                <td><input type="text" name="image" placeholder="image_url" value="<?php echo $data['image'] ?>" /></td>

            </tr>

            <tr>

                <th>Description</th>

                <td><input type="text" name="description" placeholder="Description" value="<?php echo $data['description'] ?>" /></td>

            </tr>

            <tr>

                <th>Date</th>

                <td><input type="text" name="dateandtime" placeholder="Date" value="<?php echo $data['dateandtime'] ?>" /></td>

            </tr>

            <tr>

                <th>Capacity</th>

                <td><input type="text" name="capacity" placeholder="Capacity" value="<?php echo $data['capacity'] ?>" /></td>

            </tr>

            <tr>

                <th>Contact</th>

                <td><input type="text" name="contact" placeholder="Contact Email" value="<?php echo $data['contact'] ?>" /></td>

            </tr>

            <tr>

                <th>Phone</th>

                <td><input type="text" name="contact_phone" placeholder="Phone number" value="<?php echo $data['contact_phone'] ?>" /></td>

            </tr>

            <tr>

                <th>Address</th>

                <td><input type="text" name="address" placeholder="Address" value="<?php echo $data['address'] ?>" /></td>

            </tr>

            <tr>

                <th>URL</th>

                <td><input type="text" name="URL" placeholder="URL for event" value="<?php echo $data['URL'] ?>" /></td>

            </tr>

            <tr>

                <th>Type of Event</th>

                <td><input type="text" name="type" placeholder="type of event" value="<?php echo $data['type'] ?>" /></td>

            </tr>

            <tr>

                <input type="hidden" name="id" value="<?php echo $data['id']?>" />

                <td><button type="submit">Save Changes</button></td>

                <td><a href="home2.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 

</body>

</html>

 

<?php

}

?>