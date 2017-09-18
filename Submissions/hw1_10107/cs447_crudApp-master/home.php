<?php
  session_start();
  include("php/conn.php");
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $aut_lev = $_SESSION['Aut_lev'];
  if($fname == NULL){
    header("location: 404.html");
  }

  $view_all_goods_sql = 'SELECT * FROM `goods` WHERE 1';
  $query_goods = mysqli_query($conn, $view_all_goods_sql);
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aviable Products in store</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/my_script.js">
    </script>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger">PP Storage</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="add_item.php">Add Item</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href=""></a>
            </li>
            <?php
              if($aut_lev == 'Administrator'){
                echo '<li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="add_user.html" style="background-color:#FEEF03; color:black;">Add user</a>
                  </li>';
              }

            ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="user_menu.php" style="background-color:green;">Hello <?php echo $fname; ?>!</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="php/logout.php" style="background-color:red;">Logout</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>

    <br>
    <br>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">Products in Store</h2>
        <hr class="star-primary">
        <div class="row">
        <?php
          while ($goods_array = mysqli_fetch_array($query_goods)) {
            echo '<div class="col-sm-4 portfolio-item">';
            printf('<a class="portfolio-link" href="#portfolioModal%s" data-toggle="modal">',$goods_array['ID']);
             echo' <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>';
            printf('<img class="img-fluid" src="%s" alt="" style="width:320px; height:240px;">',$goods_array['Image']);
            printf('<p align="center"> %s </p>',$goods_array['Name']);
            echo ' </a>';
            echo '</div>';
          }
          
        ?>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; PP STORAGE 2017
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>



    <!-- Portfolio Modals -->
    <?php
    $query_goods = mysqli_query($conn, $view_all_goods_sql);
    while ($goods_array = mysqli_fetch_array($query_goods)) {
      printf('<div class="portfolio-modal modal fade" id="portfolioModal%s" tabindex="-1" role="dialog" aria-hidden="true">',$goods_array['ID']);
        echo '<div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <div class="modal-body">';
                    printf('<h2>%s</h2>',$goods_array['Name']);
                    echo '<hr class="star-primary">';
                    printf('<img class="img-fluid img-centered" src="%s" alt="" style="width: 360px; height: 240px;">',$goods_array['Image']);
                    printf('<p>%s</p>',$goods_array['Describtion']);
                    echo '<div align="center">';
                    echo '<table style="width: 50%;">
                        <tr>
                          <th> Price: </th>';
                          printf('<th> %s  </th>',$goods_array['Price']);
                        echo '<th> Baht </th></tr>
                        <tr>
                          <th> Amount: </th>';
                        printf('<th> %s </th>', $goods_array['Amount']);
                       echo '<th> Pcs.</th></tr>
                      </table>
                      </div><br><br>';
                      echo '<form action="update_item.php" method="post" name="update">';
                      printf('<input type="hidden" value="%s" name="id">
                    <input type="submit" value="Edit"style="background-color: green; color: white;"></form>',$goods_array['ID']);
                      echo '<form action="php/delete_item.php" method="post" name="delete_form">';
                      printf('<input type="hidden" value="%s" name="id">
                    <input type="submit" value="X Delete"style="background-color: red; color: white;""></form>',$goods_array['ID'],$goods_array['Name']);
                  echo'
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>';
    }
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
