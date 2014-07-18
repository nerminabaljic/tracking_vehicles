<?php

class Model_users extends CI_Model{

    public function can_log_in(){
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('password')));

        $query = $this->db->get('user');

        if($query->num_rows()==1){
            return true;
        }
        else{
            return false;
        }


    }
    public function google_auth($email){
        $this->db->where('email', $email);

        $query=$this->db->get('user');

        if($query->num_rows()==1){
            return $query;
        }
        else return true;
    }

    public function get_user($email){
        $this->db->where('email', $email);

        if($query->num_rows()==1){
            return true;
        }
        else return false;

    }

    public function add_temp_user($key,$email,$first_name,$last_name)
    {
        $data = array(
            'email' => $email,
            'FirstName' => $first_name,
            'LastName'=>$last_name,
            'key'=>$key,
            'password'=>md5("test")
            );

        $query = $this->db->insert('invite_user', $data);

        if($query)
            return true;
        else
            return false;
    }

}