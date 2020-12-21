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
            <h1>Giáo viên</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/Home">Trang chủ</a></li>
              <li class="breadcrumb-item active">Danh sách giáo viên</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/mvc/Views/shared/noti.php"; ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" >Danh sách giáo viên</h3>
                <!-- <form method="POST" action="/Class/create">
                  <button type="submit" class="btn btn-info float-right">
                      Thêm
                  </button>
                </form> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Mã giáo viên</th>
                    <th>Tên giáo viên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Tên khoa</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  <?php foreach($data['teachers'] as $key => $teacher):  ?>
                  <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $teacher['maCoVan'] ?></td>
                    <td><?php echo $teacher['tenCoVan'] ?></td>
                    <td><?php echo $teacher['email'] ?></td>
                    <td><?php echo $teacher['soDienThoai'] ?></td>
                    <td><?php echo $teacher['tenKhoa'] ?></td>
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
    ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/public/plugins/jszip/jszip.min.js"></script>
<script src="/public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="/public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/public/dist/js/demo.js"></script>
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