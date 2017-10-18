<?php

class Model_futsal extends CI_Model {
	function cek_login($username, $password) {
	    $this->db->where('username',$username);
		$this->db->where('password', $password);
		return $this->db->get('user');
	}
function tampil_lapangan(){
		$query = $this->db->get('lapangan');
		return $query->result_array();
	}
	
	function tampil_bayar(){
		$query2 = $this->db->get('transaksi');
		return $query2->result_array();
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_data($where, $table) {
    return $this->db->get_where($table,$where);
  }

  function update_data($where,$data,$table) {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }
}
?>