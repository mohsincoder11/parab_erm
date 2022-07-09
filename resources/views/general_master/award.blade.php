@extends('layout.layout')
@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">


            <div style="margin-top: 3%; margin-bottom: 3%;">
                @include('layout.alerts')

                <div>
                    <div>
                        <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal"
                            data-target=".add-edit_modal">Add Award</button>
                        {{-- <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal">Bulk Delete</button> --}}
                    </div>

                    <div class="modal fade add-edit_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Add Award</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <form id="award_form" method="post">
                                    @csrf
                                    <input type="hidden" id="id" name="id">


                                    <div class="row" style="padding: 10px;">

                                        <div class="col-md-6 form-group">
                                            <label>Company*</label>
                                            <select name="company_id" id="company_id" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Employee...'>
                                                <option value="" disabled selected>Company Type</option>
                                                @foreach ($company as $company)
                                                    <option value="{{ $company->id }}">{{ $company->company_name }}
                                                    </option>
                                                @endforeach


                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Employee*</label>
                                            <select name="employee_id" id="employee_id" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Employee...'>
                                            </select>
                                        </div>



                                        <div class="col-md-6 form-group">
                                            <label>Department*</label>
                                            <select name="department_id" id="department_id"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Employee...'>

                                            </select>
                                        </div>



                                        <div class="col-md-6 form-group">
                                            <label>Award Type*</label>
                                            <select name="award_type" id="award_type" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Employee...'>
                                                <option value="" disabled selected>Select Award</option>
                                                <option value="Performer of the year">Performer of the year</option>
                                                <option value="Best Salesman">Best Salesman</option>
                                                <option value="Top Performer of month">Top Performer of month</option>


                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Gift *</label>
                                            <input type="text" name="gift" id="gift" required class="form-control"
                                                placeholder="Gift">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Cash*</label>
                                            <input type="number" step="0.1" name="cash" id="cash" required
                                                class="form-control" placeholder="Cash">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Descrption* </label>
                                            <textarea name="description" id="description" class="form-control" placeholder=Optional></textarea>
                                        </div>



                                        <div class="col-md-6 form-group">
                                            <label>Start Date *</label>
                                            <input type="date" name="start_date" id="start_date" class="form-control date"
                                                value="">
                                        </div>
                                        <div class="form-group" align="center" style="margin-left: 45%;">

                                            <button id="add-edit-btn" formaction="{{ route('general-master.store-award') }}" type="submit"
                                                class="btn btn-warning">Add </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table class="table table-hover non-hover datatable_server" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Company</th>
                                            <th>Department</th>
                                            <th>Employee</th>

                                            <th>Award Type</th>
                                            <th>Gift</th>
                                            <th>Cash</th>
                                            <th>Descrption</th>
                                            <th>Start Date</th>

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

            $(document).on('change', '#company_id', function() {
                $.ajax({
                    url: "{{ route('get_department_by_company') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        company_id: $(this).val(),
                    },
                    success: function(result) {
                        $("#department_id").empty();
                        $("#department_id").append(
                            '<option value="" disabled selected>Select Department</option>');
                        $.each(result['department'], function(a, b) {
                            $("#department_id").append('<option value="' + b.id + '">' + b
                                .department + '</option>');
                        });


                        $("#employee_id").empty();
                        $("#employee_id").append(
                            '<option value="" disabled selected>Select Employee</option>');
                        $.each(result['employee'], function(a, b) {
                            $("#employee_id").append('<option value="' + b.id + '">' + b
                                .full_name + '</option>');
                        });
                    }


                })
            })

            $('#award_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    company_id: {
                        required: true,
                    },
                    employee_id: {
                        required: true,
                    },
                    department_id: {
                        required: true,
                    },
                    award_type: {
                        required: true,
                    },
                    gift: {
                        required: true,
                    },
                    cash: {
                        required: true,
                    },
                    description: {
                        required: true,
                    },
                    start_date: {
                        required: true,
                    },

                },
                messages: {
                    company_id: {
                        required: "Please select company.",
                    },
                    employee_id: {
                        required: "Please select employee.",
                    },
                    department_id: {
                        required: "Please select department.",
                    },
                    award_type: {
                        required: 'Please select award type.',
                    },
                    gift: {
                        required: 'This field is required.',
                    },
                    cash: {
                        required: 'This field is required.',
                    },
                    description: {
                        required: 'This field is required.',
                    },
                    start_date: {
                        required: 'Please select date.',
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
                    url: "{{ route('general-master.edit-award') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        console.log(result);
                        $("#id").val(result.id);
                        $("#company_id").val(result.company_id);
                        $("#gift").val(result.gift);
                        $("#cash").val(result.cash);
                        $("#description").val(result.description);
                        $("#start_date").val(result.start_date);
                        $("#award_type").val(result.award_type);

                        $("#company_id").change();
                        setTimeout(function() {
                            $("#employee_id").val(result.employee_id);
                            $("#department_id").val(result.department_id);
                        }, 1500);

                        $("#myLargeModalLabel").text("Edit Award")
                        $("#add-edit-btn").text("Update");
                        let formaction = '{{ route('general-master.update-award') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }

                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Award");
                $("#add-edit-btn").text("Add");
                $('#award_form').trigger("reset");
                $("#store_logo").text('');
                let formaction = '{{ route('general-master.store-award') }}';
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
                            url: "{{ route('general-master.delete-award-record') }}",
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
                    url: "{{ route('general-master.get-award-record') }}",
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
                        data: "department",
                        orderable: true,
                        name: "department",
                        width: "30%"
                    },
                    {
                        data: "full_name",
                        orderable: true,
                        name: "full_name" /*,width:"20%"*/
                    },
                    {
                        data: "award_type",
                        orderable: true,
                        name: "award_type" /*,width:"20%"*/
                    },
                    {
                        data: "gift",
                        orderable: true,
                        name: "gift" /*,width:"20%"*/
                    },
                    {
                        data: "cash",
                        orderable: true,
                        name: "cash",
                        width: "30%"
                    },
                    {
                        data: "description",
                        orderable: true,
                        name: "description" /*,width:"20%"*/
                    },
                    {
                        data: "start_date",
                        orderable: true,
                        name: "start_date" /*,width:"20%"*/
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
