<?php include_once "next.php"?>

<?php 
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $email = $_POST['email'];
    $first_name = $_POST['first_name'] ;
    $last_name = $_POST['last_name'] ;
    $password = $_POST['password'] ;


    $pdo= new PDO('mysql:host=localhost;port=3306;dbname=test','root','');
    $query = $conn->query("INSERT INTO test (first_name,last_name,email,password) VALUE(:first_name,:last_name,:email,:password) ");
    $querry_run = $conn->prepare($query);
        $query->bindValue(':first_name', $first_name,);
        $query->bindValue(':last_name', $last_name,);
        $query->bindValue(':email', $email,);
        $query->bindValue(':password', $passwor,);


    $querry_execute=$querry_run ->execute();
    if($querry_execute){
        $_SESSION["message"] = "inserted successfully";
        header('location : employee-dashboard.php');

    }else{
        $_SESSION["message"] = "not inserted successfully";
        header('location : employee-dashboard.php');

    }
}
// echo "$email $name $pnumber";

