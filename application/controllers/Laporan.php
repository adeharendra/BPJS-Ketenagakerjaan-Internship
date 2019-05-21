<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Laporan extends CI_Controller {
    public function __construct()
        {   
            parent::__construct();
            //load model user
            $this->load->model('user');
            $this->load->model('admin');
            $this->load->library('Pdf');
        }
    public function cetaklaporan($id_peminjam)
        {
        $data=$this->admin->getLaporan($id_peminjam);
        $pdf = new FPDF(); //L = lanscape P= potrait
        // membuat halaman baru
        // $pdf->AddPage(); 'L','mm','A4'
        // // setting jenis font yang akan digunakan
        // $pdf->SetFont('Arial','B',16);
        // $ya = 44;
        // // mencetak string 
        // $pdf->Cell(190,7,'Formulirpendaftaransekolah | Laporan data siswa',0,1,'C');
        // $pdf->SetFont('Arial','B',12);
        // $pdf->Cell(190,7,'Angket Semester 2 TA 2017-2018',0,1,'C');
        foreach ($data as $row){
        $pdf->AliasNbPages();
        $pdf->AddPage();
        // $pdf->Image('../../../assets/images/header.jpg',7,1,200,40);
        $pdf->Ln(23);
        $pdf->SetFont('Arial','BU',12);
        $pdf->Cell(0,40,'SURAT PERINTAH PERJALANAN DINAS (SPPD)',0,1,'C');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(190,-30,'No. :'.$row['npp_user'],0,1,'C');
        

        $pdf->Ln(21);
        $pdf->SetFont('Arial','',10);
        /******** 1 ************/
        $pdf->Cell(0,1,'',0,1,'L');
        $pdf->Cell(5,10,'1. ',1,0,'L');
        $pdf->Cell(100,10,'Pengguna Anggaran / Kuasa Pengguna Anggaran ',1,0,'L');
        $pdf->Cell(91,10,''.$row['npp_user'],1,1,'L');

        /******** 2 ************/
        $pdf->Cell(5,10,'2. ',1,0,'L');
        $pdf->MultiCell(100,5,'Nama PNS dan NIP / Pegawai Non PNS yang melaksanakan perjalanan dinas',1);
        $pdf->SetXY(115,78);
        $pdf->MultiCell(91,5,$row['npp_user'].' / '.$row['npp_user'],0,'L');
        // $pdf->MultiCell(91,7.5,$peg->nama,0,'L');
        $pdf->SetXY(115,75);
        $pdf->MultiCell(91,10,'',1,'L');

        /******** 3 ************/
        $pdf->Cell(5,12,'3. ',1,0,'L');
        $pdf->MultiCell(100,6,'a. Jabatan/Instansi 
        b. Tingkat Biaya Perjalanan Dinas',1,'L');
        $pdf->SetXY(115,85);
        $pdf->MultiCell(91,6,'a. '.$row['npp_user'].' 
        b. '.$row['npp_user'],1,'L');
        ///******** 4 ************/
        
        $pdf->Cell(5,17,'4. ',1,0,'L');
        $pdf->Cell(100,17,'Maksud Perjalanan Dinas',1,0,'L');
        $pdf->MultiCell(84,4,$row['npp_user'].'',5);
        $pdf->SetXY(115,97);
        $pdf->MultiCell(91,17,'',1);
        ///******** 5 ************/
        $pdf->SetY(114);
        $pdf->Cell(5,10,'5. ',1,0,'L');
        $pdf->Cell(100,10,'Alat angkutan yang dipergunakan',1,0,'L');
        $pdf->Cell(91,10,$row['npp_user'],1,1,'L');
        /******** 6 ************/
        $pdf->Cell(5,14,'6. ',1,0,'L');
        $pdf->MultiCell(100,7,'a. Tempat berangkat 
        b. Tempat tujuan',1,'L');
        $pdf->SetXY(115,124);
        $pdf->MultiCell(91,7,'a. '.$row['npp_user'].'
        b. '.$row['npp_user'],1);
        /******** 7 ************/
        $pdf->Cell(5,14,'7. ',1,0,'L');
        $pdf->MultiCell(100,7,'a. Tanggal berangkat
        b. Tanggal harus kembali/tiba ditempat baru*)',1,'L');
        $pdf->SetXY(115,138);
        $pdf->MultiCell(91,7,'a. '.$row['npp_user'].'
        b. '.$row['npp_user'],1,'L');
        ///******** 8 ************/
        $pdf->SetY(152);
        $pdf->Cell(5,10,'8. ',1,0,'L');
        $pdf->Cell(100,10,'Biaya',1,0,'L');
        $pdf->Cell(91,10,$row['npp_user'],1,1,'L');
        /******** 9 ************/
        $pdf->SetY(162);
        $pdf->Cell(5,10,'9. ',1,0,'L');
        $pdf->Cell(100,10,'Nomor Rekening',1,0,'L');
        $pdf->Cell(91,10,$row['npp_user'],1,1,'L');
        ///******** 10 ************/
        $pdf->SetY(172);
        $pdf->Cell(5,10,'10. ',1,0,'L');
        $pdf->Cell(100,10,'Lapsum',1,0,'L');
        $pdf->Cell(91,10,$row['npp_user'],1,1,'L');
        /******** Tanda Tangan ************/
        $pdf->SetLeftMargin(130);
        $pdf->Ln(20);
        $pdf->MultiCell(85,4,'Dikeluarkan di        : Semarang
        Pada tanggal          : '.$row['npp_user'].'
        ______________________________',0,'L');
        $pdf->SetFont('Arial','B',10);
        $pdf->SetLeftMargin(0);
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(60, 3.5, 'Yang memberi perintah',0,2,'C');
        $pdf->Cell(60, 3.5, 'Kepala Divisi',0,2,'C');
        $pdf->Ln(20);
        $pdf->SetFont('Arial', 'U', 10);
        $pdf->SetLeftMargin(130);
        $pdf->Cell(60, 3.5, 'Ir. Adi Prayodi',0,2,'C');
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(60, 3.5,'NIP : ' . 'PHT19630414199612100',0,2,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        // $pdf->Cell(10,7,'',0,1);
        // $pdf->SetFont('Arial','B',10);
        // $pdf->Cell(15,6,'ID',1,0);
        // $pdf->Cell(55,6,'NAMA.T',1,0);
        // $pdf->Cell(40,6,'NAMA.B',1,0);
        // $pdf->Cell(30,6,'NAMA.K',1,0);
        // $pdf->Cell(35,6,'PALING SUKAI',1,0);
        // $pdf->Cell(80,6,'KURANG SUKAI',1,1);
        // $pdf->SetFont('Arial','',10);
        
        //     $pdf->Cell(15,6,$row['npp_user'],1,0);
        //     $pdf->Cell(55,6,$row['npp_user'],1,0);
        //     $pdf->Cell(40,6,$row['npp_user'],1,0);
        //     $pdf->Cell(30,6,$row['npp_user'],1,0);
        //     $pdf->Cell(35,6,$row['npp_user'],1,0);
        //     $pdf->Cell(80,6,$row['npp_user'],1,1);  
            }
        $pdf->Output();
                
        }
        public function cetaklaporan2($id_peminjam){
            $data=$this->admin->getLaporan($id_peminjam);
            $data=array('data' => $data);
            $this->load->view('report/cetaklaporan',$data);
        }
}