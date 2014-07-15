$(document).ready(function(){
     $("#reset_password").click(function(){    
        var email = $("#email").val();
		var data = "email="+email;

        console.log("email = " + email + ", data = " + data);

        $.ajax({
        method: "POST",
        //url: "login.php",
        data: data,
        success: function(e){
		
       //ERROR WILL BE SHOWN IN THE "#error" ELEMENT
       if(e){
         $("#error").html(e);
       } 
	   else {
         //GOES THE "CHANGE PASSWORD" FORM UPON LOGGING IN
         window.location = "url: "login.php"";
       }  
       }
    });	
});
});
