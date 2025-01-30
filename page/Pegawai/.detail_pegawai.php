<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Detail Data Kepegawaian</li>
</ol>
<!-- Striped Rows -->
<?php
include 'koneksi/-koneksi.php';
$kdpeg = @$_GET['kdpeg'];
$sql = mysql_query("select * from tb_pegawai where no_urut = '$kdpeg'") or die(mysql_error());
$data = mysql_fetch_array($sql);
?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DETAIL DATA PEGAWAI                                
                            </h2>
                            <code> <b style="font-size: 16px; color: black;"> Berikut Detail Data Dengan Nip </b></code>
                            <code> <b style="font-size: 16px;">  <?php echo $data['nip']; ?> </b></code>


                            
                        </div>
                        <div class="body table-responsive">
                        	<p class="text-right">
							<a href="?page=admin&action=edit_peg&kdpeg=<?php echo $data['no_urut']; ?>"><button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Edit Data  ( <?php echo $data['nama_pegawai']; ?> )">
							<i class="material-icons">mode_edit</i>
							</button></a>
							  <a onclick="return confirm('Yakin ingin hapus data ini ??')" href="?page=admin&action=hapus_peg&kdpeg=<?php echo $data['no_urut']; ?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Hapus ( <?php echo $data['nama_pegawai']; ?> )">
                                            <i class="material-icons">close</i>
                                            </button></a>
							 </p>
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
                                    <tr>
                                        <th scope="row">Sumber Gaji</th>
                                        <td><?php echo $data['id_sumbergaji']; ?></td>
                                    </tr>
									<?php
									include 'koneksi/-koneksi.php';
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
								include 'koneksi/-koneksi.php';
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
                    </div>
                </div>
            </div>
            <!-- #END# Striped Rows -->
            