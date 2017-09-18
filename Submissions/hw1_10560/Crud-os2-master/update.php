<!DOCTYPE html>
<?php
  include'Config.php';

    $id = null;
    if ( !empty($_GET['Id'])) {
        $id = $_REQUEST['id_update'];
    }



    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;
        $priceError = null;
        $qualityError = null;
		$pictureError = null;
		$infoError = null;
        // keep track post values
        $id = $_REQUEST['id_update'];

        $name = $_POST['Name_item'];

        $price = $_POST['Price'];
        $quality = $_POST['Quality'];
		$picture = $_POST['Picture'];
		$info= $_POST['Info'];
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
            $qualityError = 'Please enter Quality';
            $valid = false;
        }
		if (empty($picture)) {
            $pictureError = 'Please enter Picture';
            $valid = false;
        }
		if (empty($info)) {
            $infoError = 'Please enter info';
            $valid = false;
        }
        // update data



            $sql = "UPDATE item SET
            Name_item='".$name."'
            ,Price='".$price."'
            ,Quality='".$quality."'
            ,Picture='".$picture."'
			,Info='".$info."'
             WHERE Id =$id";
            $conn->query($sql);

    Header("Location: home.php");

        }

?>
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
                        <h3>Update a ITEM</h3>
                    </div>

                    <form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input name="Name_item" type="text"  placeholder="Name_Item" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($priceError)?'error':'';?>">
                        <label class="control-label">Price</label>
                        <div class="controls">
                            <input name="Price" type="text" placeholder="Price " value="<?php echo !empty($price)?$price:'';?>">
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
                      </div>
                      <div class="control-group <?php echo !empty($pictureError)?'error':'';?>">
                        <label class="control-label">Picture</label>
                        <div class="controls">
                            <input name="Picture" type="text"  placeholder="Picture" value="<?php echo !empty($picture)?$picture:'';?>">
                            <?php if (!empty($pictureError)): ?>
                                <span class="help-inline"><?php echo $pictureError;?></span>
                            <?php endif;?>
                            <input name="id_update" type="hidden" id ="id_update" value="<?=$_REQUEST['id'] ?>">
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($infoError)?'error':'';?>">
                        <label class="control-label">Info</label>
                        <div class="controls">
                            <input name="Info" type="text"  placeholder="Info" value="<?php echo !empty($info)?$info:'';?>">
                            <?php if (!empty($infoError)): ?>
                                <span class="help-inline"><?php echo $infoError;?></span>
                            <?php endif;?>
                            <input name="id_update" type="hidden" id ="id_update" value="<?=$_REQUEST['id'] ?>">
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Update</button>

                          <a class="btn" href="home.php">Back</a>
                        </div>
                    </form>
                </div>

    </div> <!-- /container -->
  </body>
</html>
