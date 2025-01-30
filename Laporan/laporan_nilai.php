 <ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Laporan Nilai Siswa</li>
</ol>
 <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><i class="material-icons">print</i> LAPORAN NILAI SISWA</h2>
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
                                        <th>Print</th>
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
                                        <th>Print</th>
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
                                              <a href="#"><button type="button" class="btn bg-light-blue btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title="Cetak ( <?php echo $data['nm_siswa']; ?> )">
                                            <i class="material-icons">print</i>
                                            </button></a> 
                                        </td>
                                    </tr>
                                    <?php 
                                   
                                    }

                                     ?>
                                
                                </tbody>
                            </table>
                            <a  target="_blank" href="Laporan/all_nilai_pdf.php" class="btn bg-light-blue waves-effect"> <i class="material-icons">print</i> <b>Cetak PDF</b></a> 

                            <a  target="_blank" href="Laporan/all_nilai_excell.php" class="btn bg-brown waves-effect"><i class="material-icons">print</i> <b>Export Excel</b></a> 

                            <a  target="_blank" href="Laporan/all_print_nilai.php" class="btn bg-red waves-effect"> <i class="material-icons">print</i> <b>PRINT</b></a>
                        </div>                     
                    </div>
                </div>
   <p class="text-left">
<a href="javascript:history.back()">
<button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float"  data-toggle="tooltip" data-placement="top" title=" Kembali">
<i class="material-icons">undo</i>
</button></a> </p>
                </div>
            </div>
            <!-- #END# Basic Examples -->