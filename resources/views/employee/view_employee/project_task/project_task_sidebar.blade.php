<div class="tab-pane fade" id="justify-pills-project" role="tabpanel" aria-labelledby="justify-pills-project-tab">

<div class="row" style="padding: 10px;">
    <div class="col-md-12 form-group">
        <h5>Project & Task</h5>
    </div>
</div>
<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area vertical-line-pill">
            <div class="row mb-4 mt-3">
                <div class="col-sm-3 col-12">
                    <div class="nav flex-column nav-pills mb-sm-0 mb-3 text-center mx-auto" id="v-line-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active mb-3" id="v-line-pills-project-tab" data-toggle="pill" href="#v-line-pills-project" role="tab" aria-controls="v-line-pills-project" aria-selected="true">Project</a>
                        <a class="nav-link mb-3  text-center" id="v-line-pills-task-tab" data-toggle="pill" href="#v-line-pills-task" role="tab" aria-controls="v-line-pills-task" aria-selected="false">Task</a>
                    </div>
                </div>

                <div class="col-sm-9 col-12">
                    <div class="tab-content" id="v-line-pills-tabContent">
                       @include('employee.view_employee.project_task.project')
                       @include('employee.view_employee.project_task.task')
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


</div>