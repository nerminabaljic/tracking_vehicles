<h2 style="color:#585858 ">Add Vehicle </h2>

<div class="table-responsive">
    <div class="form-horizontal">

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name of vehicle" value="<?php $this->input->post('name_of_vehicle'); ?>">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Registration marks" value="<?php $this->input->post('registration_marks'); ?>">
        </div>

        <input placeholder="Date of last registration" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" value="<?php $this->input->post('date_of_lst_registration'); ?>">
        <br>


        <select class="form-control">
            <option>Type of vehicle</option>
            <option>Limousine</option>
            <option>Caravan</option>
            <option>Lorry</option>
        </select>
        <br>

        <select class="form-control">
            <option>Status</option>
            <option>Active</option>
            <option>Inactive</option>
        </select>

        <br>
        <select class="form-control">
            <option>Fuel type</option>
            <option>Diesel</option>
            <option>Benzine</option>
        </select>
        <br>

        <div style="position:relative;">
            <a class='btn btn-default' href='javascript:;'>
                Insert a picture of vehicle
                <input type="file" class="file" name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
            </a>
            &nbsp;
            <span class='label label-info' id="upload-file-info"></span>
        </div>

        <br>


        <input class="btn btn-primary" type="submit" value="ADD VEHICLE" name="ADD VEHICLE">
        <input class="btn btn-primary" type="reset" value="CANCEL" name="CANCELS">
    </div>
</div>
</div>
<br><br>