<?php
class TokoModel extends CI_Model
{
	function tokoList()
	{
		$hasil = $this->db->get('toko');
		return $hasil->result();
	}
	function saveToko()
	{
		$data = array(
			'nama' 			=> $this->input->post('name'),
			'lokasi' 			=> $this->input->post('lokasi'),
			'alamat' 	=> $this->input->post('alamat'),
			'jam_kerja' 		=> $this->input->post('jam_kerja'),
			'gambar' 		=> $this->input->post('gambar'),
		);
		$result = $this->db->insert('toko', $data);
		return $result;
	}
	function updateToko()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$lokasi = $this->input->post('lokasi');
		$alamat = $this->input->post('alamat');
		$jam_kerja = $this->input->post('jam_kerja');
		$gambar = $this->input->post('gambar');
		$this->db->set('nama', $name);
		$this->db->set('lokasi', $lokasi);
		$this->db->set('alamat', $alamat);
		$this->db->set('jam_kerja', $jam_kerja);
		$this->db->set('gambar', $gambar);
		$this->db->where('id', $id);
		$result = $this->db->update('toko');
		return $result;
	}
	function deleteToko()
	{
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$result = $this->db->delete('toko');
		return $result;
	}
}
