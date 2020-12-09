<?php
    $conn = new mysqli('localhost', 'root', '', 'sample');

    $username = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO inputpost (name, email) VALUES ('$username', '$email')";
    $select = "SELECT * FROM inputpost";

    if (isset($_POST['name'], $_POST['email'])){
        if ($conn->query($sql) === TRUE) {
            $result = $conn->query($select);
            while($row = $result->fetch_assoc()){
                echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

?>