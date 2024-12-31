<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result_model extends CI_Model {

    public function save($data) {
        $this->db->insert('results', $data);
        return $this->db->insert_id();
    }

    public function get($id) {
        return $this->db->get_where('results', ['id' => $id])->row();
    }

    public function get_categories($method_id) {
        return $this->db->get_where('categories', ['method_id' => $method_id])->result();
    }
}
