<?php
    // Enter your host name, database username, password, and database name.
// The MySQL service named in the docker-compose.yml.
$host = 'db';
// Database use name
$user = 'MYSQL_USER';
//database user password
$pass = 'MYSQL_PASSWORD';
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect($host,$user ,$pass,"MYSQL_DATABASE");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>