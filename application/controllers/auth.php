<?php
	class Auth extends CI_Controller{
		public function login()
		{
			$this->load->view('login');
			
		}
		public function log()
		{
			$this->load->view('login');
			$auth= $this->model_auth->cek_login();
			redirect('dashboard');

			$this->session->set_userdata('username',$auth->username);
			$this->session->set_userdata('role_id',$auth->role_id);
			$this->session->set_userdata('password',$auth->password);
		}


}