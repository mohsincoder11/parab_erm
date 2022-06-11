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
                        </svg>Add Project / Cost Center</button>
                    <!-- <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal"><svg
                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                clip-rule="evenodd" />
                        </svg>Bulk
                        Delete</button> -->

                </div>

                <!-- model -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabel">Add Project / Cost Center</h5>
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
                                        <select name="company_id" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Employee...'>
                                            <option value="" disabled selected>Select</option>
                                            @foreach($compannies as $company)
                                            <option value="{{$company->id}}">{{$company->company_name}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                    

                                    <div class="col-md-6 form-group">
                                        <label>Project Name / Cost Center*</label>
                                        <input type="text" required class="form-control" name="project"
                                            placeholder="Project Name">
                                    </div>

                                    <!-- <div class="col-md-3 form-group">
                                        <label>Project Head*</label>
                                        <select name="project_head" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            > <option value="" disabled selected>Project Head </option>
                                        </select>
                                    </div> -->

                                  
                                 

                                    <div class="form-group" align="center" style="margin-left: 50%;">
                                        <input type="submit" name="action_button" id="action_button"
                                            class="btn btn-warning" value=Submit />
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end model -->

                <!-- start model -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="editmodel"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabel">Edit Project</h5>
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
                                    <input type="hidden" name="hidden_id" id="hidden_id">
                                    <input type="hidden" name="previous_icon" id="previous_icon">
                                    <div class="col-md-6 form-group">
                                        <label>Company*</label>
                                        <select name="company_id" id="company_id" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Employee...'>
                                            
                                            @foreach($compannies as $company)
                                            <option value="{{$company->id}}">{{$company->company_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Project *</label>
                                        <input type="text" required class="form-control" name="project" id="project"
                                            placeholder="Unique Value">
                                    </div>

                                  


                                    <!-- <div class="col-md-6 form-group">
                                        <label>Project Head*</label>
                                        <select name="project_head" id="project_head" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Employee...'>
                                            <option value=""></option>
                                            <option value=""></option>
                                        </select>
                                    </div> -->
                                   


                                    <div class="form-group" align="center" style="margin-left: 50%;">
                                        <input type="submit" name="action_button" id="action_button"
                                            class="btn btn-warning" value=Edit />
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- end model -->
            </div>


            <div class="row" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <table id="html5-extension" class="table table-hover non-hover datatable"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Project / Cost Center</th>
                                        <th>Company Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach($projects as $data )
                                    <?php $i=$i+1; ?>
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$data->project}}</td>
                                        <td>{{$data->company_name}}</td>
                                        <td>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#editmodel"
                                                data-placement="top" title="Edit" data-custom-value="{{$data->id}}"
                                                class="edit"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2 text-success">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg></a>
                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                data-custom-value="{{$data->id}}" class="delete" data-placement="top"
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
<script type="text/javascript">


    $('#sample_form').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "{{route('company_masters.stroreproject')}}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            success: function (data) {

                var html = '';
                if (data.errors) {
                    html = '<div class="alert alert-danger">';
                    for (var count = 0; count < data.errors.length; count++) {
                        html += '<p>' + data.errors[count] + '</p>';
                    }
                    html += '</div>';
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
                // $('#form_result').html(html).slideDown(300).delay(5000).slideUp(300);

            }
        });
    });

    $('#update_form').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "{{route('company_masters.updateproject')}}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            success: function (data) {

                var html = '';
                if (data.errors) {
                    html = '<div class="alert alert-danger">';
                    for (var count = 0; count < data.errors.length; count++) {
                        html += '<p>' + data.errors[count] + '</p>';
                    }
                    html += '</div>';
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
                    html = '<div class="alert alert-success">' + data.success + '</div>';
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }

                // $('#form_result1').html(html).slideDown(300).delay(5000).slideUp(300);

            }
        });
    });

    $('#html5-extension').on('click', '.edit', function () {
        var data = $(this).data();
        var id = data.customValue;

        var target = "{{ url('company_masters/projects/edit')}}/" + id;

        $.ajax({
            url: target,
            dataType: "json",
            success: function (html) {
                $('#company_id').val(html.company_id);
                $('#project').val(html.project);
             
                $('#hidden_id').val(html.id);
            }
        })
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
                var target = "{{ url('company_masters/projects/delete')}}/" + id;

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

    $('#bulk_delete').on('click', function () {
        var i = 0;
        var arr = [];
        $('.check:checked').each(function () {
            arr[i++] = $(this).val();
        });

        if (arr.length == 0) {
            swal({
                title: 'Select Records',
                type: 'warning',
                padding: '2em',
                timer: 1000,
                showCancelButton: false,
                showConfirmButton: false

            })
            return false;
        }

        swal({
            title: 'Are you really want to Delete?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Delete',
            padding: '2em'
        }).then(function (result) {

            if (result.value) {
                var target = "{{ url('organization/companies/bulkdelete')}}/" + arr;

                $.ajax({
                    url: target,
                    type: "get",
                    dataType: "json",
                    success: function (data) {
                        if (data.success) {
                            swal({
                                title: 'Deleted!',
                                text: "Records has been deleted.",
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