@extends('layout.layout')
@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">


            <div style="margin-top: 3%;">
                @include('layout.alerts')

                <div>
                    <div>
                        <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal"
                            data-target=".add-edit_modal"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>Add Official Details</button>


                        {{-- <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal"
                                data-target="#exampleModalRemoveAnimation"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                        clip-rule="evenodd" />
                                </svg>
                                Bulk Delete
                            </button> --}}

                    </div>
                    <!-- Model Start -->
                    <div class="modal fade add-edit_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Add Official Details</h5>
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
                                <form method="post" id="official_detail_form">
                                    @csrf
                                    <div class="row" style="padding: 10px;">
                                        <input type="hidden" id="id" name="id">

                                        <div class="col-md-6 form-group">
                                            <label>Employee Name<span class="required">*</span></label>
                                            <input name="employee_name" id="employee_name" class="form-control "
                                                placeholder="Enter employee name" autocomplete="off">
                                            <input type="hidden" name="employee_id" id="employee_id">

                                        </div>
                                        @php
                                            $company = get_company_name_and_id();
                                        @endphp
                                        <div class="col-md-6 form-group">
                                            <label>Company <span class="required">*</span></label>
                                            <select name="company_id" id="company_id" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Company Type...'>
                                                <option value="" disabled selected>Company Type</option>
                                                @foreach ($company as $c)
                                                    <option value="{{ $c->id }}">{{ $c->company_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Employee code<span class="required">*</span></label>
                                            <input type="text" name="emp_code" id="emp_code" required
                                                class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Employee Status <span class="required">*</span></label>
                                            <select name="emp_status_id" id="emp_status_id"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" selected>Employee Status</option>
                                                @foreach ($employee_status as $emp_status)
                                                    <option value="{{ $emp_status->id }}">
                                                        {{ $emp_status->employee_status_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>



                                        <div class="col-md-6 form-group">
                                            <label>Date of Joining<span class="required">*</span></label>
                                            <input type="date" name="date_joining" id="date_joining"
                                                class="form-control date" value="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Date of Confirm</label>
                                            <input type="date" name="date_conform" id="date_conform"
                                                class="form-control date" value="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Date of Leaving</label>
                                            <input type="date" name="date_leaving" id="date_leaving"
                                                class="form-control date" value="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Department<span class="required">*</span></label>
                                            <select name="department_id" id="department_id"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Department Type...'>

                                                <option value="" selected>Department</option>
                                                @foreach ($department as $dept)
                                                    <option value="{{ $dept->id }}">
                                                        {{ $dept->department }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Designation<span class="required">*</span></label>
                                            <select name="designation_id" id="designation_id"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Designation Type...'>

                                                <option value="" selected>Designation</option>
                                                @foreach ($designation as $designations)
                                                    <option value="{{ $designations->id }}">
                                                        {{ $designations->designation }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Grade</label>
                                            <select name="grade_id" id="grade_id" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Grade Type...'>

                                                <option value="" selected>Grade</option>
                                                @foreach ($grade as $grades)
                                                    <option value="{{ $grades->id }}">
                                                        {{ $grades->grade_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Project</label>
                                            <select name="project_id" id="project_id" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Project Type...'>
                                                <option value="" disabled selected>Select Project</option>
                                                @foreach ($project as $projects)
                                                    <option value="{{ $projects->id }}">{{ $projects->project }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Location<span class="required">*</span></label>
                                            <select name="location_id" id="location_id" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Location Type...'>
                                                <option value="" disabled selected>Select Location</option>
                                                @foreach ($location as $locations)
                                                    <option value="{{ $locations->id }}">
                                                        {{ $locations->location_name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Reporting Manager</label>
                                            <input type="text" name="reporting_manager" id="reporting_manager"
                                                class="form-control " value="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Official Mobile No.</label>
                                            <input type="number" name="official_mob_no" id="official_mob_no"
                                                class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Official Mail Id</label>
                                            <input type="email" name="official_mail_id" id="official_mail_id"
                                                class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Working Hrs</label>
                                            <input type="number" step="0.5" name="working_hr" id="working_hr"
                                                class="form-control" placeholder="">
                                        </div>


                                        <div class="col-md-12 form-group text-center" >

                                            <button formaction="{{ route('employees_masters.store-official-details') }}"
                                                type="submit" id="add-edit-btn" name="action_button"
                                                class="btn btn-warning">Add</button>
                                        </div>

                                    </div>
                                </form>

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
                                            <p class="modal-text">Parberp.com says<br>
                                                Please select atleast one Checkbox
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

                <!--view Model Start -->
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myExtraLargeModalLabel">Promotion Info.</h5>
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

                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                    Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- model end -->
                <div class="row" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table class="table table-hover non-hover datatable_server" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Employee Name </th>
                                            <th>Employee Status </th>
                                            <th>Date of Joining </th>
                                            <th>Date of Conform</th>
                                            <th>Date of Leaving</th>

                                            <th>Department</th>
                                            <th>Designation</th>
                                            <th>Grade</th>
                                            <th>Project</th>
                                            <th>Location</th>
                                            <th>Reporting Manager</th>

                                            <th>Working Hrs</th>
                                            <th>Official Mail Id</th>
                                            <th>Official Mobile</th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>




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

    <script>
        $(document).ready(function() {



            $(document).on('change', '#company_id', function() {
                $.ajax({
                    url: "{{ route('get_location_by_company') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        company_id: $(this).val(),
                    },
                    success: function(result) {
                        $("#location_id").empty();
                        $("#location_id").append(
                            '<option value="" disabled selected>Select Location</option>');
                        $.each(result, function(a, b) {
                            $("#location_id").append('<option value="' + b.id + '">' + b
                                .location_name + '</option>');
                        });
                    }


                })
            })

            $('#official_detail_form').validate({

                //debug:true,
                ignore: ".ignore",
                rules: {
                    employee_id: {
                        required: true,
                    },
                    emp_code: {
                        required: true,
                    },
                    company_id: {
                        required: true,


                    },
                    // emp_status_id: {
                    //     required: true,
                    // },
                    date_joining: {
                        required: true,
                    },
                    // date_conform: {
                    //     required: true,
                    // },
                    // date_leaving: {
                    //     required: true,
                    // },
                    department_id: {
                        required: true,
                    },
                    designation_id: {
                        required: true,
                    },
                    // grade_id: {
                    //     required: true,
                    // },
                    // project_id: {
                    //     required: true,
                    // },
                    location_id: {
                        required: true,
                    },
                    // reporting_manager: {
                    //     required: true,
                    // },
                    // official_mob_no: {
                    //     required: true,
                    //     minlength: 10,
                    //     maxlength: 10,
                    // },
                    // official_mail_id: {
                    //     required: true,
                    // },
                    // working_hr: {
                    //     required: true,
                    // },

                },
                messages: {
                    company_id: {
                        required: "This field is required.",
                    },
                    employee_id: {
                        required: "Please type employee name and select.",
                    },
                    emp_code: {
                        required: "This field is required.",
                    },
                    emp_status_id: {
                        required: "Please select employee status.",
                    },
                    date_joining: {
                        required: "Please select date of joining.",
                    },
                    // date_conform: {
                    //     required: 'Please select date of conform.',
                    // },
                    // date_leaving: {
                    //     required: 'Please select date of leaving.',
                    // },
                    department_id: {
                        required: 'Please select deaprtment.',
                    },
                    designation_id: {
                        required: "Please select designation.",
                    },
                    // grade_id: {
                    //     required: "Please select grade.",
                    // },
                    // project_id: {
                    //     required: "Please select project.",
                    // },
                    location_id: {
                        required: 'Please select location.',
                    },
                    // reporting_manager: {
                    //     required: 'This field is required.',
                    // },
                    // official_mob_no: {
                    //     required: 'This field is required.',
                    //     minlength: 'Mobile number must be 10 digits.',
                    //     maxlength: 'Mobile number must be 10 digits.',
                    // },

                    // official_mail_id: {
                    //     required: 'This field is required.',
                    // },
                    // working_hr: {
                    //     required: 'This field is required.',
                    // },


                },
                errorElement: 'label',
                errorPlacement: function(error, element) {
                    element.closest('.form-group').append(error);

                },
                submitHandler: function(form) {
                    $("#add-edit-btn").addClass('disabled');

                    // $("#load_screen").show();
                    return true;
                }
            });

            $(document).on('click', '.edit', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-official-details') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#id").val(result.id);
                        $("#emp_code").val(result.emp_code);
                        $("#emp_status_id").val(result.emp_status_id);
                        $("#date_joining").val(result.date_joining);
                        $("#date_conform").val(result.date_conform);
                        $("#date_leaving").val(result.date_leaving);
                        $("#department_id").val(result.department_id);
                        $("#designation_id").val(result.designation_id);
                        $("#grade_id").val(result.grade_id);
                        $("#project_id").val(result.project_id);
                        $("#location_id").val(result.location_id);
                        $("#reporting_manager").val(result.reporting_manager);
                        $("#official_mob_no").val(result.official_mob_no);
                        $("#official_mail_id").val(result.official_mail_id);
                        $("#working_hr").val(result.working_hr);

                        $("#myLargeModalLabel").text("Edit Official Details");
                        $("#add-edit-btn").text("Update");
                        let formaction =
                            '{{ route('employees_masters.update-official-details') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }

                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Official Details");
                $("#add-edit-btn").text("Add");
                $('#official_detail_form').trigger("reset");
                let formaction = '{{ route('employees_masters.store-official-details') }}';
                $("#add-edit-btn").attr("formaction", formaction);

            });


            $(document).on('click', '.delete', function() {
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
                            url: "{{ route('employees_masters.delete-official-details') }}",
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


            var table = $('.datatable_server').DataTable({
                dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
                buttons: {
                    buttons: [
                        // { extend: 'copy', className: 'btn' },
                        {
                            extend: 'csv',
                            className: 'btn'
                        },
                        {
                            extend: 'excel',
                            className: 'btn'
                        },
                        {
                            extend: 'print',
                            className: 'btn'
                        }
                    ]
                },
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                    },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    "sLengthMenu": "Results :  _MENU_",
                },
                "lengthChange": false,
                "paging": true,
                "searching": true,
                "serverSide": true,
                "pageLength": 10,
                "processing": true,
                "language": {
                    "emptyTable": "No Records Found",
                    "paginate": {
                        "previous": "<i class='fas fa-chevron-left'></i>",
                        "next": "<i class='fas fa-chevron-right'></i>",
                    },
                    "infoFiltered": "",
                    "processing": '<div class="loader_box sub_loader" > <div class="site_loader"><i class="fas fa-sync-alt fa-spin"></i></div> </div>'
                },

                "ajax": {
                    url: "{{ route('employees_masters.get-official-details') }}",
                    type: "get",
                    data: function(d) {}
                },
                columns: [{
                        data: "DT_RowIndex",
                        orderable: true,
                        name: "DT_RowIndex",
                        width: "5%"
                    },
                    {
                        data: "employee_name",
                        orderable: true,
                        name: "employee_name" /*,width:"20%"*/
                    },
                    {
                        data: "employee_status_name",
                        orderable: true,
                        name: "employee_status_name" /*,width:"20%"*/
                    },
                    {
                        data: "date_joining",
                        orderable: true,
                        name: "date_joining",
                        width: "15%"
                    },
                    {
                        data: "date_conform",
                        orderable: true,
                        name: "date_conform" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "date_leaving",
                        orderable: true,
                        name: "date_leaving" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "department",
                        orderable: true,
                        name: "department" /*,width:"20%"*/
                    },
                    {
                        data: "designation",
                        orderable: true,
                        name: "designation",
                        width: "30%"
                    },
                    {
                        data: "grade_name",
                        orderable: true,
                        name: "grade_name" /*,width:"20%"*/
                    },
                    {
                        data: "project",
                        orderable: true,
                        name: "project",
                        width: "30%"
                    },
                    {
                        data: "location_name",
                        orderable: true,
                        name: "location_name" /*,width:"20%"*/
                    },
                    {
                        data: "reporting_manager",
                        orderable: true,
                        name: "reporting_manager",
                        width: "30%"
                    },
                    {
                        data: "working_hr",
                        orderable: true,
                        name: "working_hr" /*,width:"20%"*/
                    },
                    {
                        data: "official_mail_id",
                        orderable: true,
                        name: "official_mail_id",
                        width: "30%"
                    },
                    {
                        data: "official_mob_no",
                        orderable: true,
                        name: "official_mob_no" /*,width:"20%"*/
                    },



                    {
                        data: "action",
                        name: "action",
                        orderable: false,
                        className: "center text-center" /*,width:"10%"*/
                    },

                ],
                "order": [],
                "bFilter": false,
                "info": false,
                "responsive": true,
                "ordering": true,
            });
        })
    </script>
@stop
