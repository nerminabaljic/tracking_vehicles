
<div class ="col-md-9">
    <table id="filter" style="width: 50%; margin: 1em;" cellpadding="3" cellspacing="0" border="0">

    <tbody>
        <tr>
            <td align="center" id="gender"></td>
            <td align="center" id="position"></td>
            <td align="center" id="status"></td>
        </tr>
    </tbody>
    <div id="invite" class ="col-md-2">
        <ul class= "nav nav-pills nav-stacked">
            <li class="active"><a href = "<?php echo site_url('main/logirajSe');?>"">Invite employee</a></li>
        </ul>
    </div>


    </table>

    <table id="example"  class="display"   cellspacing="0" width="100%">
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
               <!-- <th>Edit/ Delete</th> -->
            </tr>
        </thead>


        <tbody>

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
</div>
