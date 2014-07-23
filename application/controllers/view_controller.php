<?php
class View_controller extends CI_Controller{

    public  function logirajSe(){
        $this->load->view("header.php");
        $this->load->view("employee.php");
        $this->load->view("footer.php");
    }
}

?>