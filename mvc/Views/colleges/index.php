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
            <h1>Khoa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/Home">Trang chủ</a></li>
              <li class="breadcrumb-item active">Danh sách khoa</li>
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
                <h3 class="card-title" >Danh sách khoa</h3>
                <!-- <form method="POST" action="/College/create">
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
                    <th>Mã khoa</th>
                    <th>Tên khoa</th>
                    <th>Tổng sinh viên</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  <?php foreach($data['colleges'] as $key => $college):  ?>
                  <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $college['maKhoa'] ?></td>
                    <td><?php echo $college['tenKhoa'] ?></td>
                    <td><?php echo $college['soLuongSV'] ?></td>
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