
<!DOCTYPE html>

<html>

<head>

    <title>Add Event</title>

 

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

    <legend>Add Event</legend>

 

    <form action="actions/a_create.php" method="post">

        <table cellspacing="0" cellpadding="0">

           <tr>

                <th>Name</th>

                <td><input type="text" name="name" placeholder="Name of Event" /></td>

            </tr>     

            <tr>

                <th>Image</th>

                <td><input type="text" name="image" placeholder="image_url"/></td>

            </tr>

            <tr>

                <th>Description</th>

                <td><input type="text" name="description" placeholder="Description"/></td>

            </tr>

            <tr>

                <th>Date</th>

                <td><input type="text" name="dateandtime" placeholder="Date" /></td>

            </tr>

            <tr>

                <th>Capacity</th>

                <td><input type="text" name="capacity" placeholder="Capacity" /></td>

            </tr>

            <tr>

                <th>Contact</th>

                <td><input type="text" name="contact" placeholder="Contact Email" /></td>

            </tr>

            <tr>

                <th>Phone</th>

                <td><input type="text" name="contact_phone" placeholder="Phone number"/></td>

            </tr>

            <tr>

                <th>Address</th>

                <td><input type="text" name="address" placeholder="Address" /></td>

            </tr>

            <tr>

                <th>URL</th>

                <td><input type="text" name="URL" placeholder="URL for event"/></td>

            </tr>

            <tr>

                <th>Type of Event</th>

                <td><input type="text" name="type" placeholder="type of event"/></td>

            </tr>

            

            <tr>

                <td><button type="submit">Insert Event</button></td>

                <td><a href="home2.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 

</body>

</html>