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
                <h1>Chỉnh sửa thông tin</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/Home" ?>Sinh viên</a></li>
                <li class="breadcrumb-item active">Chỉnh sửa thông tin</li>
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
            <form action="/Student/update" method="POST">
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
                                        <label for="tenSV">Mã sinh viên</label>
                                        <input type="text" name="maSV" id="tenSV" class="form-control" value = "<?php echo $data['student']['maSV']?>">
                                        </input>
                                    </div>
                                    <div class="form-group">
                                        <label for="tenSV">Họ tên</label>
                                        <input type="text" name="tenSV" id="tenSV" value="<?php echo $data['student']['tenSV']?>" class="form-control" >
                                        </input>
                                    </div>
                                    <div class="form-group">
                                        <label for="gioiTinh">Giới tính</label>
                                        <select required id="gioiTinh" name="gioiTinh" class="form-control custom-select">
                                        <?php 
                                            $gioiTinh = $data['student']['gioiTinh'];
                                            $gioiTinh == "F" ? $gt = "Nam" : $gt = "Nữ";
                                            echo "<option value=\"$gt\" selected>$gioiTinh</option>";
                                        ?>
                                        <option value="F">Nam</option>
                                        <option value="M">Nữ</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="maLop">Mã lớp</label>
                                        <select required id="maLop" name="maLop" class="form-control custom-select">
                                            <option selected>
                                                <?php echo $data['student']['maLop']?>
                                            </option>
                                            <?php 
                                                for($i = 0; $i < count($data['classrooms']); $i++){
                                                    $temp = $data['classrooms'][$i]['maLop'];
                                                    if($temp != $data['student']['maLop'])
                                                    {
                                                        echo "<option value=\"$temp\">$temp</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="queQuan">Quê quán</label>
                                        <input required type="text" id="queQuan" name="queQuan" value="<?php echo $data['student']['queQuan']?>" class="form-control">
                                            
                                        </input>
                                    </div>
                                    <div class="form-group">
                                        <label for="diaChi">Địa chỉ</label>
                                        <input required type="text" id="diaChi" name="diaChi" value="<?php echo $data['student']['diaChi']?>" class="form-control">
                                            
                                        </input>
                                    </div>
                                    <div class="form-group">
                                        <label for="ngaySinh">Ngày sinh</label>
                                        <input required type="date" id="ngaySinh" name="ngaySinh" value="<?php echo $data['student']['ngaySinh']?>" class="form-control">
                                            
                                        </input>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input required type="text" id="email" name="email" value="<?php echo $data['student']['email']?>" class="form-control">
                                            
                                        </input>
                                    </div>
                                </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-secondary" href="/Student" >
                            Cancel
                        </a>
                        <input type="submit" value="Save Changes" class="btn btn-success float-right">
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

