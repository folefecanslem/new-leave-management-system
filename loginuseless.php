<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYEE LEAVE MANAGEMENT SYSTEm</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
         <a class="navbar-brand font-weight-bold" href="index.php">
             <span class="text-danger">EMPLOYEE LOGIN/SIGNIN</span> 
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
       
         <div class="collapse navbar-collapse" id="navbarsExampleDefault">
           <ul class="navbar-nav ml-auto font-weight-bold">
             <li class="nav-item mr-5 active">
               <a class="nav-link text-white" href="index.php">HOME</a>
             </li>
             <li class="nav-item mr-5">
               <a class="nav-link text-white" href="profile.php">PROFILE</a>
             </li>
             <li class="nav-item mr-5">
               <button class="nav-link text-white bg-danger px-2" id="togglerBtn" style="border:0;">TOGGLE BOXES</button>
             </li>
           </ul>
         </div>
        </div>
       </nav>
</header>
<body>
  <form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
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
  </form>
</body>
</html>