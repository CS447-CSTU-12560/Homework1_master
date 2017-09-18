<?php
session_start();
        if(isset($_REQUEST['Username'])){
				//connection
                  include("connection.php");
				//รับค่า user & password
                  $Username = $_REQUEST['Username'];
                  $Password = $_REQUEST['Password'];
				//query
                  $sql="SELECT * FROM user Where Username='".$Username."' and password='".$Password."' ";

                  $result = mysqli_query($con,$sql);

                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["ID"] = $row["UserID"];
                      $_SESSION["User"] = $row["name"]." ".$row["surname"];



                        Header("Location: user_page.php");



                  }else{
                    echo "<script>";

                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: form.php"); //user & password incorrect back to login again

        }
?>
