        <div class="upper_banner">
            <div class="container-fluid">
                <div class="container">
                    <!-- <h1 class="text-center txt_white m_b_20 txt_52">Cyberdyne System</h1>
                    <h3 class="text-center txt_white m_b_70">Category/Solution Provider Name</h3> -->
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            
                            
                            <?php echo $this->element('Frontend/search_form'); ?>



                            <!-- <p class="txt_16 txt_white text-center after_search m_b_20">Popular Searches: &nbsp;&nbsp;&nbsp; <a href="#">Smart Cities</a> , <a href="#">Utilities</a> , <a href="#">Healthcare</a> , <a href="#">Real Estate</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="my_account_container">
        <div class="container-fluid">
            <!-- <div class="container"> -->
                <div class="row">

                    <div class="col-md-3 col-sm-12">
                        
                        <?php echo $this->element('Frontend/my_account_sidebar'); ?>

                    </div> <!-- /.col-md-3 -->

                    <div class="col-md-9 col-sm-12 my_acc_match_height">
                        
                        <div class="row">
                            <div class="col-lg-11 col-md-12">
                                <div class="my_account_main_content p_tb_80 col_sm_p_tb_60">
                                    <h2 class="txt_black m_b_20">Account Details</h2>
                                    
                                    <div class="my_info_body m_t_30">
                                        <h4 class="txt_black txt_w_600">Personal Information</h4>
                                        <hr class="dark_grey_hr m_t_15">
                                        <div class="my_info_form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="name" class="txt_black">Name</label>
                                                            <input type="text" name="name" class="form-control input_field my_info_input" id="name" placeholder="Enter Your Name" value="<?php echo AuthComponent::user('name'); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="email" class="txt_black">Email</label>
                                                            <input type="text" name="email" class="form-control input_field my_info_input" id="email" placeholder="Enter Your Email" value="<?php echo AuthComponent::user('email'); ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="mobile_number" class="txt_black">Mobile Number</label>
                                                            <input type="text" class="form-control input_field my_info_input" name="contact" id="contact" placeholder="Enter Your Mobile Number" value="<?php echo AuthComponent::user('contact'); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="user_type" class="txt_black">User Type</label>
                                                            <select class="form-control input_field my_info_input" name="type" id="user_type" disabled>
                                                                <option value="Select User Type">Select User Type</option>
                                                                <option value="<?php echo 1; ?>"<?php if(AuthComponent::user('type') == 1)  echo 'selected'; ?> >Solution Provider</option>
                                                                <option value="<?php echo 2; ?>"<?php if(AuthComponent::user('type') == 2)  echo 'selected'; ?> > Solution Seeker</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div> <!-- /.my_info_body -->


                                    <div class="my_info_body m_t_30">
                                        <h4 class="txt_black txt_w_600">Address Information</h4>
                                        <hr class="dark_grey_hr m_t_15">
                                        <div class="my_info_form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="street_address" class="txt_black">Street Address</label>
                                                            <input type="text" class="form-control input_field my_info_input" id="street_address" name="address" placeholder="Enter Street Address" value="<?php echo AuthComponent::user('address'); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="country" class="txt_black">Country</label>
                                                            <input type="text" class="form-control input_field my_info_input" name="country" id="country" placeholder="Enter Country" value="<?php echo AuthComponent::user('country'); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state" class="txt_black">State</label>
                                                            <input type="text" class="form-control input_field my_info_input" name="state" id="state" placeholder="Enter State" value="<?php echo AuthComponent::user('state'); ?>">
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="id" value="<?php echo AuthComponent::user('id'); ?>">
<!--                                                     <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="city" class="txt_black">City</label>
                                                            <input type="text" class="form-control input_field my_info_input" id="city" placeholder="Enter City" value="Calgary">
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </form>
                                        </div>
                                    </div> <!-- /.my_info_body -->

                                    <div class="orange_btns m_t_30">
                                        <ul class="list-unstyled list-inline m_b_0">
                                            <li><input type="submit" name="Update"></li>
                                            <li><a href="<?php echo $this->webroot.'home/my_requirement'?>">Cancel</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                    </div> <!-- /.col-md-9 -->
                    
                </div>
            <!-- </div> -->
        </div>
    </div>


