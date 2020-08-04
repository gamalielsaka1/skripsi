<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Penampilan_model extends CI_Model
{

  private $table = 'kriteria';
  private $primary_key = 'id_kriteria';
  
  public function __construct()
  {
    parent::__construct();
  }
  public function getAll()
  {
    return $this->db->get($this->table)->result();
  }
}

/* End of file Penampilan_model.php */
/* Location: ./application/models/Penampilan_model.php */