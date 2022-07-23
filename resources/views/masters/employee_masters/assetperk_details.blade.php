@extends('layout.layout')
@section('content')
        <div id="content" class="main-content">
            <div class="layout-px-spacing">


                <div style="margin-top: 3%;">
                    @include('layout.alerts')

                    <div>
                        <div>
                            <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal"
                                data-target=".add-edit_modal"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>Add Assets/Perk Details</button>


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
                        <div class="modal fade add-edit_modal" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel">Add Assets/Perk Details</h5>
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


                                    <form method="post" id="assetperk_form">
                                        @csrf
                                        <div class="row" style="padding: 10px;">
                                            <input type="hidden" name="id" id="id">
                                            <div class="col-md-6 form-group">
                                                <label>Employee Name<span class="required">*</span></label>
                                                <input name="employee_name" id="employee_name" class="form-control "
                                                    placeholder="Enter employee name" autocomplete="off">
                                                <input type="hidden" name="employee_id" id="employee_id">
    
                                            </div>
                                            @php
                                                $company = get_company_name_and_id();
                                            @endphp
                                            <div class="col-md-6 form-group">
                                                <label>Company <span class="required">*</span></label>
                                                <select name="company_id" id="company_id" class="form-control selectpicker"
                                                    data-live-search="true" data-live-search-style="begins"
                                                    title='Select Company Type...'>
                                                    <option value="" disabled selected>Company Type</option>
                                                    @foreach ($company as $c)
                                                        <option value="{{ $c->id }}">{{ $c->company_name }}</option>
                                                    @endforeach
    
                                                </select>
                                            </div>
    
                                            <div class="col-md-6 form-group">
                                                <label>Employee code<span class="required">*</span></label>
                                                <input type="text" name="emp_code" id="emp_code" required
                                                    class="form-control" placeholder="">
                                            </div>

                                        <div class="col-md-6 form-group">
                                            <label>Assets Or Perk Name</label>
                                            <input type="text" name="perk_name" id="perk_name"
                                                class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Assets Sr No.</label>
                                            <input type="number" name="sr_no" id="sr_no"
                                                class="form-control" placeholder="">
                                        </div>


                                        <div class="col-md-6 form-group">
                                            <label>Date of Issue</label>
                                            <input type="date" name="issue_date" id="issue_date"
                                                class="form-control date" value="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Asset Return Date</label>
                                            <input type="date" name="return_date" id="return_date"
                                                class="form-control date" value="">
                                        </div>
                                     
                                        <div class="col-md-6 form-group">
                                            <label>Perk Value</label>
                                            <input type="text" name="value" id="value"
                                                class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Perk Validity</label>
                                            <input type="text" name="validity" id="validity"
                                                class="form-control" placeholder="">
                                        </div>
                                      
                                        <div class="form-group" align="center" style="margin-top: 5%; padding-left:45%;">

                                            <button formaction="{{ route('employees_masters.store-assetperk-details') }}"
                                                type="submit" id="add-edit-btn" name="action_button"
                                                class="btn btn-warning">Add</button>
                                        </div>

                                    </div>
                                </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- model end -->


                   



                    <!--bulk delete Model Start -->
                    {{-- <div>
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
                    </div> --}}
                    <!-- model end -->

                    <!--view Model Start -->
                    {{-- <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myExtraLargeModalLabel">Promotion Info.</h5>
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
                               
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                        Close</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- model end -->
                    <div class="row" id="cancel-row">

                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-6">
                                <div class="table-responsive mb-4 mt-4">
                                    <table class="table table-hover non-hover datatable_server" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Employee Name </th>
                                                <th>Employee Code </th>
    
                                                <th>Asset  or Perk Name </th>
                                                <th>Asset Sr No</th>
                                                <th>Date of Issue </th>
                                                <th>Asset Return Date </th>
                                                <th>Perk Value </th>
                                                <th>Perk Validity </th>
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

            $('#assetperk_form').validate({

                //debug:true,
                ignore: ".ignore",
                rules: {
                    employee_name: {
                        required: true,
                    },
                    emp_code: {
                        required: true,
                    },
                    company_id: {
                        required: true,
                    },

                    // perk_name: {
                    //     required: true,
                    // },
                    // sr_no: {
                    //     required: true,
                    // },
                    // issue_date: {
                    //     required: true,
                    // },
                    // return_date: {
                    //     required: true,
                    // },
                    // value: {
                    //     required: true,
                    // },
                    // validity: {
                    //     required: true,
                    // },

                },
                messages: {
                    employee_name: {
                        required: "This field is required.",
                    },
                    emp_code: {
                        required: "This field is required.",
                    },
                    company_id:{
                        required: "This field is required.",


                    },
                    // perk_name: {
                    //     required: "This field is required.",
                    // },
                    // sr_no: {
                    //     required: "This field is required.",
                    // },
                    // issue_date: {
                    //     required: "Please select issue date.",
                    // },
                    // return_date: {
                    //     required: 'Please select return date.',
                    // },
                    // value: {
                    //     required: 'This field is required.',
                    // },
                    // validity: {
                    //     required: 'This field is required.',
                    // },

                },
                errorElement: 'label',
                errorPlacement: function(error, element) {
                    element.closest('.form-group').append(error);

                },
                submitHandler: function(form) {
                    $("#add-edit-btn").addClass('disabled');

                    // $("#load_screen").show();
                    return true;
                }
            });

            $(document).on('click', '.edit', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-assetperk-details') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#id").val(result.id);
                        $("#perk_name").val(result.perk_name);
                        $("#sr_no").val(result.sr_no);
                        $("#issue_date").val(result.issue_date);
                        $("#return_date").val(result.return_date);
                        $("#value").val(result.value);
                        $("#validity").val(result.validity);
                        $("#myLargeModalLabel").text("Edit Asset Perk Details");
                        $("#add-edit-btn").text("Update");
                        let formaction =
                            '{{ route('employees_masters.update-assetperk-details') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }
                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Asset Perk Details");
                $("#add-edit-btn").text("Add");
                $('#assetperk_form').trigger("reset");
                let formaction = '{{ route('employees_masters.store-assetperk-details') }}';
                $("#add-edit-btn").attr("formaction", formaction);
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
                            url: "{{ route('employees_masters.delete-assetperk-details') }}",
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
                    url: "{{ route('employees_masters.get-assetperk-details') }}",
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
                        data: "employee_name",
                        orderable: true,
                        name: "employee_name" /*,width:"20%"*/
                    }, {
                        data: "emp_code",
                        orderable: true,
                        name: "emp_code" /*,width:"20%"*/
                    }, {
                        data: "perk_name",
                        orderable: true,
                        name: "perk_name" /*,width:"20%"*/
                    },
                    {
                        data: "sr_no",
                        orderable: true,
                        name: "sr_no",
                        width: "15%"
                    },
                    {
                        data: "issue_date",
                        orderable: true,
                        name: "issue_date" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "return_date",
                        orderable: true,
                        name: "return_date" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "value",
                        orderable: true,
                        name: "value" /*,width:"20%"*/
                    },
                    {
                        data: "validity",
                        orderable: true,
                        name: "validity" /*,width:"20%"*/
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
