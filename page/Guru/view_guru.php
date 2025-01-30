

<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Data Staff</li>
</ol>

<!-- Basic Examples -->
<div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
            <h2><i class="material-icons">format_list_bulleted</i> DAFTAR DATA STAFF</h2>
        </div>
            <div class="body">
            <div class="row clearfix">
            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
             <div class="table table-responsive"> 
             <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Nip</th>
                                        <th>Nama</th>                                       
                                        <th>Tempat,Tgl Lahir</th>
                                        <th>Jk</th>
                                        <th>Jabatan</th>
                                        <th>Status Perkawinan</th>
                                        <th>Telp</th>
                                        <th> Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nip</th>
                                        <th>Nama</th>                                       
                                        <th>Tempat,Tgl Lahir</th>
                                         <th>Jk</th>
                                        <th>Jabatan</th>
                                        <th>Status Perkawinan</th>
                                        <th>Telp</th>
                                        <th> Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                      <?php
                                include 'koneksi/-koneksi.php';
                                $sql = mysql_query("select * from tb_guru") or die (mysql_error());
                                $no=1;
                                while ($data = mysql_fetch_array($sql)){
                                ?>
                                    <tr>                                      
                                        <td><a style="color: orangered;" href="?page=guru&action=detail&kdgr=<?php echo $data['nip']; ?>"><?php echo $data['nip']; ?> </a></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['tmp_lhr']; ?>,<?php echo $data['tgl_lhr']; ?></td>
                                        <td><?php echo $data['jk']; ?></td>
                                        <td><?php echo $data['jabatan']; ?></td>
                                        <td><?php echo $data['mapel']; ?></td>
                                        <td><?php echo $data['telepon']; ?></td>
                                        <td>
                                        <div class="user-info">
                                        <div class="image">
                                        <img src="asset/images/Guru/<?php echo $data['gambar']; ?>" width='50' height='50' alt='user' style='background-color: dodgerblue;
                                        border: 3px solid blue;
                                        border-radius: 100%;' >
                                        </div>
                                        </div>
                                      </td>
                                        <td>
                                          <a href="?page=guru&action=detail&kdgr=<?php echo $data['nip']; ?>"><button type="button" class="btn bg-light-blue btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Detail Data  ( <?php echo $data['nama']; ?> )">
                                            <i class="material-icons">search</i>
                                            </button></a>

                                            <a onclick="return confirm('Yakin ingin hapus data ini ??')" href="?page=guru&action=delete&kdgr=<?php echo $data['nip']; ?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Hapus ( <?php echo $data['nama']; ?> )">
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
                        <p class="text-left">
<a href="?page=guru&action=add">
<button type="button" class="btn btn-success btn-circle-lg waves-effect waves-circle waves-float"  data-toggle="tooltip" data-placement="top" title=" Tambah Data">
<i class="material-icons">add</i>
</button></a>
<a href="javascript:history.back()">
<button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float"  data-toggle="tooltip" data-placement="top" title=" Kembali">
<i class="material-icons">undo</i>
</button></a>


 </p>
