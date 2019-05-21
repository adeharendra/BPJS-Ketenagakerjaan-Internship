<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                    <?php foreach ($data as $ab){?>
                                    <blockquote class="blockquote">
                                        <p class="mb-0"><?php echo $ab['quote'];?></p>
                                        <footer class="blockquote-footer"><?php echo $ab['sumber'];?></footer>
                                    </blockquote>
                                    <?php } ?>
                                    <br><br>
                                        <h3 class="title-2">Selamat Datang <?php echo $this->session->userdata("nama_user") ?>.</h3>
                                        <hr><br>
                                        <p class="text-justify">Selamat datang <b><?php echo $this->session->userdata("nama_user") ?></b> di Program Pengarsipan Berkas Jaminan dan Voucher. Untuk mengoperasikan program, silahkan pilih menu pada sebelah kiri layar. Jika mengalami kesulitan, klik menu pada menu <b>"Panduan Penggunaan"</b> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- END MAIN CONTENT-->