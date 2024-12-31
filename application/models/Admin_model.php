<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function check_login($username, $password)
    {
        // Cari user berdasarkan username
        $this->db->where('username', $username);
        $user = $this->db->get('users')->row();

        // Cek apakah user ditemukan dan password sesuai
        if ($user) {
            if (password_verify($password, $user->password)) {
                return $user; // Login berhasil, kembalikan data user
            } else {
                return false; // Password salah
            }
        }
        return false; // Username tidak ditemukan
    }
}
