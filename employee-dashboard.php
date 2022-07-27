<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edashboard</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark">
            <div class="container">
                <a class="navbar-brand font-weight-bold" href="index.php">
                  <span class="text-danger">LEAVE MANEGEMENT SYSTEM</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"                    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
                </button>
      
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav ml-auto font-weight-bold">
            <li class="nav-item mr-5">
              <a class="nav-link text-white" href="history.php">history</a>
            </li>
            <li class="nav-item mr-5">
              <a class="nav-link text-white" href="employee-profile.php">profile</a>
            </li>
            <li class="nav-item mr-5">
              <a class="nav-link text-white" href="leave-form.php">request leave</a>
          </ul>
        </div>
       </div>
    </nav>
</nav>
<div class="container" style="margin-top:140px">
    <button class="btn btn-danger" id="logout">Logout</button>
</div>
<br>
<br>
<div class="col-lg-4 mb-3">
    <div class="card" style="width: 18rem;" height="50%">
  <img src="img/img1.avif" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, dolores itaque voluptates numquam consequuntur error, modi magnam minus aut incidunt mollitia? Nobis a vel commodi vero officiis consequuntur nisi tempore.</p>
  </div>
    </div>
</div>
</body>
<?php include_once "footer.php" ?>
</html>