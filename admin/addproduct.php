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


<?php

  if (isset($_POST['addproduct'])) {


    // validate form
    $formErrors = array();

    $target_dir =  "../images/";

    if (!(isset($_POST['name']) && strlen($_POST['name']))) {
      array_push($formErrors, "Name is reuired field.");
    }

    if (!(isset($_POST['category']) && strlen($_POST['category']))) {
      array_push($formErrors, "Category is reuired field.");
    }

    if (!(isset($_POST['description']) && strlen($_POST['description']))) {
      array_push($formErrors, "Description is reuired field.");
    }


    if (!(isset($_POST['status']) && strlen($_POST['status']))) {
      array_push($formErrors, "Status is reuired field.");
    }

    if (!(isset($_FILES['image']['name']) && strlen($_FILES['image']['name']))) {
      array_push($formErrors, "Image is reuired field.");
    }else{
      $target_file = $target_dir . basename($_FILES["image"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // if (file_exists($target_file)) {
      //   array_push($formErrors, "Sorry, file already exists.");
      // }

      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
        array_push($formErrors, "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
      }

    }


    if(isset($_SESSION["auth"]['userid']))
    {
      $userId = $_SESSION["auth"]['userid'];
    }else{
       $userId = 0;
    }

    $fileName =  date('Ymdhis') . "_" . basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $fileName;


    if (count($formErrors) == 0) {

      $sql = "INSERT INTO products (userid, name, category, image, description, status) 
        VALUES ($userId,'" . $_POST['name'] . "','" . $_POST['category'] . "','" .$fileName. "', 
        '" . $_POST['description'] . "','" . $_POST['status']. "')";

      $conn->query($sql);

      move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

      $_POST['name'] = "";
      $_POST['category'] = "";
      $_POST['image'] = "";
      $_POST['description'] = "";
      $_POST['status'] = 0;

      $successMessage = "Product added successfully";
    }
  }
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <form action="" method="post" enctype="multipart/form-data">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
           <?php if (isset($formErrors) && count($formErrors) > 0) { ?>
            <?php foreach ($formErrors as $error) { ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $error ?>
              </div>
          <?php }
          } ?>

          <?php if (isset($successMessage) && strlen($successMessage) > 0) { ?>
            <div class="alert alert-success" role="alert">
              <?php echo $successMessage ?>
            </div>
          <?php } ?>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Product Name</label>
                <input type="text" id="product_name" class="form-control" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : "" ?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Product Description</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="description"><?php echo isset($_POST['description']) ? $_POST['description'] : "" ?></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control custom-select" name="status">
                  <option selected disabled>Select one</option>
                  <option value="1" <?php echo isset($_POST['status']) && $_POST['status'] == 1 ? 'selected="selected"' : "" ?> >Active</option>
                  <option value="0" <?php echo isset($_POST['status']) && $_POST['status'] == 0 ? 'selected="selected"' : "" ?> >Inactive</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Category</label>
                <input type="text" id="inputClientCompany" class="form-control" name="category" value="<?php echo isset($_POST['category']) ? $_POST['category'] : "" ?>">
              </div>
              <div class="form-group">
                  <label for="exampleInputFile">Product image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
              </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input type="submit" name="addproduct" value="Create new Product" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- footer -->
<?php include 'partials/footer.php';?>
