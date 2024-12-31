<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        // Jika pengguna sudah login, arahkan ke halaman admin
        if ($this->session->userdata('logged_in')) {
            redirect('admin');
        }
        $this->load->view('login');
    }

    public function process() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Verifikasi login
        $user = $this->User_model->login($username, $password);
        if ($user) {
            // Set session
            $this->session->set_userdata([
                'logged_in' => TRUE,
                'username'  => $user->username,
                'role'      => $user->role
            ]);
            redirect('admin');
        } else {
            $this->session->set_flashdata('error', 'Username atau Password salah.');
            redirect('login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
