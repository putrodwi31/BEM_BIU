<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Data Pendaftar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Search_model', 'search');
        $data['pendaftar'] = $this->search->view();

        $this->form_validation->set_rules('nama', 'Keyword', 'required|trim');
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer', $data['title']);
        } else {
        }
    }

    public function editkem($id)
    {
        $data['title'] = 'Kementerian & UKM';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kem'] = $this->db->get_where('kementerian', ['id' => $id])->row_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editkem', $data);
            $this->load->view('templates/footer');
        } else {
        }
    }
    public function delkem($id)
    {
        $img_post = $this->db->get_where('kementerian', ['id' => $id])->row_array();
        unlink(FCPATH . 'assets/img/logo/' . $img_post['logo']);
        $nama = $img_post['nama'];
        $this->db->delete('kementerian', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kementerian ' . $nama . ' Berhasil dihapus!</div>');
        redirect('admin/kandu');
    }
    public function delukm($id)
    {
        $img_post = $this->db->get_where('ukm', ['id' => $id])->row_array();
        unlink(FCPATH . 'assets/img/logo/' . $img_post['logo']);
        $nama = $img_post['nama'];
        $this->db->delete('ukm', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">UKM ' . $nama . ' Berhasil dihapus!</div>');
        redirect('admin/kandu');
    }
    public function editukm($id)
    {
        $data['title'] = 'Kementerian & UKM';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kem'] = $this->db->get_where('ukm', ['id' => $id])->row_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editukm', $data);
            $this->load->view('templates/footer');
        } else {
        }
    }

    public function kandu()
    {
        $data['title'] = 'Kementerian & UKM';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kem'] = $this->db->get('kementerian')->result_array();
        $data['ukm'] = $this->db->get('ukm')->result_array();

        $this->form_validation->set_rules('name', 'Keyword', 'required|trim');
        $this->form_validation->set_rules('desk', 'Keyword', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/kandu', $data);
            $this->load->view('templates/footer');
        } else {
            //cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];


            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/logo/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $gambar = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = [
                'nama' => $this->input->post('name'),
                'desk' => $this->input->post('desk'),
                'logo' => $gambar
            ];

            $this->db->insert('kementerian', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kementerian berhasil di tambah</div>');
            redirect('admin/kandu');
        }
    }
    public function addukm()
    {
        $this->form_validation->set_rules('name', 'Keyword', 'required|trim');
        $this->form_validation->set_rules('desk', 'Keyword', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal format data tidak sesuai!</div>');
            redirect('admin/kandu');
        } else {
            //cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];


            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/logo/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $gambar = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = [
                'nama' => $this->input->post('name'),
                'desk' => $this->input->post('desk'),
                'logo' => $gambar
            ];

            $this->db->insert('ukm', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">UKM berhasil di tambah</div>');
            redirect('admin/kandu');
        }
    }

    public function profile()
    {
        $data['title'] = 'Home Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['org'] = $this->db->get_where('prof_org', ['id' => 1])->row_array();
        $data['bph'] = $this->db->get('bph')->result_array();
        $data['rand'] = "";

        $this->form_validation->set_rules('name', 'Keyword', 'required|trim');
        $this->form_validation->set_rules('igs', 'Keyword', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Keyword', 'required|trim');
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/profile', $data);
            $this->load->view('templates/footer', $data);
        } else {
            //cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];


            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/team/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $gambar = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = [
                'nama' => $this->input->post('name'),
                'ig' => $this->input->post('igs'),
                'jabatan' => $this->input->post('jabatan'),
                'image' => $gambar
            ];
            $this->db->insert('bph', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anggota BPH berhasil ditambahkan!</div>');
            redirect('admin/profile');
        }
    }
    public function delbph($id)

    {
        $img_post = $this->db->get_where('bph', ['id' => $id])->row_array();
        unlink(FCPATH . 'assets/img/team/' . $img_post['image']);
        $this->db->delete('bph', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">BPH Berhasil dihapus!</div>');
        redirect('admin/profile');
    }
    public function delmsg($id)

    {
        $this->db->delete('message', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesan Berhasil dihapus!</div>');
        redirect('admin/message');
    }

    public function viewmsg($id)
    {
        $data['title'] = 'Contact Us';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['message'] = $this->db->get_where('message', ['id' => $id])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/viewmsg', $data);
        $this->load->view('templates/footer', $data['title']);
    }

    public function editbph($id)
    {
        $data['title'] = 'Edit BPH';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['bph'] = $this->db->get_where('bph', ['id' => $id])->row_array();


        $this->form_validation->set_rules('name', 'Keyword', 'required|trim');
        $this->form_validation->set_rules('igs', 'Keyword', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Keyword', 'required|trim');
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editbph', $data);
            $this->load->view('templates/footer', $data['title']);
        } else {
            $upload_image = $_FILES['image']['name'];
            //cek jika ada gambar yang akan diupload
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/team/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['bph']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/team/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }



            $data = [
                'nama' => $this->input->post('name'),
                'ig' => $this->input->post('igs'),
                'jabatan' => $this->input->post('jabatan'),
            ];
            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('bph');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anggota BPH berhasil diedit!</div>');
            redirect("admin/editbph/$id");
        }
    }

    public function editpprof()
    {
        $this->form_validation->set_rules('nama', 'Keyword', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Keyword', 'required|trim');
        $this->form_validation->set_rules('desk', 'Keyword', 'required|trim');
        $this->form_validation->set_rules('email', 'Keyword', 'required|trim|valid_email');
        $this->form_validation->set_rules('no', 'Keyword', 'required|trim|numeric');
        $this->form_validation->set_rules('no2', 'Keyword', 'required|trim|numeric');
        $this->form_validation->set_rules('ig', 'Keyword', 'required|trim');
        $this->form_validation->set_rules('yt', 'Keyword', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal format data tidak sesuai!</div>');
            redirect('admin/profile');
        } else {
            //cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];


            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/logo/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $gambar = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = [
                'nama' => $this->input->post('nama'),
                'logo' => $gambar,
                'alamat' =>  $this->input->post('alamat'),
                'desk' =>  $this->input->post('desk'),
                'email' =>  $this->input->post('email'),
                'no1' =>  $this->input->post('no'),
                'no2' =>  $this->input->post('no2'),
                'ig' =>  $this->input->post('ig'),
                'yt' =>  $this->input->post('yt'),
            ];

            $this->db->set($data);
            $this->db->where('id', 1);
            $this->db->update('prof_org');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile Organisasi berhasil diedit!</div>');
            redirect('admin/profile');
        }
    }

    public function message()
    {
        $data['title'] = 'Contact Us';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['message'] = $this->db->get('message')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/message', $data);
        $this->load->view('templates/footer', $data['title']);
    }

    public function anggota()
    {
        $data['title'] = 'Data Anggota';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->db->order_by("angkatan asc, nama asc")->get('data_anggota')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/anggota', $data);
        $this->load->view('templates/footer', $data['title']);
    }


    public function pendaftaran()
    {
        $data['title'] = 'Pendaftaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pendaftaran'] = $this->db->get('pendaftaran')->result_array();

        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required|trim');
        $this->form_validation->set_rules('mulai', 'Mulai', 'required|trim');
        $this->form_validation->set_rules('berakhir', 'Berakhir', 'required|trim');

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/pendaftaran', $data);
            $this->load->view('templates/footer', $data['title']);
        } else {
            $str = strtotime($this->input->post('mulai'));
            $end = strtotime($this->input->post('berakhir'));
            $data = [
                'angkatan' => $this->input->post('angkatan'),
                'status' => "1",
                'started' => $str,
                'end' => $end
            ];
            $this->db->insert('pendaftaran', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jadwal pendaftaran berhasil ditambahkan!</div>');
            redirect('admin/pendaftaran');
        }
    }
    public function editpendaftaran($id)
    {
        $data['title'] = 'Edit Jadwal Pendaftaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pendaftaran'] = $this->db->get_where('pendaftaran', ['id' => $id])->row_array();


        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required|trim');
        $this->form_validation->set_rules('mulai', 'Mulai', 'required|trim');
        $this->form_validation->set_rules('berakhir', 'Berakhir', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editpen', $data);
            $this->load->view('templates/footer', $data['title']);
        } else {
            $angkatan = $this->input->post('angkatan');
            $str = strtotime($this->input->post('mulai'));
            $end = strtotime($this->input->post('berakhir'));


            $this->db->set('angkatan', $angkatan);
            $this->db->set('started', $str);
            $this->db->set('end', $end);
            $this->db->where('id', $id);
            $this->db->update('pendaftaran');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jadwal Pendaftaran berhasil diubah!</div>');
            redirect("admin/editpendaftaran/$id");
        }
    }

    public function role()
    {
        $data['title'] = 'Role';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer', $data['title']);
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New role added!</div>');
            redirect('admin/role');
        }
    }
    public function roledelete($role_id)
    {
        $this->db->delete('user_role', ['id' => $role_id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role deleted!</div>');
        redirect('admin/role');
    }

    public function roleaccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer', $data['title']);
    }
    public function roleedit($role_id)
    {
        $data['title'] = 'Role Edit';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-edit', $data);
        $this->load->view('templates/footer', $data['title']);
    }

    public function editrole()
    {
        $role_id = $this->input->post('idrole');
        $roleedit = $this->input->post('role');


        $this->db->set('role', $roleedit);
        $this->db->where('id', $role_id);
        $this->db->update('user_role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role name edited!</div>');
        redirect("admin/roleedit/$role_id");
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);


        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }

    public function detailpendaftar($p_id)
    {
        $data['title'] = 'Detail Pendaftar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['datap'] = $this->db->get_where('data_pendaftar', ['id' => $p_id])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/footer', $data['title']);
    }
    public function detailanggota($p_id)
    {
        $data['title'] = 'Detail Anggota';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['datap'] = $this->db->get_where('data_anggota', ['id' => $p_id])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detailanggota', $data);
        $this->load->view('templates/footer', $data['title']);
    }


    // Blog
    public function myblog()
    {
        $data['title'] = 'My Blog';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();



        $data['cat'] = $this->db->get('blog_kategori')->num_rows();
        $data['jmlhadmin'] = $this->db->get_where('user', ['is_active' => '1', 'role_id' => '1'])->num_rows();
        $data['jmlhpost'] = $this->db->get_where('artikel', ['status' => 1])->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('blog/index', $data);
        $this->load->view('templates/footer');
    }

    public function post()
    {
        $data['title'] = 'Postingan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Post_model', 'post');

        $data['artikel'] = $this->post->getPost();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('blog/post', $data);
        $this->load->view('templates/footer');
    }

    public function addpost()
    {
        $data['title'] = 'Buat Postingan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Post_model', 'post');
        $data['kategori'] = $this->db->get('blog_kategori')->result_array();
        $foot['kem'] = $this->db->select('id, nama')->get('kementerian')->result_array();

        $this->form_validation->set_rules('judul', 'Judul Postingan', 'required|trim');


        function Getrandstr($l)
        {
            $str = "";
            $char = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
            $max = strlen($char) - 1;
            for ($i = 0; $i < $l; $i++) {
                $rand = mt_rand(0, $max);
                $str .= $char[$rand];
            }
            return $str;
        }
        $rand_id = Getrandstr(6);

        $this->session->userdata('rand_id') ?: $this->session->set_userdata('rand_id', $rand_id);



        $foot['rand'] = $this->session->userdata('rand_id');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('blog/addpost', $data);
            $this->load->view('templates/footer', $foot);
        } else {

            //cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];


            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/post/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $gambar = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }
            if ($this->input->post('0') !== null) {
                $status = '0';
            } elseif ($this->input->post('1') !== null) {
                $status = '1';
            }
            $slug = urlencode(strtolower(str_replace(' ', '-', $this->input->post('judul'))));
            $id_penulis = $data['user']['id'];

            $data = [
                'judul' => $this->input->post('judul'),
                'penulis' => $id_penulis,
                'slug' => $slug,
                'gambar' => $gambar,
                'isi' => $this->input->post('isi'),
                'kategori' => $this->input->post('kategori'),
                'tag' => $this->input->post('tag'),
                'tanggal' => date('Y-m-d'),
                'rand_id' => $this->session->userdata('rand_id'),
                'status' => $status
            ];

            $tambah = $this->db->insert('artikel', $data);
            if ($tambah) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menambahkan postingan!.</div>');
                $this->session->unset_userdata('rand_id');
                redirect('admin/addpost');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal menambahkan postingan!.</div>');
                $this->session->unset_userdata('rand_id');
                redirect('admin/addpost');
            }
        }
    }

    public function editpost($post_id)
    {
        $data['title'] = 'Postingan';
        $data['title2'] = 'Edit Postingan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Post_model', 'post');

        $data['kategori'] = $this->db->get('blog_kategori')->result_array();
        $data['artikel'] = $this->post->getEditPost($post_id);

        $foot['rand'] = $data['artikel']['rand_id'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('blog/editpost', $data);
        $this->load->view('templates/footer', $foot);
    }

    public function edited($id)
    {
        $data['artikel'] = $this->db->get_where('artikel', ['id' => $id])->row_array();
        $upload_image = $_FILES['foto']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/post/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $old_image = $data['artikel']['gambar'];
                unlink(FCPATH . 'assets/img/post/' . $old_image);
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $slug = str_replace(' ', '-', $this->input->post('judul'));
        $data = [
            'judul' => $this->input->post('judul'),
            'slug' => $slug,
            'isi' => $this->input->post('isi'),
            'kategori' => $this->input->post('kategori'),
            'tag' => $this->input->post('tag'),
            'status' => $data['artikel']['status']
        ];
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('artikel');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Postingan berhasil di edit</div>');
        redirect("admin/post");
    }

    public function pub($id)
    {
        $data = [
            'status' => '1'
        ];
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('artikel');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Postingan berhasil di Publikasikan</div>');
        redirect("admin/post");
    }

    public function draft($id)
    {
        $data = [
            'status' => '0'
        ];
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('artikel');
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Postingan berhasil di kembalikan ke draft</div>');
        redirect("admin/post");
    }

    public function delpost($post_id)
    {
        $img_post = $this->db->get_where('artikel', ['id' => $post_id])->row_array();
        $del = $img_post['rand_id'];
        function delpostfiles($del)
        {

            $filter = strtolower($del);
            $folder = FCPATH . 'assets/img/post/';
            $proses = new RecursiveDirectoryIterator($folder);
            foreach (new RecursiveIteratorIterator($proses) as $file) {
                if (!((strpos(strtolower($file), $filter)) === false) || empty($filter)) {
                    $tampil[] = preg_replace("#/#", "/", $file);
                }
            }
            if ($tampil) {
                foreach ($tampil as $t) {
                    $cek = explode("assets/img/post\\", $t);
                    unlink(FCPATH . 'assets/img/post/' . $cek[1]);
                }
            }
        }
        unlink(FCPATH . 'assets/img/post/' . $img_post['gambar']);
        delpostfiles($del);
        $this->db->delete('artikel', ['id' => $post_id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Postingan Berhasil dihapus!</div>');
        redirect('admin/post');
    }

    public function addkategori()
    {
        $data['title'] = 'Buat Kategori';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['cat'] = $this->db->get('blog_kategori')->result_array();

        $this->form_validation->set_rules('nama', 'Nama Kategori', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('blog/addcat', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('blog_kategori', ['nama' => $this->input->post('nama')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori baru berhasil ditambahkan!</div>');
            redirect('admin/addkategori');
        }
    }
    public function upeditor($r)
    {
        $upload_image = $_FILES['upload']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/post/';
            $config['file_name'] = $r . time();

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('upload')) {
                $namess = $this->upload->data('file_name');
                // $function_number = $_GET['CKEditorFuncNum'];
                $url = base_url() . 'assets/img/post/' . $namess;
                echo $url;
            } else {
                echo $this->upload->display_errors();
            }
        }
    }
}
