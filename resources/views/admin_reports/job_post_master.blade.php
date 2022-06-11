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
                                </svg>Add post</button>
                             
                                
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
                                        <h5 class="modal-title" id="myLargeModalLabel">Add post</h5>
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
                                            <label>Company*</label>
                                            <select name="location_head" id="location_head"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="361">Select company</option>
                                                <option value="361">	Vimal crop care pvt ltd</option>
                                                <option value="361">	Zebra Crossing Ltd</option>


                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Job title*</label>
                                            <input type="text" required class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Job Type*</label>
                                            <select name="location_head" id="location_head"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Employee...'>
                                            <option value="361">Select Option</option>
                                            <option value="361">Full time</option>
                                            <option value="361">Part Time</option>
                                            <option value="361">Internship</option>
                                            <option value="361">Freelance</option>
                                           
                                        </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Job Category*</label>
                                            <select name="location_head" id="location_head"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Employee...'>
                                            <option value="361">Select Option</option>
                                            <option value="361">Account mananger</option>
                                            <option value="361">Account Executive</option>
                                            <option value="361">Hr mananger</option>
                                            <option value="361">Hr Executive</option>
                                            <option value="361">It Executive</option>
                                            <option value="361">Sales</option>
                                            <option value="361">Delivery boy</option>
                                            <option value="361">Analysis</option>
                                            <option value="361">Admin mananger</option>

                                        </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>No Of Vaccancy*</label>
                                            <input type="phone" required class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Date Of Closing*</label>
                                            <input type="date" required class="form-control" placeholder="">
                                        </div>
                                       
                                        <div class="col-md-6 form-group">
                                            <label>Gender*</label>
                                            <select name="location_head" id="location_head"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Employee...'>
                                            <option value="361">Select Gender</option>
                                            <option value="361">Male</option>
                                            <option value="361">Female</option>
                                            <option value="361">Other</option>


                                        </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Minimum Experience*</label>
                                            <select name="location_head" id="location_head"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Employee...'>
                                            <option value="361">Select Option</option>
                                            <option value="361">Fresh</option>
                                            <option value="361">1</option>
                                            <option value="361">2</option>
                                            <option value="361">3</option>
                                            <option value="361">4</option><option value="361">1</option>
                                            <option value="361">5</option><option value="361">1</option>
                                            <option value="361">6</option><option value="361">1</option>
                                            <option value="361">7</option><option value="361">1</option>
                                            <option value="361">8</option>

                                        </select>
                                        </div>
                                       
                                        <div class="col-md-6 form-group">
                                            <label>Is Featured*</label>
                                            <select name="location_head" id="location_head"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="361">Select company</option>
                                                <option value="361">Yes</option>
                                                <option value="361">No</option>


                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Status*</label>
                                            <select name="location_head" id="location_head"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="361">Select company</option>
                                                <option value="361">Unpublished</option>
                                                <option value="361">Published</option>


                                            </select>
                                        </div>
                                     
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Short Description</label>
                                                <textarea class="form-control" id="asset_note" name="asset_note"
                                                          rows="3"></textarea>
                                            </div>
                                        </div>

                                        
            
                                        <div class="form-group" align="center"  style="margin-left: 45%; width: full;">
                                           
                                            <input type="submit" name="action_button"
                                                class="btn btn-warning" value=Add />
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
                                            <label>Company*</label>
                                            <select name="location_head" id="location_head"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="361">Select company</option>
                                                <option value="361">	Vimal crop care pvt ltd</option>
                                                <option value="361">	Zebra Crossing Ltd</option>


                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Job title*</label>
                                            <input type="text" required class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Job Type*</label>
                                            <select name="location_head" id="location_head"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Employee...'>
                                            <option value="361">Select Option</option>
                                            <option value="361">Full time</option>
                                            <option value="361">Part Time</option>
                                            <option value="361">Internship</option>
                                            <option value="361">Freelance</option>
                                           
                                        </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Job Category*</label>
                                            <select name="location_head" id="location_head"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Employee...'>
                                            <option value="361">Select Option</option>
                                            <option value="361">Account mananger</option>
                                            <option value="361">Account Executive</option>
                                            <option value="361">Hr mananger</option>
                                            <option value="361">Hr Executive</option>
                                            <option value="361">It Executive</option>
                                            <option value="361">Sales</option>
                                            <option value="361">Delivery boy</option>
                                            <option value="361">Analysis</option>
                                            <option value="361">Admin mananger</option>

                                        </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>No Of Vaccancy*</label>
                                            <input type="phone" required class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Date Of Closing*</label>
                                            <input type="date" required class="form-control" placeholder="">
                                        </div>
                                       
                                        <div class="col-md-6 form-group">
                                            <label>Gender*</label>
                                            <select name="location_head" id="location_head"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Employee...'>
                                            <option value="361">Select Gender</option>
                                            <option value="361">Male</option>
                                            <option value="361">Female</option>
                                            <option value="361">Other</option>


                                        </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Minimum Experience*</label>
                                            <select name="location_head" id="location_head"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Employee...'>
                                            <option value="361">Select Option</option>
                                            <option value="361">Fresh</option>
                                            <option value="361">1</option>
                                            <option value="361">2</option>
                                            <option value="361">3</option>
                                            <option value="361">4</option><option value="361">1</option>
                                            <option value="361">5</option><option value="361">1</option>
                                            <option value="361">6</option><option value="361">1</option>
                                            <option value="361">7</option><option value="361">1</option>
                                            <option value="361">8</option>

                                        </select>
                                        </div>
                                       
                                        <div class="col-md-6 form-group">
                                            <label>Is Featured*</label>
                                            <select name="location_head" id="location_head"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="361">Select company</option>
                                                <option value="361">Yes</option>
                                                <option value="361">No</option>


                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Status*</label>
                                            <select name="location_head" id="location_head"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="361">Select company</option>
                                                <option value="361">Unpublished</option>
                                                <option value="361">Published</option>


                                            </select>
                                        </div>
                                     
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Short Description</label>
                                                <textarea class="form-control" id="asset_note" name="asset_note"
                                                          rows="3"></textarea>
                                            </div>
                                        </div>

                                        
            
                                        <div class="form-group" align="center"  style="margin-left: 45%; width: full;">
                                           
                                            <input type="submit" name="action_button"
                                                class="btn btn-warning" value=Edit />
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
                              <h5 class="modal-title" id="myExtraLargeModalLabel">Job Info.</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                              </button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
        
                                    <div class="table-responsive">
        
                                        <table class="table  table-bordered">
                                            <h4>Overview</h4>
        
                                            <tr>
                                                <th>Job Title</th>
                                                <td >Sales Executive </td>
                                            </tr>
        
                                            <tr>
                                                <th>Company</th>
                                                <td >Vimal crop care pvt ltd</td>
                                            </tr>
        
                                            <tr>
                                                <th>Experience	</th>
                                                <td >1 Years</td>
                                            </tr>
        
                                            <tr>
                                                <th>Vacancy</th>
                                                <td >20</td>
                                            </tr>
        
                                            <tr>
                                                <th>Apply Before</th>
                                                <td >2022/03/15</td>
                                            </tr>
        
                                            <tr>
                                                <th>Posted</th>
                                                <td >2 months ago</td>
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
                                                <th>sr</th>
                                                <th> Position </th>
                                                <th>Company </th>
                                                <th>Posted Date </th>
                                                <th>Status</th>
                                               <th>Closing Date</th>
                                                <th>Action</th>
                                              

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Vimal crop care pvt ltd 
                                                </td>
                                                <td>System Architect</td>
                                                <td>hfgstsucgv</td>
                                                <td><br> <span class="badge badge-danger">Unpublished</span></td>

                                                <td>
                                                    ram nagar chandur bajar
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