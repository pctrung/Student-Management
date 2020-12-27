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
                <h1>Chỉnh sửa môn học</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/Subject" ?>Môn học</a></li>
                <li class="breadcrumb-item active">Chỉnh sửa môn học</li>
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
            <form action="/Subject/update/<?php echo $data['subject']['maMH'];?>" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Nhập thông tin cần chỉnh sửa</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="maMH">Mã môn học</label>
                                        <input type="text" name="maMH" id="maMH" class="form-control" value="<?php echo $data['subject']['maMH']; ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="tenMH">Tên môn học</label>
                                        <input type="text" name="tenMH" id="tenMH" class="form-control" value="<?php echo $data['subject']['tenMH']; ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="soTinChi">Số tín chỉ</label>
                                        <input type="number" name="soTinChi" id="soTinChi" class="form-control" value="<?php echo $data['subject']['soTinChi']; ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="soTietLT">Số tiết lý thuyết</label>
                                        <input type="number" name="soTietLT" id="soTietLT" class="form-control" value="<?php echo $data['subject']['soTietLT']; ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="soTietTH">Số tiết thực hành</label>
                                        <input type="number" name="soTietTH" id="soTietTH" class="form-control" value="<?php echo $data['subject']['soTietTH']; ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="maKhoa">Khoa</label>
                                        <select required id="maKhoa" name="maKhoa" class="form-control custom-select">
                                            <option selected><?php echo $data['subject']['maKhoa'];?></option>
                                            <?php foreach($data['colleges'] as $key => $college): ?>
                                                <option value="<?php echo $college['maKhoa'] ?>"><?php echo $college['maKhoa'].' - '.$college['tenKhoa'] ?></option>;
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-secondary" href="/Subject" >
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

