<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Film extends CI_controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_film');
  }

  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('template/film_header', $data);
    $this->load->view('film/film');
    $this->load->view('template/film_footer');
  }
  public function tambah_film()
  {

    $isi['content'] = 'film/tambah_film';
    $isi['judul'] = 'Form Film';
    $isi['data'] = $this->m_film->getAllDataFilm();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('backend/dashboard', $isi);
    $this->load->view('template/footer');
  }
  public function tambah()
  {

    $isi['content'] = 'film/t_film';
    $isi['judul'] = 'Form Tambah Film';
    $isi['kode_pelanggan'] = $this->m_film->generate_kode_film();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('backend/dashboard', $isi);
    $this->load->view('template/footer');
  }
  public function simpan()
  {
    $data = array(
      'kode_pelanggan' => $this->input->post("kode_pelanggan"),
      'judul_film' => $this->input->post("judul_film"),
      'genre_film' => $this->input->post("genre_film"),
      'tahun_film' => $this->input->post("tahun_film"),
      'sinopsis_film' => $this->input->post("sinopsis_film"),
      'cover_film' => $this->input->post("cover_film"),

    );
    $query = $this->db->insert('film', $data);
    if ($query = true) {
      $this->session->set_flashdata('info', 'data film berhasil disimpan');
      redirect('film/tambah_film');
    }
  }
  public function edit($id)
  {

    $isi['content'] = 'film/edit_film';
    $isi['judul'] = 'Edit Data Film';
    $isi['kode_pelanggan'] = $this->m_film->generate_kode_film();
    $isi['film'] = $this->m_film->edit($id);
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('backend/dashboard', $isi);
    $this->load->view('template/footer');
  }
  public function update()
  {
    $kode_pelanggan = $this->input->post('kode_pelanggan');
    $data = array(
      'kode_pelanggan' => $this->input->post("kode_pelanggan"),
      'judul_film' => $this->input->post("judul_film"),
      'genre_film' => $this->input->post("genre_film"),
      'tahun_film' => $this->input->post("tahun_film"),
      'sinopsis_film' => $this->input->post("sinopsis_film"),
      'cover_film' => $this->input->post("cover_film"),

    );
    $query = $this->m_film->update($kode_pelanggan, $data);
    if ($query = true) {
      $this->session->set_flashdata('info', 'data film berhasil diupdate');
      redirect('film/tambah_film');
    }
  }
  public function delete($id)
  {
    $query = $this->m_film->delete($id);
    if ($query = true) {
      $this->session->set_flashdata('info', 'data film berhasil didelete');
      redirect('film/tambah_film');
    }
  }
}