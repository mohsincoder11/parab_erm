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
                            </svg>Add Vendor Details </button>

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
                                    <h5 class="modal-title" id="myLargeModalLabel">Add Vendor Details</h5>
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

                                <form id="vendor_details_form" method="post">
                                    @csrf
                                    <input type="hidden" id="id" name="id">
                                    <div class="row" style="padding: 10px;">
                                        <div class="col-md-6 form-group">
                                            <label> Vendor Name</label>
                                            <input type="text" name="vendor_name" id="vendor_name" class="form-control"
                                                placeholder=Category Name>
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
                                                title='Select location...'>

                                            </select>
                                        </div>



                                        <div class="col-md-6 form-group">
                                            <label>Select Department *</label>
                                            <select name="department_id" id="department_id"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Department'>

                                                </option>

                                            </select>
                                        </div>



                                        <div class="col-md-6 form-group">
                                            <label>Select Expenses Category*</label>
                                            <select name="expense_category_id" id="expense_category_id"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected>Select Expenses Category </option>
                                                @foreach ($expense_category as $expense_category)
                                                    <option value="{{ $expense_category->id }}">
                                                        {{ $expense_category->category }}
                                                    </option>
                                                @endforeach


                                            </select>
                                        </div>



                                        <div class="col-md-6 form-group">
                                            <label>Select Vendor Category*</label>
                                            <select name="vendor_category_id" id="vendor_category_id"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Category...'>
                                                <option value="" disabled selected>Select Vendor Category </option>
                                                @foreach ($vendor_category as $vendor_category)
                                                    <option value="{{ $vendor_category->id }}">
                                                        {{ $vendor_category->vendor_category_name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Vendor Address</label>
                                            <textarea name="address" id="address" class="form-control" placeholder=""></textarea>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Vendor PAN </label>
                                            <input type="text" name="pan" id="pan" class="form-control"
                                                placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Vendor GSTN </label>
                                            <input type="text" name="gst_no" id="gst_no" class="form-control"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Vendor Contact No </label>
                                            <input type="number" name="contact_no" id="contact_no" class="form-control"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Contact Person </label>
                                            <input type="text" name="contact_person" id="contact_person"
                                                class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Unit Of Supply</label>
                                            <input type="text" name="unit_of_supply" id="unit_of_supply"
                                                class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Vendor Code </label>
                                            <input type="text" name="vendor_code" id="vendor_code"
                                                class="form-control" placeholder="">
                                        </div>

                                        <div class="form-group" align="center"
                                            style="margin-top: 5%;  margin-left: 45%;">

                                            <button formaction="{{ route('admin_master.store-vendor-details') }}"
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
                            <table  class="table table-hover non-hover datatable_server" style="width:100%">
                                <thead>
                                    <tr>
                                    <tr>
                                        <th>Sr.no</th>
                                        <th>Vendor Name</th>
                                        <th>Company</th>
                                        <th>Location</th>
                                        <th>Department</th>
                                        <th>Expences Category</th>
                                        <th>Vendor Category</th>
                                        <th>Address</th>
                                        <th>PAN</th>
                                        <th>GSTN</th>
                                        <th>Contact Number</th>
                                        <th>Contact Person</th>
                                        <th>Unit of Supply</th>
                                        <th>Vendor Code</th>
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

    <script>
        $(document).ready(function() {
            $(document).on('change', '#company_id', function() {
                $.ajax({
                    url: "{{ route('get_department_location_by_company') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        company_id: $(this).val(),
                    },
                    success: function(result) {
                        console.log(result);

                        $("#department_id").empty();
                        $("#location_id").empty();
                        $("#location_id").append(
                            '<option value="" disabled selected>Select Department</option>');
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

            $('#vendor_details_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    vendor_name: {
                        required: true,
                    },
                    company_id: {
                        required: true,
                    },
                    location_id: {
                        required: true,
                        // notEqual:'complaint_from',
                    },
                    department_id: {
                        required: true,
                    },
                    expense_category_id: {
                        required: true,
                        // notEqual:'complaint_from',
                    },
                    vendor_category_id: {
                        required: true,
                    },
                    address: {
                        required: true,
                    },
                    pan: {
                        required: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    gst_no: {
                        required: true,
                        minlength: 15,
                        maxlength: 15
                    },
                    contact_no: {
                        required: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    contact_person: {
                        required: true,
                        // notEqual:'complaint_from',
                    },
                    unit_of_supply: {
                        required: true,
                    },
                    vendor_code: {
                        required: true,
                    },



                },
                messages: {
                    vendor_name: {
                        required: "This field is required.",
                    },
                    company_id: {
                        required: "Please select company.",
                    },
                    location_id: {
                        required: "Please select location.",
                        // notEqual:"Please select other employee."
                    },
                    department_id: {
                        required: 'Please select department.',
                    },
                    expense_category_id: {
                        required: "Please select expense category.",
                        // notEqual:"Please select other employee."
                    },
                    vendor_details_id: {
                        required: 'Please select vendor category.',
                    },
                    address: {
                        required: "This field is required.",
                    },
                    pan: {
                        required: "This field is required.",
                        minlength: "Please enter 10 digit number.",
                        maxlength: "Please enter 10 digit number.",
                    },
                    gst_no: {
                        required: "This field is required.",
                        minlength: "Please enter 15 digit number.",
                        maxlength: "Please enter 15 digit number.",
                    },
                    contact_no: {
                        required: 'This field is required.',
                        minlength: "Please enter 10 digit number.",
                        maxlength: "Please enter 10 digit number.",

                    },
                    contact_person: {
                        required: "This field is required.",
                        // notEqual:"Please select other employee."
                    },
                    unit_of_supply: {
                        required: 'This field is required.',
                    },
                    vendor_code: {
                        required: 'This field is required.',
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
                            url: "{{ route('admin_master.delete-vendor-details') }}",
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
                    url: "{{ route('admin_master.edit-vendor-details') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#id").val(result.id);
                        $("#company_id").val(result.company_id);
                        $("#vendor_name").val(result.vendor_name);
                        $("#expense_category_id").val(result.expense_category_id);
                        $("#vendor_category_id").val(result.vendor_category_id);
                        $("#unit_of_supply").val(result.unit_of_supply);
                     
                        $("#address").val(result.address);
                        $("#pan").val(result.pan);
                        $("#gst_no").val(result.gst_no);
                        $("#contact_no").val(result.contact_no);
                        $("#contact_person").val(result.contact_person);
                        $("#vendor_code").val(result.vendor_code);
                        
                        $("#company_id").change();
                        setTimeout(function() {
                            $("#location_id").val(result.location_id);
                            $("#department_id").val(result.department_id);
                        }, 1500);

                        $("#myLargeModalLabel").text("Edit Vendor Details")
                        $("#add-edit-btn").text("update");
                        let formaction = '{{ route('admin_master.update-vendor-details') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }

                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Vendor Details");
                $("#add-edit-btn").text("Add");
                $('#vendor_details_form').trigger("reset");
                $("#store_logo").text('');
                let formaction = '{{ route('admin_master.store-vendor-details') }}';
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
                    url: "{{ route('admin_master.get-vendor-details-record') }}",
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
                        data: "vendor_name",
                        orderable: true,
                        name: "vendor_name" /*,width:"20%"*/
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
                        data: "category",
                        orderable: true,
                        name: "category" /*,width:"20%"*/
                    },
                    {
                        data: "vendor_category_name",
                        orderable: true,
                        name: "vendor_category_name" /*,width:"20%"*/
                    },
                    {
                        data: "address",
                        orderable: true,
                        name: "address" /*,width:"20%"*/
                    },
                    {
                        data: "pan",
                        orderable: true,
                        name: "pan" /*,width:"20%"*/
                    },
                    {
                        data: "gst_no",
                        orderable: true,
                        name: "gst_no" /*,width:"20%"*/
                    },
                    {
                        data: "contact_no",
                        orderable: true,
                        name: "contact_no" /*,width:"20%"*/
                    },
                    {
                        data: "contact_person",
                        orderable: true,
                        name: "contact_person" /*,width:"20%"*/
                    },
                    {
                        data: "unit_of_supply",
                        orderable: true,
                        name: "unit_of_supply" /*,width:"20%"*/
                    },
                    {
                        data: "vendor_code",
                        orderable: true,
                        name: "vendor_code" /*,width:"20%"*/
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
