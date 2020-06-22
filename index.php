<html>
    <head>
        <title>Log In</title>
        
        <link rel="stylesheet" type="text/css" href="design_1.css">
    </head>
    <body>

        <p>
            &nbsp;
            &nbsp;
        </p>
      

<?php

require_once 'connection.php';

if(isset($_COOKIE['remember'])){
    
    header("Location:usersArea.php");
    
}
if(isset($_POST['sub'])){
    
$user= filter_input(INPUT_POST, 'us');
$password= filter_input(INPUT_POST, 'ps');

$sql="SELECT * FROM SESIONES_USUARIOS WHERE USUARIOS=:us";

$register=$base->prepare($sql);

$register->execute(array(':us'=>$user));

$rows_qty=$register->rowCount();

while($registered=$register->fetch(PDO::FETCH_ASSOC)){
    
    if(password_verify($password, $registered['password']) && $rows_qty>0){
        
        session_start();
       $_SESSION['us']=$_POST['us'];
        header('Location:usersArea.php');
       
    } else {
    
        echo 'Invalid User or password';
        echo "<script>setTimeout('document.location.href = index.php;',500);</script>";
        
    }break;
}
}

if(isset($_POST['ch'])){
    
    setcookie('remember', $_POST['ch'], time()+86400, '/');
    
    header("Location:usersArea.php");
    
}
?>
           <p>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
            </p>
    <center>
          <form method="post" action="">
            <table>
            <tr>
                <td class="sin"><label for="us">Username</label></td>
                <td class="sin"><input type="text" class="text" placeholder="Username" name="us"></td>
            </tr>
            <tr>
                <td class="sin"><label for="ps">Password</label></td>
                <td class="sin"><input type="password" class="text" placeholder="Password" name="ps"></td>
            </tr>
         
            </table>
              <p>
                  &nbsp;
                   &nbsp;
                   </p>
              <label for="ch">Remember me</label>
              <input type="checkbox"  name="ch">
              <p>
                  &nbsp;
                  &nbsp;
                          </p>
                          <input type="submit" value="Log In" name="sub" style="border:  rgb(44, 62, 80) 1px solid; font-size: 10pt; font-family: Verdana;
         background-color:#2C3E50; color:#ffffff; height: 18pt">
        </form>
</center>
    </body>
</html>