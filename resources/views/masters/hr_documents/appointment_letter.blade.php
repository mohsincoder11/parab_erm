@extends('layout/layout')
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
                            </svg>Add Appointment Letter</button>


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
                                    <h5 class="modal-title" id="myLargeModalLabel">Add Appointment Letter</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>


                                <form enctype="multipart/form-data" id="appointment_letter_form" method="post">
                                    @csrf
                                    <div class="row" style="padding: 10px;">
                                        <input type="hidden" id="old_file" name="old_file">
                                        <input type="hidden" id="id" name="id">

                                        <div class="col-md-6 form-group">
                                            <label>Choose File* </label>
                                            <input type="file" name="upload_file" id="upload_file" class="form-control"
                                                placeholder=Optional>
                                            <span id="store_logo"></span>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Employee Status*</label>
                                            <select name="employee_status" id="employee_status"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>
                                                <option value="" disabled selected> Select Status</option>

                                                <option value="361">nhjbascn</option>
                                                <option value="361">vugasjb</option>
                                                <option value="361">bnbsah</option>


                                            </select>
                                        </div>


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
                                            <label>Location*</label>
                                            <select name="location_id" id="location_id" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Location...'>

                                            </select>
                                        </div>



                                        <div class="col-md-6 form-group">
                                            <label>Project *</label>
                                            <select name="project_id" id="project_id" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Company Type...'>
                                                <option value="" disabled selected>Select Project</option>
                                                @foreach ($projects as $projects)
                                                    <option value="{{ $projects->id }}">{{ $projects->project }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Select Document *</label>
                                            <select name="document" id="document" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Document Type...'>
                                                <option value="" disabled selected>Select Document </option>
                                                <option value="Adhar card">Adhar card</option>
                                                <option value="Pan card">Pan card</option>
                                                <option value="Domecial">Domecial</option>
                                                <option value="Leaving Certificate">Leaving Certificate </option>

                                                </option>

                                            </select>
                                        </div>


                                        <div class="form-group" align="center"
                                            style="margin-top: 5%;  margin-left: 45%;">

                                            <button formaction="{{ route('hr_document.store-appointment-letter') }}"
                                                type="submit" id="add-edit-btn" class="btn btn-warning">Add</button>
                                        </div>

                                    </div>
                                </form>

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


            <div class="row" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <table id="html5-extension" class="table table-hover non-hover datatable_server" style="width:100%">
                                <thead>
                                    <tr>
                                    <tr>
                                        <th>Sr.no</th>
                                        <th>Files</th>
                                        <th>Emp Status</th>
                                        <th>Company</th>
                                        <th>Location</th>
                                        <th>Project</th>
                                        <th>Document</th>
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
</div>
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

            $('#appointment_letter_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    company_id: {
                        required: true,
                    },
                    upload_file: {
                        required: true,
                    },
                    employee_status: {
                        required: true,
                    },
                    project_id: {
                        required: true,
                    },
                    document: {
                        required: true,
                    },
                    location_id: {
                        required: true,
                    },

                },
                messages: {
                    company_id: {
                        required: "Please select company.",
                    },
                    upload_file: {
                        required: "Please select file.",
                    },
                    employee_status: {
                        required: "Please select employee status.",
                    },
                    project_id: {
                        required: 'Please select project.',
                    },
                    document: {
                        required: 'Please select document.',
                    },
                    location_id: {
                        required: 'Please select location.',
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
                    url: "{{ route('hr_document.edit-appointment-letter') }}",
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
                        $("#employee_status").val(result.employee_status);
                        $("#company_id").val(result.company_id);
                        $("#company_id").change();
                        setTimeout(function() {
                            $("#location_id").val(result.location_id);
                        }, 1500);
                        $("#project_id").val(result.project_id);
                        $("#document").val(result.document);
                        $("#myLargeModalLabel").text("Edit Appointment Letter")
                        $("#add-edit-btn").text("Update");
                        let formaction = '{{ route('hr_document.update-appointment-letter') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }

                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Appointment Letter");
                $("#add-edit-btn").text("Add");
                $('#appointment_letter_form').trigger("reset");
                $("#store_logo").text('');
                let formaction = '{{ route('hr_document.store-appointment-letter') }}';
                $("#add-edit-btn").attr("formaction", formaction);
                $("#upload_file").removeClass('ignore');

            });


            $(document).on('click', '.delete', function() {
                let id=$(this).attr('id');
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
                        url: "{{ route('hr_document.delete-appointment-letter') }}",
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
                    url: "{{ route('hr_document.get_appointment_letter_record') }}",
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
                        data: "file",
                        orderable: true,
                        name: "file" /*,width:"20%"*/
                    },
                    {
                        data: "employee_status",
                        orderable: true,
                        name: "employee_status",
                        width: "15%"
                    },
                    {
                        data: "company_name",
                        orderable: true,
                        name: "company_name" /*,width:"20%"*/,
                        width: "25%"

                    },
                    {
                        data: "location_name",
                        orderable: true,
                        name: "location_name" /*,width:"20%"*/,
                        width: "25%"

                    },
                    {
                        data: "project",
                        orderable: true,
                        name: "project" /*,width:"20%"*/
                    },
                    {
                        data: "document",
                        orderable: true,
                        name: "document",
                        width: "30%"
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
