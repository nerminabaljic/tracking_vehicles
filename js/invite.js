
$(document).ready(function(){
    $('#add').on('click',function(){
        var st = '';
        $('#myForm input'[type=text]).each(function(){
            st = st+ '<td>'+$(this).val()+'</td>';
            $(this).val('');
        });
		st += '<td id="test1" onclick="testFunction(this)">x</td>';
        $('#details').append('<tr>'+st+'</tr>');
			$('#submit').removeClass('submit');
    });
});

function testFunction(td) {	
	td.parentNode.parentNode.removeChild(td.parentNode);
		$('#submit').addClass('#submit');
	
}