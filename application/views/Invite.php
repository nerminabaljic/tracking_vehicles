<div class ="col-md-8">
    <h3> Invite employ </h3> <br>

    <label id="greske" hidden></label>

    <input type="text" id="url_base" name="first_name" value="<?php echo base_url(); ?>" hidden="hidden">

    <form class="form-inline" id="myForm" method="post" target="_parent">
        <input type="text" id="first_name" name="first_name" class="form-control" value="<?php $this->input->post('first_name'); ?>"  placeholder="Enter first name">

        <input type="text" id="last_name" name="last_name" class="form-control" value="<?php $this->input->post('last_name'); ?>" placeholder="Enter last name">
        <input type="text" id="email" name="email" class="form-control" value="<?php $this->input->post('email'); ?>" placeholder="Enter email">
        <input id="add_to_invite_submit" type="button" class="btn btn-default" value="  ADD " name="submit">
        <br><br>

        <table class="table table-striped table-bordered tablesorter" id="tusers">
            <h3> Send all invite </h3>
            <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody id="tijelo">
            </tbody>
        </table>

        <button class="btn btn-default" id="invite_all_button">Invite All</button>

        <br><br><br>
    </form>
    <label id="succes" hidden></label>
    <br>
    <br>




</div>
</div> <!-- container -->


<script src="<?php echo base_url();?>/lib/jquery-1.11.1.min.js"></script>
<!--
<script src="<?php echo base_url();?>/js/invite.js"></script>
-->

<script>

    $("#myForm").submit(function(){
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
                <td class='delete_td' onclick='deleteRow(this)'>" + "X" + "</td>\
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
        var url = $("#url_base").val();

        $.post(url+"main/invite_all", {

            "last_name" : last_name,
            "first_name" :first_name,
            "email" : email
        }, function(){
            $("#succes").html("Successfully send invitations!");
            $("#succes").addClass("alert").addClass("alert-success");
            $("#succes").fadeIn(200);
        });
    });
    function deleteRow(td) {
        td.parentNode.parentNode.removeChild(td.parentNode);
    }
</script>


