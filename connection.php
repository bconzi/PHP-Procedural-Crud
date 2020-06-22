<?php

try {
    $base = new PDO('mysql:host=localhost; dbname=pruebas', 'brenda', 'bren');

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec('SET CHARACTER SET UTF8');
    
} catch (Exception $e) {
    
    die('Error '.$e->getMessage());
    echo '<br>';
    
    echo $e->getLine();
}


