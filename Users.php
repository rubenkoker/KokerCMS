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
    die();
    
    if($user){
        
    }
    $stm->close();
}
else{
  echo 'could not prepare statement';
}
?>
<div class="container mt-5">
<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="display-1">User managemetn</h1>
    <a href="users.php">Users management</a>
    <a href="posts.php">Posts management</a>
</div>
</div>
</div>
<script src="js/mdb.umd.min.js">
 </script>
<?php
include('includes/footer.php');
?>