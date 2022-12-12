<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_langganan extends CI_Model
{
  public function generate_kode_langganan()
  {
    $this->db->select('RIGHT(berlangganan.kode_pelanggan,3) as kode', false);
    $this->db->order_by('kode_pelanggan', 'desc');
    $this->db->limit(1);
    $query = $this->db->get('berlangganan');
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
  public function getAllDataLangganan()
  {
    return $this->db->get('Berlangganan')->result();
  }
  public function update_status($kode_pelanggan, $status)
  {
    $this->db->set('status', $status);
    $this->db->where('kode_pelanggan', $kode_pelanggan);
    $this->db->update('berlangganan');
  }
}