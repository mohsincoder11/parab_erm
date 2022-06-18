@extends('layout.layout')
@section('content')


    <div id="content" class="main-content">
        <div class="layout-px-spacing">


            <div style="background-color: white; margin-bottom: 2%; margin-top: 2%;margin-bottom: 2%; ">
                <div style="margin-bottom: 3%;">         
                           @include('layout.alerts')
                </div>



                <div style="padding-top: 2%; margin-left: 3%;">
                    <h5>Add Asset Category</h5>
                </div>
                <form id="category_form" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="row" id="cancel-row" style="margin-left: 1%;  margin-right: 5%; ">
                        <div class="col-md-4 form-group" style="margin-top: 2%; ">
                            <!-- <label>Month*</label> -->
                            <input type="text" name="category_name" id="category_name" required class="form-control" placeholder=" Category Name">

                        </div>


                        <div class=" col-md-4 form-group" style="margin-top: 28px; ">
                            <button id="add-edit-btn" formaction="{{route('assets_masters.store-category')}}" type="submit" class="btn btn-primary mb-2 mr-1"> Save</button>

                            <button id="refresh_btn" type="button" class="btn btn-danger mb-2 mr-2">Refresh</button>


                        </div>
                </form>

        </div>
    </div>

        <div class="row" id="cancel-row" style="margin-top: 3%;">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <table id="html5-extension" class="table-hover non-hover datatable" style="width:100%">
                            <thead>
                                <tr>

                                    <th> Name</th>

                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $category)
                                    <tr>
                                        <td>{{$category->category_name}}</td>
                                        <td>
                                            <a class="edit" id="{{$category->id}}" href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                                title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2 text-success">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg></a>
                                            <a class="delete" id="{{$category->id}}" href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
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

    </div> -->
    </div>
@stop


@section('js')

    <script>
        $(document).ready(function() {
            $(document).on('change', '#company_id', function() {
                $.ajax({
                    url: "{{ route('get_department_location_by_company') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        company_id: $(this).val(),
                    },
                    success: function(result) {

                        $("#department_id").empty();
                        $("#location_id").empty();
                        $("#location_id").append(
                            '<option value="" disabled selected>Select Department</option>');
                        $("#department_id").append(
                            '<option value="" disabled selected>Select Department</option>');
                        $.each(result['department'], function(a, b) {
                            $("#department_id").append('<option value="' + b.id + '">' +
                                b.department + '</option>');
                        });
                        $.each(result['location'], function(a, b) {
                            $("#location_id").append('<option value="' + b.id + '">' + b.location_name + '</option>');
                        });
                    }
                })
            })

            $('#category_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {                   
                    category_name: {
                        required: true,
                    },          

                },
                messages: {                    
                    category_name: {
                        required: "This field is required.",
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
                            url: "{{ route('assets_masters.delete-category') }}",
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

            

            $(document).on('click', '#refresh_btn', function() {
                location.reload();
            })


                $(document).on('click', '.edit', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('assets_masters.edit-category') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#id").val(result.id);
                        $("#category_name").val(result.category_name);
                        $("#myLargeModalLabel").text("Edit Expenses Category")
                        $("#add-edit-btn").text("Update");
                        let formaction = '{{ route('assets_masters.update-category') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }

                })
            })

            



        })
    </script>
@stop