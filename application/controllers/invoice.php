<?php
	class invoice extends CI_Controller{
		public function  detail($id_invoice)
		{

			$data['invoice']->model_barang->ambil_id_invoice($id_invoice);
			$data['pesanan']->model_barang->ambil_id_pesanan($id_pesanan);
			$this->load->view('detail_invoice',$data);
					}
		}