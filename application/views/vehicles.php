
<div class ="col-md-9">
    <table id="filteri_vozila" style="width: 50%; margin: 1em;" cellpadding="3" cellspacing="0" border="0">
        <tbody>
            <tr>
                <td align="center" id="registration"></td>
                <td align="center" id="type"></td>
                <td align="center" id="vehicle_status"></td>
            </tr>
            <a href = "<?php echo site_url('main/create_vehicles');?>"><input type="button" id="buttons" value="Create vehicle"></a>
        </tbody>
    <br>
 </table>

    <table id="vehicles"  class="display"  cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name of vehicle</th>
                <th>Registration marks</th>
                <th>Date of last registration</th>
                <th>Type of vehicle</th>
                <th>Status</th>
                <th>Fuel type</th>
                <th>Icon</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
             
            <tr>
                <?php foreach ($query->result_array() as $key) {
                 ?>
                <td><?php echo $key['vehicle_name'];?></td>
                <td><?php echo $key['licence_plates'];?></td>
                <td><?php echo $key['registration_date'];?></td>
                <td><?php echo $key['vehicle_type'];?></td>
                <td><?php echo $key['vehicle_status'];?></td>
                <td><?php echo $key['fuel_type'];?></td>
                <td><?php echo $key['icon'];?></td>
                <td><a href = "<?php $id=$key['vehicle_id']; echo 'edit_vehicles/'.$id;?>">Edit</a>  <a href="" class="editor_remove">Delete</a></td>

            </tr>
         <?php }?>
        </tbody>

    </table>
    <br><br><br><br><br><br>

<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.1/js/jquery.dataTables.js"></script> <!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/plug-ins/be7019ee387/integration/jqueryui/dataTables.jqueryui.js"></script>
<script type="text/javascript" charset="utf8" src="http://jquery-datatables-column-filter.googlecode.com/svn/trunk/media/js/jquery.dataTables.columnFilter.js"></script>

<script type="text/javascript" charset="utf8" src="<?php echo base_url();?>/bootstrap3.2/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>/js/vehicles.js"></script>
</div>
</div>
