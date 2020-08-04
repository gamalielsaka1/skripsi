<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_hasil extends CI_Model
{
    private $table = 'bobotkriteria';

    public function umur()
    {
    }


    function getData()
    {
        $this->db->select('bobot');
        $this->db->from('kriteria');

        $query = $this->db->get();

        if ($query->num_rows() > 0 ) {
            $row = $query->row_array();
            return $row;
        }
    }

   

    
}