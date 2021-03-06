<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
  public function create() {
    $data = array(
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'password' => md5($this->input->post('password')),
      'uf' => $this->input->post('uf'),
      'city' => $this->input->post('city'),
      'district' => $this->input->post('district'),
      'street' => $this->input->post('street'),
      'number' => $this->input->post('number')
    );

    return $this->db->insert('tb_user', $data);
  }

  public function login() {
    $email = $this->input->post('email');
    $password = md5($this->input->post('password'));

    $this->db->where('email', $email);
    $this->db->where('password', $password);

    $user = $this->db->get('tb_user')->row_array();

    if($user) {
      $this->session->set_userdata('logado', $user);
      redirect(base_url('index.php'));
    } else {
      redirect(base_url('login'));
    }
  }

  public function logout() {
    $this->session->unset_userdata('logado');
    redirect(base_url('login'));
  }
}
?>
