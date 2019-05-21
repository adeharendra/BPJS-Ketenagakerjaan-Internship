<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Ganti Password</h3>
                                        <hr><br>
                                        <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/dashboard/ganti_password";?>">
                                            <!-- <div class="form-group">
                                                <label class="col-sm-4 control-label"> Password Lama </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="password" type="password" placeholder="Masukkan Password Lama" required>
                                                    </div>
                                            </div> -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Password Baru </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="pw_baru" type="password" placeholder="Masukkan Password Baru" required>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-8 control-label"> Ketik Ulang Password Baru </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="cpw_baru" type="password" placeholder="Konfirmasi Password Baru" required>
                                                    </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button class="btn btn-primary" role="button" type="submit"> Simpan </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- END MAIN CONTENT-->