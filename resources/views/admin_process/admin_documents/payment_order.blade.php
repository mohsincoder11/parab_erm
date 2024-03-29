@extends('layout.layout')
@section('content')

<div id="content" class="main-content">
    <div class="layout-px-spacing">


        <div style="margin-top: 1%;">
            @include('layout.alerts')

            <div>
                <!-- <div>
                    <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal" data-target=".bd-example-modal-lg"><svg xmlns="http://www.w3.org/2000/svg"
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

                </div> -->
                <!-- Model Start -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                    <label>Select Company*</label>
                                    <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                        <option value="361">Select company</option>
                                        <option value="361">	Vimal crop care pvt ltd</option>
                                        <option value="361">	Zebra Crossing Ltd</option>


                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Select Location*</label>
                                    <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                        <option value="361">Select location</option>
                                        <option value="361">	location1</option>
                                        <option value="361">	location2</option>


                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Select Department*</label>
                                    <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                        <option value="361">Select department</option>
                                        <option value="361">department1</option>
                                        <option value="361">department2</option>


                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Select Date*</label>
                                    <input type="date" required class="form-control" placeholder="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Select Vendor Category*</label>
                                    <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                    <option value="361">Select Vendor</option>
                                    <option value="361">Vendor1</option>
                                    <option value="361">Vendor2</option>
                                    <option value="361">Vendor3</option>
                                    <option value="361">Vendor4</option>
                                   
                                </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Select Expenses Category*</label>
                                    <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                    <option value="361">Select Category</option>
                                    <option value="361">Category</option>
                                    <option value="361">Category</option>
                                    <option value="361">Category</option>
                                    <option value="361">Category</option>
                                    <option value="361">Category</option>
                                    <option value="361">Category</option>
                                    <option value="361">Category</option>
                                    <option value="361">Category</option>
                                    <option value="361">Category</option>

                                </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Select Vendor*</label>
                                    <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                        <option value="361">Select Vendor</option>
                                        <option value="361">	Vendor</option>
                                        <option value="361">	Vendor</option>


                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Multiple entries*</label>
                                    <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                        <option value="361">Select entries</option>
                                        <option value="361">entries</option>
                                        <option value="361">entries</option>


                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Multiple entries*</label>
                                    <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                        <option value="361">Select entries</option>
                                        <option value="361">entries</option>
                                        <option value="361">entries</option>


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
                                    <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                    <option value="361">Select Gender</option>
                                    <option value="361">Male</option>
                                    <option value="361">Female</option>
                                    <option value="361">Other</option>


                                </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Minimum Experience*</label>
                                    <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
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
                                    <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                        <option value="361">Select company</option>
                                        <option value="361">Yes</option>
                                        <option value="361">No</option>


                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Status*</label>
                                    <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                        <option value="361">Select company</option>
                                        <option value="361">Unpublished</option>
                                        <option value="361">Published</option>


                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Short Description</label>
                                        <textarea class="form-control" id="asset_note" name="asset_note" rows="3"></textarea>
                                    </div>
                                </div>



                                <div class="form-group" align="center" style="margin-left: 45%; width: full;">

                                    <input type="submit" name="action_button" class="btn btn-warning" value=Add />
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- model end -->


            <!--edit Model Start -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="editmodel" aria-hidden="true">
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
                                <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
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
                                <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                    <option value="361">Select Option</option>
                                    <option value="361">Full time</option>
                                    <option value="361">Part Time</option>
                                    <option value="361">Internship</option>
                                    <option value="361">Freelance</option>
                                   
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Job Category*</label>
                                <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
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
                                <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                    <option value="361">Select Gender</option>
                                    <option value="361">Male</option>
                                    <option value="361">Female</option>
                                    <option value="361">Other</option>


                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Minimum Experience*</label>
                                <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
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
                                <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                        <option value="361">Select company</option>
                                        <option value="361">Yes</option>
                                        <option value="361">No</option>


                                    </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Status*</label>
                                <select name="location_head" id="location_head" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                        <option value="361">Select company</option>
                                        <option value="361">Unpublished</option>
                                        <option value="361">Published</option>


                                    </select>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea class="form-control" id="asset_note" name="asset_note" rows="3"></textarea>
                                </div>
                            </div>



                            <div class="form-group" align="center" style="margin-left: 45%; width: full;">

                                <input type="submit" name="action_button" class="btn btn-warning" value=Edit />
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
                                        <p class="modal-text">Parberp.com says<br> Please select atleast one Checkbox
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


        <form  method="post" enctype="multipart/form-data" id="store_payment_order" 
        action="{{ route('admin_process.admin_documents.store_payment_order') }}">
            <div class="col-md-12 ">
                <h3 style="font-weight: bold;color:blue">Payment Order</h3>
            </div>
    @csrf
            <div class="row" style="padding: 10px;">

                                        <div class="col-md-3 form-group">
                                            <label>Select Company*</label>
                                            <select name="company_id" id="company_id" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                            <option value="">Please select company</option>
                                                @foreach ($company as $company)
                                                    <option value="{{ $company->id }}">{{ $company->company_name }}
                                                    </option>
                                                @endforeach


                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>Select Location*</label>
                                            <select name="location_id" id="location_id" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...' required>
                                                <option value="361">Select location</option>


                                    


                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>Select Department*</label>
                                            <select name="department_id" id="department_id" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...' required>
                                                <option value="">Select department</option>


                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>Select Date*</label>
                                            <input type="date" required class="form-control" placeholder="" name="date">
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <label>Select Vendor Category*</label>
                                            <select name="vendor_category_id" id="vendor_category_id" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                            <option disabled>Select Vendor Category</option>
                                                @foreach ($vendor_category as $vendor_category)
                                                    <option value="{{ $vendor_category->id }}">{{ $vendor_category->vendor_category_name }}
                                                    </option>
                                                @endforeach
                                           
                                        </select>
                                        </div>
                                     
                                        <div class="col-md-3 form-group">
                                            <label>Select Vendor*</label>
                                            <select name="vendor_id" id="vendor_id" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                            <option disabled>Select Vendor</option>
                                                @foreach ($vendor as $vendor)
                                                    <option value="{{ $vendor->id }}">{{ $vendor->vendor_name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>Select Purchase Invoice No*</label>
                                            <select name="purchase_invoice_id" id="purchase_invoice_id" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" >
                                            <option disabled>Select purchse invoice number</option>
                                                @foreach ($purchase_invoice as $purchase_invoice)
                                                    <option value="{{ $purchase_invoice->id }}">{{ $purchase_invoice->invoice_number }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>Payment Date*</label>
                                            <input type="date" required class="form-control" placeholder="" name="payment_date">
                                        </div>
            </div>
            <div class="row" style="padding:10px;" id="payment_info_row">
                <div class="col-md-3 form-group">
                    <label>Purchase Invoice Date: <span id="payment_info_row_invoice_date"></span></label>
                </div>
                <div class="col-md-3 form-group">
                    <label>Purchase Details: <span id="payment_info_row_order_details"></span></label>
                </div>
                <div class="col-md-3 form-group">
                    <label>Purchase Total: <span id="payment_info_row_total_amount"></span></label>
                </div>
                



            </div>
            <div class="row" style="padding:10px;">
                                        <div class="col-md-3 form-group">
                                            <label>Payment Mode*</label>
                                            <select name="payment_mode" id="payment_mode" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" >
                                                <option disabled>Select payment mode</option>
                                                <option value="RTGS">RTGS</option>
                                                <option value="NEFT">NEFT</option>
                                                <option value="G-PAY">G-PAY</option>
                                                <option value="Cheque">Cheque</option>
                                                <option value="Cash">Cash</option>
                                              

                                            </select>
                                        </div>

             

                                        <div class="col-md-3 form-group">
                                            <label>Payment Reference Number</label>
                                            <input type="text" required class="form-control" placeholder="" name="payment_ref_no">
                                        </div> 
                                          <div class="col-md-3 form-group">
                                            <label>Signing Authority Name & Designation*</label>
                                            <input type="text" required class="form-control" placeholder="" name="authority_name">
                                        </div>
                <div class="col-md-3 form-group">
                    <label>Approve Date*</label>
                    <input type="date" required class="form-control" placeholder="" name="approved_date">
                </div>
                <div class="col-md-3 form-group">
                    <label>Select Template Format*</label>
                    <select name="template_id" id="template_id" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                    <option value="1">Template 1</option>
                                    <option value="2">Template 2</option>
                                    <option value="3">Template 3</option>
                                    <option value="4">Template 4</option>


                                </select>
                </div>
                <div class="col-md-3 form-group">
                    <label>Payment Order Number</label>
                    <input type="text" required class="form-control" placeholder="" value="P-{{time()}}" readonly name="payment_order_no">
                </div>
               
            </div>


                                        <div class="form-group" align="center" style="width: full;">

                                            <input type="submit" name="action_button" class="btn btn-warning" value=Add />
                                        </div>

                                    </div>
        </form>

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
                                                <td>Sales Executive </td>
                                            </tr>

                                            <tr>
                                                <th>Company</th>
                                                <td>Vimal crop care pvt ltd</td>
                                            </tr>

                                            <tr>
                                                <th>Experience </th>
                                                <td>1 Years</td>
                                            </tr>

                                            <tr>
                                                <th>Vacancy</th>
                                                <td>20</td>
                                            </tr>

                                            <tr>
                                                <th>Apply Before</th>
                                                <td>2022/03/15</td>
                                            </tr>

                                            <tr>
                                                <th>Posted</th>
                                                <td>2 months ago</td>
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
            <div class="row" >

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>sr</th>
                                        <th> company </th>
                                        <th>Location </th>
                                        <th>Department</th>
                                        <th>Date</th>
                                        <th>Vendor category</th>
                                        <th>Vendor Name</th>
                                        <th>Purchase Invoice Number</th>
                                        <th>Payment Date</th>
                                        <th>Payment Mode</th>
                                        <th>Payment Ref No.</th>
                                        <th>Authority Name</th>
                                        <th>Approval Date</th>
                                        <th>payment_order_no</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($payment_order as $payment_order)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$payment_order->company_name}}</td>
                                        <td>{{$payment_order->location_name}}</td>
                                        <td>{{$payment_order->department}}</td>
                                        <td>{{$payment_order->date}}</td>
                                        <td>{{$payment_order->vendor_category_name}}</td>
                                        <td>{{$payment_order->vendor_name}}</td>
                                        <td>{{$payment_order->invoice_number}}</td>
                                        <td>{{$payment_order->payment_date}}</td>
                                        <td>{{$payment_order->payment_mode}}</td>
                                        <td>{{$payment_order->payment_ref_no}}</td>
                                        <td>{{$payment_order->authority_name}}</td>
                                        <td>{{$payment_order->approved_date}}</td>
                                        <td>{{$payment_order->payment_order_no}}</td>
                                      

                                        <td>
                                            {{-- <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="view" data-target=".bd-example-modal-xl"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                              </svg></a> --}}


                                            {{-- <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit" data-target="#editmodel"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-edit-2 text-success">
                                                    <path
                                                        d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg></a> --}}

                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete" class="delete_stored" id="{{$payment_order->id}}"><svg
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
                                    @endforeach


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

@section('js')
    <script src="{{ asset('public/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('public/plugins/select2/custom-select2.js') }}"></script>

    <script>
        $(document).ready(function() {
            $(".select2").select2({
                //tags: true,
                dropdownParent: $(".add-edit_modal")
            });
            $(document).on('change', '#company_id', function() {
                $.ajax({
                    url: "{{ route('get_department_location_by_company') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        company_id: $(this).val(),
                    },
                    success: function(result) {

                        $("#department_id").empty();
                        $("#location_id").empty();
                        $("#location_id").append(
                            '<option value="" disabled selected>Select Location</option>');
                        $("#department_id").append(
                            '<option value="" disabled selected>Select Department</option>');
                        $.each(result['department'], function(a, b) {
                            $("#department_id").append('<option value="' + b.id + '">' +
                                b.department + '</option>');
                        });
                        $.each(result['location'], function(a, b) {
                            $("#location_id").append('<option value="' + b.id + '">' + b
                                .location_name + '</option>');
                        });
                    }
                })
            })

            $(document).on('change', '#company_id', function() {
                $.ajax({
                    url: "{{ route('get_department_location_by_company') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        company_id: $(this).val(),
                    },
                    success: function(result) {

                        $("#department_id").empty();
                        $("#location_id").empty();
                        $("#location_id").append(
                            '<option value="" disabled selected>Select Location</option>');
                        $("#department_id").append(
                            '<option value="" disabled selected>Select Department</option>');
                        $.each(result['department'], function(a, b) {
                            $("#department_id").append('<option value="' + b.id + '">' +
                                b.department + '</option>');
                        });
                        $.each(result['location'], function(a, b) {
                            $("#location_id").append('<option value="' + b.id + '">' + b
                                .location_name + '</option>');
                        });
                    }
                })
            })

            $("#payment_info_row").hide();

            $(document).on('change', '#purchase_invoice_id', function() {
                $.ajax({
                    url: "{{ route('admin_process.admin_documents.fetch_purchase_invoice_detail') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: $(this).val(),
                    },
                    success: function(result) {
                        $("#payment_info_row").show();
                        $("#payment_info_row_invoice_date").text(result.invoice_date);
                        $("#payment_info_row_order_details").text(result.order_details);
                        $("#payment_info_row_total_amount").text(result.total_amount);
                        

                       console.log(result);
                    }
                })
            })
            
            $(document).on('change', '#company_id', function() {
                $.ajax({
                    url: "{{ route('admin_report.get_vendor_category_by_company') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        company_id: $(this).val(),
                    },
                    success: function(result) {

                        $("#vendor_category").empty();
                        $("#vendor_category").append(
                            '<option value="" disabled selected>Select Vendor Category</option>');
                           $.each(result, function(a, b) {
                            $("#vendor_category").append('<option value="' + b.id + '">' + b
                                .vendor_category_name + '</option>');
                        });
                    }
                })
            })

            $(document).on('change', '#vendor_category', function() {
                $.ajax({
                    url: "{{ route('admin_report.get_vendor_details_by_vendor_category') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        vendor_category_id: $(this).val(),
                        company_id: $("#company_id").val(),
                    },
                    success: function(result) {

                        $("#vendor_name").empty();
                        $("#vendor_name").append(
                            '<option value="" disabled selected>Select Vendor Name</option>');
                           $.each(result, function(a, b) {
                            $("#vendor_name").append('<option value="' + b.id + '">' + b
                                .vendor_name + '</option>');
                        });
                    }
                })
            })
            
            
            $(document).on('click', '.delete_stored', function() {
                let id = $(this).attr('id');

                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Delete',
                    padding: '2em'
                }).then(function(result) {
                    if (result.value) {
                        $.ajax({
                            url: "{{ route('admin_process.admin_documents.delete_payment_order') }}",
                            method: "GET",
                            dataType: 'json',
                            data: {
                                id: id,
                            },
                            success: function(result) {

                                swal(
                                    'Deleted!',
                                    'Your Record has been deleted.',
                                    'success'
                                );
                                setTimeout(function() {
                                    location.reload();
                                }, 3000);

                            }
                        })
                    }
                })
            })


            $(document).on('change', '#vendor_id', function() {
                $.ajax({
                    url: "{{ route('get_vendor_name') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: $(this).val(),
                    },
                    success: function(result) {
                        $("#vendor_representative_name").val('');
                        $("#vendor_representative_name").val(result.vendor_details.vendor_name);
                    }
                })
            })



            //Add Row 
            $("#add_row").click(function(){
                
                var item_id = $("#item_id").val();
                var quantity = $("#quantity").val();
                var rate = $("#rate").val();
                var details = $("#details").val();
                var quantity_multiply_rate = parseFloat(quantity)*parseFloat(rate);
                var old_total = $("#total_amount").val();
                
                $("#total_amount").val(parseFloat(old_total)+parseFloat(quantity_multiply_rate));
                
                if(quantity=='' || rate=='' || details=='')
                {
                    alert('Please Fill All Fields');    
                    $("#total_amount").val(old_total);
                }
                else
                {
                    var markup = "<tr><td><input type='checkbox' class='del_check1' name='record'></td><td><input type='text' class='form-control' name='item_id[]' value='"+ item_id +"' ></td><td><input type='number' class='form-control' name='quantity[]' value='"+ quantity +"' ></td><td><input type='number' step='0.1' class='form-control' name='rate[]' value='"+ rate +"' ></td></tr>";
                $("#add_more").append(markup);
                //empty all fields
                   
                    $("#service_id").val('');
                    $("#quantity").val('');
                     $("#rate").val('');
                    $("#details").val('');


                }
                
            });
            $(".delete-row").click(function(){
                $('.del_check1').each(function(){
                        // alert();
                        if($(this).is(":checked")){
                            var quantity=$(this).parents("tr").find('input[name="quantity[]"]').val();
                            var rate=$(this).parents("tr").find('input[name="rate[]"]').val();
                            var minus_amount=parseFloat(quantity)*parseFloat(rate);
                            var old_amount = $("#total_amount").val();
                            $("#total_amount").val(parseFloat(old_amount)-parseFloat(minus_amount));
                            $(this).parents("tr").remove();

                        }
                    });
            });
        })
    </script>

    
@stop
