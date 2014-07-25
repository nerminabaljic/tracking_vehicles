<<<<<<< Updated upstream

=======
var users = {};
>>>>>>> Stashed changes

$(document).ready(function(){
    $('#add').on('click',function(){
        var fname = $('#exampleInputFname').val();
        var lname = $('#exampleInputLname').val();
        var email = $('#exampleInputEmail').val();

        if( fname != '' && lname != '' && email != '' )
        {
            users.email = {};
            users[email].fname = fname;
            users[email].lname = lname;
            users[email].email = email;

            generateTable( fname, lname, email );
        }
        else
        {
            alert("Your data is empty!")
        }

    });

    $('#submit').on('click',function(){
        console.log("users =" + JSON.stringify( users ) );
        $.ajax({
            method: 'POST',
            url:'send_invite.php',
            data: users,
            success: function(){

            }
        });
    });

});

function testFunction(elem) {
    var email = $(elem).closest('tr').find('.email').val();
    $(elem).closest('tr').remove();
    delete users[email];
}

function generateTable(  fname, lname, email ){
    var f = createDocumentFragment();
    f.innerHTML += '<td>' + fname + '</td>';
    f.innerHTML += '<td>' + lname + '</td>';
    f.innerHTML += '<td>' + email + '</td>';
    f.innerHTML += '<td onclick="testFunction(this)">' + x + '</td>';

<<<<<<< Updated upstream
}

=======
    document.getElementById('#tijelo').appendChild( f );
}
>>>>>>> Stashed changes
