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
		$data['org'] = $this->db->get_where('prof_org', ['id' => 1])->row_array();
		$data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
		$this->load->view('templates/land_header', $data);
		$this->load->view('home/tentang');
		$this->load->view('templates/land_footer', $data);
	}
	public function visi()

	{
		$data['title'] = 'Visi & Misi - ';
		$data['org'] = $this->db->get_where('prof_org', ['id' => 1])->row_array();
		$data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
		$this->load->view('templates/land_header', $data);
		$this->load->view('home/visi-misi');
		$this->load->view('templates/land_footer', $data);
	}
	public function sejarah()

	{
		$data['title'] = 'Sejarah - ';
		$data['org'] = $this->db->get_where('prof_org', ['id' => 1])->row_array();
		$data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
		$this->load->view('templates/land_header', $data);
		$this->load->view('home/sejarah');
		$this->load->view('templates/land_footer', $data);
	}
	public function struktur()

	{
		$data['bph'] = $this->db->get('bph')->result_array();
		$data['org'] = $this->db->get_where('prof_org', ['id' => 1])->row_array();
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
		$data['org'] = $this->db->get_where('prof_org', ['id' => 1])->row_array();
		$this->load->view('templates/land_header', $data);
		$this->load->view('home/beritadprogram', $data);
		$this->load->view('templates/land_footer', $data);
	}
	public function ukm()

	{
		$data['ukm'] = $this->db->get('ukm')->result_array();
		$data['title'] = 'UKM - ';
		$data['org'] = $this->db->get_where('prof_org', ['id' => 1])->row_array();
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
		$data['org'] = $this->db->get_where('prof_org', ['id' => 1])->row_array();
		$data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
		$data['kab'] = $this->db->select('nama_kabinet')->get_where('prof_org', ['id' => 1])->row_array();
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');
		$this->form_validation->set_rules('captcha', 'Captcha', 'required|trim');
		$files = glob('./captcha/*'); // get all file names
		foreach ($files as $file) {
			// iterate files
			if (is_file($file))
				unlink($file); // delete file
		}
		if ($this->form_validation->run() === false) {
			$vals = array(
				'img_path'      => './captcha/',
				'img_url'       => base_url() . "captcha/",
				'img_width'     => '150',
				'img_height'    => 50,
				'expiration'    => 7200,
				'word_length'   => 6,
				'font_size'     => 20,
				'pool'          => '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',
				'colors'        => array(
					'background' => array(255, 255, 255),
					'border' => array(255, 255, 255),
					'text' => array(0, 0, 0),
					'grid' => array(255, 182, 182)
				)
			);

			$captcha = create_captcha($vals);
			$image = $captcha['image'];
			$this->session->set_userdata('captchaword', $captcha['word']);
			$data['imgcaptcha'] = $image;
			$this->load->view('templates/land_header', $data);
			$this->load->view('home/contact', $data);
			$this->load->view('templates/land_footer', $data);
		} else {
			if (strtoupper($this->input->post('captcha')) == $this->session->userdata('captchaword')) {
				$data = [
					'nama' => $this->input->post('nama'),
					'email' => $this->input->post('email'),
					'isi' => $this->input->post('pesan')
				];
				$this->db->insert('message', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Pesan Berhasil dikirim!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('contact');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Kode captcha tidak sesuai!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('contact');
			}
		}
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
		$data['org'] = $this->db->get_where('prof_org', ['id' => 1])->row_array();
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
		$data['org'] = $this->db->get_where('prof_org', ['id' => 1])->row_array();
		$data['kem'] = $this->db->order_by('nama', 'ASC')->get('kementerian')->result_array();
		$data['kab'] = $this->db->select('nama_kabinet')->get_where('prof_org', ['id' => 1])->row_array();
		$this->load->view('templates/land_header', $data);
		$this->load->view('home/detkem', $data);
		$this->load->view('templates/land_footer', $data);
	}
}
