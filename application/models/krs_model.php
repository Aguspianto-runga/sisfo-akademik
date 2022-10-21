<?php

class Krs_model extends CI_Model{

    public $table = 'krs';
    public $id = 'id_krs';

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    public function update($id_krs, $data)
    {
        $this->db->where($this->id, $id_krs);
        $this->db->update($this->table, $data);
    }

}