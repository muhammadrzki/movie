<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index()
  {
    $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email', [
      'required' => 'Email Harus diisi!!',
      'valid_email' => 'Email Tidak Benar!!'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim', [
      'required' => 'Password Harus diisi'
    ]);
    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login Flixmo21';
      $this->load->view('template/auth_header', $data);
      $this->load->view('auth/login');
      $this->load->view('template/auth_footer');
    } else {
      $this->_login();
    }
  }
  private function _login()
  {
    $email = htmlspecialchars($this->input->post('email', true));
    $password = $this->input->post('password', true);

    $user = $this->db->get_where('user', ['email' => $email])->row_array();

    if ($user) {
      if ($user['is_active'] == 1) {
        if (password_verify($password, $user['password'])) {
          $data = [
            'email' => $user['email'],
            'role_id' => $user['role_id']
          ];

          $this->session->set_userdata($data);
          if ($user['role_id'] == 2) {
            redirect('film');
          }
          if ($user['role_id'] == 1) {
            redirect('film');
          }
        } else {
          $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
          redirect('auth');
        }
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">user belum diaktivasi!!!</div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Anda Harus Berlangganan!!</div>');
      redirect('auth');
    }
  }

  public function registrasi()
  {
    $this->form_validation->set_rules('name', 'Name', 'required|trim', [
      'required' => 'Nama Belum diisi!!'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
      'valid_email' => 'Email Tidak Benar!!',
      'required' => 'Email Belum diisi!!',
      'is_unique' => 'Email Sudah Terdaftar!'
    ]);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
      'required' => 'password Belum diisi!!',
      'matches' => 'Password Dont Match!!',
      'min_length' => 'Password Too Short'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]', [
      'required' => 'password Belum diisi!!',
      'matches' => 'Password Dont Match!!',
      'min_length' => 'Password Too Short'
    ]);

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Registrasi Flixmo21';
      $this->load->view('template/auth_header', $data);
      $this->load->view('auth/registrasi');
      $this->load->view('template/auth_footer');
    } else {
      $data = [
        'name' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'image' => 'default.jpg',
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'role_id' => 2,
        'is_active' => 1,
        'date_created' => time()
      ];
      $this->db->insert('user', $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! akun member anda sudah dibuat. Silahkan Aktivasi Akun anda</div>');
      redirect('auth');
    }
  }
  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role_id');

    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
    redirect('auth');
  }
}