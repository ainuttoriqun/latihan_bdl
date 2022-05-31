<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MahasiswaModel extends CI_Model 
{
    public function insert_db($nama,$nim,$angkatan){
        $data = array(
			'nama' => $nama,
			'nim' => $nim,
			'angkatan' => $angkatan
	    ); 
	    $this->db->insert('mahasiswa', $data);
 
    }
    
}