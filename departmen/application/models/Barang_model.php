<?php

class Barang_model extends CI_Model
{
    public $title;
    public $content;
    public $date;

    public function get_barang($cari_nama = '', $cari_deskripsi = '', $cari_stok = '')
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('status_delete', 0);

        if ($cari_nama != '' && $cari_nama != null) {
            $this->db->like('nama_barang', $cari_nama);
        }

        if ($cari_deskripsi != '' && $cari_deskripsi != null) {
            $this->db->like('deskripsi', $cari_deskripsi);
        }

        if ($cari_stok != '' && $cari_stok != null) {
            $this->db->where('stok <=', $cari_stok);
        }

        return $this->db->get();
    }

    public function insert_data($data)
    {
        $this->db->insert('barang', $data);
    }

    public function get_by_id($id_barang)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('id_barang', $id_barang);

        return $this->db->get();
    }

    public function update_data($id_barang, $data)
    {
        $this->db->where('id_barang', $id_barang);
        $this->db->update('barang', $data);
    }

    public function hapus_data($id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        $this->db->delete('barang');
    }

    public function soft_delete_data($id_barang)
    {
        $data = array(
            'status_delete' => 1
        );
        $this->db->where('id_barang', $id_barang);
        $this->db->update('barang', $data);
    }
}
