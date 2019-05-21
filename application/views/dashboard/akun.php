<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">PENGATURAN AKUN</h3>
                                        <hr><br>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            Perubahan profil akan sempurna jika anda melakukan <strong>Login ulang</strong> 
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <!-- DATA USER PROFILE -->
                                        <br>
                                        <?php foreach ($data as $row) {?>
                                            <div class="media">
                                            <img class="align-self-start mr-4" src="<?php echo base_url('assets/images/icon/fotouser/'.$row['foto_user']) ?>" width="200px"/>
                                            <div class="media-body">
                                                <h3 class="ml-3 mt-0"><?php  echo $row['nama_user'];?></h3>
                                                <h4 class="ml-3 mt-2">@<?php echo $row['username']; ?></h4>
                                                <h4 class="ml-3 mt-2"><?php echo $row['npp_user']; ?></h4>
                                                <h4 class="ml-3 mt-2"><?php echo $row['email']; ?></h4>
                                                <a class="ml-3 mt-4 btn btn-primary" href="<?php echo base_url('index.php/dashboard/editprofil/'.$row['id_user'])?>">Edit Profil</a>    
                                                <a class="ml-1 mt-4 btn btn-warning text-light" href="<?php echo base_url()?>index.php/dashboard/gantipass/">Ganti Password</a>    
                                            </div>
                                            </div>                                        
                                        <?php } ?>
                                        <hr>
                                    </div>
                                </div>
                                            
                                <!-- </div>
                            </div>
							 -->
                        </div>
                    </div>
                </div>
            </div>
<!-- END MAIN CONTENT-->
</div>
<!-- PLUGIN JAVASCRIPT -->
    <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js')?>"></script>