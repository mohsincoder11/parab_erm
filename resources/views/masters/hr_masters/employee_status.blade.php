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
                            </svg>Add Employee Status</button>


                        {{-- <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal" data-target="#exampleModalRemoveAnimation"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                                      </svg>
                                        Bulk Delete
                                    </button> --}}

                    </div>
                    <!-- Model Start -->
                    <div class="modal fade add-edit_modal" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Add Employee Status</h5>
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

                                <form method="post" id="employee_status_form">
                                    @csrf
                                    <input type="hidden" id="id" name="id">
                                    <div class="row" style="padding: 10px;">
                                        <div class="col-md-6 form-group">
                                            <label>Employee Status Name <span class="required">*</span></label>
                                            <input type="text" class="form-control" placeholder="Employee Status Name" name="employee_status_name" id="employee_status_name">
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
                                            <label>Select Status <span class="required">*</span></label>
                                            <select name="status_type" id="status_type" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Company Type...'>
                                                <option value="" disabled selected>Select Status </option>
                                                <option value="Probation">Probation</option>
                                                <option value="Trainee">Trainee</option>
                                                <option value="Permanent">Permanent</option>
                                                <option value="Part Time">Part Time </option>
                                                <option value="Contractual">Contractual </option>

                                                </option>

                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label> Working Hours*</label>
                                            <select name="working_hour" id="working_hour"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="" disabled selected> Select Hours</option>

                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="4">4</option>
                                                <option value="6">6</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>




                                        <div class="col-md-12 form-group text-center" >

                                            <button formaction="{{ route('store-employee-status') }}"
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


             



             


                <div class="row" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table class="table table-hover non-hover datatable_server" style="width:100%">
                                    <thead>
                                        <tr>
                                        <tr>
                                            <th>Sr.no</th>
                                            <th>Emp Status</th>
                                            <th>Company</th>
                                            <th>Location</th>
                                            <th>Project</th>
                                            <th>Status</th>
                                            <th>Working Hours</th>
                                            <th>Action</th>

                                        </tr>

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
@endsection


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

            


            $('#employee_status_form').validate({

                //debug:true,
                ignore: ".ignore",
                rules: {
                    employee_status_name: {
                        required: true,
                    },
                    company_id: {
                        required: true,
                    },
                    project_id: {
                        required: true,
                    },                  
                    location_id: {
                        required: true,
                    },
                   
                    status_type: {
                        required: true,
                    },
                    working_hour: {
                        required: true,
                    },                

                },
                messages: {
                    employee_status_name: {
                        required: "This field is required.",
                    },
                    company_id: {
                        required: "Please select company.",
                    },
                    project_id: {
                        required: "Please select project.",
                    },
                    location_id: {
                        required: "Please select location.",
                    },
                    status_type: {
                        required: "Please select status type.",
                    },
                   
                    working_hour: {
                        required: 'Please select working hour.',
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

            $(document).on('click', '.edit', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('edit-employee-status') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#id").val(result.id);
                        $("#employee_status_name").val(result.employee_status_name);
                        $("#company_id").val(result.company_id);
                        $("#project_id").val(result.project_id);
                        $("#location_id").val(result.location_id);
                        $("#status_type").val(result.status_type);
                        $("#working_hour").val(result.working_hour);
                       
                        $("#myLargeModalLabel").text("Edit Employee Status");
                        $("#add-edit-btn").text("Update");
                        let formaction =
                            '{{ route('update-employee-status') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }

                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Official Details");
                $("#add-edit-btn").text("Add");
                $('#employee_status_form').trigger("reset");
                let formaction = '{{ route('store-employee-status') }}';
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
                            url: "{{ route('delete-employee-status') }}",
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
                    url: "{{ route('get-employee-status') }}",
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
                        data: "employee_status_name",
                        orderable: true,
                        name: "employee_status_name" /*,width:"20%"*/
                    },
                    {
                        data: "company_name",
                        orderable: true,
                        name: "company_name" /*,width:"20%"*/
                    },
                    {
                        data: "project",
                        orderable: true,
                        name: "project",
                        width: "15%"
                    },
                    {
                        data: "location_name",
                        orderable: true,
                        name: "location_name" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "status_type",
                        orderable: true,
                        name: "status_type" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "working_hour",
                        orderable: true,
                        name: "working_hour" /*,width:"20%"*/
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