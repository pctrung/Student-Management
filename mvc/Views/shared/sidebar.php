<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/Home" class="brand-link">
      <img src="/public/img/ctulogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-2">
      <span class="brand-text font-weight-light">Hệ thống quản lý</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/public/img/trung.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/About" class="d-block">Trung</a>
        </div>
        <div class="image">
          <img src="/public/img/xuandetail.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/About" class="d-block">Xuân</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/Student" class="nav-link <?php if($this->currentRoute() == "Student"){ echo 'active'; } ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Sinh viên
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/Subject" class="nav-link <?php if($this->currentRoute() == "Subject"){ echo 'active'; } ?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Môn học
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/Teacher" class="nav-link <?php if($this->currentRoute() == "Teacher"){ echo 'active'; } ?>">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Giáo viên
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/Classroom" class="nav-link <?php if($this->currentRoute() == "Classroom"){ echo 'active'; } ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Quản lý lớp
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/College" class="nav-link <?php if($this->currentRoute() == "College"){ echo 'active'; } ?>">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Quản lý khoa
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>  