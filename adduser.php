<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include_once('./break/header.php')
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
    include_once('./break/navbar.php')
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
    include_once('./break/sidebar.php')
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 font-weight-bold" >USER MANAGMENT</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="usermanagment.php">User Managment</a></li>
              <li class="breadcrumb-item active" >Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary ">
              <div class="card-header">
                <h3 class="card-title">User Managment <small>Inventory System</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="usermanagmentsaveddata.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>  
                    <input type="password" name="userpassword" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  
                  <div class="form-group">
                  <label for="exampleInputPassword1">Departments</label>
            <select name="departments"  class="form-control">
                <option value="" selected disabled>Select Departments</option>
        <!-- php code connetion -->
        <?php
        $con = mysqli_connect("localhost","root","","db_lab_automation") or die("connection field"); 

        $sql = "SELECT * FROM departments";
    
        $result = mysqli_query($con,$sql) or die("query unsuuccesful");
        
        while($row = mysqli_fetch_assoc($result)){
    ?>
    <!-- php code connetion End-->
                <option value="<?php echo $row['department_id']; ?>"><?php echo $row['department_name']; ?></option>
            <?php } ?>
            </select>
        </div>
                  
        <div class="form-group">
                  <label for="exampleInputPassword1">Roles</label>
            <select name="roles" class="form-control">
                <option value="" selected disabled>Select Roles</option>
        <!-- php code connetion -->
        <?php
        $con2  = mysqli_connect("localhost","root","","db_lab_automation") or die("connection field"); 

        $sql2 = "SELECT * FROM roles";
    
        $result2 = mysqli_query($con2,$sql2) or die("query unsuuccesful");
        
        while($row2 = mysqli_fetch_assoc($result2)){
    ?>
    <!-- php code connetion End-->
                <option value="<?php echo $row2['roles_id']; ?>"><?php echo $row2['roles_name']; ?></option>
            <?php } ?>
            </select>
        </div>

                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->




  </div>
  

  <!-- footer -->
<?php
  include_once('./break/footer.php')
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
  include_once('./break/footerscript.php')
?>
</body>
</html>
