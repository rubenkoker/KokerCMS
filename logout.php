<?php

include('includes/config.php');

session_destroy();

header('Location: /KOKERCMS');
die();