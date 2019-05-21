<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //load model user
        $this->load->model('user');
        $this->load->model('admin');
    }

    public function buatakun(){
        if($this->session->userdata('akses')=='1'){
        $data['content']= 'kelolaakun/createakun';
        $this->load->view("dashboard/index",$data);
        }else{
            redirect('dashboard');
        }
    }
    
    
    public function prosesakun(){
        if($this->session->userdata('akses')=='1'){
        $username=$this->input->post('username');
        $nama_user=$this->input->post('nama_user');
        $npp_user=$this->input->post('npp_user');
        $email=$this->input->post('email');
        $password=md5($this->input->post('password'));
        $level=$this->input->post('level');
        $foto_user=$this->input->post('foto_user');
        
        //Save the file name into the db
        }
        $data = array(
            'nama_user' => $nama_user,
            'username' => $username,
            'npp_user' => $npp_user,
            'email' => $email,
            'password' => $password,
            'level' => $level,
            'foto_user' => $foto_user,
        );
        $data = $this->admin->gInsert('tbl_users',$data);
        redirect(base_url()."index.php/akun/buatakun",'refresh');
        
    }

    public function lihatakun(){
        
            if($this->session->userdata('akses')=='1'){
            $data = $this->admin->getUser();
            $data = array('data' => $data);
            $data['content']='kelolaakun/lihatakun';
            $this->load->view("dashboard/index",$data);
            }else{
                redirect('dashboard');
            }
    }

    public function editakun($id_user){
        $data = $this->admin->editakun($id_user);
        $data = array('data' => $data);
        $data['content'] = 'kelolaakun/editakun';
        $this->load->view("dashboard/index",$data);
    }

    public function hapus_akun($id_user){
        // $id_user = $this->input->get('id_user');
        $result = $this->admin->hapus_akun($id_user);
        if($result == true){
         echo '<script type="text/javascript">alert("Hapus Berhasil!!!")</script>';
         redirect(site_url(), 'refresh');
        }else{
         echo '<script type="text/javascript">alert("Hapus Gagal!!!")</script>';
         redirect(site_url(), 'refresh');
        }
       }

}