<?php

    function secure(){
        if(!isset($_SESSION['id'])){
            echo 'please login';
            die();
        }
    }