<html>
    <head>
        <title>Create Product</title>
        <link rel="stylesheet" type="text/css" href="design_1.css">
    </head>
    <body>
        <?php      
        
         require_once 'connection.php';
         
        session_start();
                if(isset($_SESSION['us'])){
                echo 'User '. $_SESSION['us'];
                }
                ?>
           <h3>New Products Registration</h3>
        <p>
            &nbsp;
        </p>


        <?php
       
        
    
                
        if (isset($_POST['create'])) {
            $brand = filter_input(INPUT_POST, 'br');
            $modell = filter_input(INPUT_POST, 'mod');
            $code = "";
            
            switch ($brand) {
                case
                $brand == 'Samsung':
                    $code = "S001";
                    break;
                case
                $brand == 'Huawei':
                    $code = "H006";
                    break;
                case
                $brand == 'XTE':
                    $code = "X008";
                    break;
                case
                $brand == 'Iphone':
                    $code = "I002";
                    break;
                case
                    $brand == 'Alcatel':
                    $code = "A004";
                    break;
                case
                $brand == 'LTE':
                    $code = "L005";
                    break;
                case
                $brand == 'Panasonic':
                    $code = "P032";
                    break;
                case
                $brand == 'Philco':
                    $code = "P007";
                    break;
                case
                $brand == 'Genius':
                    $code = "G009";
                    break;
                   case
                $brand == 'test' || $modell=='test' :
                    $code = "0000";
                    break;
                default: echo 'This Brand doesnt exists or is misswritten, please write first letter Uppercase then lowercase!';
                    break;
            }




            $sql = "INSERT INTO CELLPHONES (BRAND, MODELL, CODE) VALUES (:br, :mod, :cd)";

            $register = $base->prepare($sql);

            $register->execute(array(':br' => $brand, ':mod' => $modell, ':cd' => $code));

            echo 'Product succesfully created on database';
            
            header("Location:usersArea.php");
        }
        ?>
        <p>
            &nbsp;</p>
    <center>
        <form method="post" >
            <table class="t2">
                <tr>
                    <td><label for="br">Brand</label></td>
                    <td><input type="text" class="text"placeholder="Enter Brand" name="br" id="br"></td>
                </tr>
                <tr>
                    <td><label for="mod">Modell</label></td>
                    <td><input type="text" class="text" placeholder="Enter New Modell"name="mod" id="mod"></td></tr>                
                <tr>

                <tr>

                </tr>

                <td style="alignment-baseline: central"><input type="submit" style="height: 20pt; text-align:center" class="submit"value="Create" name="create"></td></tr>
            </table>
        </form>
    </center>
    <br><br>

    <p>
        &nbsp;
        &nbsp;
        &nbsp;</p>
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
    <a href="usersArea.php?action=load"><input type="button" class="button" name="back" value="Back"></a>
    </div>
       <div style="text-align: right;width:1020px; ">
          <a href="closeSession.php"><input type="button" class= "button" name="btn" value="Close Session" </a>
        </div>


</body>
</html>

