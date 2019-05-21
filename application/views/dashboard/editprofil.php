<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Edit Profil BPJS Ketenagakerjaan</h3>
                                        <hr><br>
                                        <?php echo form_open_multipart('index.php/dashboard/updateprofil');?>
                                        <?php foreach ($data as $row){?>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Nama Anda </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="nama_user" type="text" value="<?php echo $row['nama_user']; ?>">
                                                    </div>
                                            </div>
                                            <input type="hidden" name="id_user" value="<?php echo $row['id_user'];?>">
                                            <input type="hidden" name="level" value="<?php echo $row['level'];?>">
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Username Anda </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="username" type="text" value="<?php echo $row['username']; ?>">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> NIK Anda </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="npp_user" type="text" value="<?php echo $row['npp_user']; ?>">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> email Anda </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="email" type="text" value="<?php echo $row['email']; ?>">
                                                    </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-sm-6 control-label">Upload Foto Anda &nbsp;&nbsp;&nbsp;*Max 2 Mb</label>
                                                    <div class="col-sm-12">
                                                        <div class="upload-btn-wrapper">
                                                            <input type="file" name="foto_user" />
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button class="btn btn-primary" role="button" type="submit"> Simpan </button>
                                            </div>
                                                <?php }?>
                                            <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-3">
								<div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">kalender</h3>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
<!-- END MAIN CONTENT-->