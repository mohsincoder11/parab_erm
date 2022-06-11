<div class="tab-pane fade" id="v-line-pills-allowances" role="tabpanel" aria-labelledby="v-line-pills-allowances-tab">
                                                                    <h5 class="mb-4">All Allowances</h5>
                                                                    <div>
                                                                        <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal" data-target=".bd-example-modal-lg11"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="h-6 w-6"
                                                                                fill="none"
                                                                                viewBox="0 0 24 24"
                                                                                stroke="currentColor"
                                                                                stroke-width="2">
                                                                                <path
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                                            </svg>Add
                                                                            Allowances</button>


                                                                    </div>

                                                                    <div class="modal fade bd-example-modal-lg11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel11" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="myLargeModalLabel11">
                                                                                        Add Allowances
                                                                                    </h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <svg aria-hidden="true"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24"
                                                                                            height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-width="2"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            class="feather feather-x">
                                                                                            <line
                                                                                                x1="18"
                                                                                                y1="6"
                                                                                                x2="6"
                                                                                                y2="18">
                                                                                            </line>
                                                                                            <line
                                                                                                x1="6"
                                                                                                y1="6"
                                                                                                x2="18"
                                                                                                y2="18">
                                                                                            </line>
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>

                                                                                <div class="row" style="padding: 10px;">
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label>Allowances
                                                                                            Type
                                                                                            *</label>
                                                                                        <select class="form-control selectpicker" data-live-search="true" data-live-search-style="begins" title='Select Company Type...'>
                                                                                            <option
                                                                                                value=""
                                                                                                disabled
                                                                                                selected>
                                                                                                Select
                                                                                                Allowances Type
                                                                                            </option>
                                                                                            <option
                                                                                                value="corporation">
                                                                                                Taxable
                                                                                            </option>
                                                                                            <option
                                                                                                value="corporation">
                                                                                                Non-Taxable
                                                                                            </option>
                                                                                            <option
                                                                                                value="corporation">
                                                                                            </option>

                                                                                        </select>
                                                                                    </div>

                                                                                    <div class="col-md-6 form-group">
                                                                                        <label>Allowances
                                                                                            Title
                                                                                            *</label>
                                                                                        <input type="text" required class="form-control" placeholder="Document No">
                                                                                    </div>


                                                                                    <div class="col-md-6 form-group">
                                                                                        <label>(₹)Allowances
                                                                                            Amount
                                                                                            *</label>
                                                                                        <input type="date" class="form-control date" value="">
                                                                                    </div>
                                                                                    <div class="form-group" align="center" style="margin-top: 5%; margin-left: 45%;">

                                                                                        <input type="submit" name="action_button" class="btn btn-primary" value=Add />
                                                                                    </div>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" id="cancel-row">
                                                                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                                            <div class="widget-content widget-content-area br-6">
                                                                                <div class="table-responsive mb-4 mt-4">
                                                                                    <table id="alter_pagination11" class="table table-hover" style="width:100%">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Allowance Type</th>
                                                                                                <th>Allowance Title</th>
                                                                                                <th>(₹)Allowances Amount
                                                                                                </th>
                                                                                                <th class="text-center">Action</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Taxable</td>
                                                                                                <td>HRA</td>
                                                                                                <td>₹ 4000</td>
                                                                                                <td class="text-center">
                                                                                                    <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit" data-target="#editmodel"><svg
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        stroke="currentColor"
                                                                                                        stroke-width="2"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        class="feather feather-edit-2 text-success">
                                                                                                        <path
                                                                                                            d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                                        </path>
                                                                                                    </svg></a>
                                                                                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        stroke="currentColor"
                                                                                                        stroke-width="2"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        class="feather feather-trash-2 text-danger">
                                                                                                        <polyline
                                                                                                            points="3 6 5 6 21 6">
                                                                                                        </polyline>
                                                                                                        <path
                                                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                                        </path>
                                                                                                        <line
                                                                                                            x1="10"
                                                                                                            y1="11"
                                                                                                            x2="10"
                                                                                                            y2="17">
                                                                                                        </line>
                                                                                                        <line
                                                                                                            x1="14"
                                                                                                            y1="11"
                                                                                                            x2="14"
                                                                                                            y2="17">
                                                                                                        </line>
                                                                                                    </svg></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Taxable</td>
                                                                                                <td>Special Allowance</td>
                                                                                                <td>₹ 4000</td>
                                                                                                <td class="text-center">
                                                                                                    <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit" data-target="#editmodel"><svg
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        stroke="currentColor"
                                                                                                        stroke-width="2"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        class="feather feather-edit-2 text-success">
                                                                                                        <path
                                                                                                            d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                                        </path>
                                                                                                    </svg></a>
                                                                                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        stroke="currentColor"
                                                                                                        stroke-width="2"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        class="feather feather-trash-2 text-danger">
                                                                                                        <polyline
                                                                                                            points="3 6 5 6 21 6">
                                                                                                        </polyline>
                                                                                                        <path
                                                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                                        </path>
                                                                                                        <line
                                                                                                            x1="10"
                                                                                                            y1="11"
                                                                                                            x2="10"
                                                                                                            y2="17">
                                                                                                        </line>
                                                                                                        <line
                                                                                                            x1="14"
                                                                                                            y1="11"
                                                                                                            x2="14"
                                                                                                            y2="17">
                                                                                                        </line>
                                                                                                    </svg></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Taxable</td>
                                                                                                <td>Travelling Allowance</td>
                                                                                                <td>₹ 2000</td>
                                                                                                <td class="text-center">
                                                                                                    <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit" data-target="#editmodel"><svg
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        stroke="currentColor"
                                                                                                        stroke-width="2"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        class="feather feather-edit-2 text-success">
                                                                                                        <path
                                                                                                            d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                                        </path>
                                                                                                    </svg></a>
                                                                                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        stroke="currentColor"
                                                                                                        stroke-width="2"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        class="feather feather-trash-2 text-danger">
                                                                                                        <polyline
                                                                                                            points="3 6 5 6 21 6">
                                                                                                        </polyline>
                                                                                                        <path
                                                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                                        </path>
                                                                                                        <line
                                                                                                            x1="10"
                                                                                                            y1="11"
                                                                                                            x2="10"
                                                                                                            y2="17">
                                                                                                        </line>
                                                                                                        <line
                                                                                                            x1="14"
                                                                                                            y1="11"
                                                                                                            x2="14"
                                                                                                            y2="17">
                                                                                                        </line>
                                                                                                    </svg></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                        <!-- <tfoot>
                                                                                            <tr>
                                                                                                <th>Name</th>
                                                                                                <th>Position</th>
                                                                                                <th>Office</th>
                                                                                                <th>Age</th>
                                                                                                <th>Start date</th>
                                                                                                <th>Salary</th>
                                                                                                <th class="text-center">Action</th>
                                                                                            </tr>
                                                                                        </tfoot> -->
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                </div>