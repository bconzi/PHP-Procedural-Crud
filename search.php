
<html>
    <head>
        <title>Cellphones List</title>
        <link rel="stylesheet" type="text/css" href="design.css">
    </head>
    <body>

        <?php
        session_start();
        
        if (isset($_SESSION['us'])) {
        echo 'User ' . $_SESSION['us'];
        }
        
        ?>

        <p>
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
        </p>    
    <center>
        <table width="25%">

                   <tr>
                   
                       <td class="first_line">Brand</td>
                       <td class="first_line">Modell</td>
                   </tr>
                    
        <?php
       
        require_once 'connection.php';

//Search query
        
        try{
            
        
        $search = filter_input(INPUT_POST, 'search');

        $result = $base->query("SELECT * FROM CELLPHONES WHERE BRAND LIKE '%$search%' OR MODELL LIKE '%$search%' OR CODE LIKE '%$search%'")->fetchAll(PDO::FETCH_OBJ);

        //$result = $base->prepare($sql);

      //  $result->execute();

      //  $obs_qty=count((array)$result);

        //$count = count((array) $data);
        
//        if($obs_qty>1){
//       
//
//        } else {

            
            foreach($result as $res): 
                ?>

        
            <tr><td><?php echo $res->brand; ?></td>
            <td><?php echo $res->modell; ?></td></tr>
        </table>
</center>
        <?php    endforeach;
        //}
        
        } catch (Exception $ex) {

             echo 'Product not found<br>';
             
             echo $ex->getMessage();
             echo $ex->getLine();
             
             
        }
        ?>


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
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp; 
        </p>    


        <div style="justify-content: space-between; margin: 30px auto">

            <a href="createProduct.php"><input type="button" name="ins" value=" Create New Product" class="button"></a>
        </div>
        <p></p>   
        <p>
        <div style="justify-content: space-between; margin: 30px auto;">
            <a href="usersArea.php"><input type="button" class="button" name="back" value="Back"></a>
        </div>
        <div style="text-align: right;width:1080px; ">
            <a href="closeSession.php"><input type="button" class= "button" name="btn" value="Close Session" </a>
        </div>
  
    
    </body>
</html>