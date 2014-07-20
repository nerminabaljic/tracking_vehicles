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

<div class ="container">

    <div class="row">
        <div class="col-lg-4">
        <h1>INVITE</h1>
            <label id="greske" hidden></label>
        <form method="post" id="forma">
        <div class="input-group">
            <span class="input-group-addon">Last name</span>
            <input id="last_name" name="last_name" class="form-control" value="<?php $this->input->post('last_name'); ?>">

        </div>
<br>
        <div class="input-group">
            <span class="input-group-addon">First name</span>
            <input id="first_name" name="first_name" class="form-control" value="<?php $this->input->post('first_name'); ?>">

        </div>
<br>
        <div class="input-group">
            <span class="input-group-addon">Email</span>
            <input id="email" name="email" class="form-control" value="<?php $this->input->post('email'); ?>">
        </div>
<br>
        <div class="btn-group">
            <input type="submit" class="btn btn-default" value="Add to Invite" name="add_to_invite_submit" id="add_to_invite_submit">
        </form>
        </div>
        </div>
        <div class="col-lg-8">
            <h1>TODO <LIST></LIST></h1>

            <div class="span9 offset1">
                <table class="table table-striped table-bordered tablesorter" id="tusers">
                    <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody id="tijelo">



                    </tbody>
                </table>
            </div>
        </div>
        <div class="btn-group">
                <button class="btn btn-default" id="invite_all_button">Invite All</button>

            </div>

</div> <!-- container -->


<script>

    $("#forma").submit(function(){
        return false;
    });

    $("#add_to_invite_submit").click(function(){

        var last_name = $("#last_name").val();
        var first_name = $("#first_name").val();
        var email = $("#email").val();


        if(last_name.length == 0){
            $("#greske").html("Last name can't be empty");
            $("#greske").addClass("alert").addClass("alert-danger");
            $("#greske").fadeIn(200);
        }
        else if(email.length == 0){
            $("#greske").html("Email can't be empty");
            $("#greske").addClass("alert").addClass("alert-danger");
            $("#greske").fadeIn(200);
        }
        else if(first_name.length == 0){
            $("#greske").html("First name can't be empty");
            $("#greske").addClass("alert").addClass("alert-danger");
            $("#greske").fadeIn(200);
        }else{
            var valid=true;
            var email_array= [];
            $("#tijelo").find(".email_td").each(function(){
                if($(this).text() == email )
                    valid=false;
            });

            if(valid==false)
            {
                $("#greske").html("Email already added");
                $("#greske").addClass("alert").addClass("alert-danger");
                $("#greske").fadeIn(200);
            }
            else {
                $("#tijelo").append(" <tr>\
                <td class='last_name_td'>" + last_name + "</td>\
                <td class='first_name_td'>" + first_name + "</td>\
                <td class='email_td'>" + email + "</td>\
            </tr>");

                $("#greske").html("");
                $("#greske").fadeOut(200);
              $("#last_name").val("");
              $("#first_name").val("");
                $("#email").val("");

            }
        }
    });

    $("#invite_all_button").click(function(){
        var last_name = [];
        $("#tijelo").find(".last_name_td").each(function(){
            last_name.push($(this).text());
        });

        var first_name = [];
        $("#tijelo").find(".first_name_td").each(function(){
            first_name.push($(this).text());
        });

        var email = [];
        $("#tijelo").find(".email_td").each(function(){
            email.push($(this).text());
        });



        $.post("http://localhost/tracking_vehicles/main/invite_all", {

            "last_name" : last_name,
            "first_name" :first_name,
            "email" : email
        }, function(){
        //prikazati poruku usjesnosti!
    });
    });
</script>


</body>


</html>