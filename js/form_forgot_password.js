$(document).ready(function(){
    $("#reset_password").click(function(){
        var email = $("#email").val();
        var data = { email : email };

        console.log("email = " + email + ", data = " + data);

        $.ajax({
            method: "POST",
            url: "forgot.php",
            data: data,
            success: function(response){

                //ERROR WILL BE SHOWN IN THE "#error" ELEMENT
                if( parseInt(response) == 0){
                    $("#error").html( "Email adress does not exist" );
                }
                else if( parseInt(response) == 1 ){
                    //GOES THE "CHANGE PASSWORD" FORM UPON LOGGING IN
                    window.location = "profile.php";
                }
            }
        });
    });
});
