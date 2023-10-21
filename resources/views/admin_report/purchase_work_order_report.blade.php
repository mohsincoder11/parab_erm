@extends('layout.layout')
@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div style=" background-color:white; margin-top: 10px;">

                <div style="padding-top: 15px; font-size: 30px; margin-left: 1%; ">
                    <h3 style="color:rgb(36, 36, 191) ;"><b> Purchase Order / Work Order /Agreement </b></h3>

                </div>

                <div class="layout-px-spacing">
                <form action="{{route('admin_report.purchase-work-order-agreement')}}" method="get">
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <label>Company *</label>
                            <select name="company_id" id="company_id" class="form-control selectpicker"
                                data-live-search="true" data-live-search-style="begins" title='Select Company Type...'>
                                <option value="">Please Select Company
                                </option>
                                @foreach ($company as $company)
                                    <option value="{{ $company->id }}">{{ $company->company_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Select PO or WO or Agreement No</label>
                            <select name="po_wo_number" id="po_wo_number" class="form-control selectpicker"
                            data-live-search="true" data-live-search-style="begins" title='Select option...'>
                            <option value="">Please Select Option
                            </option>
                           
                        </select>
                        </div>
                       
                        <div class="col-lg-2" style="margin-top:29px ;">
                            <button type="submit" class="btn btn-primary mb-2">Fetch Details </button>
                        </div>
                    
                    </div>
                </form>
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
                                        <th>sr</th>
                                        <th>Company </th>
                                        <th>Location </th>
                                        <th>Department</th>
                                        <th>Date</th>
                                        <th>Vendor category</th>
                                        <th>Expenses category</th>
                                        <th>Selected Vendor</th>
                                        <th>Total Amt.</th>
                                        
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchase_work_order_data as $purchase_work_order)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $purchase_work_order->company_name }}</td>
                                                <td>{{ $purchase_work_order->location_name }}</td>
                                                <td>{{ $purchase_work_order->department }}</td>
                                                <td>{{ $purchase_work_order->date }}</td>
                                                <td>{{ $purchase_work_order->vendor_category_name }}</td>
                                                <td>{{ $purchase_work_order->expenses_category }}</td>
                                                <td>{{ $purchase_work_order->vendor_name }}</td>
                                                <td>{{ $purchase_work_order->total_amount }}</td>
                                                
                                                <td>
                                    <a 
                                    href="{{route('admin_report.fetch-work-purchase-work-order-agreement',$purchase_work_order->id)}}" data-toggle="tooltp"
                                                        data-placement="top" title="view"
                                                        data-target=".bd-example-modal-xl"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg></a>



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
            $(".select2").select2({
                //tags: true,
                dropdownParent: $(".add-edit_modal")
            });

            $(document).on('change', '#company_id', function() {
                $.ajax({
                    url: "{{ route('admin_report.get_po_wo_by_company_id') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        company_id: $(this).val(),
                    },
                    success: function(result) {

                        $("#po_wo_number").empty();
                        $("#po_wo_number").append(
                            '<option value="" disabled selected>Please Select Option</option>');
                           $.each(result, function(a, b) {
                            $("#po_wo_number").append('<option value="' + b.id + '">' + b
                                .generate_po_wo_number + '</option>');
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
