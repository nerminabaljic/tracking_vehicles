<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


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

	}


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

    public  function invite_all()
    {


        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $email = $_POST['email'];

        for ($i=0;$i<count($email);$i++) {


            $key = md5(uniqid());

            $this->load->library('email', array('mailtype' => 'html'));
            $this->load->model('model_users');

            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => '',
                'smtp_pass' => '',
                'mailtype'  => 'html',
                'charset'   => 'iso-8859-1'
            );
            $this->load->library('email', $config);

            $this->email->to($email[$i]);
            $this->email->subject("Invite to SingUp");

            $message = "<p>Korisnicko ime : ". $email[$i]."</p></br>" ;
            $message .= "<p>Lozinka je : test1 </p></br>" ;
            $message .="<p>Link za aktivaciju vaseg racuna je : <a href='" . base_url() . "main/invite_user/$key'>Ovdje</a>";
            $this->email->message($message);

            //send email   to the user
            if ($this->model_users->add_temp_user($key,$email[$i],$first_name[$i],$last_name[$i])) {
                if ($this->email->send()) {
                    echo "The email has been sent!";
                } else {
                    echo "could not send the email";
                }
            } else
                echo "problem adding to database";
        }


    }
    public  function  invite_user($key)
    {
        $this->load->model('model_users');
        if ($this->model_users->is_key_valid($key)) {
            if($this->model_users->add_user($key))
            {
                echo "Uspjesno aktiviran racun .";
            }
            else echo "greska pri aktivaciji korisnickog racuna , pokusajte ponovo.";
        }
        else echo "pogresan aktivacisjki kljuc.";


    }
    public function  invited_user()
    {
        $this->load->model('model_users');

        $data['query'] = $this->model_users->view_invited_user();
        $this->load->view('Invited', $data);
    }

    public function Invite()
    {

        $this->load->view('Invite');
    }
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */