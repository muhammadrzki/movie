<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_controller
{

  public function index()
  {
    $this->load->view('frontend/about');
  }
}