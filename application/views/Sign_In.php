<!DOCTYPE html>
<html>
<head>
    <title> GPS pracenje vozila </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/Main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/Sign_In.css">
    <meta charset= "utf-8">
    <meta name= "viewport" content= "width= device-width, initial-scale=1.0">
    <script src="<?php echo base_url();?>/lib/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url();?>/js/SignIn.js"></script>
</head>

<body>

<div id = "container">
    <div id="grad1">
    <header>
        <figure>
            <img src="<?php echo base_url();?>/images/GPS.jpg" alt="GPS">
        </figure>
    </header>

    <div id="content">
        <div class="grad2">
        <div id="sign_in_form">

            <?php  echo form_open('main/login_validation');?>
            <?php  echo validation_errors(); ?>
            <h2>Sign in to GPS </h2>
            <div id="forms">
                <?php
                $data = array(
                    'name'        => 'email',
                    'id'          => 'email',
                    'value'       => $this->input->post('email'),
                    'maxlength'   => '255',
                    'class' => 'input',
                    'placeholder' => 'Email',
                    'type' => 'text'
                );
                echo form_input($data);
                ?>
                 <p>
                     <?php
                     $data = array(
                         'name'        => 'password',
                         'id'          => 'password',
                         'maxlength'   => '200',
                         'class' => 'input',
                         'placeholder' => 'Password',
                         'type' => 'password',
                         'title' => 'Password'
                     );
                     echo form_input($data);
                     ?>
                 </p>
                <div>
                    <p>
                        <input id="get_started" type="submit" value="GET STARTED!">

                        <input id="CANCEL" type="reset" value="CANCEL"></p>
                </div>
            </div>
            <?php  echo form_close();?>
            <p id="forgot_password"><a href="<?php echo site_url('main/forgot_password')?>">Forgot Password?</a></p>
            <p id= "Gplus">Or sign up with: </p>
            <?php // index.php
            require_once 'openid.php';
            $openid = new LightOpenID("localhost");

            $openid->identity = 'https://www.google.com/accounts/o8/id';
            $openid->required = array(
                'contact/email',
            );

            $openid->returnUrl = 'http://localhost/tracking_vehicles/' ?>
            <a href="<?php echo $openid->authUrl() ?>"><img id="Gplus_picture" src="<?php echo base_url();?>/images/Gplus.png"></a> <br/>
            <?php

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
                    }else { echo 'User with email :'.$email.' doesnt exist';}}
                else{
                    $this->load->view("Sign_In");
                }

            }
            ?>

        </div> <!-- sign_in_form -->
        </div>
    </div> <!-- content --><br/><br/>
</div> <!-- container -->
</div>
</body>
</html>