<?php

class Def_models extends CI_Model
{
    public function get_data() { //tabel user data

        $query = $this->db->get('user');
        return $query->row_array();

    }
    public function detail_mtk() { //tabel matakuliah

        $query = $this->db->get('mata_kuliah');
        return $query->result_array();

    }

    public function updateMtk($table, $where, $data) { //update data mata kuliah
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
