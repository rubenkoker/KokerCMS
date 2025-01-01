<?php

$connect = mysqli_connect('localhost','root','','kokerCMS');

if(mysqli_connect_errno()){
    exit('failed to connect to Database'. mysqli_connect_error());
}