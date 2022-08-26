<?php session_start() ?>
<?php include_once "header.php"?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <br>
   <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>ALL EMPLOYEES </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>EMAIL</th>
                                    <th>FullName</th>
                                    <th>PNUMBER</th>
                                    <th>PASSWORD</th>
                                </tr>
                            </thead>
                            <!-- database connection -->
                                <?php

                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $database = "test";
                                
                                try {
                                
                                    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                                }catch(PDOException $e) {

                                    echo "Connection Failed" .$e->getMessage();
                                }
                                // creating query
                                
                                    $query = "SELECT * FROM test";
                                    $statement = $pdo->prepare($query);
                                    $statement->execute();

                                    // displaying database contents screen by fetching as an associative array

                                    $statement->setFetchMode(PDO::FETCH_ASSOC);
                                    $result = $statement->fetchAll();
                                    if($result){
                                        foreach($result as $row){
                                            ?>
                                            <tr>
                                                <td><?= $row['id'];?></td>
                                                <td><?= $row['email'];?></td>
                                                <td><?= $row['name'];?></td>
                                                <td><?= $row['pnumber'];?></td>
                                                <td><?= $row['password'];?></td>
                                            </tr>
                                            <?php

                                        }
                                    }
                                    else{
                                        ?>
                                        <tr colspan="5">NO RECORDS FOUND</tr>
                                        <?php
                                    }
                                    ?>
                                     </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="test-form.php" class="link-primary">add user</a>
<?php include_once "footer.php"?>