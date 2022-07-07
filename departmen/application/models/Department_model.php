<?php

class Department_model extends CI_Model {
    public $title;
    public $content;
    public $date;

    public function get_department()
    {
        $this->db->select('nama_departemen');
        $this->db->from('departemen');

        return $this->db->get();
    }
}