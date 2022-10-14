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
                            </svg>Add Salary Detalis</button>


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
                                    <h5 class="modal-title" id="myLargeModalLabel">Add New Salary Details</h5>
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

                                <form method="post" id="salary_detail_form">
                                    @csrf
                                    <div class="row" style="padding: 10px;">
                                        <input type="hidden" id="id" name="id">

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
                                                <option value="" disabled selected>Select Company</option>
                                                @foreach ($company as $c)
                                                    <option value="{{ $c->id }}">{{ $c->company_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Employee code<span class="required">*</span></label>
                                            <input type="text" name="emp_code" id="emp_code" required
                                                class="form-control" placeholder="Enter employee code">
                                        </div>
                                        <div class="col-md-6 form-group" id="allowance_area">
                                            <label>Basic Salary</label>
                                            <input type="number" step="0.1" name="basic_salary" id="basic_salary"
                                                required class="form-control gross_salary_cal_field"
                                                placeholder=" Basic Salary" value="0">
                                        </div>
                                        {{-- <span id="allowance_area"></span> --}}

                                        {{-- <div class="col-md-6 form-group">
                                            <label>Allowance 1</label>
                                            <input type="number" step="0.1" name="allowance1" id="allowance1" required
                                                class="form-control" placeholder="Allowance1">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Allowance 2</label>
                                            <input type="number" step="0.1" name="allowance2" id="allowance2" required
                                                class="form-control" placeholder=" Allowance2">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Allowance 3</label>
                                            <input type="number" step="0.1" name="allowance3" id="allowance3" required
                                                class="form-control" placeholder="Allowance 3">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Allowance 4</label>
                                            <input type="number" step="0.1" name="allowance4" id="allowance4" required
                                                class="form-control" placeholder="Allowance 4">
                                        </div> --}}

                                        <div class="col-md-6 form-group">
                                            <label>Areas</label>
                                            <input type="number" step="0.1" name="areas" id="areas" required
                                                class="form-control gross_salary_cal_field" placeholder="Areas"
                                                value="0">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Incentive</label>
                                            <input type="number" step="0.1" name="incentive" id="incentive"
                                                required class="form-control gross_salary_cal_field"
                                                placeholder="Insentive" value="0">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Gross Salary</label>
                                            <input type="number" step="0.1" name="gross_salary" readonly
                                                id="gross_salary" required class="form-control"
                                                placeholder=" Gross Salary" value="0">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>PF</label>
                                            <input type="number" step="0.1" name="pf" id="pf" required
                                                class="form-control total_deduction_cal_field" placeholder="PF"
                                                value="0">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>ESIC </label>
                                            <input type="number" step="0.1" name="esic" id="esic" required
                                                class="form-control total_deduction_cal_field" placeholder="ESIC"
                                                value="0">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>PT</label>
                                            <input type="number" step="0.1" name="pt" id="pt" required
                                                class="form-control total_deduction_cal_field" placeholder="PT"
                                                value="0">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>IT</label>
                                            <input type="number" step="0.1" name="it" id="it" required
                                                class="form-control total_deduction_cal_field" placeholder="IT"
                                                value="0">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Advance</label>
                                            <input type="number" step="0.1" name="advance" id="advance" required
                                                class="form-control total_deduction_cal_field" placeholder="Advance"
                                                value="0">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Total Deducation</label>
                                            <input type="number" step="0.1" name="total_deduction" readonly
                                                id="total_deduction" required class="form-control"
                                                placeholder=" Total Deducation" value="0">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Net Salary</label>
                                            <input type="number" step="0.1" name="net_salary" readonly
                                                id="net_salary" required class="form-control" placeholder="Net Salary"
                                                value="0">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>CTC</label>
                                            <input type="number" step="0.1" name="ctc" id="ctc" required
                                                class="form-control" placeholder="CTC" value="0">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Bank Name</label>
                                            <select name="bank_name" id="bank_name" class="form-control selectpicker"
                                                data-live-search="true" data-live-search-style="begins"
                                                title='Select Bank'>
                                                <option value="" disabled selected>Select Bank</option>


                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Branch Name</label>
                                            <input type="text" name="branch_name" id="branch_name" required
                                                class="form-control" placeholder=" Branch Name">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Bank IFSC Code</label>
                                            <input type="text" name="ifsc_code" id="ifsc_code" required
                                                class="form-control" placeholder=" Bank IFSC Code">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Bank Account No.</label>
                                            <input type="text" name="account_no" id="account_no" required
                                                class="form-control" placeholder=" Bank Account No.">
                                        </div>


                                        <div class="form-group" align="center" style="margin-top: 5%; padding-left:45%;">

                                            <button formaction="{{ route('employees_masters.store-salary-details') }}"
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
                                            <th>Sr.No.</th>
                                            <th>Basic Sallary</th>
                                          
                                            <th>Arrears</th>
                                            <th>Incentive</th>
                                            <th>Gross Salary</th>
                                            <th>PF</th>
                                            <th>ESIC</th>
                                            <th>PT</th>
                                            <th>IT</th>
                                            <th>Advance</th>
                                            <th>Total Deduction</th>
                                            <th>Net Salary</th>
                                            <th>CTC</th>
                                            <th>Bank Name</th>
                                            <th>Branch Name</th>
                                            <th>IFSC Code</th>
                                            <th>Account No</th>
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
                    url: "{{ route('get-allowance-by-company') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        company_id: $(this).val(),
                    },
                    success: function(result) {
                        $(".apeended_element").remove();
                        $(result['fields']).insertAfter("#allowance_area");
                        $("#bank_name").empty();
                        $("#bank_name").append('<option value="">Select Bank</option>');
                        $.each(result['bank_name'], function(a, b) {
                            $("#bank_name").append('<option value="'+b.bank_name+'" bank_acc_no="'+b.bank_acc_no+'" ifsc_code="'+b.bank_ifsc_code+'">' + b.bank_name +
                                '</option>');
                        })
                    }
                })
            })

          

            $(document).on('change', '#bank_name', function() {
                $("#ifsc_code").val($("#bank_name option:selected").attr('ifsc_code'));
                $("#account_no").val($("#bank_name option:selected").attr('bank_acc_no'));
            })

            $(document).on('keyup', '.gross_salary_cal_field', function() {
                gross_salary = 0;
                var totalfields = $(".gross_salary_cal_field");
                $.each(totalfields, function() {
                    if (!isNaN(parseInt($(this).val())) && $(this).attr('allowance_type') !=
                        'Percent') {
                        gross_salary = gross_salary + parseInt($(this).val());
                    } else if ($(this).attr('allowance_type') == 'Percent') {
                        let percentage_value = (($("#basic_salary").val() / 100) * $(this).attr(
                            'parcentage')).toFixed(2);
                        $(this).val(parseFloat(percentage_value));
                        gross_salary = gross_salary + parseFloat(percentage_value);
                    }
                })
                $("#gross_salary").val(gross_salary);
                calculate_net_salary();
            })

            $(document).on('keyup', '.total_deduction_cal_field', function() {
                let total_deduction = 0;
                var totalfields = $(".total_deduction_cal_field");
                $.each(totalfields, function() {
                    if (!isNaN(parseInt($(this).val()))) {
                        total_deduction = total_deduction + parseInt($(this).val());
                    }
                })
                $("#total_deduction").val(total_deduction);
                calculate_net_salary();

            })

            function calculate_net_salary() {
                let net_salary = parseFloat($("#gross_salary").val()) - parseFloat($("#total_deduction").val());
                $("#net_salary").val(net_salary);

            }



            $('#salary_detail_form').validate({

                //debug:true,
                ignore: ".ignore",
                rules: {
                    employee_id: {
                        required: true,
                    },
                    emp_code: {
                        required: true,
                    },
                    company_id: {
                        required: true,
                    },
                    basic_salary: {
                        required: true,
                    },
                    allowance1: {
                        required: true,
                    },
                    allowance2: {
                        required: true,
                    },
                    allowance3: {
                        required: true,
                    },
                    allowance4: {
                        required: true,
                    },
                    areas: {
                        required: true,
                    },
                    incentive: {
                        required: true,
                    },
                    gross_salary: {
                        required: true,
                    },
                    pf: {
                        required: true,
                    },
                    esic: {
                        required: true,
                    },

                    pt: {
                        required: true,
                    },
                    it: {
                        required: true,
                    },
                    advance: {
                        required: true,
                    },
                    total_deduction: {
                        required: true,
                    },
                    net_salary: {
                        required: true,
                    },
                    ctc: {
                        required: true,
                    },
                    bank_name: {
                        required: true,
                    },
                    branch_name: {
                        required: true,
                    },
                    ifsc_code: {
                        required: true,
                    },
                    account_no: {
                        required: true,
                    },

                },
                messages: {
                    company_id: {
                        required: "This field is required.",
                    },
                    employee_id: {
                        required: "Please type employee name and select.",
                    },
                    emp_code: {
                        required: "This field is required.",
                    },
                    basic_salary: {
                        required: "This field is required.",
                    },
                    allowance1: {
                        required: "This field is required.",
                    },
                    allowance2: {
                        required: "This field is required.",
                    },
                    allowance3: {
                        required: 'This field is required.',
                    },
                    allowance4: {
                        required: 'This field is required.',
                    },
                    areas: {
                        required: 'This field is required.',
                    },
                    incentive: {
                        required: "This field is required.",
                    },
                    gross_salary: {
                        required: "This field is required.",
                    },
                    pf: {
                        required: "This field is required.",
                    },
                    esic: {
                        required: 'This field is required.',
                    },

                    pt: {
                        required: 'This field is required.',
                    },
                    it: {
                        required: 'This field is required.',
                    },
                    advance: {
                        required: "This field is required.",
                    },
                    total_deduction: {
                        required: "This field is required.",
                    },
                    net_salary: {
                        required: "This field is required.",
                    },
                    ctc: {
                        required: 'This field is required.',
                    },
                    bank_name: {
                        required: 'This field is required.',
                    },
                    branch_name: {
                        required: 'This field is required.',
                    },
                    ifsc_code: {
                        required: 'This field is required.',
                    },
                    account_no: {
                        required: 'This field is required.',
                    },

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
                    url: "{{ route('employees_masters.edit-salary-details') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#id").val(result.id);

                        $("#basic_salary").val(result.basic_salary);
                        $("#allowance1").val(result.allowance1);
                        $("#allowance2").val(result.allowance2);
                        $("#allowance3").val(result.allowance3);
                        $("#allowance4").val(result.allowance4);
                        $("#areas").val(result.areas);

                        $("#incentive").val(result.incentive);
                        $("#gross_salary").val(result.gross_salary);
                        $("#pf").val(result.pf);
                        $("#esic").val(result.esic);
                        $("#pt").val(result.pt);
                        $("#it").val(result.it);

                        $("#advance").val(result.advance);
                        $("#total_deduction").val(result.total_deduction);
                        $("#net_salary").val(result.net_salary);
                        $("#ctc").val(result.ctc);
                        $("#bank_name").val(result.bank_name);
                        $("#branch_name").val(result.branch_name);

                        $("#ifsc_code").val(result.ifsc_code);
                        $("#account_no").val(result.account_no);

                        $("#myLargeModalLabel").text("Edit Salary Details");
                        $("#add-edit-btn").text("Update");
                        let formaction =
                            '{{ route('employees_masters.update-salary-details') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }
                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Salary Details");
                $("#add-edit-btn").text("Add");
                $('#salary_detail_form').trigger("reset");
                let formaction = '{{ route('employees_masters.store-salary-details') }}';
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
                            url: "{{ route('employees_masters.delete-salary-details') }}",
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
                    url: "{{ route('employees_masters.get-salary-details') }}",
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
                        data: "basic_salary",
                        orderable: true,
                        name: "basic_salary" /*,width:"20%"*/
                    },
                    
                    {
                        data: "areas",
                        orderable: true,
                        name: "areas" /*,width:"20%"*/
                    },
                    {
                        data: "incentive",
                        orderable: true,
                        name: "incentive" /*,width:"20%"*/
                    },
                    {
                        data: "gross_salary",
                        orderable: true,
                        name: "gross_salary",
                        width: "15%"
                    },
                    {
                        data: "pf",
                        orderable: true,
                        name: "pf" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "esic",
                        orderable: true,
                        name: "esic" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "pt",
                        orderable: true,
                        name: "pt" /*,width:"20%"*/
                    },
                    {
                        data: "it",
                        orderable: true,
                        name: "it" /*,width:"20%"*/
                    },
                    {
                        data: "advance",
                        orderable: true,
                        name: "advance" /*,width:"20%"*/
                    },
                    {
                        data: "total_deduction",
                        orderable: true,
                        name: "total_deduction",
                        width: "15%"
                    },
                    {
                        data: "net_salary",
                        orderable: true,
                        name: "net_salary" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "ctc",
                        orderable: true,
                        name: "ctc" /*,width:"20%"*/ ,
                        width: "25%"

                    },
                    {
                        data: "bank_name",
                        orderable: true,
                        name: "bank_name" /*,width:"20%"*/
                    },
                    {
                        data: "branch_name",
                        orderable: true,
                        name: "branch_name" /*,width:"20%"*/
                    },
                    {
                        data: "ifsc_code",
                        orderable: true,
                        name: "ifsc_code" /*,width:"20%"*/
                    },
                    {
                        data: "account_no",
                        orderable: true,
                        name: "account_no" /*,width:"20%"*/
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
