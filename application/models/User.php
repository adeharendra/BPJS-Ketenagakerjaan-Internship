<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model
{
    //fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('user_id');
    }

    //fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

    function getUser(){
        $data = $this->db->query("SELECT * FROM tbl_users");
        return $data->result_array();
    }

    function auth_user($username,$password){
        $data = $this->db->query("SELECT * FROM tbl_users WHERE username='$username' AND password=('$password') LIMIT 1");
        return $data;
    }
}