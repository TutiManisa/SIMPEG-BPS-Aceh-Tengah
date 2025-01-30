<?php
include('config/cekadmin.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Halaman Administrator</title>
    <!-- Favicon-->
    <link rel="icon" href="st 1.jpeg" type="image/x-icon" />
    <!--<link rel="icon" href="favicon.ico" type="image/x-icon"> -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="asset/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
     <!-- Bootstrap Select Css -->
    <link href="asset/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Waves Effect Css -->
    <link href="asset/plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="asset/plugins/animate-css/animate.css" rel="stylesheet" />
     <!-- Range Slider Css -->
    <link href="asset/plugins/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" />
    <link href="asset/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" />
    <!-- SWEAT ALERT-->
<script src="asset/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="asset/dist/sweetalert.css">
<!-- END-->
    <!-- JQuery DataTable Css -->
    <link href="asset/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="asset/css/style.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="asset/css/themes/all-themes.css" rel="stylesheet" />
    <link rel="icon" href="st 1.jpeg" type="image/x-icon" />
</head>

<body class="theme-red">
    <!-- Page Loader 
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
   #END# Page Loader -->
    
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
               <!-- <a class="navbar-brand" href=""><img src="asset/images/logo.png" class="img-responsive"></a> -->
               <a class="navbar-brand" href="" style="font-family: FZShuTi;"> <b style="font-family: FZShuTi; font-size: 39px;">SIMPEG </b><b>BPS Aceh Tengah</b> </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->               
                    <li class="pull-right"><a href="#"> <b> <?php echo date (" d F Y") ?></b></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                 <br>
                 <?php
                $img = $_SESSION['img'];
                ?>
                 <img src="asset/images/user/<?php echo $_SESSION['img']; ?>" width="68" height="68" alt="user" style="
                    border: 3px solid silver;
                    border-radius: 100%;">
                    <?php echo "<b style='color:white; font-size:19px; font-family:FZShuTi;'>". $_SESSION['nama']."</b>"; ?>
                </div>


                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="color: white;" data-toggle="tooltip" data-placement="top" title="Klik Disini Untuk Keluar !! ">keyboard_arrow_down</i>

                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>                           
                            <li role="seperator" class="divider"></li>
                            <li><a onclick="return confirm('Yakin ingin Keluar ??')" href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>

                        </ul> <br>
                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo "<b style='color:white; font-family:FZShuTi;'>". $_SESSION['level']."</b>"; ?><br>
                    <!-- <div class="email"><b style="color: white;">Administrator</b></div>-->

            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                     
                    <li class="header">MENU UTAMA</li>
                    <li class="active">
                        <a href="?page">
                            <i class="material-icons">dashboard</i>
                            <span>DASHBOARD</span>
                        </a>
                    </li>
                         <a class="menu-toggle" style="color: black">
                            <i class="material-icons" style="color: black">assignment</i>
                            <span style="color: black">Data Support</span>
                        </a>
                        <ul class="ml-menu">                            
                            <li>
                                <a href="?page=admin&action=jabatan">
                                <i class="material-icons">note_add</i><span>Data Jabatan</span></a>
                            </li>
                            <li>
                                <a href="?page=admin&action=pangkat">
                                <i class="material-icons">note_add</i><span>Data Pangkat</span></a>
                            </li>
                            <li>
                               <a href="?page=admin&action=status">
                                <i class="material-icons">note_add</i><span>Data Status</span></a>
                            </li>
                             <li>
                               <a href="?page=admin&action=lembaga">
                                <i class="material-icons">note_add</i><span>Data Lembaga </span></a>
                            </li>
                            <li>
                               <a href="?page=admin&action=gaji">
                                <i class="material-icons">note_add</i><span>Sumber Gaji</span></a>
                            </li>
                            <li>
                               <a href="?page=admin&action=jenjang">
                                <i class="material-icons">note_add</i><span>Jenjang Sekolah</span></a>
                            </li>
                    </li> 
                        </ul>
                        <a class="menu-toggle" style="color: black">
                            <i class="material-icons" style="color: black">assignment</i>
                            <span style="color: black">Data Master</span>
                        </a>
                        <ul class="ml-menu">                            
                             <li>
                                <a href="?page=admin&action=addpeg">
                                <i class="material-icons">group_add</i><span>Master Pegawai </span></a>
                            </li>
                            <li>
                                <a href="?page=guru&action=add">
                                <i class="material-icons">person_add</i><span> Master Data Staff </span></a>
                            </li>                    
                    </li> 
                        </ul>

                    <li>
                        <a class="menu-toggle" style="color: white">
                            <i class="material-icons" style="color: black">people</i>
                            <span style="color: black">Kepegawaian</span>
                        </a>
                        <ul class="ml-menu">
                            
                            <li>
                                 <a href="?page=admin&action=pegawai">
                                <i class="material-icons">book</i><span>Data Pegawai</span></a>
                            </li> 
                            <li>
                                <a href="?page=admin&action=ppdk">
                                <i class="material-icons">school</i><span>Data Pendidikan </span></a>
                            </li> 
                            <li>
                                <a href="?page=admin&action=diklat">
                                <i class="material-icons">assistant</i><span>Data Diklat </span></a>
                            </li>                        
                        </ul>
                    </li>
                       <li>
                        <a class="menu-toggle" style="color: white">
                            <i class="material-icons" style="color: black">person</i>
                            <span style="color: black">Staff</span>
                        </a>
                        <ul class="ml-menu">
                           
                             <li>
                                 <a href="?page=guru">
                                <i class="material-icons">book</i><span> Data Staff</span></a>
                            </li>
                            <li>
                                <a href="?page=guru&action=agenda">
                                <i class="material-icons">note</i><span> Agenda </span></i></a>
                            </li>
                        
                           
                                                       
                        </ul>
                    </li>
                    <!--
                       <li>
                        <a class="menu-toggle" style="color: white">
                            <i class="material-icons" style="color: black">people</i>
                            <span style="color: black">Siswa</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                 <a href="?page=admin&action=pegawai">
                                <i class="material-icons">book</i><span> Lihat Data Pegawai</span></a>
                            </li>
                            <li>
                                <a href="?page=admin&action=addpeg">
                                <i class="material-icons">group_add</i><span> Tambah Data Pegawai </span></a>
                            </li>                           
                        </ul>
                    </li> -->
                    <!--
                    <li>
                        <a class="menu-toggle" style="color: white">
                            <i class="material-icons" style="color: black">collections_bookmark</i>
                            <span style="color: black">Daftar Hadir</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../../pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="../../pages/tables/jquery-datatable.html">Jquery Datatables</a>
                            </li>
                            <li>
                                <a href="../../pages/tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li> -->
                         <li>
                        <a class="menu-toggle" style="color: white">
                            <i class="material-icons" style="color: black">insert_chart</i>
                            <span style="color: black">Grafik</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?page=guru&action=grafik"><i class="material-icons">pie_chart</i><span> Pegawai</span></a>
                            </li>
                            <li>
                            <li>
                                <a href="?page=guru&action=grafik_guru"><i class="material-icons">timeline</i><span> Staff</span></a>
                            </li>
                          
                        </ul>
                    </li> 
                     <li>
                        <a class="menu-toggle" style="color: white">
                            <i class="material-icons" style="color: black">print</i>
                            <span style="color: black">Laporan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a style="color: black" href="?page=admin&action=lapeg"><i class="material-icons">content_copy</i><span>Laporan Pegawai</span></a>
                            </li>
                            <li>
                                <a style="color: black" href="?page=admin&action=lapguru"><i class="material-icons">content_copy</i><span>Laporan Staff</span></a>
                            </li>
                            <li>
                                <a style="color: black" href="?page=guru&action=lap_agenda"><i class="material-icons">content_copy</i><span>Laporan Agenda</span></a>
                            </li>
                        </ul>
                    </li>
                
                     <li>
                        <a href="?page=admin&action=tampil_user">
                            <i class="material-icons" style="color: black">settings</i>
                            <span style="color: black">Manage User</span>
                        </a>
                    </li> 

                          <li>
                        <a href="?page=admin&action=backup">
                            <i class="material-icons" style="color: black">file_download</i>
                            <span style="color: black">Backup Database</span>
                        </a>
                    </li>                     
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->

            <div class="legal">
                <div class="copyright">
                    &copy;<a href="nisa18317@gmail.com">Tuti Manisa | 210401012</a>.
                </div>
                <div class="version">
                    <b>SIMPEG BPS Aceh Tengah </b>
                </div>
            </div>

            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar 
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">PETUNJUK</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>Petunjuk Penggunaan Aplikasi</p>
                        <ul class="setting-list">
                            <li>
                                    1. Untuk memasukkan data, Pilih Menu Master data
                            
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                     
                    </div>
                </div>
            </div>
        </aside>
        #END# Right Sidebar -->
    </section>

<section class="content">
    <div class="container-fluid">
    <?php
    $page = @$_GET['page'];
        $action = @$_GET['action'];
        if ($page == "admin") {
            if ($action=="") {
                include "page/user/input_user.php";
                }elseif ($action=="tampil_user") {
                include "page/user/tampil_user.php";
                }elseif ($action=="hapus_user") {
                include "page/user/hapus_user.php";
                }elseif ($action=="edit_user") {
                include "page/user/edit_user.php";
                }elseif ($action=="jabatan") {
                include "page/Pegawai/+jabatan.php";
                }elseif ($action=="hapus_jabatan") {
                include "page/Pegawai/del_jab.php";
                }elseif ($action=="pangkat") {
                include "page/Pegawai/+pangkat.php";
                }elseif ($action=="hapus_pangkat") {
                include "page/Pegawai/del_pangkat.php";
                }elseif ($action=="status") {
                include "page/Pegawai/+status.php";
                }elseif ($action=="hapus_status") {
                include "page/Pegawai/del_status.php";

                }elseif ($action=="pegawai") {
                include "page/Pegawai/+pegawai.php";
                }elseif ($action=="hapus_peg") {
                include "page/Pegawai/del_peg.php";
                }elseif ($action=="addpeg") {
                include "page/Pegawai/addpegawai.php";
                }elseif ($action=="lembaga") {
                include "page/Pegawai/+lembaga.php";
                }elseif ($action=="edit_peg") {
                include "page/Pegawai/edit_peg.php";
                }elseif ($action=="hapus_lbg") {
                include 'page/Pegawai/del_lembaga.php';
                # code...
                }elseif ($action=="jenjang") {
                include 'page/Pegawai/+jenjang.php';
                # code...
                }elseif ($action=="hapus_jjg") {
                include 'page/Pegawai/del_jjg.php';
                }
                elseif ($action=="aksi_edit") {
                include 'page/Pegawai/aksi_edit.php';
                }elseif ($action=="lapeg") {
                include 'Laporan/laporan_pegawai.php';
                }elseif ($action=="lapguru") {
                include 'Laporan/laporan_guru.php';
                }elseif ($action==".detail"){
                include 'page/Pegawai/.detail_pegawai.php';
                }elseif ($action=="gaji") {
                include 'page/Pegawai/+sumber_gaji.php';
                }elseif ($action=="hapus_gaji") {
                include 'page/Pegawai/del_gaji.php';
                }elseif ($action=="ppdk") {
                include 'page/Pegawai/+pendidikan.php';
                }elseif ($action=="diklat") {
                include 'page/Pegawai/+pelatihan.php';
                }elseif ($action=="backup") {
                include 'page/backup-data.php';
                }
    } elseif ($page == "guru"){
            if ($action==""){
                include"page/Guru/view_guru.php";
                }else if ($action=="delete") {
                include"page/Guru/del_guru.php";
                }else if ($action=="add") {
                include"page/Guru/add_guru1.php";
                }else if ($action=="update") {
                include"page/Guru/update_guru.php";
                }else if ($action=="detail") {
                include"page/Guru/detail_guru.php";
                }else if ($action=="pg") {
                include 'page/view/pegawai.php';
                }else if ($action=="grafik") {
                include 'page/Grafik/pegawai.php';
                }else if ($action=="grafik1") {
                include 'page/Grafik/grafik1.php';
                }else if ($action=="grafik2") {
                include 'page/Grafik/grafik2.php';
                }else if ($action=="agenda") {
                include 'page/Guru/+agenda.php';
                }else if ($action=="add_agenda") {
                include 'page/Guru/agenda.php';
                }else if ($action=="lap_agenda") {
                include 'Laporan/laporan_agenda.php';
                }else if ($action=="del_agenda") {
                include 'page/Guru/del_agenda.php';
                }else if ($action=="update_agenda") {
                include 'page/Guru/update_agenda.php';
                }else if ($action=="nilai") {
                include 'page/Guru/view_nilai.php';
                }else if ($action=="proses") {
                include 'page/Guru/simpan.php';
                }else if ($action=="add_nilai") {
                include 'page/Guru/nilai_siswa.php';
                }elseif ($action=="update_nilai") {
                include 'page/Guru/update_nilai.php';
                }elseif ($action=="del_nilai") {
                include 'page/Guru/del_nilai.php';
                }elseif ($action=="lap_nilai") {
                include 'Laporan/laporan_nilai.php';
                }elseif ($action=="grafik_guru") {
                include 'page/Grafik/guru.php';
                }
              
    } elseif ($page == "") {
            include"page/admin_dashboard.php";
            } else{
            include '404.php';
        }
    ?>
    </div>

</section>
    




    <!-- Jquery Core Js -->
    <script src="asset/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="asset/plugins/bootstrap/js/bootstrap.js"></script>
    

    <!-- Select Plugin Js -->
    <script src="asset/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="asset/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="asset/plugins/node-waves/waves.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="asset/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="asset/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="asset/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="asset/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="asset/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="asset/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="asset/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="asset/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="asset/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
     <!-- Waves Effect Plugin Js -->
    <script src="asset/plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="asset/plugins/autosize/autosize.js"></script>
      <!-- JQuery Steps Plugin Js -->
    <script src="asset/plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Moment Plugin Js -->
    <script src="asset/plugins/momentjs/moment.js"></script>


     <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="asset/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
     <!-- Select Plugin Js -->
    <script src="asset/plugins/bootstrap-select/js/bootstrap-select.js"></script>
     <!-- RangeSlider Plugin Js -->
    <script src="asset/plugins/ion-rangeslider/js/ion.rangeSlider.js"></script>
   

    <!-- Custom Js -->
    <script src="asset/js/admin.js"></script>   
     <script src="asset/js/pages/ui/range-sliders.js"></script>

    <script src="asset/js/pages/tables/jquery-datatable.js"></script>
    <script src="asset/js/pages/ui/tooltips-popovers.js"></script>

    <!-- Demo Js -->
    <script src="asset/js/demo.js"></script>
    <script type="text/javascript">
        $(function () {
         $("#yamin_01").ionRangeSlider();
          $("#yamin_02").ionRangeSlider();
         });
    </script>

    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#date').bootstrapMaterialDatePicker
            ({
                time: false,
                clearButton: true
            });

            $('#time').bootstrapMaterialDatePicker
            ({
                date: false,
                shortTime: false,
                format: 'HH:mm'
            });

            $('#date-format').bootstrapMaterialDatePicker
            ({
                format: 'dddd DD MMMM YYYY - HH:mm'
            });
            $('#date-fr').bootstrapMaterialDatePicker
            ({
                format: 'DD/MM/YYYY HH:mm',
                lang: 'fr',
                weekStart: 1, 
                cancelText : 'ANNULER',
                nowButton : true,
                switchOnClick : true
            });

            $('#date-end').bootstrapMaterialDatePicker
            ({
                weekStart: 0, format: 'DD/MM/YYYY HH:mm'
            });
            $('#date-start').bootstrapMaterialDatePicker
            ({
                weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
            }).on('change', function(e, date)
            {
                $('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
            });

            $('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

            $.material.init()
        });
        </script>
        
         
</body>

</html>