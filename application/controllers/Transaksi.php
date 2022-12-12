<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_langganan');
  }

  public function index()
  {
    $this->load->view('',);
  }
  public function riwayat_transaksi()
  {

    $isi['content'] = 'transaksi/riwayat_transaksi';
    $isi['judul'] = 'Data Pelanggan';
    $isi['data'] = $this->m_langganan->getAllDatalangganan();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('backend/dashboard', $isi);
    $this->load->view('template/footer');
  }
  public function konfirmasi()
  {
    $data = array(
      'kode_pelanggan'      => $this->input->post("kode_pelanggan"),
      'nama_langganan'      => $this->input->post("nama_langganan"),
      'jenis_paket'         => $this->input->post("jenis_paket"),
      'tgl_langganan'       => $this->input->post("tgl_langganan"),
      'tgl_habis'           => $this->input->post("tgl_habis"),
      'harga'               => $this->input->post("harga"),
      'kota_langganan'      => $this->input->post("kota_langganan"),
      'negara_langganan'    => $this->input->post("negara_langganan"),
      'pembayaran'          => $this->input->post("pembayaran"),
    );
    $query = $this->db->insert('berlangganan', $data);
    if ($query = true) {
      $this->session->set_flashdata('info', 'data pelanggan berhasil disimpan,silahkan lanjutkan pembayaran....');
      redirect('berlangganan/v_langganan');
    }
  }
}