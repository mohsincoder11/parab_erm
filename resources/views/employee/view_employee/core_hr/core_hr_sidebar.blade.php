<div class="tab-pane fade" id="justify-pills-hr" role="tabpanel" aria-labelledby="justify-pills-hr-tab">
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-12 form-group">
                                                <h5>Core HR</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12 layout-spacing">
                                            <div class="statbox widget box box-shadow">
                                                <div class="widget-content widget-content-area vertical-line-pill">
                                                    <div class="row mb-4 mt-3">
                                                        <div class="col-sm-3 col-12">
                                                            <div class="nav flex-column nav-pills mb-sm-0 mb-3 text-center mx-auto" id="v-line-pills-tab" role="tablist" aria-orientation="vertical">
                                                                <a class="nav-link active mb-3" id="v-line-pills-award-tab" data-toggle="pill" href="#v-line-pills-award" role="tab" aria-controls="v-line-pills-award" aria-selected="true">Award</a>
                                                                <a class="nav-link mb-3  text-center" id="v-line-pills-travel-tab" data-toggle="pill" href="#v-line-pills-travel" role="tab" aria-controls="v-line-pills-travel" aria-selected="false">Travel</a>
                                                                <a class="nav-link mb-3  text-center" id="v-line-pills-training-tab" data-toggle="pill" href="#v-line-pills-training" role="tab" aria-controls="v-line-pills-training" aria-selected="false">Training</a>
                                                                <a class="nav-link mb-3  text-center" id="v-line-pills-loan-ticket" data-toggle="pill" href="#v-line-pills-ticket" role="tab" aria-controls="v-line-pills-ticket" aria-selected="false">Ticket</a>
                                                                <a class="nav-link mb-3  text-center" id="v-line-pills-transfer-tab" data-toggle="pill" href="#v-line-pills-transfer" role="tab" aria-controls="v-line-pills-transfer" aria-selected="false">Transfer</a>
                                                                <a class="nav-link mb-3  text-center" id="v-line-pills-promotion-tab" data-toggle="pill" href="#v-line-pills-promotion" role="tab" aria-controls="v-line-pills-promotion" aria-selected="false">Promotion</a>
                                                                <a class="nav-link mb-3  text-center" id="v-line-pills-complaint-tab" data-toggle="pill" href="#v-line-pills-complaint" role="tab" aria-controls="v-line-pills-complaint" aria-selected="false">Complaint</a>
                                                                <a class="nav-link mb-3  text-center" id="v-line-pills-warning-tab" data-toggle="pill" href="#v-line-pills-warning" role="tab" aria-controls="v-line-pills-warning" aria-selected="false">Warning</a>

                                                            </div>
                                                        </div>

                                                        <div class="col-sm-9 col-12">
                                                            <div class="tab-content" id="v-line-pills-tabContent">
                                                            @include('employee.view_employee.core_hr.award')
                                                            @include('employee.view_employee.core_hr.complaint')
                                                            @include('employee.view_employee.core_hr.promotion')
                                                            @include('employee.view_employee.core_hr.ticket')
                                                            @include('employee.view_employee.core_hr.training')
                                                            @include('employee.view_employee.core_hr.transfer')
                                                            @include('employee.view_employee.core_hr.travel')
                                                            @include('employee.view_employee.core_hr.warning')
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>