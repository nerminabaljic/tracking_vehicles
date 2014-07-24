$(document).ready(function(){
    $('#example').DataTable({
        bJQueryUI: true,
        sPaginationType: "full_numbers",
        //scrollX: true
        bprocessing: true,
        bserverSide: true,
        bAutoWidth: false
        //ajax: "data/objects.txt",
        // columns: [
        //	{ "data": "first_name" },
        //  { "data": "last_name" },
        //	{ "data": "email" },
        //	{ "data": "date_of_birth" },
        //	{ "data": "gender" },
        // { "data": "position" },
        //   { "data": "mobile_number" },
        //   { "data": "address" },
        //  { "data": "status" }
        //]

    });
    $('#example').dataTable().columnFilter({
        aoColumns:[
            null, null, null, null,
            { sSelector:"#gender", type:"select"},
            { sSelector: "#position", type:"select" },
            null,null,
            { type:"select", sSelector: "#status" }
        ]
    });

});