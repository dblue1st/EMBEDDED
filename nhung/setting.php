<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('header.php'); ?>
</head>

<body class="hold-transition sidebar-mini">

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
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

    <?php include ('connect.php'); ?>

    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-6">

                                <div class="col-md-12">
                                    <div class="card card-primary mt-3">
                                        <div class="card-header">
                                            <h3 class="card-title"> Phòng 1 </small></h3>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <!-- form start -->
                                            <form  action="/nhung/editNDDAUT.php" method="post">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Nhiệt độ / Độ ẩm ưa thích: &nbsp;&nbsp;  
                                                            <span id="NhietDoMacDinh">
                                                                <?php 
                                                                    $nhietdo1 = getNDUT(1); 
                                                                    $min_temp1 = $nhietdo1['min_temp'];
                                                                    $max_temp1 = $nhietdo1['max_temp'];
                                                                    echo $min_temp1. " - ". $max_temp1;
                                                                ?> °C 
                                                                / 
                                                                <?php 
                                                                    $doam1 = getDAUT(1); 
                                                                    $min_humi1 = $doam1['min_humi'];
                                                                    $max_humi1 = $doam1['max_humi'];
                                                                    echo $min_humi1. " - ". $max_humi1; 
                                                                ?> %
                                                            </span>
                                                        </label> <br><br>

                                                        <label>Tùy chỉnh:</label> <br>
                                                        <label> &emsp; Nhiệt độ ưa thích: 
                                                            <input type="text" name="min_temp1" style="margin-left: 3px; width:20%;" value="<?= $min_temp1 ?>"> đến 
                                                            <input type="text" name="max_temp1" style="margin-left: 3px; width:20%;" value="<?= $max_temp1 ?>"> °C
                                                        </label> <br>
                                                        
                                                        <label> &emsp; Độ ẩm ưa thích: 
                                                            <input type="text" name="min_humi1" style="margin-left: 18px; width:20%;" value="<?= $min_humi1 ?>"> đến 
                                                            <input type="text" name="max_humi1" style="margin-left: 3px; width:20%;" value="<?= $max_humi1 ?>"> %
                                                        </label>
                                                        
                                                        <div>
                                                            <button type="submit" name="r1_btn" class="btn btn-primary float-right">Cập nhật</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>                                   
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="card card-primary mt-3">
                                        <div class="card-header">
                                            <h3 class="card-title"> Phòng 3 </small></h3>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <!-- form start -->
                                            <form  action="/nhung/editNDDAUT.php" method="post">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Nhiệt độ / Độ ẩm ưa thích: &nbsp;&nbsp;  
                                                            <span id="NhietDoMacDinh">
                                                                <?php 
                                                                    $nhietdo3 = getNDUT(3); 
                                                                    $min_temp3 = $nhietdo3['min_temp'];
                                                                    $max_temp3 = $nhietdo3['max_temp'];
                                                                    echo $min_temp3. " - ". $max_temp3;
                                                                ?> °C 
                                                                / 
                                                                <?php 
                                                                    $doam3 = getDAUT(3); 
                                                                    $min_humi3 = $doam3['min_humi'];
                                                                    $max_humi3 = $doam3['max_humi'];
                                                                    echo $min_humi3. " - ". $max_humi3; 
                                                                ?> %
                                                            </span>
                                                        </label> <br><br>

                                                        <label>Tùy chỉnh:</label> <br>
                                                        <label> &emsp; Nhiệt độ ưa thích: 
                                                            <input type="text" name="min_temp3" style="margin-left: 3px; width:20%;" value="<?= $min_temp3 ?>"> đến 
                                                            <input type="text" name="max_temp3" style="margin-left: 3px; width:20%;" value="<?= $max_temp3 ?>"> °C
                                                        </label> <br>
                                                        
                                                        <label> &emsp; Độ ẩm ưa thích: 
                                                            <input type="text" name="min_humi3" style="margin-left: 18px; width:20%;" value="<?= $min_humi3 ?>"> đến 
                                                            <input type="text" name="max_humi3" style="margin-left: 3px; width:20%;" value="<?= $max_humi3 ?>"> %
                                                        </label>
                                                        
                                                        <div>
                                                            <button type="submit" name="r3_btn" class="btn btn-primary float-right">Cập nhật</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>                                   
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="card card-primary mt-3">
                                        <div class="card-header">
                                            <h3 class="card-title"> Phòng 2 </small></h3>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <!-- form start -->
                                            <form  action="/nhung/editNDDAUT.php" method="post">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Nhiệt độ / Độ ẩm ưa thích: &nbsp;&nbsp;  
                                                            <span id="NhietDoMacDinh">
                                                                <?php 
                                                                    $nhietdo2 = getNDUT(2); 
                                                                    $min_temp2 = $nhietdo2['min_temp'];
                                                                    $max_temp2 = $nhietdo2['max_temp'];
                                                                    echo $min_temp2. " - ". $max_temp2;
                                                                ?> °C 
                                                                / 
                                                                <?php 
                                                                    $doam2 = getDAUT(2); 
                                                                    $min_humi2 = $doam2['min_humi'];
                                                                    $max_humi2 = $doam2['max_humi'];
                                                                    echo $min_humi2. " - ". $max_humi2; 
                                                                ?> %
                                                            </span>
                                                        </label> <br><br>

                                                        <label>Tùy chỉnh:</label> <br>
                                                        <label> &emsp; Nhiệt độ ưa thích: 
                                                            <input type="text" name="min_temp2" style="margin-left: 3px; width:20%;" value="<?= $min_temp2 ?>"> đến 
                                                            <input type="text" name="max_temp2" style="margin-left: 3px; width:20%;" value="<?= $max_temp2 ?>"> °C
                                                        </label> <br>
                                                        
                                                        <label> &emsp; Độ ẩm ưa thích: 
                                                            <input type="text" name="min_humi2" style="margin-left: 18px; width:20%;" value="<?= $min_humi2 ?>"> đến 
                                                            <input type="text" name="max_humi2" style="margin-left: 3px; width:20%;" value="<?= $max_humi2 ?>"> %
                                                        </label>
                                                        
                                                        <div>
                                                            <button type="submit" name="r2_btn" class="btn btn-primary float-right">Cập nhật</button>
                                                        </div>
                                                    </div>
                                                </div>
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

    
    <?php include ('footer.php'); ?>
</body>
</html>