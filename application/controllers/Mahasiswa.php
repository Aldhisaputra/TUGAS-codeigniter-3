<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Mahasiswa_model'); // Memuat model Mahasiswa_model
        $this->load->helper('url'); // Memuat helper URL
    }
    
    public function index() {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa(); // Mendapatkan data mahasiswa dari model
        $this->load->view('mahasiswa_view', $data); // Menampilkan data mahasiswa ke view
    }
    
    public function search() {
        $keyword = $this->input->post('keyword'); // Ambil kata kunci pencarian dari form
        $field = $this->input->post('field'); // Ambil bidang pencarian dari form
    
        // Pastikan bidang pencarian memiliki nilai yang valid
        $valid_fields = array('nama', 'npm', 'angkatan', 'kelas', 'alamat', 'mata_kuliah_favorit');
        if (!in_array($field, $valid_fields)) {
            $field = 'nama'; // Jika bidang tidak valid, setel bidang default ke 'nama'
        }
    
        $data['mahasiswa'] = $this->Mahasiswa_model->search_mahasiswa($keyword, $field); // Cari mahasiswa berdasarkan bidang tertentu
        $this->load->view('mahasiswa_view', $data); // Menampilkan hasil pencarian ke view
    }
    
    
    

    
}
