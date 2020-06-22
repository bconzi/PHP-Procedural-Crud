<html>
    <head>
        <title>title</title>
        
        <link rel="stylesheet" type="text/css" href="design_1.css">
    </head>
    <body>
        <p>
            &nbsp;
        
             </p>
        
<?php
  require_once 'connection.php';
  
  session_start();
                if(isset($_SESSION['us'])){
                echo 'User '. $_SESSION['us'];
                }

if(!isset($_POST['sub'])){

    $id= filter_input(INPUT_GET, 'id');
$brand= filter_input(INPUT_GET, 'brand');
$modell= filter_input(INPUT_GET, 'modell');


}else{
    
$id= filter_input(INPUT_POST, 'id');
$brand= filter_input(INPUT_POST, 'br');
$modell= filter_input(INPUT_POST, 'mod');

$sql="UPDATE CELLPHONES SET brand=:br, modell=:mod WHERE id=:id";

$register=$base->prepare($sql);

$register->execute(array(':id'=>$id, ':br'=>$brand, ':mod'=>$modell));


header("Location:usersArea.php");
}
?>
     <p>
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
             </p>
    <center>
        <form method="post" >
            <table >
                
                <input type="hidden" value="<?php echo $id?>" name="id" id="id">
                <tr>
                <td><label for="brand">Brand</label></td>
                <td><input type="text" class="text"value="<?php echo $brand?>" name="br" id="br"></td>
                </tr>
                <tr>                
                    <td><label for="modell">Model</label></td>
                        <td><input type="text" class="text" value="<?php echo $modell?>"name="mod" id="mod"></td>
                </tr>                
                                <tr>                
                                    <td style="alignment-baseline: central"><input type="submit" class="submit"style="height: 20pt; text-align:center" value="Send" name="sub"></td>
                </tr>
            </table>
        </form>
        </center>
             <p>
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
             &nbsp;
              &nbsp;
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
              &nbsp;
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