<?php session_start();?>
<?php

$conn = new mysqli("localhost","root","","mydb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_REQUEST['id'];
{
  $sql_show = "select * from products where ID = '$id'";

  $result_show = $conn->query(  $sql_show);
  $row_show = mysqli_fetch_array($result_show);


}

?>


<!DOCTYPE html>
<html lang="en">


    <div class="container-fluid">
      <div class="row-fluid">


        <div class="span9">

            <div class="row-fluid">
                <h2>Edit Product</h2>
            </div>
            <div class="row-fluid">
                <form class="well" method="post" action="edit.php">
                  <label>Name</label>
                  <input type="text"  placeholder="" name="item_name" value="<?=$row_show['name']?>">

                  <label>Item Picture (URL)</label>
                  <input type="text"  placeholder="URL " name="item_picture" value="<?=$row_show['image']?>">

                  <label>Item Price (BAHT)</label>
                  <input type="text"  placeholder="" name="item_price" value="<?=$row_show['price']?>">

                  <label>Item Stock (Unit)</label>
                  <input type="text"  placeholder="" name="item_stock" value="<?=$row_show['amount']?>">

                    <button type="submit" class="btn">Submit</button>
                    <input name="edit_id" type="hidden" id ="edit_id" value="<?=$_REQUEST['id'] ?>">
                </form>
            </div>


        </div>


      </div><!--/row-->

      <hr>

    </div><!--/.fluid-container-->

<a href="user_page.php">Back</a>


  </body>
</html>
