@extends('layout.layout')
@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div style=" background-color:white; margin-top: 10px;">

                <div style="padding-top: 15px; font-size: 30px; margin-left: 1%; ">
                    <h3 style="color:rgb(36, 36, 191) ;"><b>Template Format</b></h3>

                </div>

                <div class="layout-px-spacing">
                    <form action="{{ route('template_format_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $template_edits->template_id }}">
                        {{-- <div class="col-md-3"> --}}
                            <div class="row">

                                <div class="col-md-3 form-group">
                                    <label> Title *</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        placeholder="Enter Title" value="{{ $template_edits->title }}">
                                </div>


                                <div class="col-md-3 form-group">
                                    <label> Category *</label>
                                    <input type="text" name="category" id="category" class="form-control"
                                    placeholder="Enter Category" value="{{ $template_edits->category }}">
                                </div>

                                {{-- <div class="col-md-3 form-group">
                                    <label> Template File *</label>
                                    <input type="file" name="template_file" id="template_file" class="form-control">
                                </div> --}}


                                <div class="col-lg-2" style="margin-top:29px ;">
                                    <button type="submit" class="btn btn-primary mb-2">Update</button>
                                </div>


                            </div>
                        </div>
                </div>

                <div style="margin-top: 3%; margin-bottom: 3%;">

                </div>


                <div class="row" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr.no</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Template File</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($template_format as $template_formats)
                                            <tr>

                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $template_formats->title }}</td>
                                                <td>{{ $template_formats->category }}</td>
                                                {{-- <td>{{$template_formats->template_file}}</td> --}}
                                                <td>
                                                    <a target="_black"
                                                        href="{{ asset('public/images/' . $template_formats->template_file) }}">

                                                        {{ $template_formats->template_file }}
                                                    </a>
                                                </td>

                                                <td>
                                                    <a data-placement="top"
                                                        title="Edit"href="{{ route('template_format_edit', $template_formats->template_id) }}"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-edit-2 text-success">
                                                            <path
                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg></a>
                                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                                        id="{{ $template_formats->template_id }}" class="delete_stored"
                                                        title="Delete"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-trash-2 text-danger">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg>
                                                    </a>

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
    @stop

    @section('js')
        <script src="{{ asset('public/plugins/select2/select2.min.js') }}"></script>
        <script src="{{ asset('public/plugins/select2/custom-select2.js') }}"></script>

        <script>
            $(document).ready(function() {
                $(document).on('click', '.delete_stored', function() {
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
                                url: "{{ route('template_format_delete') }}",
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
                                    location.reload();
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
                        url: "{{ route('admin_process.activity_documents.get-event-meeting') }}",
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
                            data: "event_meeting_date",
                            orderable: true,
                            name: "event_meeting_date" /*,width:"20%"*/
                        },
                        {
                            data: "meeting_proposer_employee",
                            orderable: true,
                            name: "meeting_proposer_employee" /*,width:"20%"*/
                        },
                        {
                            data: "meeting_participant_employee",
                            orderable: true,
                            name: "meeting_participant_employee" /*,width:"20%"*/
                        },
                        {
                            data: "file",
                            orderable: true,
                            name: "file" /*,width:"20%"*/
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
