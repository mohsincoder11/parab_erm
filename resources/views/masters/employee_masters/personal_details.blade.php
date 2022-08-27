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
                            </svg>Add Personal Detalis</button>


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
                                    <h5 class="modal-title" id="myLargeModalLabel">Add New Personal Details</h5>
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

                                <form method="post" id="personal_detail_form">
                                    @csrf
                                    <div class="row" style="padding: 10px;">
                                        <input type="hidden" id="id" name="id">
                                        <div class="col-md-6 form-group">
                                            <label>Salutation<span class="required">*</span></label>
                                            <select name="salutation" id="salutation" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Company Type...'>
                                                <option value="" disabled selected> Select Salutation</option>
                                                <option value="Mr">Mr</option>
                                                <option value="Miss">Miss</option>
                                                <option value="Ms">Ms</option>
                                                <option value="Mrs">Mrs</option>

                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Employee Name<span class="required">*</span></label>
                                            <input type="text" name="employee_name" id="employee_name" required
                                                class="form-control" placeholder=" Employee Name">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Date of Birth<span class="required">*</span></label>
                                            <input type="date" name="dob" id="dob" class="form-control date"
                                                value="">
                                        </div>


                                        <div class="col-md-6 form-group">
                                            <label>Address </label>
                                            <textarea name="address" id="address" class="form-control" placeholder=Address></textarea>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Locality</label>
                                            <input type="text" name="locality" id="locality" class="form-control"
                                                placeholder=Locality></textarea>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>City<span class="required">*</span></label>
                                            <input type="text" name="city" id="city" class="form-control"
                                                placeholder=" City">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Pincode<span class="required">*</span></label>
                                            <input type="number" name="pincode" id="pincode" required
                                                class="form-control" placeholder="Pincode">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Contact No.<span class="required">*</span></label>
                                            <input type="number" name="contact_no" id="contact_no" required
                                                class="form-control" placeholder="Contact No.">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Gender<span class="required">*</span></label>
                                            <select name="gender" id="gender" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Gender...'>
                                                <option value="" disabled selected> Select Gender</option>
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>
                                                <option value="Other">Other</option>

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Blood Group</label>
                                            <input type="text" name="blood_group" id="blood_group"
                                                class="form-control" placeholder="Blood Group">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Personal Email id </label>
                                            <input type="email" name="personal_email" id="personal_email"
                                                class="form-control" placeholder="">
                                        </div>


                                        <div class="col-md-6 form-group">
                                            <label>Marital Status</label>
                                            <select name="marital_status" id="marital_status"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected> Select Marital Status</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Unmarried">Unmarried</option>

                                            </select>
                                        </div>


                                         <div class="col-md-6 form-group hide_show_div">
                                            <label>Spouse or Souse Name</label>
                                            <input type="text" name="spouse_name" id="spouse_name"
                                                class="form-control" placeholder=" Name">
                                        </div>
                                        <div class="col-md-6 form-group hide_show_div">
                                            <label>Date of Marriage</label>
                                            <input type="date" name="marriage_date" id="marriage_date"
                                                class="form-control date" value="">
                                        </div>


                                       
                                        <div class="col-md-6 form-group hide_show_div">
                                            <label>Spouse or Emergency Mobile No. </label>
                                            <input type="number" name="emergency_contact_no" id="emergency_contact_no"
                                                class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>PAN No.<span class="required">*</span></label>
                                            <input type="text" name="pan_no" id="pan_no" required
                                                class="form-control text-uppercase" placeholder="PAN No.">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Adhar No.<span class="required">*</span></label>
                                            <input type="Number" name="adhar_no" id="adhar_no" required
                                                class="form-control" placeholder="Adhar No.">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Driving License No. </label>
                                            <input type="text" name="driving_license_no" id="driving_license_no"
                                                class="form-control" placeholder="Driving License No. ">
                                        </div>

                                        <div class="form-group" align="center" style="margin-top: 5%; padding-left:45%;">

                                            <button formaction="{{ route('employees_masters.store-personal-details') }}"
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
                                <table class="table table-hover non-hover datatable_server nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Employee Name </th>
                                            <th>Date of Birth </th>
                                            <th>Locality  </th>
                                            <th>Address  </th>
                                            <th>Mobile No</th>
                                            <th>Gender</th>
                                            <th>Blood Group</th>
                                            <th>Marital Status</th>
                                            <th>Spouse or Souse Name </th>
                                            <th>Date of Marriage</th>
                                            <th>Personal Mail Id</th>
                                            <th>Spouse or Emergency Mobile No. </th>
                                            <th>Pan No</th>
                                            <th>Aadhaar No</th>
                                            <th>Driving License No.</th>
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
jQuery.validator.addMethod("noSpace", function(value, element) { 
    var regex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/; 
    return regex.test(value); 
}, "No space allowed.");
            $('#personal_detail_form').validate({

                //debug:true,
                ignore: ".ignore",
                rules: {
                    salutation: {
                        required: true,
                    },
                    employee_name: {
                        required: true,
                    },
                    dob: {
                        required: true,
                    },
                    // address: {
                    //     required: true,
                    // },
                    city: {
                        required: true,
                    },
                    pincode: {
                        required: true,
                        minlength: 6,
                        maxlength: 6
                    },
                    contact_no: {
                        required: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    gender: {
                        required: true,
                    },
                    // blood_group: {
                    //     required: true,
                    //     minlength:2,
                    //     maxlength:3

                    // },
                    // marital_status: {
                    //     required: true,
                    // },
                    // spouse_name: {
                    //     required: true,
                    // },

                    // marriage_date: {
                    //     required: true,
                    // },
                    // personal_email: {
                    //     required: true,
                    // },
                    // emergency_contact_no: {
                    //     required: true,
                    //     minlength:10,
                    //     maxlength:10
                    // },
                    pan_no: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                    },
                    adhar_no: {
                        required: true,
                        minlength: 12,
                        maxlength: 12
                    },
                    // driving_license_no: {
                    //     required: true,
                    // },


                },
                messages: {
                    salutation: {
                        required: "Please select a option.",
                    },
                    employee_name: {
                        required: "This field is required.",
                    },
                    dob: {
                        required: "This field is required.",
                    },
                    // address: {
                    //     required: "This field is required.",
                    // },
                    city: {
                        required: 'This field is required.',
                    },
                    pincode: {
                        required: 'This field is required.',
                        minlength: 'Please enter valid pincode.',
                        maxlength: 'Please enter valid pincode.',

                    },
                    contact_no: {
                        required: 'This field is required.',
                        minlength: 'Please enter valid contact number.',
                        maxlength: 'Please enter valid contact number.',
                    },
                    gender: {
                        required: "This field is required.",
                    },
                    // blood_group: {
                    //     required: "This field is required.",
                    //     minlength:'Please enter valid blood group.',
                    //     maxlength:'Please enter valid blood group.',

                    // },
                    // marital_status: {
                    //     required: "This field is required.",
                    // },
                    // spouse_name: {
                    //     required: 'This field is required.',
                    // },

                    // marriage_date: {
                    //     required: 'This field is required.',
                    // },
                    // personal_email: {
                    //     required: 'This field is required.',
                    // },
                    //     emergency_contact_no: {
                    //         required: "This field is required.",
                    //         minlength:'Please enter valid contact number.',
                    //         maxlength:'Please enter valid contact number.',
                    //    },
                    pan_no: {
                        required: "This field is required.",
                        minlength: 'Please enter valid pan number.',
                        maxlength: 'Please enter valid pan number.',

                    },
                    adhar_no: {
                        required: "This field is required.",
                        minlength: 'Please enter valid adhar number.',
                        maxlength: 'Please enter valid adhar number.',

                    },
                    // driving_license_no: {
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

            $(document).on('change', '#marital_status', function() {
                if ($(this).val() == 'Single') {
                    $(".hide_show_div").hide();                 

                } else {
                    $(".hide_show_div").show();
                }

            })

            $(document).on('click', '.edit', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-personal-details') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#id").val(result.id);

                        $("#employee_name").val(result.employee_name);
                        $("#salutation").val(result.salutation);

                        $("#dob").val(result.dob);
                        $("#address").val(result.address);
                        $("#city").val(result.city);
                        $("#pincode").val(result.pincode);
                        $("#contact_no").val(result.contact_no);

                        $("#gender").val(result.gender);
                        $("#blood_group").val(result.blood_group);
                        $("#marital_status").val(result.marital_status);
                        $("#spouse_name").val(result.spouse_name);
                        $("#marriage_date").val(result.marriage_date);
                        $("#personal_email").val(result.personal_email);

                        $("#emergency_contact_no").val(result.emergency_contact_no);
                        $("#pan_no").val(result.pan_no);
                        $("#adhar_no").val(result.adhar_no);
                        $("#driving_license_no").val(result.driving_license_no);

                        $("#myLargeModalLabel").text("Edit Salary Details");
                        $("#add-edit-btn").text("Update");
                        let formaction =
                            '{{ route('employees_masters.update-personal-details') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }
                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Salary Details");
                $("#add-edit-btn").text("Add");
                $('#personal_detail_form').trigger("reset");
                let formaction = '{{ route('employees_masters.store-personal-details') }}';
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
                            url: "{{ route('employees_masters.delete-personal-details') }}",
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
                    url: "{{ route('employees_masters.get-personal-details') }}",
                    type: "get",
                    data: function(d) {}
                },
                columns: [
                    {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
                    {
                        data: "DT_RowIndex",
                        orderable: true,
                        name: "DT_RowIndex",
                        width: "5%"
                    },

                    {
                        data: "employee_name",
                        orderable: true,
                        name: "employee_name" /*,width:"20%"*/
                    },
                    {
                        data: "dob",
                        orderable: true,
                        name: "dob",
                        width: "15%"
                    },
                    {
                        data: "locality",
                        orderable: true,
                        name: "locality" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "address",
                        orderable: true,
                        name: "address" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                   
                    
                    {
                        data: "contact_no",
                        orderable: true,
                        name: "contact_no" /*,width:"20%"*/
                    },
                    {
                        data: "gender",
                        orderable: true,
                        name: "gender" /*,width:"20%"*/
                    },
                    {
                        data: "blood_group",
                        orderable: true,
                        name: "blood_group",
                        width: "15%"
                    },
                    {
                        data: "marital_status",
                        orderable: true,
                        name: "marital_status" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "spouse_name",
                        orderable: true,
                        name: "spouse_name" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "marriage_date",
                        orderable: true,
                        name: "marriage_date" /*,width:"20%"*/
                    },
                    {
                        data: "personal_email",
                        orderable: true,
                        name: "personal_email" /*,width:"20%"*/
                    },
                    {
                        data: "emergency_contact_no",
                        orderable: true,
                        name: "emergency_contact_no" /*,width:"20%"*/
                    },
                    {
                        data: "pan_no",
                        orderable: true,
                        name: "pan_no",
                        width: "15%"
                    },
                    {
                        data: "adhar_no",
                        orderable: true,
                        name: "adhar_no" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "driving_license_no",
                        orderable: true,
                        name: "driving_license_no" /*,width:"20%"*/ ,
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
