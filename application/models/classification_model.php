<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Classification_model extends CI_Model
{

    public function get_all()
    {
        return $this->db->get('tb_statlog')->result_array();
    }
}

/* End of file Classification_model.php */
