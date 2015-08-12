<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	
	public function index(){
		echo 'you got me';
	}

	public function home(){
		echo 'home me';
	}

	public function all_user(){
		$this->load->model('user_model');
		$data['all_user'] = $this->user_model->get_user();

		$this->load->view('all_user', $data);
		

	}
}