<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Moviee extends CI_controller
{

  public function index()
  {
    $this->load->view('template/movie_header');
    $this->load->view('movie/movie');
    $this->load->view('template/movie_footer');
  }
  public function movie1()
  {
    $this->load->view('template/movie_header');
    $this->load->view('movie/movie1');
    $this->load->view('template/movie_footer');
  }
  public function movie2()
  {
    $this->load->view('template/movie_header');
    $this->load->view('movie/movie2');
    $this->load->view('template/movie_footer');
  }
  public function movie3()
  {
    $this->load->view('template/movie_header');
    $this->load->view('movie/movie3');
    $this->load->view('template/movie_footer');
  }
  public function movie4()
  {
    $this->load->view('template/movie_header');
    $this->load->view('movie/movie4');
    $this->load->view('template/movie_footer');
  }
  public function movie5()
  {
    $this->load->view('template/movie_header');
    $this->load->view('movie/movie5');
    $this->load->view('template/movie_footer');
  }
}