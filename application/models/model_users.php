<?php

class Model_users extends CI_Model{

    public function login($email, $password)
	 {
	   $this -> db -> select('user_id, username, email , password');
	   $this -> db -> from('user');
	   $this -> db -> where('email', $email);
	   $this -> db -> where('password',  md5($password));
	   $this -> db -> limit(1);

	   $query = $this -> db -> get();

	   if($query -> num_rows() == 1)
	   {
	     return $query->result();
	   }
	   else
	   {
    	     return false;
	   }
	 }
    public function can_log_in($email,$pass){
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('password', $pass);

        $login = $this->db->get()->result();

        if(is_array($login) && count($login)==1)
        {
            return true;
        }
        else
            return false;

    }

    public function get_all_users(){
        $this->db->select();

    }
    public function google_auth($email){
        $this->db->where('email', $email);

        $query=$this->db->get('user');

        if($query->num_rows()==1){
            return $query;
        }
        else return true;
    }

   /* public function get_user($email){
        $this->db->where('email', $email);

        if($query->num_rows()==1){
            return true;
        }
        else return false;

    }*/

    public function change_pass($password)
    {
        $this->db->where('email', $this->input->post('email'));
        $this->db->set('password', md5($password), TRUE);
        $this->db->update('user');

        return;


    }
    public function add_temp_user($key,$email,$first_name,$last_name,$password)
    {

        $this->db->where('email', $email);
        $query1 = $this->db->get('invite_user');

        $this->db->where('email', $email);
        $query2 = $this->db->get('user');

        if($query1->num_rows()==1 || $query2->num_rows()==1)
        {
            return false;
        }
        else {

            $data = array(
                'email' => $email,
                'FirstName' => $first_name,
                'LastName' => $last_name,
                'key' => $key,
                'password' => $password
            );
            $query = $this->db->insert('invite_user', $data);
            if ($query)
                return true;
            else
                return false;
        }
    }

    public function  is_key_valid($key)
    {
        $this->db->where('key', $key);
        $query = $this->db->get('invite_user');

        if ($query->num_rows() == 1) {
            return true;
        }
        else return false;
    }

    public  function add_user($key){
        $this->db->where('key', $key);
        $temp_user = $this->db->get('invite_user');

        if ($temp_user) {

            $row = $temp_user->row();

            $data = array(
                'email' => $row->email,
                'first_name' =>$row->FirstName,
                'last_name' => $row->LastName,
                'password'=>$row->password,
                'username' =>$row->FirstName.$row->LastName

            );
            $did_add_user = $this->db->insert('user', $data);
        }

        if ($did_add_user) {
            $data2 = array('accepted' => 1);
            $this->db->where('key', $key);
            $this->db->update('invite_user',$data2);
            return true;
        }else return false;
    }

    public function  view_invited_user()
    {
        return $query = $this->db->get_where('invite_user', array('accepted' => 1));

    }

    public function email_exist(){
        $this->db->where('email', $this->input->post('email'));
        $query = $this->db->get('user');

        if(!$query->num_rows()==0){
            return true;
        }
        else{
            return false;
        }

    }

    public function  get_user_byEmail($username){

        $this->db->where('first_name',$username);
        $query= $this->db->get('user');

       // if(!$query->num_rows()==0) return true; else return false;
        $ret= $query->row();

        return $ret;

    }

    public  function get_vehicle_byID($id){

        $this->db->where('vehicle_id',$id);
        $query=$this->db->get('vehicle');

        $ret=$query->row();

        return $ret;
    }

    public function update_vehicle($vehicle){


        $this->db->where("vehicle_id",$vehicle['vehicle_id']);
        if($this->db->update("vehicle",$vehicle)) echo 'apdejtovao'; else 'neceeee';

        return;
    }
}