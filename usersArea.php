<html>
    <head>
        <title>Users Zone</title>

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
            
        </p>
    <center>
<!--        Search field-->
        <form method="post" action="search.php">
            <input type="text" name="search" placeholder="Search by Product, Brand or Modell">
            <input type="submit" id="sub" value="Go">
            
        </form>

<!--Products table-->

        <form method="POST" action="">

            <table>
                <tr>

                    <td class="first_line">CODE</td>
                    <td class="first_line">BRAND</td>
                    <td class="first_line">MODEL</td>
                    <td class="first_line" colspan="2">ACTIONS</td>

                </tr>


                <?php
                require_once 'connection.php';
                
                //----Pagination


                $page_size = 10;

                if (isset($_GET['page'])) {

                    if ($_GET['page'] == 1) {
                        header('Location:usersArea.php');
                    } else {

                        $page_number = $_GET['page'];
                    }
                } else {
                    $page_number = 1;
                }




                $page_beggin = (($page_number - 1) * $page_size);

                $sql = "SELECT * FROM CELLPHONES";

                $results = $base->prepare($sql);

                $results->execute(array());

                $rows_qty = $results->rowCount();

                $page_total = ceil($rows_qty / $page_size);

                //CRUD

                $registers = $base->query("SELECT * FROM CELLPHONES ORDER BY ID LIMIT $page_beggin, $page_size ")->fetchAll(PDO::FETCH_OBJ);
                ?>

                <?php
                foreach ($registers as $register):
                    ?>
                    <tr>
                    <input type="hidden"><?php $register->id; ?>
                    <td><?php echo $register->code; ?></td>

                    <td><?php echo $register->brand; ?></td>
                    <td><?php echo $register->modell; ?></td>

                    <td>
                        <a href="erase.php?id=<?php echo $register->id; ?>"><input type="button" class="button"name="id" value="Delete"></a></td>

                    <td><a href="update.php?id=<?php echo $register->id; ?>&
                           code=<?php echo $register->code; ?>&
                           brand=<?php echo $register->brand; ?>&
                           modell=<?php echo $register->modell; ?>">
                            <input type="button" class="button"name="id" value="Update"></a></td>

                    </tr>
    <?php
endforeach;
?>

            </table>
        </form>
    </center>
    <p></p>        
<?php

//Pagination


echo "<div class='pagination'>";
for ($i = 1; $i <= $page_total; $i++) {


    echo "<a href='?page=" . $i . "'>" . $i . "</a> ";
   
}
echo '</div>';
?>
  

    <p>

    </p>
    <div>

        <a href="createProduct.php"><input type="button"  name="ins" value="New Product" class="button"></a>

        <br><br>

        <a href="createUser.php"><input type="button"  name="ins" value="New User" class="button"></a>

        <p>
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
        </p>
        </div>
        <div style="text-align: right;width:1020px">
          <a href="closeSession.php"><input type="button" class= "button" name="btn" value="Close Session" </a>
        </div>
</body>
</html>

