<?php
    require 'config.php';
    $id = 0;

    if ( !empty($_GET['product_id'])) {
        $id = $_REQUEST['product_id'];
    }

    if ( !empty($_POST)) {
        // keep track post values
        include ('config.php');
        $id = $_POST['product_id'];
        $name = $_POST['Name_item'];
        // delete data

        $sql = "DELETE FROM `product` WHERE product_id = $id";
        $conn->query($sql);

        header("Location: home.php");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">

                <div class="span10 offset1">
                    <div class="row">
                        <h3>Delete a ITEM</h3>
                    </div>

                    <form class="form-horizontal" action="delete.php" method="post">
                      <input type="hidden" name="product_id" value="<?php echo $_REQUEST['id'];?>"/>
                      <p class="alert alert-error">Are you sure to delete ?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger">Yes</button>
                          <a class="btn" href="home.php">No</a>
                        </div>
                    </form>
                </div>

    </div> <!-- /container -->
  </body>
</html>
