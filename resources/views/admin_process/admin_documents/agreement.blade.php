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
                                        <label>Select Company*</label>
                                        <select name="location_head" id="location_head" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Employee...'>
                                            <option value="361">Select company</option>
                                            <option value="361"> Vimal crop care pvt ltd</option>
                                            <option value="361"> Zebra Crossing Ltd</option>


                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Select Location*</label>
                                        <select name="location_head" id="location_head" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Employee...'>
                                            <option value="361">Select location</option>
                                            <option value="361"> location1</option>
                                            <option value="361"> location2</option>


                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Select Department*</label>
                                        <select name="location_head" id="location_head" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Employee...'>
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
                                        <select name="location_head" id="location_head" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Employee...'>
                                            <option value="361">Select Vendor</option>
                                            <option value="361">Vendor1</option>
                                            <option value="361">Vendor2</option>
                                            <option value="361">Vendor3</option>
                                            <option value="361">Vendor4</option>

                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Select Expenses Category*</label>
                                        <select name="location_head" id="location_head" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Employee...'>
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
                                        <select name="location_head" id="location_head" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Employee...'>
                                            <option value="361">Select Vendor</option>
                                            <option value="361"> Vendor</option>
                                            <option value="361"> Vendor</option>


                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Multiple entries*</label>
                                        <select name="location_head" id="location_head" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Employee...'>
                                            <option value="361">Select entries</option>
                                            <option value="361">entries</option>
                                            <option value="361">entries</option>


                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Multiple entries*</label>
                                        <select name="location_head" id="location_head" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Employee...'>
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
                                        <select name="location_head" id="location_head" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Employee...'>
                                            <option value="361">Select Gender</option>
                                            <option value="361">Male</option>
                                            <option value="361">Female</option>
                                            <option value="361">Other</option>


                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Minimum Experience*</label>
                                        <select name="location_head" id="location_head" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Employee...'>
                                            <option value="361">Select Option</option>
                                            <option value="361">Fresh</option>
                                            <option value="361">1</option>
                                            <option value="361">2</option>
                                            <option value="361">3</option>
                                            <option value="361">4</option>
                                            <option value="361">1</option>
                                            <option value="361">5</option>
                                            <option value="361">1</option>
                                            <option value="361">6</option>
                                            <option value="361">1</option>
                                            <option value="361">7</option>
                                            <option value="361">1</option>
                                            <option value="361">8</option>

                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>Is Featured*</label>
                                        <select name="location_head" id="location_head" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Employee...'>
                                            <option value="361">Select company</option>
                                            <option value="361">Yes</option>
                                            <option value="361">No</option>


                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Status*</label>
                                        <select name="location_head" id="location_head" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Employee...'>
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
                                    <select name="location_head" id="location_head" class="form-control selectpicker"
                                        data-live-search="true" data-live-search-style="begins"
                                        title='Select Employee...'>
                                        <option value="361">Select company</option>
                                        <option value="361"> Vimal crop care pvt ltd</option>
                                        <option value="361"> Zebra Crossing Ltd</option>


                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Job title*</label>
                                    <input type="text" required class="form-control" placeholder="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Job Type*</label>
                                    <select name="location_head" id="location_head" class="form-control selectpicker"
                                        data-live-search="true" data-live-search-style="begins"
                                        title='Select Employee...'>
                                        <option value="361">Select Option</option>
                                        <option value="361">Full time</option>
                                        <option value="361">Part Time</option>
                                        <option value="361">Internship</option>
                                        <option value="361">Freelance</option>

                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Job Category*</label>
                                    <select name="location_head" id="location_head" class="form-control selectpicker"
                                        data-live-search="true" data-live-search-style="begins"
                                        title='Select Employee...'>
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
                                    <select name="location_head" id="location_head" class="form-control selectpicker"
                                        data-live-search="true" data-live-search-style="begins"
                                        title='Select Employee...'>
                                        <option value="361">Select Gender</option>
                                        <option value="361">Male</option>
                                        <option value="361">Female</option>
                                        <option value="361">Other</option>


                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Minimum Experience*</label>
                                    <select name="location_head" id="location_head" class="form-control selectpicker"
                                        data-live-search="true" data-live-search-style="begins"
                                        title='Select Employee...'>
                                        <option value="361">Select Option</option>
                                        <option value="361">Fresh</option>
                                        <option value="361">1</option>
                                        <option value="361">2</option>
                                        <option value="361">3</option>
                                        <option value="361">4</option>
                                        <option value="361">1</option>
                                        <option value="361">5</option>
                                        <option value="361">1</option>
                                        <option value="361">6</option>
                                        <option value="361">1</option>
                                        <option value="361">7</option>
                                        <option value="361">1</option>
                                        <option value="361">8</option>

                                    </select>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label>Is Featured*</label>
                                    <select name="location_head" id="location_head" class="form-control selectpicker"
                                        data-live-search="true" data-live-search-style="begins"
                                        title='Select Employee...'>
                                        <option value="361">Select company</option>
                                        <option value="361">Yes</option>
                                        <option value="361">No</option>


                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Status*</label>
                                    <select name="location_head" id="location_head" class="form-control selectpicker"
                                        data-live-search="true" data-live-search-style="begins"
                                        title='Select Employee...'>
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
                        <div id="exampleModalRemoveAnimation" class="modal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalPopoversLabel">
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
                                            <button class="btn btn-dark" data-dismiss="modal"><i
                                                    class="flaticon-cancel-12"></i> OK</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- model end -->
                <form method="post" enctype="multipart/form-data" id="store_purchase_work"
                    action="{{ route('admin_process.admin_documents.store_agreement') }}">
                    <div class="col-md-12 ">
                        <h3 style="font-weight: bold;color:blue">Add Agreements</h3>
                    </div>
                    @csrf
                    <div class="row" style="padding: 10px;">

                        <div class="col-md-3 form-group">
                            <label>Select Company*</label>
                            <select name="company_id" id="company_id" class="form-control selectpicker"
                                data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                <option value="">Please select company</option>
                                @foreach ($company as $company)
                                    <option value="{{ $company->id }}">{{ $company->company_name }}
                                    </option>
                                @endforeach


                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Select Location*</label>
                            <select name="location_id" id="location_id" class="form-control selectpicker"
                                data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                <option value="361">Select location</option>





                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Select Department*</label>
                            <select name="department_id" id="department_id" class="form-control selectpicker"
                                data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                <option value="">Select department</option>


                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Select Date*</label>
                            <input type="date" required class="form-control" placeholder="" name="date">
                        </div>

                        <div class="col-md-3 form-group">
                            <label>Select Expenses Category*</label>
                            <select name="expense_category_id" id="expense_category_id" class="form-control selectpicker"
                                data-live-search="true" data-live-search-style="begins" title='Select ...'>
                                <option>Select Expenses Category</option>
                            </select>
                        </div>

                        <div class="col-md-3 form-group">
                            <label>Select Vendor Category*</label>
                            <select name="vendor_category_id" id="vendor_category_id" class="form-control selectpicker"
                                data-live-search="true" data-live-search-style="begins" title='Select ...'>
                                <option>Select Vendor Category</option>
                            </select>
                        </div>

                        <div class="col-md-3 form-group">
                            <label>Select Vendor*</label>
                            <select name="vendor_id" id="vendor_id" class="form-control selectpicker"
                                data-live-search="true" data-live-search-style="begins" title='Select ...'>
                                <option>Select Vendor</option>


                            </select>
                        </div>

                        <div class="col-md-3 form-group">
                            <label>Vendor Representative Name</label>
                            <input type="text" required class="form-control" placeholder=""
                                id="vendor_representative_name" name="vendor_representative_name">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Select Service*</label>
                            <select name="service_id" id="service_id" class="form-control selectpicker"
                                data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                <option value="1">Select Service 1</option>
                                <option value="2">Select Service 2</option>
                                <option value="3">Select Service 3</option>
                                <option value="4">Select Service 4</option>


                            </select>
                        </div>
                        <div class="col-md-2 form-group">
                            <label>Add Qty*</label>
                            <input type="number" class="form-control" placeholder="" id="quantity" name='quantity'>

                        </div>
                        <div class="col-md-2 form-group">
                            <label>Add or Select Rate*</label>
                            <input type="number" class="form-control" placeholder="" id="rate" name="rate">

                        </div>
                        <div class="col-md-3 form-group">
                            <label>Add Order Details*</label>
                            <input type="text" class="form-control" placeholder="" id="details" name="details">

                        </div>
                        <div class="col-md-2 form-group">
                            <div class="form-group" align="center" style="width: full;margin-top: 6vh;">

                                <input type="button" name="action_button" class="btn btn-warning" value=Add
                                    id="add_row" />
                            </div>
                        </div>


                        <table class="items_table table table-bordered width100" id="items_table">

                            <thead>
                                <tr class="filters">
                                    <th></th>
                                    <th>Service</th>
                                    <th>Quantity</th>
                                    <th>Rate</th>
                                    <th>Details </th>
                                </tr>
                            </thead>
                            <tbody id="add_more">
                            </tbody>
                        </table>
                        <button type="button" class="delete-row btn btn-danger"
                            style="margin-left: 90%; margin-top: 5px;">Delete Row</button>
                        <div class="col-md-3 form-group">
                            <label>Toatl Amount*</label>
                            <input type="number" required class="form-control" placeholder="" name="total_amount"
                                id="total_amount" value="0">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Add Agreement Period*</label>
                            <input type="text" required class="form-control" placeholder="" name="agreement_period"
                                id="agreement_period">
                        </div>

                        <div class="col-md-3 form-group">
                            <label>Add Agreement Terms*</label>
                            <textarea class="form-control" name="agreement_terms" id="agreement_terms"></textarea>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Agreement Value*</label>
                            <input type="number" required class="form-control" placeholder="" name="agreement_value"
                                id="agreement_value" value="0">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Approved By - Signing Authority Name*</label>
                            <input type="text" required class="form-control" placeholder="" name="approved_by"
                                id="approved_by_name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Approved By - Signing Authority Designation*</label>
                            <input type="text" required class="form-control" placeholder=""
                                name="approved_by_designation" id="approved_by_designation">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Approval Date*</label>
                            <input type="date" required class="form-control" placeholder="" name="approved_date"
                                id="approved_date" value="0">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Select Template Format*</label>
                            {{-- <select name="template_id" id="template_id" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Employee...'>
                                                            <option value="1">Template 1</option>
                                                            <option value="2">Template 2</option>
                                                            <option value="3">Template 3</option>
                                                            <option value="4">Template 4</option>


                                                        </select> --}}

                            <select name="template_id" id="template_id" class="form-control selectpicker"
                                data-live-search="true" data-live-search-style="begins" title='Select Company Type...'>
                                <option value="">Select Template Format
                                </option>
                                @foreach ($template as $templates)
                                    <option value="{{ $templates->template_id }}">{{ $templates->template_file }}
                                    </option>
                                @endforeach
                            </select>


                        </div>
                        <div class="col-md-3 form-group">
                            <label>Generate Agreement Number*</label>
                            <input type="text" required class="form-control" name="generated_agreement_number"
                                id="generated_agreement_number" value="AN-{{ time() }}" readonly>
                        </div>
                    </div>
                    <div class="row" style="padding: 10px;">


                        <div class="form-group" align="center" style="margin-left: 50%; width: full;">

                            <input type="submit" name="action_button" class="btn btn-warning" value=Add />
                        </div>

                    </div>
                </form>

                <!--view Model Start -->
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myExtraLargeModalLabel">Job Info.</h5>
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
                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                    Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- model end -->
                <div class="row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>sr</th>
                                            <th>Company </th>
                                            <th>Location </th>
                                            <th>Department</th>
                                            <th>Date</th>
                                            <th>Vendor category</th>
                                            <th>Expenses category</th>
                                            <th>Selected Vendor</th>
                                            <th>Total Amt.</th>
                                            <th>Agreement Period</th>
                                            <th>Approved By</th>
                                            <th>Approval Date*</th>
                                            <th>Template Format</th>
                                            <th>Generate PO or WO number</th>
                                            {{-- <th>Action</th> --}}


                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($agreement as $agr)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $agr->company_name }}</td>
                                            <td>{{ $agr->location_name }} </td>
                                            <td>{{ $agr->department }}</td>
                                            <td>{{ $agr->date }}</td>
                                            <td>{{ $agr->vendor_name }}</td>
                                            <td>{{ $agr->expenses_category }}</td>
                                            <td>{{ $agr->vendor_name }}</td>
                                            <td>{{ $agr->total_amount }}</td>
                                            <td>{{ $agr->agreement_period }}</td>
                                            <td>{{ $agr->approved_by }}</td>
                                            <td>{{ $agr->approved_date }}</td>
                                            <td>
                                                <a target="_black" href="{{ asset('public/images/' . $agr->template_file) }}">
                                                    {{ $agr->template_file }}
                                                </a>
                                               
                                            </td>
                                            <td>{{ $agr->generated_agreement_number }}</td>
                                            {{-- <td>Action</td> --}}
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
                var company_id = $(this).val();
                $.ajax({
                    url: "{{ route('get_department_location_by_company') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        company_id: company_id,
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
                        get_expense_category_by_company(company_id);
                    }
                })
            })


            function get_expense_category_by_company(company_id) {
                $.ajax({
                    url: "{{ route('admin_report.get_expense_category_by_company') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        company_id: company_id,
                    },
                    success: function(result) {

                        $("#expense_category_id").empty();
                        $("#expense_category_id").append(
                            '<option value="" disabled selected>Select Expense Category</option>'
                        );
                        $.each(result, function(a, b) {
                            $("#expense_category_id").append('<option value="' + b.id +
                                '">' + b
                                .category + '</option>');
                        });
                    }
                })
            }

            $(document).on('change', '#expense_category_id', function() {
                $.ajax({
                    url: "{{ route('admin_report.get_vendor_category_by_expense_category') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        expense_category_id: $(this).val(),
                        company_id: $("#company_id").val(),
                    },
                    success: function(result) {

                        $("#vendor_category_id").empty();
                        $("#vendor_category_id").append(
                            '<option value="" disabled selected>Select Vendor Category</option>'
                        );
                        $.each(result, function(a, b) {
                            $("#vendor_category_id").append('<option value="' + b.id +
                                '">' + b
                                .vendor_category_name + '</option>');
                        });
                    }
                })
            })

            $(document).on('change', '#vendor_category_id', function() {
                $.ajax({
                    url: "{{ route('admin_report.get_vendor_details_by_vendor_category') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        vendor_category_id: $(this).val(),
                        expense_category_id: $("#expense_category_id").val(),
                    },
                    success: function(result) {

                        $("#vendor_id").empty();
                        $("#vendor_id").append(
                            '<option value="" disabled selected>Select Vendor Name</option>'
                        );
                        $.each(result, function(a, b) {
                            $("#vendor_id").append('<option value="' + b.id + '">' + b
                                .vendor_name + '</option>');
                        });
                    }
                })
            })








            $(document).on('click', '.delete_stored', function() {
                let id = $("#row_id").val();

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
                            url: "{{ route('admin_process.admin_documents.delete_agreement') }}",
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
            $("#add_row").click(function() {

                var service_id = $("#service_id").val();
                var quantity = $("#quantity").val();
                var rate = $("#rate").val();
                var details = $("#details").val();
                var quantity_multiply_rate = parseFloat(quantity) * parseFloat(rate);
                var old_total = $("#total_amount").val();

                $("#total_amount").val(parseFloat(old_total) + parseFloat(quantity_multiply_rate));

                if (quantity == '' || rate == '' || details == '') {
                    alert('Please Fill All Fields');
                    $("#total_amount").val(old_total);
                } else {
                    var markup =
                        "<tr><td><input type='checkbox' class='del_check1' name='record'></td><td><input type='text' class='form-control' name='service_id[]' value='" +
                        service_id +
                        "' ></td><td><input type='number' class='form-control' name='quantity[]' value='" +
                        quantity +
                        "' ></td><td><input type='number' step='0.1' class='form-control' name='rate[]' value='" +
                        rate +
                        "' ></td><td><input type='text' class='form-control'  name='details[]' value='" +
                        details + "' ></td></tr>";
                    $("#add_more").append(markup);
                    //empty all fields

                    $("#service_id").val('');
                    $("#quantity").val('');
                    $("#rate").val('');
                    $("#details").val('');


                }

            });
            $(".delete-row").click(function() {
                $('.del_check1').each(function() {
                    // alert();
                    if ($(this).is(":checked")) {
                        var quantity = $(this).parents("tr").find('input[name="quantity[]"]').val();
                        var rate = $(this).parents("tr").find('input[name="rate[]"]').val();
                        var minus_amount = parseFloat(quantity) * parseFloat(rate);
                        var old_amount = $("#total_amount").val();
                        $("#total_amount").val(parseFloat(old_amount) - parseFloat(minus_amount));
                        $(this).parents("tr").remove();

                    }
                });
            });
        })
    </script>


@stop
