$(document).ready(function(){
    $('#add').on('click',function(){
        var st = '';
        $('#myForm input[type=text]').each(function(){
            st = st+ '<td>'+$(this).val()+'</td>';
            $(this).val('');
        });
        $('#details').append('<tr>'+st+'</tr>');
    });
});