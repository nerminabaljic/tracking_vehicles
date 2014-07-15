$(document).ready(function(){
     $("#get_started").click(function(){    
        var name = $("#username").val();
        var pass = $("#password").val();

        console.log("user = " + name + ", pass = " + pass);

        $.ajax({
        method: "POST",
        //url: "login.php",
        data: { username1:name, password1:pass },
        success: function(response){
           if(response==0) alert("Wrong username or password");
           else if(response==1) alert("sign In...");
           }    
                
        });

    });
	$("#CANCEL").click(function(){
	document.getElementById("username").value = "";
	document.getElementById("password").value = "";
	});
});

