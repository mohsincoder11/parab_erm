@extends('layout/layout')
@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">


            <div style="margin-top: 3%; margin-bottom: 3%;">
                @include('layout.alerts')

                <!--start model-->
                <div>
                    <div>
                        <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal"
                            data-target=".add-edit_modal"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>Add Complaints</button>
                        {{-- <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                    clip-rule="evenodd" />
                            </svg>Bulk
                            Delete</button> --}}


                    </div>

                    <div class="modal fade add-edit_modal" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Add Complaints</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>

                                <form  id="complaint_form" method="post">
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
                                        <label>Complaint From*</label>
                                        <select name="complaint_from" id="complaint_from"
                                            class="form-control selectpicker employee" data-live-search="true"
                                            data-live-search-style="begins" title='Select Employee...'>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>Complaint Against*</label>
                                        <select name="complaint_of" id="complaint_of"
                                            class="form-control selectpicker employee" data-live-search="true"
                                            data-live-search-style="begins" title='Select Employee...'>
                                        </select>
                                    </div>


                                    <div class="col-md-6 form-group">
                                        <label>Complaint Title*</label>
                                        <input type="text" name="complaint_title" id="complaint_title"
                                            class="form-control" placeholder=Complaint>
                                    </div>


                                    <div class="col-md-6 form-group">
                                        <label>Complaint Date *</label>
                                        <input type="date" name="complaint_date" id="complaint_date"
                                            class="form-control date" value="">
                                    </div>



                                    <div class="col-md-6 form-group">
                                        <label>Descrption* </label>
                                        <textarea name="description" id="description" class="form-control" placeholder=Optional></textarea>
                                    </div>


                                    <div class="form-group" align="center" style="margin-left: 45%;">

                                        <button formaction="{{ route('hr_document.store-complaint') }}" type="submit" class="btn btn-warning" id="add-edit-btn">Add </button>
                                    </div>

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!--End model-->

                <div class="row" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="html5-extension" class="table table-hover non-hover datatable_server" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Complaint From</th>
                                            <th>Complaint Against</th>
                                            <th> Company</th>
                                            <th>Compalint Title</th>
                                            <th>Compalint Date</th>
                                            <th>Description</th>
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
                    url: "{{ route('get_employee_by_company') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        company_id: $(this).val(),
                    },
                    success: function(result) {

                        $(".employee").empty();
                        $(".employee").append(
                            '<option value="" disabled selected>Select Employee</option>');
                        $.each(result, function(a, b) {
                            $(".employee").append('<option value="' + b.id + '">' + b
                                .full_name + '</option>');
                        });
                    }


                })
            })

            $('#complaint_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    company_id: {
                        required: true,
                    },
                    complaint_from: {
                        required: true,
                    },
                    complaint_of: {
                        required: true,
                       // notEqual:'complaint_from',
                    },
                    complaint_title: {
                        required: true,
                    },
                    complaint_date: {
                        required: true,
                    },
                    description: {
                        required: true,
                    },
                   

                },
                messages: {
                    company_id: {
                        required: "Please select company.",
                    },
                    complaint_from: {
                        required: "Please select employee.",
                    },
                    complaint_of: {
                        required: "Please select employee.",
                       // notEqual:"Please select other employee."
                    },
                    complaint_title: {
                        required: 'Please fill this field.',
                    },
                    complaint_date: {
                        required: 'Please select date.',
                    },
                    description: {
                        required: 'Please describe complaint.',
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
                            url: "{{ route('hr_document.delete-complaint') }}",
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
                    url: "{{ route('hr_document.edit-complaint') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#id").val(result.id);
                        $("#company_id").val(result.company_id);
                        $("#complaint_title").val(result.complaint_title);
                        $("#complaint_date").val(result.complaint_date);
                        $("#description").val(result.description);                 


                        $("#company_id").change();
                        setTimeout(function() {
                            $("#complaint_from").val(result.complaint_from);
                            $("#complaint_of").val(result.complaint_of);
                        }, 1500);
                       
                        $("#myLargeModalLabel").text("Edit Complaint")
                        $("#add-edit-btn").text("Update");
                        let formaction = '{{ route('hr_document.update-complaint') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }

                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Offer Letter");
                $("#add-edit-btn").text("Add");
                $('#offer_letter_form').trigger("reset");
                $("#store_logo").text('');
                let formaction = '{{ route('hr_document.store-complaint') }}';
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
                    url: "{{ route('hr_document.get_complaint_record') }}",
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
                        data: "complaint_from",
                        orderable: true,
                        name: "complaint_from" /*,width:"20%"*/
                    },
                    {
                        data: "complaint_of",
                        orderable: true,
                        name: "complaint_of" /*,width:"20%"*/
                    },
                    {
                        data: "company_name",
                        orderable: true,
                        name: "company_name" /*,width:"20%"*/
                    },
                    {
                        data: "complaint_title",
                        orderable: true,
                        name: "complaint_title" /*,width:"20%"*/
                    },
                    
                    {
                        data: "complaint_date",
                        orderable: true,
                        name: "complaint_date" /*,width:"20%"*/
                    },
                   
                    {
                        data: "description",
                        name: "description",
                        orderable: false,
                        className: "center text-center" /*,width:"10%"*/
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
