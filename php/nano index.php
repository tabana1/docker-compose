<?php
    echo 'Welcome this is with docker';

    $mysqli = new mysqli('db','root','example','users');
    $sql = "INSERT INTO users_detail (names) VALUES('Ceed Media')";
    $result = $mysqli->query($sql);
?>