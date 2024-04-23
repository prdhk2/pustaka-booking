<?php

class Def_models extends CI_Model
{
    public function get_data() {
        $query = $this->db->get('user');
        return $query->row_array();
    }
}
