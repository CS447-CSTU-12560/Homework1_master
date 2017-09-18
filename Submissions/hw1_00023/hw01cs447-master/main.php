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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style >
.btnRegister {
  padding: 10px 30px;
  background-color: red;
  border: 0;
  color: white;
  cursor: pointer;
  border-radius: 4px;
  margin-left: 10px;
}</style>
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
              <a class="nav-link" href="home.php">กลับหน้าหลัก</a>
            </li>
             </li>
            
            
            <li class="nav-item">
              <a class="nav-link" href="insertnew.php">เพิ่มรายการใหม่</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="logout.php">ออกจากระบบ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="overlay">
        <div class="container">
          <h1 class="display-1 text-white "  ">   รายการสินค้า</h1>
          <h2 class="display-4 text-white">  </h2>
        </div>
      </div>
    </header>




<?php 

while ($row = $rs->fetch_array()){
echo '<section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="p-5"> ';
              echo'<img height="349" width="500"  class="img-fluid rounded-circle"   alt=""   src="'.$row['imgproduct'] .'"/>';
           echo '</div>
          </div>
          <div class="col-md-6">
            <div class="p-5">';

              printf('<h2 class="display-4">%s</h2> ',$row['nameproduct']);

              printf('<p> <b> "%s" <br><br><b> ราคา : %.2f  บาท  <br><b>มีจำนวนสินค้า<b> : %d  อัน<b></p> ',$row['description'],$row['price'],$row['countproduct']);

              echo '<div style="display:block">';
              echo'<from >';
                            echo '<div>';


              echo '<form action="updatePlusOne.php" action="post">';
              printf(' <button type="submit" value="%s" style= "  background-color: blue" class="btnRegister" name="idproduct"> เพิ่มจำนวนสินค้า</button> </form>',$row['idproduct']);
              echo'<br>';
              
              echo '<form action="updateMinusOne.php" method="post">';
              printf(' <button type="submit" value="%s"  style= "  background-color: green" class="btnRegister" name="idproduct"> ลดจำนวนสินค้า </button> </form>',$row['idproduct']);echo "\t";
              echo '<form action="deleteproduct.php" method="post">';
                            echo'<br>';

              echo "<button type='submit' class='btnRegister' name='idproduct' value='". $row['idproduct'] ."'>
                      ลบสินค้าออกจากรายการ
                    </button>
              ";
              echo '</form>';          
     echo '
     <br>
            </div>
          </div>
        </div>
      </div>
    </section>';


  }
?>
 <input type="submit"  style ="color: white ; size: 20px" value="Login" class="cancelbtn" >

  
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


