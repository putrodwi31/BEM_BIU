<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // validasinya Success
            $this->_login();
        }
    }


    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth');
        }
    }


    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Member Regitration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()
            ];

            // siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()

            ];
            $send = $this->_sendEmail($token, 'verify');
            if ($send) {
                $this->db->insert('user', $data);
                $this->db->insert('user_token', $user_token);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please activate your account.</div>');
                redirect('auth');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed! send activate code to your email account.</div>');
                redirect('auth/registration');
            }
        }
    }





    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'pmr2kotabekasiofficial@gmail.com',
            'smtp_pass' => 'qnyaugakeczanoww',
            'smtp_crypto' => 'ssl',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'crlf' => "\r\n",
            'newline' => "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from('pmr2kotabekasiofficial@gmail.com', 'Pemdusi Web Dev');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message('
            <html>
                <head></head>
                <body style="font-family: sans-serif; font-size: 14px; color: #333;">
                
                <div id="email-heading" style="max-width: 400px; padding: 15px; background: #337ab7; color: #fff; font-size: 22px; text-align: center;">
                <span>Verifikasi Email</span>
                </div>
                
                
                <div id="email-container" style="max-width: 400px; padding: 15px; background: #fff;">
                
                <div id="email-content">
                
                
                Hai!,
                Akun anda berhasil terdaftar. Langkah selanjutnya adalah verifikasi email anda dengan mengklik tombol di bawah ini.
                
                
                <div style="text-align: center;margin: 40px 0;">
                <a style="display: inline-block; text-decoration: none; color: #fff; padding: 15px; background: #337ab7; border-radius: 4px; font-size: 18px; box-shadow: 1px 1px 1px 1px #333;" href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Verifikasi Email</a>
                </div>
                
                </div>
                
                </div>
                
                </body>
                </html>
            ');
        } elseif ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('            
            <html>
                <head></head>
                <body style="font-family: sans-serif; font-size: 14px; color: #333;">
                
                <div id="email-heading" style="max-width: 400px; padding: 15px; background: #b73333; color: #fff; font-size: 22px; text-align: center;">
                <span>Reset Password</span>
                </div>
                
                
                <div id="email-container" style="max-width: 400px; padding: 15px; background: #fff;">
                
                <div id="email-content">
                
                
                Hai!,
                Permintaan reset password anda kami terima, Abaikan email ini jika anda tidak melakukanya. Langkah selanjutnya adalah mengganti password anda dengan mengklik tombol di bawah ini.
                
                
                <div style="text-align: center;margin: 40px 0;">
                <a style="display: inline-block; text-decoration: none; color: #fff; padding: 15px; background: #b73333; border-radius: 4px; font-size: 18px; box-shadow: 1px 1px 1px 1px #333;" href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>
                </div>
                
                </div>
                
                </div>
                
                </body>
                </html>            
            ');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');
                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' has been activated! Please login.</div>');
                    redirect('auth');
                } else {
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Token expired.</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Wrong token.</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Wrong email.</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }


    public function blocked()
    {
        $this->load->view('auth/blocked');
    }

    public function pendataananggota()
    {
        $data['title'] = 'Pendataan Anggota PMR SMK Negeri 2 Kota Bekasi';

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('ttl', 'Tempat/Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('nisn', 'Nomor NISN', 'required|trim|numeric');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
        $this->form_validation->set_rules('goldar', 'Golongan Darah', 'required|trim');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('nomor', 'No Telepon', 'required|trim|numeric');
        $this->form_validation->set_rules('email', 'E-Mail', 'required|trim');
        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required|trim');
        $this->form_validation->set_rules('divisi', 'Divisi', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('auth/daftar', $data);
        } else {
            $nama = $this->input->post('nama');
            $ttl = $this->input->post('ttl');
            $nisn = $this->input->post('nisn');
            $kelas = $this->input->post('kelas');
            $goldar = $this->input->post('goldar');
            $gender = $this->input->post('gender');
            $agama = $this->input->post('agama');
            $alamat = $this->input->post('alamat');
            $nomor = $this->input->post('nomor');
            $email = $this->input->post('email');
            $angkatan = $this->input->post('angkatan');
            $divisi = $this->input->post('divisi');
            $ceknama = $this->db->get_where('data_anggota', ['nama' => $nama])->row_array();
            if ($ceknama > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Nama anda sudah terdaftar, Silahkan hubungi admin untuk perubahan data</div>');
                redirect('auth/pendataananggota');
            } else {
            $data = [

                'nama' => $nama,
                'ttl' => $ttl,
                'nisn' => $nisn,
                'kelas' => $kelas,
                'goldar' => $goldar,
                'gender' => $gender,
                'agama' => $agama,
                'alamat' => $alamat,
                'nomor' => $nomor,
                'email' => $email,
                'angkatan' => $angkatan,
                'divisi' => $divisi
            ];
            $this->db->insert('data_anggota', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pendataan Berhasil, silahkan tunggu konfirmasi dari admin.</div>');
            redirect('auth/pendataananggota');
            }
        }
    }

    public function forgotpassword()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Forgot Password';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/forgot-password');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();
            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Please check your email to reset your password!</div>');
                redirect('auth/forgotpassword');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered or activated!</div>');
                redirect('auth/forgotpassword');
            }
        }
    }

    public function resetPassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');


        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong Token.</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong Email.</div>');
            redirect('auth');
        }
    }

    public function changePassword()
    {

        if (!$this->session->userdata('reset_email')) {
            redirect('auth');
        }
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat New Password', 'required|trim|min_length[6]|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Change Password';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/change-password');
            $this->load->view('templates/auth_footer');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');


            $this->session->unset_userdata('reset_email');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password has been changed! Please login.</div>');
            redirect('auth');
        }
    }
}
