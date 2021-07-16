<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_Model extends CI_Model {

    public function allData()
    {
        # Query Untuk Mengambil semua data didalam database
        return $this->db->get('wisata')->result_array();
    }



    public function proses_tambah_data()
    {
        # Query Untuk Mengirimkan data yang di inputkan ke dalam database
        $data = [

            "nama" => $this->input->post('nama',TRUE),
            "cord" => $this->input->post('cord',TRUE),
            "jam" => $this->input->post('jam',TRUE),
            "harga" => $this->input->post('harga',TRUE),
            "telp" => $this->input->post('telp',TRUE),
            "alamat" => $this->input->post('alamat',TRUE),
            
        ];
        $this->db->insert('wisata', $data);
    }


    public function ambil_id_wisata($id)
    {
        # Query Untuk Mengupdate Data yang di pilih sesuai id dari database
        return $this->db->get_where('wisata',['id' => $id])->row_array();
    }


 
    public function proses_edit_data()
    {
        # Query Untuk Mengubah data yang di dipilh sesuai id dari database
        $data = [
            "id" => $this->input->post('id',True),
            "nama" => $this->input->post('nama',TRUE),
            "cord" => $this->input->post('cord',TRUE),
            "jam" => $this->input->post('jam',TRUE),
            "harga" => $this->input->post('harga',TRUE),
            "telp" => $this->input->post('telp',TRUE),
            "alamat" => $this->input->post('alamat',TRUE),
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('wisata', $data);
    }



    public function hapus_data($id)
    {
        # Query Untuk Menghapus Data yang di pilih sesuai id dari database
        $this->db->where('id', $id);
        $this->db->delete('wisata');
    }

    public function cari_data()
    {
        $keyword = $this->input->post('cari', true);
        $this->db->like('nama' , $keyword);
        return $this->db->get('data')->result_array();
    }


}