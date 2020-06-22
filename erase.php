<?php
session_start();
                if(isset($_SESSION['us'])){
                echo $_SESSION['us'];
                }
require_once 'connection.php';

try{
    
    
$id= filter_input(INPUT_GET, 'id');

$base->query("DELETE FROM CELLPHONES WHERE id='$id'");

//echo 'Registro borrado!';

header("Location:usersArea.php");    
  
 
} catch (Exception $ex) {

    die($ex->getMessage());
    echo $ex->getLine();
    
}
