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
  public function insertDataJamu()
  {
    $data = [
      'id' => $this->input->post(''),
      'nama' => $this->input->post('namaJamu'),
      'deskripsi' => $this->input->post('deskripsi'),
      'khasiat' => $this->input->post('khasiat'),
      'harga' => $this->input->post('harga'),
      'gambar' => $this->input->post('gambar')
    ];
    // var_dump($data);
    // die;
    $this->db->insert('jamu', $data);
  }
  function delete_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
  function edit_data($where, $table)
  {
    return $this->db->get_where($table, $where);
  }
  function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }
}
