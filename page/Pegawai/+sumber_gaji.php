
    <!-- SWEAT ALERT-->
<script src="asset/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="asset/dist/sweetalert.css">

<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Data Suber Gaji</li>
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
                        <div class="modal-header">
                            
                                <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel"><i class="material-icons">queue</i> Tambah Data Gaji</h4>
                        </div>
                        
                        <div class="modal-body">
                           <div class="row clearfix">
<?php 
include'koneksi/-koneksi.php';
$carikode = mysql_query("select max(id_sumbergaji) from tb_sumber_gaji") or die(mysql_error());
$datakode = mysql_fetch_array($carikode);
if ($datakode) {
$nilaikode = substr($datakode[0], 1);
$kode = (int) $nilaikode;
$kode = $kode + 1;
$hasilkode= "G" .str_pad($kode, 3, "0", STR_PAD_LEFT);
} else{
$hasilkode = "G001";
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="col-sm-12">
<div class="form-group form-float">
<div class="form-line">
<input type="text" name="id_sumbergaji" class="form-control" value="<?php echo "$hasilkode";?>">
<label class="form-label">Kode Gaji</label>
</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group form-float">
<div class="form-line">
<input type="text" name="sumber_gaji" class="form-control">
<label class="form-label"> Sumber Gaji</label>
</div>
</div>
</div>



</div>


                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="simpan" class="btn bg-blue waves-effect" value="SAVE CHANGES">
                            <button type="button" class="btn bg-red waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                        </form>

                <?php
                $id_sumbergaji = @$_POST['id_sumbergaji'];
                $sumber_gaji = @$_POST['sumber_gaji'];

                $simpan = @$_POST['simpan'];

                if ($simpan){
                if ($id_sumbergaji == "" || $sumber_gaji == "") {
                ?>
                <script type="text/javascript">             
                swal("Oops...", "Inputan tidak boleh kosong !!:(", "error");
                </script>
                <?php

                }else{
                mysql_query("INSERT INTO tb_sumber_gaji VALUES ('$id_sumbergaji','$sumber_gaji')") or die(mysql_error());
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
                                        <th>Kode Gaji</th>
                                        <th>Nama Suber Gaji</th>
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

                        $sql_user = mysql_query("select * from tb_sumber_gaji limit $posisi,$batas" ) or die(mysql_error());
                        $no =$posisi + 1;
                        $cek =mysql_num_rows($sql_user);
                        if($cek < 1){
                        echo '<tr>  <td> Data Tidak ditemukan !!</td></tr>';

                        }else{
                        while ($data = mysql_fetch_array($sql_user)) { ?>
                                    <tr>
                                        <td><?php echo $no++."." ;?></td>
                                        <td><?php echo $data['id_sumbergaji']; ?></td>
                                        <td><?php echo $data['sumber_gaji']; ?></td>
                                        <td>    
<a href="" data-toggle="modal" data-target="#edit<?php echo $data['id_sumbergaji']; ?>"><button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="left" title="Ubah Data">
<i class="material-icons">mode_edit</i>
</button></a>
<!--- Modal EDIT-->

<div class="modal fade" id="edit<?php echo $data['id_sumbergaji']; ?>" tabindex="-1" role="dialog">
               
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">

<div class="modal-header">
<h4 class="modal-title" id="defaultModalLabel"><i class="material-icons">mode_edit</i> Edit Data Sumber Gaji</h4>
</div>

<div class="modal-body">
<div class="row clearfix">
<form action="" method="post" enctype="multipart/form-data">
<div class="col-sm-12">
<div class="form-group form-float">
<div class="form-line">
<input type="text" name="id_sumbergaji" class="form-control" value="<?php echo $data['id_sumbergaji']; ?>"/>
<label class="form-label">Kode Status</label>
</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group form-float">
<div class="form-line">
<input type="text" name="sumber_gaji" class="form-control" value="<?php echo $data['sumber_gaji']; ?>" />
<label class="form-label">Nama Sumber Gaji</label>
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
        $id_sumbergaji = $_REQUEST['id_sumbergaji'];  
        $sumber_gaji = $_REQUEST['sumber_gaji'];  

         mysql_query("UPDATE tb_sumber_gaji SET 
                                      sumber_gaji='$sumber_gaji'
                                      WHERE id_sumbergaji='$id_sumbergaji'") or die(mysql_error());
          ?>
<script type="text/javascript">
swal(" Sukses !", "Data berhasil Di Ubah!", "success");     
</script>
<?php 
}
 ?>

</div>
</div>
</div>
</div>
<!-- Akhir Modal Edit-->



                                 <a href="?page=admin&action=hapus_gaji&kdstatus=<?php echo $data['id_sumbergaji']; ?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Hapus Data ">
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
                                $jml =mysql_num_rows(mysql_query("SELECT * FROM tb_sumber_gaji"));
                                echo "<div class='col-xs-6 col-sm-6 col-md-3 col-lg-3'>
                                    <button class='btn bg-blue btn-lg btn-block waves-effect' type='button'>JUMLAH DATA GAJI : <span class='badge'> ".$jml."</span></button>
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
    echo "<li><a href='?page=admin&action=gaji&hal= $i'>$i</a></li>";

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
