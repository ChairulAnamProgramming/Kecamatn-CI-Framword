<?php
class Karyawan_model extends CI_model
{
	public function employee()
	{
		return $this->db->get('users')->result_array();
	}
	public function employeeById($id)
	{
		return $this->db->get_where('users', ['id' => $id])->row_array();
	}

	public function getKades()
	{

		return $this->db->get('table_kades')->row_array();
	}

	public function getCamat()
	{
		return $this->db->get_where('table_seksi', ['jabatan' => 'Camat Daha Utara'])->row_array();
	}
}
