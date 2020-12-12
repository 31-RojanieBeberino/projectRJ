
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

    //Connection to the dataMysql
    $conn = new mysqli('localhost', 'root', '', 'projectrj');
                      //localhost     name      Database Folder

    //Creating Variable for the inputs in html
    $username = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenum = $_POST['number'];
    $message = $_POST['message'];


    //Query for inserting Data from inputs
    $sql = "INSERT INTO contactform (firstname, lastname, email, number, message) VALUES ('$username','$lastname','$email','$phonenum', '$message')";

    //Query for selecting data for the database.
    //$select = "SELECT * FROM inputpost";


    //function to Execute the program.
    if (isset($_POST['firstname'],$_POST['lastname'], $_POST['email'], $_POST['number'] ,$_POST['message'])){
        if ($conn->query($sql) === TRUE) {
            echo "Thanks for getting in touch with us.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }else{

    }
?>
<body>
</body>
</html>