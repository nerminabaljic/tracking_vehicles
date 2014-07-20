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
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"/>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>

<body>
<div class="container">
    <div class="row">
        <fieldset>
            <legend>Invited List</legend>
            <div class="col-lg-12">
                <table class="table table-hover table-bordered">
                    <tr>
                        <td><strong>First Name</strong></td>
                        <td><strong>Last Name</strong></td>
                        <td><strong>Email</strong></td>
                    </tr>

                    <?php foreach ($query->result_array() as $row){?>
                            <tr>
                                <td><?php echo $row['FirstName'];?></td>
                                <td><?php echo $row['LastName'];?></td>
                                <td><?php echo $row['email'];?></td>
                            </tr>
                        <?php }?>
                </table>
            </div>
        </fieldset>
    </div>
</div>
</body>


</html>