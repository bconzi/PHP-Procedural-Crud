<?php

session_start();

session_destroy();

  setcookie('remember', $_POST['ch'], time()-1, '/');

header("Location:index.php");