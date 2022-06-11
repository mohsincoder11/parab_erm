
<div class="tab-pane fade show active" id="justify-pills-home" role="tabpanel" aria-labelledby="justify-pills-home-tab">
    <div class="row" style="padding: 10px;">
        <div class="col-md-12 form-group">
            <h5>General Information</h5>
        </div>
    </div>
    <div class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area vertical-line-pill">
                <div class="row mb-4 mt-3">
                    <div class="col-sm-3 col-12">
                        <div class="nav flex-column nav-pills mb-sm-0 mb-3 text-center mx-auto" id="v-line-pills-tab"
                            role="tablist" aria-orientation="vertical">
                            <a class="nav-link active mb-3" id="v-line-pills-home-tab" data-toggle="pill"
                                href="#v-line-pills-home" role="tab" aria-controls="v-line-pills-home"
                                aria-selected="true">Basic</a>
                            <!-- <a class="nav-link mb-3  text-center" id="v-line-pills-profile-tab" data-toggle="pill"
                                href="#v-line-pills-profile" role="tab" aria-controls="v-line-pills-profile"
                                aria-selected="false">Immigration</a>
                            <a class="nav-link mb-3  text-center" id="v-line-pills-messages-tab" data-toggle="pill"
                                href="#v-line-pills-messages" role="tab" aria-controls="v-line-pills-messages"
                                aria-selected="false">Emergency Contacts</a>
                            <a class="nav-link mb-3  text-center" id="v-line-pills-social-tab" data-toggle="pill"
                                href="#v-line-pills-social" role="tab" aria-controls="v-line-pills-social"
                                aria-selected="false">Social Profile</a>
                            <a class="nav-link mb-3  text-center" id="v-line-pills-document-tab" data-toggle="pill"
                                href="#v-line-pills-document" role="tab" aria-controls="v-line-pills-document"
                                aria-selected="false">Document</a>
                            <a class="nav-link mb-3  text-center" id="v-line-pills-qualification-tab" data-toggle="pill"
                                href="#v-line-pills-qualification" role="tab" aria-controls="v-line-pills-qualification"
                                aria-selected="false">Qualification</a>
                            <a class="nav-link mb-3  text-center" id="v-line-pills-experience-tab" data-toggle="pill"
                                href="#v-line-pills-experience" role="tab" aria-controls="v-line-pills-experience"
                                aria-selected="false">Work Experience</a>
                            <a class="nav-link mb-3  text-center" id="v-line-pills-account-tab" data-toggle="pill"
                                href="#v-line-pills-account" role="tab" aria-controls="v-line-pills-account"
                                aria-selected="false">Bank Account</a> -->
                        </div>
                    </div>

                    <div class="col-sm-9 col-12">
                        <div class="tab-content" id="v-line-pills-tabContent">
                        @include('employee.view_employee.general.basic')
                        @include('employee.view_employee.general.immigration')
                        @include('employee.view_employee.general.bank_account')
                        @include('employee.view_employee.general.document')
                        @include('employee.view_employee.general.emergency_contact')
                        @include('employee.view_employee.general.qualification')
                        @include('employee.view_employee.general.social_profile')
                        @include('employee.view_employee.general.work_experiance')
                            </div>
                            </div>
                </div>

            </div>
        </div>
    </div>
</div>


