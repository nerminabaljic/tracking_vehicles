<!DOCTYPE html>
<html>
<head>
	<title> GPS pracenje vozila </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/container.css">
	<link href="<?php echo base_url();?>/bootstrap3.2/css/bootstrap.min.css" rel="stylesheet">
	<meta charset= "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>



    <div class ="col-md-2">
        <div class="well">
            <ul class= "nav nav-pills nav-stacked">
                <li><a href = "<?php echo site_url('main/employee');?>" ">Employees</a></li>
                <li><a href = "<?php echo site_url('main/vehicles');?>">Vehicles</a></li>
                <li><a href = "<?php echo site_url('main/maps');?>">Maps</a></li>
                <li><a href = '<?php echo base_url()."main/logout" ?>'>Logout</a></li>
            </ul>
         </div>
    </div>
    <script src="<?php echo base_url();?>/bootstrap3.2/js/bootstrap.min.js"></script>
</body>
</html>
