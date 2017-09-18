<html>
<?php
    session_start();
    require "../utilities/auth.utility.php";
    require "../utilities/handler.utility.php";
    require "../controllers/product.controller.php";
    require "../controllers/upload.controller.php";

    $productController = new ProductController();
    $uploadController = new UploadController();
    $eventHandle = new Handler();

    $products = $productController->getAllProducts();

    if(isset($_POST['edit'])) {
        $product = getProductDetail( $_POST['edit']);

        redirect("edit/{$product["name"]}_{$product["id"]}");
    }

    if (isset($_POST['delete'])) {
        $product = getProductDetail($_POST['delete']);
        $uploadController->removeUploadImage($product["imageURL"]);
        $isDeleteComplete = $productController->deleteProduct($product["id"]);

        $eventHandle->handleDeleteEvent($isDeleteComplete);
    }

    function getProductDetail($index) {
        global $products;
        return $products[$index];
    }
?>
<head>
    <title>Tea Time Shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="static/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/style/bootstrap.min.css">
    <script src="static/javascript/jquery.min.js"></script>
    <script src="static/javascript/bootstrap.min.js"></script>
    <style>
        .icon-button {
            background-color: transparent;
            border: none;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="home">Tea Time</a>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-right">
                <?php if(isSignIn()) { ?>
                    <li><a href="add">Add product</a></li>
                <?php } ?>
                <li class="active">
                    <a href="product">Product</a>
                </li>
                <?php if(isSignIn()) { ?>
                    <li><a href="signout">Sign out</a></li>
                <?php } else { ?>
                    <li><a href="signin">Sign in</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div>
        <h1><?php echo count($products) ?> products available</h1>
        <table class="table table-striped table-hover ">
            <thead>
            <tr>
                <th width="5%">#</th>
                <th width="20%">Image</th>
                <th width="14%">Name</th>
                <th width="33%">Detail</th>
                <th width="10%">Price</th>
                <th width="10%">Amount</th>
                <th width="8%">Other</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $index=>$product) { ?>
                <tr>
                    <td><?php echo ($index + 1) ?></td>
                    <td>
                        <img src="<?php echo $product["imageURL"] ?>" width="160px" height="160px">
                    </td>
                    <td><?php echo $product["name"] ?></td>
                    <td><?php echo $product["detail"] ?></td>
                    <td>฿ <?php echo number_format($product["price"],2) ?></td>
                    <td><?php echo number_format($product["amount"]) ?></td>
                    <td>
                        <?php if(isset($_SESSION['username'])) { ?>
                        <form method="POST" action=''>
                            <div>
                                <button type="submit" name="edit"
                                        value=<?php echo $index; ?> class="icon-button">
                                    <i class="fa fa-pencil fa-2x" aria-hidden="true"></i>
                                </button>
                                &nbsp;
                                <button type="submit" name="delete" onclick="return confirm('Are you sure?')"
                                        value=<?php echo $index; ?> class="icon-button">
                                    <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i>
                                </button>
                            </div>
                        </form>
                    <?php } ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>