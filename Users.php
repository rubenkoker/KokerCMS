<?php

include('includes/database.php');
include('includes/config.php');
include('includes/functions.php');
secure();
include('includes/header.php');

if($stm = $connect->prepare('SELECT * FROM users')){
    $stm->execute();
    $result = $stm->get_result();
    $user = $result->fetch_assoc();
    var_dump($user);
   
    
    if($user){
        
    }
  
?>
<div class="container mt-5">
<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="display-1">User managemetn</h1>
   <table class="table table-striped table-hover">
      <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Status</th>
        <th>Edit || delete</th>
      </tr>
   </table>
   <?php while($record = mysqli_fetch_assoc($result)){ ?> 
      <tr>
      <?php var_dump($record);?> 

      </tr>
  
   <?php } ?>
   
   
   ?>
</div>
</div>
</div>
<script src="js/mdb.umd.min.js">
 </script>
<?php
  echo 'no users found';
  $stm->close();
}
else{
  echo 'could not prepare statement';
}
include('includes/footer.php');

?>