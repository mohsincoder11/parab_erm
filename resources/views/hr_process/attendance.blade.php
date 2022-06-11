@extends('layout.layout')
@section('content')
<style>
    div.scrollmenu {
        /* background-color: #333; */
        overflow: auto;
        white-space: nowrap;
    }

    div.scrollmenu a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    div.scrollmenu a:hover {
        background-color: #777;
    }

    div.ex1 {
        /* background-color: lightblue; */
        height: 100%;
        width: 100%;
        overflow-y: scroll;
    }
</style>
<div id="content" class="main-content">
    <div class="layout-px-spacing">


        <div style="margin-top: 3%; margin-bottom: 3%;">

            <div style="background-color: white; ">

                <div style="padding-top: 1%; margin-left: 40%;">
                    <h4>Mark Monthly Attendance</h4>
                </div>


                <form action="{{url('attendance')}}" method="GET">
                    @csrf
                    <div class="row" id="cancel-row" style="margin-left: 5%;  margin-right: 5%; ">


                        <div class="col-md-3 form-group" style=" margin-top: 2%;margin-bottom: 5%;">
                            <label>Company*</label>
                            <select name="company_id" id="company_id" class="form-control selectpicker dynamic basic"
                                data-live-search="true" data-live-search-style="begins" title='Select...' required>
                                <option value="" disabled selected>Select</option>
                                @foreach($companies as $data)
                                @if(isset($_GET['company_id']))
                                <option value="{{$data->id}}" {{($data->
                                    id==$_GET['company_id'])?'selected':''}}>{{$data->company_name}}</option>
                                @else
                                <option value="{{$data->id}}">{{$data->company_name}}</option>
                                @endif
                                @endforeach


                            </select>
                        </div>

                        <div class="col-md-3 form-group" style="margin-top: 2%; margin-bottom: 5%;">
                            <label>Month*</label>
                            <input type="month" name="month" required class="form-control" placeholder=""
                                value="{{date('Y-m')}}">

                        </div>

                        <div class="col-md-3 form-group" style="margin-top: 2%; margin-bottom: 5%;">
                            <label>Select Employee</label>
                            <select name="employee_id" id="employee_id" class="form-control selectpicker basic"
                                data-live-search="true" data-live-search-style="begins" title='Select...'>
                                @if($all_employees)
                                <option value="" disabled selected>Select</option>
                                @foreach($all_employees as $data)

                                @if(isset($_GET['employee_id']))
                                <option value="{{$data->id}}" {{($data->
                                    id==$_GET['employee_id'])?'selected':''}}>{{$data->full_name}}</option>
                                @else
                                <option value="{{$data->id}}">{{$data->full_name}}</option>
                                @endif

                                @endforeach
                                @endif
                            </select>

                        </div>

                        <div class="col-md-3 form-group" style="margin-top: 5%; margin-bottom: 5%;">
                            <button type="submit" class="btn btn-primary">Search</button>

                        </div>


                    </div>
                </form>


                @if($employees)
                @php
                $j=0;
                @endphp
                @foreach($employees as $data)
                <div class="scrollmenu" style="margin-bottom:1%">
                    <div class="ex1">
                        <div class="col-md-7">

                            <table cellpadding="5" style="border-color: #ccc;text-align: center;" width="100%"
                                border="1">
                                <thead>
                                    <tr>
                                        <th>Employee Name</th>
                                        <?php
for($start_date=$first_date;$start_date<=$last_date;$start_date++)
{
    echo '<th>'.date('d M Y',strtotime($start_date)).'</th>';
}
?>
                                    </tr>
                                </thead>
                                <tbody">
                                    <tr>
                                        <td width="20px">
                                            {{$data->full_name}}
                                        </td>
                                        <?php
for($start_date=$first_date;$start_date<=$last_date;$start_date++)
{
    $day=strtolower(date('l', strtotime($start_date)));
    $day_in=$day.'_in';
    $day_out=$day.'_out';
    $day_week_off=$day.'_week_off';
    if($data->officeshift)
    {
        $shift_in=$data->officeshift->$day_in;
        $shift_out=$data->officeshift->$day_out;
        $weekOff=$data->officeshift->$day_week_off;
    }
    else
    {
        $shift_in='00:00';
        $shift_out='00:00';
        $weekOff=0;

    }
    
    $employeeLastAttendance=\App\Attendance::where(['employee_id' => $data->id,'attendance_date'=>$start_date])->first();
if(!$employeeLastAttendance)
{
$employeeLastAttendance['attendance_status']='';
$employeeLastAttendance['clock_in']='';
$employeeLastAttendance['clock_out']='';
}
    $j++;
    ?>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td colspan="2">
                                                        <select class="attendance_status{{$j}}"
                                                            onchange="markAttendance('<?php echo $j;?>');"
                                                            name="attendance_status"
                                                            style="width: 100%;border: 1px solid #d4d4d4;color: #878686;">
                                                            <option value="" selected disabled></option>
                                                            <option value="present" <?php echo
                                                                ($employeeLastAttendance['attendance_status'])=='present'
                                                                ?'selected':''; ?>>P</option>
                                                            <option value="Half Day" <?php echo
                                                                ($employeeLastAttendance['attendance_status'])=='Half Day'
                                                                ?'selected':''; ?>>HD</option>
                                                            <option value="absent" <?php echo
                                                                ($employeeLastAttendance['attendance_status'])=='absent'
                                                                ?'selected':''; ?>>A</option>
                                                            <option value="leave" <?php echo
                                                                ($employeeLastAttendance['attendance_status'])=='leave'
                                                                ?'selected':''; ?>>L</option>
                                                            <option value="holiday" <?php echo
                                                                ($employeeLastAttendance['attendance_status'])=='holiday'
                                                                ?'selected':''; ?>>H</option>
                                                            @if($weekOff==1)
                                                            <option value="Weak Off" <?php echo
                                                                ($employeeLastAttendance['attendance_status'])=='Weak Off'
                                                                ?'selected':''; ?>>WO</option>
                                                            @endif
                                                        </select>
                                                    </td>
                                                </tr>
                                                <?php $leaves=App\LeaveType::all(); ?>
                                                <tr class="leaveSection{{$j}}" style="display: none;">
                                            <td colspan="2">
                                                <select class="leave_type{{$j}}" onchange="markAttendance('<?php echo $j;?>');" name="leave_type" id="leave_type" style="width: 100%;border: 1px solid #d4d4d4;color: #878686;">
                                                <option value="" selected disabled>Leave Type</option>
                                                @foreach($leaves as $data)
                                                <option value="{{$data->id}}" >{{$data->leave_type}}</option>
                                                @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                                <tr>
                                                    <td>In</td>
                                                    <td><input type="time" class="clock_in{{$j}}"
                                                            onchange="markAttendance('<?php echo $j;?>');"
                                                            name="clock_in"
                                                            style="border: 1px solid #d4d4d4;color: #878686;"
                                                            value="<?php if($employeeLastAttendance['clock_in']!='' && $employeeLastAttendance['clock_in']!='00:00') { echo $employeeLastAttendance['clock_in']; } ?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Out</td>
                                                    <td><input type="time" class="clock_out{{$j}}"
                                                            onchange="markAttendance('<?php echo $j;?>');"
                                                            name="clock_out"
                                                            style="border: 1px solid #d4d4d4;color: #878686;"
                                                            value="<?php if($employeeLastAttendance['clock_out']!='' && $employeeLastAttendance['clock_out']!='00:00') { echo $employeeLastAttendance['clock_out']; } ?>">
                                                    </td>
                                                </tr>
                                            </table>
                                            <?php if(!isset($employeeLastAttendance->id)){
                                                ?>
                                                <input type="hidden" class="isNew{{$j}}" name="isNew" value="1">
                                                <?php
                                             } ?>
                                            
                                            <input type="hidden" class="date{{$j}}" name="date[]"
                                                value="{{$start_date}}">
                                            <input type="hidden" class="employee_id{{$j}}" name="employee_id[]"
                                                value="{{$data->id}}">

                                            <input type="hidden" class="shift_in{{$j}}" name="shift_in[]"
                                                value="{{$shift_in}}">
                                            <input type="hidden" class="shift_out{{$j}}" name="shift_out[]"
                                                value="{{$shift_out}}">
                                        </td>
                                        <?php
                                            }
                                            ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

        </div>
    </div>

    <!--  END CONTENT AREA  -->
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        $('.dynamic').change(function () {
            if ($(this).val() !== '') {
                let id = $(this).val();
                let _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ url('getAllEmployees')}}/" + id,
                    method: "POST",
                    dataType: "JSON",
                    success: function (result) {
                        $('#employee_id').empty();
                        $('#employee_id').append(`<option value="" disabled selected>Select</option>`);
                        for (i = 0; i < result.length; i++) {
                            $('#employee_id').append(`<option value="${result[i].id}">
                                       ${result[i].full_name}
                                  </option>`);
                        }

                    }
                });
            }
        });
    });

</script>
<script type="text/javascript">

    function markAttendance(i) {
        var isNew = $('.isNew' + i).val();
        var attendance_status = $('.attendance_status' + i).val();
        if (attendance_status == 'Half Day') {
            $('.clock_in' + i).val('');
            $('.clock_out' + i).val('');
        }

        var clock_in = $('.clock_in' + i).val();
        var clock_out = $('.clock_out' + i).val();
        var attendance_date = $('.date' + i).val();
        var employee_id = $('.employee_id' + i).val();
        var shift_in = $('.shift_in' + i).val();
        var shift_out = $('.shift_out' + i).val();

        var leave_id= $('#leave_type').val();
        console.log(leave_id)
        if(attendance_status=='leave'  && leave_id=='' )
        {
            $('.leaveSection'+i).show();
            $('.clock_in'+i).prop('disabled', true);
            $('.clock_out'+i).prop('disabled', true);
             return false;
        }
        else if(attendance_status!='leave')
        { 
            $('.clock_in'+i).prop('disabled', false);
            $('.clock_out'+i).prop('disabled', false);
            $('#leave_type').val('');
            leave_id='';
            $('.leaveSection'+i).hide();
        }

        if(!(attendance_status=='present' || attendance_status=='Half Day')){
            $('.clock_in'+i).prop('disabled', true);
            $('.clock_out'+i).prop('disabled', true);
        }

        if (attendance_status == 'present' && (clock_in == '' || clock_out == '')) {
            return false;
        }

        $.ajax({
            url: "{{ route('saveMonthlyAttendance') }}",
            method: "GET",
            dataType: 'json',
            data: {
                // data: {
                isNew: isNew,
                "_token": "{{ csrf_token()}}",
                status: attendance_status,
                clock_in: clock_in,
                clock_out: clock_out,
                clock_in: clock_in,
                attendance_date: attendance_date,
                employee_id: employee_id,
                shift_in: shift_in,
                shift_out: shift_out,
                leave_id: leave_id
                // }

            },
            success: function (result) {

                // console.log(result['status'])

                if (result.status) {

                    Snackbar.show({
                        text: 'Attendance Saves Successfully !',
                        actionTextColor: '#fff',
                        backgroundColor: '#8dbf42',
                        duration: 3000,
                        pos: 'top-center'
                    });


                }
                else {
                    Snackbar.show({
                        text: 'Something Went Wrong !',
                        actionTextColor: '#fff',
                        backgroundColor: '#e2a03f',
                        duration: 3000,
                        pos: 'top-center'
                    });
                }
            }
        });

    }
</script>
@endsection