@extends('layout/layout')
@section('content')

<div id="content" class="main-content">
    <div class="layout-px-spacing">


        <div style="margin-top: 3%; margin-bottom: 3%;">
            <div>
                <div>
                    <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal" id="addofficeshift"
                        data-target=".bd-example-modal-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>Add office Shift</button>
                    <!-- <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal"><svg
                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                clip-rule="evenodd" />
                        </svg>Bulk
                        Delete</button> -->
                </div>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabel">Add office Shift</h5>
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
                                        <label>Company *</label>
                                        <select name="company_id" class="form-control selectpicker"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='Select Company Name...'>
                                            <option value="" disabled selected>Company Name</option>
                                            @foreach($companies as $data)
                                            <option value="{{$data->id}}">{{$data->company_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label>Office Shift</label>
                                        <input type="text" name="shift_name" required class="form-control"
                                            placeholder="Office Shift">
                                    </div>
                                    <!-- new design -->
                                    <div class="col-md-12">
                                        <hr style="margin-top:-5px">
                                    </div>

                                    <div class="col-md-2">
                                        <label style="font-size: 20px;">Monday</label>
                                    </div>

                                    <div class="col-md-1 form-group">
                                        <label> In time*</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="time" name="monday_in" class="form-control date in1" value="">
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <label> Out time*</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="time" name="monday_out" class="form-control date out1" value="">
                                    </div>
                                    <div class="col-md-2" style="margin-top: 12px;">
                                        <label style="font-size: 15px;">Week Off</label>
                                        <input style="font-size: 15px;" type="checkbox" class="week_off1"
                                            name="monday_week_off" value="1">
                                    </div>


                                    <div class="col-md-12">
                                        <hr style="margin-top:-5px">
                                    </div>

                                    <div class="col-md-2">
                                        <label style="font-size: 20px;">Tuesday</label>
                                    </div>

                                    <div class="col-md-1 form-group">
                                        <label> In time*</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="time" name="tuesday_in" class="form-control date in2" value="">
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <label> Out time*</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="time" name="tuesday_out" class="form-control date out2" value="">
                                    </div>
                                    <div class="col-md-2" style="margin-top: 12px;">
                                        <label style="font-size: 15px;">Week Off</label>
                                        <input style="font-size: 15px;" type="checkbox" name="tuesday_week_off"
                                            class="week_off2" value="1">
                                    </div>


                                    <div class="col-md-12">
                                        <hr style="margin-top:-5px">
                                    </div>

                                    <div class="col-md-2">
                                        <label style="font-size: 20px;">Wednesday</label>
                                    </div>

                                    <div class="col-md-1 form-group">
                                        <label> In time*</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="time" name="wednesday_in" class="form-control date in3" value="">
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <label> Out time*</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="time" name="wednesday_out" class="form-control date out3" value="">
                                    </div>
                                    <div class="col-md-2" style="margin-top: 12px;">
                                        <label style="font-size: 15px;">Week Off</label>
                                        <input style="font-size: 15px;" type="checkbox" name="wednesday_week_off"
                                            class="week_off3" value="1">
                                    </div>


                                    <div class="col-md-12">
                                        <hr style="margin-top:-5px">
                                    </div>

                                    <div class="col-md-2">
                                        <label style="font-size: 20px;">Thursday</label>
                                    </div>

                                    <div class="col-md-1 form-group">
                                        <label> In time*</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="time" name="thursday_in" class="form-control date in4" value="">
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <label> Out time*</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="time" name="thursday_out" class="form-control date out4" value="">
                                    </div>
                                    <div class="col-md-2" style="margin-top: 12px;">
                                        <label style="font-size: 15px;">Week Off</label>
                                        <input style="font-size: 15px;" type="checkbox" name="thursday_week_off"
                                            class="week_off4" value="1">
                                    </div>


                                    <div class="col-md-12">
                                        <hr style="margin-top:-5px">
                                    </div>

                                    <div class="col-md-2">
                                        <label style="font-size: 20px;">Friday</label>
                                    </div>

                                    <div class="col-md-1 form-group">
                                        <label> In time*</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="time" name="friday_in" class="form-control date in5" value="">
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <label> Out time*</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="time" name="friday_out" class="form-control date out5" value="">
                                    </div>
                                    <div class="col-md-2" style="margin-top: 12px;">
                                        <label style="font-size: 15px;">Week Off</label>
                                        <input style="font-size: 15px;" type="checkbox" name="friday_week_off"
                                            class="week_off5" value="1">
                                    </div>


                                    <div class="col-md-12">
                                        <hr style="margin-top:-5px">
                                    </div>

                                    <div class="col-md-2">
                                        <label style="font-size: 20px;">Saturday</label>
                                    </div>

                                    <div class="col-md-1 form-group">
                                        <label> In time*</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="time" name="saturday_in" class="form-control date in6" value="">
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <label> Out time*</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="time" name="saturday_out" class="form-control date out6" value="">
                                    </div>
                                    <div class="col-md-2" style="margin-top: 12px;">
                                        <label style="font-size: 15px;">Week Off</label>
                                        <input style="font-size: 15px;" type="checkbox" name="saturday_week_off"
                                            class="week_off6" value="1">
                                    </div>

                                    <div class="col-md-12">
                                        <hr style="margin-top:-5px">
                                    </div>

                                    <div class="col-md-2">
                                        <label style="font-size: 20px;">Sunday</label>
                                    </div>

                                    <div class="col-md-1 form-group">
                                        <label> In time*</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="time" name="sunday_in" class="form-control date in7" value="">
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <label> Out time*</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="time" name="sunday_out" class="form-control date out7" value="">
                                    </div>
                                    <div class="col-md-2" style="margin-top: 12px;">
                                        <label style="font-size: 15px;">Week Off</label>
                                        <input style="font-size: 15px;" type="checkbox" name="sunday_week_off"
                                            class="week_off7" value="1">
                                    </div>
                                    <div class="col-md-12">
                                        <hr style="margin-top:-5px">
                                    </div>



                                    <div class="form-group" align="center" style="margin-top: 5%; margin-left: 45%;">

                                        <input type="submit" name="action_button" class="btn btn-warning" value=Add />
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- edit modal -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="editmodal"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel">Edit office Shift</h5>
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
                                <div class="col-md-6 form-group">
                                    <label>Company *</label>
                                    <select name="company_id" class="form-control selectpicker company_id" id="company_id"
                                        data-live-search="true" data-live-search-style="begins"
                                        title='Select Company Name...'>
                                        <option value="" disabled selected>Company Name</option>
                                        @foreach($companies as $data)
                                        <option value="{{$data->id}}">{{$data->company_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label>Office Shift</label>
                                    <input type="text" name="shift_name" required class="form-control shift_name"  id="shift_name"
                                        placeholder="Office Shift">
                                </div>


                                <div class="col-md-12">
                                    <hr style="margin-top:-5px">
                                </div>

                                <div class="col-md-2">
                                    <label style="font-size: 20px;">Monday</label>
                                </div>

                                <div class="col-md-1 form-group">
                                    <label> In time*</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="time" name="monday_in" id="monday_in" class="form-control date in1" value="">
                                </div>
                                <div class="col-md-1 form-group">
                                    <label> Out time*</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="time" name="monday_out" id="monday_out" class="form-control date out1" value="">
                                </div>
                                <div class="col-md-2" style="margin-top: 12px;">
                                    <label style="font-size: 15px;">Week Off</label>
                                    <input style="font-size: 15px;" type="checkbox" class="week_off1"
                                        name="monday_week_off" id="monday_week_off" value="1">
                                </div>


                                <div class="col-md-12">
                                    <hr style="margin-top:-5px">
                                </div>

                                <div class="col-md-2">
                                    <label style="font-size: 20px;">Tuesday</label>
                                </div>

                                <div class="col-md-1 form-group">
                                    <label> In time*</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="time" name="tuesday_in" id="tuesday_in" class="form-control date in2" value="">
                                </div>
                                <div class="col-md-1 form-group">
                                    <label> Out time*</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="time" name="tuesday_out" id="tuesday_out" class="form-control date out2" value="">
                                </div>
                                <div class="col-md-2" style="margin-top: 12px;">
                                    <label style="font-size: 15px;">Week Off</label>
                                    <input style="font-size: 15px;" type="checkbox" name="tuesday_week_off" id="tuesday_week_off"
                                        class="week_off2" value="1">
                                </div>


                                <div class="col-md-12">
                                    <hr style="margin-top:-5px">
                                </div>

                                <div class="col-md-2">
                                    <label style="font-size: 20px;">Wednesday</label>
                                </div>

                                <div class="col-md-1 form-group">
                                    <label> In time*</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="time" name="wednesday_in" id="wednesday_in" class="form-control date in3" value="">
                                </div>
                                <div class="col-md-1 form-group">
                                    <label> Out time*</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="time" name="wednesday_out" id="wednesday_out" class="form-control date out3" value="">
                                </div>
                                <div class="col-md-2" style="margin-top: 12px;">
                                    <label style="font-size: 15px;">Week Off</label>
                                    <input style="font-size: 15px;" type="checkbox" name="wednesday_week_off" id="wednesday_week_off"
                                        class="week_off3" value="1">
                                </div>


                                <div class="col-md-12">
                                    <hr style="margin-top:-5px">
                                </div>

                                <div class="col-md-2">
                                    <label style="font-size: 20px;">Thursday</label>
                                </div>

                                <div class="col-md-1 form-group">
                                    <label> In time*</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="time" name="thursday_in" class="form-control date in4" id="thursday_in" value="">
                                </div>
                                <div class="col-md-1 form-group">
                                    <label> Out time*</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="time" name="thursday_out" class="form-control date out4" id="thursday_out" value="">
                                </div>
                                <div class="col-md-2" style="margin-top: 12px;">
                                    <label style="font-size: 15px;">Week Off</label>
                                    <input style="font-size: 15px;" type="checkbox" name="thursday_week_off" id="thursday_week_off"
                                        class="week_off4" value="1">
                                </div>


                                <div class="col-md-12">
                                    <hr style="margin-top:-5px">
                                </div>

                                <div class="col-md-2">
                                    <label style="font-size: 20px;">Friday</label>
                                </div>

                                <div class="col-md-1 form-group">
                                    <label> In time*</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="time" name="friday_in" id="friday_in" class="form-control date in5" value="">
                                </div>
                                <div class="col-md-1 form-group">
                                    <label> Out time*</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="time" name="friday_out" id="friday_out" class="form-control date out5" value="">
                                </div>
                                <div class="col-md-2" style="margin-top: 12px;">
                                    <label style="font-size: 15px;">Week Off</label>
                                    <input style="font-size: 15px;" type="checkbox" name="friday_week_off" id="friday_week_off"
                                        class="week_off5" value="1">
                                </div>


                                <div class="col-md-12">
                                    <hr style="margin-top:-5px">
                                </div>

                                <div class="col-md-2">
                                    <label style="font-size: 20px;">Saturday</label>
                                </div>

                                <div class="col-md-1 form-group">
                                    <label> In time*</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="time" name="saturday_in" id="saturday_in" class="form-control date in6" value="">
                                </div>
                                <div class="col-md-1 form-group">
                                    <label> Out time*</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="time" name="saturday_out" id="saturday_out" class="form-control date out6" value="">
                                </div>
                                <div class="col-md-2" style="margin-top: 12px;">
                                    <label style="font-size: 15px;">Week Off</label> 
                                    <input style="font-size: 15px;" type="checkbox" name="saturday_week_off" id="saturday_week_off"
                                        class="week_off6" value="1">
                                </div>

                                <div class="col-md-12">
                                    <hr style="margin-top:-5px">
                                </div>

                                <div class="col-md-2">
                                    <label style="font-size: 20px;">Sunday</label>
                                </div>

                                <div class="col-md-1 form-group">
                                    <label> In time*</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="time" name="sunday_in" id="sunday_in" class="form-control date in7" value="">
                                </div>
                                <div class="col-md-1 form-group">
                                    <label> Out time*</label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="time" name="sunday_out" id="sunday_out" class="form-control date out7" value="">
                                </div>
                                <div class="col-md-2" style="margin-top: 12px;">
                                    <label style="font-size: 15px;">Week Off</label>
                                    <input style="font-size: 15px;" type="checkbox" name="sunday_week_off" id="sunday_week_off"
                                        class="week_off7" value="1">
                                </div>

                                <div class="form-group" align="center" style="margin-top: 5%; margin-left: 45%;">

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
                        <table id="html5-extension" class="table table-hover non-hover datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Company</th>
                                    <th>Shift</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php $i=0; ?>
                                @foreach ($officeshifts as $data)
                                <?php $i=$i+1; ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$data->company_name}}</td>
                                    <td>{{$data->shift_name}}</td>
                                    
                                    @if($data->monday_week_off!=1)
                                    <td style="font-size:x-small;"><?php echo  date('h:i A',strtotime($data->monday_in)) .' To '.date('h:i A',strtotime($data->monday_out)); ?> </td>
                                    @else
                                    <td>Week Off</td>
                                    @endif

                                    @if($data->tuesday_week_off!=1)
                                    <td style="font-size:x-small;"><?php echo  date('h:i A',strtotime($data->tuesday_in)) .' To '.date('h:i A',strtotime($data->tuesday_out)); ?></td>
                                    @else
                                    <td>Week Off</td>
                                    @endif
                                    
                                    @if($data->wednesday_week_off!=1)
                                    <td style="font-size:x-small;"><?php echo  date('h:i A',strtotime($data->wednesday_in)) .' To '.date('h:i A',strtotime($data->wednesday_out)); ?></td>
                                    @else
                                    <td>Week Off</td>
                                    @endif

                                       
                                    @if($data->thursday_week_off!=1)
                                    <td style="font-size:x-small;"><?php echo  date('h:i A',strtotime($data->thursday_in)) .' To '.date('h:i A',strtotime($data->thursday_out)); ?></td>
                                    @else
                                    <td>Week Off</td>
                                    @endif

    
                                    @if($data->friday_week_off!=1)
                                    <td style="font-size:x-small;"><?php echo  date('h:i A',strtotime($data->friday_in)) .' To '.date('h:i A',strtotime($data->friday_out)); ?></td>
                                    @else
                                    <td>Week Off</td>
                                    @endif
                                    
                                    @if($data->saturday_week_off!=1)
                                    <td style="font-size:x-small;"><?php echo  date('h:i A',strtotime($data->saturday_in)) .' To '.date('h:i A',strtotime($data->saturday_out)); ?></td>
                                    @else
                                    <td>Week Off</td>
                                    @endif
                                    
                                    @if($data->sunday_week_off!=1)
                                    <td style="font-size:x-small;"><?php echo  date('h:i A',strtotime($data->sunday_in)) .' To '.date('h:i A',strtotime($data->sunday_out)); ?></td>
                                    @else
                                    <td>Week Off</td>
                                    @endif
                                  
                                   
                                   

                                    <td>

                                        <a href="javascript:void(0);" data-toggle="modal" data-placement="top"
                                            data-target="#editmodal" data-custom-value="{{$data->id}}" class="edit"
                                            title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 text-success">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg></a>
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                            data-custom-value="{{$data->id}}" class="delete" title="Delete"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2 text-danger">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </a>

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
@endsection
@section('js')
<script type="text/javascript">


    $('#sample_form').on('submit', function (event) {
        event.preventDefault();

        $.ajax({
            url: "{{route('hr_masters.storeofficeshift')}}",
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
            url: "{{route('hr_masters.updateofficeshift')}}",
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

        var target = "{{ url('hr_masters/officeshift/edit')}}/" + id;

        $.ajax({
            url: target,
            dataType: "json",
            success: function (html) {
                $('#hidden_id').val(html.id);
                $('#company_id').val(html.company_id);
                $('#shift_name').val(html.shift_name);
                $('#monday_in').val(html.monday_in);
                $('#monday_out').val(html.monday_out);
                $('#tuesday_in').val(html.tuesday_in);
                $('#tuesday_out').val(html.tuesday_out);
                $('#wednesday_in').val(html.wednesday_in);
                $('#wednesday_out').val(html.wednesday_out);
                $('#thursday_in').val(html.thursday_in);
                $('#thursday_out').val(html.thursday_out);
                $('#friday_in').val(html.friday_in);
                $('#friday_out').val(html.friday_out);
                $('#saturday_in').val(html.saturday_in);
                $('#saturday_out').val(html.saturday_out);
                $('#sunday_in').val(html.sunday_in);
                $('#sunday_out').val(html.sunday_out);
                if(html.monday_week_off==1){
                    $('#monday_week_off').prop('checked',true);
                    $('#monday_in').prop('disabled', true);
                    $('#monday_out').prop('disabled', true);
                }else{
                    $('#monday_week_off').prop('checked',false);
                    $('#monday_in').prop('disabled', false);
                    $('#monday_out').prop('disabled', false);
                }

                if(html.tuesday_week_off==1){
                    $('#tuesday_week_off').prop('checked',true);
                    $('#tuesday_in').prop('disabled', true);
                    $('#tuesday_out').prop('disabled', true);
                }else{
                    $('#tuesday_week_off').prop('checked',false);
                    $('#tuesday_in').prop('disabled', false);
                    $('#tuesday_out').prop('disabled', false);
                }

                if(html.wednesday_week_off==1){
                    $('#wednesday_week_off').prop('checked',true);
                    $('#wednesday_in').prop('disabled', true);
                    $('#wednesday_out').prop('disabled', true);
                }else{
                    $('#wednesday_week_off').prop('checked',false);
                    $('#wednesday_in').prop('disabled', false);
                    $('#wednesday_out').prop('disabled', false);
                }
                if(html.thursday_week_off==1){
                    $('#thursday_week_off').prop('checked',true);
                    $('#thursday_in').prop('disabled', true);
                    $('#thursday_out').prop('disabled', true);
                }else{
                    $('#thursday_week_off').prop('checked',false);
                    $('#thursday_in').prop('disabled', false);
                    $('#thursday_out').prop('disabled', false);
                }

                if(html.friday_week_off==1){
                    $('#friday_week_off').prop('checked',true);
                    $('#friday_in').prop('disabled', true);
                    $('#friday_out').prop('disabled', true);
                }else{
                    $('#friday_week_off').prop('checked',false);
                    $('#friday_in').prop('disabled', false);
                    $('#friday_out').prop('disabled', false);
                }

                if(html.saturday_week_off==1){
                    $('#saturday_week_off').prop('checked',true);
                    $('#saturday_in').prop('disabled', true);
                    $('#saturday_out').prop('disabled', true);
                }else{
                    $('#saturday_week_off').prop('checked',false);
                    $('#saturday_in').prop('disabled', false);
                    $('#saturday_out').prop('disabled', false);
                }
                if(html.sunday_week_off==1){
                    $('#sunday_week_off').prop('checked',true);
                    $('#sunday_in').prop('disabled', true);
                    $('#sunday_out').prop('disabled', true);
                }else{
                    $('#sunday_week_off').prop('checked',false);
                    $('#sunday_in').prop('disabled', false);
                    $('#sunday_out').prop('disabled', false);
                }
                
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
                var target = "{{ url('hr_masters/officeshift/delete')}}/" + id;
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
                var target = "{{ url('hr_masters/officeshift/bulkdelete')}}/" + arr;

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

    $("input[type=checkbox]").click(function () {

        for (var i = 1; i <= 7; i++) {
            var weekoff = '.week_off' + i;
            if ($(weekoff).is(':checked')) {
                $('.in' + i).prop('disabled', true);
                $('.out' + i).prop('disabled', true);
            } else {
                $('.in' + i).prop('disabled', false);
                $('.out' + i).prop('disabled', false);
            }
        }
    })
</script>
@endsection