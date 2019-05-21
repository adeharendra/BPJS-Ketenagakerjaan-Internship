<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // load Session Library
        $this->load->library('session');

        //load model user
        $this->load->model('user');
    }

    public function about(){
        $this->load->view('about');
    }

    public function index()
    {

            if($this->user->logged_id())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                redirect("dashboard");

            }else{

                //jika session belum terdaftar

                //set form validation
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = md5($this->input->post('password', TRUE));

                //checking data via model
                // $checking = $this->user->check_login('tbl_users', array('username' => $username), array('password' => $password));
                $cek_user=$this->user->auth_user($username,$password);
                //jika ditemukan, maka create session
                if($cek_user->num_rows() > 0){
                    $data=$cek_user->row_array();
                    if ($data['level']=='1'){
                        
                        $this->session->set_userdata('akses','1');
                        $this->session->set_userdata('user_id',$data['id_user']);
                        $this->session->set_userdata('user_name',$data['username']);
                        $this->session->set_userdata('user_pass',$data['password']);
                        $this->session->set_userdata('nama_user',$data['nama_user']);
                        $this->session->set_userdata('npp_user',$data['npp_user']);
                        $this->session->set_userdata('foto_user',$data['foto_user']);
                        $this->session->set_userdata('email',$data['email']);

                        // foreach ($checking as $apps) {

                        //     $session_data = array(
                        //         'user_id'   => $apps->id_user,
                        //         'user_name' => $apps->username,
                        //         'user_pass' => $apps->password,
                        //         'nama_user'  => $apps->nama_user,
                        //         'npp_user'  => $apps->npp_user,
                        //         'foto_user'  => $apps->foto_user,
                        //         'email'  => $apps->email,
                        //         'akses'=>$apps->level,
                        //     );
                        //     //set session userdata
                        //     $this->session->set_userdata($session_data);
                            
                            redirect('dashboard');
                        // }
                    }else{

                        $this->session->set_userdata('akses','2');
                        $this->session->set_userdata('user_id',$data['id_user']);
                        $this->session->set_userdata('user_name',$data['username']);
                        $this->session->set_userdata('user_pass',$data['password']);
                        $this->session->set_userdata('nama_user',$data['nama_user']);
                        $this->session->set_userdata('npp_user',$data['npp_user']);
                        $this->session->set_userdata('foto_user',$data['foto_user']);
                        $this->session->set_userdata('email',$data['email']);

                        // foreach ($checking as $apps) {

                        //     $session_data = array(
                        //         'user_id'   => $apps->id_user,
                        //         'user_name' => $apps->username,
                        //         'user_pass' => $apps->password,
                        //         'nama_user'  => $apps->nama_user,
                        //         'npp_user'  => $apps->npp_user,
                        //         'foto_user'  => $apps->foto_user,
                        //         'email'  => $apps->email,
                        //         'akses'=>$apps->level,
                        //     );
                        //     //set session userdata
                        //     $this->session->set_userdata($session_data);
    
                            redirect('dashboard');
                    // }
                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('login/login', $data);
                }

            }else{

                $this->load->view('login/login');
            }

        }

    }

    
}