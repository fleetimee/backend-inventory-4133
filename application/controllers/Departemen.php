<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Departemen_model');
	}

	public function index()
	{
		echo "index";
	}


	public function list_barang()
	{
		$data_barang = $this->Departemen_model->get_departemen();


		$konten = '<tr>
			<td>Nama</td>
			<td>Deskripsi</td>
			<td>Stok</td>
			<td>Aksi</td>
		</tr>';

		foreach ($data_barang->result() as $key => $value) {
			$konten .= '<tr>
							<td>'.$value->nama_barang.'</td>
							<td>'.$value->deskripsi.'</td>
							<td>'.$value->stok.'</td>
							<td>Read | Hapus | Edit</td>
						</tr>';
		}


		$data_json = array(
			'konten' => $konten,
		);
		echo json_encode($data_json);
	}
}