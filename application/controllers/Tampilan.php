<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampilan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Wisata_Model');
		$this->load->library('form_validation');
	}


	public function index() 
	{
		$this->load->view('template/header');
		$this->load->view('index');
		$this->load->view('template/footer');
		
	}

	public function map2()
	{
		$data['wisata'] = $this->Wisata_Model-> allData();
		$this->load->view('template/header');
		$this->load->view('index');
		$this->load->view('template/footer2' , $data);
		
	}

	public function form()
	{
		$data['wisata'] = $this->Wisata_Model->allData();
		$this->load->view('template/header');
		$this->load->view('form', $data);
		$this->load->view('template/footer');
	}

	public function tambah_data()
	{

		$config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;
        $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('userfile')){
                echo "Gagal Tambah";
            }else{
				$gambar = $this->upload->data();
				$gambar = $gambar['file_name'];
				$nama = $this->input->post('nama',TRUE);
				$cord = $this->input->post('cord',TRUE);
				$jam = $this->input->post('jam',TRUE);
				$harga = $this->input->post('harga',TRUE);
				$telp = $this->input->post('telp',TRUE);
				$alamat = $this->input->post('alamat',TRUE);

				$data = array(
					'nama' => $nama,
					'cord' => $cord,
					'jam' => $jam,
					'harga' => $harga,
					'telp' => $telp,
					'alamat' => $alamat,
					'gambar' => $gambar,
				);

				$this->db->insert('wisata', $data);
				redirect('Tampilan/map2');
			}
	}

	public function proses_edit_data()
	{
		$id = $this->input->post('id');
		$config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;
        $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('userfile')){
				$nama = $this->input->post('nama',TRUE);
				$cord = $this->input->post('cord',TRUE);
				$jam = $this->input->post('jam',TRUE);
				$harga = $this->input->post('harga',TRUE);
				$telp = $this->input->post('telp',TRUE);
				$alamat = $this->input->post('alamat',TRUE);

				$data = array(
					'nama' => $nama,
					'cord' => $cord,
					'jam' => $jam,
					'harga' => $harga,
					'telp' => $telp,
					'alamat' => $alamat,
				);
				// var_dump($data);
				$this->db->where('id',$id);
				$this->db->update('wisata', $data);
				redirect('Tampilan/form');

            }else{
				$gambar = $this->upload->data();
				$gambar = $gambar['file_name'];
				$nama = $this->input->post('nama',TRUE);
				$cord = $this->input->post('cord',TRUE);
				$jam = $this->input->post('jam',TRUE);
				$harga = $this->input->post('harga',TRUE);
				$telp = $this->input->post('telp',TRUE);
				$alamat = $this->input->post('alamat',TRUE);

				$data = array(
					'nama' => $nama,
					'cord' => $cord,
					'jam' => $jam,
					'harga' => $harga,
					'telp' => $telp,
					'alamat' => $alamat,
					'gambar' => $gambar,
				);
				$this->db->where('id',$id);
				$this->db->update('wisata', $data);
				redirect('Tampilan/form');
            }
	}
	
	public function hapus_data($id)
	{
		# method menghapus data dari database
		$this->Wisata_Model->hapus_data($id);
		redirect('Tampilan/form');
	}
}
