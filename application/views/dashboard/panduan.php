<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Panduan Penggunaan</h3>
                                        <hr><br>
                                        <div class="alert alert-success" role="alert">
                                            <strong>Klik menu di bawah</strong> untuk melihat panduan penggunaan
                                        </div>
                                        <br>
                                        <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Panduan Pengarsipan Berkas (Buat Baru)
                                                </button>
                                            </h2>
                                            </div>

                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                    <h3>Panduan Pengarsipan Berkas (Buat Baru)</h3>
                                                    <br>
                                                    <!-- <div class="jumbotron"> -->
                                                        <ol class="vue-ordered ml-3">
                                                            <li>
                                                                Klik opsi "Pengarsipan Berkas" pada menu bagian samping kiri
                                                                <br>
                                                                <br>
                                                                <img src="<?=base_url()?>/assets/images/panduan/1.jpg" style="padding:5px;" align="left">
                                                                Menu lainnya akan muncul ke bawah <br>
                                                                Kemudian Klik menu <p class="font-weight-bold">"Buat Baru"</p>
                                                            </li>
                                                            <br><br><br><br><br>
                                                            <li>
                                                                Isi data pada form sesuai dengan data yang ada pada bagian box <br><br>
                                                                <img src="<?=base_url()?>/assets/images/panduan/2.jpg">
                                                                <br><br>
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><strong>Kantor</strong></td>
                                                                            <td>Diisi dengan wilayah kantor sesuai wilayah berkas</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Program</strong></td>
                                                                            <td>Diisi dengan wilayah kantor yang lebih spesifik (KOTA) sesuai wilayah berkas</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Buku Harian</strong></td>
                                                                            <td>Diisi dengan Jenis Berkas. Dapat berupa Voucher Umum, Voucher Jaminan dan Berkas lain</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Kode Buku</strong></td>
                                                                            <td>Diisi dengan Kepentingan Berkas.</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Bulan/Tahun</strong></td>
                                                                            <td>Diisi dengan Tanggal yang tertulis pada bagian depan Box.</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>No Voucher</strong></td>
                                                                            <td>Diisi dengan rentang Nomor Voucher berkas. Contoh: 001 - 200</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Box</strong></td>
                                                                            <td>Diisi dengan Nomor Box yang tertera pada Box</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Rak</strong></td>
                                                                            <td>Diisi dengan Nomor Rak yang tertera pada Box</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Upload Data Arsip</strong></td>
                                                                            <td>Upload file berkas dengan menekan tombol "Pilih File".
                                                                            
                                                                            </td>
                                                                        </tr>
                                                                        <tr><td colspan=2>
                                                                            <div class="alert alert-danger" role="alert">
                                                                                Upload file hanya dengan format Ms. Word dan Ms. Excel  dan format PDF!
                                                                            </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </li>
                                                        </ol>
                                                    <!-- </div> -->
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Panduan Pengarsipan Berkas (Lihat Arsip)
                                                </button>
                                            </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <h3>Panduan Pengarsipan Berkas (Lihat Arsip)</h3>
                                                    <br>
                                                        <ol class="vue-ordered ml-3">
                                                            <li>
                                                                Klik opsi "Pengarsipan Berkas" pada menu bagian samping kiri
                                                                <br>
                                                                <br>
                                                                <img src="<?=base_url()?>/assets/images/panduan/3.jpg" style="padding:5px;" align="left">
                                                                Menu lainnya akan muncul ke bawah <br>
                                                                Kemudian Klik menu <p class="font-weight-bold">"Lihat Arsip"</p>
                                                            </li>
                                                            <br><br><br><br><br>
                                                            <li>
                                                                Setelah menu di klik, maka akan muncul tabel berisi data-data berkas yang telah diinput sebelumnya.
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
                                                    <tfoot>
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
                                                    </tfoot>
                                                    <?php $no=1 ?>
                                                    <tbody>
                                                        <?php while ($no<=20){?>
                                                        <tr>
                                                        <td>contoh</td>
                                                        <td>contoh</td>
                                                        <td>contoh</td>
                                                        <td>contoh</td>
                                                        <td>contoh</td>
                                                        <td>contoh</td>
                                                        <td>contoh</td>
                                                        <td>contoh</td>
                                                        <td>contoh</td>
                                                        <td>contoh</td>
                                                        <td>
                                                        <div class="dropdown">
                                                            <span class="badge badge-primary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Aksi
                                                            </span>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#">Lihat</a>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Download</a>
                                                            </div>
                                                        </div>
                                                        </td>
                                                        </tr>
                                                        <?php $no++; } ?>
                                                    </tbody>
                                                    </table>
                                                </div>
                                                <br><br>
                                                            </li>
                                                            <li>
                                                                <strong>Tabel bisa di scroll ke kanan dan kiri</strong> agar fleksibel dan mudah  disesuaikan
                                                            </li>
                                                            <br>
                                                            <li>
                                                                <strong>Pada bagian pojok kiri atas tabel</strong> terdapat fitur untuk <strong>menampilkan data yang ditampilkan</strong> (Maksimal 100 data sekali tampil).
                                                            </li>
                                                            <br>
                                                            <li>
                                                                <strong>Pada bagian atas kanan tabel</strong> terdapat fitur untuk <strong>Mencari Berkas</strong> berdasarkan apa yang dicari
                                                            </li>
                                                            <br>
                                                            <li>
                                                                Pada bagian "Aksi" , jika tombol diklik akan mengeluarkan menu ke bawah dengan pilihan <strong>"Lihat", "Edit" dan "Download"</strong>
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><strong>Lihat</strong></td>
                                                                            <td>Untuk melihat File excel secara langsung tanpa harus mendownload file terlebih dahulu</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Edit</strong></td>
                                                                            <td>Untuk Mengedit Keterangan Berkas seperti Kantor, Buku Harian, Program dan lain-lain.
                                                                            <p class="text-danger">TIDAK DIPERUNTUKAN UNTUK MENGUBAH FILE EXCEL! HANYA MENGUBAH KETERANGAN!</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Download</strong></td>
                                                                            <td>Untuk Mendownload file dokumen secara langsung</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </li>
                                                        </ol>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                                                Panduan Pengaturan Akun
                                                </button>
                                            </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <h3>Panduan Pengaturan Akun</h3>
                                                <br>
                                                Pengaturan akun berisi fitur-fitur untuk mengubah : 
                                                <ul class="vue-list-inner ml-5">
                                                    <li>Nama akun</li>
                                                    <li>Username akun</li>
                                                    <li>NPP akun</li>
                                                    <li>Email akun</li>
                                                    <li>Foto Profil Akun</li>
                                                    <li>Mengganti Password</li>
                                                </ul>
                                                <br><br>
                                                <h4>Mengedit Profil</h4>
                                                <br>
                                                <ol class="vue-ordered ml-3">
                                                    <li>
                                                        Klik opsi " <i class="fas fa-user"></i> &nbsp;Akun " pada menu bagian samping kiri
                                                    </li>
                                                    <br>
                                                    <li>
                                                        Klik tombol "Edit Profil"
                                                    </li>
                                                    <br>
                                                    <li>
                                                        Anda akan dialihkan ke halaman baru untuk mengubah profil akun
                                                    </li>
                                                    <br>
                                                    <li>
                                                        Lakukan Perubahan yang diperlukan
                                                    </li>
                                                    <br>
                                                    <li>
                                                        Klik tombol simpan
                                                    </li>
                                                    <br>
                                                    <li>
                                                        Untuk Perubahan sempurna, silahkan logout dan login kembali.
                                                    </li>
                                                </ol>
                                                <br><br>
                                                <h4>Mengganti Password</h4>
                                                <br>
                                                <ol class="vue-ordered ml-3">
                                                    <li>
                                                        Klik opsi " <i class="fas fa-user"></i> &nbsp;Akun " pada menu bagian samping kiri
                                                    </li>
                                                    <br>
                                                    <li>
                                                        Klik tombol "Ganti Password"
                                                    </li>
                                                    <br>
                                                    <li>
                                                        Anda akan dialihkan ke halaman baru untuk mengganti Password
                                                    </li>
                                                    <br>
                                                    <li>
                                                        Isi Form dengan Password Baru dan Konfirmasi Password baru
                                                        <div class="alert alert-danger" role="alert">
                                                        Password Baru dan Konfirmasi Password Baru harus sama dan diketik ulang. Tidak diperkenankan untuk Copy Paste!
                                                        </div>
                                                    </li>
                                                    <li>
                                                        Klik tombol simpan
                                                    </li>
                                                    <br>
                                                    <li>
                                                        Silahkan logout dan login kembali.
                                                    </li>
                                                </ol>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                Tentang Program dan Pengembang
                                                </button>
                                            </h2>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                            <a href="<?= base_url() ?>dashboard/about">Tentang Program</a>
                                            </div>
                                            </div>
                                        </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- END MAIN CONTENT-->