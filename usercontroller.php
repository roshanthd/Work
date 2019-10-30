<?php
class UserController extends CI_Controller{
public function ShowUser(){

    $userid = $this->input->post('user_id');
    $actiontitle = $this->input->post('action_title');

    $this->load->model('UserModel', 'um');
    $user = $this->um->insertUser($userid, $actiontitle);

    $this->load->view('result',$userid,$actiontitle);

    $data = array('');

}
public function Index(){
    echo" Username : ". $this->session->username=" Roshanth ";
    echo "SESSION ID :".$this->session->session_id;

    $this->load->view('user'); 
}
}
?>
