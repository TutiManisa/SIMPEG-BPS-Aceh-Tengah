


<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Detail Data Staff</li>
</ol>
<!-- Striped Rows -->
    <?php
            include 'koneksi/-koneksi.php';
            $kdgr = @$_GET['kdgr'];
            $sql = mysql_query("select * from tb_guru where nip = '$kdgr'") or die(mysql_error());
            $data = mysql_fetch_array($sql);

            ?>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DETAIL DATA STAFF                                
                            </h2>                            
                        </div>
                        <div class="body table-responsive">
  <p class="text-right">
 
                                            <a href="?page=guru&action=update&kdgr=<?php echo $data['nip']; ?>"><button type="button" class="btn bg-light-blue btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Edit Data  ( <?php echo $data['nama']; ?> )">
                                            <i class="material-icons">mode_edit</i>
                                            </button></a>

                                            <a onclick="return confirm('Yakin ingin hapus data ini ??')" href="?page=guru&action=delete&kdgr=<?php echo $data['nip']; ?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Hapus ( <?php echo $data['nama']; ?> )">
                                            <i class="material-icons">close</i>
                                            </button></a>
  </p>
                            <table class="table table-striped">
                                <tbody>
                                   <tr class="info">
                                        <th scope="row">Detail Data Staff <code><?php echo $data['nip']; ?></code></th>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                       <tr>
                                        <th scope="row"><div class="user-info">
                                        <div class="image">
                                        <img src="asset/images/Guru/<?php echo $data['gambar']; ?>" width='90' height='90' alt='user' style='background-color: none;
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
                                        <th scope="row">Agama</th>
                                        <td><?php echo $data['agama']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Jabatan</th>
                                        <td><?php echo $data['jabatan']; ?></td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Status Perkawinan</th>
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
                    </div>
                </div>
            </div>
            <!-- #END# Striped Rows -->
