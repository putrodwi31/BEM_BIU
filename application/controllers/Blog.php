<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->model('Post_model', 'post');

        $data['artikel'] = $this->post->getPostWhere();
        $data['populer'] = $this->post->getPostPopuler();
        $foot['kategori'] = $this->post->getKategori();
        $foot['newpost'] = $this->post->getPostTerbaru();
        $foot['tags'] = $this->post->getTags(4);
        $foot['pmr'] = $this->db->get_where('prof_pmr', ['id' => 1])->row_array();


        $this->load->view('templates/land_header');
        $this->load->view('blog/blog', $data);
        $this->load->view('templates/land_blog_footer', $foot);
    }
    public function daftar()
    {
        $data['pendaftaran'] = $this->db->get('pendaftaran')->result_array();
        $data['pmr'] = $this->db->get_where('prof_pmr', ['id' => 1])->row_array();
        $foot['pmr'] = $this->db->get_where('prof_pmr', ['id' => 1])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('ttl', 'Tempat, Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('nis', 'Nomor NIS', 'required|trim|numeric');
        $this->form_validation->set_rules('jurusan', 'jurusan', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('no', 'No Telepon/WA', 'required|trim|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('sekolah', 'Sekolah asasl', 'required|trim');
        $this->form_validation->set_rules('pengalaman', 'Alasan', 'required|trim');
        $this->form_validation->set_rules('alasan', 'Alasan', 'required|trim');
        $this->form_validation->set_rules('motto', 'Motto hidup', 'required|trim');

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/land_header');
            $this->load->view('blog/daftar', $data);
            $this->load->view('templates/land_footer', $foot);
        } else {
            $nama = $this->input->post('nama');
            $ttl = $this->input->post('ttl');
            $gender = $this->input->post('gender');
            $nisn = $this->input->post('nis');
            $jurusan = $this->input->post('jurusan');
            $email = $this->input->post('email');
            $nomor = $this->input->post('no');
            $alamat = $this->input->post('alamat');
            $sekolah = $this->input->post('sekolah');
            $pengalaman = $this->input->post('pengalaman');
            $alasan = $this->input->post('alasan');
            $motto = $this->input->post('motto');
            $data = [
                'nama' => $nama,
                'gender' => $gender,
                'nis' => $nisn,
                'nomor' => $nomor,
                'sekolah' => $sekolah,
                'moto' => $motto,
                'pengalaman' => $pengalaman,
                'ttl' => $ttl,
                'alasan' => $alasan,
                'jurusan' => $jurusan,
                'email' => $email,
                'alamat' => $alamat
            ];
            $this->db->insert('data_pendaftar', $data);
            $this->session->set_flashdata('swann', "<script>Swal.fire(
                'Berhasil!',
                'Terimakasih pendaftaran anda telah kami terima, info selanjutnya akan dikirim melalui email/no telp anda',
                'success'
              )</script>");
            redirect("blog/daftar");
        }
    }
    public function artikel($slug)
    {
        $this->load->model('Post_model', 'post');
        $data['artikel'] = $this->post->getArt($slug);
        $data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
        $data['title'] = $data['artikel']['judul'] . ' - ';
        $data['org'] = $this->db->get_where('prof_org', ['id' => 1])->row_array();
        if (!$data['artikel']) {
            $this->notfound();
        } else {
            // load cookie helper
            $this->load->helper('cookie');
            // cookie dari slug
            $check_visitor = $this->input->cookie($slug, false);

            $ip = $this->input->ip_address();

            // jika pengunjung mengunjungi pertama kali maka
            if ($check_visitor == false) {
                $cookie = array(
                    "name" => $slug,
                    "value" => $ip,
                    "expire" => time() + (120 * 60), // 2 Jam
                    "secure" => false,
                );
                $this->input->set_cookie($cookie);
                $this->post->tambah_views($slug);
            }
            $this->load->view('templates/land_header', $data);
            $this->load->view('blog/artikle', $data);
            $this->load->view('templates/land_footer', $data);
        }
    }
    public function notfound()
    {
        $data['title'] = null;
        $data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
        $data['org'] = $this->db->get_where('prof_org', ['id' => 1])->row_array();
        $this->load->view('templates/land_header', $data);
        $this->load->view('blog/404');
        $this->load->view('templates/land_footer', $data);
    }
}
