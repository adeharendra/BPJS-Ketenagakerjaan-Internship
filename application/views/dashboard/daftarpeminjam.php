<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Daftar Peminjaman BPJS Ketenagakerjaan</h3>
                                        <hr><br>
                                        <!-- DataTables Example -->
                                            <div class="card mb-3">
                                                <div class="card-header">
                                                <i class="fas fa-table"></i>
                                                Peminjam Arsip BPJS</div>
                                                <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-earning table-striped" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                        <th>NIK</th>
                                                        <th>Nama</th>
                                                        <th>Jabatan</th>
                                                        <th>Tanggal Meminjam</th>
                                                        <th>Jenis Berkas</th>
                                                        <th>Box</th>
                                                        <th>Rak</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <?php $no=1 ?>
                                                    <tbody>
                                                        <?php foreach ($data1 as $ab){?>
                                                        <tr>
                                                        <td><?php echo $ab['npp_user']; ?></td>
                                                        <td><?php echo $ab['nama_user']; ?></td>
                                                        <td><?php echo $ab['jabatan']; ?></td>
                                                        <td><?php echo $ab['tgl_peminjaman']; ?></td>
                                                        <td><?php echo $ab['jenis_voucher']; ?></td>
                                                        <td><?php echo $ab['box']; ?></td>
                                                        <td><?php echo $ab['rak']; ?></td>
                                                        <td><?php if($ab['status']=='1'){
                                                                echo 'Verifikasi'; }else{
                                                                    echo 'Belum Verifikasi';}?></td>
                                                        <td>
                                                        <div class="dropdown">
                                                            <span class="badge badge-primary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Aksi
                                                            </span>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <form method="post" action="<?php echo base_url() ?>index.php/peminjaman/verif_peminjaman">
                                                            <input type="hidden" name="id_peminjam" value="<?php echo $ab['id_peminjam']; ?>">
                                                            <input type="hidden" name="npp_user" value="<?php echo $ab['npp_user']; ?>">
                                                            <input type="hidden" name="nama_user" value="<?php echo $ab['nama_user']; ?>">
                                                            <input type="hidden" name="jabatan" value="<?php echo $ab['jabatan']; ?>">
                                                            <input type="hidden" name="tgl_peminjaman" value="<?php echo $ab['tgl_peminjaman']; ?>">
                                                            <input type="hidden" name="jenis_voucher" value="<?php echo $ab['jenis_voucher']; ?>">
                                                            <input type="hidden" name="box" value="<?php echo $ab['box']; ?>">
                                                            <input type="hidden" name="rak" value="<?php echo $ab['rak']; ?>">
                                                            <input type="hidden" name="status" value="1">
                                                                <button class="dropdown-item" type="submit" name="verifikasi" >Verifikasi</button>
                                                            </form>
                                                                <a class="dropdown-item text-danger" href="<?php echo site_url('index.php/dashboard/HapusPeminjaman/'.$ab['id_peminjam']) ?>">Hapus</a>
                                                            </div>
                                                        </div>
                                                        </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                    </table>
                                                </div>
                                                </div>
                                                <div class="card-footer small text-muted"><?php
                                                                                        $tgl=date('d-m-Y');
                                                                                        echo $tgl;
                                                                                        ?></div>
                                            </div>
                                <!-- </div>
                            </div>
							 -->
                        </div>
                    </div>
                </div>
            </div>
<!-- END MAIN CONTENT-->

<!-- PLUGIN JAVASCRIPT -->
    <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js')?>"></script>