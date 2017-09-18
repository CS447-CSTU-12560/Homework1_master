<?php
    require 'Config.php';
    $id = 0;

    if ( !empty($_GET['Id'])) {
        $id = $_REQUEST['Id'];
    }

    if ( !empty($_POST)) {
        // keep track post values
        include ('Config.php');
        $id = $_POST['Id'];
        $name = $_POST['Name_item'];
        // delete data

        $sql = "DELETE FROM `item` WHERE Id = $id";
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
                      <input type="hidden" name="Id" value="<?php echo $_REQUEST['id'];?>"/>
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
