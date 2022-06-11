@extends('layout/layout')
@section('content')
<div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    <div class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area justify-pill">
                                <ul class="nav nav-pills mb-3 mt-3 nav-fill" id="justify-pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="justify-pills-home-tab" data-toggle="pill" href="#justify-pills-home" role="tab" aria-controls="justify-pills-home" aria-selected="true">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="justify-pills-profile-tab" data-toggle="pill" href="#justify-pills-profile" role="tab" aria-controls="justify-pills-profile" aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="justify-pills-contact-tab" data-toggle="pill" href="#justify-pills-contact" role="tab" aria-controls="justify-pills-contact" aria-selected="false">Set Salary</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="justify-pills-leave-tab" data-toggle="pill" href="#justify-pills-leave" role="tab" aria-controls="justify-pills-leave" aria-selected="false">Leave</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="justify-pills-hr-tab" data-toggle="pill" href="#justify-pills-hr" role="tab" aria-controls="justify-pills-hr" aria-selected="false">Core HR</a>
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a class="nav-link" id="justify-pills-payslip-tab" data-toggle="pill" href="#justify-pills-payslip" role="tab" aria-controls="justify-pills-payslip" aria-selected="false">Payslip</a>
                                    </li>
                                </ul>

                                <!-- Sub content  -->
                                <div class="tab-content" id="justify-pills-tabContent">
                                @include('employee.view_employee.general.general_side_menu')
                                @include('employee.view_employee.profile.profile')
                                @include('employee.view_employee.set_salary.salary_sidebar')
                                @include('employee.view_employee.leave.leave')
                                @include('employee.view_employee.core_hr.core_hr_sidebar')
                                @include('employee.view_employee.project_task.project_task_sidebar')
                                @include('employee.view_employee.payslip.payslip')
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
@endsection        
@section('js')
<script type="text/javascript" src="{{asset('public/employee_view/basic.js')}}"></script>
<script>
@include('employee.view_employee.general.js.basic_js')
@include('employee.view_employee.general.js.immigration_js')

@include('employee.view_employee.profile.js.profile_js')
</script>

@endsection