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
            <h1>Môn học</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/Home">Trang chủ</a></li>
              <li class="breadcrumb-item active">Danh sách môn học</li>
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
                <h3 class="card-title" >Danh sách môn học</h3>
                <form method="POST" action="/Subject/create">
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
                    <th>Mã môn học</th>
                    <th>Tên môn học</th>
                    <th>Số tín chỉ</th>
                    <th>Số tiết lý thuyết</th>
                    <th>Số tiết thực hành</th>
                    <th>Tên khoa</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  <?php foreach($data['subjects'] as $key => $subject):  ?>
                  <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $subject['maMH'] ?></td>
                    <td><?php echo $subject['tenMH'] ?></td>
                    <td><?php echo $subject['soTinChi'] ?></td>
                    <td><?php echo $subject['soTietLT'] ?></td>
                    <td><?php echo $subject['soTietTH'] ?></td>
                    <td><?php echo $subject['tenKhoa'] ?></td>
                    <td  class="project-actions text-right">
                   
                      <a class="btn btn-primary btn-sm " href="/Subject/edit/<?php echo $subject['maMH'] ?>">
                        <i class="fas fa-edit">
                        </i>
                        Sửa
                      </a>
                      <a href="" onclick="subjectDeleteConfirm('<?php echo $subject['maMH'] ?>'); return false;"  class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
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