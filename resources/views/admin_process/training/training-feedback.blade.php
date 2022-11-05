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
                            </svg>Add Training Feedback </button>

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
                                    <h5 class="modal-title" id="myLargeModalLabel">Add Training Feedback</h5>
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

                                <form id="training-feedback_form" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" id="id" name="id">
                                    <div class="row" style="padding: 10px;">

                                        <div class="col-md-6 form-group">
                                            <label>Company *</label>
                                            <select name="company_id" id="company_id" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Company Type...'>
                                                <option value="">Please select company
                                                </option>
                                                @foreach ($company as $company)
                                                    <option value="{{ $company->id }}">{{ $company->company_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="col-md-6 form-group">
                                            <label>Location *</label>
                                            <select name="location_id" id="location_id" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select location...'>
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Select Department </label>
                                            <select name="department_id" id="department_id"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Department'>
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Training Date *</label>
                                            <input type="date" name="training_date" id="training_date" required
                                                class="form-control" placeholder="" value="{{ date('Y-m') }}">

                                        </div>


                                        <div class="col-md-6 form-group">
                                            <label>Select Training Code *</label>
                                            <select class="form-control select2 " name="training_calendar_id"
                                                id="training_calendar_id">
                                                @foreach ($training_code as $training_code)
                                                    <option value="{{ $training_code->id }}">
                                                        {{ $training_code->training_code }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label> Select Training Proposer Employees * </label>
                                            <select class="form-control select2" name="training_proposer_employee"
                                                id="training_proposer_employee">
                                                @foreach ($employee as $emp1)
                                                    <option value="{{ $emp1->id }}">{{ $emp1->full_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label> Select Training Participant Employees * </label>
                                            <select class="form-control select2" multiple="multiple"
                                                name="training_participant_employee[]" id="training_participant_employee">
                                                @foreach ($employee as $emp2)
                                                    <option value="{{ $emp2->id }}">{{ $emp2->full_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Training Cost *</label>
                                            <input type="number" name="training_cost"
                                                id="training_cost" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Approved By *</label>
                                            <input type="text" name="approve_by" id="approve_by" class="form-control"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Approved Date *</label>
                                            <input type="date" name="approve_date" id="approve_date"
                                                class="form-control" placeholder="">
                                        </div>


                                        <div class="col-md-6 form-group">
                                            <label> File Attachment </label>
                                            <input type="file" name="file" id="file" class="form-control"
                                                placeholder="">
                                            <span id="store_logo"></span>

                                        </div>


                                        <div class="form-group" align="center"
                                            style="margin-top: 5%;  margin-left: 45%;">

                                            <button
                                                formaction="{{ route('admin_process.training.store-training-feedback') }}"
                                                type="submit" class="btn btn-warning" id="add-edit-btn">Add </button>

                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- model end -->


                <!--edit Model Start -->

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


            <div class="row" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <table class="table table-hover non-hover datatable_server" style="width:100%">
                                <thead>
                                    <tr>
                                    <tr>
                                        <th>Sr.no</th>
                                        <th>Company</th>
                                        <th>Location</th>
                                        <th>Department</th>
                                        <th>Training Date</th>
                                        <th>Traineing Code</th>
                                        <th>Proposer Employee</th>
                                        <th>Participant Employee</th>
                                        <th>Training Cost</th>
                                        <th>Approved By</th>
                                        <th>Approved Date</th>
                                        <th>File</th>
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

            $('#training-feedback_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {

                    company_id: {
                        required: true,
                    },
                    location_id: {
                        required: true,
                    },

                    training_date: {
                        required: true,
                    },
                    training_calendar_id: {
                        required: true,
                    },
                    training_proposer_employee: {
                        required: true,
                    },
                    "training_participant_employee[]": {
                        required: true,
                    },

                    training_cost: {
                        required: true,
                    },
                    approve_by: {
                        required: true,
                    },
                    approve_date: {
                        required: true,
                    },

                },
                messages: {

                    company_id: {
                        required: "Please select company.",
                    },
                    location_id: {
                        required: "Please select location.",
                        // notEqual:"Please select other employee."
                    },

                    training_date: {
                        required: "Please select date.",
                    },
                    training_calendar_id: {
                        required: "Please select time.",
                    },

                    training_proposer_employee: {
                        required: "Please select date.",
                    },

                    "training_participant_employee[]": {
                        required: "Please select employee.",

                    },
                    training_cost: {
                        required: 'This field is required.',
                    },
                    approve_by: {
                        required: 'This field is required.',
                    },
                    approve_date: {
                        required: 'Please select date.',
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
                            url: "{{ route('admin_process.training.delete-training-feedback') }}",
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

            $(document).on('click', '.edit', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('admin_process.training.edit-training-feedback') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#upload_file").addClass('ignore');
                        $("#store_logo").text(result.file);
                        $("#id").val(result.id);
                        $("#old_file").val(result.file);
                        $("#company_id").val(result.company_id);
                        $("#training_date").val(result.training_date);
                        $("#training_calendar_id").val(result.training_calendar_id);
                        $("#training_proposer_employee").val(result.training_proposer_employee);
                        $("#training_participant_employee").val(result
                            .training_participant_employee.split(',')).change();
                        $("#training_cost").val(result.training_cost);
                        $("#approve_by").val(result.approve_by);
                        $("#approve_date").val(result.approve_date);
                        $("#file_type").val(result.file_type);
                        $("#training_code").val(result.training_code);

                        $("#company_id").change();
                        setTimeout(function() {
                            $("#location_id").val(result.location_id);
                            $("#department_id").val(result.department_id);
                        }, 1500);

                        $("#myLargeModalLabel").text("Edit Training Feedback")
                        $("#add-edit-btn").text("update");
                        let formaction =
                            '{{ route('admin_process.training.update-training-feedback') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }

                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Training Feedback");
                $("#add-edit-btn").text("Add");
                $('#training-feedback_form').trigger("reset");
                $("#store_logo").text('');
                let formaction = '{{ route('admin_process.training.store-training-feedback') }}';
                $("#add-edit-btn").attr("formaction", formaction);
                $("#upload_file").removeClass('ignore');

            });

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
                    url: "{{ route('admin_process.training.get-training-feedback') }}",
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
                        data: "company_name",
                        orderable: true,
                        name: "company_name" /*,width:"20%"*/
                    },
                    {
                        data: "location_name",
                        orderable: true,
                        name: "location_name" /*,width:"20%"*/
                    },
                    {
                        data: "department",
                        orderable: true,
                        name: "department" /*,width:"20%"*/
                    },
                    {
                        data: "training_date",
                        orderable: true,
                        name: "training_date" /*,width:"20%"*/
                    },
                    {
                        data: "training_code",
                        orderable: true,
                        name: "training_code" /*,width:"20%"*/
                    },

                    {
                        data: "proposer_employee",
                        orderable: true,
                        name: "proposer_employee" /*,width:"20%"*/
                    },
                    {
                        data: "training_participant_employee",
                        orderable: true,
                        name: "training_participant_employee" /*,width:"20%"*/
                    },

                    {
                        data: "training_cost",
                        orderable: true,
                        name: "training_cost" /*,width:"20%"*/
                    },
                    {
                        data: "approve_by",
                        orderable: true,
                        name: "approve_by" /*,width:"20%"*/
                    },
                    {
                        data: "approve_date",
                        orderable: true,
                        name: "approve_date" /*,width:"20%"*/
                    },
                    {
                        data: "file",
                        orderable: true,
                        name: "file" /*,width:"20%"*/
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
