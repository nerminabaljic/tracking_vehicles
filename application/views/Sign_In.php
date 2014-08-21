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
    <div id="content">
    <img id="sign_in" src="<?php echo base_url();?>/images/sign_in.jpg">
          <div id="sign_in_form">
            <?php  echo form_open('main/login_validation');?>
            <?php  echo validation_errors(); ?>

                <div id="forms">
                     <p>E-mail: &nbsp; &nbsp;&nbsp;&nbsp;
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
                     </p>
                     <p>
                         Password:&nbsp;
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

                    <div id="">

                         <p>
                            <input id="get_started" type="submit" value="SIGN IN ">

                            <input id="CANCEL" type="reset" value="CANCEL">
                             <a href="<?php echo site_url('main/forgot_password')?>"><p id="forgot">Forgot password?</p></a>
                         </p>

                    </div> <!-- div -->
                </div> <!-- forms -->

            <?php  echo form_close();?>

            <p id= "Gplus">
            <?php // index.php
            require_once 'openid.php';
            $openid = new LightOpenID("localhost");

            $openid->identity = 'https://www.google.com/accounts/o8/id';
            $openid->required = array(
                'contact/email',
            );

            $openid->returnUrl = base_url();?>
            <a href="<?php echo $openid->authUrl() ?>"><img id="Gplus_picture" src="<?php echo base_url();?>/images/g+.png"></a>
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
                        redirect('main/maps');
                    }else { echo 'User with email :'.$email.' doesnt exist';}}
                else{
                    $this->load->view("Sign_In");
                }

            }
            ?>
           </p>
        </div> <!-- sign_in_form -->
    </div> <!-- content -->
</div> <!-- container -->
</div>
</body>
</html>