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

        $this->form_validation->set_rules('email','Email', 'required|trim|xss_clean|callback_validate_credentials');
        $this->form_validation->set_rules('password','Password', 'required|md5');

        if($this->form_validation->run() ){

            if($this->validate_credentials($this->input->post('email'),$this->input->post('password'))) {
                $this->set_session();
                    redirect('main/Navigation');
            }
        }
        else{
            $this->load->view("Sign_In");
        }
    }
    public function set_session()
    {
        $this->session_set_userdata(
            array(
                'email' => $this->input->post('email'),
                'is_logged_in' => true
            )
        );
    }

    public function validate_credentials($email,$pass){
        $this->load->model('model_users');

        if($this->model_users->can_log_in($email,$pass)){
            return true;
        }
        else{
            $this->form_validation->set_message('validate_credentials','Incorrect username/password.');
            return false;
        }
    }

    public function forgot_password(){
        $this->load->view('form_forgot_password');
    }

   public function random_password($length){
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = substr( str_shuffle( $chars ), 0, $length );
        return $password;
    }

    public function send(){
        $this->load->library('email');
        $this->load->model('model_users');

        $mail=$this->input->post('email');
        if($this->model_users->email_exist()){
        $this->email->from('NSoft.tracking.vehicles@gmail.com', 'Tracking Vehicles Administration');
        $this->email->to($mail);
        //$this->email->cc('nermina_win@hotmail.com');
        $this->email->subject('Password recovery');

        $password=$this->random_password(8);
         $this->email->message('Your new password is : '.$password);

        if ($this->email->send()){
            $this->model_users->change_pass($password);
            $this->load->view('Sign_In');

        }
        else{
            echo $this->email->print_debugger();
        }}
        else echo "This user doesnt exist". $this->input->post('email');

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

            $this->load->library('email');

            $this->load->model('model_users');

            $this->email->from('NSoft.tracking.vehicles@gmail.com', 'Tracking Vehicles Administration');
            $this->email->to($email[$i]);
            $this->email->subject("Invite to SingUp");

            $message = "<p>Korisnicko ime : ". $email[$i]."</p></br>" ;
            $password=$this->random_password(8);

            $message .= "<p>Lozinka je :".$password." </p></br>" ;

            $message .="<p>Link za aktivaciju vaseg racuna je : <a href='".base_url()."main/invite_user/$key'>Ovdje</a>";
            $this->email->message($message);

            //send email   to the user
            if ($this->model_users->add_temp_user($key,$email[$i],$first_name[$i],$last_name[$i],md5($password))) {
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
                $this->load->view('Sign_In');
            }
            else echo "greska pri aktivaciji korisnickog racuna , pokusajte ponovo.";
        }
        else echo "pogresan aktivacisjki kljuc.";
    }





    public function Invite(){
        $this->loadPage("Invite.php");
    }
    public function employee(){

        $this->load->model('model_users');

        $data['query'] = $this->model_users->view_invited_user();

        $this->loadPageWithData("employee.php", $data);
    }

    public function vehicles(){
            $this->loadPage("vehicles.php");
    }
    public function create_vehicles(){
        $this->loadPage("create_vehicles.php");
    }
    public function edit_employee(){
        $this->loadPage("edit_employee.php");
    }
    public function edit_vehicles(){
        $this->loadPage("edit_vehicles.php");
    }
    public function maps(){
        $this->loadPage("karta.php");
        }
    public  function  loadPage($url)
    {
        $this->load->view("header.php");
        $this->load->view("navigation.php");
        $this->load->view($url);
        $this->load->view("footer.php");
    }

    public function  loadPageWithData($url, $data)
    {
        $this->load->view("header.php");
        $this->load->view("navigation.php");
        $this->load->view($url,$data);
        $this->load->view("footer.php");

    }

    public  function  test(){
        $this->load->view("test.php");
    }


}


/* End of file main.php */
/* Location: ./application/controllers/main.php */