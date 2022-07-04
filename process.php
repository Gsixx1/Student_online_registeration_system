<?php 
include_once ('database.php');
?>

<?php 
if(isset($_POST['save'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $address_home = $_POST['address_home'];
    $phone_number = $_POST['phone_number'];
    $next_of_kin = $_POST['next_of_kin'];
    $email = $_POST['email'];
    $edu_level = $_POST['edu_level'];

    $sql_post = "INSERT INTO  student(fname, lname, dob, address_home, phone_number, next_of_kin, email, edu_Level)
    VALUES ('$fname', '$lname', '$dob', '$address_home', '$phone_number', '$next_of_kin', '$email', '$edu_level')";

    if(mysqli_query($con, $sql_post)){
        echo 'Record has been saved successfully';
    }else{
        echo 'Error inserting to database';
    }mysqli_close($con);
}
?>