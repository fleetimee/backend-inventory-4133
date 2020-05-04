<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Department_model');
	}

	public function index()
	{
		echo "index department";
	}


	public function list_department()
	{
		$data_deparment = $this->Department_model->get_department();
        $number = 1;

        $konten = '<tr>
            <td>No</td>
			<td>Nama Department</td>
			<td>Aksi</td>
        </tr>';
        

		foreach ($data_deparment->result() as $key => $value) {
            $konten .= '<tr>
                            <td>'.$number++.'</td>
							<td>'.$value->nama_departemen.'</td>
							<td>Read | Hapus | Edit</td>
						</tr>';
		}


		$data_json = array(
			'konten' => $konten,
		);
		echo json_encode($data_json);
	}
}