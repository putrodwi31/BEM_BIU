<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
		$data['newpost'] = $this->post->getPostTerbaru();
		$data['program'] = $this->post->getPostKat();
		$data['org'] = $this->db->get_where('prof_org', ['id' => 1])->row_array();
		$data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
		$data['title'] = '';

		$this->load->view('templates/land_header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/land_footer', $data);
	}

	public function tentang()

	{
		$data['title'] = 'Tentang - ';
		$data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
		$this->load->view('templates/land_header', $data);
		$this->load->view('home/tentang');
		$this->load->view('templates/land_footer', $data);
	}
	public function visi()

	{
		$data['title'] = 'Visi & Misi - ';
		$data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
		$this->load->view('templates/land_header', $data);
		$this->load->view('home/visi-misi');
		$this->load->view('templates/land_footer', $data);
	}
	public function sejarah()

	{
		$data['title'] = 'Sejarah - ';
		$data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
		$this->load->view('templates/land_header', $data);
		$this->load->view('home/sejarah');
		$this->load->view('templates/land_footer', $data);
	}
	public function struktur()

	{
		$data['bph'] = $this->db->get('bph')->result_array();

		$data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
		$data['title'] = 'Struktur & Menteri - ';
		$this->load->view('templates/land_header', $data);
		$this->load->view('home/struktur-menteri', $data);
		$this->load->view('templates/land_footer', $data);
	}
	public function beritap()

	{
		$this->load->model('Post_model', 'post');
		$data['title'] = 'Berita & Program - ';
		$data['artikel'] = $this->post->getPostWhere();
		$data['newpost'] = $this->post->getPostTerbaru();
		$data['program'] = $this->post->getPostKat();
		$data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
		$this->load->view('templates/land_header', $data);
		$this->load->view('home/beritadprogram', $data);
		$this->load->view('templates/land_footer', $data);
	}
	public function ukm()

	{
		$data['ukm'] = $this->db->get('ukm')->result_array();
		$data['title'] = 'UKM - ';
		$data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
		$data['kab'] = $this->db->select('nama_kabinet')->get_where('prof_org', ['id' => 1])->row_array();
		$this->load->view('templates/land_header', $data);
		$this->load->view('home/ukm', $data);
		$this->load->view('templates/land_footer', $data);
	}
	public function contact()
	{
		$data['ukm'] = $this->db->get('ukm')->result_array();
		$data['title'] = 'Kotak Saran - ';
		$data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
		$data['kab'] = $this->db->select('nama_kabinet')->get_where('prof_org', ['id' => 1])->row_array();

		$this->load->view('templates/land_header', $data);
		$this->load->view('home/contact', $data);
		$this->load->view('templates/land_footer', $data);
	}

	public function detailart($slug)
	{
		if ($this->session->userdata('email') !== null) {
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		} else {
			$data['user'] = null;
		};
		$this->load->model('Post_model', 'post');
		$data['org'] = $this->db->get_where('prof_org', ['id' => 1])->row_array();
		$data['artikel'] = $this->post->getArt($slug);
		$data['judul'] = $data['artikel']['judul'] . ' - PMR SMK Negeri 2 Kota Bekasi';
		$data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();


		$this->load->view('templates/art_footer', $data);
		$this->load->view('home/detail', $data);
		$this->load->view('templates/blog_footer', $data);
	}
	public function detUkm($id)
	{
		$data['ukm'] = $this->db->get_where('ukm', ['id' => $id])->row_array();
		$data['title'] = 'UKM - ';
		$data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
		$data['kab'] = $this->db->select('nama_kabinet')->get_where('prof_org', ['id' => 1])->row_array();
		$this->load->view('templates/land_header', $data);
		$this->load->view('home/detukm', $data);
		$this->load->view('templates/land_footer', $data);
	}
	public function detKem($id)
	{
		$data['kemin'] = $this->db->get_where('kementerian', ['id' => $id])->row_array();
		$data['title'] = 'Struktur & Menteri - ';
		$data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
		$data['kab'] = $this->db->select('nama_kabinet')->get_where('prof_org', ['id' => 1])->row_array();
		$this->load->view('templates/land_header', $data);
		$this->load->view('home/detkem', $data);
		$this->load->view('templates/land_footer', $data);
	}
}
