<?php
include "config.php";

if (isset($_POST["submit"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO users(first_name,last_name,email,password,gender) VALUES('$first_name','$last_name','$email','$password','$gender')";

    $result = $conn->query($sql);

    if ($result == true) {
        header('Location: view.php');
        echo "New record created successfully";
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <h2>Sign Up Form</h2>

    <form action="" method="post">

        <h1>Personal Information</h1><br>
        First Name:<br>
        <input type="text" name="first_name"><br>
        Last Name:<br>
        <input type="text" name="last_name"><br>
        Email:<br>
        <input type="text" name="email"><br>
        Password:<br>
        <input type="password" name="password"><br>
        Gender:<br>
        <input type="radio" name="gender" value="male">Male</input>
        <input type="radio" name="gender" value="female">Female</input>

        <br><br>
        <input type="submit" value="submit" name="submit">


    </form>

</body>

</html>