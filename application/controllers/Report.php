<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model user
        $this->load->model('user');
        $this->load->model('admin');
    }

    public function viewReport()
    {
        $bt_pertama = $this->input->post('bt_pertama');
        $bt_kedua = $this->input->post('bt_kedua');
        $data=$this->admin->getReport($bt_pertama, $bt_kedua);
        $data=array('data' => $data);
        $data['content']='report/view_report';
        $this->load->view('dashboard/index', $data);
    }

    public function excel()
    {
        $bt_pertama = $this->input->post('bt_pertama');
        $bt_kedua = $this->input->post('bt_kedua');
        $data=$this->admin->getReport($bt_pertama, $bt_kedua);
        $data=array('data' => $data);
        $this->load->view('report/excel', $data);
    }
}