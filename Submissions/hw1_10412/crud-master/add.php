
<!DOCTYPE html>
<html lang="en">
<?php

    require 'config.php';

    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;
				$descriptionError = null;
		    $imageError = null;
        $priceError = null;
        $quantityError = null;

        // keep track post values
        $name = $_POST['product_name'];
				$des = $_POST['description'];
		    $image = $_POST['image'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        // validate input
        $valid = true;
        if (empty($name)) {
            $nameError = 'Please enter Name';
            $valid = false;
        }

				if (empty($des )) {
            $descriptionError = 'Please enter Description';
            $valid = false;
        }

		   if (empty($image )) {
            $imageError = 'Please enter Image';
            $valid = false;
        }

        if (empty($price)) {
            $priceError = 'Please enter Price';
            $valid = false;
        }

        if (empty($quantity)) {
            $quantityError = 'Please enter Quantity';
            $valid = false;
        }



        // insert data
        if ($valid) {
					$sql = "INSERT INTO product(product_id, product_name, description, image, price, quantity)
              VALUES ('',' ".$name." ',' ".$des." ',' ".$image." ',' ".$price." ',' ".$quantity." ')";
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

                    <form class="form-horizontal" action="add.php" method="post">
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Name</label>
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
                            <input name="description" type="text" placeholder="description" value="<?php echo !empty($des)?$des:'';?>">
                            <?php if (!empty($descriptionError)): ?>
                                <span class="help-inline"><?php echo $descriptionError;?></span>
                            <?php endif;?>
                        </div>
                      </div>

											<div class="control-group <?php echo !empty($imageError)?'error':'';?>">
                        <label class="control-label">Image</label>
                        <div class="controls">
                            <input name="image" type="text"  placeholder="image" value="<?php echo !empty($image)?$image:'';?>">
                            <?php if (!empty($imageError)): ?>
                                <span class="help-inline"><?php echo $imageError;?></span>
                            <?php endif;?>
                        </div>

										  </div><div class="control-group <?php echo !empty($priceError)?'error':'';?>">
                        <label class="control-label">Price</label>
                        <div class="controls">
                            <input name="price" type="text"  placeholder="price" value="<?php echo !empty($price)?$price:'';?>">
                            <?php if (!empty($priceError)): ?>
                                <span class="help-inline"><?php echo $priceError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
									</div>
									<div class="control-group <?php echo !empty($quantityError)?'error':'';?>">
                        <label class="control-label">Quantity</label>
                        <div class="controls">
                            <input name="quantity" type="text"  placeholder="quantity" value="<?php echo !empty($quantity)?$quantity:'';?>">
                            <?php if (!empty($quantityError)): ?>
                                <span class="help-inline"><?php echo $quantityError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">edit</button>
                          <a class="btn" href="home.php">Back</a>
                        </div>
                    </form>
                </div>

    </div>
  </body>
</html>
