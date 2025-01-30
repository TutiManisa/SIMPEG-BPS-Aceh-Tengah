
<script src="asset/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="asset/dist/sweetalert.css">
<!-- END-->
<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Data Pendidikan</li>
</ol>
<!-- Basic Examples -->
<div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
         
          <p class="text-right">
          <a href="?page=admin&action=addpeg" class="btn btn-danger btn-round green">
          <i class="material-icons">queue</i>
          Tambah  Data<span style="margin-left:10px;"></span></a></p>
           <h2><i class="material-icons">view_list</i> DAFTAR DATA PENDIDIKAN PEGAWAI </h2>
          </div>
            <div class="body">
            <div class="row clearfix">
            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
             <div class="table table-responsive"> 
             <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                      
                                        <th>No.</th>
                                        <th>Nip</th>                                       
                                        <th>Jenjang</th>
                                         <th>Satuan Pendidikan</th>
                                        <th>Tahun Masuk</th>
                                        <th>Tahun Lulus</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                       
                                        <th>No.</th>
                                        <th>Nip</th>                                       
                                        <th>Jenjang</th>
                                         <th>Satuan Pendidikan</th>
                                        <th>Tahun Masuk</th>
                                        <th>Tahun Lulus</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                           
                                      <?php
include 'koneksi/-koneksi.php';

$sql = mysql_query("SELECT tb_pendidikan.*, tb_pegawai.* FROM tb_pendidikan, tb_pegawai
WHERE tb_pendidikan.id_pend=tb_pegawai.no_urut") or die(mysql_error());
 $no=1;
                                while ($data = mysql_fetch_array($sql)){
?>


                                    <tr>
                                    <td><?php echo $no++."." ;?></td>                                       
                                        <td><a style="color: orangered;" href="?page=admin&action=.detail&kdpeg=<?php echo $data['no_urut']; ?>"> <?php echo $data['nip']; ?></a></td>
                                        <td><?php echo $data['jenjang']; ?></td>
                                        <td><?php echo $data['satuan_pendidikan']; ?></td>
                                        <td><?php echo $data['tahun_masuk']; ?></td>
                                        <td><?php echo $data['tahun_lulus']; ?></td>
                                        <td>
                                          <a href="?page=admin&action=.detail&kdpeg=<?php echo $data['no_urut']; ?>"><button type="button" class="btn bg-light-blue btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Detail Data  ( <?php echo $data['nip']; ?> )">
                                            <i class="material-icons">search</i>
                                            </button></a><!--
                                             <a href="?page=admin&action=detail&kdpeg=<?php echo $data['no_urut']; ?>"><button type="button" class="btn bg-purple btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Detail Data  ( <?php echo $data['nama_pegawai']; ?> )">
                                            <i class="material-icons">visibility</i>
                                            </button></a>
                                            <a href="?page=admin&action=edit_peg&kdpeg=<?php echo $data['no_urut']; ?>"><button type="button" class="btn bg-light-blue btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Edit Data  ( <?php echo $data['nama_pegawai']; ?> )">
                                            <i class="material-icons">mode_edit</i>
                                            </button></a> -->
                                            <a onclick="return confirm('Yakin ingin hapus data ini ??')" href="?page=admin&action=hapus_peg&kdpeg=<?php echo $data['no_urut']; ?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Hapus ( <?php echo $data['nip']; ?> )">
                                            <i class="material-icons">close</i>
                                            </button></a>
                                        </td>
                                    </tr>
                                      <?php
                                        $no++;
                                        };
                                        ?>
                                 
                                </tbody>
                            </table>                           
                            
                        </div>


            </div>
          </div>
        </div>


        </div>
      </div>
</div>
             <!-- SweetAlert Plugin Js -->
    <script src="asset/dist/sweetalert.min.js"></script>
