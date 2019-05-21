<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error_page extends CI_Controller{
    function index()
    {
        $this->load->view('error_page');
    }
}