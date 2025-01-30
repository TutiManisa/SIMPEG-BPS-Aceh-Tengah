

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> LAPORAN DATA GURU </title>
    <!-- Favicon-->
    <link rel="icon" href="mts.png" type="image/x-icon" />
    <!--<link rel="icon" href="favicon.ico" type="image/x-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../asset/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
     <!-- Bootstrap Select Css -->
    <link href="../asset/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />


    <!-- Waves Effect Css -->
    <link href="../asset/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../asset/plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- SWEAT ALERT-->
<script src="../asset/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="../asset/dist/sweetalert.css">
<!-- END-->

    <!-- JQuery DataTable Css -->
    <link href="../asset/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">


    <!-- Custom Css -->
    <link href="../asset/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../asset/css/themes/all-themes.css" rel="stylesheet" />
    <link rel="icon" href="mts.png" type="image/x-icon" />

</head>

</head>
<body>

<!-- Striped Rows -->
    <?php
            include '../koneksi/-koneksi.php';
            $kdgr = @$_GET['kdgr'];
            $sql = mysql_query("select * from tb_guru where nip = '$kdgr'") or die(mysql_error());
            $data = mysql_fetch_array($sql);

            ?>

                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                   <tr class="info">
                                        <th scope="row"> LAPORAN DATA <?php echo $data['nama']; ?></th>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                       <tr>
                                        <th scope="row"><div class="user-info">
                                        <div class="image">
                                        <img src="../asset/images/Guru/<?php echo $data['gambar']; ?>" width='90' height='90' alt='user' style='background-color: none;
                                        border: 3px solid silver;' >
                                        </div>
                                        </div> </th>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Nip</th>
                                        <td><?php echo $data['nip']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama</th>
                                        <td><?php echo $data['nama']; ?></td>
                                    </tr>                                   
                                     <tr>
                                        <th scope="row">Jenis Kelamin</th>
                                        <td><?php echo $data['jk']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">TTL</th>
                                        <td><?php echo $data['tmp_lhr']; ?>,<?php echo $data['tgl_lhr']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Jabtan</th>
                                        <td><?php echo $data['jabatan']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Mata Pelajaran</th>
                                        <td><?php echo $data['mapel']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Alamat</th>
                                        <td><?php echo $data['alamat']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Telepon</th>
                                        <td><?php echo $data['telepon']; ?></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
 
</div>

                  <!-- Jquery Core Js -->
    <script src="../asset/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../asset/plugins/bootstrap/js/bootstrap.js"></script>
    

    <!-- Select Plugin Js -->
    <script src="../asset/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../asset/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../asset/plugins/node-waves/waves.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="../asset/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../asset/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../asset/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../asset/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../asset/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../asset/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../asset/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../asset/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../asset/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
     <!-- Waves Effect Plugin Js -->
    <script src="../asset/plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../asset/plugins/autosize/autosize.js"></script>
      <!-- JQuery Steps Plugin Js -->
    <script src="../asset/plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Moment Plugin Js -->
    <script src="../asset/plugins/momentjs/moment.js"></script>


     <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="asset/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
     <!-- Select Plugin Js -->
    <script src="asset/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Custom Js -->
    <script src="asset/js/admin.js"></script>    
    <script src="asset/js/pages/tables/jquery-datatable.js"></script>
    <script src="asset/js/pages/ui/tooltips-popovers.js"></script>

    <!-- Demo Js -->
    <script src="asset/js/demo.js"></script>
            
            

</body>
</html>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>

