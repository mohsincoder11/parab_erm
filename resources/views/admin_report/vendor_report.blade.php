@extends('layout.layout')
@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div style=" background-color:white; margin-top: 10px;">

                <div style="padding-top: 15px; font-size: 30px; margin-left: 1%; ">
                    <h3 style="color:rgb(36, 36, 191) ;"><b>Vendor Report</b></h3>

                </div>

                <div class="layout-px-spacing">

                    <div class="row">

                        <div class="col-md-3 form-group">
                            <label>Company *</label>
                            <select name="company_id" id="company_id" class="form-control selectpicker"
                                data-live-search="true" data-live-search-style="begins" title='Select Company Type...'>
                                <option value="">Please select company
                                </option>
                                @foreach ($company as $company)
                                    <option value="{{ $company->id }}">{{ $company->company_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Vendor Category *</label>
                            <select name="vendor_category" id="vendor_category" class="form-control selectpicker"
                            data-live-search="true" data-live-search-style="begins" title='Select Vendor Category...'>
                        </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Vendor Name *</label>
                            <select name="vendor_name" id="vendor_name" class="form-control selectpicker"
                            data-live-search="true" data-live-search-style="begins" title='Select Vendor Name...'>
                        </select>
                        </div>
                       
                       

                        <div class="col-md-3 form-group">
                            <label> Select Period From *</label>
                            <input type="date" name="period_from" id="period_from" class="form-control">
                        </div>

                        <div class="col-md-3 form-group">
                            <label> Select Period To *</label>
                            <input type="date" name="period_to" id="period_to" class="form-control">
                        </div>


                        <div class="col-lg-2" style="margin-top:29px ;">
                            <button class="btn btn-primary mb-2">Preview Report</button>
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
                                        <th>Company</th>
                                        <th>Location</th>
                                        <th>Period From</th>
                                        <th>Period To</th>
                                        <th>Expence Category</th>
                                        <th>Vendor Category</th>
                                        <th>Fetch Details</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td>
                                            <a href="javascript:void(0);" data-placement="top" title="Edit"
                                                data-toggle="modal" data-target="#editmodel"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2 text-success">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg></a>
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                                title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash-2 text-danger">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                    <line x1="10" y1="11" x2="10" y2="17">
                                                    </line>
                                                    <line x1="14" y1="11" x2="14" y2="17">
                                                    </line>
                                                </svg></a>

                                        </td>

                                    </tr>



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
                    url: "{{ route('admin_report.get_vendor_category_by_company') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        company_id: $(this).val(),
                    },
                    success: function(result) {

                        $("#vendor_category").empty();
                        $("#vendor_category").append(
                            '<option value="" disabled selected>Select Vendor Category</option>');
                           $.each(result, function(a, b) {
                            $("#vendor_category").append('<option value="' + b.id + '">' + b
                                .vendor_category_name + '</option>');
                        });
                    }
                })
            })

            $(document).on('change', '#vendor_category', function() {
                $.ajax({
                    url: "{{ route('admin_report.get_vendor_details_by_vendor_category') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        vendor_category_id: $(this).val(),
                        company_id: $("#company_id").val(),
                    },
                    success: function(result) {

                        $("#vendor_name").empty();
                        $("#vendor_name").append(
                            '<option value="" disabled selected>Select Vendor Name</option>');
                           $.each(result, function(a, b) {
                            $("#vendor_name").append('<option value="' + b.id + '">' + b
                                .vendor_name + '</option>');
                        });
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
