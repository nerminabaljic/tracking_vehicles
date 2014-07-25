<?php

class MY_Controller extends CI_Controller{

    function __construct()
    {
        parent::__construct();

        $ci=& get_instance();
        $uri = $ci->uri->uri_string();
$a = array('main/login', 'main/login_validation', 'main/validate_credentials');

        if(! $this->session->userdata('is_logged_in') && ! in_array( $uri, $a ) ){
            redirect('main/login');
        }
    }

}