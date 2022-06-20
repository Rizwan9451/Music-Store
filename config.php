<?php

// this file contains data base configuration assuming you are running mysql using user "root" and password
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');

// try connecting to the database
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

// CHECK THE CONECTION
    if($conn==false){
        dir('Error:cannot connect');
    }


?>