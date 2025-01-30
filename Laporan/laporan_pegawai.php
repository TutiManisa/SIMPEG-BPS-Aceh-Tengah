<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Laporan Data Kepegawaian</li>
</ol>
<!-- Basic Examples -->
<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">
<div class="header">
<h2><i class="material-icons">print</i> LAPORAN DATA KEPEGAWAIAN </h2>
<ul class="header-dropdown m-r--5">
<li class="dropdown">
  
    <a href="javascript:void(0);"  class="btn btn-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img width="40" height="40" src="asset/icons/i.png"> 
    </a>
    <ul class="dropdown-menu pull-right">
        <li><a href="javascript:void(0);">Pilihan Laporan</a></li>
        <li><a href="Laporan/all_laporan.php"><img width="40" height="40"  src="asset/icons/pdf.png"> Cetak PDF</a></li>
        <li><a href="Laporan/print_excel.php"><img width="40" height="40"  src="asset/icons/xls.png"> Export Excell</a></li>        
        <li><a href="Laporan/print.php"><img width="40" height="40" src="asset/icons/printer.png"> Print</a></li>
    </ul>
</li>
</ul>
</div>
<div class="body">
<div class="row clearfix">
  <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
    <div class="table table-responsive"> 
      <table class="table table-striped">
        <thead>
          <tr>                                      
            <th>Nip</th>
            <th>Nama</th>                                       
            <th>Tempat,Tgl Lahir</th>
            <th>Jk</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Tanggal Masuk</th>
            <th>Print</th>
          </tr>
        </thead>
        <tbody>
        <?php
        include 'koneksi/-koneksi.php';
        $sql = mysql_query("select * from tb_pegawai") or die (mysql_error());
        $no=1;
        while ($data = mysql_fetch_array($sql)){
        ?>
          <tr>                                       
            <td><?php echo $data['nip']; ?></a></td>
            <td><?php echo $data['nama_pegawai']; ?></td>
            <td><?php echo $data['tempat']; ?>,<?php echo $data['tanggal_lahir']; ?></td>
            <td><?php echo $data['jk']; ?></td>
            <td><?php echo $data['agama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['tmt_pangkat']; ?></td>
            <td><a  target="_blank" href="Laporan/print_id.php?kdpeg=<?php echo $data['no_urut']?>"" class="btn bg-light-blue waves-effect"> <i class="material-icons">print</i></a></td>
          </tr>
        <?php
        $no++;
        };
        ?>
        </tbody>
      </table> 
      <!--<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
        <a  target="_blank" href="Laporan/all_laporan.php" class="btn bg-light-blue waves-effect"> <i class="material-icons">picture_as_pdf</i> <b>Cetak PDF</b></a>
        <a  target="_blank" href="Laporan/print_excel.php" class="btn bg-brown waves-effect"><i class="material-icons">filter_none</i> <b>Export Excel</b></a>
        <a  target="_blank" href="Laporan/print.php" class="btn bg-red waves-effect"> <i class="material-icons">print</i> <b>PRINT</b></a>
      </div> -->
         <a href="Laporan/all_laporan.php"  class="btn btn-default"><img width="40" height="40" src="asset/icons/pdf-icon.png"> 
    </a>
        <a href="Laporan/print_excel.php"  class="btn btn-default"><img width="40" height="40" src="asset/icons/xs.png"> 
    </a>
       <a href="Laporan/print.php"  class="btn btn-default"><img width="40" height="40" src="asset/icons/i.png"> 
    </a>
 
    
    

      


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
