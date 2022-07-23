@extends ('layout/layout')
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div style="margin-top: 3%; margin-bottom: 3%;">
            <div>
                <div>
                    <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal"
                        data-target=".bd-example-modal-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>Add New Company</button>
                    <!-- <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal" id="bulk_delete"><svg
                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                clip-rule="evenodd" />
                        </svg>Bulk Delete</button> -->

                </div>

                <!-- Model Start -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabel">Add New Company</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <span id="store_logo"></span>
                             <span id="form_result"></span>
                            <form method="POST" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div class="row" style="padding: 10px;">
                                     
                                    <div class="col-md-6 form-group">
                                        <label>Sector Type *</label>
                                        <select name="sector_type" id="sector_type" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Sector Type...'>
                                            <option value="" disabled selected>Sector Type</option>
                                            <option value="Goverment">Goverment</option>
                                            <option value="Semi-Goverment">Semi-Goverment</option>
                                            <option value="Private">Private</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>Business / Entity Type *</label>
                                        <select name="company_type" id="company_type" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Company Type...'>
                                            <option value="" disabled selected>Entity Type</option>
                                            <option value="Sole_Proprietorship">Sole Proprietorship</option>
                                            <option value="Partnership">Partnership</option>
                                            <option value="Joint-Venture Company">Joint-Venture Company</option>
                                            <option value="Limited Liability Partnership">Limited Liability Partnership</option>
                                            <option value="Private Limited Companies">Private Limited Companies</option>
                                            <option value="Public Limited Companies">Public Limited Companies</option>
                                            <option value="One-Person Companies">One-Person Companies</option>
                                            <option value="Exempt Organization">Exempt Organization</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>Business / Entity Name *</label>
                                        <input type="text" name="company_name" id="company_name" required
                                            class="form-control" placeholder="Business Entity Name ">
                                    </div>
                                  
                                    <div class="col-md-6 form-group">
                                        <label>Trading Name *</label>
                                        <input type="text" name="trading_name" id="trading_name" class="form-control"
                                           required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Company Logo </label>
                                        <input type="file" name="company_logo" id="company_logo" class="form-control"
                                            placeholder=Optional>
                                        <span id="store_logo"></span>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>Email *</label>
                                        <input type="text" name="email" id="email" class="form-control" required
                                            placeholder=Email>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Contact Number </label>
                                        <input type="text" name="contact_no" id="contact_no" class="form-control" required
                                            placeholder="Contact No">
                                    </div>
                                    
                                    <div class="col-md-6 form-group">
                                        <label>Registered Address </label>
                                        <textarea name="registered_address" id="registered_address" class="form-control"
                                            placeholder=Optional></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>City</label>
                                        <input type="text" name="city" id="city" class="form-control"
                                            placeholder=Optional>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>State </label>
                                        <select name="state" id="state"
                                            class="form-control selectpicker" data-live-search="true"
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
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Zip code</label>
                                        <input type="text" name="zip_code" id="zip_code" class="form-control"
                                            placeholder=Optional>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>Website</label>
                                        <input type="text" name="website" id="website" class="form-control"
                                           >
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>Contact Person Name *</label>
                                        <input type="text" name="contact_person_name" id="contact_person_name" class="form-control"
                                            required>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>Mobile No. *</label>
                                        <input type="text" name="person_mobile" id="person_mobile" class="form-control"
                                           required>
                                    </div>
                                    
                                
                                  
                                    <!-- end of documents -->
                                 
                                    <div class="row alldocumets">
                                        <div class="col-md-12 alldoc" >
                                            <div class="form-group">
                                                        <div class="input-group mb-md-0 mb-4">
                                                            <div class="col-md-5 form-group">
                                                <label>Upload Business / Entity Documents  *</label>
                                                <select name="document_type[]" class="form-control selectpicker"
                                                    data-live-search="true" data-live-search-style="begins"
                                                   >
        
                                                   <option value="" disabled selected>Document Name</option>
                                                   <option value="Adhar Card">Aadhar Card</option>
                                                   <option value="PAN card">PAN Card</option>
                                                   <option value="Electricity Bill">Electricity Bill</option>
                                                   <option value="Voter ID">Voter ID</option>
                                                   <option value="Passport">Passport</option>
                                                   <option value="Partnership Deed">Partnership Deed</option>
                                                   <option value="TAN No.">TAN No.</option>
                                                   <option value="CIN No.">CIN No.</option>
                                                   <option value="UDYAM">UDYAM</option>
                                                   <option value="Registration Certificate (By Govt.)">Registration Certificate (By Govt.)</option>
                                                   <option value="Other">Other</option>
        
                                                </select>
                                            </div>
                                            
                                            <div class="col-md-5 form-group">
                                                <label>Document *</label>
                                                <input type="file" name="document[]"   class="form-control" >
                                            </div>
                                            <div class="col-md-2 form-group " align="center" style="padding-top: 4%;">
                                                <input type="button" class="btn btn-primary adddoc" value="+" id="adddocument"/>
                                            </div>
        
                                                            
                                                        </div>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-12 form-group text-center" >
                                        <input type="submit" class="btn btn-warning" id="create"/>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- model end -->


                <!--edit Model Start -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" id="editmodel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabel">Edit</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <span id="store_logo1"></span>
                             <span id="form_result1"></span>
                            <form method="POST" id="update_form" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div class="row" style="padding: 10px;">
                                     <input type="hidden" name="hidden_id" id="hidden_id">
                                    <div class="col-md-6 form-group">
                                        <label>Sector Type *</label>
                                        <select name="sector_type1" id="sector_type1" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Sector Type...'>
                                            <option value="" disabled selected>Sector Type</option>
                                            <option value="Goverment">Goverment</option>
                                            <option value="Semi-Goverment">Semi-Goverment</option>
                                            <option value="Private">Private</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>Business / Entity Type *</label>
                                        <select name="company_type1" id="company_type1" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Company Type...'>
                                            <option value="" disabled selected>Entity Type</option>
                                            <option value="Sole_Proprietorship">Sole Proprietorship</option>
                                            <option value="Partnership">Partnership</option>
                                            <option value="Joint-Venture Company">Joint-Venture Company</option>
                                            <option value="Limited Liability Partnership">Limited Liability Partnership</option>
                                            <option value="Private Limited Companies">Private Limited Companies</option>
                                            <option value="Public Limited Companies">Public Limited Companies</option>
                                            <option value="One-Person Companies">One-Person Companies</option>
                                            <option value="Exempt Organization">Exempt Organization</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>Business / Entity Name *</label>
                                        <input type="text" name="company_name1" id="company_name1" required
                                            class="form-control" placeholder="Business Entity Name ">
                                    </div>
                                  
                                    <div class="col-md-6 form-group">
                                        <label>Trading Name *</label>
                                        <input type="text" name="trading_name1" id="trading_name1" class="form-control"
                                           required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Company Logo </label>
                                        <input type="file" name="company_logo1" id="company_logo1" class="form-control"
                                            placeholder=Optional>
                                        <span id="store_logo"></span>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>Email *</label>
                                        <input type="text" name="email1" id="email1" class="form-control" required
                                            placeholder=Email>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Contact Number </label>
                                        <input type="text" name="contact_no1" id="contact_no1" class="form-control" required
                                            placeholder="Contact No">
                                    </div>
                                    
                                    <div class="col-md-6 form-group">
                                        <label>Registered Address </label>
                                        <textarea name="registered_address1" id="registered_address1" class="form-control"
                                            placeholder=Optional></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>City</label>
                                        <input type="text" name="city1" id="city1" class="form-control"
                                            placeholder=Optional>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>State </label>
                                        <select name="state1" id="state1"
                                            class="form-control selectpicker" data-live-search="true"
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
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Zip code</label>
                                        <input type="text" name="zip_code1" id="zip_code1" class="form-control"
                                            placeholder=Optional>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Website</label>
                                        <input type="text" name="website1" id="website1" class="form-control"
                                           >
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Contact Perosn Name *</label>
                                        <input type="text" name="contact_person_name1" id="contact_person_name1" class="form-control"
                                            required>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>Mobile No. *</label>
                                        <input type="text" name="person_mobile1" id="person_mobile1" class="form-control"
                                           required>
                                    </div>
                                    <!-- end of documents -->
                                 
                                    <div class="row alldocumets">
                                        <div class="col-md-12 alldoc" >
                                            <div class="form-group">
                                                        <div class="input-group mb-md-0 mb-4">
                                                            <div class="col-md-5 form-group">
                                                <label>Upload Business / Entity Documents  *</label>
                                                <select name="document_type[]" class="form-control selectpicker"
                                                    data-live-search="true" data-live-search-style="begins"
                                                   >
        
                                                   <option value="" disabled selected>Document Name</option>
                                                   <option value="Adhar Card">Aadhar Card</option>
                                                   <option value="PAN card">PAN Card</option>
                                                   <option value="Electricity Bill">Electricity Bill</option>
                                                   <option value="Voter ID">Voter ID</option>
                                                   <option value="Passport">Passport</option>
                                                   <option value="Partnership Deed">Partnership Deed</option>
                                                   <option value="TAN No.">TAN No.</option>
                                                   <option value="CIN No.">CIN No.</option>
                                                   <option value="UDYAM">UDYAM</option>
                                                   <option value="Registration Certificate (By Govt.)">Registration Certificate (By Govt.)</option>
                                                   <option value="Other">Other</option>
        
                                                </select>
                                            </div>
                                            
                                            <div class="col-md-5 form-group">
                                                <label>Document *</label>
                                                <input type="file" name="document[]"   class="form-control" >
                                            </div>
                                            <div class="col-md-2 form-group" align="center" style="margin-top: 4%;">
                                                <input type="button" class="btn btn-primary adddoc" value="+" id="adddocument"/>
                                            </div>
        
                                                            
                                                        </div>
                                                    </div>
                                            </div>
                                    </div>

                                    <div class="col-md-12 form-group text-center" >
                                        <input type="submit" class="btn btn-warning" id="create" value="Update"/>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- model end -->


                <!-- view company info-->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" id="viewmodal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel">Company Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                        </div>
                      <div class="container">
                        <table  class="table table-bordered" style="width:100%;">
                            <thead>
                                <tr class="table-bordered">
                                    <th>ID</th>
                                    <td id="view_id"></td>
                                 
                                </tr>
                                <tr  class="table-bordered">
                                    <th>Sector Type</th>
                                    <td id="view_sector_type"></td>
                                   
                                </tr>
                                <tr  class="table-bordered">
                                    <th>Business / Entity Type</th>
                                    <td id="view_company_type"></td>
                                  
                                </tr>
                                <tr  class="table-bordered">
                                    <th>Business / Entity Name</th>
                                    <td id="view_company_name"></td>
                                  
                                </tr>
                                <tr  class="table-bordered">
                                    <th>Trading Name</th>
                                    <td id="view_trading_name"></td>
                                  
                                </tr>
                                <tr  class="table-bordered">
                                    <th>Email</th>
                                    <td id="view_email"></td>
                                 
                                </tr>
                                <tr  class="table-bordered">
                                    <th>Contact Number</th>
                                    <td id="view_contact_no"></td>
                                  
                                </tr>
                                <tr  class="table-bordered">
                                    <th>Registered Address</th>
                                    <td id="view_registerd_address"></td>
                                 
                                </tr> <tr  class="table-bordered">
                                    <th>City</th>
                                    <td id="view_city"></td>
                                   
                                </tr>
                                <tr  class="table-bordered">
                                    <th>State</th>
                                    <td id="view_state"></td>
                                  
                                </tr>
                                <tr class="table-bordered">
                                       <th>Zip Code</th>
                                    <td id="view_zip_code"></td>
                                </tr>
                                <tr class="table-bordered"> <th>Website</th>
                                    <td id="view_website"></td></tr>
                                    <tr>
                                        
                                      <th>Contact Person Name</th>
                                    <td id="view_contact_person_name"></td>
                                    </tr>
                                <tr class="table-bordered">
                                    <th>Mobile Number</th>
                                    <td id="view_person_mobile"></td>
                                </tr>
                                <tr class="table-bordered">
                                    <th>Company Logo</th>
                                    <td id="view_company_logo"></td>
                                </tr>
                                <tr class="table-bordered">
                                    <th>Documents</th>
                                    <td id="view_company_doc"></td>
                                </tr>
                            </thead>
                            <tbody>
                              
                               <tr>
                                   
                                </tr>
                                
                            </tbody>
                        </table>
                      </div>
                      
                    </div>
                </div>
            </div>
            </div>

        </div>


        <div class="row" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <table id="html5-extension" class="table table-hover non-hover datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <!-- <th><input type="checkbox" id="selectall" ></th> -->
                                    <th>Sr.No.</th>
                                    <th>Business / Entity </th>
                                    <th>Sector Type</th>
                                    <th>Trading Name</th>
                                    <th>Email</th>
                                   
                                    <th>Register Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                <?php $i=0; ?>
                                @foreach($companyArr as $data)
                                <tr>
                                    <?php $i=$i+1; ?>
                                    <!-- <td><input type="checkbox" name="delete_id[]" value="{{$data->id}}" class="check" ></td> -->
                                    <td>{{$i}}</td>
                                    <td>{{$data->company_name}}</td>
                                     <td>{{$data->sector_type}}</td>
                                     <td>{{$data->trading_name}}</td>
                                    <td>{{$data->email}}</td>
                                   
                                    <td>
                                      {{$data->registered_address}}
                                    </td>
                                    <td class="text-center">

                                        <a href="javascript:void(0);" data-toggle="modal" data-placement="top" class="company_details" 
                                            title="View" data-target="#viewmodal" data-custom-value="{{$data->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                            </path><circle cx="12" cy="12" r="3"></circle></svg></svg>
                                        </a>

                                            <a href="javascript:void(0);" data-toggle="modal" data-placement="top" class="edit" 
                                            title="Edit" data-target="#editmodel" data-custom-value="{{$data->id}}"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 text-success">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg></a>

                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" class="delete"
                                        data-custom-value="{{$data->id}}"  title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" 
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2 text-danger">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>




@endsection

@section('js')
<script type="text/javascript">

    
    $('#sample_form').on('submit', function (event) {
    

    const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    padding: '2em'
  });



        event.preventDefault();
        $.ajax({
            url: "{{route('orgaization.StoreCompany')}}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            success: function (data) {
                var html = '';
                if (data.errors) {
                    for (var count = 0; count < data.errors.length; count++) {
                          toast({
                        type: 'error',
                        title: data.errors[count],
                        padding: '2em',
                    })
                    }
                }
                if (data.success) {
                    swal({
                        title: 'Added!',
                        text: data.success,
                        type: 'success',
                        padding: '2em',
                        showCancelButton: false,
                        showConfirmButton: false
                    })
                    html = '<div class="alert alert-success">' + data.success + '</div>';
                    $('#sample_form')[0].reset();
                    setTimeout(function () {
                        location.reload();
                    }, 1500);
                }
            }
        });
    });


  
    $('.adddoc').on('click', function() {
      
        
        var html = `
        <div class="col-md-12 alldoc" >
                                    <div class="form-group">
                                                <div class="input-group mb-md-0 mb-4">
                                                    <div class="col-md-5 form-group">
                                        <label>Upload Business / Entity Documents  *</label>
                                        <select name="document_type[]" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                           >

                                           <option value="" disabled selected>Document Name</option>
                                           <option value="Adhar Card">Aadhar Card</option>
                                           <option value="PAN card">PAN Card</option>
                                           <option value="Electricity Bill">Electricity Bill</option>
                                           <option value="Voter ID">Voter ID</option>
                                           <option value="Passport">Passport</option>
                                           <option value="Partnership Deed">Partnership Deed</option>
                                           <option value="TAN No.">TAN No.</option>
                                           <option value="CIN No.">CIN No.</option>
                                           <option value="UDYAM">UDYAM</option>
                                           <option value="Registration Certificate (By Govt.)">Registration Certificate (By Govt.)</option>
                                           <option value="Other">Other</option>

                                        </select>
                                    </div>
                                    
                                    <div class="col-md-5 form-group">
                                        <label>Document *</label>
                                        <input type="file" name="document[]"   class="form-control" >
                                    </div>
                                    <div class="col-md-2 form-group " align="center" style="padding-top: 4%;">
                                                <input type="button" class="btn btn-danger deletedocument  w-40" value="x" id="adddocument"/>
                                            </div>
                                                   
                                                </div>
                                            </div>
                                    </div>`;
        $('.alldocumets').append(html);
    });

    
    $(document).on('click', '.deletedocument', function() {
        $(this).closest('.alldoc').remove();
    });


    $('#update_form').on('submit', function (event) {
        const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    padding: '2em'
  });
        event.preventDefault();
        $.ajax({
            url: "{{route('orgaization.updatecompany')}}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            success: function (data) {
                console.log("SDfg")
                var html = '';
                if (data.errors) {
                 
                    for (var count = 0; count < data.errors.length; count++) {
                        toast({
                        type: 'error',
                        title: data.errors[count],
                        padding: '2em',
                    })
                    }
                  
                }
                if (data.success) {
                    swal({
                        title: 'Update!',
                        text: data.success,
                        type: 'success',
                        padding: '2em',
                        showCancelButton: false,
                        showConfirmButton: false
                    })
                    html = '<div class="alert alert-success">' + data.success + '</div>';
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }
               
            }
        });
    });




    $('#html5-extension').on('click','.company_details',function(){
        var data=$(this).data();
        var id=data.customValue;

        var target = "{{ url('organization/companies/view')}}/" + id;
        
        $.ajax({
                    url: target,
                    dataType: "json",
                    success: function (html) {
                        $('#view_id').html(html.company.id);
                        $('#view_company_name').html(html.company.company_name);
                        $('#view_sector_type').html(html.company.sector_type);               
                        $('#view_company_type').html(html.company.company_type);
                        $('#view_trading_name').html(html.company.trading_name);
                        $('#view_city').html(html.company.city);
                        $('#view_state').html(html.company.state);
                        $('#view_email').html(html.company.email);
                        $('#view_zip_code').html(html.company.zip_code);
                        $('#view_registerd_address').html(html.company.registered_address);
                        $('#view_contact_person_name').html(html.company.contact_person_name);
                        $('#view_person_mobile').html(html.company.person_mobile);
                        $('#view_contact_no').html(html.company.contact_no);
                        $('#view_website').html(html.company.website);
                       // console.log(html.company.company_logo);
                        let logo=html.company.company_logo;
                        if(logo)
                        $('#view_company_logo').html(`<a target="_blank" href="{{asset('public/companyimg/`+html.company.company_logo+`')}}"> <img src="{{asset('public/companyimg/`+html.company.company_logo+`')}}" style="height:50px; width:auto;" /></a>`);
                        else
                        $('#view_company_logo').html(`<img src="{{asset('public/no-image.png')}}" style="height:50px; width:auto;" /`);

                        var doc='';
                        for(var i=0;i<html.docs.length;i++){
                            doc += `<a href="{{asset('public/companydocs/`+html.docs[i].document+`')}}" target="_blank" style="color:red;">` + html.docs[i].document_name + ` , </a>` ;
                        }
                        $('#view_company_doc').html(doc)
                       
                      
                    }
                })
    });

    $('#html5-extension').on('click','.edit',function(){
        var data=$(this).data();
        var id=data.customValue;

        var target = "{{ url('organization/companies/edit')}}/" + id;
        
        $.ajax({
                    url: target,
                    dataType: "json",
                    success: function (html) {
                        $('#company_name1').val(html.company_name);
                        $('#sector_type1').val(html.sector_type);               
                        $('#company_type1').val(html.company_type);
                        $('#trading_name1').val(html.trading_name);
                        $('#city1').val(html.city);
                        $('#state1').val(html.state);
                        $('#email1').val(html.email);
                        $('#zip_code1').val(html.zip_code);
                        $('#registered_address1').val(html.registered_address);
                        $('#contact_person_name1').val(html.contact_person_name);
                        $('#person_mobile1').val(html.person_mobile);
                        $('#contact_no1').val(html.contact_no);
                        $('#website1').val(html.website);
                        $('#gstin1').val(html.gstin);
                        $('#hidden_id').val(html.id);
                    }
                })
    });


    $('#html5-extension').on('click','.delete',function(){
        var data=$(this).data();
        var id=data.customValue;
        swal({
      title: 'Are you really want to Delete?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Delete',
      padding: '2em'
    }).then(function(result) {

      if (result.value) {
        var target = "{{ url('organization/companies/delete')}}/" + id;

        $.ajax({
        url: target,
        type: "get",
        dataType: "json",
        success: function (data) {
            if (data.success) {
                swal({
                    title: 'Deleted!',
                    text: "Record has been deleted.",
                    type: 'success',
                    padding: '2em',
                    showCancelButton: false, 
                    showConfirmButton: false
                })
        setTimeout(function(){
                location.reload();
                 }, 1000); 
               
            }
        }
        })
      }
    })
    })

    $('#bulk_delete').on('click',function(){
        var i = 0;
       var arr = [];
       $('.check:checked').each(function () {
           arr[i++] = $(this).val();
       });   

    if(arr.length==0){
        swal({
      title: 'Select Records',
      type: 'warning',
      padding: '2em',
      timer: 1000,
      showCancelButton: false, 
    showConfirmButton: false

    })
        return false;
    }
       
       swal({
      title: 'Are you really want to Delete?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Delete',
      padding: '2em'
    }).then(function(result) {

      if (result.value) {
        var target = "{{ url('organization/companies/bulkdelete')}}/" + arr;

        $.ajax({
        url: target,
        type: "get",
        dataType: "json",
        success: function (data) {
            if (data.success) {
                swal({
                    title: 'Deleted!',
                    text: "Records has been deleted.",
                    type: 'success',
                    padding: '2em',
                    showCancelButton: false, 
                    showConfirmButton: false
                })
        setTimeout(function(){
                location.reload();
                 }, 1000); 
               
            }
        }
        })
      }
    })



    })

</script>
@endsection