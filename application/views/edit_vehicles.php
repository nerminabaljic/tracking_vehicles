<section>
    <h2 style="color:#585858 ">Vehicle profile </h2>

    <div class="table-responsive">
        <?php echo form_open_multipart('main/update_vehicle');?>
        <div style="position:relative">
            <?php if($photo!=''){$image=base_url()."media/vehicle/".$photo;}else{$image=base_url()."images/car.jpg"; $photo="default.jpg";}?>
            <img src="<?php echo $image;?>" id="profile-avatar" alt="Image for Profile">

            <a class='btn btn-default' href='javascript:;'>
                <input type="file" class="file" name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                Insert a picture
            </a>

            <br>

        </div>
    </div>


    <div id="profile">
        <?php  echo form_open('main/update_vehicle');?>

        <input type="text" name="id" value="<?php echo $vehicle_id;?>" hidden="true"/>
        <input type="text" name="vphoto" value="<?php echo $photo;?>" hidden="true" />
        <ul>
            <li>
                <label for="name">Name of vehicle:</label>
                <input type="text" name="vname" value="<?php echo $vehicle_name;?>" />
            </li>
            <li>
                <label for="name">Licence plates:</label>
                <input type="text" name="lplates" value="<?php echo $licence_plates;?>"/>
            </li>
            <li>
                <label for="name">Date of last registration:</label>
                <input  type="text" onfocus="(this.type='date')" onblur="(this.type='text')" value="<?php echo $registration_date;?>" name="reg_date">
            </li>
            <li>
                <label for="name">Type of vehicle:</label>
                <select name="vtype">
                    <option><?php echo $vehicle_type;?></option>
                    <option>Limousine</option>
                    <option>Caravan</option>
                    <option>Lorry</option>
                </select>
            </li>
            <li>
                <label for="name">Status</label>
                <select name="vstatus">
                    <option><?php echo $vehicle_status;?></option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </li>
            <li>
                <label for="name">Fuel type</label>
                <select name="ftype">
                    <option><?php echo $fuel_type;?></option>
                    <option>Diesel</option>
                    <option>Benzine</option>
                </select>
            </li>
            <li>
                <label for="name">Icon</label>
                <select name="icon" >
                    <option></option>
                    <option></option>
                    <option></option>
                </select>
            </li>


        </ul>





    </div>

    <input class="btn btn-default" type="submit" value="UPDATE" name="UPDATE">

    <br><br><br>
</section>


<script src="<?php echo base_url();?>/js/create_vehicles.js"></script>