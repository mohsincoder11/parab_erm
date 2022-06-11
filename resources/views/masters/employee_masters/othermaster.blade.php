@extends('layout/layout')
@section('content')
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

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
                                        <a class="nav-link active" id="justify-pills-home-tab" data-toggle="pill" href="#justify-pills-home" role="tab" aria-controls="justify-pills-home" aria-selected="true">Arrangement Method</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="justify-pills-profile-tab" data-toggle="pill" href="#justify-pills-profile" role="tab" aria-controls="justify-pills-profile" aria-selected="false">Payment Type</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="justify-pills-contact-tab" data-toggle="pill" href="#justify-pills-contact" role="tab" aria-controls="justify-pills-contact" aria-selected="false">Qualification</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="justify-pills-mob-tab" data-toggle="pill" href="#justify-pills-mob" role="tab" aria-controls="justify-pills-contact" aria-selected="false">Job Category</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="justify-pills-tabContent">
                                    <div class="tab-pane fade show active" id="justify-pills-home" role="tabpanel" aria-labelledby="justify-pills-home-tab">
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-12 form-group">
                                                <h5 class="mb-4">Add Arrangement Method</h5>
                                            </div>

                                            <div class="col-md-4 form-group">

                                                <input type="text" name="company_name" id="company_name" required class="form-control" placeholder="Add Arrangement Method">
                                            </div>
                                            <div class="form-group" align="center" style="margin-top:2px;">

                                                <input type="submit" name="action_button" class="btn btn-primary" value=Save />
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
                                                                    <th>Arrangement</th>

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
                                    <div class="tab-pane fade" id="justify-pills-profile" role="tabpanel" aria-labelledby="justify-pills-profile-tab">
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-12 form-group">
                                                <h5 class="mb-4">Add Payment Method</h5>
                                            </div>

                                            <div class="col-md-3 form-group">

                                                <input type="text" name="company_name" id="company_name" required class="form-control" placeholder="Payment Method">
                                            </div>
                                            <div class="col-md-3 form-group">

                                                <input type="text" name="company_name" id="company_name" required class="form-control" placeholder="Payment percentage">
                                            </div>
                                            <div class="col-md-3 form-group">

                                                <input type="text" name="company_name" id="company_name" required class="form-control" placeholder="Account Number">
                                            </div>
                                            <div class="form-group" align="center" style="margin-top:2px;">

                                                <input type="submit" name="action_button" class="btn btn-primary" value=Save />
                                            </div>


                                        </div>
                                        <div class="row" id="cancel-row">

                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                <div class="widget-content widget-content-area br-6">
                                                    <div class="table-responsive mb-4 mt-4">
                                                        <table class="table table-hover" id="zero-config1" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Payment Method</th>
                                                                    <th>Payment percentage</th>
                                                                    <th>Account Number</th>
                                                                    <th>Action</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>

                                                                    <td> <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit" data-target="#editmodel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>

                                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>

                                                                    <td> <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit" data-target="#editmodel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>

                                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>

                                                                    <td> <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit" data-target="#editmodel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>

                                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                                                                </tr>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="justify-pills-contact" role="tabpanel" aria-labelledby="justify-pills-contact-tab">
                                        <div class="col-lg-12 col-12 layout-spacing">
                                            <div class="statbox widget box box-shadow">
                                                <div class="widget-content widget-content-area vertical-line-pill">

                                                    <div class="row mb-4 mt-3">
                                                        <div class="col-sm-3 col-12">
                                                            <div class="nav flex-column nav-pills mb-sm-0 mb-3 text-center mx-auto" id="v-line-pills-tab" role="tablist" aria-orientation="vertical">
                                                                <a class="nav-link active mb-3" id="v-line-pills-home-tab" data-toggle="pill" href="#v-line-pills-home" role="tab" aria-controls="v-line-pills-home" aria-selected="true">Add Education Level</a>
                                                                <a class="nav-link mb-3  text-center" id="v-line-pills-profile-tab" data-toggle="pill" href="#v-line-pills-profile" role="tab" aria-controls="v-line-pills-profile" aria-selected="false">Add Language Skills</a>
                                                                <a class="nav-link mb-3  text-center" id="v-line-pills-messages-tab" data-toggle="pill" href="#v-line-pills-messages" role="tab" aria-controls="v-line-pills-messages" aria-selected="false">Add Another Skills</a>

                                                            </div>
                                                        </div>

                                                        <div class="col-sm-9 col-12">
                                                            <div class="tab-content" id="v-line-pills-tabContent">
                                                                <div class="tab-pane fade show active" id="v-line-pills-home" role="tabpanel" aria-labelledby="v-line-pills-home-tab">
                                                                    <h5 class="mb-4">Add Education Level</h5>
                                                                    <div class="row" style="padding: 10px;">

                                                                        <div class="col-md-4 form-group">

                                                                            <input type="text" name="company_name" id="company_name" required class="form-control" placeholder="Education Level">
                                                                        </div>
                                                                        <div class="form-group" align="center" style="margin-top:2px;">

                                                                            <input type="submit" name="action_button" class="btn btn-primary" value=Save />
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
                                                                <div class="tab-pane fade" id="v-line-pills-profile" role="tabpanel" aria-labelledby="v-line-pills-profile-tab">
                                                                    <div class="row" style="padding: 10px;">
                                                                        <div class="col-md-12 form-group">
                                                                            <h5 class="mb-4">Add Language Skills</h5>
                                                                        </div>

                                                                        <div class="col-md-5 form-group">

                                                                            <input type="text" name="company_name" id="company_name" required class="form-control" placeholder="Language Skills">
                                                                        </div>

                                                                        <div class="form-group" align="center" style="margin-top:2px;">

                                                                            <input type="submit" name="action_button" class="btn btn-primary" value=Save />
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
                                                                                                <th>Language</th>

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
                                                                <div class="tab-pane fade" id="v-line-pills-messages" role="tabpanel" aria-labelledby="v-line-pills-messages-tab">
                                                                    <div class="row" style="padding: 10px;">
                                                                        <div class="col-md-12 form-group">
                                                                            <h5 class="mb-4">Add Skills</h5>
                                                                        </div>

                                                                        <div class="col-md-5 form-group">

                                                                            <input type="text" name="company_name" id="company_name" required class="form-control" placeholder="Skills">
                                                                        </div>

                                                                        <div class="form-group" align="center" style="margin-top:2px;">

                                                                            <input type="submit" name="action_button" class="btn btn-primary" value=Save />
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
                                                                                                <th>Skills</th>

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
                                    <div class="tab-pane fade" id="justify-pills-mob" role="tabpanel" aria-labelledby="justify-pills-mob-tab">
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-12 form-group">
                                                <h5 class="mb-4">Add Job Category</h5>
                                            </div>

                                            <div class="col-md-3 form-group">

                                                <input type="text" name="company_name" id="company_name" required class="form-control" placeholder="Job Category">
                                            </div>

                                            <div class="form-group" align="center" style="margin-top:2px;">

                                                <input type="submit" name="action_button" class="btn btn-primary" value=Save />
                                            </div>
                                        </div>
                                        <div class="row" id="cancel-row">

                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                <div class="widget-content widget-content-area br-6">
                                                    <div class="table-responsive mb-4 mt-4">
                                                        <table class="table table-hover" id="zero-config2" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No.</th>

                                                                    <th>Job Category</th>
                                                                    <th>Action</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Senior Javascript Developer</td>

                                                                    <td> <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit" data-target="#editmodel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>

                                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Senior Javascript Developer</td>

                                                                    <td> <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit" data-target="#editmodel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>

                                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                                                                </tr>


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