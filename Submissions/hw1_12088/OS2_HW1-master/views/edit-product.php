<html>
<?php
    session_start();
    require "../controllers/product.controller.php";
    require "../controllers/upload.controller.php";
    require "../utilities/handler.utility.php";

    $productController = new ProductController();
    $uploadController = new UploadController();
    $eventHandle = new Handler();
    $product = null;

    if(!isset($_SESSION['username'])) {
        redirect("../home");
    }

    if($_GET['productID']) {
        $productId = $_GET['productID'];
        $product = $productController->getProductByID($productId);
        if($product == null) {
            redirect("../product");
        }
    } else {
        redirect("../product");
    }

    if(isset($_POST['edit'])) {
        $name = $_POST['name'];
        $imageURL = findImagePath($_FILES["file"]);
        $detail = $_POST['detail'];
        $price = $_POST['price'];
        $amount = $_POST['amount'];

        $isEditComplete = $productController->updateProduct($name, $imageURL, $detail, $price, $amount, $product["id"]);
        $eventHandle->handleUpdateEvent($isEditComplete);
    }

    function findImagePath($file) {
        global $product, $uploadController;
        if(isFileExist($file)) {
            $uploadController->removeUploadImage($product["imageURL"]);
            $imageFilePath = $uploadController->uploadImage($file['name'], $file['tmp_name']);
        } else {
            $imageFilePath = $product["imageURL"];
        }

        return $imageFilePath;
    }

    function isFileExist($file) {

        return $file["size"] > 0;
    }
?>
<head>
    <title>Tea Time Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../static/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/style/bootstrap.min.css">
    <script src="../static/javascript/jquery.min.js"></script>
    <script src="../static/javascript/bootstrap.min.js"></script>
    <style>
        #previewImage {
            width: 220px;
            height: 220px;
        }

        #form {
            padding-bottom: 50px;
        }
    </style>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#previewImage').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="../home">Tea Time</a>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="../add">Add product</a>
                </li>
                <li>
                    <a href="../product">Product</a>
                </li>
                <li>
                    <a href="../signout">Sign out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="col-md-8 col-md-offset-2" id="form">
        <form action="" method="POST" enctype="multipart/form-data">
            <h1>Edit Product</h1>
            <div class="form-group">
                <img id="previewImage" src='<?php echo "../". $product["imageURL"] ?>' alt="your image"/>
                <input type='file' name="file" accept="image/*" onchange="readURL(this);"/>
            </div>

            <div class="form-group">
                <label class="control-label" for="name">Name</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="name"
                       value="<?php echo $product["name"] ?>">
            </div>

            <div class="form-group">
                <label for="textArea" class="control-label">Detail</label>
                <textarea class="form-control" rows="3" id="textArea" name="detail"
                          style="resize:none"><?php echo $product["detail"] ?></textarea>
            </div>

            <div class="form-group">
                <label class="control-label" for="price">Price</label>
                <input class="form-control" id="price" name="price" type="text" placeholder="price"
                       value="<?php echo $product["price"] ?>">
            </div>

            <div class="form-group">
                <label class="control-label" for="amount">Amount</label>
                <input class="form-control" id="amount" name="amount" type="text" placeholder="amount"
                       value="<?php echo $product["amount"] ?>">
            </div>
            <button type="submit" name="edit" class="btn btn-primary btn-block">Edit product</button>
        </form>
    </div>
</div>
</body>
</html>