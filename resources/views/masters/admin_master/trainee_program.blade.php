@extends('layout.layout')
@section('content')

    <!--  BEGIN CONTENT AREA  -->
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
                            </svg>Add Training Programme </button>


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
                                    <h5 class="modal-title" id="myLargeModalLabel">Add Training Programme </h5>
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
                                <form id="trainee_program_form" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row" style="padding: 10px;">
                                        <input type="hidden" id="old_file" name="old_file">
                                        <input type="hidden" id="id" name="id">

                                        <div class="col-md-6 form-group">
                                            <label> Training Name *</label>
                                            <input type="text" name="training_name" id="training_name"
                                                class="form-control" placeholder="Training Name">
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
                                            <label>Select Department </label>
                                            <select name="department_id" id="department_id"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Department'>

                                                </option>

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Select Training Category *</label>
                                            <select name="training_category" id="training_category"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select location...'>
                                                <option value="" disabled>Select training category</option>
                                                <option value="Induction">Induction</option>
                                                <option value="Skill Development">Skill Development</option>
                                                <option value="Statutory">Statutory</option>
                                                <option value="Product">Product</option>
                                                <option value="General">General</option>

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label> Select Trainer(Vendor) *</label>
                                            <select name="vendor_id" id="vendor_id" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Vendor...'>
                                                <option value="">Please select vendor
                                                </option>
                                                @foreach ($vendor_details as $vendor)
                                                    <option value="{{ $vendor->id }}">{{ $vendor->vendor_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Training Duration Days *</label>
                                            <input type="number" name="training_duration_days" id="training_duration_days"
                                                class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Training Duration Hours *</label>
                                            <input type="number" name="training_duration_hrs" id="training_duration_hrs"
                                                class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Training Topic *</label>
                                            <input type="text" name="training_topic" id="training_topic"
                                                class="form-control" placeholder="">
                                        </div>



                                        <div class="col-md-6 form-group">
                                            <label>Attach Training Document * </label>
                                            <input type="file" name="file" id="file" class="form-control"
                                                placeholder=Optional>
                                            <span id="store_logo"></span>
                                        </div>



                                        <div class="form-group" align="center"
                                            style="margin-top: 5%;  margin-left: 45%;">


                                            <button formaction="{{ route('admin_master.store-trainee-program') }}"
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
                                        <th>Training Name</th>
                                        <th> Company</th>
                                        <th> Department </th>
                                        <th>Training Category</th>
                                        <th>Trainer</th>
                                        <th>Training Duration</th>
                                        <th>Training Topic</th>
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

            

            $('#trainee_program_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    company_id: {
                        required: true,
                    },                    
                    training_name: {
                        required: true,
                        // notEqual:'complaint_from',
                    },
                    training_Category: {
                        required: true,
                    },
                    vendor_id: {
                        required: true,
                        // notEqual:'complaint_from',
                    },
                    training_duration_hrs: {
                        required: true,
                    },
                    training_duration_days: {
                        required: true,
                    },
                    training_topic: {
                        required: true,
                    },
                    
                    file: {
                        required: true,
                    },



                },
                messages: {
                    file: {
                        required: "This field is required.",
                    },
                    company_id: {
                        required: "Please select company.",
                    },
                    training_name: {
                        required: "This field is required.",
                    },
                    training_Category: {
                        required: "This field is required.",
                    },
                    vendor_id: {
                        required: "Please select trainer.",
                    },
                    training_duration_hrs: {
                        required: "This field is required.",
                    },
                    training_duration_days: {
                        required: "This field is required.",
                    },
                    training_topic: {
                        required: "This field is required.",
                    },
                    file: {
                        required: "This field is required.",
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
                            url: "{{ route('admin_master.delete-trainee-program') }}",
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
                    url: "{{ route('admin_master.edit-trainee-program') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#file").addClass('ignore');
                        $("#store_logo").text(result.training_document);
                        $("#id").val(result.id);
                        $("#old_file").val(result.training_document);
                        $("#company_id").val(result.company_id);
                        $("#training_name").val(result.training_name);
                        $("#training_category").val(result.training_category);
                        $("#vendor_id").val(result.vendor_id);
                        $("#training_duration_hrs").val(result.training_duration_hrs);
                        $("#training_duration_days").val(result.training_duration_days);
                        $("#training_topic").val(result.training_topic);                     


                        $("#company_id").change();
                        setTimeout(function() {
                            $("#department_id").val(result.department_id);
                        }, 1500);

                        $("#myLargeModalLabel").text("Edit Trainee Program")
                        $("#add-edit-btn").text("update");
                        let formaction = '{{ route('admin_master.update-trainee-program') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }

                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Trainee Program");
                $("#add-edit-btn").text("Add");
                $('#trainee_program_form').trigger("reset");
                $("#store_logo").text('');
                let formaction = '{{ route('admin_master.store-trainee-program') }}';
                $("#add-edit-btn").attr("formaction", formaction);
                $("#file").removeClass('ignore');

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
                    url: "{{ route('admin_master.get-trainee-program-record') }}",
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
                        data: "training_name",
                        orderable: true,
                        name: "training_name" /*,width:"20%"*/
                    },
                    {
                        data: "company_name",
                        orderable: true,
                        name: "company_name" /*,width:"20%"*/
                    },
                   
                    {
                        data: "department",
                        orderable: true,
                        name: "department" /*,width:"20%"*/
                    },
                    {
                        data: "training_category",
                        orderable: true,
                        name: "training_category" /*,width:"20%"*/
                    },
                    {
                        data: "vendor_name",
                        orderable: true,
                        name: "vendor_name" /*,width:"20%"*/
                    },
                    {
                        data: "training_duration",
                        orderable: true,
                        name: "training_duration" /*,width:"20%"*/
                    },
                    {
                        data: "training_topic",
                        orderable: true,
                        name: "training_topic" /*,width:"20%"*/
                    },
                    {
                        data: "training_document",
                        orderable: true,
                        name: "training_document" /*,width:"20%"*/
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
