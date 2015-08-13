<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	
	public function index(){
		echo 'you got me';
	}

	public function create(){
		$this->load->view('create_user');
	}

	public function store(){
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		
		$this->load->model('user_model');
		$a = $this->user_model->store($data);
		if($a){
			echo 'data successfully inserted';
		}
	}

	public function all_user(){
		$this->load->model('user_model');
		$data['all_user'] = $this->user_model->get_user();
		$this->load->view('all_user', $data);	
	}

	public function delete($id){
		$this->load->model('user_model');
		$this->user_model->delete($id);

		echo 'data deleted successfully';
	}
}