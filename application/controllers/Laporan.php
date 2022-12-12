<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
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
  public function laporan_transaksi()
  {

    $isi['content'] = 'transaksi/laporan_transaksi';
    $isi['judul'] = 'Data Pelanggan';
    $isi['data'] = $this->m_langganan->getAllDatalangganan();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('backend/dashboard', $isi);
    $this->load->view('template/footer');
  }
  public function cetak_laporan_film()
  {
    $isi['data'] = $this->m_langganan->getAllDatalangganan();
    $this->load->view('transaksi/laporan_print_film', $isi);
  }
  public function laporan_film_pdf()
  {
    $isi['data'] = $this->m_langganan->getAllDatalangganan();
    // $this->load->library('dompdf_gen');
    $sroot = $_SERVER['DOCUMENT_ROOT'];
    include $sroot . "/movie/application/third_party/dompdf/autoload.inc.php";
    $dompdf = new Dompdf\Dompdf();
    $this->load->view('transaksi/laporan_pdf_film', $isi);
    $paper_size = 'A4'; // ukuran kertas
    $orientation = 'landscape'; //tipe format kertas potrait atau landscape
    $html = $this->output->get_output();
    $dompdf->set_paper($paper_size, $orientation);
    //Convert to PDF
    $dompdf->load_html($html);
    $dompdf->render();
    $dompdf->stream("laporan_data_film.pdf", array('Attachment' =>
    0));
    // nama file pdf yang di hasilkan
  }
}