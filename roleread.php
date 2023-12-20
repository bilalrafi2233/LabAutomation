<!DOCTYPE html>
  <html lang="en">
  <head>
    <?php
    include_once('break/header.php')
    ?>
    </head>
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php
      include_once('break/navbar.php')
    ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php
      include_once('break/sidebar.php')
    ?>

  <!-- Content Wrapper. Contains page content -->
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Roles</li>
              <li class=" mx-2"><a href="roleadd.php"><button type="button" class="btn btn-primary" >Add Records</button></a></li>
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
          <h3 class="card-title">Roles</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">


        <?php
          $localhost ="localhost";
          $username = "root";
          $password = "";
          $db_name = "db_lab_automation";
          $con = mysqli_connect($localhost,$username,$password,$db_name) or die("connection field");
          $sql = "SELECT * FROM roles";
          $result = mysqli_query($con,$sql) or die("query unsuuccesful");
          if(mysqli_num_rows($result) > 0){
    ?>
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          ID
                      </th>
                      <th style="width: 20%">
                          Roles
                      </th>
                  </tr>
              </thead>
              
              <tbody>
              <?php    
                while($row = mysqli_fetch_assoc($result)){
        
              ?>
                <tr>
                  <td><?php echo $row['roles_id'] ?></td>
                  <td><?php echo $row['roles_name']   ?></td>
                  <td class="project-actions text-right">    
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                </tr>
              <?php  } 
            

            ?>
          </table>

          <?php
}
?>

      </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
    <!-- /.content -->

  

  <!-- footer -->
<?php
  include_once('break/footer.php')
?>
<!-- footer -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php
  include_once('break/footerscript.php')
?>
</body>
</html>
