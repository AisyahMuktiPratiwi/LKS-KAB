<?php
	class Kategori extends CI_Controller{
		public function pakaianwanita()
		{
			$data['pakaianwanita'] = $this->model_kategori->
			data_pakaianwanita()->result();
			$this->load->view('pakaianwanita',$data);
		}

		public function pakaianpria()
		{
			$data['pakaianpria'] = $this->model_kategori->
			data_pakaianpria()->result();
			$this->load->view('pakaianpria',$data);
		}
		public function sendal()
		{
			$data['sendal'] = $this->model_kategori->
			data_sendal()->result();
			$this->load->view('sendal',$data);
		}
		public function tas()
		{
			$data['tas'] = $this->model_kategori->
			data_tas()->result();
			$this->load->view('tas',$data);
		}
		public function jam()
		{
			$data['jam'] = $this->model_kategori->
			data_jam()->result();
			$this->load->view('jam',$data);
		}
	}