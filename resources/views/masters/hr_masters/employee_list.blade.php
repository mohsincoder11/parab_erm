@extends('layout/layout')
@section('content')
<div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div style="margin-top: 3%; margin-bottom: 3%;">
                    <div>
                        <div>
                            <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal"
                                data-target=".bd-example-modal-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                  </svg>Add Employee</button>
                            <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                            </svg>Bulk
                                Delete</button>

                        </div>

                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel">Add Office Shift</h5>
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
                                            <label>First Name</label>
                                            <input type="text" required class="form-control"
                                                placeholder="First Name">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Last Name</label>
                                            <input type="text" required class="form-control"
                                                placeholder="Last Name">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Email</label>
                                            <input type="text" required class="form-control"
                                                placeholder="Email">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label> Official Email</label>
                                            <input type="text" required class="form-control"
                                                placeholder="Official Email">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label> Phone</label>
                                            <input type="text" required class="form-control"
                                                placeholder="Phone">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Emergency Phone</label>
                                            <input type="text" required class="form-control"
                                                placeholder=" Emergency Phone">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Date Of Birth *</label>
                                            <input type="date" name="start_date" id="start_date"
                                                class="form-control date" value="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Gender </label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Gender...'>
                                                <option value="" disabled selected>Male</option>
                                                <option value="corporation">Fe-male</option>
                                                <option value="exempt organization">Other</option>
                                             
                                            </select>
                                        </div>

                                    
                                        <div class="col-md-6 form-group">
                                            <label>Company *</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected>Company Type</option>
                                                <option value="corporation">Corporation</option>
                                                <option value="exempt organization">Exempt Organization</option>
                                                <option value="partnership">Partnership</option>
                                                <option value="private foundation">Private Foundation</option>
                                                <option value="limited liability company">Limited Liability Company
                                                </option>

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Project</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Project Type...'>
                                                <option value="" disabled selected>Project Type</option>
                                                <option value="corporation">1</option>
                                                <option value="exempt organization">2</option>
                                                <option value="partnership">3</option>
                                             

                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Designation</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Project Type...'>
                                                <option value="" disabled selected>Designation</option>
                                                <option value="corporation">1</option>
                                                <option value="exempt organization">2</option>
                                                <option value="partnership">3</option>
                                             

                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Office Shift</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Project Type...'>
                                                <option value="" disabled selected>Office Shift</option>
                                                <option value="corporation">1</option>
                                                <option value="exempt organization">2</option>
                                                <option value="partnership">3</option>
                                             

                                            </select>
                                        </div>
                                    
                                        <div class="col-md-6 form-group">
                                            <label>Role</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Project Type...'>
                                                <option value="" disabled selected> Select Role</option>
                                                <option value="corporation">1</option>
                                                <option value="exempt organization">2</option>
                                                <option value="partnership">3</option>
                                             

                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Username</label>
                                            <input type="text" required class="form-control"
                                                placeholder=" Username">
                                        </div>
                                            

                                        <div class="col-md-6 form-group">
                                            <label>Password</label>
                                            <input type="text" required class="form-control"
                                                placeholder="Password">
                                        </div>
                                            
                                        <div class="col-md-6 form-group">
                                            <label>Conform Password</label>
                                            <input type="text" required class="form-control"
                                                placeholder=" Conform Password">
                                        </div>
                                            
                                            <div class="form-group" align="center"
                                                style="margin-top: 5%; margin-left: 45%;">

                                                <input type="submit" name="action_button" class="btn btn-warning"
                                                    value=Add />
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="row" id="cancel-row">

                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-6">
                                <div class="table-responsive mb-4 mt-4">
                                    <table id="html5-extension" class="datatable table-hover non-hover " style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Name</th>
                                                <th>Company</th>
                                                <th>Project</th>
                                                <th>Designation</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                              
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td></td>
                                                <td></td>
                                             

                                                <td>
                                                    ram nagar chandur bajar
                                                </td>
                                                <td >

                                                    <a href="javascript:void(0);" data-toggle="tooltip"
                                                        data-placement="top" title="Eye"><svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                          </svg></a>
                                                    <a href="javascript:void(0);" data-toggle="tooltip"
                                                        data-placement="top" title="Delete"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
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



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

@endsection

@section('js')
<script type="text/javascript">


    $('#sample_form').on('submit', function (event) {
        event.preventDefault();

        $.ajax({
            url: "{{route('company_masters.storelocation')}}",
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
            url: "{{route('company_masters.updatelocation')}}",
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

        var target = "{{ url('company_masters/location/edit')}}/" + id;

        $.ajax({
            url: target,
            dataType: "json",
            success: function (html) {
                $('#location_name1').val(html.location_name);
                $('#location_head1').val(html.location_head);
                $('#address11').val(html.address1);
                $('#address22').val(html.address2);
                $('#city1').val(html.city);
                $('#state1').val(html.state);
                $('#country1').val(html.country);
                $('#zip1').val(html.zip);
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
                var target = "{{ url('company_masters/location/delete')}}/" + id;

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