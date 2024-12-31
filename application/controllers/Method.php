<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Method extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
        $this->load->model('Method_model');
    }

    public function index() {
        $data['methods'] = $this->Method_model->get_all();
        $this->load->view('admin/method/index', $data);
    }

    public function create() {
        $this->load->view('admin/method/create');
    }

    public function store() {
        $this->Method_model->insert([
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description')
        ]);
        redirect('method');
    }

    public function edit($id) {
        $data['method'] = $this->Method_model->get($id);
        $this->load->view('admin/method/edit', $data);
    }

    public function update($id) {
        $this->Method_model->update($id, [
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description')
        ]);
        redirect('method');
    }

    public function delete($id) {
        $this->Method_model->delete($id);
        redirect('method');
    }
}
