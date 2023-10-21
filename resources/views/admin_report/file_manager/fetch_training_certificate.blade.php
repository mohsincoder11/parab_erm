@extends('layout.layout')
@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div style=" background-color:white; margin-top: 10px;">
                
                <div class="row" style="padding-left:3.5%; padding-top:10px;">
                    <button id="print_btn"
                    type="download" class="btn btn-primary"> <i class="fa fa-print"></i> Print</button>
                </div>

                <div class="layout-px-spacing" style="padding:30px !important">

                    <div class="row">

                        <div class="col-md-3">
                            <label for="">Company:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $training_report->company_name }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Location:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $training_report->location_name }}</label></b>
                        </div>
                      
                        <div class="col-md-3">
                            <label for="">Training Start Time:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $training_report->training_start_time }}</label></b>
                        </div>

                        <div class="col-md-3">
                            <label for="">Training End Time:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $training_report->training_end_time }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Training Start Date:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $training_report->training_start_date }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Training End Date:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $training_report->training_end_date }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Participant Employee:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $training_report->meeting_participant_employee }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Estimate Training Cost:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $training_report->estimate_training_cost }}</label></b>
                        </div>
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

@stop


@section('js')
<script>

    $(document).on( 'click','#print_btn',function () {
        $("#print_btn").hide();
        var printContents = document.getElementById('content').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        $("#print_btn").show();

});
</script>
@stop