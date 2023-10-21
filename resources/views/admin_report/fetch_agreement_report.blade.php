@extends('layout.layout')
@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div style=" background-color:white; margin-top: 10px;">

                <div class="layout-px-spacing" style="padding:30px !important">

                    <div class="row">

                        <div class="col-md-3">
                            <label for="">Company:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $purchase_work_order_data->company_name }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Location:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $purchase_work_order_data->location_name }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Department:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $purchase_work_order_data->department }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Date:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $purchase_work_order_data->date }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Expense Category:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $purchase_work_order_data->expenses_category }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Vendor Category:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $purchase_work_order_data->vendor_category_name }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Vendor Name:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $purchase_work_order_data->vendor_name }}</label></b>
                        </div>
                        <div class="col-md-12">
                          <table class="table">
                            <thead>
                            <th>Qty</th>
                            <th>Rate</th>
                            <th>Details</th>
                        </thead>
                        <tbody>
                            @foreach($purchase_work_order_items as $item)
                            <tr>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->rate}}</td>
                            <td>{{$item->details}}</td>
                        </tr>
                            @endforeach
                         </tbody>
                          </table>
                        </div>

                        <div class="col-md-3">
                            <label for="">Total Amount:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $purchase_work_order_data->total_amount }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Delivery Date:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $purchase_work_order_data->delivery_date }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">PO or WO validity days:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $purchase_work_order_data->po_wo_validity_days }}</label></b>
                        </div>

                        <div class="col-md-3">
                            <label for="">Approved Authority:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $purchase_work_order_data->approved_by }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Approval Date:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $purchase_work_order_data->approved_date }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Select Template Format:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $purchase_work_order_data->template_file }}</label></b>
                        </div>
                        <div class="col-md-3">
                            <label for="">Generate PO or WO number:</label>
                        </div>
                        <div class="col-md-3">
                            <b><label for="">{{ $purchase_work_order_data->generate_po_wo_number }}</label></b>
                        </div>
                        
                    </div>
                    <div class="row">
                        <button class="btn btn-primary"> <i class="fas fa-print"></i> Print</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
