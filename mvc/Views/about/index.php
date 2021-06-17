<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/mvc/Views/shared/header.php";
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
                            <h1>Về chúng tôi</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/Home" ?>Trang chủ</a></li>
                                <li class="breadcrumb-item active">Về chúng tôi</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <?php
                require_once $_SERVER["DOCUMENT_ROOT"] . "/mvc/Views/shared/noti.php";
                ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="/public/img/trungdetail.jpg" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">Phạm Chí Trung</h3>

                                    <p class="text-muted text-center">Web Developer | Designer</p>

                                    <ul class="list-group list-group-unbordered mb-3">

                                        <li class="list-group-item">
                                            <b>Mã số sinh viên</b> <a class="float-right">B1809424</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Chuyên ngành</b> <a class="float-right">Công nghệ thông tin</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Trường</b> <a class="float-right">Đại học Cần Thơ</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email</b> <a class="float-right">chitrung110268@gmail.com</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Số điện thoại</b> <a class="float-right">0369 863 655</a>
                                        </li>

                                    </ul>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col text-center">
                                                <a href="https://www.facebook.com/trungxi.it" target="_blank" class="fab fa-facebook fa-2x"></a>
                                            </div>
                                            <div class="col text-center">
                                                <a href="https://www.linkedin.com/in/trung-ph%E1%BA%A1m-101b871a2/" target="_blank" class="fab fa-linkedin fa-2x"></a>
                                            </div>
                                            <div class="col text-center">
                                                <a href="https://www.github.com/trungxiit" target="_blank" class="fab fa-github fa-2x"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-6">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="/public/img/xuandetail.jpg" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">Hầu Diễm Xuân</h3>

                                    <p class="text-muted text-center">Web Developer</p>

                                    <ul class="list-group list-group-unbordered mb-3">

                                        <li class="list-group-item">
                                            <b>Mã số sinh viên</b> <a class="float-right">B1809433</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Chuyên ngành</b> <a class="float-right">Công nghệ thông tin</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Trường</b> <a class="float-right">Đại học Cần Thơ</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email</b> <a class="float-right">xuanb1809433@student.ctu.edu.vn</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Số điện thoại</b> <a class="float-right">0901 058 190</a>
                                        </li>

                                    </ul>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col text-center">
                                                <a href="https://www.facebook.com/xuan.haudiem" target="_blank" class="fab fa-facebook fa-2x"></a>
                                            </div>
                                            <div class="col text-center">
                                                <a href="#" target="_blank" class="fab fa-linkedin fa-2x"></a>
                                            </div>
                                            <div class="col text-center">
                                                <a href="https://www.github.com/hdxuan" target="_blank" class="fab fa-github fa-2x"></a>
                                            </div>
                                        </div>
                                    </div>
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
        </div>
        <!-- /.content-wrapper -->
        <?php
        require_once  $_SERVER["DOCUMENT_ROOT"] . "/mvc/Views/shared/footer.php";
        ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <div class="footer">
        đây là footer</div>