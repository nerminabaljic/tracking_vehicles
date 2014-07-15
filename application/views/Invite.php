<!DOCTYPE html>
<html>
<head>
    <title> GPS pracenje vozila </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/Main.css">
    <meta charset= "utf-8">
    <meta name= "viewport" content= "width= device-width, initial-scale=1.0">
    <script src="<?php echo base_url();?>/lib/jquery-1.11.1.min.js"></script>
</head>

<body>

<div id = "container">

    <div id="content">

        <h1>INVITE</h1>

        <?php


        echo form_open('main/invite_validation');

        echo validation_errors();

        echo "<p>Ime :";
        echo form_input('first_name',$this->input->post('first_name'));
        echo "</p>";



        echo "<p> Prezime :";
        echo form_input('last_name',$this->input->post('last_name'));
        echo "</p>";



        echo "<p> Email :";
        echo form_input('email', $this->input->post('email'));
        echo "</p>";


        echo "<p>";
        echo form_submit('invite_submit','Invite');
        echo "</p>";

        echo form_close();
        ?>


    </div> <!-- content --><br/><br/>


</div> <!-- container -->



</body>


</html>