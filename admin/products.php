<?php include '../includes/database.php';?>
<?php 
 if(!isset($_SESSION["auth"]))
  {
      header('Location:'.  $siteUrl );
  }
?>

  <!-- header -->
<?php include 'partials/header.php';?>

<!-- sidebar -->
<?php include 'partials/sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Products</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <?php

          if(isset($_GET['delete']) && isset($_GET['productid']))
          {     

                $sql = "SELECT * FROM products where productid = '" . $_GET['productid'] . "'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $response = $result->fetch_assoc();
                  try {
                    unlink("../images/" . $response["image"]);
                  } catch (Exception $e) {}
                   
                }

               $delete = "DELETE FROM products WHERE productid = " . $_GET['productid'];
               $conn->query($delete);

              
          }
          $sql = "SELECT * FROM products";
          $qProducts = $conn->query($sql);

        ?>
        <div class="card-body p-0">
          <table class="table table-striped products">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                         Name
                      </th>
                      <th style="width: 30%">
                          Category
                      </th>
                      <th>
                          Image
                      </th>
                      <th>
                          Description
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                   <?php if ($qProducts->num_rows > 0){  ?>
                   <?php while($row = $qProducts -> fetch_assoc() ){?>
                    <tr>
                        <td></td>
                        <td>
                          <?php echo $row["name"]; ?>
                        </td>
                        <td>
                          <?php echo $row["category"]; ?>
                        </td>
                        <td>
                         <img src="<?php echo $siteUrl .'images/' .$row["image"]; ?>" width="60"> 
                        </td>
                        <td>
                          <?php echo $row["description"]; ?>
                        </td>
                        <td class="product-state">
                             <?php echo $row["status"] == 1? 'Active' : 'Inactive'; ?>
                        </td>
                        <td class="product-actions text-right">
 
                           <!--  <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a> -->
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="?delete=1&productid=<?php echo $row['productid'];?>">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                  <?php }?>
                  <?php }else{?>
                  <tr><td>No record found</td></tr>
                  <?php }?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- footer -->
<?php include 'partials/footer.php';?>

 