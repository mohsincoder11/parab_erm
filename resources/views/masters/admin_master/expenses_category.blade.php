@extends('layout/layout')
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
                                </svg>Add Expenses Category </button>
                             
                                
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
                                        <h5 class="modal-title" id="myLargeModalLabel">Add Expenses Category </h5>
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
                                <label> Expenses Category Name</label>
                                <input type="text" name="trading_name" id="trading_name" class="form-control"
                                       placeholder=Category Name>
                            </div>
                            

                       

                        <div class="col-md-6 form-group">
                            <label>Company *</label>
                            <select name="company_type" id="company_type"
                                class="form-control selectpicker" data-live-search="true"
                                data-live-search-style="begins" title='Select Company Type...'>
                                <option value="" disabled selected>Company Type</option>
                                <option value="corporation">Corporation</option>
                                <option value="exempt organization">Exempt Organization</option>
                                <option value="partnership">Partnership</option>
                                <option value="private foundation">Private Foundation</option>
                                <option value="limited liability company">Limited Liability Company
                                </option>

                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Location*</label>
                            <select name="location_head" id="location_head"
                                class="form-control selectpicker" data-live-search="true"
                                data-live-search-style="begins" title='Select Employee...'>
                                <option value="361">1</option>
                                <option value="361">2</option>
                                <option value="361">3</option>


                            </select>
                        </div> 

                        

                                        <div class="col-md-6 form-group">
                                            <label>Select Department *</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected>Select Department </option>
                                                <option value="corporation">1</option>
                                                <option value="exempt organization">2</option>
                                                <option value="partnership">3</option>
                                                <option value="exempt organization">4 </option>
                                                
                                                </option>

                                            </select>
                                        </div>

                                        
                                 
                                    
                                       

                                        <div class="form-group" align="center"
                                            style="margin-top: 5%;  margin-left: 45%;">

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
                                            <label>Category Name</label>
                                            <input type="text" name="trading_name" id="trading_name" class="form-control"
                                                   placeholder=Category Name>
                                        </div>
                                        
            
                                   
            
                                    <div class="col-md-6 form-group">
                                        <label>Company *</label>
                                        <select name="company_type" id="company_type"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Company Type...'>
                                            <option value="" disabled selected>Company Type</option>
                                            <option value="corporation">Corporation</option>
                                            <option value="exempt organization">Exempt Organization</option>
                                            <option value="partnership">Partnership</option>
                                            <option value="private foundation">Private Foundation</option>
                                            <option value="limited liability company">Limited Liability Company
                                            </option>
            
                                        </select>
                                    </div>
            
                                    <div class="col-md-6 form-group">
                                        <label>Location*</label>
                                        <select name="location_head" id="location_head"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Employee...'>
                                            <option value="361">1</option>
                                            <option value="361">2</option>
                                            <option value="361">3</option>
            
            
                                        </select>
                                    </div> 
            
                                    
            
                                    <div class="col-md-6 form-group">
                                        <label>Project *</label>
                                        <select name="company_type" id="company_type"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Company Type...'>
                                            <option value="" disabled selected>Select Project</option>
                                            <option value="corporation">jhbdehsd</option>
                                            <option value="exempt organization">hszdjbsd</option>
                                            <option value="partnership">hjbzsduygajs</option>
                                            <option value="private foundation">Pbxdghb</option>
                                           
            
                                        </select>
                                    </div>  
                                                    <div class="col-md-6 form-group">
                                                        <label>Select Department *</label>
                                                        <select name="company_type" id="company_type"
                                                            class="form-control selectpicker" data-live-search="true"
                                                            data-live-search-style="begins" title='Select Company Type...'>
                                                            <option value="" disabled selected>Select Department </option>
                                                            <option value="corporation">1</option>
                                                            <option value="exempt organization">2</option>
                                                            <option value="partnership">3</option>
                                                            <option value="exempt organization">4 </option>
                                                            
                                                            </option>
            
                                                        </select>
                                                    </div>
            
                                                    
                                                    <div class="col-md-6 form-group">
                                                        <label>Select Expenses Category*</label>
                                                        <select name="company_type" id="company_type"
                                                            class="form-control selectpicker" data-live-search="true"
                                                            data-live-search-style="begins" title='Select Company Type...'>
                                                            <option value="" disabled selected>Select Expenses Category </option>
                                                            <option value="corporation">1</option>
                                                            <option value="exempt organization">2</option>
                                                            <option value="partnership">3</option>
                                                            <option value="exempt organization">4 </option>
                                                            
                                                            </option>
            
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label>Unit Of  Supply</label>
                                                        <input type="text" name="trading_name" id="trading_name" class="form-control"
                                                               placeholder="">
                                                    </div>
                                                    
                                                   
            
                                                    <div class="form-group" align="center"
                                                        style="margin-top: 5%;  margin-left: 45%;">
            
                                                        <input type="submit" name="action_button" class="btn btn-warning"
                                                            value=Edit />
                                                    </div>
            
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
                                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <tr>
                                                    <th>Sr.no</th>
                                                    <th>Files</th>
                                                    <th>Emp Status</th>
                                                    <th>Company</th>
                                                    <th>Location</th>
                                                    <th>Project</th>
                                                    <th>Document</th>
                                                    <th>Action</th>
            
                                                </tr>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td></td>
                                                <td></td>

                                                <td>
                                                    ram nagar chandur bajar
                                                </td>
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
           @stop