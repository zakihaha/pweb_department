<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="navbar-brand" href="index.html">
                        <b class="logo-icon">
                            <img src="<?php echo base_url(); ?>assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <img src="<?php echo base_url(); ?>assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <span class="logo-text">
                            <img src="<?php echo base_url(); ?>assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <img src="<?php echo base_url(); ?>assets/images/logo-light-text.png" class="light-log"o alt="homepage" />
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-pic mr-2"><img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="users" class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="m-b-0 user-name font-medium">Muh Zaki Choiruddin <i class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email">20.01.4551</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="sidebar-item"> <a class="menu sidebar-link waves-effect waves-dark sidebar-link" href="#barang" aria-expanded="false"><i class="mdi mdi-border-all"></i><span class="hide-menu">Barang</span></a></li>
                        <li class="sidebar-item"> <a class="menu sidebar-link waves-effect waves-dark sidebar-link" href="#home" aria-expanded="false"><i class="mdi mdi-border-all"></i><span class="hide-menu">Departemen</span></a></li>
                        <li class="sidebar-item"> <a class="menu sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-border-all"></i><span class="hide-menu">Pengadaan</span></a></li>
                        <li class="sidebar-item"> <a class="menu sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-border-all"></i><span class="hide-menu">Peminjaman</span></a></li>
                        <li class="sidebar-item"> <a class="menu sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu">Laporan Tahunan</span></a></li>
                        <li class="sidebar-item"> <a class="menu sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu">Laporan Stok</span></a></li>
                    </ul>

                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">List Data Departemen</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dibawah Ini Adalah Data Departemen</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Departemen</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($list_department->result() as $key => $value) {
                                                $no++
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo $no ?></th>
                                                    <td><?php echo $value->nama_departemen ?></td>
                                                    <td>Read | Hapus | Edit</td>
                                                </tr>
                                            <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







                
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <footer class="footer text-center">
                    All Rights Reserved by Xtreme Admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
                </footer>
            </div>
        </div>

</body>

</html>