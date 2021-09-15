<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login2 extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('UserModel');
    $this->lang->load('login', 'english');
  }

	public function index() {
		$this->load->view('login2');
  }

  public function login() {
    $user = new UserModel();
    $user->login();
  }
}
