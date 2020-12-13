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
                <h1>Thêm sinh viên</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/Student" ?>Sinh viên</a></li>
                <li class="breadcrumb-item active">Thêm sinh viên</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
        <?php
            require_once $_SERVER["DOCUMENT_ROOT"]."/mvc/Views/shared/noti.php";
        ?>
            <form action="/Student/store" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Nhập thông tin sinh viên</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="tenSV">Họ tên</label>
                                        <input type="text" name="tenSV" id="tenSV" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label for="gioiTinh">Giới tính</label>
                                        <select required id="gioiTinh" name="gioiTinh" class="form-control custom-select">
                                            <option disabled selected>Select one</option>
                                            <option value="F">Nam</option>
                                            <option value="M">Nữ</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="maLop">Mã lớp</label>
                                        <select required id="maLop" name="maLop" class="form-control custom-select">
                                            <option disable selected>Select one</option>
                                            <?php foreach($data['classrooms'] as $key => $classroom): ?>
                                                <option value="<?php echo $classroom['maLop'] ?>"><?php echo $classroom['maLop'] ?></option>;
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="queQuan">Quê quán</label>
                                        <input required type="text" id="queQuan" name="queQuan" class="form-control"></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="diaChi">Địa chỉ</label>
                                        <input required type="text" id="diaChi" name="diaChi" class="form-control"></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="ngaySinh">Ngày sinh</label>
                                        <input required type="date" id="ngaySinh" name="ngaySinh" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input required type="text" id="email" name="email" class="form-control">
                                    </div>
                                </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-secondary" href="/Student" >
                            Hủy
                        </a>
                        <input type="submit" value="Lưu" class="btn btn-success float-right">
                    </div>
                </div>
            </form>
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

