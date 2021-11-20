<?php
	class Logadmin extends CI_Controller{
		public function login()
		{

			$this->load->view('logmin');
			
		}
		public function logiin()
		{

			$this->load->view('logmin');
			$auth= $this->model_auth->cek_login();
			$this->session->set_userdata('username',$auth->username);
			$this->session->set_userdata('role_id',$auth->role_id);
			$this->session->set_userdata('password',$auth->password);
			redirect('admin/dashboard_admin');
		}
}