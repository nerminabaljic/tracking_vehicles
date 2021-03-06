$(document).ready(function(){
    $('#example').DataTable({
        bJQueryUI: true,
        sPaginationType: "full_numbers",
        //scrollX: true
        bprocessing: true,
        bserverSide: true,
        bAutoWidth: false

    });

    $('#example').dataTable().columnFilter({
        sPlaceHolder: "head:before",

        aoColumns:[
            null, null, null, null,
            { sSelector:"#gender", type:"select" },
            { sSelector: "#position", type:"select" },
            null,null,
            { type:"select", sSelector: "#status" }
        ]
    });
    $('#example tbody td').each( function() {
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
