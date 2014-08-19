<h2 style="color:#585858">Employee profile</h2>

<section>

    <div class="table-responsive">
        <div style="position:relative;">
            <img src="<?php echo base_url();?>/images/default_user_icon.jpg" id="profile-avatar" alt="Image for Profile"/>


                <input type="file"  class="file" name="userfile" size="20"/>
                <br>


                <input type="submit" name="upload" value="Upload"/><br>





            <span class='label label-info' id="upload-file-info"></span>


        </div>
    </div>


    <div id="profile">
        <?php  echo form_open('main/update_employee');?>
        <input type="text" name="id" value="<?php echo $user_id;?>" hidden="true"/>
        <ul>
            <li>
                <label for="name">First name:</label>
                <input type="text" name="fname" value="<?php echo $first_name;?>"/>
            </li>


            <li>
                <label for="name">Last name:</label>
                <input type="text" name="lname" value="<?php  echo $last_name;?>" />
            </li>
            <li>
                <label for="name">Email:</label>
                <input type="text" name="email" value="<?php echo $email;?>" />
            </li>
            <li>
                <label for="name">Date of birth</label>
                <input  type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="birthday" value="<?php echo $birthday;?>">
            </li>
            <li>
                <label for="name" >Gender</label>
                <select name="gender">
                    <option><?php echo $sex;?></option>
                    <option>M</option>
                    <option>F</option>
                </select>
            </li>
            <li>
                <label for="name">Position:</label>
                <input type="text" name="position"  value="<?php echo $work_place;?>" />
            </li>
            <li>
                <label for="name" >Mobile number:</label>
                <input type="text" name="mobile" value="<?php echo $phone;?>" />
            </li>
            <li>
                <label for="name" >Address:</label>
                <input type="text" name="address" value="<?php echo $address;?>"/>
            </li>
            <li>
                <label for="name" value="<?php echo $status;?>">Status</label>
                <select name="status">
                    <option ><?php if($status == 1) echo 'Active'; else echo 'Inactive'?></option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </li>

        </ul>

    </div>
    <br>
    <input class="btn btn-default" type="submit" value="UPDATE" name="UPDATE">
    <input class="btn btn-default" type="reset" value="CANCEL" name="CANCEL">
    <br><br><br><br><br><br>
</section>


<script src="<?php echo base_url();?>/js/create_vehicles.js"></script>