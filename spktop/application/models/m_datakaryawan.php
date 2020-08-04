<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_datakaryawan extends CI_Model
{

    private $table = 'datakaryawan';
    private $primary_key = 'id_karyawan';

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function getId($id)
    {
        return $this->db->get_where($this->table, array($this->primary_key => $id))->result();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function edit($id, $data)
    {
        $this->db->update($this->table, $data, array($this->primary_key => $id));
    }

    public function delete($id)
    {
        $this->db->delete($this->table, array($this->primary_key => $id));
    }

    function jukuk_karyawan()
    {
        $q = $this->db->query("select MAX(RIGHT(id_karyawan,3)) as kd_max from datakaryawan");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%03s", $tmp);
            }
        } else {
            $kd = "1";
        }
        return "A" . $kd;
    }
    
    function insertData($table, $data)
    {
        $this->db->insert($table, $data);
    }
}
