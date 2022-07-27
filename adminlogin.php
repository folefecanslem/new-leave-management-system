<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <linl rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
  <br>
<body>
    <div>
         <header>
            <nav class="navbar navbar-expand-md fixed-top bg-dark">
               <div class="container">
                   <a class="navbar-brand font-weight-bold" href="index.php">
                       <span class="text-danger">ADMIN LODIN </SPAN>
                    </a>    
                 </div>
            </nav>
        </header>
    </div>
    <br>
    <br>
    <br>    

<form class="form2">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 col-sm-8 ">
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                     <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                 </div>
                 <div class="mb-3 form-check">
                     <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                 </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class=" align-items-center">
              <a href="#!" class="text-body">Forgot password?</a>
            </div>
           
        </div>

    </div>
</form>
 <bginage img src="img/img6.avif" alt="" width="100%" height="100">
</body>
<?php include_once "footer.php" ?>
</html>