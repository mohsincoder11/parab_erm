@extends('layout.layout')
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing" style="padding-top:20px !important;">
            @include('layout.alerts')

            <div class="row layout-top-spacing">


                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <!-- <div class="widget-header">
                                                        <div class="row">
                                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                <h4>Justify Pills</h4>
                                                            </div>
                                                        </div>
                                                    </div> -->
                        <div class="widget-content widget-content-area justify-pill">

                            <ul class="nav nav-pills mb-3 mt-3 nav-fill" id="justify-pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="justify-pills-home-tab" data-toggle="pill"
                                        href="#justify-pills-home" role="tab" aria-controls="justify-pills-home"
                                        aria-selected="true">Arrangement Method</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="justify-pills-profile-tab" data-toggle="pill"
                                        href="#justify-pills-profile" role="tab" aria-controls="justify-pills-profile"
                                        aria-selected="false">Payment Type</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="justify-pills-contact-tab" data-toggle="pill"
                                        href="#justify-pills-contact" role="tab" aria-controls="justify-pills-contact"
                                        aria-selected="false">Qualification</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="justify-pills-mob-tab" data-toggle="pill"
                                        href="#justify-pills-mob" role="tab" aria-controls="justify-pills-contact"
                                        aria-selected="false">Job Category</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="justify-pills-tabContent">
                                <div class="tab-pane fade show active" id="justify-pills-home" role="tabpanel"
                                    aria-labelledby="justify-pills-home-tab">
                                    <div class="row" style="padding: 10px;">
                                        <div class="col-md-12 form-group">
                                            <h5 class="mb-4">Add Arrangement Method</h5>
                                        </div>

                                        <form enctype="multipart/form-data" id="arrangement_method_form" method="post">
                                            @csrf
                                            <input type="hidden" name="id" id="arrangement_method_id">
                                            <div class="row" style="padding: 10px;">

                                                <div class="col-md-8 form-group">

                                                    <input type="text" name="arrangement_method" id="arrangement_method"
                                                        required class="form-control" placeholder="Add Arrangement Method">
                                                </div>
                                                <div class="form-group" align="center" style="margin-top:2px;">

                                                    <button
                                                        formaction="{{ route('employees_masters.store-arrangement_method-type') }}"
                                                        type="submit" id="arrangement_method-type-add-edit-btn"
                                                        class="btn btn-primary">Add</button>

                                                </div>
                                            </div>
                                        </form>


                                    </div>
                                    <div class="row" id="cancel-row">

                                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                            <div class="widget-content widget-content-area br-6">
                                                <div class="table-responsive mb-4 mt-4">
                                                    <table id="zero-config" class="table table-hover datatable"
                                                        style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Sr.No.</th>
                                                                <th>Arrangement</th>

                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($arrangement_method as $arrangement_methods)
                                                                <tr>
                                                                    <td>{{ $loop->index + 1 }}</td>
                                                                    <td>{{ $arrangement_methods->arrangement_method }}
                                                                    </td>

                                                                    <td> <a id="{{ $arrangement_methods->id }}"
                                                                            class="edit_arrangement_method"
                                                                            href="javascript:void(0);" data-placement="top"
                                                                            title="Edit"><svg
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

                                                                        <a id="{{ $arrangement_methods->id }}"
                                                                            class="delete_arrangement_method"
                                                                            href="javascript:void(0);"
                                                                            data-toggle="tooltip" title="Delete"><svg
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

                                <div class="tab-pane fade" id="justify-pills-profile" role="tabpanel"
                                    aria-labelledby="justify-pills-profile-tab">

                                    <form enctype="multipart/form-data" id="payment_type_form" method="post">
                                        @csrf
                                        <input type="hidden" name="id" id="payment_type_id">

                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-12 form-group">
                                                <h5 class="mb-4">Add Payment Method</h5>
                                            </div>

                                            <div class="col-md-3 form-group">

                                                <input type="text" name="payment_method" id="payment_method" required
                                                    class="form-control" placeholder="Payment Method">
                                            </div>
                                            <div class="col-md-3 form-group">

                                                <input type="text" name="payment_percenatage" id="payment_percenatage"
                                                    required class="form-control" placeholder="Payment percentage">
                                            </div>
                                            <div class="col-md-3 form-group">

                                                <input type="text" name="account_no" id="account_no" required
                                                    class="form-control" placeholder="Account Number">
                                            </div>
                                            <div class="form-group" align="center" style="margin-top:2px;">

                                                <button formaction="{{ route('employees_masters.store-payment-type') }}"
                                                    type="submit" id="payment-type-add-edit-btn"
                                                    class="btn btn-primary">Add</button>
                                            </div>


                                        </div>
                                    </form>

                                    <div class="row" id="cancel-row">

                                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                            <div class="widget-content widget-content-area br-6">
                                                <div class="table-responsive mb-4 mt-4">
                                                    <table class="table table-hover datatable" id="zero-config1"
                                                        style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Payment Method</th>
                                                                <th>Payment percentage</th>
                                                                <th>Account Number</th>
                                                                <th>Action</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($payment_type as $payment_types)
                                                                <tr>
                                                                    <td>{{ $payment_types->payment_method }}</td>
                                                                    <td>{{ $payment_types->payment_percenatage }}</td>
                                                                    <td>{{ $payment_types->account_no }}</td>

                                                                    <td> <a id="{{ $payment_types->id }}"
                                                                            class="edit_payment_type"
                                                                            href="javascript:void(0);"
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

                                                                        <a id="{{ $payment_types->id }}"
                                                                            class="delete_payment_type"
                                                                            href="javascript:void(0);"
                                                                            data-toggle="tooltip" data-placement="top"
                                                                            title="Delete"><svg
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

                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                                <div class="tab-pane fade" id="justify-pills-contact" role="tabpanel"
                                    aria-labelledby="justify-pills-contact-tab">
                                    <div class="col-lg-12 col-12 layout-spacing">
                                        <div class="statbox widget box box-shadow">
                                            <div class="widget-content widget-content-area vertical-line-pill">

                                                <div class="row mb-4 mt-3">
                                                    <div class="col-sm-3 col-12">
                                                        <div class="nav flex-column nav-pills mb-sm-0 mb-3 text-center mx-auto"
                                                            id="v-line-pills-tab" role="tablist"
                                                            aria-orientation="vertical">
                                                            <a class="nav-link active mb-3" id="v-line-pills-home-tab"
                                                                data-toggle="pill" href="#v-line-pills-home"
                                                                role="tab" aria-controls="v-line-pills-home"
                                                                aria-selected="true">Add Education Level</a>

                                                            <a class="nav-link mb-3  text-center"
                                                                id="v-line-pills-profile-tab" data-toggle="pill"
                                                                href="#v-line-pills-profile" role="tab"
                                                                aria-controls="v-line-pills-profile"
                                                                aria-selected="false">Add Language Skills</a>

                                                            <a class="nav-link mb-3  text-center"
                                                                id="v-line-pills-messages-tab" data-toggle="pill"
                                                                href="#v-line-pills-messages" role="tab"
                                                                aria-controls="v-line-pills-messages"
                                                                aria-selected="false">Add Another Skills</a>

                                                        </div>
                                                    </div>

                                                    <div class="col-sm-9 col-12">
                                                        <div class="tab-content" id="v-line-pills-tabContent">
                                                            <div class="tab-pane fade show active" id="v-line-pills-home"
                                                                role="tabpanel" aria-labelledby="v-line-pills-home-tab">
                                                                <h5 class="mb-4">Add Education Level</h5>
                                                                <form enctype="multipart/form-data"
                                                                    id="education_level_form" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="id"
                                                                        id="education_level_id">
                                                                    <div class="row" style="padding: 10px;">

                                                                        <div class="col-md-4 form-group">

                                                                            <input type="text" name="education_level"
                                                                                id="education_level" required
                                                                                class="form-control"
                                                                                placeholder="Education Level">
                                                                        </div>
                                                                        <div class="form-group" align="center"
                                                                            style="margin-top:2px;">

                                                                            <button
                                                                                formaction="{{ route('employees_masters.store-education-level') }}"
                                                                                type="submit"
                                                                                id="education_level-add-edit-btn"
                                                                                class="btn btn-primary">Add</button>
                                                                        </div>
                                                                    </div>
                                                                </form>

                                                          
                                                            <div class="row" id="cancel-row">

                                                                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                                    <div class="widget-content widget-content-area br-6">
                                                                        <div class="table-responsive mb-4 mt-4">
                                                                            <table id="zero-config3"
                                                                                class="table table-hover datatable"
                                                                                style="width:100%">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Sr.No.</th>
                                                                                        <th>Education Level</th>

                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @foreach ($education_level as $education_levels)
                                                                                        <tr>
                                                                                            <td>{{ $loop->index + 1 }}</td>
                                                                                            <td>{{ $education_levels->education_level }}
                                                                                            </td>

                                                                                            <td> <a id="{{ $education_levels->id }}"
                                                                                                    class="edit_education_level"
                                                                                                    href="javascript:void(0);"
                                                                                                    data-toggle="modal"
                                                                                                    data-placement="top"
                                                                                                    title="Edit"><svg
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        stroke="currentColor"
                                                                                                        stroke-width="2"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        class="feather feather-edit-2 text-success">
                                                                                                        <path
                                                                                                            d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                                        </path>
                                                                                                    </svg></a>

                                                                                                <a id="{{ $education_levels->id }}"
                                                                                                    class="delete_education_level"
                                                                                                    href="javascript:void(0);"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="Delete"><svg
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        stroke="currentColor"
                                                                                                        stroke-width="2"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        class="feather feather-trash-2 text-danger">
                                                                                                        <polyline
                                                                                                            points="3 6 5 6 21 6">
                                                                                                        </polyline>
                                                                                                        <path
                                                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                                        </path>
                                                                                                        <line
                                                                                                            x1="10"
                                                                                                            y1="11"
                                                                                                            x2="10"
                                                                                                            y2="17">
                                                                                                        </line>
                                                                                                        <line
                                                                                                            x1="14"
                                                                                                            y1="11"
                                                                                                            x2="14"
                                                                                                            y2="17">
                                                                                                        </line>
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



                                                        <div class="tab-pane fade" id="v-line-pills-profile"
                                                            role="tabpanel" aria-labelledby="v-line-pills-profile-tab">
                                                            <div class="row" style="padding: 10px;">
                                                                <div class="col-md-12 form-group">
                                                                    <h5 class="mb-4">Add Language Skills</h5>
                                                                </div>

                                                                  <form enctype="multipart/form-data"
                                                                    id="language_skill_form" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="id"
                                                                        id="language_skill_id">
                                                                    <div class="row" style="padding: 10px;">

                                                                        <div class="col-md-8 form-group">

                                                                            <input type="text" name="language_skill"
                                                                                id="language_skill" required
                                                                                class="form-control"
                                                                                placeholder="Language Skill">
                                                                        </div>
                                                                        <div class="form-group" align="center"
                                                                            style="margin-top:2px;">

                                                                            <button
                                                                                formaction="{{ route('employees_masters.store-language-skill') }}"
                                                                                type="submit"
                                                                                id="language_skill-add-edit-btn"
                                                                                class="btn btn-primary">Add</button>
                                                                        </div>
                                                                    </div>
                                                                </form>


                                                            </div>
                                                            <div class="row" id="cancel-row">

                                                                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                                    <div class="widget-content widget-content-area br-6">
                                                                        <div class="table-responsive mb-4 mt-4">
                                                                            <table id="zero-config3"
                                                                                class="table table-hover datatable"
                                                                                style="width:100%">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Sr.No.</th>
                                                                                        <th>Language Skill</th>

                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @foreach ($language_skill as $language_skills)
                                                                                        <tr>
                                                                                            <td>{{ $loop->index + 1 }}</td>
                                                                                            <td>{{ $language_skills->language_skill }}
                                                                                            </td>

                                                                                            <td> <a id="{{ $language_skills->id }}"
                                                                                                    class="edit_language_skill"
                                                                                                    href="javascript:void(0);"
                                                                                                    data-toggle="modal"
                                                                                                    data-placement="top"
                                                                                                    title="Edit"><svg
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        stroke="currentColor"
                                                                                                        stroke-width="2"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        class="feather feather-edit-2 text-success">
                                                                                                        <path
                                                                                                            d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                                        </path>
                                                                                                    </svg></a>

                                                                                                <a id="{{ $language_skills->id }}"
                                                                                                    class="delete_language_skill"
                                                                                                    href="javascript:void(0);"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="Delete"><svg
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        stroke="currentColor"
                                                                                                        stroke-width="2"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        class="feather feather-trash-2 text-danger">
                                                                                                        <polyline
                                                                                                            points="3 6 5 6 21 6">
                                                                                                        </polyline>
                                                                                                        <path
                                                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                                        </path>
                                                                                                        <line
                                                                                                            x1="10"
                                                                                                            y1="11"
                                                                                                            x2="10"
                                                                                                            y2="17">
                                                                                                        </line>
                                                                                                        <line
                                                                                                            x1="14"
                                                                                                            y1="11"
                                                                                                            x2="14"
                                                                                                            y2="17">
                                                                                                        </line>
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
                                                        <div class="tab-pane fade" id="v-line-pills-messages"
                                                            role="tabpanel" aria-labelledby="v-line-pills-messages-tab">
                                                            <div class="row" style="padding: 10px;">
                                                                <div class="col-md-12 form-group">
                                                                    <h5 class="mb-4">Add Skills</h5>
                                                                </div>

                                                                <form enctype="multipart/form-data"
                                                                id="skills_form" method="post">
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    id="skills_id">
                                                                <div class="row" style="padding: 10px;">

                                                                    <div class="col-md-8 form-group">

                                                                        <input type="text" name="skills"
                                                                            id="skills" required
                                                                            class="form-control"
                                                                            placeholder="Skill">
                                                                    </div>
                                                                    <div class="form-group" align="center"
                                                                        style="margin-top:2px;">

                                                                        <button
                                                                            formaction="{{ route('employees_masters.store-skills') }}"
                                                                            type="submit"
                                                                            id="skills-add-edit-btn"
                                                                            class="btn btn-primary">Add</button>
                                                                    </div>
                                                                </div>
                                                            </form>


                                                            </div>
                                                            <div class="row" id="cancel-row">

                                                                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                                    <div class="widget-content widget-content-area br-6">
                                                                        <div class="table-responsive mb-4 mt-4">
                                                                            <table id="zero-config3"
                                                                            class="table table-hover datatable"
                                                                            style="width:100%">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Sr.No.</th>
                                                                                    <th>Skill</th>

                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($skill as $skills)
                                                                                    <tr>
                                                                                        <td>{{ $loop->index + 1 }}</td>
                                                                                        <td>{{ $skills->skills }}
                                                                                        </td>

                                                                                        <td> <a id="{{ $skills->id }}"
                                                                                                class="edit_skills"
                                                                                                href="javascript:void(0);"
                                                                                                data-toggle="modal"
                                                                                                data-placement="top"
                                                                                                title="Edit"><svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="24"
                                                                                                    height="24"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    fill="none"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="feather feather-edit-2 text-success">
                                                                                                    <path
                                                                                                        d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                                    </path>
                                                                                                </svg></a>

                                                                                            <a id="{{ $skills->id }}"
                                                                                                class="delete_skills"
                                                                                                href="javascript:void(0);"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                title="Delete"><svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="24"
                                                                                                    height="24"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    fill="none"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="feather feather-trash-2 text-danger">
                                                                                                    <polyline
                                                                                                        points="3 6 5 6 21 6">
                                                                                                    </polyline>
                                                                                                    <path
                                                                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                                    </path>
                                                                                                    <line
                                                                                                        x1="10"
                                                                                                        y1="11"
                                                                                                        x2="10"
                                                                                                        y2="17">
                                                                                                    </line>
                                                                                                    <line
                                                                                                        x1="14"
                                                                                                        y1="11"
                                                                                                        x2="14"
                                                                                                        y2="17">
                                                                                                    </line>
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
                            <div class="tab-pane fade" id="justify-pills-mob" role="tabpanel"
                                aria-labelledby="justify-pills-mob-tab">
                                <div class="row" style="padding: 10px;">
                                    <div class="col-md-12 form-group">
                                        <h5 class="mb-4">Add Job Category</h5>
                                    </div>

                                    <form enctype="multipart/form-data" id="job_category_form" method="post">
                                        @csrf
                                        <input type="hidden" name="id" id="job_category_id">

                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-8 form-group">

                                                <input type="text" name="job_category" id="job_category" required
                                                    class="form-control" placeholder="Job Category">
                                            </div>

                                            <div class="form-group" align="center" style="margin-top:2px;">

                                                <button formaction="{{ route('employees_masters.store-job-category') }}"
                                                    type="submit" id="job_category-add-edit-btn"
                                                    class="btn btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row" id="cancel-row">

                                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                        <div class="widget-content widget-content-area br-6">
                                            <div class="table-responsive mb-4 mt-4">
                                                <table class="table table-hover datatable" id="zero-config2"
                                                    style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr.No.</th>

                                                            <th>Job Category</th>
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($job_category as $job_categorys)
                                                            <tr>
                                                                <td>{{ $loop->index + 1 }}</td>
                                                                <td>{{ $job_categorys->job_category }}</td>

                                                                <td> <a id="{{ $job_categorys->id }}"
                                                                        class="edit_job_category"
                                                                        href="javascript:void(0);" data-placement="top"
                                                                        title="Edit"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="feather feather-edit-2 text-success">
                                                                            <path
                                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                            </path>
                                                                        </svg></a>

                                                                    <a id="{{ $job_categorys->id }}"
                                                                        class="delete_job_category"
                                                                        href="javascript:void(0);" data-toggle="tooltip"
                                                                        data-placement="top" title="Delete"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
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
@stop


@section('js')
    <script>
        $(document).ready(function() {

            //Leave Type Master 
            $('#arrangement_method_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    arrangement_method: {
                        required: true,
                    },

                },
                messages: {
                    arrangement_method: {
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

            $(document).on('click', '.edit_arrangement_method', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-arrangement_method-type') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#arrangement_method_id").val(result.id);
                        $("#arrangement_method").val(result.arrangement_method);
                        let formaction =
                            '{{ route('employees_masters.update-arrangement_method-type') }}';
                        $("#arrangement_method-type-add-edit-btn").attr("formaction",
                            formaction);
                        $("#arrangement_method-type-add-edit-btn").text('Update');
                    }
                })
            })

            $(document).on('click', '.delete_arrangement_method', function() {
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
                            url: "{{ route('employees_masters.delete-arrangement_method-type') }}",
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


            //Payment Type Master 
            $('#payment_type_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    payment_method: {
                        required: true,
                    },
                    payment_percenatage: {
                        required: true,
                    },
                    account_no: {
                        required: true,
                    },

                },
                messages: {
                    payment_method: {
                        required: "This field is required.",
                    },
                    payment_percenatage: {
                        required: "This field is required.",
                    },
                    account_no: {
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

            $(document).on('click', '.edit_payment_type', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-payment-type') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#payment_type_id").val(result.id);
                        $("#payment_method").val(result.payment_method);
                        $("#payment_percenatage").val(result.payment_percenatage);
                        $("#account_no").val(result.account_no);
                        let formaction =
                            '{{ route('employees_masters.update-payment-type') }}';
                        $("#payment-type-add-edit-btn").attr("formaction",
                            formaction);
                        $("#payment-type-add-edit-btn").text('Update');
                    }
                })
            })

            $(document).on('click', '.delete_payment_type', function() {
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
                            url: "{{ route('employees_masters.delete-payment-type') }}",
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



            //Payment Type Master 
            $('#job_category_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    job_Category: {
                        required: true,
                    },

                },
                messages: {
                    job_Category: {
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

            $(document).on('click', '.edit_job_category', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-job-category') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#job_category_id").val(result.id);
                        $("#job_category").val(result.job_category);
                        let formaction =
                            '{{ route('employees_masters.update-job-category') }}';
                        $("#job_category-add-edit-btn").attr("formaction",
                            formaction);
                        $("#job_category-add-edit-btn").text('Update');
                    }
                })
            })

            $(document).on('click', '.delete_job_category', function() {
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
                            url: "{{ route('employees_masters.delete-job-category') }}",
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

            //Education level Master 
            $('#education_level_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    education_level: {
                        required: true,
                    },

                },
                messages: {
                    education_level: {
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

            $(document).on('click', '.edit_education_level', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-education-level') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#education_level_id").val(result.id);
                        $("#education_level").val(result.education_level);
                        let formaction =
                            '{{ route('employees_masters.update-education-level') }}';
                        $("#education_level-add-edit-btn").attr("formaction",
                            formaction);
                        $("#education_level-add-edit-btn").text('Update');
                    }
                })
            })

            $(document).on('click', '.delete_education_level', function() {
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
                            url: "{{ route('employees_masters.delete-education-level') }}",
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


              //language skill 
              $('#language_skill_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    language_skill: {
                        required: true,
                    },

                },
                messages: {
                    language_skill: {
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

            $(document).on('click', '.edit_language_skill', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-language-skill') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#language_skill_id").val(result.id);
                        $("#language_skill").val(result.language_skill);
                        let formaction =
                            '{{ route('employees_masters.update-language-skill') }}';
                        $("#language_skill-add-edit-btn").attr("formaction",
                            formaction);
                        $("#language_skill-add-edit-btn").text('Update');
                    }
                })
            })

            $(document).on('click', '.delete_language_skill', function() {
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
                            url: "{{ route('employees_masters.delete-language-skill') }}",
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


              //language skill 
              $('#skills_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    skills: {
                        required: true,
                    },

                },
                messages: {
                    skills: {
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

            $(document).on('click', '.edit_skills', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-skills') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#skills_id").val(result.id);
                        $("#skills").val(result.skills);
                        let formaction =
                            '{{ route('employees_masters.update-skills') }}';
                        $("#skills-add-edit-btn").attr("formaction",
                            formaction);
                        $("#skills-add-edit-btn").text('Update');
                    }
                })
            })

            $(document).on('click', '.delete_skills', function() {
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
                            url: "{{ route('employees_masters.delete-skills') }}",
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
