
<html>
    <head>
        <title>Cellphones List</title>
          <link rel="stylesheet" type="text/css" href="design_1.css">
    </head>
    <body>



<?php

require_once 'connection.php';


$search= filter_input(INPUT_POST, 'search');


$sql="SELECT * FROM CELLPHONES WHERE BRAND LIKE '%$search%' OR MODELL LIKE '%$search%'";

$result=$base->prepare($sql);

$result->execute();

$rows_qty=$result->rowCount();

  if($rows_qty<1){
        echo 'Product not found'; 
    
    } else {

while($register=$result->fetch(PDO::FETCH_ASSOC)){
        
        
        echo '<table><tr><td>Brand: '. $register['brand'].'</td></tr>';
        echo '<tr><td>Modell: '.$register['modell'].'</td></tr></table';
    }
}

?>
                </td></tr></table>
        
        <p>
<p>
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
        </p>
        <div style="justify-content: space-between; margin: 30px auto;">

            <a href="createProduct.php"><input type="button" name="ins" value=" Create New Product" class="button"></a>
</div>
        <p></p>   
        <p>
    <div style="justify-content: space-between; margin: 30px auto;">
    <a href="usersArea.php"><input type="button" class="button" name="back" value="Back"></a>
    </div>
           <div style="text-align: right;width:1020px; ">
          <a href="closeSession.php"><input type="button" class= "button" name="btn" value="Close Session" </a>
        </div>
    </body>
</html>