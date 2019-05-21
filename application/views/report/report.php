<!-- MAIN CONTENT -->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Rekap Laporan BPJS Ketenagakerjaan</h3>
                                        <hr><br>
                                        <!-- DataTables Example -->
                                            <div class="card mb-3">
                                                <div class="card-header">
                                                <i class="fas fa-table"></i>
                                                Rekap Laporan BPJS</div>
                                                <div class="card-body">
                                                <center>
                                                <div class="col-sm-12">
                                                <button class="btn btn-primary col-sm-5 mr-5" type="button" data-toggle="collapse" data-target="#ShowReport" aria-expanded="false" aria-controls="multiCollapseExample2">Show Report</button>
                                                <button class="btn btn-primary col-sm-5" type="button" data-toggle="collapse" data-target="#DownloadReport" aria-expanded="false" aria-controls="multiCollapseExample2">Download Report</button>
                                                    <!-- <button class="btn btn-primary mt-2" type="button" data-toggle="collapse" data-target="#DownloadReport" aria-expanded="false" aria-controls="collapseExample">
                                                    Download Report
                                                </button> -->
                                                </div>
                                                </center>
                                                <div class="col-sm-12">
                                                <div class="collapse" id="ShowReport">
                                                <div class="card card-body">
                                                <form method="POST" action="<?php echo base_url('index.php/report/viewReport') ?>">
                                                    <div class="row">
                                                    <div class="col-sm-12">
                                                        <h3>Show Report</h3><br>
                                                    </div>
                                                            <div class="col-sm-5">
                                                                <input class="form-control" name="bt_pertama" type="date" placeholder="Bulan/Tahun Terlampir">
                                                            </div>
                                                            <div class="col-sm-2 text-center">
                                                                <p>Sampai</p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <input class="form-control" name="bt_kedua" type="date" placeholder="Bulan/Tahun Terlampir">
                                                            </div>
                                                            <br/>                                               
                                                            <div class="col-md-6">
                                                                <button class="btn btn-primary" type="submit" id="buttonFilter">Submit</button>
                                                            </div>
                                                    </div>
                                                </form>
                                                </div>
                                                </div>
                                                </div>
                                                <div class="col-sm-12">
                                                <div class="collapse" id="DownloadReport">
                                                <div class="card card-body">
                                                <form method="POST" action="<?php echo base_url('index.php/report/excel') ?>">
                                                    <div class="row">
                                                    <div class="col-sm-12">
                                                        <h3>Download Report</h3><br>
                                                    </div>
                                                            <div class="col-sm-5">
                                                                <input class="form-control" name="bt_pertama" type="date" placeholder="Bulan/Tahun Terlampir">
                                                            </div>
                                                            <div class="col-sm-2 text-center">
                                                                <p>Sampai</p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <input class="form-control" name="bt_kedua" type="date" placeholder="Bulan/Tahun Terlampir">
                                                            </div>
                                                            <br/>                                               
                                                            <div class="col-md-6">
                                                                <button class="btn btn-primary" type="submit" id="buttonFilter">Submit</button>
                                                            </div>
                                                    </div>
                                                </form>
                                                </div>
                                                </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    
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