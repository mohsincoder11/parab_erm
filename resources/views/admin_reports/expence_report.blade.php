@extends('layout/layout')
@section('content')

        <div id="content" class="main-content">
            <div style=" background-color:white; ">

            <div style="margin-top: 2%; font-size: 20px; margin-left: 3%;">
                <p><b>Expence Report</b></p>
               
            </div>
            <div class="layout-px-spacing">

             <div class="row">
                <div class="col-md-3 form-group">
                    <label>Category*</label>
                    <select name="location_head" id="location_head"
                        class="form-control selectpicker" data-live-search="true"
                        data-live-search-style="begins" title='Select Employee...'>
                        <option value="" disabled selected>Select Category</option>

                        <option value="361">All</option>


              </select>
                </div>

                <div class="col-md-3 form-group">
                    <label>Start Date*</label>
                    <input type="date" name="start_date" id="start_date"
                    class="form-control date" value="">
                </div>

                <div class="col-md-3 form-group">
                    <label>End Date*</label>
                    <input type="date" name="start_date" id="start_date"
                    class="form-control date" value="">
                </div>

            

                  <div class="row" style="margin-top: 2.5%;">
                    <div class="col-lg-12 col-md-12 col-sm-12 filtered-list-search mx-auto">
                        <form class=" justify-content-center">
                            <div class="w-100">
                                <input type="text" class="w-100 form-control product-search br-30" id="input-search" placeholder="Search Attendees..." >
                                <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                            </div>
                        </form>
                    </div>
                </div>
             </div>
            </div>
        </div>
                <div style="margin-top: 3%; margin-bottom: 3%;">
                 

                    </div>


                    <div class="row" id="cancel-row">

                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-6">
                                <div class="table-responsive mb-4 mt-4">
                                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr.no</th>
                                                <th>Date</th>
                                                <th>Account</th>
                                                <th>Category</th>
                                                <th>Payee</th>
                                                <th>Amount</th>
                                               <th>Refrence Id</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             
                                                <td>
                                                    <a href="javascript:void(0);" 
                                                        data-placement="top" title="Edit" data-toggle="modal" data-target="#editmodel"><svg
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
          @stop