<?php include_once "header.php"?>
<br>
<br>
<br>
<br>
<div class="row">
  <div class="col-md-6 offset-md-3">
  <div class="form1">  
 <form>                                  
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 col-sm-8 ">
  
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a valid email address" />
              <label class="form-label" for="form3Example3">Email address</label>
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Enter password" />
              <label class="form-label" for="form3Example4">Password</label>
            </div>
  
            <div class="d-flex justify-content-between align-items-center">
              <a href="new-account.php" class="text-body">creat account</a>
            </div>
  
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;" id="login">Login</button>
            </div>
        </div>
      </div>
    </div>
 </form>
</div>
  </div>
</div>
</div>
<?php include_once "footer.php"?>