<?php

session_start();

if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fileName = md5($email);

    if(file_exists("data/$fileName.dat")) {
        $file = file_get_contents("data/$fileName.dat");
        $file = unserialize($file);
        
        if ($file['password'] === $password) {
            $_SESSION["firstName"] = $file["firstName"];
            $_SESSION["lastName"] = $file["lastName"];
            $_SESSION["is_auth"] = 1;
            header('Location: welcome.php');
        } else {
            echo "<h1>Błędny login lub hasło!</h1>";
        }
    }  
}


