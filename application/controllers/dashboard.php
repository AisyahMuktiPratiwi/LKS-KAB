<?php
	class dashboard extends CI_Controller{
		public function  index()
		{
			$data['barang'] =  $this->model_barang->tampil_data()->result();
			$this->load->view('dashboard', $data);
		}

		public function tambah_ke_keranjang($id)
		{
			$barang = $this->model_barang->find($id);


			$data = array(
				'id'	=>$barang->id_brg,
				'qty'	=>1,
				'price'	=>$barang->harga,
				'name'	=>$barang->nama_brg

			);

			$this->cart->insert($data);
			$this->model_barang->tampil_bayar($data);
			redirect('dashboard');
		}

		public function detail_keranjang()
		{
		$this->load->view('keranjang');

		}

		

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('dashboard');
	}

	public function pembayaran()
	{
		
		$this->load->view('pembayaran');		
	}
	public function bayar()
		{
			$nama_user	= $this->input->post('nama_user');
			$alamat	= $this->input->post('alamat');
			$no_hp	= $this->input->post('no_hp');
			$metode		= $this->input->post('metode');
			$rekening		= $this->input->post('rekening');
			$bukti = $_FILES['bukti']['name'];

			$data = array(
				'nama_user' => $nama_user,
				'alamat' => $alamat,
				'no_hp' => $no_hp,
				'metode' => $metode,
				'rekening' => $rekening,
				'bukti' => $bukti
			);

			$this->model_barang->tambah_invoice($data,'tb_invoice');
			$this->load->view('pembayaran');
			
			redirect('dashboard/checkout');
			
		}


	public function checkout()
	{
		
		$this->load->view('pesan');
		
		
	}
	public function detail($id_brg)
	{
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
		$this->load->view('detail_barang',$data);
	}
}