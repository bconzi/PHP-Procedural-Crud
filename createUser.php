<html>
    <head>
        <title>Users Registration</title>
    </head>
    <link rel="stylesheet" type="text/css" href="design_1.css">
    <body>
   <?php      
        
         require_once 'connection.php';
         
        session_start();
                if(isset($_SESSION['us'])){
                echo 'User '. $_SESSION['us'];
                }
                ?>
        <h3>New Users Registration</h3>
        <p>
            &nbsp;
        </p>
<?php


if(isset($_POST['sub'])){
$user= filter_input(INPUT_POST, 'us');
$password= filter_input(INPUT_POST, 'ps');

$pass_encript= password_hash($password, PASSWORD_DEFAULT, array('cost'=>12));

$sql="INSERT INTO SESIONES_USUARIOS (usuarios, password) VALUES (:us, :ps)";

$register=$base->prepare($sql);

$register->execute(array(':us'=>$user, ':ps'=>$pass_encript));

echo 'User '.$user.' succesfully registered! <br>';
}

?>
        <p>
            &nbsp;
            </p>
    <center>
        <form method="post">
    <table class="t2">

        <tr>
            <td> Username </td>
            <td class="input-background"><input type="text" name="us" id="us" placeholder="Enter new Username" class="text"></td></tr>
        <tr>    
            <td> Password</td>
            <td class="input-background"><input type="password" name="ps" placeholder="Enter new Password" id="ps" class="text"></td></tr>
        <tr>
            <td style="alignment-baseline: central"><input type="submit" style="height: 20pt; text-align:center" name="sub" id="sub" value="Create" class="button"></td></tr>
    </table>

</form>
        </center>
            <p>
            &nbsp;
        </p>
                   <p>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
    </p>    
    
    <div style="justify-content: space-between; margin: 30px auto;">
    <a href="usersArea.php"><input type="button" class="button" name="back" value="Back"></a>
    </div>
       <div style="text-align: right;width:1020px; ">
          <a href="closeSession.php"><input type="button" class= "button" name="btn" value="Close Session" </a>
        </div>
        
            </body>
</html>