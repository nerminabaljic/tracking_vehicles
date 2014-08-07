$(document).ready(function(){
    $('#vehicles').DataTable({
        bJQueryUI: true,
        sPaginationType: "full_numbers",
        //scrollX: true
        bprocessing: true,
        bserverSide: true,
        bAutoWidth: false
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
    $('#vehicles tbody td').each( function() {
        this.setAttribute( 'title', $(this).text());

    });
    var oTable = $('#example').dataTable();

    /* Apply the tooltips */
    $( oTable.fnGetNodes() ).tooltip( {
        "delay": 0,
        "track": true,
        "fade": 250
    } );

});
