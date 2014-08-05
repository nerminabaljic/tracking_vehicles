
<div class ="col-md-9">
    <table id="filteri_vozila" style="width: 50%; margin: 1em;" cellpadding="3" cellspacing="0" border="0">
        <tbody>
            <tr>
                <td align="center" id="registration"></td>
                <td align="center" id="type"></td>
                <td align="center" id="vehicle_status"></td>
            </tr>
        </tbody>
        <div id="invite"
        <div class ="col-md-2">
            <div id="navigation">
                <ul class="top-level">
                <li class="active"><a href = "<?php echo site_url('main/create_vehicles');?>" ">Create vehicle</a></li>
            </ul>
            </div>
        </div>
    </div>
<br>
 </table>

    <table id="vehicles"  class="display"  cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name of vehicle"</th>
                <th>Registration marks</th>
                <th>Date of last registration</th>
                <th>Icon</th>
                <th>Type of vehicle</th>
                <th>Status</th>
                <th>Fuel type</th>
                <th>Picture of vehicle</th>
            </tr>
        </thead>

        <tbody></tbody>

    </table>
    <br><br>

<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.1/js/jquery.dataTables.js"></script> <!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/plug-ins/be7019ee387/integration/jqueryui/dataTables.jqueryui.js"></script>
<script type="text/javascript" charset="utf8" src="http://jquery-datatables-column-filter.googlecode.com/svn/trunk/media/js/jquery.dataTables.columnFilter.js"></script>

<script type="text/javascript" charset="utf8" src="<?php echo base_url();?>/bootstrap3.2/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>/js/vehicles.js"></script>
</div>
</div>
