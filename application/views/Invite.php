<!DOCTYPE html>
<html>
<head>
    <meta charset= "utf-8">
    <title> GPS pracenje vozila </title>
<!--
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/Main.css">
    <meta name= "viewport" content= "width= device-width, initial-scale=1.0">
    <script src="<?php echo base_url();?>/lib/jquery-1.11.1.min.js"></script>
    -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>

<body>

<div class ="container">

    <div class="row">

        <div class="col-lg-12">
        <h1>INVITE</h1>
        <?php
        echo form_open('main/invite_validation');
        echo validation_errors();


        ?>


        <div class="input-group">
            <span class="input-group-addon">Last name</span>
            <?php echo form_input('last_name', $this->input->post('last_name'),'class="form-control"'); ?>
        </div>
<br>
        <div class="input-group">
            <span class="input-group-addon">First name</span>
            <?php echo form_input('first_name', $this->input->post('first_name'), 'class="form-control"'); ?>

        </div>
<br>
        <div class="input-group">
            <span class="input-group-addon">Email</span>
            <?php echo form_input('email',$this->input->post("email"),'class="form-control"')?>
        </div>
<br>
        <div class="btn-group">
        <?php echo form_submit('invite_submit','Invite','class="btn btn-default"'); ?>
        </div>
        </div>

    </div> <!-- row--><br/><br/>
    <?php  echo form_close();?>


</div> <!-- container -->



</body>


</html>