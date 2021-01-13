<?php 

    function getAll() {
        $mysql = new mysqli('localhost', 'root', '', 'contact');
        $sql = 'SELECT * FROM validate-form';
        $result = $mysql->query($sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            // while($row = $result->fetch_assoc()) {
             echo $row;
            // }
        } 
    }

    getAll();


?>