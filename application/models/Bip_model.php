<?php
class Bip_model extends CI_model
{

    public function getBip()
    {
       return $this->db->get("table_bip")->result_array();
    }

    public function getBipById($id)
    {
       return $this->db->get_where("table_bip",['nik'=>$id])->row_array();
    }
}