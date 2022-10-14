@extends('layout.layout')
@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">


            <div style="margin-top: 3%; ">
                @include('layout.alerts')

                <div>
                    <div>
                        <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal"
                            data-target=".add-edit_modal"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>Add Assets</button>


                        {{-- <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal" data-target="#exampleModalRemoveAnimation"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
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
                                    <h5 class="modal-title" id="myLargeModalLabel">Add Assets</h5>
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

                                <form method="post" id="asset_form" enctype="multipart/form-data">

                                    @csrf

                                    <input type="hidden" name="id" id="assets_id">
                                    <input type="hidden" name="old_file" id="old_file">


                                    <div class="row" style="padding: 10px;">

                                        <div class="col-md-6 form-group">
                                            <label>Assets Name*</label>
                                            <input type="text" name="asset_name" id="asset_name" required
                                                class="form-control" placeholder="Assets Name">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Company Asset Code *</label>
                                            <input type="text" name="company_asset_code" id="company_asset_code" required
                                                class="form-control" placeholder="Company Asset Code">
                                        </div>
                                        @php
                                            $asset_category = get_asset_category();
                                            $department = get_department_name_and_id();
                                        @endphp
                                        <div class="col-md-6 form-group">
                                            <label>category *</label>
                                            <select name="asset_category_id" id="asset_category_id"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected> Please select category</option>

                                                @foreach ($asset_category as $c)
                                                    <option value="{{ $c->id }}">{{ $c->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Is working *</label>
                                            <select name="is_working" id="is_working" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Company Type...'>
                                                <option value="" disabled selected> Working Type</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                                <option value="maintenance">On maintenance
                                                </option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Department *</label>
                                            <select name="department_id" id="department_id"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected>Department Type</option>
                                                @foreach ($department as $departments)
                                                    <option value="{{ $departments->id }}">
                                                        {{ $departments->department }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Employee *</label>
                                            <select name="employee_id" id="employee_id" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Employee Type...'>
                                                <option value="" disabled selected>Employee Type</option>
                                                @foreach ($employee as $employees)
                                                    <option value="{{ $employees->id }}">{{ $employees->full_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Purchase Date*</label>
                                            <input type="date" name="purchase_date" id="purchase_date"
                                                class="form-control date" value="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Warranty /AMC End Date*</label>
                                            <input type="date" name="warranty_date" id="warranty_date"
                                                class="form-control date" value="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Manufacturer *</label>
                                            <input type="text" name="manufacturer" id="manufacturer" required
                                                class="form-control" placeholder="Manufacturer">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label> Invoice Number*</label>
                                            <input type="text" name="invoice_no" id="invoice_no" required
                                                class="form-control" placeholder="Invoice Number">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label> Serial Number*</label>
                                            <input type="text" name="serial_no" id="serial_no" required
                                                class="form-control" placeholder="Serial Number">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Assets Image* </label>
                                            <input type="file" name="asset_image" id="asset_image"
                                                class="form-control" placeholder=Optional>
                                            <span id="store_logo"></span>
                                        </div>

                                        <div class="form-group" align="center" style="margin-top: 5%; margin-left: 45%;">

                                            <button formaction="{{ route('assets_masters.store-assets') }}"
                                                type="submit" id="add-edit-btn" class="btn btn-warning">Add</button>
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


                <div class="row" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table class="table table-hover non-hover datatable_server" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Assets Name</th>
                                            <th>Category</th>
                                            <th>Company assets code</th>
                                            <th>Is working</th>
                                            <th>Department</th>
                                            <th>Employee</th>
                                            <th>Purchase Date</th>
                                            <th>Warranty Date</th>
                                            <th>Manufacturer</th>
                                            <th>Invoice No</th>
                                            <th>Serial No</th>
                                            <th>Asset Image</th>
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


            $('#asset_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    asset_name: {
                        required: true,
                    },
                    company_asset_code: {
                        required: true,
                    },
                    asset_category_id: {
                        required: true,
                    },
                    is_working: {
                        required: true,
                    },
                    department_id: {
                        required: true,
                    },
                    employee_id: {
                        required: true,
                    },
                    purchase_date: {
                        required: true,
                    },
                    warranty_date: {
                        required: true,
                    },
                    manufacturer: {
                        required: true,
                    },
                    invoice_no: {
                        required: true,
                    },
                    serial_no: {
                        required: true,
                    },
                    asset_image: {
                        required: true,
                    },


                },
                messages: {
                    asset_name: {
                        required: "This field is required.",
                    },
                    company_asset_code: {
                        required: "This field is required.",
                    },
                    asset_category_id: {
                        required: "This field is required.",
                    },
                    is_working: {
                        required: 'This field is required.',
                    },
                    department_id: {
                        required: 'Please select department id.',
                    },

                    employee_id: {
                        required: "Please select employee.",
                    },
                    purchase_date: {
                        required: "This field is required.",
                    },
                    warranty_date: {
                        required: "This field is required.",
                    },
                    manufacturer: {
                        required: 'This field is required.',
                    },
                    invoice_no: {
                        required: 'This field is required.',
                    },
                    serial_no: {
                        required: 'This field is required.',
                    },
                    asset_image: {
                        required: 'Please select asset image.',
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
                    url: "{{ route('assets_masters.edit-assets') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#asset_image").addClass('ignore');
                        $("#assets_id").val(result.id);
                        $("#asset_name").val(result.asset_name);
                        $("#company_asset_code").val(result.company_asset_code);
                        $("#asset_category_id").val(result.asset_category_id);
                        $("#store_logo").text(result.asset_image);
                        $("#old_file").val(result.asset_image);
                        $("#is_working").val(result.is_working);
                        $("#department_id").val(result.department_id);
                        $("#employee_id").val(result.employee_id);

                        $("#purchase_date").val(result.purchase_date);
                        $("#warranty_date").val(result.warranty_date);
                        $("#manufacturer").val(result.manufacturer);
                        $("#invoice_no").val(result.invoice_no);
                        $("#serial_no").val(result.serial_no);
                        $("#myLargeModalLabel").text("Edit Asset Detail")
                        $("#add-edit-btn").text("Update");
                        let formaction = '{{ route('assets_masters.update-assets') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }

                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Asset");
                $("#store_logo").text('');

                $("#add-edit-btn").text("Add");
                $('#asset_form').trigger("reset");
                let formaction = '{{ route('assets_masters.store-assets') }}';
                $("#add-edit-btn").attr("formaction", formaction);
                $("#asset_image").removeClass('ignore');


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
                            url: "{{ route('assets_masters.delete-assets') }}",
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
                    url: "{{ route('assets_masters.get-assets') }}",
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
                        data: "asset_name",
                        orderable: true,
                        name: "asset_name" /*,width:"20%"*/
                    },

                    {
                        data: "category_name",
                        orderable: true,
                        name: "category_name",
                        width: "15%"
                    },
                    {
                        data: "company_asset_code",
                        orderable: true,
                        name: "company_asset_code",
                        width: "15%"
                    },
                    {
                        data: "is_working",
                        orderable: true,
                        name: "is_working" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "department",
                        orderable: true,
                        name: "department" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "full_name",
                        orderable: true,
                        name: "full_name" /*,width:"20%"*/ ,
                        width: "25%"

                    },

                    {
                        data: "purchase_date",
                        orderable: true,
                        name: "purchase_date" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "warranty_date",
                        orderable: true,
                        name: "warranty_date" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "manufacturer",
                        orderable: true,
                        name: "manufacturer" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "invoice_no",
                        orderable: true,
                        name: "invoice_no" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "serial_no",
                        orderable: true,
                        name: "serial_no" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "asset_image",
                        orderable: true,
                        name: "asset_image" /*,width:"20%"*/ ,
                        width: "25%"

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
