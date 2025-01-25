<?php

include('includes/database.php');
include('includes/config.php');
include('includes/functions.php');
secure();
include('includes/header.php');


 
    
  
?>
<div class="container mt-5">
<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="display-1">add user</h1>
 
   <a href="users_add">add new user</a>
   <form method="post">
   <!-- username input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="username" id="username" class="form-control" name="email"/>
    <label class="form-label" for="email">Username</label>
  </div>
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="email" class="form-control" name="email"/>
    <label class="form-label" for="email">Email address</label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="password" class="form-control" name="password"/>
    <label class="form-label" for="password">Password</label>
  </div>
  <!-- active element -->
  <div data-mdb-input-init class="form-outline mb-4">
    <select name="active" id="active">
      <option value="1">Active</option>
      <option value="0">Inactive</option>
    </select>
  </div>
  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
        <label class="form-check-label" for="form1Example3"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
 


</div>
  <!-- Submit button -->
  <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block">Sign in</button>
</form>
</div>
</div>
</div>
<script src="js/mdb.umd.min.js">
 </script>
<?php
  
 



include('includes/footer.php');

?>