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
                            </svg>Add Qualification Detalis</button>


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
                                    <h5 class="modal-title" id="myLargeModalLabel">Add New Qualification Details</h5>
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

                                <form method="post" id="qualification_form">
                                    @csrf
                                    <div class="row" style="padding: 10px;">
                                        <input type="hidden" id="id" name="id">
                                        <div class="col-md-6 form-group">
                                            <label>Employee Name<span class="required">*</span></label>
                                            <input name="employee_name" id="employee_name" class="form-control "
                                                placeholder="Enter employee name" autocomplete="off">
                                            <input type="hidden" name="employee_id" id="employee_id">

                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Employee code<span class="required">*</span></label>
                                            <input type="text" name="emp_code" id="emp_code" required
                                                class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Basic Educational Qualification<span class="required">*</span></label>
                                            <select name="basic_qualification" id="basic_qualification"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected> Select Graduation</option>
                                                <option value="ba">BA</option>
                                                <option value="bsc">BSC</option>

                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Graduation</label>
                                            <select name="graduation" id="graduation" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Company Type...'>
                                                <option value="" disabled selected> Select Graduation</option>
                                                <option value="ba">BA</option>
                                                <option value="bsc">BSC</option>

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Graduation Year</label>
                                            <select name="graduation_year" id="graduation_year"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected> Select Graduation Year</option>
                                                @for ($i = date('Y'); $i > 1960; $i--)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor


                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label> Post Graduation</label>
                                            <select name="post_graduation" id="post_graduation"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected> Select Post Graduation</option>
                                                <option value="mba">MBA</option>
                                                <option value="ma organization">MA</option>

                                            </select>
                                        </div>


                                        <div class="col-md-6 form-group">
                                            <label> Post Graduation Year</label>
                                            <select name="post_graduation_year" id="post_graduation_year"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected> Select Post Graduation Year
                                                </option>
                                                @for ($i = date('Y'); $i > 1960; $i--)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Professional Qualification</label>
                                            <select name="professional_qualification" id="professional_qualification"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected> Select Professional Qualification
                                                </option>
                                                <option value="industrial training">Industrial Training</option>
                                                <option value="industrial training">Industrial Training</option>


                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>University or Academy </label>
                                            <select name="university" id="university" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Company Type...'>
                                                <option value="" disabled selected> Select University or Academy
                                                </option>
                                                <option value="sgbau">SGBAU</option>
                                                <option value="sgbau">SGBAU</option>

                                            </select>
                                        </div>



                                        <div class="form-group" align="center" style="margin-top: 5%; padding-left:45%;">

                                            <button
                                                formaction="{{ route('employees_masters.store-qualification-details') }}"
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


                <!--edit Model Start -->
                {{-- <div class="modal fade add-edit_modal" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" id="editmodel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Edit</h5>
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

                                <div class="row" style="padding: 10px;">

                                    <div class="col-md-6 form-group">
                                        <label>Graduation</label>
                                        <select name="company_type" id="company_type"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Company Type...'>
                                            <option value="" disabled selected> Select Graduation</option>
                                            <option value="corporation"></option>
                                            <option value="exempt organization"></option>
                                          
                                           
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>Graduation Year</label>
                                        <select name="company_type" id="company_type"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Company Type...'>
                                            <option value="" disabled selected> Select Graduation Year</option>
                                            <option value="corporation"></option>
                                            <option value="exempt organization"></option>
                                          
                                           
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label> Post Graduation</label>
                                        <select name="company_type" id="company_type"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Company Type...'>
                                            <option value="" disabled selected> Select Post Graduation</option>
                                            <option value="corporation"></option>
                                            <option value="exempt organization"></option>
                                          
                                           
                                        </select>
                                    </div>


                                    <div class="col-md-6 form-group">
                                        <label> Post Graduation Year</label>
                                        <select name="company_type" id="company_type"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Company Type...'>
                                            <option value="" disabled selected> Select Post Graduation Year</option>
                                            <option value="corporation"></option>
                                            <option value="exempt organization"></option>
                                          
                                           
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>Professional Qualification</label>
                                        <select name="company_type" id="company_type"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Company Type...'>
                                            <option value="" disabled selected> Select Professional Qualification</option>
                                            <option value="corporation"></option>
                                            <option value="exempt organization"></option>
                                          
                                           
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>University or Academy </label>
                                        <select name="company_type" id="company_type"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select Company Type...'>
                                            <option value="" disabled selected> Select University or Academy </option>
                                            <option value="corporation"></option>
                                            <option value="exempt organization"></option>
                                          
                                           
                                        </select>
                                    </div>


                                    <div class="form-group" align="center" style="margin-top: 5%; padding-left:45%;">

                                        <input type="submit" name="action_button" class="btn btn-warning"
                                            value=Edit />
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div> --}}
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
                                            <th>Basic Qualification </th>

                                            <th>Graduation </th>
                                            <th>Graduation Year</th>
                                            <th>Post Graduation </th>
                                            <th>Post Graduation Year</th>
                                            <th>Professional Qualification</th>
                                            <th>University or Academy</th>
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

            $('#qualification_form').validate({

                //debug:true,
                ignore: ".ignore",
                rules: {
                    employee_id: {
                        required: true,
                    },
                    // employee_name: {
                    //     required: true,
                    // },
                    emp_code: {
                        required: true,
                    },
                    basic_qualification: {
                        required: true,
                    },
                    // graduation: {
                    //     required: true,
                    // },
                    // graduation_year: {
                    //     required: true,
                    // },
                    // post_graduation: {
                    //     required: true,
                    // },
                    // post_graduation_year: {
                    //     required: true,
                    // },
                    // professional_qualification: {
                    //     required: true,
                    // },
                    // university: {
                    //     required: true,
                    // },

                },
                messages: {
                    employee_id: {
                        required: "Please type employee name and select.",
                    },
                    // employee_name: {
                    //     required: "This field is required.",
                    // },
                    emp_code: {
                        required: "This field is required.",
                    },
                    basic_qualification: {
                        required: "Please select a option.",
                    },
                    // graduation: {
                    //     required: "Please select a option.",
                    // },
                    // graduation_year: {
                    //     required: "Please select a option.",
                    // },
                    // post_graduation: {
                    //     required: "Please select a option.",
                    // },
                    // post_graduation_year: {
                    //     required: 'Please select a option.',
                    // },
                    // professional_qualification: {
                    //     required: 'Please select a option.',
                    // },
                    // university: {
                    //     required: 'Please select a option.',
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
                    url: "{{ route('employees_masters.edit-qualification-details') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {

                        $("#id").val(result.id);
                        $("#emp_code").val(result.emp_code);

                        $("#graduation").val(result.graduation);
                        $("#basic_qualification").val(result.basic_qualification);
                        $("#graduation_year").val(result.graduation_year);
                        $("#post_graduation").val(result.post_graduation);
                        $("#post_graduation_year").val(result.post_graduation_year);
                        $("#professional_qualification").val(result.professional_qualification);
                        $("#university").val(result.university);
                        $("#myLargeModalLabel").text("Edit Qualification Details");
                        $("#add-edit-btn").text("Update");
                        let formaction =
                            '{{ route('employees_masters.update-qualification-details') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }
                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Qualification Details");
                $("#add-edit-btn").text("Add");
                $('#qualification_form').trigger("reset");
                let formaction = '{{ route('employees_masters.store-qualification-details') }}';
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
                            url: "{{ route('employees_masters.delete-qualification-details') }}",
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
                    url: "{{ route('employees_masters.get-qualification-details') }}",
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
                    },
                    {
                        data: "emp_code",
                        orderable: true,
                        name: "emp_code" /*,width:"20%"*/
                    },

                    {
                        data: "basic_qualification",
                        orderable: true,
                        name: "basic_qualification" /*,width:"20%"*/
                    },
                    {
                        data: "graduation",
                        orderable: true,
                        name: "graduation" /*,width:"20%"*/
                    },
                    {
                        data: "graduation_year",
                        orderable: true,
                        name: "graduation_year",
                        width: "15%"
                    },
                    {
                        data: "post_graduation",
                        orderable: true,
                        name: "post_graduation" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "post_graduation_year",
                        orderable: true,
                        name: "post_graduation_year" /*,width:"20%"*/ ,
                        width: "25%"

                    },

                    {
                        data: "professional_qualification",
                        orderable: true,
                        name: "professional_qualification" /*,width:"20%"*/
                    },
                    {
                        data: "university",
                        orderable: true,
                        name: "university" /*,width:"20%"*/
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
