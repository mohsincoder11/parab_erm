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
                            </svg>Add Statutory Details </button>


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
                                    <h5 class="modal-title" id="myLargeModalLabel">Add Statutory Details</h5>
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

                                <form method="post" id="statutory_form">
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
                                            <label>PF Applicable?<span class="required">*</span></label>
                                            <select name="pf_applicable" id="pf_applicable" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select option...'>
                                                <option value="" disabled selected> Select Option</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group pf_show">
                                            <label>UAN NO.</label>
                                            <input type="text" name="uan_no" id="uan_no" 
                                                class="form-control" placeholder="">
                                        </div>
                                       
                                        <div class="col-md-6 form-group">
                                            <label>ESIC Applicable?<span class="required">*</span></label>
                                            <select name="esic_applicable" id="esic_applicable" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select option...'>
                                                <option value="" disabled selected> Select Option</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group esic_show">
                                            <label>ESIC NO.</label>
                                            <input type="text" name="esic_no" id="esic_no" 
                                                class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-6 form-group">

                                        <label>PT Applicable?<span class="required">*</span></label>
                                        <select name="is_pt" id="is_pt" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select option...'>
                                            <option value="" disabled selected> Select Option</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                       
                                        <div class="form-group" align="center" style="margin-top: 5%; padding-left:45%;">

                                            <button formaction="{{ route('employees_masters.store-statutory-details') }}"
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

                                            <th>UAN No. </th>
                                            <th>ESIC No. </th>
                                            <th>PT Applicable </th>
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

            $('#statutory_form').validate({

                //debug:true,
                ignore: ".ignore",
                rules: {
                    employee_name: {
                        required: true,
                    },
                    emp_code: {
                        required: true,
                    },
                    pf_applicable: {
                        required: true,
                    },
                    esic_applicable: {
                        required: true,
                    },
                    

                    // uan_no: {
                    //     required: true,
                    // },
                    // esic_no: {
                    //     required: true,
                    // },
                    // is_pf: {
                    //     required: true,
                    // },
                    // is_esic: {
                    //     required: true,
                    // },
                    is_pt: {
                        required: true,
                    },

                },
                messages: {
                    employee_name: {
                        required: "This field is required.",
                    },
                    emp_code: {
                        required: "This field is required.",
                    },
                    pf_applicable: {
                        required: "This field is required.",
                    },
                    esic_applicable: {
                        required: "This field is required.",
                    },
                    
                    // uan_no: {
                    //     required: "This field is required.",
                    // },
                    // esic_no: {
                    //     required: "This field is required.",
                    // },
                    // is_pf: {
                    //     required: "Please select a option.",
                    // },
                    // is_esic: {
                    //     required: 'Please select a option.',
                    // },
                    is_pt: {
                        required: 'Please select a option.',
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
            
            $(".pf_show").hide();

$(".esic_show").hide();


$(document).on('change', '#pf_applicable', function() {
    if($(this).val() =='Yes')
    $(".pf_show").show();
    else
    $(".pf_show").hide();
})
$(document).on('change', '#esic_applicable', function() {
    if($(this).val() =='Yes')
    $(".esic_show").show();
    else
    $(".esic_show").hide();

})

    $(document).on('click', '.edit', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('employees_masters.edit-statutory-details') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#id").val(result.id);
                        $("#uan_no").val(result.uan_no);
                        if(result.uan_no)
                        $("#pf_applicable").val("Yes");
                        else
                        $("#pf_applicable").val("No");

                        $("#esic_no").val(result.esic_no);
                        if(result.esic_no)
                        $("#esic_applicable").val("Yes");
                        else
                        $("#esic_applicable").val("No");
                        $("#is_pt").val(result.is_pt);


                        $("#emp_code").val(result.emp_code);
                        $("#uan_no").val(result.uan_no);
                        $("#esic_no").val(result.esic_no);
                        
                        $("#myLargeModalLabel").text("Edit Statutory Details");
                        $("#add-edit-btn").text("Update");
                        let formaction =
                            '{{ route('employees_masters.update-statutory-details') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }
                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Statutory Details");
                $("#add-edit-btn").text("Add");
                $('#statutory_form').trigger("reset");
                let formaction = '{{ route('employees_masters.store-statutory-details') }}';
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
                            url: "{{ route('employees_masters.delete-statutory-details') }}",
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
                    url: "{{ route('employees_masters.get-statutory-details') }}",
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
                        data: "uan_no",
                        orderable: true,
                        name: "uan_no" /*,width:"20%"*/
                    },
                    {
                        data: "esic_no",
                        orderable: true,
                        name: "esic_no",
                        width: "15%"
                    },
                   
                    {
                        data: "is_pt",
                        orderable: true,
                        name: "is_pt" /*,width:"20%"*/
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
