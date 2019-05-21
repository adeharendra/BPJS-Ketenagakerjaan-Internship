<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Edit Arsip BPJS Ketenagakerjaan</h3>
                                        <hr><br>
                                        <?php echo form_open_multipart('index.php/dashboard/prosesEditAb');?>
                                            <?php foreach ($data as $row) { ?>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Kantor </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="k_arsip" type="text" value="<?php echo $row['k_arsip']; ?>">
                                                    </div>
                                            </div>
                                                        <input type="hidden" name="id_arsip" value="<?php echo $row['id_arsip'];?>">
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Program </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="p_arsip" type="text" value="<?php echo $row['p_arsip'];?>">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Buku Harian </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="bk_arsip" type="text" value="<?php echo $row['bk_arsip'];?>">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Kode Buku </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="kd_arsip" type="text" value="<?php echo $row['kd_arsip'];?>">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Bulan/Tahun </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="bt_arsip" type="date" value="<?php echo $row['bt_arsip'];?>">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> No Voucher </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="nv_arsip" type="text" value="<?php echo $row['nv_arsip'];?>">
                                                    </div>
                                            </div>
                                            <div class="row">                                                    
                                                <div class="col-5 ml-3">
                                                    <div class="form-group">
                                                        <label>Box </label>
                                                            <input class="form-control" name="box_arsip" type="text" value="<?php echo $row['box_arsip'];?>">
                                                    </div>
                                                </div>
                                                <div class="col-6 ml-5">
                                                    <div class="form-group">
                                                        <label>Rak </label>
                                                            <input class="form-control" name="rak_arsip" type="text" value="<?php echo $row['rak_arsip'];?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php date_default_timezone_set('Asia/Jakarta'); $date = date('d-m-Y H:i:s', time());?>
                                            <input name="tgl_upload" type="hidden" value="<?=$date?>">
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> File Terupload </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="files" type="text" value="<?php echo $row['files'];?>" disabled="">
                                                    </div>
                                            </div>
                                            <label class="col-sm-4 control-label"> Atau </label>
                                            <div class="form-group">
                                                <label class="col-sm-6 control-label">Upload Data Arsip Baru</label>
                                                    <div class="col-sm-12">
                                                        <div class="upload-btn-wrapper">
                                                            <input type="file" name="files" accept="application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,.pdf"/>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button class="btn btn-primary" role="button" type="submit"> Simpan </button>
                                            </div>
                                            <?php } ?>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- END MAIN CONTENT-->