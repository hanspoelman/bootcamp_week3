<?php

//    verbinding maken en gegevens opslaan

    ini_set('display_errors',1);
    error_reporting(E_ALL);

    $host='localhost';
    $user='root';
    $pass='mysql';
    $dbase='bootcamp_week3';
        
    $conn= new mysqli($host,$user,$pass,$dbase);

    $titel=$_POST['titel'];
    $auteur=$_POST['auteur'];
    $onderwerp=$_POST['onderwerp'];    
      
    $sql = "INSERT INTO blog (titel,auteur,onderwerp) VALUES (?,?,?)";  

    if ($stmt=$conn->prepare($sql)) {
        $stmt->bind_param("sss", $mytitel, $myauteur, $myonderwerp);
        $mytitel=$titel;
        $myauteur=$auteur;
        $myonderwerp=$onderwerp;
        
        $stmt->execute();
    }


//    verbinding maken en gegevens ophalen uit de database

    $sql = "SELECT * FROM blog post ORDER BY id DESC";
    
    $result=$conn->query($sql);
    foreach ($result as $row ) {
        print $row['titel']." ". $row['auteur']." ". $row['onderwerp'] ;
    }

    $conn->close();
?>
