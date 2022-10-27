<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Excel_model extends CI_Model
{

    public function GetData()
    {
        return $this->db->get('data_pendaftar')->result_array();
    }
}
