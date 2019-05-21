<?php 

header("Content-type: application/octet-stream");
$tgl=date('d-m-Y');
header("Content-Disposition: attachment; filename=Rekap-tanngal-$tgl.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
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
    <th>Nama File</th>
    </tr>
</thead>

<?php $no=1 ?>
<tbody>
    <?php foreach ($data as $ab){?>
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
    </tr>
    <?php } ?>
</tbody>
</table>