@extends('layout/layout')
@section('content')

<div id="content" class="main-content">
    <div class="layout-px-spacing">


        <div style="margin-top: 3%; margin-bottom: 3%;">
            <div>
                <div>
                    <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal"
                        data-target=".bd-example-modal-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>Add Deduction</button>

                </div>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabel">Add Deduction</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>

                            <form method="POST" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                            <div class="row" style="padding: 10px;">
                                <div class="col-md-6 form-group">
                                    <label>Company*</label>
                                    <select name="company_id" id="company_id" class="form-control selectpicker"
                                        data-live-search="true" data-live-search-style="begins" required
                                        >
                                        <option value="" disabled selected>Select Company Name</option>
                                        @foreach($companies as $data)
                                        <option value="{{$data->id}}">{{$data->company_name}}</option>
                                       @endforeach


                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Deduction Title *</label>
                                    <input type="text" name="title" required class="form-control" placeholder="Deduction Title">
                                </div>

                                <div class="col-md-6 form-group type">
                                    <label>Type *</label>
                                    <select name="type" id="type" class="form-control selectpicker deduction_type"
                                        data-live-search="true" data-live-search-style="begins" required
                                       >
                                       <option value="" disabled selected>Select Type</option>
                                        <option value="Lumsum">Lumsum</option>
                                        <option value="%">%</option>
                                    </select>
                                </div>


                                <div class="col-md-6 form-group deduction">
                                   
                                </div>
                                <div class="col-md-6 form-group apply_to">
                                    
                                </div>

                                <div class="form-group" align="center" style="margin-left: 45%;">

                                    <input type="submit" name="action_button" class="btn btn-warning" value=Add />
                                </div>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="editmodel"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabel">Edit Deduction</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>

                            <form method="POST" id="update_form" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                            <div class="row" style="padding: 10px;">
                                <input type="hidden" id="hidden_id" name="hidden_id">
                                <div class="col-md-6 form-group">
                                    <label>Company*</label>
                                    <select name="company_id" id="company_id1" class="form-control selectpicker deduction_type"
                                        data-live-search="true" data-live-search-style="begins"
                                        >
                                        <option value="" disabled selected>Select Company Name</option>
                                        @foreach($companies as $data)
                                        <option value="{{$data->id}}">{{$data->company_name}}</option>
                                       @endforeach


                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Deduction Title *</label>
                                    <input type="text" name="title" id="title1" required class="form-control" placeholder="Deduction Title">
                                </div>

                                <div class="col-md-6 form-group type">
                                    <label>Type *</label>
                                    <select name="type" id="type1" class="form-control selectpicker deduction_type"
                                        data-live-search="true" data-live-search-style="begins"
                                       >
                                       <option value="" disabled selected>Select Type</option>
                                        <option value="Lumsum">Lumsum</option>
                                        <option value="%">%</option>
                                    </select>
                                </div>


                                <div class="col-md-6 form-group deduction">
                                   
                                </div>
                                <div class="col-md-6 form-group apply_to">
                                    
                                </div>

                                <div class="form-group" align="center" style="margin-left: 45%;">

                                    <input type="submit" name="action_button" class="btn btn-warning" value=Update />
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
                            <table id="html5-extension" class="datatable table-hover non-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Company</th>
                                        <th>Deduction Title</th>
                                        <th>Type</th>
                                        <th>Deduction%</th>
                                        <th>Apply On</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0;?>
                                    @foreach($deductions as $data)
                                    <?php $i=$i+1;?>
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$data->company_name}}</td>
                                        <td>{{$data->deduction_title}}</td>
                                        <td>{{$data->type}}</td>
                                        <td>{{$data->percent}}</td>
                                        <td>{{$data->apply_to}}</td>
                                       

                                        <td >
                                            <a href="javascript:void(0);" data-placement="top" title="Edit"
                                            data-custom-value="{{$data->id}}" class="edit"
                                                data-toggle="modal" data-target="#editmodel"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2 text-success">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg></a>
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                            data-custom-value="{{$data->id}}" class="delete"
                                                title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash-2 text-danger">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg></a>
                                        </td>

                                    </tr>
                                    @endforeach


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

@endsection

@section('js')
<script>
    $('.deduction_type').change(function () {
        if ($(this).val() == '%') {
            $('.deduction').append(` <label>Deduction %*</label>
                                    <input type="text" required name="percent" class="form-control deduction_edit" placeholder="%">`);
            $('.apply_to').append(`<label>Apply To *</label>
                                    <select name="apply_to"  class="form-control selectpicker apply_to_edit"
                                        data-live-search="true" data-live-search-style="begins"
                                        '>
                                        <option value="" disabled selected>Select Apply To</option>
                                        <option value="Basic Salary">Basic Salary</option>
                                        <option value="Gross Salary">Gross Salary</option>
                                    </select>`);
        }else{
            $('.deduction').empty();
            $('.apply_to').empty();
        }
    })

    $('#sample_form').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "{{route('salary_masters.storededuction')}}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            success: function (data) {

                var html = '';
                if (data.errors) {
                    swal({
                        title: 'Error!',
                        text: data.errors,
                        type: 'error',
                        padding: '2em',
                        timer:2000,
                        showCancelButton: false,
                        showConfirmButton: false
                    })
                   
                }
                if (data.success) {
                    swal({
                        title: 'Added!',
                        text: data.success,
                        type: 'success',
                        padding: '2em',
                        showCancelButton: false,
                        showConfirmButton: false
                    })
                    html = '<div class="alert alert-success">' + data.success + '</div>';
                    $('#sample_form')[0].reset();
                    setTimeout(function () {
                        location.reload();
                    }, 1500);
                }

            }
        });
    });

    $('#html5-extension').on('click', '.edit', function () {
        $('.deduction').empty();
            $('.apply_to').empty();
        var data = $(this).data();
        var id = data.customValue;

        var target = "{{ url('salary_masters/deduction/edit')}}/" + id;

        $.ajax({
            url: target,
            dataType: "json",
            success: function (html) {
                $('#company_id1').val(html.company_id);
                $('#type1').val(html.type);
                $('#title1').val(html.deduction_title);
                console.log()
                console.log(html.type== '%');
                if ( html.type== '%') {
                    $('.deduction').append(` <label>Deduction %*</label>
                                    <input type="text" required name="percent" class="form-control deduction_edit" placeholder="%">`);
            $('.apply_to').append(`<label>Apply To *</label>
                                    <select name="apply_to"  class="form-control selectpicker apply_to_edit"
                                        data-live-search="true" data-live-search-style="begins"
                                        '>
                                        <option value="" disabled selected>Select Apply To</option>
                                        <option value="Basic Salary">Basic Salary</option>
                                        <option value="Gross Salary">Gross Salary</option>
                                    </select>`);
        }else{
            $('.deduction').empty();
            $('.apply_to').empty();
        }
                $('.apply_to_edit').val(html.apply_to);
                $('.deduction_edit').val(html.percent);
                $('#hidden_id').val(html.id);
               
            }
        })
    });

    $('#update_form').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "{{route('salary_masters.updatededuction')}}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            success: function (data) {

                var html = '';
                if (data.errors) {
                    swal({
                        title: 'Error!',
                        text: data.errors,
                        type: 'error',
                        padding: '2em',
                        timer:2000,
                        showCancelButton: false,
                        showConfirmButton: false
                    })
                   
                }
                if (data.success) {
                    swal({
                        title: 'Update!',
                        text: data.success,
                        type: 'success',
                        padding: '2em',
                        showCancelButton: false,
                        showConfirmButton: false
                    })
                   
                    $('#sample_form')[0].reset();
                    setTimeout(function () {
                        location.reload();
                    }, 1500);
                }

            }
        });
    });

    $('#html5-extension').on('click', '.delete', function () {
                var data = $(this).data();
                var id = data.customValue;
                swal({
                    title: 'Are you really want to Delete?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Delete',
                    padding: '2em'
                }).then(function (result) {
                    if (result.value) {
                        var target = "{{ url('salary_masters/deduction/delete')}}/" + id;
                        $.ajax({
                            url: target,
                            type: "get",
                            dataType: "json",
                            success: function (data) {
                                if (data.success) {
                                    swal({
                                        title: 'Deleted!',
                                        text: "Record has been deleted.",
                                        type: 'success',
                                        padding: '2em',
                                        showCancelButton: false,
                                        showConfirmButton: false
                                    })
                                    setTimeout(function () {
                                        location.reload();
                                    }, 1000);
        
                                }
                            }
                        })
                    }
                })
            })
</script>

@endsection

