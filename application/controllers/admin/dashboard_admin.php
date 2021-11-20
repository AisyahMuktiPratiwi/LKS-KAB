<?php
	class dashboard_admin extends CI_Controller{
		public function  index()
		{
			$data['barang'] =  $this->model_barang->tampil_data()->result();
			$this->load->view('admin/dashboard');
		}
		public function tampil_pembayaran(){
		$data['invoice'] =  $this->model_barang->tampil_bayar()->result();
		$this->load->view('list_pembayaran', $data);
	}
	

	}

