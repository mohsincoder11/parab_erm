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
                            </svg>Add Bank </button>


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
                                    <h5 class="modal-title" id="myLargeModalLabel">Add New Bank</h5>
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

                                @php
                                    $banks = get_banks();
                                    $company = get_company_name_and_id();
                                @endphp
                                <form method="post" id="employer_bank_form">
                                    @csrf
                                    <input type="hidden" name="id" id="employer_bank_id">
                                    <div class="row" style="padding: 10px;">

                                        <div class="col-md-6 form-group">
                                            <label>Bank Name *</label>
                                            <select name="bank_id" id="bank_id" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Company Type...'>
                                                <option value="" disabled selected> Select Bank</option>
                                                @foreach ($banks as $b)
                                                    <option value="{{ $b->id }}">{{ $b->bank_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Bank Account No. *</label>
                                            <input type="text" name="bank_acc_no" id="bank_acc_no" required
                                                class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Bank IFSC No. *</label>
                                            <input type="text" name="bank_ifsc_code" id="bank_ifsc_code" required
                                                class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Company *</label>
                                            <select name="company_id" id="company_id" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Company Type...'>
                                                <option value="" disabled selected>Company Type</option>
                                                @foreach ($company as $c)
                                                    <option value="{{ $c->id }}">{{ $c->company_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>



                                        <div class="form-group" align="center" style="margin-top: 5%; margin-left: 45%;">

                                            <button formaction="{{ route('banks_masters.store-employer_bank') }}"
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
                                <table id="html5-extension" class="table table-hover non-hover datatable_server" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Bank Name</th>
                                            <th>Bank Ac No.</th>
                                            <th>Bank IFSC Code</th>
                                            <th>Company</th>
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
    

            $('#employer_bank_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    bank_id: {
                        required: true,
                    },
                    bank_acc_no: {
                        required: true,
                    },
                    bank_ifsc_code: {
                        required: true,
                    },
                    company_id: {
                        required: true,
                    },
                   

                },
                messages: {
                    bank_id: {
                        required: "Please select bank.",
                    },
                    bank_acc_no: {
                        required: "This field is required.",
                    },
                    bank_ifsc_code: {
                        required: "This field is required.",
                    },
                    company_id: {
                        required: 'Please select company.',
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
                    url: "{{ route('banks_masters.edit-employer_bank') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#employer_bank_id").val(result.id);
                        $("#bank_id").val(result.bank_id);
                        $("#company_id").val(result.company_id);
                       
                        $("#bank_acc_no").val(result.bank_acc_no);
                        $("#bank_ifsc_code").val(result.bank_ifsc_code);
                        $("#myLargeModalLabel").text("Edit Bank Detail")
                        $("#add-edit-btn").text("Update");
                        let formaction = '{{ route('banks_masters.update-employer_bank') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }

                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add New Bank");
                $("#add-edit-btn").text("Add");
                $('#employer_bank_form').trigger("reset");
                let formaction = '{{ route('banks_masters.store-employer_bank') }}';
                $("#add-edit-btn").attr("formaction", formaction);

            });


            $(document).on('click', '.delete', function() {
                let id=$(this).attr('id');
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
                        url: "{{ route('banks_masters.delete-employer_bank') }}",
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
                    url: "{{ route('banks_masters.get-employer_bank') }}",
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
                        data: "bank_name",
                        orderable: true,
                        name: "bank_name" /*,width:"20%"*/
                    },
                    {
                        data: "bank_acc_no",
                        orderable: true,
                        name: "bank_acc_no",
                        width: "15%"
                    },
                    {
                        data: "bank_ifsc_code",
                        orderable: true,
                        name: "bank_ifsc_code" /*,width:"20%"*/,
                        width: "25%"

                    },
                    {
                        data: "company_name",
                        orderable: true,
                        name: "company_name" /*,width:"20%"*/,
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
