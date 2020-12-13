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
                <h1>Thông tin</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/Student" ?>Sinh viên</a></li>
                <li class="breadcrumb-item active">Thông tin</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                        src="/public/img/<?php echo ($data['student']['gioiTinh'] == "F" ? "avatar_nam.png" : "avatar_nu.png"); ?>"
                        alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center"><?php echo $data['student']['tenSV'];?></h3>

                    <p class="text-muted text-center">Sinh viên</p>

                    <div class="card-body">
                        <strong><i class="fas fa-user"></i> Họ tên</strong>
                        <p><?php echo $data['student']['tenSV'];?></p>

                        <hr>

                        <strong><i class="fas fa-id-card-alt"></i> Mã số sinh viên</strong>
                        <p><?php echo $data['student']['maSV'];?></p>

                        <hr>

                        <strong><i class="fas fa-users"></i> Lớp</strong>
                        <p><?php echo $data['student']['maLop'];?>: <?php echo $data['student']['tenLop'];?></p>

                        <hr>

                        <strong><i class="fas fa-user-graduate"></i> Cố vấn</strong>
                        <p><?php echo $data['student']['tenCoVan'];?></p>

                        <hr>

                        <strong><i class="fas fa-university"></i> Khoa</strong>
                        <p><?php echo $data['student']['tenKhoa'];?></p>

                        <hr>

                        <strong><i class="fas fa-envelope-open-text"></i> Email</strong>
                        <p><?php echo $data['student']['email'];?></p>

                        <hr>

                        <strong><i class="fas fa-birthday-cake"></i> Ngày Sinh</strong>
                        <p><?php echo $data['student']['ngaySinh'];?></p>

                        <hr>

                        <strong><i class="fas fa-street-view"></i>  Quê Quán</strong>
                        <p><?php echo $data['student']['queQuan'];?></p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Địa chỉ</strong>
                        <p><?php echo $data['student']['diaChi'];?></p>
                    </div>

                    <a href="/Student/edit/<?php echo $data['student']['maSV'];?>" class="btn btn-primary btn-block"><b>Chỉnh sửa</b></a>
                    <a href="javascript:deleteConfirm(<?php echo $data['student']['maSV'];?>)"  class="btn btn-danger btn-block"><b>Xóa sinh viên</b></a>
                </div>
                <!-- /.card-body -->
            </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
        <!-- /.content -->
    <section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title" >Kết quả</h3>
            <form method="POST" action="/Student/create">
                <button type="submit" class="btn btn-info float-right">
                    Thêm
                </button>
            </form>
            </div>
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>STT</th>
                <th>Mã môn học</th>
                <th>Tên môn học</th>
                <th>Học kỳ</th>
                <th>Năm học</th>
                <th>Điểm</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            
            <?php if($data['scores'] != NULL): ?>
                <?php foreach($data['scores'] as $key => $score):  ?>
                <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $score['maMH'] ?></td>
                    <td><?php echo $score['tenMH'] ?></td>
                    <td><?php echo $score['hocKy'] ?></td>
                    <td><?php echo $score['namHoc'] ?></td>
                    <td><?php echo $score['diem'] ?></td>
                    <td  class="project-actions text-right">                  
                    <a class="btn btn-danger btn-sm" href="/Student/delete/<?php echo $student['maSV'] ?>">
                        <i class="fas fa-trash">
                        </i>
                        Xoá
                    </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>

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