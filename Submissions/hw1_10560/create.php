
<!DOCTYPE html>
<html lang="en">
<?php

    require 'Config.php';

    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;
        $priceError = null;
        $qualityError = null;
        $pictureError = null;
		    $infoError = null;
        // keep track post values
        $name = $_POST['Name_item'];
        $price = $_POST['Price'];
        $quality = $_POST['Quality'];
        $picture = $_POST['Picture'];
		    $info = $_POST['Info'];
        // validate input
        $valid = true;
        if (empty($name)) {
            $nameError = 'Please enter Name';
            $valid = false;
        }

        if (empty($price)) {
            $priceError = 'Please enter Price';
            $valid = false;
        }

        if (empty($quality)) {
            $qualityError = 'Please enter quality';
            $valid = false;
        }

		    if (empty($picture )) {
            $pictureError = 'Please enter picture';
            $valid = false;
        }

		   if (empty($info )) {
            $infoError = 'Please enter information';
            $valid = false;
        }

        // insert data
        if ($valid) {
            $sql = "INSERT INTO `item`(`Id`, `Name_item`, `Price`, `Quality`, `Picture`, `Info`)
              VALUES ('',' ".$name." ',' ".$price." ',' ".$quality." ',' ".$picture." ',' ".$info." ')";
			      $conn->query($sql);
            header("Location: home.php");
        }
    }
?>
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Create a NEW ITEM</h3>
                    </div>

                    <form class="form-horizontal" action="create.php" method="post">
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input name="Name_item" type="text"  placeholder="Name_item" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($priceError)?'error':'';?>">
                        <label class="control-label">Price</label>
                        <div class="controls">
                            <input name="Price" type="text" placeholder="Price" value="<?php echo !empty($price)?$price:'';?>">
                            <?php if (!empty($priceError)): ?>
                                <span class="help-inline"><?php echo $priceError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($qualityError)?'error':'';?>">
                        <label class="control-label">Quality</label>
                        <div class="controls">
                            <input name="Quality" type="text"  placeholder="Quality" value="<?php echo !empty($quality)?$quality:'';?>">
                            <?php if (!empty($qualityError)): ?>
                                <span class="help-inline"><?php echo $qualityError;?></span>
                            <?php endif;?>
                        </div>
                      </div><div class="control-group <?php echo !empty($pictureError)?'error':'';?>">
                        <label class="control-label">Picture</label>
                        <div class="controls">
                            <input name="Picture" type="text"  placeholder="Picture" value="<?php echo !empty($picture)?$picture:'';?>">
                            <?php if (!empty($pictureError)): ?>
                                <span class="help-inline"><?php echo $pictureError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
					  </div><div class="control-group <?php echo !empty($infoError)?'error':'';?>">
                        <label class="control-label">Information</label>
                        <div class="controls">
                            <input name="Info" type="text"  placeholder="Info" value="<?php echo !empty($info)?$info:'';?>">
                            <?php if (!empty($infoError)): ?>
                                <span class="help-inline"><?php echo $infoError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Create</button>


                          <a class="btn" href="home.php">Back</a>
                        </div>
                    </form>
                </div>

    </div> <!-- /container -->
  </body>
</html>
