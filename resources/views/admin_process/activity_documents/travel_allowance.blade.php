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
                            </svg>Add Travel Allowance </button>

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
                                    <h5 class="modal-title" id="myLargeModalLabel">Add Travel Allowance</h5>
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

                                <form id="travel-allowance_form" method="post" enctype="multipart/form-data">
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
                                              
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label> Select Employee Name * </label>
                                            <select class="form-control select2"
                                                name="employee_id" id="employee_id">
                                                @foreach ($employee as $emp2)
                                                    <option value="{{ $emp2->id }}">{{ $emp2->full_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Select Event/Meeting </label>
                                            <select name="event_meeting_id" id="event_meeting_id"
                                                class="form-control selectpicker"  title='Select Department'>
                                                @foreach ($event_id as $event_id)
                                                <option value="{{ $event_id->event_meeting_id }}">{{ $event_id->event_meeting_id }}
                                                </option>
                                            @endforeach
                                            @foreach ($meeting_id as $meeting_id)
                                            <option value="{{ $meeting_id->event_meeting_id }}">{{ $meeting_id->event_meeting_id }}
                                            </option>
                                        @endforeach
                                                
                                            </select>
                                        </div>                                     
                                       
                                        <div class="col-md-6 form-group">
                                            <label> Approve Date *</label>
                                            <input type="date" name="travel_date" id="travel_date"
                                                class="form-control" placeholder="">
                                        </div>
                                       
                                        <div class="col-md-6 form-group">
                                            <label> Traveling Details *</label>
                                            <input type="text" name="travel_details" id="travel_details"
                                                class="form-control" placeholder="">
                                        </div>
                                       
                                       
                                        <div class="col-md-6 form-group">
                                            <label> Approved By *</label>
                                            <input type="text" name="approve_by" id="approve_by"
                                                  class="form-control"
                                                placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label> Approve Date *</label>
                                            <input type="date" name="approve_date" id="approve_date"
                                                class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label> Remark</label>
                                            <input type="text" name="remark" id="remark"
                                                class="form-control" placeholder="">
                                        </div>

                                        <div class="form-group" align="center"
                                            style="margin-top: 5%;  margin-left: 45%;">

                                            <button formaction="{{ route('admin_process.activity_documents.store-travel-allowance') }}"
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
                                        <th>Employee</th>

                                        <th>Travel Date</th>
                                        <th>Travel Details</th>
                                        <th>Approve By</th>
                                        <th>Approve Date</th>
                                      
                                        <th>Remark</th>
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

            $('#travel-allowance_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {

                    company_id: {
                        required: true,
                    },
                    location_id: {
                        required: true,
                    },
                    
                    travel_date: {
                        required: true,
                    },
                    travel_details: {
                        required: true,
                    },
                   
                    approve_by: {
                        required: true,
                    },
                    approve_date: {
                        required: true,
                    },
                   
                      employee_id: {
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
                    
                    travel_date: {
                        required: "Please select date.",
                    },
                    travel_details: {
                        required: "This field required.",
                    },
                    approve_by: {
                        required: "This field required.",
                    },
                    approve_date: {
                        required: "Please select date.",
                    },
                  
                    employee_id: {
                        required: "Please select employee.",
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
                            url: "{{ route('admin_process.activity_documents.delete-travel-allowance') }}",
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
                    url: "{{ route('admin_process.activity_documents.edit-travel-allowance') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#upload_file").addClass('ignore');
                        $("#id").val(result.id);
                        $("#company_id").val(result.company_id);
                        $("#travel_date").val(result.travel_date);
                        $("#travel_details").val(result.travel_details);
                        $("#approve_by").val(result.approve_by);
                        $("#approve_date").val(result.approve_date);
                        $("#remark").val(result.remark)
                        $("#employee_id").val(result.employee_id).change();

                        
                        $("#company_id").change();
                        setTimeout(function() {
                            $("#location_id").val(result.location_id);
                            $("#department_id").val(result.department_id);
                        }, 1500);

                        $("#myLargeModalLabel").text("Edit Travel Allowance")
                        $("#add-edit-btn").text("update");
                        let formaction =
                            '{{ route('admin_process.activity_documents.update-travel-allowance') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }

                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Travel Allowance");
                $("#add-edit-btn").text("Add");
                $('#travel-allowance_form').trigger("reset");
                $("#store_logo").text('');
                let formaction = '{{ route('admin_process.activity_documents.store-travel-allowance') }}';
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
                    url: "{{ route('admin_process.activity_documents.get-travel-allowance') }}",
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
                        data: "employee",
                        orderable: true,
                        name: "employee" /*,width:"20%"*/
                    },
                    {
                        data: "travel_date",
                        orderable: true,
                        name: "travel_date" /*,width:"20%"*/
                    },
                    {
                        data: "travel_details",
                        orderable: true,
                        name: "travel_details" /*,width:"20%"*/
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
                        data: "remark",
                        orderable: true,
                        name: "remark" /*,width:"20%"*/
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
