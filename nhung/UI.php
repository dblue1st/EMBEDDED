<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('header.php'); ?>
</head>

<body class="hold-transition sidebar-mini">

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/nhung/UI.php" class="brand-link">
            <img src="/nhung/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Lập trình nhúng</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="/nhung/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                <a href="#" class="d-block">Nhóm 11</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <nav class="mt-2">
                <!-- Sidebar -->
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="/nhung/UI.php" class="nav-link">
                            <i class="nav-icon fas fa-bars"></i>
                            <p>Danh sách phòng</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/nhung/setting.php" class="nav-link">
                            <i class="nav-icon fas fa-bars"></i>
                            <p>Cài đặt</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <?php include('connect.php'); ?>

    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="card card-primary mt-3">
                                    <div class="card-header">
                                        <h3 class="card-title"> Phòng 1 </small></h3>
                                    </div>

                                    <!-- Gọi view -->                                       
                                    <div class="col-md-12">
                                        <!-- form start -->
                                        <form>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Nhiệt độ ưa thích: 
                                                        <?php 
                                                            $NDUT1 = getNDUT(1);
                                                            echo $NDUT1['min_temp']. ' - '. $NDUT1['max_temp']. ' °C';
                                                        ?>
                                                    </label><br>
                                                    <label> &emsp; --- Nhiệt độ hiện tại:
                                                        <?php 
                                                            echo getNhietDo(1). ' °C';
                                                            DieuChinh(1);
                                                        ?>
                                                    </label> <br><br><br>

                                                    <label>Độ ẩm ưa thích:
                                                        <?php 
                                                            $DAUT1 = getDAUT(1);
                                                            echo $DAUT1['min_humi']. ' - '. $DAUT1['max_humi']. ' %';
                                                        ?>
                                                    </label><br>
                                                    <label> &emsp; --- Độ ẩm hiện tại: 
                                                        <?php 
                                                            echo getDoAM(1). ' %';
                                                            DieuChinh(1);
                                                        ?>
                                                    </label><br>
                                                </div>
                                            </div>
                                        <!-- /.card-body -->
                                        </form>                                   
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="card card-primary mt-3">
                                    <div class="card-header">
                                        <h3 class="card-title"> Phòng 2 </small></h3>
                                    </div>

                                    <!-- Gọi view -->                                       
                                    <div class="col-md-12">
                                        <!-- form start -->
                                        <form>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>Nhiệt độ ưa thích: 
                                                            <?php 
                                                                $NDUT2 = getNDUT(2);
                                                                echo $NDUT2['min_temp']. ' - '. $NDUT2['max_temp']. ' °C';
                                                            ?>
                                                        </label><br>
                                                        <label> &emsp; --- Nhiệt độ hiện tại:
                                                            <?php 
                                                                echo getNhietDo(2). ' °C';
                                                                DieuChinh(2);
                                                            ?>
                                                        </label> <br><br><br>

                                                        <label>Độ ẩm ưa thích:
                                                            <?php 
                                                                $DAUT2 = getDAUT(2);
                                                                echo $DAUT2['min_humi']. ' - '. $DAUT2['max_humi']. ' %';
                                                            ?>
                                                        </label><br>
                                                        <label> &emsp; --- Độ ẩm hiện tại: 
                                                            <?php 
                                                                echo getDoAM(2). ' %';
                                                                DieuChinh(2);
                                                            ?>
                                                        </label><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </form>                                   
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="card card-primary mt-3">
                                    <div class="card-header">
                                        <h3 class="card-title"> Phòng 3 </small></h3>
                                    </div>

                                    <!-- Gọi view -->                                       
                                    <div class="col-md-12">
                                        <!-- form start -->
                                        <form>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Nhiệt độ ưa thích: 
                                                        <?php 
                                                            $NDUT3 = getNDUT(3);
                                                            echo $NDUT3['min_temp']. ' - '. $NDUT3['max_temp']. ' °C';
                                                        ?>
                                                    </label><br>
                                                    <label> &emsp; --- Nhiệt độ hiện tại:
                                                        <?php 
                                                            echo getNhietDo(3). ' °C';
                                                            DieuChinh(3);
                                                        ?>
                                                    </label> <br><br><br>

                                                    <label>Độ ẩm ưa thích:
                                                        <?php 
                                                            $DAUT3 = getDAUT(3);
                                                            echo $DAUT3['min_humi']. ' - '. $DAUT3['max_humi']. ' %';
                                                        ?>
                                                    </label><br>
                                                    <label> &emsp; --- Độ ẩm hiện tại: 
                                                        <?php 
                                                            echo getDoAM(3). ' %';
                                                            DieuChinh(3);
                                                        ?>
                                                    </label><br>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </form>                                   
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>


        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Nhóm 11</b>
            </div>
            <strong>Thiết kế nhà thông minh</strong>
        </footer>
    </div>

    <button type="button" id="modal-btn" class="btn btn-primary" data-toggle="modal" data-target="#ModalCenter" style="display:none;"></button>
    <!-- MODAL -->
    <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Thông báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Đã tự động điều chỉnh lại nhiệt độ và độ ẩm.
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-close" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        var btn_close = document.getElementById('btn-close');
        btn_close.onclick = function(){
            location.reload();
        };
    </script>

    <?php include ('footer.php'); ?>
</body>
</html>
