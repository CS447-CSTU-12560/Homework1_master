<!DOCTYPE html>
<?php
  include'config.php';

    $id = null;
    if ( !empty($_GET['product_id'])) {
        $id = $_REQUEST['id_update'];
    }



    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;
        $descriptionError = null;
        $imageError = null;
				$priceError = null;
				$quantityError = null;
        // keep track post values
        $id = $_REQUEST['id_update'];
        $name = $_POST['product_name'];
				$des = $_POST['description'];
				$img= $_POST['image'];
        $price = $_POST['price'];
        $quan = $_POST['quantity'];

        // validate input
      /*  $valid = true;
        if (empty($name)) {
            $nameError = 'Please enter Product';
            $valid = false;
        }

        if (empty($des)) {
            $descriptionError = 'Please enter Description';
            $valid = false;
        }

        if (empty($img)) {
            $imageError = 'Please enter Image';
            $valid = false;
        }
		if (empty($price)) {
            $priceError = 'Please enter Price';
            $valid = false;
        }
		if (empty($quan)) {
            $quantityError = 'Please enter Qantity';
            $valid = false;
        }
        // update data*/



            $sql = "UPDATE product SET
            product_name='".$name."'
            ,description='".$des."'
            ,image='".$img."'
            ,price='".$price."'
						,quantity='".$quan."'
             WHERE product_id =$id";
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

                    <form class="form-horizontal" action="edit.php?id=<?php echo $id?>" method="post">
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Product</label>
                        <div class="controls">
                            <input name="product_name" type="text"  placeholder="product_name" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($descriptionError)?'error':'';?>">
                        <label class="control-label">Description</label>
                        <div class="controls">
                            <input name="description" type="text" placeholder="description " value="<?php echo !empty($des)?$des:'';?>">
                            <?php if (!empty($descriptionError)): ?>
                                <span class="help-inline"><?php echo $descriptionError;?></span>
                            <?php endif;?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($imageError)?'error':'';?>">
                        <label class="control-label">Image</label>
                        <div class="controls">
                            <input name="image" type="text"  placeholder="image" value="<?php echo !empty($img)?$img:'';?>">
                            <?php if (!empty($imageError)): ?>
                                <span class="help-inline"><?php echo $imageError;?></span>
                            <?php endif;?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($priceError)?'error':'';?>">
                        <label class="control-label">Price</label>
                        <div class="controls">
                            <input name="price" type="text"  placeholder="price" value="<?php echo !empty($price)?$price:'';?>">
                            <?php if (!empty($priceError)): ?>
                                <span class="help-inline"><?php echo $priceError;?></span>
                            <?php endif;?>
                            <input name="id_update" type="hidden" id ="id_update" value="<?=$_REQUEST['id'] ?>">
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($quantityError)?'error':'';?>">
                        <label class="control-label">Quantity</label>
                        <div class="controls">
                            <input name="quantity" type="text"  placeholder="quantity" value="<?php echo !empty($quan)?$quan:'';?>">
                            <?php if (!empty($quantityError)): ?>
                                <span class="help-inline"><?php echo $quantityError;?></span>
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
