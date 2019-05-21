<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Daftar Peminjaman &nbsp;<?= $this->session->userdata("nama_user") ?>&nbsp; BPJS Ketenagakerjaan</h3>
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
                                                        <th>No</th>
                                                        <th>NIK</th>
                                                        <th>Nama</th>
                                                        <th>Jabatan</th>
                                                        <th>Tanggal Meminjam</th>
                                                        <th>Jenis Berkas</th>
                                                        <th>Box</th>
                                                        <th>Rak</th>
                                                        <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <?php $no=1 ?>
                                                    <tbody>
                                                        <?php foreach ($data as $row){?>
                                                        <tr>
                                                        <td><?php echo $no++?></td>
                                                        <td><?php echo $row['npp_user']; ?></td>
                                                        <td><?php echo $row['nama_user']; ?></td>
                                                        <td><?php echo $row['jabatan']; ?></td>
                                                        <td><?php echo $row['tgl_peminjaman']; ?></td>
                                                        <td><?php echo $row['jenis_voucher']; ?></td>
                                                        <td><?php echo $row['box']; ?></td>
                                                        <td><?php echo $row['rak']; ?></td>
                                                        <td>
                                                        <div class="dropdown">
                                                            <span class="badge badge-primary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Aksi
                                                            </span>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item text-success" href="<?php echo base_url()?>index.php/laporan/cetaklaporan2/<?php echo $row['id_peminjam'];?>" target = "_blank">Surat</a>
                                                                <a class="dropdown-item text-danger" href="<?php echo site_url('index.php/dashboard/HapusPeminjaman/'.$row['id_peminjam']) ?>">Hapus</a>
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