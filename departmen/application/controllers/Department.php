<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Department_model');
    }

    public function index()
    {
        $list_department = $this->Department_model->get_department();

        $arr_view = array(
            'list_department' => $list_department
        );

        $html_view = $this->load->view('daftar_department', $arr_view, true);

        $data_json = array(
            'konten' => $html_view,
            'title' => 'Homepage'
        );

        echo json_encode($data_json);
    }
}
