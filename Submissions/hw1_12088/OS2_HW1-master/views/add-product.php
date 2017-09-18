<html>
<?php
    session_start();
    require "../utilities/handler.utility.php";
    require "../controllers/product.controller.php";
    require "../controllers/upload.controller.php";

    $productController = new ProductController();
    $uploadController = new UploadController();
    $eventHandle = new Handler();

    if(!isset($_SESSION['username'])) {
        redirect("home");
    }

    if(isset($_POST['add'])) {
        $imageFile = $_FILES['file'];
        $imageFilePath = $uploadController->uploadImage($imageFile['name'], $imageFile['tmp_name']);

        $name = $_POST['name'];
        $imageURL = $imageFilePath;
        $detail = $_POST['detail'];
        $price = $_POST['price'];
        $amount = $_POST['amount'];

        $isAddComplete = $productController->addProduct($name, $imageURL, $detail, $price, $amount);
        $eventHandle->handleAddEvent($isAddComplete);
    }
?>
<head>
    <title>Tea Time Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="static/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/style/bootstrap.min.css">
    <script src="static/javascript/jquery.min.js"></script>
    <script src="static/javascript/bootstrap.min.js"></script>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#previewImage').attr('src', e.target.result);
                    $('#previewImage').css('width', '220px');
                    $('#previewImage').css('height', '220px');
                    $('#form').css('padding-bottom', '50px');
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
            <a class="navbar-brand" href="home">Tea Time</a>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="add">Add product</a>
                </li>
                <li>
                    <a href="product">Product</a>
                </li>
                <li>
                    <a href="signout">Sign out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="col-md-8 col-md-offset-2" id="form">
        <form action="" method="POST" enctype="multipart/form-data">
            <h1>Add Product</h1>
            <div class="form-group">
                <img id="previewImage" src="#"/>
                <input type='file' name="file" accept="image/*" onchange="readURL(this);" required/>
            </div>

            <div class="form-group">
                <label class="control-label" for="name">Name</label>
                <input class="form-control" name="name" type="text" placeholder="name" required>
            </div>

            <div class="form-group">
                <label for="textArea" class="control-label">Detail</label>
                <textarea class="form-control" rows="4" name="detail" id="textArea" style="resize:none" required></textarea>
            </div>

            <div class="form-group">
                <label class="control-label" for="price">Price</label>
                <input class="form-control" id="price" name="price" type="text" placeholder="price" required>
            </div>

            <div class="form-group">
                <label class="control-label" for="amount">Amount</label>
                <input class="form-control" id="amount" name="amount" type="text" placeholder="amount" required>
            </div>
            <button type="submit" name="add" class="btn btn-primary btn-block">Add product</button>
        </form>
    </div>
</div>
</body>
</html>