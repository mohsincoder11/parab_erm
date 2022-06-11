@extends('layout/layout')
@section('content')
  
        <div id="content" class="main-content">
            <div class="layout-px-spacing">


                <div style="margin-top: 3%; margin-bottom: 3%;">
                    <div>
                        <div>
                            <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal"
                                data-target=".bd-example-modal-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                  </svg>Add Assets</button>
                               
                                    <button class="btn btn-danger mb-2 mr-2" ><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                                      </svg>   Bulk delete</button>
                                    
                                    
                                  
                                <!-- <button type="button" class="btn btn-info mb-2 mr-2"  
                               ></button> -->
                            

                        </div>

                        

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
                                            <label>Asset Name*</label>
                                            <input type="text" required class="form-control" placeholder="Unique Value">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Company Asset Name*</label>
                                            <input type="text" required class="form-control" placeholder="Unique Value">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Category*</label>
                                            <select name="location_head" id="location_head"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="361"></option>
                                                <option value="361"></option>
                                                <option value="361"></option>


                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Is Working*</label>
                                            <select name="location_head" id="location_head"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="361"></option>
                                                <option value="361"></option>
                                                <option value="361"></option>


                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Company*</label>
                                            
                                            <select name="location_head" id="location_head"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="361"></option>
                                                <option value="361"></option>
                                                <option value="361"></option>


                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Employee*</label>
                                            <select name="location_head" id="location_head"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="361"></option>
                                                <option value="361"></option>
                                                <option value="361"></option>


                                            </select>
                                        </div>


                                        <div class="col-md-6 form-group">
                                            <label>Purchase Date  *</label>
                                            <input type="date" name="start_date" id="start_date" class="form-control date" value="">

                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Warranty/AMC End Date *</label>
                                            <input type="date" name="start_date" id="start_date" class="form-control date" value="">

                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Manufacturer *</label>
                                            <input type="text" required class="form-control" placeholder="">

                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Invoice Number *</label>
                                            <input type="text" required class="form-control" placeholder="">

                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Serial Number *</label>
                                            <input type="text" required class="form-control" placeholder="">

                                        </div>

                                        <!-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Asset Note</label>
                                                <textarea class="form-control" id="asset_note" name="asset_note"
                                                          rows="3"></textarea>
                                            </div>
                                        </div> -->
            
                                        <div class="col-md-6 form-group">
                                            <label>Asset Image *</label>
                                            <input type="file" name="asset_image" id="asset_image" class="form-control"
                                            placeholder=Optional>

                                        </div>

                                     

                                        <div class="form-group" align="center" style="margin-left: 45%;">
                                           
                                            <input type="submit" name="action_button"
                                                class="btn btn-warning" value=Add />
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
                                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>sr</th>
                                                <th>Asset Name</th>
                                                <th>Category </th>
                                                <th>Company Asset Code </th>
                                                <th>Is Working?</th>
                                                <th>Assign To</th>
                                                <th>Company</th>

                                                <th>Warrenty Date</th>
                                                <th>Action</th>
                                              

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Computer 1</td>
                                                <td>Office accessories</td>
                                                <td>001</td>
                                                <td>Yes</td>
                                                <td>ABHAY BAPAT</td>
                                                <td>Vimal crop care pvt ltd</td>
                                             <td>2023-01-02</td>
                                                <!-- <td class="text-center">
                                                    <a href="javascript:void(0);" data-toggle="tooltip"
                                                        data-placement="top" title="Edit"><svg
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
                                                        data-placement="top" title="Delete"><svg
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

                                                </td> -->
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="javascript:void(0);" data-toggle="tooltip"
                                                        data-placement="top" title="Edit"><svg
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
                                                        data-placement="top" title="Delete"><svg
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
                                                      
                                                    </div>
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