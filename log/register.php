<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];

$fileName = md5($email);

$userInfo = serialize(['firstName' => $firstName, 'lastName' => $lastName, 'email' => $email, 'password' => $password]);

if(!file_exists("data")) {
    mkdir("data", 0777, true);
}

if (file_exists("data/$fileName.dat") == 1) {
    file_put_contents("data/$fileName.dat", $userInfo);
    echo "<h2>Użytkownik istnieje, dane zaktualizowane</h2>";
    $update = file_get_contents("data/$fileName.dat");
    $update = unserialize($update);

    foreach ($update as $key) {
        echo "<p>$key</p>";
    }
} else {
    echo "<h2>Użytkownik został dodany do bazy!</h2>";
    file_put_contents("data/$fileName.dat", $userInfo);
}

header('Location: login.html');







