<!DOCTYPE html>
<html>
<head>
    <title> GPS tracking vehicles </title>
    <meta charset= "utf-8">


    <meta name= "viewport" content= "width= device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/invite.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/employee.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/container.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/create_vehicles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/maps.css">

    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/be7019ee387/integration/jqueryui/dataTables.jqueryui.css">
    <link rel="stylesheet" type="text/css" href="http://editor.datatables.net/media/css/dataTables.editor.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"><!-- Optional theme -->

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        html { height: 100% }
        body { height: 100%; margin: 0; padding: 0 }

    </style>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQNr1shkm4sYDf2T1X1hA8HtQyI7Z3OEE">
    </script>
    <script type="text/javascript">
        function initialize() {
            var mapOptions = {
                center: new google.maps.LatLng(43.342486, 17.809782),
                zoom: 15
            };
            var map = new google.maps.Map(document.getElementById("map-canvas"),
                mapOptions);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script src="<?php echo base_url();?>/lib/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



</head>
<body>
    <header>
        <?php $ci =& get_instance(); ?>
            <div id="row" > <div class="col-md-9" id="wellcome"><?php print 'Welcome  '.$ci->session->userdata('username').'  | ';?> <a class="white-link" href = "<?php echo base_url()."main/logout";?>"> <i class="fa fa-sign-out fa-fw"></i>Logout</a></div></div>


          <!--  <figure>
                <img src="<?php echo base_url();?>/images/GPS-image.jpg" id="image" alt="GPS">
            </figure>-->

    </header>




