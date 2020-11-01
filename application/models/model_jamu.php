<?php

class Model_jamu extends CI_Model
{
  public function get_data()
  {
    $query = "SELECT * from jamu";

    $data = $this->db->query($query)->result_array();
    return $data;
  }
  public function get_id($where, $table)
  {
    return $this->db->get_where($table, $where);
  }
}
