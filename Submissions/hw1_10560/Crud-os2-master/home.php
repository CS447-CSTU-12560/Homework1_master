<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
            <div class="row">
                <h3>PHP CRUD Grid</h3>
            </div>
            <div class="row">
               <p>
                    <a href="create.php" class="btn btn-success">Create</a>
                </p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      
                      <th>Name</th>
                      <th>Price</th>
                      <th>Quality</th>
                      <th>Info</th>
					            <th>Picture</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>


                  <?php
                   include 'Config.php';

				                $sql = "SELECT * FROM `item`";
				                $result = $conn->query($sql);
                   while ($row = mysqli_fetch_array($result)) {
                            // echo '<pre>';
                            // print_r($row);
                            echo '<tr>';
                            
                            echo '<td>'. $row['Name_Item'] . '</td>';
					   		            echo '<td>'. $row['Price'] . '</td>';
					   		            echo '<td>'. $row['Quality'] . '</td>';
                            echo '<td>'. $row['Info'] . '</td>';
					                  echo '<td>'. '<img src="'.$row['Picture'].'"width=100height=100>' . '</td>';



					   		            echo '<td><a class="btn btn-success" href="update.php?id='.$row['Id'].'">Update</a></td>';
							              echo '<td><a class="btn btn-danger" href="delete.php? id='.$row['Id'].'">Delete</a></td>';
                            echo '</tr>';
                   }

                  ?>




                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>
