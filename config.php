<?php
    if ($_REQUEST['REQUEST_METHOD'] != 'post'){
        header('index.php');
        exit();
        die();
    }
    $servername = 'localhost:3037';
    $username = 'root';
    $password = '';
    $dbname ='';
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>