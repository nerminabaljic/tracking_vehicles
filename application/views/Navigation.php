<!DOCTYPE html>
<html>
<head>
	<title> GPS pracenje vozila </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/navigation.css">
	<link href="<?php echo base_url();?>/lib/bootstrap3.2/css/bootstrap.min.css" rel="stylesheet">
	<meta charset= "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
	
	<div class = "container">
		
		<div class ="col-md-3">
		<ul class= "nav nav-pills nav-stacked">
				<li class="active"><a href = "#">Invite employee</a></li>
				<li><a href = "#">Employee</a></li>
				<li><a href = "#">Create vehicle</a></li>
				<li><a href = "#">Vehicle</a></li>
		</ul>

            <?php
            echo "<pre>";
            print_r($this->session->all_userdata());
            echo "</pre>";
            ?>

            <a href = '<?php echo base_url()."main/logout" ?>'>Logout</a>
		</div>
		
	</div> <!-- container -->


<script src="<?php echo base_url();?>/lib/bootstrap3.2/js/bootstrap.min.js"></script>
</body>
</html>
