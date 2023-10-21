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
                            <b><label for="">{{ $meeting_report->company_name }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Location:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $meeting_report->location_name }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Department:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $meeting_report->department }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Meeting Id:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $meeting_report->meeting_id }}</label></b>
                        </div>

                        <div class="col-md-3">
                            <label for="">Meeting Date:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $meeting_report->meeting_date }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Meeting Type:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $meeting_report->meeting_type }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Meeting Proposer Employee:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $meeting_report->proposer_employee }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Meeting Coordinator Employee:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $meeting_report->proposer_employee }}</label></b>
                        </div>
                        <div class="col-md-12">
                          <table class="table">
                            <thead>
                            <th>perticular</th>
                            <th>Price</th>
                            {{-- <th>Details</th> --}}
                        </thead>
                        <tbody>
                            @foreach($meetings_items_detail as $item)
                            <tr>
                            <td>{{$item->perticular}}</td>
                            <td>{{$item->price}}</td>
                            {{-- <td>{{$item->details}}</td> --}}
                        </tr>
                            @endforeach
                         </tbody>
                          </table>
                        </div>

                        <div class="col-md-3">
                            <label for="">Estimate Amount:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $meeting_report->estimate_amount }}</label></b>
                        </div>

                        <div class="col-md-3">
                            <label for="">Approved Authority:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $meeting_report->approve_by }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Approval Date:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $meeting_report->approve_date }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Approve Amount:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $meeting_report->approve_amount }}</label></b>
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
