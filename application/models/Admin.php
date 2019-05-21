<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model
{

    function gInsert($table,$data){
        
        $res=$this->db->insert($table,$data);
        return $res;
        
    }

    function getAB(){
        $data = $this->db->query("SELECT * FROM tbl_arsip ORDER BY id_arsip DESC");
        return $data->result_array();
    }
    
    function getPeminjam(){
        $data = $this->db->query("SELECT * FROM tbl_peminjaman ORDER BY id_peminjam DESC");
        return $data->result_array();
    }
    
    function getIdPeminjam(){
        $data = $this->db->query("SELECT * FROM tbl_peminjaman where id_peminjam='$id_peminjam'");
        return $data->result_array();
    }

    function editAb($id_arsip){
        $data = $this->db->query("SELECT * FROM tbl_arsip where id_arsip='$id_arsip'");
        return $data->result_array();
    }
    

    public function getRows($id = ''){
        $this->db->select('*');
        $this->db->from('tbl_arsip');
        if($id){
            $this->db->where('id_arsip',$id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('created','desc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }

    function getProfile(){
        $profile = $this->session->userdata("nama_user");
        $data = $this->db->query(" SELECT * FROM tbl_users where nama_user='$profile'");
        return $data->result_array();
    }

    function updateProfil($id){
        
        $res=$this->db->query('SELECT * FROM tbl_users');
        return $res;
        
    }

    public function updatePass($username,$data,$table)
    {
         //id apa yang mau di update, lalu DATA apa yang mau dikirim ke tabel di database
        $this->db->where('username',$username);
        $this->db->update($table,$data);
    }

    public function getQuote(){
        $data = $this->db->query("SELECT * FROM tbl_quotes ORDER BY RAND() LIMIT 1");
        return $data->result_array();
    }

    function getUser()
    {
        $data = $this->db->query("SELECT * FROM tbl_users");
        return $data->result_array();
    }

    function getReport($bt_pertama, $bt_kedua)
        {
            $res=$this->db->query("SELECT * FROM tbl_arsip WHERE bt_arsip BETWEEN DATE '$bt_pertama' AND DATE '$bt_kedua'");
            return $res->result_array();
        }
    function editakun($id_user){
            $data = $this->db->query("SELECT * FROM tbl_users where id_user='$id_user'");
            return $data->result_array();
        }

        public function hapus_akun($id_user){
            $data=array(
             'id_user' => $id_user
             );
            $this->db->delete('tbl_users', $data);
            if($this->db->affected_rows()>0){
             return true;
            }
            else{
             return false;
            }
           }

           function get_data_user_bynpp($npp_user){
            $hsl=$this->db->query("SELECT * FROM tbl_users WHERE npp_user='$npp_user'");
            if($hsl->num_rows()>0){
                foreach ($hsl->result() as $data) {
                    $hasil=array(
                        'npp_user' => $data->npp_user,
                        'nama_user' => $data->nama_user,
                        'jabatan' => $data->jabatan,
                        'email' => $data->email,
                        );
                }
            }
            return $hasil;
        }

        function get_j_voucher(){
            $data = $this->db->query("SELECT * FROM tbl_category");
            return $data;
        }

        function getPinjam()
    {
        $profile = $this->session->userdata("nama_user");
        $data = $this->db->query(" SELECT * FROM tbl_peminjaman where nama_user='$profile' AND status='1'");
        return $data->result_array();
    }

    function getLaporan($id_peminjam)
    {
        $data = $this->db->query(" SELECT * FROM tbl_peminjaman where id_peminjam='$id_peminjam'");
        return $data->result_array();
    }
}