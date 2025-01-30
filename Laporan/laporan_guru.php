<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Laporan Data Staff</li>
</ol>
<!-- Basic Examples -->
<div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
           <h2><i class="material-icons">print</i> LAPORAN DATA STAFF </h2>
          



          </div>
            <div class="body">
            <div class="row clearfix">
            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
             <div class="table table-responsive"> 
             <table class="table table-striped">
                                <thead>
                                    <tr>
                                      
                                        <th>No</th>
                                        <th>Nip</th>
                                        <th>Nama</th>                                       
                                        <th>Tempat,Tgl Lahir</th>
                                         <th>Jk</th>
                                        <th>Jabatan</th>
                                        <th>Status Perkawinan</th>
                                        <th>Telp</th>
                                        <th> Foto</th>
                                        <th>Print</th>
                                    </tr>
                                </thead>
                                <tbody>
                                      <?php
                                include 'koneksi/-koneksi.php';
                                $sql = mysql_query("select * from tb_guru") or die (mysql_error());
                                $no=1;
                                while ($data = mysql_fetch_array($sql)){
                                ?>
                                    <tr>   
                                    <td><?php echo $no++."."; ?></td>                                    
                                        <td><?php echo $data['nip']; ?> </a></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['tmp_lhr']; ?>,<?php echo $data['tgl_lhr']; ?></td>
                                        <td><?php echo $data['jk']; ?></td>
                                        <td><?php echo $data['jabatan']; ?></td>
                                        <td><?php echo $data['mapel']; ?></td>
                                        <td><?php echo $data['telepon']; ?></td>
                                        <td>
                                        <div class="user-info">
                                        <div class="image">
                                        <img src="asset/images/Guru/<?php echo $data['gambar']; ?>" width='50' height='50' alt='user' style='
                                        border: none;
                                        border-radius: 100%;' >
                                        </div>
                                        </div>
                                      </td>
                                      <td><a  target="_blank" href="Laporan/print_id_guru.php?kdgr=<?php echo $data['nip']?>"" class="btn btn-info waves-effect"> <i class="material-icons">print</i></a></td>
                                    
                                    </tr>
                                      <?php
                                        $no++;
                                        };
                                        ?>
                                 
                                </tbody>
                            </table> 
                             <a  target="_blank" href="Laporan/all_laporan_guru_pdf.php" class="btn bg-light-blue waves-effect"> <i class="material-icons">picture_as_pdf</i> <b>Cetak PDF</b></a> 

                            <a  target="_blank" href="Laporan/all_laporan_guru_excell.php" class="btn bg-brown waves-effect"><i class="material-icons">filter_none</i> <b>Export Excel</b></a> 

                            <a  target="_blank" href="Laporan/all_print_guru.php" class="btn bg-red waves-effect"> <i class="material-icons">print</i> <b>PRINT</b></a>                           
                            
                        </div>


            </div>
          </div>
        </div>


        </div>
      </div>
</div>
  <p class="text-left">
<a href="javascript:history.back()">
<button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float"  data-toggle="tooltip" data-placement="top" title=" Kembali">
<i class="material-icons">undo</i>
</button></a> </p>
