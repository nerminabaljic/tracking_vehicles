<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site  extends CI_Controller
{

public function index()
{
    $this->home();

}

    public function home(){
        $this->load->view("Sign_In");

    }

    function getValues(){

        $this->load->model("get_db");

        $data ['results'] =$this->get_db->getAll();

        $this->load->view("view_db",$data);


    }

    function  insertValues()
    {
        $this->load->model("get_db");

        $newRow = array(
            array(
                "username"=>"saban",
                "name" =>"saulic",
            ),
            array(
                "username" =>"saulic",
                "name" => "test2"
            )
        );
        $this->get_db->insert2($newRow);
        echo 'it has been added';

    }

    function  updateValues()
    {

        $this->load->model("get_db");

        $newRow = array(

            array(
                "id" => "2",
                "username" =>"arnela111111",
            )
            ,
            array(
                "id" => "3",
                "username" =>"kristina111",
            )
        );
        $this->get_db->update2($newRow);
        echo 'it has been updated';
    }

    function  deleteValues(){
        $this->load->model("get_db");
        $oldRow = array(
            "id"=>"3"

        );

        $this->get_db->delete1($oldRow);
        echo 'deleted!';

    }

    function emptyTable()
    {
        $this->load->model("get_db");
        $oldTable = "user";

        $this->get_db->empty1($oldTable);
    }






}