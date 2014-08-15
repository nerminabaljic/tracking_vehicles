<?php
/**
 * Created by PhpStorm.
 * User: Elvir
 * Date: 3.7.2014.
 * Time: 13:06
 */

class Get_db extends CI_Model{

    function getAll(){
     $query =  $this->db->query("SELECT * FROM user");
        return $query->result();
    }

    function  insertOne($data){

        $this->db->insert("user",$data);

    }

    function  insert2($data)
        {
$this->db->insert_batch("user",$data);
        }

    function  update1($data)
    {
        $this->db->update("user",$data,"id = 2");
    }

    function  update2($data)
    {
        $this->db->update_batch("user",$data,"id");
    }

    function  delete1 ($data)
    {
        $this->db->delete("user", $data);
    }

    function empty1($table){
        $this->db->empty($table);

}
    function get_vehicles(){
       return $query = $this->db->query("SELECT * FROM vehicle");
       
    }

    function insert_vehicle($data){
       return $query = $this->db->insert('vehicle', $data);

    }


    public  function  update_employee($data,$id){


               $this->db->where("user_id",$id);
              if($this->db->update("user",$data)) echo 'apdejtovao'; else 'neceeee';

        return;


    }




}