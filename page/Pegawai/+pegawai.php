<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Data Kepegawaian</li>
</ol>

<!-- Basic Examples -->
<div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">        
          
           <h2><i class="material-icons">view_list</i> DAFTAR DATA KEPEGAWAIAN</h2>   
          </div>

            <div class="body">
            <div class="row clearfix">
            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
             <div class="table table-responsive"> 
             <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                      
                                        <th>No</th>
                                        <th>Nip</th>
                                        <th>Nama</th>                                       
                                        <th>Tempat,Tgl Lahir</th>
                                         <th>Jk</th>
                                        <th>Agama</th>
                                        <th>Alamat</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                       <th>No</th>
                                        <th>Nip</th>
                                        <th>Nama</th>                                        
                                        <th>Tempat,Tgl Lahir</th>
                                        <th>Jk</th>
                                        <th>Agama</th>
                                        <th>Alamat</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                      <?php
                                include 'koneksi/-koneksi.php';
                                $sql = mysql_query("select * from tb_pegawai") or die (mysql_error());
                                $no=1;
                                while ($data = mysql_fetch_array($sql)){
                                ?>
                                    <tr> 
                                    <td><?php echo $no++."." ;?></td>                                      
                                        <td><a style="color: orangered;" href="?page=admin&action=.detail&kdpeg=<?php echo $data['no_urut']; ?>"> <?php echo $data['nip']; ?></a></td>
                                        <td><?php echo $data['nama_pegawai']; ?></td>
                                        <td><?php echo $data['tempat']; ?>,<?php echo $data['tanggal_lahir']; ?></td>
                                        <td><?php echo $data['jk']; ?></td>
                                        <td><?php echo $data['agama']; ?></td>
                                        <td><?php echo $data['alamat']; ?></td>
                                        <td><?php echo $data['tmt_pangkat']; ?></td>
                                        <td>
                                          <a href="?page=admin&action=.detail&kdpeg=<?php echo $data['no_urut']; ?>"><button type="button" class="btn bg-light-blue btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Detail Data  ( <?php echo $data['nama_pegawai']; ?> )">
                                            <i class="material-icons">search</i>
                                            </button></a><!--
                                             <a href="?page=admin&action=detail&kdpeg=<?php echo $data['no_urut']; ?>"><button type="button" class="btn bg-purple btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Detail Data  ( <?php echo $data['nama_pegawai']; ?> )">
                                            <i class="material-icons">visibility</i>
                                            </button></a>
                                            <a href="?page=admin&action=edit_peg&kdpeg=<?php echo $data['no_urut']; ?>"><button type="button" class="btn bg-light-blue btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Edit Data  ( <?php echo $data['nama_pegawai']; ?> )">
                                            <i class="material-icons">mode_edit</i>
                                            </button></a> -->
                                            <a onclick="return confirm('Yakin ingin hapus data ini ??')" href="?page=admin&action=hapus_peg&kdpeg=<?php echo $data['no_urut']; ?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Hapus ( <?php echo $data['nama_pegawai']; ?> )">
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
<p class="text-right">
<a href="?page=admin&action=addpeg">
<button type="button" class="btn btn-success btn-circle-lg waves-effect waves-circle waves-float"  data-toggle="tooltip" data-placement="top" title=" Tambah Data">
<i class="material-icons">add</i>
</button></a> 
<a href="javascript:history.back()">
<button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float"  data-toggle="tooltip" data-placement="top" title=" Kembali">
<i class="material-icons">undo</i>
</button></a>
</p>
