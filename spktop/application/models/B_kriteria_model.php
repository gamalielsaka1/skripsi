<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class B_kriteria_model extends CI_Model {
  private $table = 'bobotkriteria';
  private $primary_key = 'id_bobotkriteria';

  public function insert($data)
  {
    $this->db->insert($this->table,$data);
  }

}

/* End of file B_kriteria_model.php */
/* Location: ./application/models/B_kriteria_model.php */