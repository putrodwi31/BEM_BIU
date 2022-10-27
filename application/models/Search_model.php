<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Search_model extends CI_Model
{

    public function view()
    {
        return $this->db->order_by('nama', 'asc')->get('data_pendaftar')->result_array(); // Tampilkan semua data yang ada di tabel siswa
    }

    public function search($keyword)
    {
        $this->db->like('nama', $keyword);
        $this->db->or_like('sekolah', $keyword);
        $this->db->or_like('jurusan', $keyword);

        $result = $this->db->get('data_pendaftar')->result_array(); // Tampilkan data siswa berdasarkan keyword

        return $result;
    }
}
