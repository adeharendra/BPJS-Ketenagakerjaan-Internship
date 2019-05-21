<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function index()
    {
        
    }

    public function lihatfile(){
        $data = array();
    
        //get files from database
        $data['files'] = $this->admin->getRows();
        
        //load the view
        $this->load->view('download', $data);
    }

    public function lihat(){
        $id = $this->uri->segment(3);
        if (empty($id)){
            redirect(base_url());
        }
        $data = $this->admin->getRows($id);
        $filename =$data['files'];
        $file = file_get_contents(base_url('fileupload/'. $data['files']));
 
        //load the excel library
        $this->load->library('excel');
 
        //read file from path
        $objPHPExcel = PHPExcel_IOFactory::load($file);
        
        //get only the Cell Collection
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
        
        //extract to a PHP readable array format
        foreach ($cell_collection as $cell) {
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
        
            //The header will/should be in row 1 only. of course, this can be modified to suit your need.
            if ($row == 1) {
                $header[$row][$column] = $data_value;
            } else {
                $arr_data[$row][$column] = $data_value;
            }
        }
        
        //send the data in an array format
        $data['header'] = $header;
        $data['values'] = $arr_data;
    }
}
?>