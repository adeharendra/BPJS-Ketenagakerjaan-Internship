<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Buat Akun BPJS Ketenagakerjaan</h3>
                                        <hr><br>
                                        <?php echo form_open_multipart('index.php/akun/prosesakun');?>
                                            <div class="form-group">
                                            <label class="col-sm-4 control-label text-danger"><strong> Didaftarkan sebagai </strong></label>
                                                <div class="col-sm-12 mb-3">
                                                    <select class="custom-select" name="level">
                                                        <option selected>Pilih Opsi</option>
                                                        <option value="1">Administrator</option>
                                                        <option value="2">Pegawai</option>
                                                    </select>
                                            </div>
                                        
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Nama Yang Didaftarkan </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="nama_user" type="text" value="">
                                                    </div>
                                            </div>
                                            <!-- <input type="hidden" name="id_user" value="<?php echo $row['id_user'];?>"> -->
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Username Yang Didaftarkan </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="username" type="text" value="">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> NIK Yang Didaftarkan </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="npp_user" type="text" value="">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Email Yang Didaftarkan </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="email" type="text" value="">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Password Yang Didaftarkan </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="password" type="password" value="">
                                                    </div>
                                            </div>
                                            <?php date_default_timezone_set('Asia/Jakarta'); $date = date('d-m-Y H:i:s', time());?>
                                            <input name="tgl_upload" type="hidden" value="<?=$date?>">
                                            <input name="foto_user" type="hidden" value="blank.png">                                            
                                            </div>
                                            <div class="col-sm-12">
                                                <button class="btn btn-primary" role="button" type="submit"> Buat </button>
                                            </div>
                                                
                                            <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
<!-- END MAIN CONTENT-->