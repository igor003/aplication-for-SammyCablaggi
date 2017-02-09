<?php
class Login_Model extends CI_Model{
function do_login(){
    $this->db->select('login, password');
    $this->db->where('login',$_POST['login_log'] );
    $this->db->where('password', $_POST['password_log']);
    $query = $this->db->get('users');
    return $query->row_array();

}
}