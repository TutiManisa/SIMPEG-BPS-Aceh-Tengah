<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> LAPORAN DATA PEGAWAI </title>
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
<body>

<!-- Striped Rows -->
<?php
include '../koneksi/-koneksi.php';
$kdpeg = @$_GET['kdpeg'];
$sql = mysql_query("select * from tb_pegawai where no_urut = '$kdpeg'") or die(mysql_error());
$data = mysql_fetch_array($sql);
?>                      <div class="body table-responsive">
                  
                            <table class="table table-striped">
                                <tbody>
                                	 <tr class="info">
                                        <th scope="row"> IDENTITAS PENDIDIK & PTK </th>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Nip</th>
                                        <td><?php echo $data['nip']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama</th>
                                        <td><?php echo $data['nama_pegawai']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">TTL</th>
                                        <td><?php echo $data['tempat']; ?>,<?php echo $data['tanggal_lahir']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Jenis Kelamin</th>
                                        <td><?php echo $data['jk']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Agama</th>
                                        <td><?php echo $data['agama']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Nama Ibu</th>
                                        <td><?php echo $data['ibu']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Alamat</th>
                                        <td><?php echo $data['alamat']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">E-Mail</th>
                                        <td><?php echo $data['email']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Hp</th>
                                        <td><?php echo $data['hp']; ?></td>
                                    </tr>
                                    <tr class="info">
                                        <th scope="row"> DATA KEPEGAWAIAN</th>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Nomor SK</th>
                                        <td><?php echo $data['no_sk']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Tamatan Pangkat</th>
                                        <td><?php echo $data['tmt_pangkat']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Pangkat/Golongan</th>
                                        <td><?php echo $data['id_pangkat']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Jabatan</th>
                                        <td><?php echo $data['id_jabatan']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Status Pegawai</th>
                                        <td><?php echo $data['id_status']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Lembaga Pengangkat</th>
                                        <td><?php echo $data['id_pengangkat']; ?></td>
                                    </tr>
									<?php
									include '../koneksi/-koneksi.php';
									$kdpeg = @$_GET['kdpeg'];
									$sql1 = mysql_query("select * from tb_pendidikan where id_pend = '$kdpeg'") or die(mysql_error());
									$data = mysql_fetch_array($sql1);
									?>
                                     <tr class="info">
                                        <th scope="row">DATA PENDIDIKAN</th>
                                        <td> </td>
                                        <td></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Jenjang Pendidikan</th>
                                        <td><?php echo $data['jenjang']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Satuan Pendidikan</th>
                                        <td><?php echo $data['satuan_pendidikan']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Tahun Masuk</th>
                                        <td><?php echo $data['tahun_masuk']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Tahun Lulus</th>
                                        <td><?php echo $data['tahun_lulus']; ?></td>
                                    </tr>
								<?php
								include '../koneksi/-koneksi.php';
								$kdpeg = @$_GET['kdpeg'];
								$sql2 = mysql_query("select * from tb_diklat where id_diklat = '$kdpeg'") or die(mysql_error());
								$data = mysql_fetch_array($sql2);
								?>
                                     <tr class="info">
                                        <th scope="row"> DATA DIKLAT/PELATIHAN</th>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Jenis Diklat</th>
                                        <td><?php echo $data['jenis_diklat']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Nama Diklat</th>
                                        <td><?php echo $data['nama_diklat']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Penyelenggaran</th>
                                        <td><?php echo $data['penyelenggara']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Tahun</th>
                                        <td><?php echo $data['tahun']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Tingkat</th>
                                        <td><?php echo $data['tingkat']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Waktu</th>
                                        <td><?php echo $data['waktu']; ?></td>
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