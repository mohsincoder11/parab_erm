@extends('layout/layout')
@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing" style="padding-top:20px !important;">

            @include('layout.alerts')

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
                                    <a class="nav-link active" id="border-top-home-tab" data-toggle="tab"
                                        href="#border-top-home" role="tab" aria-controls="border-top-home"
                                        aria-selected="true">Leave Type</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="border-top-profile-tab" data-toggle="tab"
                                        href="#border-top-profile" role="tab" aria-controls="border-top-profile"
                                        aria-selected="false">Award Type</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="border-top-contact-tab" data-toggle="tab"
                                        href="#border-top-contact" role="tab" aria-controls="border-top-contact"
                                        aria-selected="false">Warning Type</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="border-top-termination-tab" data-toggle="tab"
                                        href="#border-top-termination" role="tab" aria-controls="border-top-setting"
                                        aria-selected="false"> Termination Type</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="border-top-expense-tab" data-toggle="tab"
                                        href="#border-top-expense" role="tab" aria-controls="border-top-setting"
                                        aria-selected="false">Expense Type</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="border-top-emp-tab" data-toggle="tab" href="#border-top-emp"
                                        role="tab" aria-controls="border-top-setting" aria-selected="false">Employee
                                        Status</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="border-top-doc-tab" data-toggle="tab" href="#border-top-doc"
                                        role="tab" aria-controls="border-top-setting" aria-selected="false"> Document
                                        Type</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="borderTopContent">
                                <div class="tab-pane fade show active" id="border-top-home" role="tabpanel"
                                    aria-labelledby="border-top-home-tab">
                                    <h4 class="mb-4">Add leave type</h4>

                                    <form method="post" id="leave_type_form">
                                        @csrf
                                        <input type="hidden" name="id" id="leave_id">
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-4 form-group">
                                                <!-- <label>Leave Name</label> -->
                                                <input type="text" name="leave_name" id="leave_name" required
                                                    class="form-control" placeholder="Leave Name">
                                            </div>
                                            <div class="col-md-4 form-group">

                                                <input type="number" step="0.5" name="day_per_year" id="day_per_year"
                                                    required class="form-control" placeholder="Days Per Year">
                                            </div>
                                            <div class="form-group" align="center" style="margin-top:2px;">

                                                <button type="submit"
                                                    formaction="{{ route('employees_masters.store-leave-type') }}"
                                                    id="leave-type-add-edit-btn" class="btn btn-primary">Save</button>
                                            </div>

                                        </div>
                                    </form>

                                    <div class="row" id="cancel-row">

                                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                            <div class="widget-content widget-content-area br-6">
                                                <div class="table-responsive mb-4 mt-4">
                                                    <table id="zero-config" class="table table-hover datatable" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Sr.No.</th>
                                                                <th>Leave Name</th>
                                                                <th>Days Per Year</th>

                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($leave_data as $leave_data)
                                                                <tr>
                                                                    <td>{{ $loop->index + 1 }}</td>
                                                                    <td>{{ $leave_data->leave_name }}</td>
                                                                    <td>{{ $leave_data->day_per_year }}</td>

                                                                    <td>
                                                                        <a class="edit_leave" id="{{ $leave_data->id }}"
                                                                            data-placement="top" title="Edit"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit-2 text-success">
                                                                                <path
                                                                                    d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                </path>
                                                                            </svg></a>

                                                                        <a class="delete_leave" id="{{ $leave_data->id }}"
                                                                            data-placement="top" title="Delete"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash-2 text-danger">
                                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17"></line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17"></line>
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

                                <div class="tab-pane fade" id="border-top-profile" role="tabpanel"
                                    aria-labelledby="border-top-profile-tab">
                                    <h4 class="mb-4">Add Award Type</h4>
                                    <form method="post" id="award_type_form">
                                        @csrf
                                        <input type="hidden" name="id" id="award_id">
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-4 form-group">
                                                <!-- <label>Leave Name</label> -->
                                                <input type="text" name="award_name" id="award_name" required
                                                    class="form-control" placeholder="Award Type">
                                            </div>

                                            <div class="form-group" align="center" style="margin-top:2px;">

                                                <button type="submit"
                                                    formaction="{{ route('employees_masters.store-award-type') }}"
                                                    id="award-type-add-edit-btn" class="btn btn-primary">Save</button>
                                            </div>

                                        </div>
                                    </form>

                                    <div class="row" id="cancel-row">

                                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                            <div class="widget-content widget-content-area br-6">
                                                <div class="table-responsive mb-4 mt-4">
                                                    <table id="zero-config" class="table table-hover datatable" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Sr.No.</th>
                                                                <th>Award Type</th>

                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($award_data as $award_data)
                                                                <tr>
                                                                    <td>{{ $loop->index + 1 }}</td>
                                                                    <td>{{ $award_data->award_name }}</td>

                                                                    <td>
                                                                        <a class="edit_award" id="{{ $award_data->id }}"
                                                                            data-placement="top" title="Edit"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit-2 text-success">
                                                                                <path
                                                                                    d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                </path>
                                                                            </svg></a>

                                                                        <a class="delete_award" id="{{ $award_data->id }}"
                                                                            data-placement="top" title="Delete"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash-2 text-danger">
                                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17"></line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17"></line>
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

                                <div class="tab-pane fade" id="border-top-contact" role="tabpanel"
                                    aria-labelledby="border-top-contact-tab">
                                    <div class="tab-pane fade show active" id="border-top-home" role="tabpanel"
                                        aria-labelledby="border-top-home-tab">
                                        <h4 class="mb-4">Add Warning Type</h4>

                                         <form method="post" id="warning_type_form">
                                        @csrf
                                        <input type="hidden" name="id" id="warning_id">
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-4 form-group">
                                                <!-- <label>Leave Name</label> -->
                                                <input type="text" name="warning_name" id="warning_name" required
                                                    class="form-control" placeholder="Warning Type">
                                            </div>

                                            <div class="form-group" align="center" style="margin-top:2px;">

                                                <button type="submit"
                                                    formaction="{{ route('employees_masters.store-warning-type') }}"
                                                    id="warning-type-add-edit-btn" class="btn btn-primary">Save</button>
                                            </div>

                                        </div>
                                    </form>

                                        <div class="row" id="cancel-row">

                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                <div class="widget-content widget-content-area br-6">
                                                    <div class="table-responsive mb-4 mt-4">
                                                        <table id="zero-config" class="table table-hover datatable" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Sr.No.</th>
                                                                <th>Warning Type</th>

                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($warning_data as $warning_data)
                                                                <tr>
                                                                    <td>{{ $loop->index + 1 }}</td>
                                                                    <td>{{ $warning_data->warning_name }}</td>

                                                                    <td>
                                                                        <a class="edit_warning" id="{{ $warning_data->id }}"
                                                                            data-placement="top" title="Edit"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit-2 text-success">
                                                                                <path
                                                                                    d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                </path>
                                                                            </svg></a>

                                                                        <a class="delete_warning" id="{{ $warning_data->id }}"
                                                                            data-placement="top" title="Delete"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash-2 text-danger">
                                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17"></line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17"></line>
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
                                <!--   <div class="tab-pane fade" id="border-top-setting" role="tabpanel" aria-labelledby="border-top-setting-tab">
                                                    <blockquote class="blockquote">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    </blockquote>
                                                </div> -->
                                <div class="tab-pane fade" id="border-top-termination" role="tabpanel"
                                    aria-labelledby="border-top-termination-tab">
                                    <div class="tab-pane fade show active" id="border-top-home" role="tabpanel"
                                        aria-labelledby="border-top-home-tab">
                                        <h4 class="mb-4">Add Termination Type</h4>

                                        <form method="post" id="termination_type_form">
                                        @csrf
                                        <input type="hidden" name="id" id="termination_id">
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-4 form-group">
                                                <!-- <label>Leave Name</label> -->
                                                <input type="text" name="termination_name" id="termination_name" required
                                                    class="form-control" placeholder="Termination Type">
                                            </div>

                                            <div class="form-group" align="center" style="margin-top:2px;">

                                                <button type="submit"
                                                    formaction="{{ route('employees_masters.store-termination-type') }}"
                                                    id="termination-type-add-edit-btn" class="btn btn-primary">Save</button>
                                            </div>

                                        </div>
                                    </form>

                                        <div class="row" id="cancel-row">

                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                <div class="widget-content widget-content-area br-6">
                                                    <div class="table-responsive mb-4 mt-4">
                                                        <table id="zero-config" class="table table-hover datatable" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Sr.No.</th>
                                                                <th>Termination Type</th>

                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($termination_data as $termination_data)
                                                                <tr>
                                                                    <td>{{ $loop->index + 1 }}</td>
                                                                    <td>{{ $termination_data->termination_name }}</td>

                                                                    <td>
                                                                        <a class="edit_termination" id="{{ $termination_data->id }}"
                                                                            data-placement="top" title="Edit"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit-2 text-success">
                                                                                <path
                                                                                    d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                </path>
                                                                            </svg></a>

                                                                        <a class="delete_termination" id="{{ $termination_data->id }}"
                                                                            data-placement="top" title="Delete"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash-2 text-danger">
                                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17"></line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17"></line>
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

                                <div class="tab-pane fade" id="border-top-expense" role="tabpanel"
                                    aria-labelledby="border-top-expense-tab">
                                    <div class="tab-pane fade show active" id="border-top-home" role="tabpanel"
                                        aria-labelledby="border-top-home-tab">
                                        <h4 class="mb-4">Add Expense Type</h4>

                                         <form method="post" id="expense_type_form">
                                        @csrf
                                        <input type="hidden" name="id" id="expense_id">
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-4 form-group">
                                                <!-- <label>Leave Name</label> -->
                                                <input type="text" name="expense_name" id="expense_name" required
                                                    class="form-control" placeholder="Expense Type">
                                            </div>

                                            <div class="form-group" align="center" style="margin-top:2px;">

                                                <button type="submit"
                                                    formaction="{{ route('employees_masters.store-expense-type') }}"
                                                    id="expense-type-add-edit-btn" class="btn btn-primary">Save</button>
                                            </div>

                                        </div>
                                    </form>


                                        <div class="row" id="cancel-row">

                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                <div class="widget-content widget-content-area br-6">
                                                     <div class="table-responsive mb-4 mt-4">
                                                        <table id="zero-config" class="table table-hover datatable" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Sr.No.</th>
                                                                <th>expense Type</th>

                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($expense_data as $expense_data)
                                                                <tr>
                                                                    <td>{{ $loop->index + 1 }}</td>
                                                                    <td>{{ $expense_data->expense_name }}</td>

                                                                    <td>
                                                                        <a class="edit_expense" id="{{ $expense_data->id }}"
                                                                            data-placement="top" title="Edit"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit-2 text-success">
                                                                                <path
                                                                                    d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                </path>
                                                                            </svg></a>

                                                                        <a class="delete_expense" id="{{ $expense_data->id }}"
                                                                            data-placement="top" title="Delete"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash-2 text-danger">
                                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17"></line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17"></line>
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

                                <div class="tab-pane fade" id="border-top-emp" role="tabpanel"
                                    aria-labelledby="border-top-emp-tab">
                                    <div class="tab-pane fade show active" id="border-top-home" role="tabpanel"
                                        aria-labelledby="border-top-home-tab">
                                        <h4 class="mb-4">Add Status Type</h4>

                                        <form method="post" id="employee_status_type_form">
                                        @csrf
                                        <input type="hidden" name="id" id="employee_status_id">
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-4 form-group">
                                                <!-- <label>Leave Name</label> -->
                                                <input type="text" name="employee_status_name" id="employee_status_name" required
                                                    class="form-control" placeholder="Status Type">
                                            </div>

                                            <div class="form-group" align="center" style="margin-top:2px;">

                                                <button type="submit"
                                                    formaction="{{ route('employees_masters.store-employee_status-type') }}"
                                                    id="employee_status-type-add-edit-btn" class="btn btn-primary">Save</button>
                                            </div>

                                        </div>
                                    </form>

                                        <div class="row" id="cancel-row">

                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                <div class="widget-content widget-content-area br-6">
                                                    <div class="table-responsive mb-4 mt-4">
                                                        <table id="zero-config" class="table table-hover datatable" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Sr.No.</th>
                                                                <th>Status Type</th>

                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($employee_status_data as $employee_status_data)
                                                                <tr>
                                                                    <td>{{ $loop->index + 1 }}</td>
                                                                    <td>{{ $employee_status_data->employee_status_name }}</td>

                                                                    <td>
                                                                        <a class="edit_employee_status" id="{{ $employee_status_data->id }}"
                                                                            data-placement="top" title="Edit"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit-2 text-success">
                                                                                <path
                                                                                    d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                </path>
                                                                            </svg></a>

                                                                        <a class="delete_employee_status" id="{{ $employee_status_data->id }}"
                                                                            data-placement="top" title="Delete"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash-2 text-danger">
                                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17"></line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17"></line>
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

                                <div class="tab-pane fade" id="border-top-doc" role="tabpanel"
                                    aria-labelledby="border-top-doc-tab">
                                    <div class="tab-pane fade show active" id="border-top-home" role="tabpanel"
                                        aria-labelledby="border-top-home-tab">
                                        <h4 class="mb-4">Add Document Type</h4>

                                        <form method="post" id="document_type_form">
                                        @csrf
                                        <input type="hidden" name="id" id="document_id">
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-4 form-group">
                                                <!-- <label>Leave Name</label> -->
                                                <input type="text" name="document_name" id="document_name" required
                                                    class="form-control" placeholder="Document Type">
                                            </div>

                                            <div class="form-group" align="center" style="margin-top:2px;">

                                                <button type="submit"
                                                    formaction="{{ route('employees_masters.store-document-type') }}"
                                                    id="document-type-add-edit-btn" class="btn btn-primary">Save</button>
                                            </div>

                                        </div>
                                    </form>

                                        <div class="row" id="cancel-row">

                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                <div class="widget-content widget-content-area br-6">
                                                    <div class="table-responsive mb-4 mt-4">
                                                        <table id="zero-config" class="table table-hover datatable" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Sr.No.</th>
                                                                <th>Document Type</th>

                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($document_data as $document_data)
                                                                <tr>
                                                                    <td>{{ $loop->index + 1 }}</td>
                                                                    <td>{{ $document_data->document_name }}</td>

                                                                    <td>
                                                                        <a class="edit_document" id="{{ $document_data->id }}"
                                                                            data-placement="top" title="Edit"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit-2 text-success">
                                                                                <path
                                                                                    d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                </path>
                                                                            </svg></a>

                                                                        <a class="delete_document" id="{{ $document_data->id }}"
                                                                            data-placement="top" title="Delete"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash-2 text-danger">
                                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17"></line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17"></line>
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
                            </div>



                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@stop


@section('js')
    <script>
        $(document).ready(function() {

            //Leave Type Master 
            $('#leave_type_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    leave_name: {
                        required: true,
                    },
                    day_per_year: {
                        required: true,
                    },

                },
                messages: {
                    leave_name: {
                        required: "This field is required.",
                    },
                    day_per_year: {
                        required: "This field is required.",
                    },

                },
                errorElement: 'label',
                errorPlacement: function(error, element) {
                    element.closest('.form-group').append(error);

                },
                submitHandler: function(form) {
                    // $("#load_screen").show();
                    return true;
                }
            });

            $(document).on('click', '.edit_leave', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-leave-type') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#leave_id").val(result.id);
                        $("#leave_name").val(result.leave_name);
                        $("#day_per_year").val(result.day_per_year);
                        let formaction =
                        '{{ route('employees_masters.update-leave-type') }}';
                        $("#leave-type-add-edit-btn").attr("formaction", formaction);
                        $("#leave-type-add-edit-btn").text('Update');
                    }
                })
            })

            $(document).on('click', '.delete_leave', function() {
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
                            url: "{{ route('employees_masters.delete-leave-type') }}",
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

             //Award Type Master 
             $('#award_type_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    award_name: {
                        required: true,
                    },                

                },
                messages: {
                    award_name: {
                        required: "This field is required.",
                    },                  

                },
                errorElement: 'label',
                errorPlacement: function(error, element) {
                    element.closest('.form-group').append(error);

                },
                submitHandler: function(form) {
                    // $("#load_screen").show();
                    return true;
                }
            });

            $(document).on('click', '.edit_award', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-award-type') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#award_id").val(result.id);
                        $("#award_name").val(result.award_name);
                        let formaction =
                        '{{ route('employees_masters.update-award-type') }}';
                        $("#award-type-add-edit-btn").attr("formaction", formaction);
                        $("#award-type-add-edit-btn").text('Update');
                    }
                })
            })

            $(document).on('click', '.delete_award', function() {
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
                            url: "{{ route('employees_masters.delete-award-type') }}",
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


              //warning Type Master 
              $('#warning_type_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    warning_name: {
                        required: true,
                    },           

                },
                messages: {
                    warning_name: {
                        required: "This field is required.",
                    },                  

                },
                errorElement: 'label',
                errorPlacement: function(error, element) {
                    element.closest('.form-group').append(error);

                },
                submitHandler: function(form) {
                    // $("#load_screen").show();
                    return true;
                }
            });

            $(document).on('click', '.edit_warning', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-warning-type') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#warning_id").val(result.id);
                        $("#warning_name").val(result.warning_name);
                        let formaction =
                        '{{ route('employees_masters.update-warning-type') }}';
                        $("#warning-type-add-edit-btn").attr("formaction", formaction);
                        $("#warning-type-add-edit-btn").text('Update');
                    }
                })
            })

            $(document).on('click', '.delete_warning', function() {
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
                            url: "{{ route('employees_masters.delete-warning-type') }}",
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


             //termination Type Master 
             $('#termination_type_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    termination_name: {
                        required: true,
                    },           

                },
                messages: {
                    termination_name: {
                        required: "This field is required.",
                    },                  

                },
                errorElement: 'label',
                errorPlacement: function(error, element) {
                    element.closest('.form-group').append(error);

                },
                submitHandler: function(form) {
                    // $("#load_screen").show();
                    return true;
                }
            });

            $(document).on('click', '.edit_termination', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-termination-type') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#termination_id").val(result.id);
                        $("#termination_name").val(result.termination_name);
                        let formaction =
                        '{{ route('employees_masters.update-termination-type') }}';
                        $("#termination-type-add-edit-btn").attr("formaction", formaction);
                        $("#termination-type-add-edit-btn").text('Update');
                    }
                })
            })

            $(document).on('click', '.delete_termination', function() {
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
                            url: "{{ route('employees_masters.delete-termination-type') }}",
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

              //expense Type Master 
              $('#expense_type_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    expense_name: {
                        required: true,
                    },           

                },
                messages: {
                    expense_name: {
                        required: "This field is required.",
                    },                  

                },
                errorElement: 'label',
                errorPlacement: function(error, element) {
                    element.closest('.form-group').append(error);

                },
                submitHandler: function(form) {
                    // $("#load_screen").show();
                    return true;
                }
            });

            $(document).on('click', '.edit_expense', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-expense-type') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#expense_id").val(result.id);
                        $("#expense_name").val(result.expense_name);
                        let formaction =
                        '{{ route('employees_masters.update-expense-type') }}';
                        $("#expense-type-add-edit-btn").attr("formaction", formaction);
                        $("#expense-type-add-edit-btn").text('Update');
                    }
                })
            })

            $(document).on('click', '.delete_expense', function() {
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
                            url: "{{ route('employees_masters.delete-expense-type') }}",
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

            //employee_status Type Master 
            $('#employee_status_type_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    employee_status_name: {
                        required: true,
                    },           

                },
                messages: {
                    employee_status_name: {
                        required: "This field is required.",
                    },                  

                },
                errorElement: 'label',
                errorPlacement: function(error, element) {
                    element.closest('.form-group').append(error);

                },
                submitHandler: function(form) {
                    // $("#load_screen").show();
                    return true;
                }
            });

            $(document).on('click', '.edit_employee_status', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-employee_status-type') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#employee_status_id").val(result.id);
                        $("#employee_status_name").val(result.employee_status_name);
                        let formaction =
                        '{{ route('employees_masters.update-employee_status-type') }}';
                        $("#employee_status-type-add-edit-btn").attr("formaction", formaction);
                        $("#employee_status-type-add-edit-btn").text('Update');
                    }
                })
            })

            $(document).on('click', '.delete_employee_status', function() {
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
                            url: "{{ route('employees_masters.delete-employee_status-type') }}",
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



              //document Type Master 
              $('#document_type_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    document_name: {
                        required: true,
                    },           

                },
                messages: {
                    document_name: {
                        required: "This field is required.",
                    },                  

                },
                errorElement: 'label',
                errorPlacement: function(error, element) {
                    element.closest('.form-group').append(error);

                },
                submitHandler: function(form) {
                    // $("#load_screen").show();
                    return true;
                }
            });

            $(document).on('click', '.edit_document', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-document-type') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#document_id").val(result.id);
                        $("#document_name").val(result.document_name);
                        let formaction =
                        '{{ route('employees_masters.update-document-type') }}';
                        $("#document-type-add-edit-btn").attr("formaction", formaction);
                        $("#document-type-add-edit-btn").text('Update');
                    }
                })
            })

            $(document).on('click', '.delete_document', function() {
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
                            url: "{{ route('employees_masters.delete-document-type') }}",
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



        })
    </script>
@stop
