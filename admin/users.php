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
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
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
          <h3 class="card-title">Users</h3>

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

          if(isset($_GET['delete']) && isset($_GET['userid']))
          {
               $delete = "DELETE FROM users WHERE userid = " . $_GET['userid'];
               $conn->query($delete);
          }
          $sql = "SELECT * FROM users";
          $qUsers = $conn->query($sql);

        ?>
        <div class="card-body p-0">
          <table class="table table-striped users">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          First Name
                      </th>
                      <th style="width: 30%">
                          Last Name
                      </th>
                      <th>
                          Email
                      </th>
                      <th>
                          Contact
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                   <?php if ($qUsers->num_rows > 0){  ?>
                   <?php while($row = $qUsers -> fetch_assoc() ){?>
                    <tr>
                        <!--   Array ( [userid] => 7 [firstname] => saadsd [lastname] => addd [email] => talha1@gmail.com [password] => 21232f297a57a5a743894a0e4a801f [contact] => 03007595576 [createdat] => 2022-08-19 22:45:05 [updatedat] => 2022-08-20 03:35:35 [status] => 1 ) -->
                        <td></td>
                        <td>
                          <?php echo $row["firstname"]; ?>
                        </td>
                        <td>
                          <?php echo $row["lastname"]; ?>
                        </td>
                        <td>
                          <?php echo $row["email"]; ?>
                        </td>
                        <td>
                          <?php echo $row["contact"]; ?>
                        </td>
                        <td class="user-state">
                             <?php echo $row["status"] == 1? 'Active' : 'Inactive'; ?>
                        </td>
                        <td class="user-actions text-right">

                           <!--  <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a> -->
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="?delete=1&userid=<?php echo $row['userid'];?>">
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

 