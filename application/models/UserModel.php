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
}
?>
