<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function index(){
		$data = $this->modelku->getBarang();
		$this->load->view('tabel',array('data' => $data));

	}

	public function edit_data($kode_barang){
		$barang = $this->modelku->getBarang("where kode_barang = $kode_barang");
		$data = array(
			"kode_barang" => $barang[0]['kode_barang'],
			"nama_barang" => $barang[0]['nama_barang'],
			"jumlah" => $barang[0]['jumlah'],
			"harga" => $barang[0]['harga'],
			 );
		$this->load->view('form_edit',$data);

	}
	public function do_update(){

		$kode_barang = $_POST['kode_barang'];
		$nama_barang = $_POST['nama_barang'];
		$tambah = $_POST['tambah'];
		$jumlah =  $_POST['jumlah'] + $tambah;
		
		$harga = $_POST['harga'];
		$data_update = array('nama_barang' => $nama_barang, 'jumlah' => $jumlah , 'harga' =>$harga);
		$where = array('kode_barang' => $kode_barang);
		$res = $this->modelku->UpdateData('barang',$data_update,$where);
		if($res>=1){
			redirect('crud/index');
		}
	}

	public function do_delete($kode_barang){
		$where = array('kode_barang' => $kode_barang);
		$res = $this ->modelku->DeleteData('barang',$where); 
		if($res>=1){
			redirect('crud/index');
		}

	}
	}

