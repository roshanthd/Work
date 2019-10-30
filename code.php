<?php

class UserModel extends CI_Model{
    function insertUser($userid, $actiontitle){
        $this->load->database();
    
        $data= array(
            'user_id' => $userid,
            'action_title' => $actiontitle
        );
        
        $this->db->insert('useraction', $data);
    }

    function getuser($userid){
        
    }
}

?>
