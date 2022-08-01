<?php include_once "header.php"?>
<?php 
   $card_data = [
       [ 'title' => 'GET LEAVE', 'image' => 'imG/image.jpg' ],
       [ 'title' => 'REQUEST PERMISSION', 'image' => 'images/image.jpg' ],
       [ 'title' => 'REQUEST VACATIONS', 'image' => 'images/image.jpg' ],
       [ 'title' => 'HOLIDAYS', 'image' => 'images/image.jpg' ],
   ];
?>

<div class="container" style="margin-top:140px">
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
<?php include_once "footer.php" ?>