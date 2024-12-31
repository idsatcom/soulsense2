<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
        $this->load->model('Question_model');
        $this->load->model('Method_model'); // Untuk mengambil metode tes
    }

    public function index($method_id) {
        $data['questions'] = $this->Question_model->get_by_method($method_id);
        $data['method'] = $this->Method_model->get($method_id);
        $this->load->view('admin/question/index', $data);
    }

    public function create($method_id) {
        $data['method'] = $this->Method_model->get($method_id);
        $this->load->view('admin/question/create', $data);
    }

    public function store($method_id) {
        $this->Question_model->insert([
            'method_id' => $method_id,
            'question' => $this->input->post('question'),
            'score' => $this->input->post('score')
        ]);
        redirect('question/index/' . $method_id);
    }

    public function edit($id) {
        $data['question'] = $this->Question_model->get($id);
        $data['method'] = $this->Method_model->get($data['question']->method_id);
        $this->load->view('admin/question/edit', $data);
    }

    public function update($id) {
        $question = $this->Question_model->get($id);
        $this->Question_model->update($id, [
            'question' => $this->input->post('question'),
            'score' => $this->input->post('score')
        ]);
        redirect('question/index/' . $question->method_id);
    }

    public function delete($id) {
        $question = $this->Question_model->get($id);
        $this->Question_model->delete($id);
        redirect('question/index/' . $question->method_id);
    }
}
