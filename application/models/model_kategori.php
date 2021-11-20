<?php
 class Model_kategori extends CI_Model{
 	public function data_pakaianwanita(){
 		 return $this->db->get_where("tb_barang",array('
 		 	kategori' =>'pakaianwanita'));
	}
	public function data_pakaianpria(){
 		 return $this->db->get_where("tb_barang",array('
 		 	kategori' =>'pakaianpria'));
	}
	public function data_sendal(){
 		 return $this->db->get_where("tb_barang",array('
 		 	kategori' =>'sendal'));
	}
	public function data_tas(){
 		 return $this->db->get_where("tb_barang",array('
 		 	kategori' =>'tas'));
	}
	public function data_jam(){
 		 return $this->db->get_where("tb_barang",array('
 		 	kategori' =>'jam'));
	}

}
