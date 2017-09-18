<?php
    require 'Config.php';
    $id = null;
    if ( !empty($_GET['Id'])) {
        $id = $_REQUEST['Id'];
    }

    if ( null==$id ) {
        header("Location: home.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM ITEM where Id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    </style>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">

                <div class="span10 offset1">
                    <div class="row">
                        <h3>Read a Customer</h3>
                    </div>

                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Name_item'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Price</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Price'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Quality</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Quality'];?>
                            </label>
                        </div>
                      </div>
                       <div class="control-group">
                        <label class="control-label">Picture</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['Picture'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                       <label class="control-label">Info</label>
                       <div class="controls">
                           <label class="checkbox">
                               <?php echo $data['Info'];?>
                           </label>
                       </div>
                     </div>
                        <div class="form-actions">
                          <a class="btn" href="home.php">Back</a>
                       </div>


                    </div>
                </div>

    </div> <!-- /container -->
</body>
</html>
