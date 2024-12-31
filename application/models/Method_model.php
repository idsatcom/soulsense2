<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Method_model extends CI_Model {

    public function get_all() {
        return $this->db->get('methods')->result();
    }

    public function get($id) {
        return $this->db->get_where('methods', ['id' => $id])->row();
    }

    public function insert($data) {
        $this->db->insert('methods', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('methods', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('methods');
    }
}
