    <div class ="col-md-8">
        <h3> Invite employ </h3> <br>
        <form class="form-inline" role="form" id="myForm" method="post" target="_parent">
            <input type="text" name="Name" value="" class="form-control" id="exampleInputFname" placeholder="Enter first name">
            <input type="text" name="Name" value="" class="form-control" id="exampleInputLname" placeholder="Enter last name">
            <input type="text" name="Name" value="" class="form-control" id="exampleInputEmail" placeholder="Enter email">
            <input id="add" type="button" class="btn btn-default" value="  ADD " name="submit">
            <br><br>

            <table class="table table-striped table-bordered tablesorter" id="tusers">
                    <h4> Send all invite </h4>
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="tijelo">



                    </tbody>
                </table>

            <input id="submit" type="button" class="submit" value="  SUBMIT  " name="submit">
            <br><br><br>
        </form>


    </div>
</div> <!-- container -->


<script src="../lib/jquery-1.11.1.min.js"></script>
<script src="../js/invite.js"></script>

