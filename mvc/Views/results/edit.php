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
                <h1>Sửa kết quả</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/Student/<?php echo $data['student']['maSV']?>" ?><?php echo $data['student']['tenSV']?></a></li>
                <li class="breadcrumb-item active">Sửa kết quả</li>
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
            <form action="/Result/update/<?php echo $data['student']['maSV']?>" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Nhập thông tin cần sửa</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="maSV">Mã số sinh viên</label>
                                        <input readonly type="text" name="maSV" id="maSV" class="form-control" value="<?php echo $data['student']['maSV']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="tenSV">Họ tên</label>
                                        <input readonly type="text" name="tenSV" id="tenSV" class="form-control" value="<?php echo $data['student']['tenSV']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="maMH">Mã môn học</label>
                                        <input readonly class="form-control" name="maMH" value="<?php echo $data['subject']['maMH']?>"></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="hocKy">Học kỳ</label>
                                        <select required id="hocKy" name="hocKy" class="form-control custom-select">
                                            <option selected value="<?php echo $data['hocKy']?>"><?php echo $data['hocKy']?></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="namHoc">Năm học</label>
                                        <select required id="namHoc" name="namHoc" class="form-control custom-select">
                                            <option selected value="<?php echo $data['namHoc']?>"><?php echo $data['namHoc']?></option>
                                            <option value="2018-2019">2018-2019</option>
                                            <option value="2019-2020">2019-2020</option>
                                            <option value="2020-2021">2020-2021</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="diem">Điểm</label>
                                        <input required type="number" id="diem" name="diem" class="form-control">
                                    </div>
                                </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-secondary" href="/Student/<?php echo $data['student']['maSV']?>" >
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

