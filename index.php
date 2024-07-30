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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form id="login" action="index.php" method="post">
            <h1>Sign Up <i class="fa-solid fa-xmark"></i></h1>
            <h3>It's quick and easy.</h3>
            <hr>
            <input type="text" id="first" name="firstName" placeholder="First Name" required/>
            <input type=" text" id="second" name="lastName" placeholder="Last Name" required/>
            <input type="text" id="mobile" name="phone" placeholder="Mobile number or email" required/>
            <input type="password" id="pwd" name="pin" placeholder="New password" required/>
            <h5>Birthday <i class="fa-solid fa-circle-question"></i></h5>
            <input type="date" id="dob" name="birthday" required/>
            <h5>Gender <i class="fa-solid fa-circle-question"></i></h5>
            <input type="text" id="gn" name="gender" placeholder="Enter Your Gender (Male/Female/Others)" required/>
            <p>By clicking Sign Up, you agree to our
                <a href="#">Terms</a>. Learn how we collect, use and share your data in our <a href="#">Data Policy</a> and how we use cookies and similar technology in our <a href="#">Cookies Policy</a>. You may receive SMS Notifications from us and
                can opt out any time.
            </p>
            <button id="btn" type="submit">Sign Up</button>
        </form>
    </div>
    <script src="index.js "></script>
</body>

</html>