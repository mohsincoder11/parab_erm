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
                                  </svg>Add Meeting</button>
                                  <button class="btn btn-danger mb-2 mr-2" ><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                                  </svg>   Bulk delete</button>
                            

                        </div>

                        

                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel">Add Meeting</h5>
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
                                                <option value="361"></option>
                                                <option value="361"></option>


                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Employee*</label>
                                            <select name="location_head" id="location_head"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="361">Select Employee</option>
                                                <option value="361"></option>
                                                <option value="361"></option>


                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Meeting Tittle*</label>
                                            <input type="text" required class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Meeting Date*</label>
                                            <input type="date" name="start_date" id="start_date"
                                            class="form-control date" value="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Meeting Time*</label>
                                         
                                    <input type="time" name="meeting_time" id="meeting_time" required class="form-control time" autocomplete="off" value="" placeholder="Meeting Time">
                                        </div>
                                       
                                        <div class="col-md-6 form-group">
                                            <label>Status*</label>
                                            <select name="location_head" id="location_head"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="361">Select Status</option>
                                                <option value="361"></option>
                                                <option value="361"></option>


                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Meeting Note</label>
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


                    <div class="row" id="cancel-row">

                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-6">
                                <div class="table-responsive mb-4 mt-4">
                                    <table id="html5-extension" class="datatable table table-hover non-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>sr</th>
                                                <th> Company</th>
                                                <th>Employee </th>
                                                <th>Meeting Tittle </th>
                                                <th>Meeting Date</th>
                                                <th>Meeting Time</th>
                                          
                                                <th>Action</th>
                                              

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Vimal crop care pvt ltd <br> <span class="badge badge-danger">Ongoing</span>
                                                </td>
                                                <td> Abhishek Gangawane ajit padval</td>
                                                <td>Test</td>
                                                <td>2023/02/28</td>
                                                <td> 04:00PM</td>
                                              
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