<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require 'openid.php';
class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->login();
        /*$openid = new LightOpenID('localhost');
        $openid->identity= 'https://www.google.com/accounts/o8/id';
        header('Location: ' . $openid->authUrl());*/
	}

    public function googleLogin(){
        $this->load->model('model_users');
        $openid = new LightOpenID("localhost");

        if ($openid->mode) {
            if ($openid->mode == 'cancel') {
                echo "User has canceled authentication!";

            } elseif($openid->validate()) {
                $data = $openid->getAttributes();
                $email = $data['contact/email'];



                $result= mysql_query("SELECT * FROM user WHERE email = '$email'");
                if(is_resource($result) and mysql_num_rows($result)>0){
                    $row = mysql_fetch_array($result);

                    $usr = array(
                    'email' =>$email,
                    'is_logged_in' => 1

                );

                    $this->session->set_userdata($usr);
                    redirect('main/Navigation');
                }}
                else{
                    $this->load->view("Sign_In");
                }

    }}

    public function login(){
        $this->load->view('Sign_In');
    }

    public function Navigation(){
        if($this->session->userdata('is_logged_in')){
        $this->load->view('Navigation');
        }
        else{
            redirect('main/restricted');
        }
    }

    public function Restricted(){
        $this->load->view("restricted");
    }

    public function login_validation(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username','Username', 'required|trim|xss_clean|callback_validate_credentials');
        $this->form_validation->set_rules('password','Password', 'required|md5');

        if($this->form_validation->run() ){
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true

            );
            $this->session->set_userdata($data);
            redirect('main/Navigation');
        }
        else{
            $this->load->view("Sign_In");
        }

    }

    public function validate_credentials(){
        $this->load->model('model_users');

        if($this->model_users->can_log_in()){
            return true;
        }
        else{
            $this->form_validation->set_message('validate_credentials','Incorrect username/password.');
            return false;
        }
    }

     public function logout(){
        $this->session->sess_destroy();
        redirect('main/login');
    }
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */