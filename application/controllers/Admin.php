<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load model, form validation, dan library session
        $this->load->model('Admin_model');
        $this->load->library(['form_validation', 'session']);
        $this->load->helper('url');
    }

    public function login()
    {
        // Jika user sudah login, langsung ke dashboard
        if ($this->session->userdata('user_data')) {
            redirect('admin/dashboard');
        }

        $this->load->view('admin/login');
    }

    public function authenticate()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Kembali ke halaman login jika validasi gagal
            $this->load->view('admin/login');
        } else {
            // Ambil data username dan password dari form
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            // Verifikasi username dan password
            $user = $this->Admin_model->check_login($username, $password);

            if ($user) {
                // Set session user jika login berhasil
                $this->session->set_userdata('user_data', $user);
                redirect('admin/dashboard');
            } else {
                // Jika login gagal, tampilkan pesan error
                $this->session->set_flashdata('error', 'Username atau password salah');
                redirect('admin/login');
            }
        }
    }

    public function logout()
    {
        // Hapus session dan redirect ke halaman login
        $this->session->unset_userdata('user_data');
        redirect('admin/login');
    }

    public function dashboard()
    {
        // Cek apakah user sudah login
        if (!$this->session->userdata('user_data')) {
            redirect('admin/login');
        }

        $this->load->view('admin/dashboard');
    }

    public function add_user()
    {
        $this->form_validation->set_rules('new_username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('new_password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == FALSE) {
        $this->session->set_flashdata('error', validation_errors());
        redirect('admin/login');
        } else {
        $data = [
            'username' => $this->input->post('new_username'),
            'password' => password_hash($this->input->post('new_password'), PASSWORD_BCRYPT),
            'role' => $this->input->post('role')
        ];
        $this->db->insert('users', $data);
        $this->session->set_flashdata('success', 'Admin baru berhasil ditambahkan!');
        redirect('admin/login');
        }
    }

    public function questions()
    {
    $data['questions'] = $this->QuestionModel->getAll(); // Ambil data dari model
    return view('admin/question/index', $data);
    }



}
