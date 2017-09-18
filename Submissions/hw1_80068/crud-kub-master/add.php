
<!DOCTYPE html>
<html lang="en">


    <div class="container-fluid">
      <div class="row-fluid">


        <div class="span9">

            <div class="row-fluid">
                <h2>Add New Product</h2>
            </div>
            <div class="row-fluid">
                <form class="well" method="post" action="additem.php">
                  <label>Name</label>
                  <input type="text"  placeholder="" name="item_name" value="">

                  <label>Item Picture (URL)</label>
                  <input type="text"  placeholder="URL" name="item_picture" value="">

                  <label>Item Price (BAHT)</label>
                  <input type="text"  placeholder="" name="item_price" value="">

                  <label>Item Stock (Unit)</label>
                  <input type="text"  placeholder="" name="item_stock" value="">

                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>


        </div>


      </div><!--/row-->

      <hr>

    </div><!--/.fluid-container-->

<a href="user_page.php">Back</a>

  </body>
</html>
