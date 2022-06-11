<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Company;
use App\Employee;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function attendance(Request $request)
    {

        if ($request->company_id) {

            $data['all_employees'] = Employee::where('employees.company_id', $request->company_id)->get();
            $data['first_date'] = date('Y-m-d', strtotime('first day of ' . $request->month));
            $data['last_date'] = date('Y-m-d', strtotime('last day of ' . $request->month));

            $current_day_in = strtolower(Carbon::now()->format('l')) . '_in';
            $current_day_out = strtolower(Carbon::now()->format('l')) . '_out';

            $data['employees'] = Employee::with('officeshift');
            if ($request->employee_id) {
                $data['employees'] = $data['employees']->where('employees.id', $request->employee_id);
            }
            $data['employees'] = $data['employees']
                ->where('employees.company_id', $request->company_id)
                ->orderBy('employees.id', 'ASC')
                ->get();
        } else {

            $data['employees'] = [];
            $data['all_employees'] = [];
        }
        $data['companies'] = Company::all();
        return view('hr_process.attendance', $data);
    }

    public function saveMonthlyAttendance(Request $request)
    {

        $data = [];

        //current day
        $current_day = now()->format(env('Date_Format'));
      


        //getting the latest instance of employee_attendance
        $employee_attendance_last = Attendance::where('attendance_date', $request->attendance_date)
            ->where('employee_id', $request->employee_id)->orderBy('id', 'desc')->first() ?? null;

        $clock_in = new DateTime($request->clock_in);
        $clock_out = new DateTime($request->clock_out);

        $data['employee_id'] = $request->employee_id;
        $data['attendance_date'] = date('Y/m/d', strtotime($request->attendance_date));

        if ($request->status == 'present') {
            //return json_encode($request->status);
            //shift in-shift out timing

            $shift_in = new DateTime($request->shift_in);
            $shift_out = new DateTime($request->shift_out);
            //if employee attendance record was not found
            // FOR CLOCK IN
            if (!empty($employee_attendance_last->id)) {

                // if employee is late
                if ($clock_in > $shift_in) {
                    $timeDifference = $shift_in->diff($clock_in)->format('%H:%I');
                    $data['clock_in'] = $clock_in->format('H:i');
                    $data['time_late'] = $timeDifference;
                } // if employee is early or on time
                else {
                    $data['clock_in'] = $shift_in->format('H:i');
                }
                // dd($data['clock_in']);
                $data['attendance_status'] = 'present';
                // $data['clock_in_out'] = 1;
                if ($clock_out < $shift_out) {
                    $timeDifference = $shift_out->diff($clock_out)->format('%H:%I');
                    $data['clock_out'] = $clock_out->format('H:i');
                    $data['early_leaving'] = $timeDifference;
                } // if employee is doing overtime
                elseif ($clock_out > $shift_out) {
                    $timeDifference = $shift_out->diff($clock_out)->format('%H:%I');
                    $data['clock_out'] = $clock_out->format('H:i');
                    $data['overtime'] = $timeDifference;
                } //if clocked out in time
                else {
                    $data['clock_out'] = $shift_out->format('H:i');
                }

                try {
                    // last clock in (needed for calculation of overtime after shift)
                    $employee_last_clock_in = new DateTime($request->clock_in);
                } catch (Exception $e) {
                    return $e;
                }

                // if employee clocked in after shift time is over
                if ($request->clock_in > $shift_out) {
                    $data['overtime'] = $employee_last_clock_in->diff($current_time)->format('%H:%I');
                }



                // calculating total work
                $total_work = $employee_last_clock_in->diff($clock_out)->format('%H:%I');
                $data['total_work'] = $total_work;

                //for leave
                $data['leave_id'] = $request->leave_id;


                // return json_encode($data);
                //creating new attendance record

                Attendance::create($data);
                $response['status'] = true;
                $response['message'] = 'Attendance Marked Successfully';

                return json_encode($response);
            }



            // if there is a record of employee attendance
            //FOR CLOCK OUT
            if ($employee_attendance_last) {
                // if employee is late
                if ($clock_in > $shift_in) {
                    $timeDifference = $shift_in->diff($clock_in)->format('%H:%I');
                    $data['clock_in'] = $clock_in->format('H:i');
                    $data['time_late'] = $timeDifference;
                } // if employee is early or on time
                else {
                    $data['clock_in'] = $shift_in->format('H:i');
                }
                // dd($data['clock_in']);
                $data['attendance_status'] = 'present';
                // if employee is early leaving
                if ($clock_out < $shift_out) {
                    $timeDifference = $shift_out->diff($clock_out)->format('%H:%I');
                    $data['clock_out'] = $clock_out->format('H:i');
                    $data['early_leaving'] = $timeDifference;
                } // if employee is doing overtime
                elseif ($clock_out > $shift_out) {
                    $timeDifference = $shift_out->diff($clock_out)->format('%H:%I');
                    $data['clock_out'] = $clock_out->format('H:i');
                    $data['overtime'] = $timeDifference;
                } //if clocked out in time
                else {
                    $data['clock_out'] = $shift_out->format('H:i');
                }

                try {
                    // last clock in (needed for calculation of overtime after shift)
                    $employee_last_clock_in = new DateTime($request->clock_in);
                } catch (Exception $e) {
                    return $e;
                }

                // if employee clocked in after shift time is over
                if ($request->clock_in > $shift_out) {
                    $data['overtime'] = $employee_last_clock_in->diff($current_time)->format('%H:%I');
                }

                $data['clock_out_ip'] = $request->ip();

                // calculating total work
                $total_work = $employee_last_clock_in->diff($clock_out)->format('%H:%I');
                $data['total_work'] = $total_work;
                $data['clock_in_out'] = 0;

                $data['leave_id'] = $request->leave_id;
                //updating record
                $attendance = Attendance::findOrFail($employee_attendance_last->id);
                $attendance->update($data);


                $response['status'] = true;
                $response['message'] = 'Attendance Updated Successfully';

                return json_encode($response);
            }
        } else {

            $data['clock_in'] = '00:00';
            $data['clock_out'] = '00:00';
            $data['early_leaving'] = '00:00';
            $data['time_late'] = '00:00';
            $data['total_work'] = '00:00';
            $data['overtime'] = '00:00';
            $data['total_rest'] = '00:00';
            $data['attendance_status'] = $request->status;
            $data['leave_id'] = $request->leave_id;

            if (!$employee_attendance_last) {
                //creating new attendance record

                Attendance::create($data);
            }
            if ($employee_attendance_last) {
                //Update attendance record

                Attendance::where('employee_id', $request->employee_id)->where('attendance_date', $request->attendance_date)->update($data);
            }

            $response['status'] = true;
            $response['message'] = 'Attendance Updated Successfully';

            return json_encode($response);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function getAllEmployees(Request $request)
    {
        $data = Employee::whereCompany_id($request->company_id)->get();
        $output = '';
        foreach ($data as $row) {
            $output .= '<option value=' . $row->id . '>' . $row->full_name . '</option>';
        }

        return json_encode($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
