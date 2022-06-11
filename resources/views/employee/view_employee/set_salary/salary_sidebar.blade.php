<div class="tab-pane fade" id="justify-pills-contact" role="tabpanel" aria-labelledby="justify-pills-contact-tab">
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-12 form-group">
                                                <h5>Salary Information</h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-12 layout-spacing">
                                            <div class="statbox widget box box-shadow">
                                                <div class="widget-content widget-content-area vertical-line-pill">
                                                    <div class="row mb-4 mt-3">
                                                        <div class="col-sm-3 col-12">
                                                            <div class="nav flex-column nav-pills mb-sm-0 mb-3 text-center mx-auto" id="v-line-pills-tab" role="tablist" aria-orientation="vertical">
                                                                <a class="nav-link active mb-3" id="v-line-pills-salary-tab" data-toggle="pill" href="#v-line-pills-salary" role="tab" aria-controls="v-line-pills-salary" aria-selected="true">Basic Salary </a>
                                                                <a class="nav-link mb-3  text-center" id="v-line-pills-allowances-tab" data-toggle="pill" href="#v-line-pills-allowances" role="tab" aria-controls="v-line-pills-allowances" aria-selected="false">Allowances</a>
                                                                <a class="nav-link mb-3  text-center" id="v-line-pills-commissions-tab" data-toggle="pill" href="#v-line-pills-commissions" role="tab" aria-controls="v-line-pills-commissions" aria-selected="false">Commissions</a>
                                                                <a class="nav-link mb-3  text-center" id="v-line-pills-loan-tab" data-toggle="pill" href="#v-line-pills-loan" role="tab" aria-controls="v-line-pills-loan" aria-selected="false">Loan</a>
                                                                <a class="nav-link mb-3  text-center" id="v-line-pills-deductions-tab" data-toggle="pill" href="#v-line-pills-deductions" role="tab" aria-controls="v-line-pills-deductions" aria-selected="false">Statutory Deductions</a>
                                                                <a class="nav-link mb-3  text-center" id="v-line-pills-payment-tab" data-toggle="pill" href="#v-line-pills-payment" role="tab" aria-controls="v-line-pills-payment" aria-selected="false">Other Payment</a>
                                                                <a class="nav-link mb-3  text-center" id="v-line-pills-overtime-tab" data-toggle="pill" href="#v-line-pills-overtime" role="tab" aria-controls="v-line-pills-overtime" aria-selected="false">Overtime</a>

                                                            </div>
                                                        </div>

                                                        <div class="col-sm-9 col-12">
                                                            <div class="tab-content" id="v-line-pills-tabContent">
                                                              @include('employee.view_employee.set_salary.basic_salary')
                                                              @include('employee.view_employee.set_salary.allowances')
                                                              @include('employee.view_employee.set_salary.commission')
                                                              @include('employee.view_employee.set_salary.loan')
                                                              @include('employee.view_employee.set_salary.other_payment')
                                                              @include('employee.view_employee.set_salary.overtime')
                                                              @include('employee.view_employee.set_salary.statutory_deduction')
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>