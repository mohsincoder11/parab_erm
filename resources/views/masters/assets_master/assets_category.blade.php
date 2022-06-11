@extends('layout/layout')
@section('content')

        <div id="content" class="main-content">
            <div class="layout-px-spacing">


                <div style="margin-top: 3%; ">
                    <div>
                        <div>
                            <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal"
                                data-target=".bd-example-modal-lg"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>Add Assets</button>
                             
                                
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
                                        <h5 class="modal-title" id="myLargeModalLabel">Add Assets</h5>
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

                                    <div class="row" style="padding: 10px;">

                                        <div class="col-md-6 form-group">
                                            <label>Assets Name*</label>
                                            <input type="text" name="company_name" id="company_name" required
                                                class="form-control" placeholder="Assets Name">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Company Asset Code *</label>
                                            <input type="text" name="company_name" id="company_name" required
                                                class="form-control" placeholder="Company Asset Code">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>category *</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected>category  Type</option>
                                                <option value="corporation">Office accesories</option>
                                                <option value="exempt organization">Vehical</option>
                                                <option value="partnership">Computer</option>
                                            
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Is working *</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected> Working Type</option>
                                                <option value="corporation">Yes</option>
                                                <option value="exempt organization">No</option>
                                               
                                                <option value="limited liability company">On maintaince
                                                </option>

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Department *</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected>Department Type</option>
                                                <option value="corporation">1</option>
                                                <option value="exempt organization">2</option>
                                                <option value="partnership">3</option>
                                                <option value="private foundation">4</option>
                                                <option value="limited liability company">5
                                                </option>

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Employee *</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected>Employee Type</option>
                                                <option value="corporation">ramesh</option>
                                                <option value="exempt organization">umesh</option>
                                                <option value="partnership">rajesh</option>
                                                <option value="private foundation">sagar</option>
                                                <option value="limited liability company">kapil
                                                </option>

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Purchase Date*</label>
                                            <input type="date" name="start_date" id="start_date"
                                                class="form-control date" value="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Warranty /AMC End Date*</label>
                                            <input type="date" name="start_date" id="start_date"
                                                class="form-control date" value="">
                                        </div>
                                        
                              
                                        <div class="col-md-6 form-group">
                                            <label>Manufacturer *</label>
                                            <input type="text" name="company_name" id="company_name" required
                                                class="form-control" placeholder="Manufacturer">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label> Invoice Number*</label>
                                            <input type="text" name="company_name" id="company_name" required
                                                class="form-control" placeholder="
                                                Invoice Number">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label> Serial Number*</label>
                                            <input type="text" name="company_name" id="company_name" required
                                                class="form-control" placeholder="
                                                Serial Number">
                                        </div>
                                     
                                                 <div class="col-md-6 form-group">
                                                <label>Assets Image* </label>
                                                <input type="file" name="company_logo" id="company_logo" class="form-control"
                                                       placeholder=Optional>
                                                <span id="store_logo"></span>
                                            </div>
                
                                        <div class="form-group" align="center"
                                            style="margin-top: 5%; margin-left: 45%;">

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

                                     <div class="row" style="padding: 10px;">

                                        <div class="col-md-6 form-group">
                                            <label>Assets Name*</label>
                                            <input type="text" name="company_name" id="company_name" required
                                                class="form-control" placeholder="Assets Name">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Company Asset Code *</label>
                                            <input type="text" name="company_name" id="company_name" required
                                                class="form-control" placeholder="Company Asset Code">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>category *</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected>category  Type</option>
                                                <option value="corporation">Office accesories</option>
                                                <option value="exempt organization">Vehical</option>
                                                <option value="partnership">Computer</option>
                                            
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Is working *</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected> Working Type</option>
                                                <option value="corporation">Yes</option>
                                                <option value="exempt organization">No</option>
                                               
                                                <option value="limited liability company">On maintaince
                                                </option>

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Department *</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected>Department Type</option>
                                                <option value="corporation">1</option>
                                                <option value="exempt organization">2</option>
                                                <option value="partnership">3</option>
                                                <option value="private foundation">4</option>
                                                <option value="limited liability company">5
                                                </option>

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Employee *</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected>Employee Type</option>
                                                <option value="corporation">ramesh</option>
                                                <option value="exempt organization">umesh</option>
                                                <option value="partnership">rajesh</option>
                                                <option value="private foundation">sagar</option>
                                                <option value="limited liability company">kapil
                                                </option>

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Purchase Date*</label>
                                            <input type="date" name="start_date" id="start_date"
                                                class="form-control date" value="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Warranty /AMC End Date*</label>
                                            <input type="date" name="start_date" id="start_date"
                                                class="form-control date" value="">
                                        </div>
                                        
                              
                                        <div class="col-md-6 form-group">
                                            <label>Manufacturer *</label>
                                            <input type="text" name="company_name" id="company_name" required
                                                class="form-control" placeholder="Manufacturer">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label> Invoice Number*</label>
                                            <input type="text" name="company_name" id="company_name" required
                                                class="form-control" placeholder="
                                                Invoice Number">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label> Serial Number*</label>
                                            <input type="text" name="company_name" id="company_name" required
                                                class="form-control" placeholder="
                                                Serial Number">
                                        </div>
                                     
                                                 <div class="col-md-6 form-group">
                                                <label>Assets Image* </label>
                                                <input type="file" name="company_logo" id="company_logo" class="form-control"
                                                       placeholder=Optional>
                                                <span id="store_logo"></span>
                                            </div>
                
                                        <div class="form-group" align="center"
                                            style="margin-top: 5%; margin-left: 45%;">

                                            <input type="submit" name="action_button" class="btn btn-warning"
                                                value=Add />
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
             
                        <!--view Model Start -->
                 <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="myExtraLargeModalLabel">Assets Info.</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                              </button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
        
                                    <div class="table-responsive">
        
                                        <table class="table  table-bordered">
        
                                            <tr>
                                                <th> 
                                                    Asset Name</th>
                                                <td >	Computer 1</td>
                                            </tr>
        
                                            <tr>
                                                <th>Company Asset Code</th>
                                                <td >	001</td>
                                            </tr>
        
                                            <tr>
                                                <th>Category</th>
                                                <td >Office accessories</td>
                                            </tr>
        
                                            <tr>
                                                <th>Company</th>
                                                <td>Vimal crop care pvt ltd</td>
                                            </tr>
                                            <tr>
                                                <th>Employee</th>
                                                <td >	ABHAY BAPAT</td>
                                            </tr>
        
                                            <tr>
                                                <th>Manufacturer</th>
                                                <td >HP</td>
                                            </tr>
                                           
                                            <tr>
                                                <th>Purchase Date</th>
                                                <td >2022-02-03</td>
                                            </tr>
        
                                            <tr>
                                                <th>(file.Warranty/AMC End Date</th>
                                                <td >2023-01-02	</td>
                                            </tr>
        
                                            <tr>
                                                <th>Invoice Number</th>
                                                <td >001</td>
                                            </tr>
                                            <tr>
                                                <th>Serial Number</th>
                                                <td >002</td>
                                            </tr>

                                            <tr>
                                                <th>Status</th>
                                                <td >yes</td>
                                            </tr>

                                            <tr>
                                                <th>Assets Info</th>
                                                <td ></td>
                                            </tr>

                                            <tr>
                                                <th>Assets Image</th>
                                                <td ></td>
                                            </tr>
                                        </table>
        
                                    </div>
        
                                </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                              <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>
                          </div>
                      </div>
                    </div>
                  </div>
            <!-- model end -->
                    <div class="row" id="cancel-row">

                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-6">
                                <div class="table-responsive mb-4 mt-4">
                                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Assets Name</th>
                                                <th>Category</th>
                                                <th>Company assets code</th>
                                                <th>Is working</th>
                                                <th>Assign to</th>
                                                <th>Company</th>
                                                <th>Warranty Date</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>tahdgjab</td>
                                                <td>nbhvadbkhj</td>
                                                <td></td>

                                                <td>
                                                    ram nagar chandur
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="view" data-target=".bd-example-modal-xl"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                      </svg></a>

 
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