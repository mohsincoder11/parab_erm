<div class="tab-pane fade show active" id="v-line-pills-home" role="tabpanel" aria-labelledby="v-line-pills-home-tab">
    <h5 class="mb-4">Basic Information</h5>
    <form method="POST" id="update_basic_form" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <input type="hidden" name="hidden_id" class="hidden_id">
            <div class="col-md-4 form-group">
                <label>Employee Id *</label>
                <input type="text" name="employeeID" id="employeeID" required class="form-control"
                    placeholder="Employee Id">
            </div>

            <div class="col-md-4 form-group">
                <label>Full Name *</label>
                <input type="text" name="full_name" id="full_name" required class="form-control"
                    placeholder="Full Name">
            </div>
            <div class="col-md-4 form-group">
                <label>Father's Name *</label>
                <input type="text" name="fathers_name" id="fathers_name" required class="form-control"
                    placeholder="Father Name ">
            </div>
            <div class="col-md-4 form-group">
                <label>Email *</label>
                <input type="text" name="email" id="email" required class="form-control" placeholder="Email  ">
            </div>
            <div class="col-md-4 form-group">
                <label> Contact *</label>
                <input type="text" name="phone" id="phone" required class="form-control" placeholder=" Contact ">
            </div>

            <div class="col-md-4 form-group">
                <label>Emergency Contact *</label>
                <input type="text" name="emergency_phone" id="emergency_phone" required class="form-control"
                    placeholder="Emergency Contact ">
            </div>

            <div class="col-md-4 form-group">
                <label>Gender *</label>
                <select class="form-control selectpicker" name="gender" id="gender" data-live-search="true"
                    data-live-search-style="begins" title='Select Company Type...'>
                    <option value="" disabled selected>
                        Select Gender</option>
                    <option value="corporation">Male
                    </option>
                    <option value="exempt organization">
                        female</option>
                    <option value="partnership">other
                    </option>
                </select>
            </div>

            <div class="col-md-4 form-group">
                <label>Company *</label>
                <select class="form-control selectpicker companies" name="company_id" id="company_id"
                    data-live-search="true" data-live-search-style="begins" title='Select Company...'>
                    <option value="" disabled selected>Select Company</option>
                </select>
            </div>

            <div class="col-md-4 form-group">
                <label>Project *</label>
                <select class="form-control selectpicker project" name="project_id" id="project_id"
                    data-live-search="true" data-live-search-style="begins">
                    <option value="" disabled selected>Select Project</option>
                </select>
            </div>
            <div class="col-md-4 form-group">
                <label>Department *</label>
                <select class="form-control selectpicker department" name="department_id" id="department_id"
                    data-live-search="true" data-live-search-style="begins">
                    <option value="" disabled selected>Select Department</option>
                </select>
            </div>
            <div class="col-md-4 form-group">
                <label>Designation *</label>
                <select class="form-control selectpicker designation" name="designation_id" id="designation_id"
                    data-live-search="true" data-live-search-style="begins">
                    <option value="" disabled selected>Select Designation</option>
                </select>
            </div>

            <div class="col-md-4 form-group">
                <label>Office Shift *</label>
                <select class="form-control selectpicker officeshift" name="shift_id" id="shift_id"
                    data-live-search="true" data-live-search-style="begins">
                </select>
            </div>




            <div class="col-md-6 form-group">
                <label>Present Address </label>
                <textarea name="present_address" id="present_address" class="form-control"
                    placeholder=Address></textarea>
            </div>

            <div class="col-md-6 form-group">
                <label>Permamnent Address </label>
                <textarea name="permanent_address" id="permanent_address" class="form-control"
                    placeholder=Address></textarea>
            </div>

            <div class="col-md-4 form-group">
                <label>City*</label>
                <input type="text" name="city" id="city" required class="form-control" placeholder="City ">
            </div>
            
            <div class="col-md-4 form-group">
                <label>Blood Group *</label>
                <input type="text" name="blood_group" id="blood_group" required class="form-control"
                    placeholder="Blood Group  ">
            </div>


            <div class="col-md-4 form-group">
                <label>State /Province*</label>
                <select name="state" id="state" class="form-control selectpicker" data-live-search="true"
                    data-live-search-style="begins" title='Select State...'>
                    <option disabled selected value>Select State</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands
                    </option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
               
            </div>


            <div class="col-md-4 form-group">
                <label> Date of Birth *</label>
                <input type="date" name="dob" id="dob" class="form-control date" value="">
            </div>

            <div class="col-md-4 form-group">
                <label> Date of Joining *</label>
                <input type="date" name="joining_date" id="joining_date" class="form-control date" value="">
            </div>

            <div class="col-md-4 form-group">
                <label> Date of Leaving *</label>
                <input type="date" name="leaving_date" id="leaving_date" class="form-control date" value="">
            </div>


            <div class="col-md-4 form-group">
                <label>Confirmation Date *</label>
                <input type="date" name="confirmation_date" id="confirmation_date" class="form-control date" value="">
            </div>

            <div class="col-md-4 form-group">
                <label>Reporting To *</label>
                <select class="form-control selectpicker reporting_to" name="reporting_to" id="reporting_to"
                    data-live-search="true" data-live-search-style="begins">
                    <option value="" disabled selected>Select Project</option>
                </select>
            </div>



            <div class="form-group" align="center" style="margin-top: 4%;">

                <input type="submit" name="action_button" class="btn btn-primary" value=Save />
            </div>
        </div>
    </form>

</div>