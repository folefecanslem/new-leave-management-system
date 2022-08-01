<?php include_once "header.php"?>
<?php 
   $card_data = [
       [ 'title' => 'GET LEAVE', 'image' => 'img/img5.avif' ],
       [ 'title' => 'REQUEST PERMISSION', 'image' => 'img/img8.avif' ],
       [ 'title' => 'REQUEST VACATIONS', 'image' => 'img/img6.avif' ],
       [ 'title' => 'HOLIDAYS', 'image' => 'img/img7.avif' ],
   ];
?>

<div class="container" style="margin-top:140px">
<div class="d-flex justify-content-between align-items-center">
              <a href="change-password.php" class="text-body">CHANGE PASSWORD</a>
            </div>
    <button class="btn btn-danger" id="logout">Logout</button>
    <h3 class="text-center text-danger mb-4">OUR SERVICES</h3>
    <div class="row">
       <?php foreach ($card_data as $data): ?>
        <div class="col-md-3" style="margin-bottom:100px">
           <div class="card">
               <div class="card-header text-danger font-weight-bold text-uppercase"><?php echo $data['title'] ?></div>
               <img src="<?php echo $data['image'] ?>" class="img-fluid">
               <div class="card-body">
                   <h4 class="text-danger">ABOUT</h4>
                   <p>
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet minus sed non 
                   </p>
               </div>
              
           </div>
        </div>
       <?php endforeach ?>
    </div>
</div>
<br>
<br>
<br>
<br>
<?php include_once "footer.php" ?>