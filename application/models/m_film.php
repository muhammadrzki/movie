<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_film extends CI_Model
{
  public function generate_kode_film()
  {
    $this->db->select('RIGHT(film.kode_pelanggan,3) as kode', false);
    $this->db->order_by('kode_pelanggan', 'desc');
    $this->db->limit(1);
    $query = $this->db->get('film');
    if ($query->num_rows() > 0) {
      $data = $query->row();
      $kode = intval($data->kode) + 1;
    } else {
      $kode = 1;
    }

    $kodemax = str_pad($kode, "0", STR_PAD_LEFT);
    $kodejadi = "" . $kodemax;
    return $kodejadi;
  }
  public function getAllDataFilm()
  {
    return $this->db->get('film')->result();
  }
  public function edit($id)
  {
    $this->db->select('*');
    $this->db->from('film');
    $this->db->where('kode_pelanggan', $id);
    return $this->db->get()->row_array();
  }
  public function update($kode_pelanggan, $data)
  {
    $this->db->where('kode_pelanggan', $kode_pelanggan, $data);
    $this->db->update('film', $data);
  }
  public function delete($id)
  {
    $this->db->where('kode_pelanggan', $id);
    $this->db->delete('film');
  }
}