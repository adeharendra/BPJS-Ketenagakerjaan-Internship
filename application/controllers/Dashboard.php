<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            //load model user
            $this->load->model('user');
            $this->load->model('admin');
        }

    public function index()
    {
        if($this->user->logged_id())
        {

            // $this->load->view("dashboard/index");
            // $data = $this->admin->getProfile();
            // $data = array('data' => $data);
            $data = $this->admin->getQuote();
            $data = array('data' => $data);
            $data['content'] = 'dashboard/dashboard';
            $this->load->view('dashboard/index',$data);         

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

    public function display($year = null, $month = null)
        {
            #config
            $config['start_day'] = 'monday';
            $config['day_type'] = 'short';
            $config['show_next_prev'] = false;
            $config['next_prev_url'] = base_url()."dashboard/display";
    
            #load library
            $this->load->library('calendar',$config);
    
            #generate
            $data['calendar'] = $this->calendar->generate($year,$month);
            $this->load->view("dashboard/kalender",$data);
            
        }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    // public function dashboard(){
        
    // }

    public function suratbaru(){
        $data = $this->admin->getProfile();
        $data = array('data' => $data);
        $data['content'] = 'dashboard/suratbaru';
        $this->load->view("dashboard/index",$data);
    }

    public function insertSB()
    {
        $data = array(
            'kd_surat' => $this->input->post('kd_surat'),
            'nm_surat' => $this->input->post('nm_surat'),
            'sm_surat' => $this->input->post('sm_surat'),
            'd_surat' => $this->input->post('d_surat'),
        );
        $data = $this->admin->gInsert('tbl_arsip',$data);
        redirect(base_url()."index.php/dashboard/suratbaru",'refresh');
    }

    public function lihatsurat(){
        $data = $this->admin->getProfile();
        $data = array('data' => $data);
        $this->load->model('admin');
        $data = $this->admin->getSB();
        $data = array('data' => $data);
        $data['content']= 'dashboard/lihatsurat';
        $this->load->view("dashboard/index",$data);
    }

    public function arsipbaru(){
        if($this->session->userdata('akses')=='2'){
        $data['content']= 'dashboard/arsipbaru';
        $this->load->view("dashboard/index",$data);
        }else{
            redirect('dashboard');
        }
    }

    public function insertAB(){
        if($this->session->userdata('akses')=='2'){
        $k_arsip=$this->input->post('k_arsip');
        $p_arsip=$this->input->post('p_arsip');
        $bk_arsip=$this->input->post('bk_arsip');
        $kd_arsip=$this->input->post('kd_arsip');
        $bt_arsip=$this->input->post('bt_arsip');
        $nv_arsip=$this->input->post('nv_arsip');
        $box_arsip=$this->input->post('box_arsip');
        $rak_arsip=$this->input->post('rak_arsip');
        $tgl_upload=$this->input->post('tgl_upload');
        $files=$_FILES['files']['name'];
        if($_FILES['files']['name']!=""){
            $config['upload_path'] = './fileupload/'; //Use relative or absolute path
            $config['allowed_types'] = 'doc|pdf|docx|xls'; 
            $config['max_size'] = '30000';
            $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number appended
            
            $this->upload->initialize($config);
            
            if( ! $this->upload->do_upload("files")){
        
                //echo the errors
                echo $this->upload->display_errors();
            }
            $file_name = $this->upload->file_name;
        
        //Save the file name into the db
        }
        $data = array(
            'k_arsip' => $k_arsip,
            'p_arsip' => $p_arsip,
            'bk_arsip' => $bk_arsip,
            'kd_arsip' => $kd_arsip,
            'bt_arsip' => $bt_arsip,
            'nv_arsip' => $nv_arsip,
            'box_arsip' => $box_arsip,
            'rak_arsip' => $rak_arsip,
            'tgl_upload' => $tgl_upload,
            'files' => $files,  
        );
        $data = $this->admin->gInsert('tbl_arsip',$data);
        redirect(base_url()."index.php/dashboard/arsipbaru",'refresh');
    }
    }

    public function prosesEditAb()
    {
        $id_arsip=$this->input->post('id_arsip');
        $k_arsip=$this->input->post('k_arsip');
        $p_arsip=$this->input->post('p_arsip');
        $bk_arsip=$this->input->post('bk_arsip');
        $kd_arsip=$this->input->post('kd_arsip');
        $bt_arsip=$this->input->post('bt_arsip');
        $nv_arsip=$this->input->post('nv_arsip');
        $box_arsip=$this->input->post('box_arsip');
        $rak_arsip=$this->input->post('rak_arsip');
        $tgl_upload=$this->input->post('tgl_upload');
        $files=$_FILES['files']['name'];
        if($_FILES['files']['name']!=""){
            $config['upload_path'] = './fileupload/'; //Use relative or absolute path
            $config['allowed_types'] = 'doc|pdf|docx|xls'; 
            $config['max_size'] = '30000';
            $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number appended
            
            $this->upload->initialize($config);
            
            if( ! $this->upload->do_upload("files")){
        
                //echo the errors
                echo $this->upload->display_errors();
            }
            $file_name = $this->upload->file_name;
        
        //Save the file name into the db
        }
        $data = array(
            'k_arsip' => $k_arsip,
            'p_arsip' => $p_arsip,
            'bk_arsip' => $bk_arsip,
            'kd_arsip' => $kd_arsip,
            'bt_arsip' => $bt_arsip,
            'nv_arsip' => $nv_arsip,
            'box_arsip' => $box_arsip,
            'rak_arsip' => $rak_arsip,
            'tgl_upload' => $tgl_upload,
            'files' => $files,
        );

        $this->db->where('id_arsip',$id_arsip);
        $data=$this->db->update('tbl_arsip', $data);
        if($data){
            redirect(base_url()."index.php/dashboard/lihatarsip",'refresh');
        }
    }

    public function lihatarsip(){
        //$data = $this->admin->getProfile();
        //$data = array('data' => $data);
        $data1 = $this->admin->getAB();
        $data1 = array('data1' => $data1);
        //$data['content']= 'dashboard/lihatarsip';
        $data1['content']= 'dashboard/lihatarsip';
        $this->load->view("dashboard/index",$data1);
    }
    
    public function daftarpeminjam(){
        //$data = $this->admin->getProfile();
        //$data = array('data' => $data);
        $data1 = $this->admin->getPeminjam();
        $data1 = array('data1' => $data1);
        //$data['content']= 'dashboard/lihatarsip';
        $data1['content']= 'dashboard/daftarpeminjam';
        $this->load->view("dashboard/index",$data1);
    }

    public function downloadfile(){
        $data = array();
    
        //get files from database
        $data['files'] = $this->admin->getRows();
        $data['content'] = 'dashboard/dashboard';
        //load the view
        $this->load->view("dashboard/index", $data);
    }

    public function download(){
        $id = $this->uri->segment(3);
        if (empty($id)){
            redirect(base_url());
        }
        $data = $this->admin->getRows($id);
        $filename =$data['files'];
        $fileContents = file_get_contents(base_url('fileupload/'. $data['files']));
        
        force_download($filename, $fileContents);
    }

    public function editarsip($id_arsip){
        $data = $this->admin->editAb($id_arsip);
        $data = array('data' => $data);
        $data['content'] = 'dashboard/editarsip';
        $this->load->view("dashboard/index",$data);
    }

    public function editprofil($id_user){
        $data = $this->admin->getProfile($id_user);
        $data = array('data' => $data);
        $data['content'] = 'dashboard/editprofil';
        $this->load->view("dashboard/index",$data);
    }

    public function akun(){
        $data = $this->admin->getProfile();
        $data = array('data' => $data);
        $data['content'] = 'dashboard/akun';
        $this->load->view("dashboard/index",$data);
    }

    public function updateprofil(){
        $id_user=$this->input->post('id_user');
        $nama_user=$this->input->post('nama_user');
        $username=$this->input->post('username');
        $npp_user=$this->input->post('npp_user');
        $email=$this->input->post('email');
        $level=$this->input->post('level');
        $files=$_FILES['foto_user']['name'];
        if($_FILES['foto_user']['name']!=""){
            $config['upload_path'] = './assets/images/icon/fotouser/'; //Use relative or absolute path
            $config['allowed_types'] = 'jpg|png|jpeg'; 
            $config['max_size'] = '2000';
            $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number appended
            
            $this->upload->initialize($config);
            
            if( ! $this->upload->do_upload("files")){
        
                //echo the errors
                echo $this->upload->display_errors();
            }
            $file_name = $this->upload->file_name;
        
        //Save the file name into the db
        }
        $data = array(
            'nama_user' => $nama_user,
            'username' => $username,
            'npp_user' => $npp_user,
            'email' => $email,
            'level' => $level,
            'foto_user' => $files,
        );
        $this->db->where('id_user',$id_user);
        $data=$this->db->update('tbl_users', $data);
        if($data){
            redirect('dashboard');
        }
    }

    public function gantipass(){
        $data = $this->admin->getProfile();
        $data = array('data' => $data);
        $data['content'] = 'dashboard/gantipass';
        $this->load->view("dashboard/index",$data);
    }

    public function ganti_password()
    {
        $username = $this->session->userdata['user_name'];

        $this->admin->getProfile();
        // $this->form_validation->set_rules('password','password lama','required');
        $this->form_validation->set_rules('pw_baru','password baru','required');
        $this->form_validation->set_rules('cpw_baru','password kedua','required|matches[pw_baru]');

        $this->form_validation->set_message('required','%s wajib diisi');

        $this->form_validation->set_error_delimiters('<p class="alert">','</p>');

        if( $this->form_validation->run() != TRUE ){
            $data = $this->admin->getProfile();
            $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Password Tidak Cocok!</div></div>';
            $data = array('data' => $data);
            $data['content'] = 'dashboard/gantipass';
            $this->load->view("dashboard/index",$data);
        } else {
            $post = ($this->input->post());
            
            $datapass = array(
                'password' => md5($post['pw_baru']),
            );

            $this->admin->updatePass($username, $datapass, 'tbl_users');
            $data['error'] = '<div class="alert alert-success" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUKSES</b> Password Berhasil Disimpan!</div></div>';
            $data['content'] = 'dashboard/gantipass';
            $this->load->view("dashboard/index",$data);
        }
    }

    public function panduan(){
        $data = $this->admin->getProfile();
        $data = $this->display();
        $data = array('data' => $data);
        $data['content'] = 'dashboard/panduan';
        $this->load->view("dashboard/index",$data);
    }

    public function about(){
        $this->load->view("dashboard/about");
    }

    public function report()
    {
        $data['content']='report/report';
        $this->load->view("dashboard/index",$data);
    }

    public function prosesRA()
    {
        $id_user=$this->input->post('id_user');
        $nama_user=$this->input->post('nama_user');
        $username=$this->input->post('username');
        $npp_user=$this->input->post('npp_user');
        $email=$this->input->post('email');
        $password=md5($this->input->post('password'));
        $data = array(
            'nama_user' => $nama_user,
            'username' => $username,
            'npp_user' => $npp_user,
            'email' => $email,
            'password' => $password,
        );
        $this->db->where('id_user',$id_user);
        $data=$this->db->update('tbl_users', $data);
        if($data){
            redirect(base_url()."index.php/dashboard",'refresh');
        }
    }

  }