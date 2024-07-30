<?php
$insert=false;
if(isset($_POST['firstName'])){
    $servername="localhost:3307";
    $username="root";
    $password="";
    $database="signup";
    // Creating database connection
    $conn=mysqli_connect($servername, $username, $password,$database);

    // It is used Check connection build or not
    if(!$conn)
    {
        die("Failed to connect".mysqli_connect_error());
    }
    // else
    // {
        // echo "Connected Successfully ";
    // }
    // Collecting the POST variables
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $phone=$_POST['phone'];
    $pin=$_POST['pin'];
    $birthday=$_POST['birthday'];
    $gender=$_POST['gender'];

    // Insert data in database using mysql query
    $sql="INSERT INTO `users` (`First Name`, `Last Name`, `Phone No.`, `Password`, `Birthday`, `Gender`) VALUES ('$firstName', '$lastName', '$phone', '$pin','$birthday','$gender')";

    // It is used check that our query worked or not. If true=1 or false=0
    if($conn->query($sql)== true)
    {
        // echo "Successfully";
        // $insert=true;
    }
    else{
        echo "ERROR: $sql <br> $conn->error"; // It is used to show the error message
    }
    mysqli_close($conn); // It is used to close our connection
}
?>
