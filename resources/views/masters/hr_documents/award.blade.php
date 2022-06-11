@extends('layout/layout')
@section('content')

        <div id="content" class="main-content">
            <div class="layout-px-spacing">


                <div style="margin-top: 3%; margin-bottom: 3%;">
                    <div>
                        <div>
                            <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal"
                                data-target=".bd-example-modal-lg">Add Award</button>
                                <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal" >Bulk Delete</button>


                        </div>

                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel">Add Award</h5>
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
                                                <option value="" disabled selected>Company Type</option>
                                                <option value="361">Webmidea pvt.ltd</option>
                                                <option value="361">Webmidea pvt.ltd</option>
                                                <option value="361">Webmidea pvt.ltd</option>


                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Employee*</label>
                                            <select name="location_head" id="location_head"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="" disabled selected>Select Employee</option>
                                                <option value="361">1</option>
                                                <option value="361">1</option>
                                                <option value="361">1</option>


                                            </select>
                                        </div>


                                        
                                        <div class="col-md-6 form-group">
                                            <label>Department*</label>
                                            <select name="location_head" id="location_head"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="" disabled selected>Select Department</option>
                                                <option value="361"></option>

                                            </select>
                                        </div>


                                        
                                        <div class="col-md-6 form-group">
                                            <label>Award Type*</label>
                                            <select name="location_head" id="location_head"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="" disabled selected>Select Award</option>
                                                <option value="361">Performer of the year</option>
                                                <option value="361">Best Salesman</option>
                                                <option value="361">Top Performer of month</option>


                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Gift *</label>
                                            <input type="text" required class="form-control" placeholder="Gift">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Cash*</label>
                                            <input type="text" required class="form-control" placeholder="Cash">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Descrption* </label>
                                            <textarea name="registered_address" id="registered_address" class="form-control"
                                                   placeholder=Optional></textarea>
                                        </div>

                                      

                                        <div class="col-md-6 form-group">
                                            <label>Start Date *</label>
                                            <input type="date" name="start_date" id="start_date" class="form-control date" value="">
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
                                                <th>1</th>
                                                <th>Emplyoee</th>
                                                <th>Company</th>
                                                <th>Promotion Title</th>
                                                
                                                <th>Action</th>
                                           

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                            
                                               
                                             
                                                <td >
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