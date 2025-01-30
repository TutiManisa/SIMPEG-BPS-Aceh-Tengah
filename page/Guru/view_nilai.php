 <ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Daftar Nilai Siswa</li>
</ol>
 <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><i class="material-icons">format_list_bulleted</i> DAFTAR NILAI SISWA </h2>
                        </div>
                        <div class="body">
                             <div class="table table-responsive"> 
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                    	<th>No</th>
                                    	<th>Nis</th>
                                        <th>Nama Siswa</th>
                                        <th>TP</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Nilai UH</th>
                                        <th>Nilai MID</th>
                                        <th>Nilai UAS</th>
                                        <th>Rata-rata</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                    	<th>No</th>
                                    	<th>Nis</th>
                                        <th>Nama Siswa</th>
                                        <th>TP</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Nilai UH</th>
                                        <th>Nilai MID</th>
                                        <th>Nilai UAS</th>
                                        <th>Rata-rata</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                	<?php 
                                	include 'koneksi/-koneksi.php';
                                	$sql= mysql_query("select * from tb_nilai") or die(mysql_error());
                                	$no=1;
                                	while ($data=mysql_fetch_array($sql)) {    
                                	 ?>
                                    <tr>
                                    	<td><?php echo $no++;?>.</td>
                                    	<td><?php echo $data['nis']; ?></td>
                                        <td><?php echo $data['nm_siswa']; ?></td>
                                        <td><?php echo $data['tp']; ?></td>
                                        <td><?php echo $data['mapel']; ?></td>
                                        <td><?php echo $data['uh']; ?></td>
                                        <td><?php echo $data['mid']; ?></td>
                                        <td><?php echo $data['uas']; ?></td>
                                        <td><?php echo $data['rata']; ?></td>
                                        <td><?php echo $data['ket']; ?></td>
                                        <td>
                                              <a href="?page=guru&action=update_nilai&kdgr=<?php echo $data['nis']; ?>"><button type="button" class="btn bg-purple btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Edit Data  ( <?php echo $data['nm_siswa']; ?> )">
                                            <i class="material-icons">edit</i>
                                            </button></a>

                                            <a onclick="return confirm('Yakin ingin hapus data ini ??')" href="?page=guru&action=del_nilai&kdgr=<?php echo $data['nis']; ?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Hapus ( <?php echo $data['nm_siswa']; ?> )">
                                            <i class="material-icons">close</i>
                                            </button></a>
                                        </td>
                                    </tr>
                                    <?php 
                                   
                                    }

                                     ?>
                                
                                </tbody>
                            </table>
                        </div> 
                        </div>                    
                    </div>
                           <p class="text-left">
<a href="?page=guru&action=add_nilai">
<button type="button" class="btn btn-success btn-circle-lg waves-effect waves-circle waves-float"  data-toggle="tooltip" data-placement="top" title=" Tambah Data">
<i class="material-icons">add</i>
</button></a> </p>
   <p class="text-left">
<a href="javascript:history.back()">
<button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float"  data-toggle="tooltip" data-placement="top" title=" Kembali">
<i class="material-icons">undo</i>
</button></a> </p>
                </div>
            </div>
            <!-- #END# Basic Examples -->