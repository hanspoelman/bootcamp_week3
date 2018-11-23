<?php

//  verbinding maken en gegevens opslaan

    ini_set('display_errors',1);
    error_reporting(E_ALL);

    $host='localhost';
    $user='root';
    $pass='mysql';
    $dbase='bootcamp_week3';
        
    $conn= new mysqli($host,$user,$pass,$dbase);

    $titel=$_POST['titel'];
    $auteur=$_POST['auteur'];
    $email=$_POST['email'];
    $onderwerp=$_POST['onderwerp'];
    $blog=$_POST['blog'];
      
    $sql = "INSERT INTO blog (titel,auteur,email,onderwerp,blog) VALUES (?,?,?,?,?)";  

    if ($stmt=$conn->prepare($sql)) {
        $stmt->bind_param("sssss", $mytitel, $myauteur, $myemail, $myonderwerp, $myblog);
        $mytitel=$titel;
        $myauteur=$auteur;
        $myemail=$email;
        $myonderwerp=$onderwerp;
        $myblog=$blog;
        
        $stmt->execute();
        
    
//  Na het plaatsen van de blogs ga je naar de blogpagina        
    header("location: blogs.php")
    }

    $conn->close();
?>
