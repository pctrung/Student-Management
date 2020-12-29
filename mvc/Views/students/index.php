<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/mvc/Views/shared/header.php";
?>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <?php
        require_once  $_SERVER["DOCUMENT_ROOT"] . "/mvc/Views/shared/nav_bar.php";
        require_once  $_SERVER["DOCUMENT_ROOT"] . "/mvc/Views/shared/sidebar.php";
    ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sinh viên</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/Home">Trang chủ</a></li>
              <li class="breadcrumb-item active">Danh sách sinh viên</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/mvc/Views/shared/noti.php"; ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" >Danh sách sinh viên</h3>
                <form method="POST" action="/Student/create">
                  <button type="submit" class="btn btn-info float-right">
                      Thêm
                  </button>
                </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>MSSV</th>
                    <th>Họ tên</th>
                    <th>Lớp</th>
                    <th>Email</th>
                    <th>Quê quán</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  <?php foreach($data['students'] as $key => $student):  ?>
                  <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $student['maSV'] ?></td>
                    <td><?php echo $student['tenSV'] ?></td>
                    <td><?php echo $student['maLop'] ?></td>
                    <td><?php echo $student['email'] ?></td>
                    <td><?php echo $student['queQuan'] ?></td>
                    <td  class="project-actions text-right">
                   
                      <a class="btn btn-primary btn-sm " href="/Student/detail/<?php echo $student['maSV'] ?>">
                          <i class="fas fa-folder">
                          </i>
                          Xem
                      </a>
                      <a href="javascript:studentDeleteConfirm(<?php echo $student['maSV'];?>);"  class="btn btn-danger btn-sm">
                          <i class="fas fa-trash">
                          </i>
                          Xoá
                      </a>
                            
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php
      require_once  $_SERVER["DOCUMENT_ROOT"] ."/mvc/Views/shared/footer.php";
      require_once  $_SERVER["DOCUMENT_ROOT"] ."/mvc/Views/shared/table_required.php";
    ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
      "buttons": ["copy", "excel", "pdf", "colvis"], 
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>