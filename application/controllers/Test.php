<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Question_model');
        $this->load->model('Result_model');
        $this->load->model('Method_model');
    }

    public function index($method_id) {
        $data['questions'] = $this->Question_model->get_by_method($method_id);
        $data['method'] = $this->Method_model->get($method_id);
        $this->load->view('test/index', $data);
    }

    public function submit($method_id) {
        $questions = $this->Question_model->get_by_method($method_id);
        $total_score = 0;

        foreach ($questions as $question) {
            $answer = $this->input->post('question_' . $question->id);
            $total_score += intval($answer);
        }

        // Simpan hasil tes ke database
        $result_id = $this->Result_model->save([
            'method_id' => $method_id,
            'email' => $this->input->post('email'),
            'total_score' => $total_score,
        ]);

        redirect('test/result/' . $result_id);
    }

    public function result($result_id) {
        $result = $this->Result_model->get($result_id);
        $method = $this->Method_model->get($result->method_id);

        $data['result'] = $result;
        $data['method'] = $method;

        // Tentukan kategori berdasarkan skor total
        $categories = $this->Result_model->get_categories($method->id);
        foreach ($categories as $category) {
            if ($result->total_score >= $category->min_score && $result->total_score <= $category->max_score) {
                $data['category'] = $category;
                break;
            }
        }

        $this->load->view('test/result', $data);
    }
}
