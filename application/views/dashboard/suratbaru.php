<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Surat Penting BPJS Ketenagakerjaan</h3>
                                        <hr><br>
                                        <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/dashboard/insertSB";?>">
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Kode Surat </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="kd_surat" type="text" placeholder="Kode Surat">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Nomor Surat </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="nm_surat" type="text" placeholder="Nomor Surat">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Sumber Surat </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="sm_surat" type="text" placeholder="Sumber SUrat">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Deskripsi Singkat </label>
                                                    <div class="col-sm-12">
                                                        <textarea name="d_surat" class="form-control" rows="4"></textarea>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-6 control-label">Upload Data Surat</label>
                                                    <div class="col-sm-12">
                                                        <div class="upload-btn-wrapper">
                                                            <input type="file" name="myfile" />
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button class="btn btn-primary" role="button" type="submit"> Buat </button>
                                            </div>
                                        </form>

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