<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Barang_model');
    }

    public function index()
    {
        $list_barang = $this->Barang_model->get_barang();

        $arr_view = array(
            'list_barang' => $list_barang
        );

        $html_view = $this->load->view('daftar_barang', $arr_view, true);

        $data_json = array(
            'konten' => $html_view,
            'title' => 'Homepage'
        );

        echo json_encode($data_json);
    }

    public function form_create()
    {
        $data_view = array('title' => 'Form Data Barang Baru');

        $konten = $this->load->view('barang/form_barang', $data_view, true);

        $data_json = array(
            'konten' => $konten,
            'title' => 'Form Data Barang Baru'
        );

        echo json_encode($data_json);
    }

    public function create_action()
    {
        $this->db->trans_start();

        $arr_input = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'deskripsi' => $this->input->post('deskripsi'),
            'stok' => $this->input->post('stok'),
        );

        $this->Barang_model->insert_data($arr_input);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $data_output = array(
                'sukses' => 'tidak',
                'pesan' => 'Gagal Input Data Barang',
            );
        } else {
            $this->db->trans_commit();
            $data_output = array(
                'sukses' => 'ya',
                'pesan' => 'Berhasil Input Data Barang',
            );
        }

        echo json_encode($data_output);
    }

    public function form_edit($id_barang)
    {
        $data_view = array('title' => 'Form Edit Data Barang', 'id_barang' => $id_barang);

        $konten = $this->load->view('barang/form_barang', $data_view, true);

        $data_json = array(
            'konten' => $konten,
            'title' => 'Form Edit Data Barang',
            'id_barang' => $id_barang
        );

        echo json_encode($data_json);
    }

    public function detail()
    {
        $id_barang = $this->input->get('id_barang');
        $data_detail = $this->Barang_model->get_by_id($id_barang);

        if ($data_detail->num_rows() > 0) {
            $data_output = array(
                'sukses' => 'ya',
                'detail' => $data_detail->row_array()
            );
        } else {
            $data_output = array(
                'sukses' => 'tidak'
            );
        }

        echo json_encode($data_output);
    }

    public function update_action()
    {
        $this->db->trans_start();

        $id_barang = $this->input->post('id_barang');

        $arr_input = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'deskripsi' => $this->input->post('deskripsi'),
            'stok' => $this->input->post('stok'),
        );

        $this->Barang_model->update_data($id_barang, $arr_input);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $data_output = array(
                'sukses' => 'tidak',
                'pesan' => 'Gagal Update Data Barang',
            );
        } else {
            $this->db->trans_commit();
            $data_output = array(
                'sukses' => 'ya',
                'pesan' => 'Berhasil Update Data Barang',
            );
        }

        echo json_encode($data_output);
    }

    public function delete_data()
    {
        $this->db->trans_start();

        $id_barang = $this->input->get('id_barang');

        $this->Barang_model->hapus_data($id_barang);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $data_ouput = array('sukses' => 'tidak', 'pesan' => 'Gagal Hapus Data Barang');
        } else {
            $this->db->trans_commit();
            $data_ouput = array('sukses' => 'ya', 'pesan' => 'Berhasil Hapus Data Barang');
        }

        echo json_encode($data_ouput);
    }

    public function soft_delete_data()
    {
        $this->db->trans_start();

        $id_barang = $this->input->get('id_barang');

        $this->Barang_model->soft_delete_data($id_barang);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $data_ouput = array('sukses' => 'tidak', 'pesan' => 'Gagal Hapus Data Barang');
        } else {
            $this->db->trans_commit();
            $data_ouput = array('sukses' => 'ya', 'pesan' => 'Berhasil Hapus Data Barang');
        }

        echo json_encode($data_ouput);
    }

    public function cari_barang()
    {
        $cari_nama = $this->input->get('cari_nama');
        $cari_deskripsi = $this->input->get('cari_desk');
        $cari_stok = $this->input->get('cari_stok');

        $list_barang = $this->Barang_model->get_barang($cari_nama, $cari_deskripsi, $cari_stok);

        $arr_view = array(
            'list_barang' => $list_barang
        );

        $html_view = $this->load->view('daftar_barang', $arr_view, true);

        $data_json = array(
            'konten' => $html_view,
            'title' => 'Homepage'
        );

        echo json_encode($data_json);
    }
}
