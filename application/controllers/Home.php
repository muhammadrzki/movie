<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_controller
{

  public function index()
  {
    $this->load->view('frontend/header');
    $this->load->view('frontend/home');
    $this->load->view('frontend/footer');
  }
}