<h2 style="color:#585858">Employee profile</h2>

<div class="table-responsive">
    <div style="position:relative;">
        <a class='btn btn-default' href='javascript:;'>
            Insert a picture
            <input type="file" class="file" name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
        </a>
        &nbsp;
        <span class='label label-info' id="upload-file-info"></span>
    </div>
    <br>


    <div class="form-group">
            <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Last name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email">
        </div>

        <input placeholder="Date of birth " class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" >
    <br>

        <select  class="form-control">
            <option>Gender</option>
            <option>M</option>
            <option>F</option>
        </select>
        <br>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Position">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Mobile number">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Address">
        </div>

        <select class="form-control">
            <option>Status</option>
            <option>Active</option>
            <option>Inactive</option>
        </select>

        <br>

        <input class="btn btn-primary" type="submit" value="UPDATE" name="UPDATE">
        <input class="btn btn-primary" type="reset" value="CANCEL" name="CANCEL">
    </div>
<br><br><br><br><br>