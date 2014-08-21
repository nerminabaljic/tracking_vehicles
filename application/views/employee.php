<div class ="col-md-9">
    <table id="filter" style="width: 50%; margin: 1em;" cellpadding="3" cellspacing="0" border="0">

    <tbody>
         <tr>
            <td align="center" id="gender"></td>
            <td align="center" id="position"></td>
            <td align="center" id="status"></td>
        </tr>
         <a href = "<?php echo site_url('main/invite');?>" class="btn btn-inverse"  id="buttons"><span class="glyphicon glyphicon-plus"></span> Invite employee</a>
    </tbody>
<br>
</table>



    <table id="example"  class="display"  cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Date of birth</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Mobile number</th>
            <th>Address</th>
            <th>Status</th>
            <th lang="100">Action</th>
        </tr>
        </thead>


        <tbody>

        <?php foreach ($query->result_array() as $row){?>
            <tr>
                <td><?php echo $row['FirstName'];?></td>
                <td><?php echo $row['LastName'];?></td>
                <td><?php echo $row['email'];?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Aktivan</td>
                <td><a class="btn btn-info" href = "<?php $username=$row['FirstName']; echo 'edit_employee/'.$username;?>"><i class="fa fa-pencil-square-o"></i></a>  <a href="" class="btn btn-danger"> <i class="fa fa-trash-o fa-lg"></i></a></td>

            </tr>
        <?php }?>
        </tbody>
    </table>

    <br><br>
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.1/js/jquery.dataTables.js"></script> <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/plug-ins/be7019ee387/integration/jqueryui/dataTables.jqueryui.js"></script>
    <script type="text/javascript" charset="utf8" src="http://jquery-datatables-column-filter.googlecode.com/svn/trunk/media/js/jquery.dataTables.columnFilter.js"></script>
    <!-- <script type="text/javascript" charset="utf8" src="http://editor.datatables.net/media/js/dataTables.editor.min.js"> -->
    <script type="text/javascript" charset="utf8" src="<?php echo base_url();?>/bootstrap3.2/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>/js/employee.js"></script>
</div>

