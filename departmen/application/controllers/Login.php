<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$html_view = $this->load->view('login', [], true);
        
		$data_json = array(
            'konten' => $html_view,
            'title' => 'Homepage'
        );

        echo json_encode($data_json);
	}
}
