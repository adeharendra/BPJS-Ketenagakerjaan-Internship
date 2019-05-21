<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

    public function __construct()
        {
            parent::__construct();
            //load model user
            $this->load->model('user');
            $this->load->model('admin');
        }

public function peminjaman_user(){
    if($this->session->userdata('akses')=='2'){
    $data['category']=$this->admin->get_j_voucher()->result();
    $data['content']= 'peminjaman/peminjaman_user';
    $this->load->view("dashboard/index",$data);
    }else{
        redirect('dashboard');
    }
}

    public function get_data(){
        $npp_user=$this->input->post('npp_user');
        $data=$this->admin->get_data_user_bynpp($npp_user);
        echo json_encode($data);
    }

    public function simpan_peminjaman(){
        if($this->session->userdata('akses')=='2'){
            $npp_user=$this->input->post('npp_user');
            $nama_user=$this->input->post('nama_user');
            $jabatan=$this->input->post('jabatan');
            $email=$this->input->post('email');
            $tgl_peminjaman=$this->input->post('tgl_peminjaman');
            $jenis_voucher=$this->input->post('jenis_voucher');
            $box=$this->input->post('box');
            $rak=$this->input->post('rak');
            $status=$this->input->post('status');
            $data = array(
                'npp_user' => $npp_user,
                'nama_user' => $nama_user,
                'jabatan' => $jabatan,
                'email' => $email,
                'tgl_peminjaman' => $tgl_peminjaman,
                'jenis_voucher' => $jenis_voucher,
                'box' => $box,
                'rak' => $rak,  
                'status' => $status,  
            );
            $data = $this->admin->gInsert('tbl_peminjaman',$data);
            redirect(base_url()."index.php/dashboard",'refresh');
        }
    }
    
    public function verif_peminjaman(){
        
        if($this->session->userdata('akses')=='1'){
            $id_peminjam=$this->input->post('id_peminjam');
            $npp_user=$this->input->post('npp_user');
            $nama_user=$this->input->post('nama_user');
            $jabatan=$this->input->post('jabatan');
            $email=$this->input->post('email');
            $tgl_peminjaman=$this->input->post('tgl_peminjaman');
            $jenis_voucher=$this->input->post('jenis_voucher');
            $box=$this->input->post('box');
            $rak=$this->input->post('rak');
            $status=$this->input->post('status');
            $data = array(
                'npp_user' => $npp_user,
                'nama_user' => $nama_user,
                'jabatan' => $jabatan,
                'email' => $email,
                'tgl_peminjaman' => $tgl_peminjaman,
                'jenis_voucher' => $jenis_voucher,
                'box' => $box,
                'rak' => $rak,  
                'status' => $status,  
            );

        $this->db->where('id_peminjam',$id_peminjam);
        $data=$this->db->update('tbl_peminjaman', $data);
        if($data){
            redirect(base_url()."index.php/dashboard/daftarpeminjam",'refresh');
        }
        }
    }

    public function mypeminjam(){
        $data=$this->admin->getPinjam();
        $data=array('data'=> $data);
        $data['content']= 'peminjaman/mypeminjam';
        $this->load->view("dashboard/index",$data);
    }

    
}