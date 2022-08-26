<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the PDO error mode to exception
    echo "Connected Successfully";
    
} catch(PDOException $e) {

    echo "Connection Failed" .$e->getMessage();
}


  if($_SERVER['REQUEST_METHOD'] === 'POST'){
		
		  $Fname = $_POST['first_name'];
		  $Lname = $_POST['last_name'];
			$email = $_POST['email'];
			$pass = sha1($_POST['password']);
        

		//	echo $firstname . " " . $lastname . " " . $email . " " . $phonenumber . " " . $password ;
             

      $error = '';       

if (!$Fname || !$pass || !$Lname ||!$email) {
     echo $error = 'Username and Password are required.';

  }else {
    $sql = "INSERT INTO test (firstName, lastName, , email, password,) VALUES(?,?,?,?,?,)";

             $stmtinsert = $conn->prepare($sql);

             $result = $stmtinsert->execute([$Fname, $Lname, $email, $pass,]);
     


    if (!$result) {  
         $error = 'Invalid username or password!';
         $Fname = $pass = $Lname = $Uname = $email = '';
         }else{

            header('location:n .php');
         }
         
	}
}

?>