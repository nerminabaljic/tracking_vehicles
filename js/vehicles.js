$(document).ready(function(){
    $('#vehicles').DataTable({
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
    $('#vehicles').dataTable().columnFilter({
        sPlaceHolder: "head:before",
        aoColumns:[
            null, null,
            { sSelector:"#registration", type:"select"},
            { sSelector: "#type", type:"select" },
            { type:"select", sSelector: "#vehicle_status" },
            null, null,null
        ]
    });

});
