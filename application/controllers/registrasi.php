
<?php
	class Registrasi extends CI_Controller{

	public function regis()
		{
			$this->load->view('registrasi');
		}
		public function register()
		{
			$this->load->view('registrasi');

			
			$data = array(
					'id'=>'',
					'nama' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'role_id' => 2,
				);
			
			redirect('auth/login');
		
		}
	}