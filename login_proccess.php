<?php
session_start();


$email = $_POST['email'] ?? "";
$password = $_POST['password'] ?? "";


if( !$email || !$password){
    $_SESSION['message'] = "email amd password required";
    header('location: ./login.php');
    exit;

}


$pdo = new PDO('mysql:host=localhost;port=3306;dbname=test', 'root', '');
$query = $pdo->prepare("SELECT * FROM test WHERE email = :email AND `password` = :password");
 $query->bindValue(':email', $email);
 $query->bindValue(':password', $password);
 $query->execute();

 $user = $query->fetch(PDO::FETCH_ASSOC);
//  var_dump($user);

if(!$user){
    $_SESSION['message'] = "wrong email or password";
    header('location: ./login.php');
    exit;
}else{
    $_SESSION['user'] = $user;
    header('location: ./service.php');

}

