<?php
  session_start();
  include("connect.php");

  $sql = "SELECT   * 
      FROM lpstore
      WHERE 1; " ;

  $rs = $conn->query($sql) or die($conn->error);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lampang Souvenir - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.error-message {
  padding: 7px 10px;
  background: #fff1f2;
  border: #ffd5da 1px solid;
  color: #d6001c;
  border-radius: 4px;
}
.success-message {
  padding: 7px 10px;
  background: #cae0c4;
  border: #c3d0b5 1px solid;
  color: #027506;
  border-radius: 4px;
}
.demo-table {
  background: black;
  width: 100%;
  border-spacing: initial;
  margin: 2px 0px;
  word-break: break-word;
  table-layout: auto;
  line-height: 1.8em;
  color: #333;
  border-radius: 4px;
  padding: 20px 40px;
}
.demo-table td {
  padding: 15px 0px;
}
.demoInputBox {
  padding: 10px 30px;
  border: #a9a9a9 1px solid;
  border-radius: 4px;
}
.btnRegister {
  padding: 10px 30px;
  background-color: red;
  border: 0;
  color: #FFF;
  cursor: pointer;
  border-radius: 4px;
  margin-left: 10px;
}
td{
  color:white;
}
</style>
</head>
<body>




  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#" align="left">   </a>

                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="main.php">กลับหน้าหลัก</a>
            </li>
           
           
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="overlay">
        <div class="container">
          <h1 class="display-1 text-white">เพิ่มรายการสินค้า</h1>
          <h2 class="display-4 text-white">  </h2>
        </div>
      </div>
    </header>

<div style="background-color:black">
<div name="frmRegistration" color = "text-black" method="post" action="insertproduct.php">
 <table border="0" width="500" align="center"  style="margin-left: 100px ; background-color:black" class="demo-table"> 
    <?php if(!empty($success_message)) { ?> 
    <div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
    <?php } ?>
    <?php if(!empty($error_message)) { ?> 
    <div class="error-message" ><?php if(isset($error_message)) echo $error_message; ?></div>
    <?php } ?>
      <form color = "text-white" style=" background-color:black"action="insertproduct.php" method="post">

    <tr>
      <td>ชื่อสินค้า</td>
      <td><input type="text center" class="demoInputBox" name="nameproduct"></td>
    </tr>
    <tr>
      <td>รายละเอียด</td>
      <td><textarea type="text" class="demoInputBox" name="description"></textarea></td>
    </tr>
   
    <tr>
      <td>รูปภาพ</td>
      <td><input type="text center" class="demoInputBox" name="imgproduct" >(โปรดใส่เป็น URL)</td>
    </tr> 
   <tr>
      <td>ราคา</td>
      <td><input type="text" class="demoInputBox" name="price"></td>
    </tr>
 <tr>
      <td>จำนวนของในสต็อก</td>
      <td><input type="number" class="demoInputBox" name="countproduct" ></td>
    </tr> 


    <tr>
      <td colspan=2>
    </tr>
    </div>
   </table> 
   <div align="center">
                <input type="submit" name="register-user" value="เพิ่มสินค้า" class="btnRegister"><br>
                </div><br><br>

  </form>
</div>
</div>


<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"></p>
      </div>
      <!-- /.container -->
    </footer>



  
  
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>

    <!-- Bootstrap core JavaScript -->


