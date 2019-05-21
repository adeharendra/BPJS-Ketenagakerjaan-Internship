<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Dokumen Arsip BPJS Ketenagakerjaan</h3>
                                        <hr><br>
                                        <!-- DataTables Example -->
                                            <div class="card mb-3">
                                                <div class="card-header">
                                                <i class="fas fa-table"></i>
                                                Dokumen Arsip BPJS</div>
                                                <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-earning table-striped" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                        <th>Kantor</th>
                                                        <th>Buku Harian</th>
                                                        <th>Program</th>
                                                        <th>Kode Buku</th>
                                                        <th>Tanggal</th>
                                                        <th>No. Voucher</th>
                                                        <th>Box</th>
                                                        <th>Rak</th>
                                                        <th>Diperbarui</th>
                                                        <th>File</th>
                                                        <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <?php $no=1 ?>
                                                    <tbody>
                                                        <?php foreach ($data1 as $ab){?>
                                                        <tr>
                                                        <td><?php echo $ab['k_arsip']; ?></td>
                                                        <td><?php echo $ab['bk_arsip'];?></td>
                                                        <td><?php echo $ab['p_arsip'];?></td>
                                                        <td><?php echo $ab['kd_arsip'];?></td>
                                                        <td><?php echo $ab['bt_arsip'];?></td>
                                                        <td><?php echo $ab['nv_arsip'];?></td>
                                                        <td><?php echo $ab['box_arsip'];?></td>
                                                        <td><?php echo $ab['rak_arsip'];?></td>
                                                        <td><?php echo $ab['tgl_upload'];?></td>
                                                        <td><?php echo $ab['files'];?></td>
                                                        <td>
                                                        <div class="dropdown">
                                                            <span class="badge badge-primary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Aksi
                                                            </span>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="<?php echo base_url()?>index.php/dashboard/editarsip/<?php echo $ab['id_arsip'];?>">Edit</a>
                                                                <a class="dropdown-item" href="<?php echo site_url('index.php/dashboard/download/'.$ab['id_arsip']) ?>">Download</a>
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