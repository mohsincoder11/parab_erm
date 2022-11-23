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
                            </svg>Add Outward </button>

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
                                    <h5 class="modal-title" id="myLargeModalLabel">Add Outward</h5>
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

                                <form id="outward_form" method="post">
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
                                            <label>Select Department *</label>
                                            <select name="department_id" id="department_id"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Department'>

                                                </option>

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Outward Type *</label>

                                            <select name="outward_type" id="outward_type" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Outward Type...'>
                                                <option value="" disabled selected>Select Outward Type</option>
                                                <option value="Correspondence">Correspondence</option>
                                                <option value="Complaint">Complaint</option>
                                                <option value="Application">Application</option>
                                                <option value="Statutory">Statutory</option>
                                                <option value="HR Document">HR Document</option>
                                                <option value="Admin Document">Admin Document</option>
                                                <option value="Inward Reply">Inward Reply</option>
                                               
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Select Outward Date *</label>
                                            <input type="date" name="outward_date" id="outward_date" required class="form-control"
                                                placeholder="" value="{{ date('Y-m') }}">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Seelct Inward Number</label>

                                            <select name="inward_number" id="inward_number" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Outward Type...'>
                                                <option value="" disabled selected>Select Inward Number</option>
                                                @foreach ($inward_number as $inward_number)
                                                <option value="{{$inward_number->inward_number}}">{{$inward_number->inward_number}}</option>

                                                @endforeach
                                                
                                            </select>
                                        </div>                                       

                                        <div class="col-md-6 form-group">
                                            <label>To Name *</label>
                                            <input type="text" name="to_name" id="to_name" class="form-control"
                                                placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Courier Name *</label>
                                            <input type="text" name="courier_name" id="courier_name"
                                                  class="form-control"
                                                placeholder="">
                                        </div>
                                        
                                        <div class="col-md-6 form-group">
                                            <label> AWB NO. *</label>
                                            <input type="text" name="awb_number" id="awb_number"
                                                value=""  class="form-control"
                                                placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Employee Name *</label>
                                            <input name="employee_name" id="employee_name" class="form-control "
                                                placeholder="Enter employee name" autocomplete="off">
                                            <input type="hidden" name="employee_id" id="employee_id">

                                        </div>


                                        <div class="col-md-6 form-group">
                                            <label> outward number *</label>
                                            <input type="text" name="outward_number" id="outward_number"
                                                value="O-{{ time() }}" readonly class="form-control"
                                                placeholder="">
                                        </div>

                                        <div class="form-group" align="center"
                                            style="margin-top: 5%;  margin-left: 45%;">

                                            <button formaction="{{ route('admin_process.inward_outward.store-outward') }}"
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
                                        <th>Outward Type</th>
                                        <th>Outward Date</th>
                                        <th>Inward Number</th>
                                        <th>To Name</th>

                                        <th>Courier Name</th>
                                        <th>AWB Number</th>
                                        <th>Employee Name</th>
                                        <th>Outward Number</th>


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

            $('#outward_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {

                    company_id: {
                        required: true,
                    },
                    location_id: {
                        required: true,
                    },
                    department_id: {
                        required: true,
                    },
                    outward_type: {
                        required: true,
                    },
                    
                    outward_date: {
                        required: true,
                    },
                    to_name: {
                        required: true,
                    },
                    courier_name: {
                        required: true,
                    },
                    awb_number: {
                        required: true,
                    },
                    employee_id: {
                        required: true,
                    },
                    outward_number: {
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
                    department_id: {
                        required: 'Please select department.',
                    },
                    outward_type: {
                        required: "Please select outward type.",
                        // notEqual:"Please select other employee."
                    },
                  
                    outward_date: {
                        required: 'Please select date.',
                    },
                    inward_number: {
                        required: 'This field is required.',

                    },
                    to_name: {
                        required: "This field is required.",

                    },
                    courier_name: {
                        required: "This field is required.",

                    },
                    awb_number: {
                        required: "This field is required.",

                    },
                    employee_id: {
                        required: "This field is required.",

                    },
                    outward_number: {
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
                            url: "{{ route('admin_process.inward_outward.delete-outward') }}",
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
                    url: "{{ route('admin_process.inward_outward.edit-outward') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#id").val(result.id);
                        $("#company_id").val(result.company_id);
                        $("#outward_type").val(result.outward_type);
                        $("#outward_date").val(result.outward_date);
                        $("#inward_number").val(result.inward_number);
                        $("#to_name").val(result.to_name);
                        $("#employee_id").val(result.employee_id);
                        $("#awb_number").val(result.awb_number);
                        $("#courier_name").val(result.courier_name);
                        $("#outward_number").val(result.outward_number);

                        $("#company_id").change();
                        setTimeout(function() {
                            $("#location_id").val(result.location_id);
                            $("#department_id").val(result.department_id);
                        }, 1500);

                        $("#myLargeModalLabel").text("Edit Outward")
                        $("#add-edit-btn").text("update");
                        let formaction =
                            '{{ route('admin_process.inward_outward.update-outward') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }

                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Outward");
                $("#add-edit-btn").text("Add");
                $('#outward_form').trigger("reset");
                $("#store_logo").text('');
                let formaction = '{{ route('admin_process.inward_outward.store-outward') }}';
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
                    url: "{{ route('admin_process.inward_outward.get-outward') }}",
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
                        data: "outward_type",
                        orderable: true,
                        name: "outward_type" /*,width:"20%"*/
                    },
                    {
                        data: "outward_date",
                        orderable: true,
                        name: "outward_date" /*,width:"20%"*/
                    },
                    {
                        data: "inward_number",
                        orderable: true,
                        name: "inward_number" /*,width:"20%"*/
                    },
                    {
                        data: "to_name",
                        orderable: true,
                        name: "to_name" /*,width:"20%"*/
                    },
                    {
                        data: "courier_name",
                        orderable: true,
                        name: "courier_name" /*,width:"20%"*/
                    },
                    {
                        data: "awb_number",
                        orderable: true,
                        name: "awb_number" /*,width:"20%"*/
                    },
                    {
                        data: "employee_name",
                        orderable: true,
                        name: "employee_name" /*,width:"20%"*/
                    },
                    {
                        data: "outward_number",
                        orderable: true,
                        name: "outward_number" /*,width:"20%"*/
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
