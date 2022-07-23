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
                        </svg>Add New Location / Branch</button>
                    <!-- <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal"><svg
                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                clip-rule="evenodd" />
                        </svg>Bulk Delete</button> -->

                </div>
                <!-- Model Start -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabel">Add New Location / Branch</h5>
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
                                    <div class="col-md-4 form-group">
                                        <label>Select Company</label>
                                        <select name="company_id" id="company_id"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" >
                                            <option value="" disabled selected>Select</option>
                                            @foreach($companies as $data) 
                                            <option value="{{$data->id}}">{{$data->company_name}}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label>Location / Branch Name*</label>
                                        <input type="text" required class="form-control" name="location_name"
                                            id="location_name">
                                    </div>


                                    <!-- <div class="col-md-4 form-group">
                                        <label>Location Head</label>
                                        <select name="location_head" id="location_head"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" >
                                            <option disabled selected value></option>
                                           
                                        </select>
                                    </div> -->


                                    <div class="col-md-4 form-group">
                                        <label>Address Line *</label>
                                        <input type="text" name="address" id="address" required class="form-control"
                                            placeholder="full address">
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label>City </label>
                                        <input type="text" name="city" id="city" class="form-control"
                                            placeholder=Optional>
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label>State </label>
                                        <select name="state" id="state"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select State...'>
                                            <option disabled selected value>Select State</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands
                                            </option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                            <option value="Daman and Diu">Daman and Diu</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Lakshadweep">Lakshadweep</option>
                                            <option value="Puducherry">Puducherry</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Odisha">Odisha</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="Uttarakhand">Uttarakhand</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select>
                                        </select>
                                    </div>
                                    <div class="form-group" align="center" style="margin-top: 4%;margin-left: 50%;">
                                        <input type="submit" name="action_button" class="btn btn-warning" value="Add" />
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end model -->

                <!-- edit model -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" id="locationmodel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editmodel">Edit Location / Branch</h5>
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
                                <input type="hidden" name="hidden_id" id="hidden_id">
                                <div class="row" style="padding: 10px;">
                                    <div class="col-md-4 form-group">
                                        <label>Select Company</label>
                                        <select name="company_id1" id="company_id1"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" >
                                            <option value="" disabled selected>Company Name</option>
                                            @foreach($companies as $data) 
                                            <option value="{{$data->id}}">{{$data->company_name}}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label>Location / Branch Name*</label>
                                        <input type="text" required class="form-control" name="location_name1"
                                            id="location_name1">
                                    </div>
                                    
                                    <!-- <div class="col-md-4 form-group">
                                        <label>Location Head</label>
                                        <select name="location_head1" id="location_head1"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" >
                                            <option disabled selected value></option>
                                           
                                        </select>
                                    </div> -->


                                    <div class="col-md-4 form-group">
                                        <label>Address Line *</label>
                                        <input type="text" name="address11" id="address11" required class="form-control"
                                            placeholder="full address">
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label>City </label>
                                        <input type="text" name="city1" id="city1" class="form-control"
                                            placeholder=Optional>
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label>State </label>
                                        <select name="state1" id="state1"
                                            class="form-control selectpicker" data-live-search="true"
                                            data-live-search-style="begins" title='Select State...'>
                                            <option disabled selected value>Select State</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands
                                            </option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                            <option value="Daman and Diu">Daman and Diu</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Lakshadweep">Lakshadweep</option>
                                            <option value="Puducherry">Puducherry</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Odisha">Odisha</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="Uttarakhand">Uttarakhand</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select>
                                        </select>
                                    </div>
                                    <div class="form-group" align="center" style="margin-top: 4%;margin-left: 50%;">
                                        <input type="submit" name="action_button" class="btn btn-warning" value="Update" />
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end mode -->
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
                                        <th>Location / Branch</th>
                                        <th>Company Name</th>
                                        <th>Address Line</th>
                                        <!-- <th>Address Line2</th> -->
                                        <th>City</th>
                                        <th>State</th>
                                        <!-- <th>Country</th> -->
                                        <!-- <th>Zip</th> -->
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach($locationArr as $data)
                                    <?php $i=$i+1; ?>
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$data->location_name}}</td>
                                        <td>{{$data->company_name}}</td>
                                        <td>{{$data->address1}}</td>
                                        <!-- <td>{{$data->address2}}</td> -->
                                        <td>{{$data->city}}</td>
                                        <td>{{$data->state}}</td>
                                        <!-- <td>{{$data->country}}</td> -->
                                        <!-- <td>{{$data->zip}}</td> -->


                                        <td class="text-center">
                                            <a href="javascript:void(0);" title="Edit" data-toggle="modal"
                                                data-custom-value="{{$data->id}}" class="edit"
                                                data-target="#locationmodel" data-placement="top" title="Edit"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2 text-success">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg></a>

                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                                data-custom-value="{{$data->id}}" class="delete" title="Delete"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
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

$('#sample_form').validate({
            
      ignore: ".ignore",
            rules: {
                company_id: {
                    required: true,
                }, 
                location_name: {
                    required: true,
                }, 
                address: {
                    required: true,
                }, 
                city: {
                    required: true,
                }, 
                state: {
                    required: true,
                },           

            },
            messages: {
                company_id: {
                    required: "This field is required.",
                },   
                location_name: {
                    required: "This field is required.",
                },   
                address: {
                    required: "This field is required.",
                },   
                city: {
                    required: "This field is required.",
                },                  
                state: {
                    required: "This field is required.",
                },   

            },
            errorElement: 'label',
            errorPlacement: function(error, element) {
                element.closest('.form-group').append(error);

            }
        });

    $('#sample_form').on('submit', function (event) {
        var isvalid = $("#sample_form").valid();
        if (isvalid) {
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
    }
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
                $('#company_id1').val(html.company_id);
             
                $('#address11').val(html.address1);
                $('#city1').val(html.city);
                $('#state1').val(html.state);
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