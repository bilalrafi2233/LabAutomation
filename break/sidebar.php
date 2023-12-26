<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class=" brand-text font-weight-bold" style="color:#45f3ff;">Lab Automation</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['user']['user_name'] ?> </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php 
            if($_SESSION['user']['user_role']==1){
              ?>
              <li class="nav-item">
                <a href="userread.php" class="nav-link">
                <i class="fa fa-users"></i>  
                <!--lag nhi rha | <i></i>  -->
                  <p class=" font-weight-bold" style="color:#45f3ff;">
                    User Managent
                    <!--  -->
                  </p>
                </a>
              </li>
              <?php
            }
          ?>
          
              
          
          <li class="nav-item">
            <a href="productsread.php" class="nav-link">
              <i class="fa-duotone fa-users-gear" style="--fa-primary-color: #0045bd; --fa-secondary-color: #0045bd;"></i>
              <p class=" font-weight-bold" style="color:#45f3ff;">
                Product Managent
                <!--  -->
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-duotone fa-users-gear" style="--fa-primary-color: #0045bd; --fa-secondary-color: #0045bd;"></i>
              <p class=" font-weight-bold" style="color:#45f3ff;">
                category
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="departmentread.php" class="nav-link">
              <i class="fa-duotone fa-users-gear" style="--fa-primary-color: #0045bd; --fa-secondary-color: #0045bd;"></i>
              <p class=" font-weight-bold" style="color:#45f3ff;">
              Departments
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="roleread.php" class="nav-link">
              <i class="fa-duotone fa-users-gear" style="--fa-primary-color: #0045bd; --fa-secondary-color: #0045bd;"></i>
              <p class=" font-weight-bold" style="color:#45f3ff;">
                Roles
                
              </p>
            </a>
          </li>

          <li class=" mx-2"><a href="logout.php"><button type="button" class="btn btn-primary"  style="background-color:#45f3ff; color:black;" >Log Out</button></a></li>

        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>