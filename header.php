<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../img/icons/icon-48x48.png" />

    <title>Admin Info SMKN 1 Kragilan</title>

    <link href="../css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">AdminKit</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="index.php">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="guru.php">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Data Guru & karyawan</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="guru.php">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Data Siswa</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="#auth" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="layers"></i> <span class="align-middle">Data Angkatan Siswa</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            
                            <?php 
                            include('koneksi.php');

                            $data = mysqli_query($koneksi, "select * from tb_angkatan where kondisi='aktif'");
                            while ($d=mysqli_fetch_array($data)) { 
                            ?>
                               
                             <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Angkatan <?= $d['tahun_angkatan'] ?></a></li>

                            <?php } ?>

                        </ul>
                    </li>




                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-settings.html">
                            <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Settings</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-invoice.html">
                            <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Bagi Raport</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-blank.html">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
                        </a>
                    </li>



                    <li class="sidebar-header">
                        Tools & Components
                    </li>
                    <li class="sidebar-item">
                        <a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">UI Elements</span>
                        </a>
                        <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-modals.html">Modals</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="icons-feather.html">
                            <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a data-target="#forms" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Forms</span>
                        </a>
                        <ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">Form Layouts</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="forms-basic-inputs.html">Basic Inputs</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="tables-bootstrap.html">
                            <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tables</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Plugins & Addons
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="charts-chartjs.html">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="maps-google.html">
                            <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle d-flex">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                                <span class="text-dark">Profil</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages-settings.html"><i class="align-middle mr-1" data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content">
                <div class="container-fluid p-0">