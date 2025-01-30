<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Agenda Staff</li>
</ol>

<!-- Inline Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><i class="material-icons">format_list_bulleted</i>AGENDA STAFF</h2>
                        </div>
                        <div class="body">
                            <form action="" method="post">
                                <div class="row clearfix">
                                       <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        
                                    <p>
                                        <b>Nama Staff</b>
                                    </p>
                                     <input name="Nama Staff" type="text" class="form-control" placeholder="Nama Staff">                             
                                    </div>
                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        
                                    <p>
                                        <b>Tahun Pelaksanaan</b>
                                    </p>
                                    <select name="tp" class="form-control show-tick" data-live-search="true">
                                        <option name="tp" value="2016/2017">2016/2017</option>
                                        <option name="tp" value="2017/2018">2017/2018</option>
                                        <option name="tp" value="2018/2019">2018/2019</option>
                                        <option name="tp" value="2019/2020">2019/2020</option>
                                        <option name="tp" value="2020/2021">2020/2021</option>
                                        <option name="tp" value="2021/2022">2021/2022</option>
                                        <option name="tp" value="2022/2023">2022/2023</option>
                                        <option name="tp" value="2023/2024">2023/2024</option>
                                    </select>                              
                                    </div>
                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                    <p>
                                        <b>Nama Kegiatan</b>
                                    </p>
                                    <input name="nm kegiatan" type="text" class="form-control" placeholder="nm kegiatan">                             
                                    </div>
                                     <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                    <p>
                                        <b>tanggal mulai</b>
                                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="tgl mulai" type="text" id="date" class="form-control" placeholder="tgl mulai">
                                            </div>
                                        </div>
                                    </div>

                                        
                                    </select>                              
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="tgl" type="text" id="date" class="form-control" placeholder="tanggal update">
                                            </div>
                                        </div>
                                    </div>
                                      
                                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="materi" type="text" class="form-control" placeholder="Materi">
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="waktu" type="text" class="form-control" placeholder="waktu">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-md-14 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="ket" type="text" class="form-control" placeholder="Keterangan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        
                                        <input type="submit" name="simpan" class="btn btn-primary btn-lg m-l-15 waves-effect" value="SIMPAN">
                                    </div>
                                </div>
                            </form>
                            <?php
                $id_agenda = @$_POST['id_agenda'];
                $nm_guru = @$_POST['nm_guru'];
                $tp = @$_POST['tp'];
                $mapel = @$_POST['mapel'];
                $tgl = @$_POST['tgl'];
                $kelas = @$_POST['kelas'];
                $materi = @$_POST['materi'];
                $absen = @$_POST['absen'];
                $ket = @$_POST['ket'];

                $simpan = @$_POST['simpan'];

                if ($simpan){
                if ($nm_guru == ""|| $tp == ""|| $mapel == "" || $tgl == "" || $kelas == "" || $materi == "" || $absen == "" ) {
              
                }else{
                mysql_query("INSERT INTO tb_agenda VALUES ('$id_agenda','$nm_guru','$tp','$mapel','$tgl','$kelas','$materi','$absen','$ket')") or die(mysql_error());
                ?>

                <script type="text/javascript">
                swal(" Sukses !", "Data berhasil disimpan!", "success");    
                window.location.href="?page=guru&action=agenda"; 
                </script>

                <?php
                }



                }
                ?>

                        </div>

                    </div>
                </div>
            </div>
              <p class="text-left">
<a href="javascript:history.back()">
<button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float"  data-toggle="tooltip" data-placement="top" title=" Kembali">
<i class="material-icons">undo</i>
</button></a> </p>
            <!-- #END# Inline Layout -->