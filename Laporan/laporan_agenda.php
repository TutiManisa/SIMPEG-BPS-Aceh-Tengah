 <ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Laporan Agenda Staff</li>
</ol>
 <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><i class="material-icons">print</i> LAPORAN AGENDA STAFF </h2>
                        </div>
                        <div class="body">
                             <div class="table table-responsive"> 
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                    	<th>No</th>
                                        <th>Nama </th>
                                        <th>TP</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Hari/Tangal</th>
                                        <th>Lokasi</th>
                                        <th>Materi</th>
                                        <th>Waktu</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama </th>
                                        <th>TP</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Hari/Tangal</th>
                                        <th>Lokasi</th>
                                        <th>Materi</th>
                                        <th>Waktu</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                	<?php 
                                	include 'koneksi/-koneksi.php';
                                	$sql= mysql_query("select * from tb_agenda") or die(mysql_error());
                                	$no=1;
                                	while ($data=mysql_fetch_array($sql)) {
                                		# code...
                                	

                                	 ?>
                                    <tr>
                                    	<td><?php echo $no++;?>.</td>
                                        <td><?php echo $data['nm_guru']; ?></td>
                                        <td><?php echo $data['tp']; ?></td>
                                        <td><?php echo $data['mapel']; ?></td>
                                        <td><?php echo $data['tgl']; ?></td>
                                        <td><?php echo $data['kelas']; ?></td>
                                        <td><?php echo $data['materi']; ?></td>
                                        <td><?php echo $data['absen']; ?></td>
                                        <td><?php echo $data['ket']; ?></td>
                                    </tr>
                                    <?php 
                                   
                                    }

                                     ?>
                                
                                </tbody>
                            </table>
                        </div>
                            <a  target="_blank" href="Laporan/all_agenda_pdf.php" class="btn bg-light-blue waves-effect"> <i class="material-icons">picture_as_pdf</i> <b>Cetak PDF</b></a> 

                            <a  target="_blank" href="Laporan/all_agenda_excell.php" class="btn bg-brown waves-effect"><i class="material-icons">filter_none</i> <b>Export Excel</b></a> 

                            <a  target="_blank" href="Laporan/all_print_agenda.php" class="btn bg-red waves-effect"> <i class="material-icons">print</i> <b>PRINT</b></a>
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