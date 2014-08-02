<!DOCTYPE html>
<html>
<head>
    <title> GPS pracenje vozila </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/Main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/form_forgot_password.css">
    <meta charset= "utf-8">
    <meta name= "viewport" content= "width= device-width, initial-scale=1.0">
</head>

<body>

<div id = "container">
    <div id="grad1">
    <header>
        <figure>
            <img src="<?php echo base_url();?>/images/GPS.jpg" id="image" alt="GPS">
        </figure>
    </header>

    <div id="content" class="grad2"><br><br>
        <h2>Forgot your password?</h2>

        <?php  echo form_open('main/send');?>
        <?php  echo validation_errors(); ?>
        <div id="forgot_your_password">
            <p id="text">Please enter the e mail address registered on your account.</p>
            <br>
            <div id="forms">
                <input class="input" type="text" id="email" name="email" placeholder= "E-mail">
                <p><input type="submit" id="reset_password"  value="Reset password">
                    <a href="<?php echo site_url('main/login')?>"><input id="back" type="button" value="Back to Sign In"></a>
                    <br><br>
                    <span id="error"></span>
            </div> <!-- forms -->
        </div><!-- forgot_your_password --> <br><br>
    </div>
    </div> <!-- content --><br><br>
</div> <!-- container -->
</div>


<script src="<?php echo base_url();?>/lib/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>/js/form_forgot_password.js"></script>
</body>


</html>