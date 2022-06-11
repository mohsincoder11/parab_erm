@extends('layout/layout')
@section('content')

        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

                    <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                      <!--   <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Border Top</h4>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area border-top-tab">
                                    <ul class="nav nav-tabs mb-3 mt-3" id="borderTop" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="border-top-home-tab" data-toggle="tab" href="#border-top-home" role="tab" aria-controls="border-top-home" aria-selected="true">Leave Type</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="border-top-profile-tab" data-toggle="tab" href="#border-top-profile" role="tab" aria-controls="border-top-profile" aria-selected="false">Award Type</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="border-top-contact-tab" data-toggle="tab" href="#border-top-contact" role="tab" aria-controls="border-top-contact" aria-selected="false">Warning Type</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="border-top-termination-tab" data-toggle="tab" href="#border-top-termination" role="tab" aria-controls="border-top-setting" aria-selected="false"> Termination Type</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="border-top-expense-tab" data-toggle="tab" href="#border-top-expense" role="tab" aria-controls="border-top-setting" aria-selected="false">Expense Type</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="border-top-emp-tab" data-toggle="tab" href="#border-top-emp" role="tab" aria-controls="border-top-setting" aria-selected="false">Employee Status</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="border-top-doc-tab" data-toggle="tab" href="#border-top-doc" role="tab" aria-controls="border-top-setting" aria-selected="false"> Document Type</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="borderTopContent">
                                        <div class="tab-pane fade show active" id="border-top-home" role="tabpanel" aria-labelledby="border-top-home-tab">
                                            <h4 class="mb-4">Add leave type</h4>
                                               
                                        <div class="row" style="padding: 10px;">
                                               <div class="col-md-4 form-group">
                                                <!-- <label>Leave Name</label> -->
                                                <input type="text" name="company_name" id="company_name" required class="form-control"
                                                       placeholder="Leave Name">
                                            </div>  
                                            <div class="col-md-4 form-group">
                                               
                                                <input type="text" name="company_name" id="company_name" required class="form-control"
                                                       placeholder="Days Per Year">
                                            </div> 
                                               <div class="form-group" align="center" style="margin-top:2px;">
                                     
                                                <input type="submit" name="action_button"  class="btn btn-primary"
                                                       value=Save />
                                            </div>   

                                           </div>

                                            <div class="row" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Leave Name</th>
                                            <th>Days Per Year</th>
                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            
                                            <td> <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit" data-target="#editmodel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>

                                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                                        </tr>
                                       
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>

                </div>  
                                        </div>
             <div class="tab-pane fade" id="border-top-profile" role="tabpanel" aria-labelledby="border-top-profile-tab">
                                             <h4 class="mb-4">Add Award Type</h4>
                                            <div class="row" style="padding: 10px;">
                                               <div class="col-md-4 form-group">
                                           
                                                <input type="text" name="company_name" id="company_name" required class="form-control"
                                                       placeholder="Award Type">
                                            </div>  
                                            
                                               <div class="form-group" align="center" style="margin-top:2px;">
                                     
                                                <input type="submit" name="action_button"  class="btn btn-primary"
                                                       value=Save />
                                            </div>   
                                                                                      
                                           </div>
                                                 <div class="row" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config1" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr.no</th>
                                            <th>Award Type</th>
                                          
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>System Architect</td>
                                           
 <td> <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit" data-target="#editmodel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>

                                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                                        </tr>
                                       
                                   
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                            
                                        </div>
                                        <div class="tab-pane fade" id="border-top-contact" role="tabpanel" aria-labelledby="border-top-contact-tab">
                                            <div class="tab-pane fade show active" id="border-top-home" role="tabpanel" aria-labelledby="border-top-home-tab">
                                            <h4 class="mb-4">Add Warning Type</h4>
                                               
                                        <div class="row" style="padding: 10px;">
                                              
                                            <div class="col-md-4 form-group">
                                               
                                                <input type="text" name="company_name" id="company_name" required class="form-control"
                                                       placeholder="Warning Type">
                                            </div> 
                                               <div class="form-group" align="center" style="margin-top:2px;">
                                     
                                                <input type="submit" name="action_button"  class="btn btn-primary"
                                                       value=Save />
                                            </div>   

                                           </div>

                                            <div class="row" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config2" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Warning Type</th>
                                          
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Tiger Nixon</td>
                                            
                                            <td> <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit" data-target="#editmodel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>

                                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                                        </tr>
                                       
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>

                </div>  
                                        </div>
                                        </div>
                                      <!--   <div class="tab-pane fade" id="border-top-setting" role="tabpanel" aria-labelledby="border-top-setting-tab">
                                            <blockquote class="blockquote">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            </blockquote>
                                        </div> -->
                                        <div class="tab-pane fade" id="border-top-termination" role="tabpanel" aria-labelledby="border-top-termination-tab">
                                            <div class="tab-pane fade show active" id="border-top-home" role="tabpanel" aria-labelledby="border-top-home-tab">
                                            <h4 class="mb-4">Add Termination Type</h4>
                                               
                                        <div class="row" style="padding: 10px;">
                                              
                                            <div class="col-md-4 form-group">
                                               
                                                <input type="text" name="company_name" id="company_name" required class="form-control"
                                                       placeholder="Termination Type">
                                            </div> 
                                               <div class="form-group" align="center" style="margin-top:2px;">
                                     
                                                <input type="submit" name="action_button"  class="btn btn-primary"
                                                       value=Save />
                                            </div>   

                                           </div>

                                            <div class="row" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config3" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Termination Type</th>
                                          
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Tiger Nixon</td>
                                            
                                            <td> <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit" data-target="#editmodel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>

                                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                                        </tr>
                                       
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>

                </div>  
                                        </div>
                                        </div>
                                          <div class="tab-pane fade" id="border-top-expense" role="tabpanel" aria-labelledby="border-top-expense-tab">
                                            <div class="tab-pane fade show active" id="border-top-home" role="tabpanel" aria-labelledby="border-top-home-tab">
                                            <h4 class="mb-4">Add Expense Type</h4>
                                               
                                        <div class="row" style="padding: 10px;">
                                              
                                            <div class="col-md-4 form-group">
                                               
                                                <input type="text" name="company_name" id="company_name" required class="form-control"
                                                       placeholder="Expense Type">
                                            </div> 
                                               <div class="form-group" align="center" style="margin-top:2px;">
                                     
                                                <input type="submit" name="action_button"  class="btn btn-primary"
                                                       value=Save />
                                            </div>   

                                           </div>

                                            <div class="row" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config4" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Expense Type</th>
                                          
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Tiger Nixon</td>
                                            
                                            <td> <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit" data-target="#editmodel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>

                                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                                        </tr>
                                       
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>

                </div>  
                                        </div>
                                        </div>

                                        <div class="tab-pane fade" id="border-top-emp" role="tabpanel" aria-labelledby="border-top-emp-tab">
                                            <div class="tab-pane fade show active" id="border-top-home" role="tabpanel" aria-labelledby="border-top-home-tab">
                                            <h4 class="mb-4">Add Status Type</h4>
                                               
                                        <div class="row" style="padding: 10px;">
                                              
                                            <div class="col-md-4 form-group">
                                               
                                                <input type="text" name="company_name" id="company_name" required class="form-control"
                                                       placeholder="Status Type">
                                            </div> 
                                               <div class="form-group" align="center" style="margin-top:2px;">
                                     
                                                <input type="submit" name="action_button"  class="btn btn-primary"
                                                       value=Save />
                                            </div>   

                                           </div>

                                            <div class="row" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config5" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Status Type</th>
                                          
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Tiger Nixon</td>
                                            
                                            <td> <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit" data-target="#editmodel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>

                                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                                        </tr>
                                       
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>

                </div>  
                                        </div>
                                        </div>

                                        <div class="tab-pane fade" id="border-top-doc" role="tabpanel" aria-labelledby="border-top-doc-tab">
                                            <div class="tab-pane fade show active" id="border-top-home" role="tabpanel" aria-labelledby="border-top-home-tab">
                                            <h4 class="mb-4">Add Document Type</h4>
                                               
                                        <div class="row" style="padding: 10px;">
                                              
                                            <div class="col-md-4 form-group">
                                               
                                                <input type="text" name="company_name" id="company_name" required class="form-control"
                                                       placeholder="Document Type">
                                            </div> 
                                               <div class="form-group" align="center" style="margin-top:2px;">
                                     
                                                <input type="submit" name="action_button"  class="btn btn-primary"
                                                       value=Save />
                                            </div>   

                                           </div>

                                            <div class="row" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config6" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Document Type</th>
                                          
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Tiger Nixon</td>
                                            
                                            <td> <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit" data-target="#editmodel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>

                                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                                        </tr>
                                       
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>

                </div>  
                                        </div>
                                        </div>
                                    </div>

                 

                                </div>
                            </div>
                        </div>

                </div>

            </div>
        </div>
       @stop