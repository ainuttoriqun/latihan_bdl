
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$this->load->view('Mahasiswa/add_mahasiswa');
	}

	public function simpan_mahasiswa(){
		$nama_by_php =$_POST['nama'];
		$nama= $this->input->post('nama');
		$nim= $this->input->post('nim');
		$angkatan= $this->input->post('angkatan');


	$this->MahasiswaModel -> insert_db($nama,$nim,$angkatan);

	echo "berhasil disimpan";


	}
}