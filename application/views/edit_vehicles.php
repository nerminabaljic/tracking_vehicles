<section>
    <h2 style="color:#585858 ">Add Vehicle </h2>

    <div class="table-responsive">
        <div style="position:relative">
            <img src="<?php echo base_url();?>/images/car.jpg" id="profile-avatar" alt="Image for Profile">

            <a class='btn btn-default' href='javascript:;'>
                <input type="file" class="file" name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                Insert a picture
            </a>
            &nbsp;
            <span class='label label-info' id="upload-file-info"></span>
        </div>
    </div>


    <div id="profile">
        <ul>
            <li>
                <label for="name">Name of vehicle:</label>
                <input type="text" name="name" />
            </li>
            <li>
                <label for="name">Registration marks:</label>
                <input type="text" name="name" />
            </li>
            <li>
                <label for="name">Date of last registration:</label>
                <input  type="text" onfocus="(this.type='date')" onblur="(this.type='text')" value="<?php $this->input->post('date_of_lst_registration'); ?>">
            </li>
            <li>
                <label for="name">Type of vehicle:</label>
                <select>
                    <option></option>
                    <option>Limousine</option>
                    <option>Caravan</option>
                    <option>Lorry</option>
                </select>
            </li>
            <li>
                <label for="name">Status</label>
                <select >
                    <option></option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </li>
            <li>
                <label for="name">Fuel type</label>
                <select >
                    <option></option>
                    <option>Diesel</option>
                    <option>Benzine</option>
                </select>
            </li>
            <li>
                <label for="name">Icon</label>
                <select >
                    <option></option>
                    <option></option>
                    <option></option>
                </select>
            </li>
        </ul>
    </div>


    <br><br><br>
</section>


<script src="<?php echo base_url();?>/js/create_vehicles.js"></script>