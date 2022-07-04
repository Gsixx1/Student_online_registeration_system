<?php 
include_once('process.php');
$display = "SELECT * FROM student";
$result = mysqli_query($con, $display)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stored Data</title>
</head>
<body>
    <?php
    if(mysqli_num_rows($result) > 0){
        ?>
        <table>
            <tr>
                <td>ID</td>
                <td>FIRST NAME</td>
                <td>LAST NAME</td>
                <td>DATE OF BIRTH</td>
                <td>ADDRESS</td>
                <td>PHONE NUMBER</td>
                <td>NEXT OF KIN</td>
                <td>EMAIL</td>
                <td>EDUCATIONAL LEVEL</td>
            </tr>
            <?php
            $i = 0;
            while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['address_home']; ?></td>
                    <td><?php echo $row['phone_number']; ?></td>
                    <td><?php echo $row['next_of_kin']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['edu_level']; ?></td>
                </tr>
               <?php
                $i++;
        }
        ?>               
        </table>
        <?php
    }else{
        echo 'No data found in the database';
    }
    ?>
</body>
</html>