<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Peminajaman Data Arsip BPJS Ketenagakerjaan</h3>
                                        <hr><br>
                                        <?php echo form_open_multipart('index.php/peminjaman/simpan_peminjaman');?>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> NIK </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="npp_user" id="npp_user" type="text" placeholder="NIK">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Nama </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="nama_user" type="text" placeholder="Nama" readonly>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Jabatan </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="jabatan" type="text" placeholder="Jabatan" readonly>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Email </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="email" type="text" placeholder="Email" readonly>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Tanggal Peminjaman </label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" name="tgl_peminjaman" type="date" placeholder="Tanggal Peminjaman">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Jenis Voucher </label>
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="jenis_voucher">
                                                    <option value="">No Selected</option>
                                                    <?php foreach($category as $row):?>
                                                    <option value="<?php echo $row->jenis_voucher;?>"><?php echo $row->jenis_voucher;?></option>
                                                    <?php endforeach;?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">                                                    
                                                <div class="col-5 ml-3">
                                                    <div class="form-group">
                                                        <label>No Voucher </label>
                                                            <input class="form-control" name="box" type="text" placeholder="No Voucher Awal ">
                                                    </div>
                                                </div>
                                                <div class="col-6 ml-5">
                                                    <div class="form-group">
                                                        <label> &nbsp; </label>
                                                            <input class="form-control" name="rak" type="text" placeholder="No Voucher Akhir ">
                                                    </div>
                                                </div>
                                            </div>
                                            <input name="status" type="hidden" value="0">
                                            <?php date_default_timezone_set('Asia/Jakarta'); $date = date('d-m-Y H:i:s', time());?>
                                            <input name="tgl_upload" type="hidden" value="<?=$date?>">
                                            <div class="col-sm-12">
                                                <button class="btn btn-primary" role="button" type="submit"> Pinjam </button>
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
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript">
        $(document).ready(function(){
             $('#npp_user').on('input',function(){
                 
                var npp_user=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/peminjaman/get_data')?>",
                    dataType : "JSON",
                    data : {npp_user: npp_user},
                    cache:false,
                    success: function(data){
                        $.each(data,function(npp_user, nama_user, jabatan, email){
                            $('[name="nama_user"]').val(data.nama_user);
                            $('[name="jabatan"]').val(data.jabatan);
                            $('[name="email"]').val(data.email);
                             
                        });
                         
                    }
                });
                return false;
           });
 
        });
    </script>