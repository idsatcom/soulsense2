<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question_model extends CI_Model {

    public function get_by_method($method_id) {
        return $this->db->get_where('questions', ['method_id' => $method_id])->result();
    }

    public function get($id) {
        return $this->db->get_where('questions', ['id' => $id])->row();
    }

    public function insert($data) {
        $this->db->insert('questions', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('questions', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('questions');
    }
}
