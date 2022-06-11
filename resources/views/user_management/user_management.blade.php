@extends('layout.layout')
@section('content')
        <div id="content" class="main-content">
            <div class="layout-px-spacing">


                <div style="margin-top: 3%;">
                    <div>
                        <div>
                            <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal"
                                data-target=".bd-example-modal-lg"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>Add Role</button>
                             
                                
                                    <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal" data-target="#exampleModalRemoveAnimation"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                                      </svg>
                                        Bulk Delete
                                    </button> 
                                
                        </div>
                        <!-- Model Start -->
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel">Add New Role</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                    </div>

                             
                                    <div class="row" style="padding: 10px; padding-left: 30%;">

                                        <div class="col-md-6 form-group" align="center">
                                            <label>Role Name *</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected>Select Role</option>
                                                <option value="corporation">1</option>
                                                <option value="exempt organization">2</option>
                                                <option value="partnership">3</option>
                                                <option value="private foundation">4</option>
                                                <option value="limited liability company">5
                                                </option>

                                            </select>
                                        </div>

                                    </div>
                                    <div class="row" style="padding: 10px;">
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            <label for="vehicle1">Location / Branch</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle2" name="vehicle1" value="Bike">
                                            <label for="vehicle2">Project / Cost Center</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle3" name="vehicle1" value="Bike">
                                            <label for="vehicle3">Department</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle4" name="vehicle1" value="Bike">
                                            <label for="vehicle4">Designation</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle5" name="vehicle1" value="Bike">
                                            <label for="vehicle5"> Hierarchy</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle6" name="vehicle1" value="Bike">
                                            <label for="vehicle6">   Allowances /Deduction</label>
                                        </div>
                                    
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle7" name="vehicle1" value="Bike">
                                            <label for="vehicle7"> Salary Structure</label>
                                        </div>
                                       
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle8" name="vehicle1" value="Bike">
                                            <label for="vehicle8"> shift Master</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle9" name="vehicle1" value="Bike">
                                            <label for="vehicle9"> Leave Master</label>
                                        </div>

                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle10" name="vehicle1" value="Bike">
                                            <label for="vehicle10"> Holiday Master</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle11" name="vehicle1" value="Bike">
                                            <label for="vehicle11"> Employee Status</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle12" name="vehicle1" value="Bike">
                                            <label for="vehicle12"> Salary setup</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle13" name="vehicle1" value="Bike">
                                            <label for="vehicle13"> HR Documents</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle14" name="vehicle1" value="Bike">
                                            <label for="vehicle14"> Personal details</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle15" name="vehicle1" value="Bike">
                                            <label for="vehicle15"> Official Details</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle16" name="vehicle1" value="Bike">
                                            <label for="vehicle16"> statutory Details</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle17" name="vehicle1" value="Bike">
                                            <label for="vehicle17"> Qualificattion Details</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle19" name="vehicle1" value="Bike">
                                            <label for="vehicle19"> Salary Details</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle20" name="vehicle1" value="Bike">
                                            <label for="vehicle20"> Assets/Perk Details</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle21" name="vehicle1" value="Bike">
                                            <label for="vehicle21"> Employer Bank</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle22" name="vehicle1" value="Bike">
                                            <label for="vehicle22"> Salary Bank</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle23" name="vehicle1" value="Bike">
                                            <label for="vehicle23"> Vendor Category</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle24" name="vehicle1" value="Bike">
                                            <label for="vehicle24"> Expense Category</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle25" name="vehicle1" value="Bike">
                                            <label for="vehicle25"> Admin Documents</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle26" name="vehicle1" value="Bike">
                                            <label for="vehicle26"> Approval Master</label>
                                        </div>

                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle27" name="vehicle1" value="Bike">
                                            <label for="vehicle27"> Asset Category</label>
                                        </div>

                                         
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle28" name="vehicle1" value="Bike">
                                            <label for="vehicle28"> Company Asset</label>
                                        </div>
                                        
                                         
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle29" name="vehicle1" value="Bike">
                                            <label for="vehicle29"> Company Perks</label>
                                        </div>
                                        
                                            
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle30" name="vehicle1" value="Bike">
                                            <label for="vehicle30"> Uniform Master  </label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle31" name="vehicle1" value="Bike">
                                            <label for="vehicle31"> Employee PF Master </label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle32" name="vehicle1" value="Bike">
                                            <label for="vehicle32">  Profession Tax Master </label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle33" name="vehicle1" value="Bike">
                                            <label for="vehicle33"> ESIC Maste</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle34" name="vehicle1" value="Bike">
                                            <label for="vehicle34"> Income Tax Master</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle35" name="vehicle1" value="Bike">
                                            <label for="vehicle35"> Gratuity</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle36" name="vehicle1" value="Bike">
                                            <label for="vehicle36"> LWF Master</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle37" name="vehicle1" value="Bike">
                                            <label for="vehicle37"> Time Sheet attendance</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle38" name="vehicle1" value="Bike">
                                            <label for="vehicle38"> Salary Process</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle39" name="vehicle1" value="Bike">
                                            <label for="vehicle39"> Leave  Management</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle40" name="vehicle1" value="Bike">
                                            <label for="vehicle40"> Offer Appointment</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle41" name="vehicle1" value="Bike">
                                            <label for="vehicle41"> Asst Perk/Allotment</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle42" name="vehicle1" value="Bike">
                                            <label for="vehicle42"> HR Documents</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle43" name="vehicle1" value="Bike">
                                            <label for="vehicle43"> Loan Advance/Issue</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle44" name="vehicle1" value="Bike">
                                            <label for="vehicle44"> Arrears /Bonus/Exgratia</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle45" name="vehicle1" value="Bike">
                                            <label for="vehicle45"> Exit  F & F</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle46" name="vehicle1" value="Bike">
                                            <label for="vehicle46"> Purchase Order</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle47" name="vehicle1" value="Bike">
                                            <label for="vehicle47">Work Order</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle48" name="vehicle1" value="Bike">
                                            <label for="vehicle48">Contract Documents</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle49" name="vehicle1" value="Bike">
                                            <label for="vehicle49">Payment Order</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle50" name="vehicle1" value="Bike">
                                            <label for="vehicle50">Job Vacancy</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle51" name="vehicle1" value="Bike">
                                            <label for="vehicle51">Candidate Details</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle51" name="vehicle1" value="Bike">
                                            <label for="vehicle51">Candidate Details</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle52" name="vehicle1" value="Bike">
                                            <label for="vehicle52">Search Candidate</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle53" name="vehicle1" value="Bike">
                                            <label for="vehicle53">Shededule Interview</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle54" name="vehicle1" value="Bike">
                                            <label for="vehicle54">Interview Assessments</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle55" name="vehicle1" value="Bike">
                                            <label for="vehicle55">Appointment</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle56" name="vehicle1" value="Bike">
                                            <label for="vehicle56"> Recruitment
                                                Reports</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle57" name="vehicle1" value="Bike">
                                            <label for="vehicle57"> Salary
                                                Statements</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle58" name="vehicle1" value="Bike">
                                            <label for="vehicle58"> Salary
                                                Disbursement</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle59" name="vehicle1" value="Bike">
                                            <label for="vehicle59"> Pay
                                                slip</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle60" name="vehicle1" value="Bike">
                                            <label for="vehicle60"> Salary
                                                Certificate</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle61" name="vehicle1" value="Bike">
                                            <label for="vehicle61">Employee
                                                Register</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle62" name="vehicle1" value="Bike">
                                            <label for="vehicle62">IT
                                                Calculator</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle63" name="vehicle1" value="Bike">
                                            <label for="vehicle63">Employee
                                                History</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle64" name="vehicle1" value="Bike">
                                            <label for="vehicle64">PF
                                                Report</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle65" name="vehicle1" value="Bike">
                                            <label for="vehicle65">ESIC
                                                Report</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle66" name="vehicle1" value="Bike">
                                            <label for="vehicle66">PT
                                                Report</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle67" name="vehicle1" value="Bike">
                                            <label for="vehicle67">LWF
                                                Report</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle68" name="vehicle1" value="Bike">
                                            <label for="vehicle68"> Income
                                                Tax
                                                Report</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle69" name="vehicle1" value="Bike">
                                            <label for="vehicle69"> Vendor
                                                Report</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle70" name="vehicle1" value="Bike">
                                            <label for="vehicle70"> Expenses
                                                Report</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle71" name="vehicle1" value="Bike">
                                            <label for="vehicle71"> Expenses/
                                                Vendor
                                                Dashboard</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle72" name="vehicle1" value="Bike">
                                            <label for="vehicle72"> Documents
                                                Storage setting</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle73" name="vehicle1" value="Bike">
                                            <label for="vehicle73">Documents
                                                Management</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle74" name="vehicle1" value="Bike">
                                            <label for="vehicle74">Documents
                                                History</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle75" name="vehicle1" value="Bike">
                                            <label for="vehicle75">User
                                                Management</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle75" name="vehicle1" value="Bike">
                                            <label for="vehicle75">User
                                                Management</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle76" name="vehicle1" value="Bike">
                                            <label for="vehicle76">Password
                                                Management</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle77" name="vehicle1" value="Bike">
                                            <label for="vehicle77">Workflow
                                                Management</label>
                                        </div>

                                        
                                        <div class="form-group" align="center"
                                            style="margin-top: 15%; ">

                                            <input type="submit" name="action_button" class="btn btn-warning"
                                                value=Add />
                                        </div>

                                    </div>

                                </div>
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
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                    </div>


                                 
                                    <div class="row" style="padding: 10px; padding-left: 30%;">

                                        <div class="col-md-6 form-group" align="center">
                                            <label>Role Name *</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected>Select Role</option>
                                                <option value="corporation">1</option>
                                                <option value="exempt organization">2</option>
                                                <option value="partnership">3</option>
                                                <option value="private foundation">4</option>
                                                <option value="limited liability company">5
                                                </option>

                                            </select>
                                        </div>

                                    </div>
                                    <div class="row" style="padding: 10px;">
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            <label for="vehicle1">Location / Branch</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle2" name="vehicle1" value="Bike">
                                            <label for="vehicle2">Project / Cost Center</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle3" name="vehicle1" value="Bike">
                                            <label for="vehicle3">Department</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle4" name="vehicle1" value="Bike">
                                            <label for="vehicle4">Designation</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle5" name="vehicle1" value="Bike">
                                            <label for="vehicle5"> Hierarchy</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle6" name="vehicle1" value="Bike">
                                            <label for="vehicle6">   Allowances /Deduction</label>
                                        </div>
                                    
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle7" name="vehicle1" value="Bike">
                                            <label for="vehicle7"> Salary Structure</label>
                                        </div>
                                       
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle8" name="vehicle1" value="Bike">
                                            <label for="vehicle8"> shift Master</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle9" name="vehicle1" value="Bike">
                                            <label for="vehicle9"> Leave Master</label>
                                        </div>

                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle10" name="vehicle1" value="Bike">
                                            <label for="vehicle10"> Holiday Master</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle11" name="vehicle1" value="Bike">
                                            <label for="vehicle11"> Employee Status</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle12" name="vehicle1" value="Bike">
                                            <label for="vehicle12"> Salary setup</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle13" name="vehicle1" value="Bike">
                                            <label for="vehicle13"> HR Documents</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle14" name="vehicle1" value="Bike">
                                            <label for="vehicle14"> Personal details</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle15" name="vehicle1" value="Bike">
                                            <label for="vehicle15"> Official Details</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle16" name="vehicle1" value="Bike">
                                            <label for="vehicle16"> statutory Details</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle17" name="vehicle1" value="Bike">
                                            <label for="vehicle17"> Qualificattion Details</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle19" name="vehicle1" value="Bike">
                                            <label for="vehicle19"> Salary Details</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle20" name="vehicle1" value="Bike">
                                            <label for="vehicle20"> Assets/Perk Details</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle21" name="vehicle1" value="Bike">
                                            <label for="vehicle21"> Employer Bank</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle22" name="vehicle1" value="Bike">
                                            <label for="vehicle22"> Salary Bank</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle23" name="vehicle1" value="Bike">
                                            <label for="vehicle23"> Vendor Category</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle24" name="vehicle1" value="Bike">
                                            <label for="vehicle24"> Expense Category</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle25" name="vehicle1" value="Bike">
                                            <label for="vehicle25"> Admin Documents</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle26" name="vehicle1" value="Bike">
                                            <label for="vehicle26"> Approval Master</label>
                                        </div>

                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle27" name="vehicle1" value="Bike">
                                            <label for="vehicle27"> Asset Category</label>
                                        </div>

                                         
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle28" name="vehicle1" value="Bike">
                                            <label for="vehicle28"> Company Asset</label>
                                        </div>
                                        
                                         
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle29" name="vehicle1" value="Bike">
                                            <label for="vehicle29"> Company Perks</label>
                                        </div>
                                        
                                            
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle30" name="vehicle1" value="Bike">
                                            <label for="vehicle30"> Uniform Master  </label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle31" name="vehicle1" value="Bike">
                                            <label for="vehicle31"> Employee PF Master </label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle32" name="vehicle1" value="Bike">
                                            <label for="vehicle32">  Profession Tax Master </label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle33" name="vehicle1" value="Bike">
                                            <label for="vehicle33"> ESIC Maste</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle34" name="vehicle1" value="Bike">
                                            <label for="vehicle34"> Income Tax Master</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle35" name="vehicle1" value="Bike">
                                            <label for="vehicle35"> Gratuity</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle36" name="vehicle1" value="Bike">
                                            <label for="vehicle36"> LWF Master</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle37" name="vehicle1" value="Bike">
                                            <label for="vehicle37"> Time Sheet attendance</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle38" name="vehicle1" value="Bike">
                                            <label for="vehicle38"> Salary Process</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle39" name="vehicle1" value="Bike">
                                            <label for="vehicle39"> Leave  Management</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle40" name="vehicle1" value="Bike">
                                            <label for="vehicle40"> Offer Appointment</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle41" name="vehicle1" value="Bike">
                                            <label for="vehicle41"> Asst Perk/Allotment</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle42" name="vehicle1" value="Bike">
                                            <label for="vehicle42"> HR Documents</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle43" name="vehicle1" value="Bike">
                                            <label for="vehicle43"> Loan Advance/Issue</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle44" name="vehicle1" value="Bike">
                                            <label for="vehicle44"> Arrears /Bonus/Exgratia</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle45" name="vehicle1" value="Bike">
                                            <label for="vehicle45"> Exit  F & F</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle46" name="vehicle1" value="Bike">
                                            <label for="vehicle46"> Purchase Order</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle47" name="vehicle1" value="Bike">
                                            <label for="vehicle47">Work Order</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle48" name="vehicle1" value="Bike">
                                            <label for="vehicle48">Contract Documents</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle49" name="vehicle1" value="Bike">
                                            <label for="vehicle49">Payment Order</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle50" name="vehicle1" value="Bike">
                                            <label for="vehicle50">Job Vacancy</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle51" name="vehicle1" value="Bike">
                                            <label for="vehicle51">Candidate Details</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle51" name="vehicle1" value="Bike">
                                            <label for="vehicle51">Candidate Details</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle52" name="vehicle1" value="Bike">
                                            <label for="vehicle52">Search Candidate</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle53" name="vehicle1" value="Bike">
                                            <label for="vehicle53">Shededule Interview</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle54" name="vehicle1" value="Bike">
                                            <label for="vehicle54">Interview Assessments</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle55" name="vehicle1" value="Bike">
                                            <label for="vehicle55">Appointment</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle56" name="vehicle1" value="Bike">
                                            <label for="vehicle56"> Recruitment
                                                Reports</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle57" name="vehicle1" value="Bike">
                                            <label for="vehicle57"> Salary
                                                Statements</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle58" name="vehicle1" value="Bike">
                                            <label for="vehicle58"> Salary
                                                Disbursement</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle59" name="vehicle1" value="Bike">
                                            <label for="vehicle59"> Pay
                                                slip</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle60" name="vehicle1" value="Bike">
                                            <label for="vehicle60"> Salary
                                                Certificate</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle61" name="vehicle1" value="Bike">
                                            <label for="vehicle61">Employee
                                                Register</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle62" name="vehicle1" value="Bike">
                                            <label for="vehicle62">IT
                                                Calculator</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle63" name="vehicle1" value="Bike">
                                            <label for="vehicle63">Employee
                                                History</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle64" name="vehicle1" value="Bike">
                                            <label for="vehicle64">PF
                                                Report</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle65" name="vehicle1" value="Bike">
                                            <label for="vehicle65">ESIC
                                                Report</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle66" name="vehicle1" value="Bike">
                                            <label for="vehicle66">PT
                                                Report</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle67" name="vehicle1" value="Bike">
                                            <label for="vehicle67">LWF
                                                Report</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle68" name="vehicle1" value="Bike">
                                            <label for="vehicle68"> Income
                                                Tax
                                                Report</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle69" name="vehicle1" value="Bike">
                                            <label for="vehicle69"> Vendor
                                                Report</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle70" name="vehicle1" value="Bike">
                                            <label for="vehicle70"> Expenses
                                                Report</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle71" name="vehicle1" value="Bike">
                                            <label for="vehicle71"> Expenses/
                                                Vendor
                                                Dashboard</label>
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle72" name="vehicle1" value="Bike">
                                            <label for="vehicle72"> Documents
                                                Storage setting</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle73" name="vehicle1" value="Bike">
                                            <label for="vehicle73">Documents
                                                Management</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle74" name="vehicle1" value="Bike">
                                            <label for="vehicle74">Documents
                                                History</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle75" name="vehicle1" value="Bike">
                                            <label for="vehicle75">User
                                                Management</label>
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle75" name="vehicle1" value="Bike">
                                            <label for="vehicle75">User
                                                Management</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle76" name="vehicle1" value="Bike">
                                            <label for="vehicle76">Password
                                                Management</label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <input type="checkbox" id="vehicle77" name="vehicle1" value="Bike">
                                            <label for="vehicle77">Workflow
                                                Management</label>
                                        </div>

                                        
                                        <div class="form-group" align="center"
                                            style="margin-top: 15%; ">

                                            <input type="submit" name="action_button" class="btn btn-warning"
                                                value=Edit />
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- model end -->



                        <!--bulk delete Model Start -->
                       <div>
                        <div id="modalRemoveAnimation" class="col-lg-12 layout-spacing">
                                    <div id="exampleModalRemoveAnimation" class="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header" id="exampleModalPopoversLabel">
                                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                          </div> -->
                                          <div class="modal-body">
                                              <p class="modal-text">Parberp.com says<br>
                                               Please select atleast one Checkbox
                                              </p>
                                          </div>
                                          <div class="modal-footer">
                                             <button class="btn btn-dark" data-dismiss="modal"><i class="flaticon-cancel-12"></i> OK</button>
                                          </div>
                                        </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                 <!-- model end -->
             
                    <div class="row" id="cancel-row">

                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-6">
                                <div class="table-responsive mb-4 mt-4">
                                    <table id="html5-extension" class="datatable table table-hover non-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Role</th>
                                                <th>Page Name</th>
                                                
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                   
                                                <td>
                                                 

 
                                                    <a href="javascript:void(0);" data-toggle="modal"
                                                        data-placement="top" title="Edit" data-target="#editmodel"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-edit-2 text-success">
                                                            <path
                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg></a>

                                                    <a href="javascript:void(0);" data-toggle="tooltip"
                                                        data-placement="top" title="Delete"
                                                        ><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
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



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!--  END CONTENT AREA  -->
        </div>
        
        @stop