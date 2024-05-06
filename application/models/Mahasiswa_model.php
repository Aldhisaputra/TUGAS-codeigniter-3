<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    // Data array data_mahasiswa
    private $data_mahasiswa = array(
        array('id' => 1, 'nama' => 'Agus Santoso', 'npm' => '1412130011', 'angkatan' => '2020', 'kelas' => 'B', 'alamat' => 'Jl. Contoh No. 1', 'mata_kuliah_favorit' => 'Pemrograman Web'),
        array('id' => 2, 'nama' => 'Budi Raharjo', 'npm' => '1412130022', 'angkatan' => '2019', 'kelas' => 'B', 'alamat' => 'Jl. Contoh No. 2', 'mata_kuliah_favorit' => 'Basis Data'),
        array('id' => 3, 'nama' => 'Citra Dewi', 'npm' => '1412130033', 'angkatan' => '2021', 'kelas' => 'F', 'alamat' => 'Jl. Contoh No. 3', 'mata_kuliah_favorit' => 'Pemrograman Lanjut'),
        array('id' => 4, 'nama' => 'Dian Nugraha', 'npm' => '1412130044', 'angkatan' => '2020', 'kelas' => 'F', 'alamat' => 'Jl. Contoh No. 4', 'mata_kuliah_favorit' => 'Jaringan Komputer'),
        array('id' => 5, 'nama' => 'Eka Sari', 'npm' => '1412130055', 'angkatan' => '2019', 'kelas' => 'Z', 'alamat' => 'Jl. Contoh No. 5', 'mata_kuliah_favorit' => 'Sistem Operasi')
    );

    // Fungsi untuk mendapatkan data mahasiswa
    public function get_mahasiswa() {
        return $this->data_mahasiswa;
    }

    public function search_mahasiswa($keyword) {
        $result = array();
        $keyword = strtolower($keyword); // Ubah kata kunci menjadi lowercase untuk pencarian case-insensitive
        foreach ($this->data_mahasiswa as $mahasiswa) {
            // Ubah semua nilai menjadi lowercase untuk pencarian case-insensitive
            $nama = strtolower($mahasiswa['nama']);
            $npm = strtolower($mahasiswa['npm']);
            $angkatan = strtolower($mahasiswa['angkatan']);
            $kelas = strtolower($mahasiswa['kelas']);
            $alamat = strtolower($mahasiswa['alamat']);
            $matkul = strtolower($mahasiswa['mata_kuliah_favorit']);

            // Gunakan stripos() untuk pencarian case-insensitive
            if (
                stripos($nama, $keyword) !== false ||
                stripos($npm, $keyword) !== false ||
                stripos($angkatan, $keyword) !== false ||
                stripos($kelas, $keyword) !== false ||
                stripos($alamat, $keyword) !== false ||
                stripos($matkul, $keyword) !== false
            ) {
                $result[] = $mahasiswa;
            }
        }
        return $result;
    }
}

