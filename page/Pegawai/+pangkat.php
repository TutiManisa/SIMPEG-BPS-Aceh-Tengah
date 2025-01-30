
<script src="asset/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="asset/dist/sweetalert.css">
<!-- END-->

<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Data Pangkat</li>
</ol>

<!-- Basic Examples -->

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                            
                                <p class="text-right">
            <a href="" class="btn btn-danger btn-round green" data-toggle="modal" data-target="#mdModal">
                <i class="material-icons">queue</i>
            Tambah  Data<span style="margin-left:10px;"></span></a>
            </p>
          

                               <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
              
                            
                                <div class="modal-header bg-blue">
                            <h4 class="modal-title" id="defaultModalLabel"><i class="material-icons">queue</i> Tambah Data Pangkat</h4>
                        </div>
                        
                        <div class="modal-body">
                           <div class="row clearfix">
<?php 
include'koneksi/-koneksi.php';
$carikode = mysql_query("select max(id_pangkat) from tb_pangkat") or die(mysql_error());
$datakode = mysql_fetch_array($carikode);
if ($datakode) {
$nilaikode = substr($datakode[0], 1);
$kode = (int) $nilaikode;
$kode = $kode + 1;
$hasilkode= "P" .str_pad($kode, 3, "0", STR_PAD_LEFT);
} else{
$hasilkode = "P001";
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="col-sm-12">
<div class="form-group form-float">
<div class="form-line">
<input type="text" name="id_pangkat" class="form-control" value="<?php echo "$hasilkode";?>">
<label class="form-label">Kode Pangkat</label>
</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group form-float">
<div class="form-line">
<input type="text" name="nama_golongan" class="form-control">
<label class="form-label">Nama Golongan</label>
</div>
</div>
</div>



</div>


                        </div>
                        <div class="modal-footer bg-blue">
                            <input type="submit" name="simpan" class="btn bg-blue waves-effect" value="SIMPAN">
                            <button type="button" class="btn bg-red waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                        </form>

                <?php
                $id_pangkat = @$_POST['id_pangkat'];
                $nama_golongan = @$_POST['nama_golongan'];

                $simpan = @$_POST['simpan'];

                if ($simpan){
                if ($id_pangkat == "" || $nama_golongan == "") {
                ?>
                <script type="text/javascript">             
                swal("Oops...", "Inputan tidak boleh kosong !!:(", "error");
                </script>
                <?php

                }else{
                mysql_query("INSERT INTO tb_pangkat VALUES ('$id_pangkat','$nama_golongan')") or die(mysql_error());
                ?>

                <script type="text/javascript">
                swal(" Sukses !", "Data berhasil disimpan!", "success");     
                </script>

                <?php
                }



                }
                ?>
                    </div>
                </div>
            </div>
    


<!--
    <p class="text-right">
            <a href="" class="btn btn-danger btn-round green" data-toggle="modal" data-target="#largeModal">
            Tambah  Data<span style="margin-left:10px;" class="glyphicon glyphicon-plus"></span></a>
            </p>

-->           

                        <div class="body table-responsive">                            
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Pangkat</th>
                                        <th>Nama Golongan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                        <?php
                        include 'koneksi/-koneksi.php';
                        $no = 1;
                        $batas = 3;
                        $hal = @$_GET['hal'];
                        if (empty($hal)){
                        $posisi = 0;
                        $hal =1;

                        }else{
                        $posisi =($hal - 1) * $batas;
                        }

                        $sql_user = mysql_query("select * from tb_pangkat limit $posisi,$batas" ) or die(mysql_error());
                        $no =$posisi + 1;
                        $cek =mysql_num_rows($sql_user);
                        if($cek < 1){
                        echo '<tr>  <td> Data Tidak ditemukan !!</td></tr>';

                        }else{
                        while ($data = mysql_fetch_array($sql_user)) { ?>
                                    <tr>
                                        <td><?php echo $no++."." ;?></td>
                                        <td><?php echo $data['id_pangkat']; ?></td>
                                        <td><?php echo $data['nama_golongan']; ?></td>
                                        <td>    
<a href="" data-toggle="modal" data-target="#edit<?php echo $data['id_pangkat']; ?>"><button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="left" title="Ubah Data">
<i class="material-icons">mode_edit</i>
</button></a>
<!--- Modal EDIT-->

<div class="modal fade" id="edit<?php echo $data['id_pangkat']; ?>" tabindex="-1" role="dialog">
               
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">

<div class="modal-header">
<h4 class="modal-title" id="defaultModalLabel"><i class="material-icons">mode_edit</i> Edit Data Pangkat</h4>
</div>

<div class="modal-body">
<div class="row clearfix">
<form action="" method="post" enctype="multipart/form-data">
<div class="col-sm-12">
<div class="form-group form-float">
<div class="form-line">
<input type="text" name="id_pangkat" class="form-control" value="<?php echo $data['id_pangkat']; ?>"/>
<label class="form-label">Kode Pangkat</label>
</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group form-float">
<div class="form-line">
<input type="text" name="nama_golongan" class="form-control" value="<?php echo $data['nama_golongan']; ?>" />
<label class="form-label">Nama Golongan</label>
</div>
</div>
</div>



</div>


</div>
<div class="modal-footer">
<input type="submit" name="update" class="btn btn-link waves-effect" value="SAVE CHANGES">
<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
</div>
</form>
<?php 
include 'koneksi/+connection.php';
 // Script update data
    if (isset($_REQUEST['update'])) {
        $id_pangkat = $_REQUEST['id_pangkat'];  
        $nama_golongan = $_REQUEST['nama_golongan'];  

         mysql_query("UPDATE tb_pangkat SET 
                                      nama_golongan='$nama_golongan'
                                      WHERE id_pangkat='$id_pangkat'") or die(mysql_error());
          ?>
<script type="text/javascript">
swal(" Sukses !", "Data berhasil Di Ubah!", "success")
window.location.href="?page=admin&action=pangkat";     
</script>
<?php 
}
 ?>

</div>
</div>
</div>
</div>
<!-- Akhir Modal Edit-->



                                 <a href="?page=admin&action=hapus_pangkat&kdgol=<?php echo $data['id_pangkat']; ?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Hapus Data ">
                                    <i class="material-icons">delete_sweep</i>
                                </button></a>
                                        </td>
                                    </tr>

                                    <?php
                                    }

                                    } ?>
                                   
                                    
                                </tbody>
                                <?php
                                include 'koneksi/-koneksi.php';
                                $jml =mysql_num_rows(mysql_query("SELECT * FROM tb_pangkat"));
                                echo "<div class='col-xs-6 col-sm-6 col-md-3 col-lg-3'>
                                    <button class='btn bg-blue btn-lg btn-block waves-effect' type='button'>JUMLAH DATA PANGKAT : <span class='badge'> ".$jml."</span></button>
                                </div>";?>
                            
                            </table>
        

<ul class="pagination">
<li class="disabled">
<a href="javascript:void(0);">
<i class="material-icons">chevron_left</i>
</a>
</li>
<?php
$jml_hal = ceil($jml / $batas);
for ($i=1; $i<=$jml_hal; $i++){
    echo "<li><a href='?page=admin&action=pangkat&hal= $i'>$i</a></li>";

if($i != $hal){

}else{
echo "<li></li>";
}
}
?>
<li>
<a href="javascript:void(0);" class="waves-effect">
<i class="material-icons">chevron_right</i>
</a>
</li>
</ul>


                        </div>


                    </div>

                </div>
            </div>

            <!-- #END# Basic Examples -->
             <!-- SweetAlert Plugin Js -->
    <script src="asset/dist/sweetalert.min.js"></script>
