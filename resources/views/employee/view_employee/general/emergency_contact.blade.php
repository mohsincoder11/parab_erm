<div class="tab-pane fade" id="v-line-pills-messages" role="tabpanel" aria-labelledby="v-line-pills-messages-tab">

    <h5 class="mb-4">Emergency Contacts</h5>
    <div>
        <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal"
            data-target=".bd-example-modal-lg1"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>Add
            Contact</button>


    </div>

    <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">
                        Add New Contact
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18">
                            </line>
                            <line x1="6" y1="6" x2="18" y2="18">
                            </line>
                        </svg>
                    </button>
                </div>

                <div class="row" style="padding: 10px;">
                    <div class="col-md-6 form-group">
                        <label>Relation
                            *</label>
                        <select class="form-control selectpicker" data-live-search="true"
                            data-live-search-style="begins" title='Select Company Type...'>
                            <option value="" disabled selected>
                                Select
                                Relation
                            </option>
                            <option value="corporation">parent
                            </option>
                            <option value="corporation">Spouse
                            </option>
                            <option value="corporation">Child
                            </option>
                            <option value="corporation">Sibling
                            </option>
                            <option value="corporation">In Laws
                            </option>

                        </select>
                    </div>




                    <div class="col-md-6 form-group">
                        <label>Name
                            *</label>
                        <input type="text" class="form-control date" value="" placeholder="Name">
                    </div>



                    <div class="col-md-6 form-group">
                        <label>City
                            *</label>
                        <input type="text" class="form-control date" value="" placeholder="City">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>State/Province
                            *</label>
                        <input type="text" class="form-control date" value="" placeholder="State/Province">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>ZIP
                            *</label>
                        <input type="text" class="form-control date" value="" placeholder="ZIP">
                    </div>



                    <div class="col-md-6 form-group">
                        <label>Country
                            *</label>
                        <input list="browsers" class="form-control name=" browser">
                        <datalist id="browsers">
                            <option value="" disabled selected>
                                Select
                                Country
                                <option value="Afghanistan" />
                                <option value="Albania" />
                                <option value="Algeria" />
                                <option value="American Samoa" />
                                <option value="Andorra" />
                                <option value="Angola" />
                                <option value="Anguilla" />
                                <option value="Antarctica" />
                                <option value="Antigua and Barbuda" />
                                <option value="Argentina" />
                                <option value="Armenia" />
                                <option value="Aruba" />
                                <option value="Australia" />
                                <option value="Austria" />
                                <option value="Azerbaijan" />
                                <option value="Bahamas" />
                                <option value="Bahrain" />
                                <option value="Bangladesh" />
                                <option value="Barbados" />
                                <option value="Belarus" />
                                <option value="Belgium" />
                                <option value="Belize" />
                                <option value="Benin" />
                                <option value="Bermuda" />
                                <option value="Bhutan" />
                                <option value="Bolivia" />
                                <option value="Bosnia and Herzegovina" />
                                <option value="Botswana" />
                                <option value="Bouvet Island" />
                                <option value="Brazil" />
                                <option value="British Indian Ocean Territory" />
                                <option value="Brunei Darussalam" />
                                <option value="Bulgaria" />
                                <option value="Burkina Faso" />
                                <option value="Burundi" />
                                <option value="Cambodia" />
                                <option value="Cameroon" />
                                <option value="Canada" />
                                <option value="Cape Verde" />
                                <option value="Cayman Islands" />
                                <option value="Central African Republic" />
                                <option value="Chad" />
                                <option value="Chile" />
                                <option value="China" />
                                <option value="Christmas Island" />
                                <option value="Cocos (Keeling) Islands" />
                                <option value="Colombia" />
                                <option value="Comoros" />
                                <option value="Congo" />
                                <option value="Congo, The Democratic Republic of The" />
                                <option value="Cook Islands" />
                                <option value="Costa Rica" />
                                <option value="Cote D'ivoire" />
                                <option value="Croatia" />
                                <option value="Cuba" />
                                <option value="Cyprus" />
                                <option value="Czech Republic" />
                                <option value="Denmark" />
                                <option value="Djibouti" />
                                <option value="Dominica" />
                                <option value="Dominican Republic" />
                                <option value="Ecuador" />
                                <option value="Egypt" />
                                <option value="El Salvador" />
                                <option value="Equatorial Guinea" />
                                <option value="Eritrea" />
                                <option value="Estonia" />
                                <option value="Ethiopia" />
                                <option value="Falkland Islands (Malvinas)" />
                                <option value="Faroe Islands" />
                                <option value="Fiji" />
                                <option value="Finland" />
                                <option value="France" />
                                <option value="French Guiana" />
                                <option value="French Polynesia" />
                                <option value="French Southern Territories" />
                                <option value="Gabon" />
                                <option value="Gambia" />
                                <option value="Georgia" />
                                <option value="Germany" />
                                <option value="Ghana" />
                                <option value="Gibraltar" />
                                <option value="Greece" />
                                <option value="Greenland" />
                                <option value="Grenada" />
                                <option value="Guadeloupe" />
                                <option value="Guam" />
                                <option value="Guatemala" />
                                <option value="Guinea" />
                                <option value="Guinea-bissau" />
                                <option value="Guyana" />
                                <option value="Haiti" />
                                <option value="Heard Island and Mcdonald Islands" />
                                <option value="Holy See (Vatican City State)" />
                                <option value="Honduras" />
                                <option value="Hong Kong" />
                                <option value="Hungary" />
                                <option value="Iceland" />
                                <option value="India" />
                                <option value="Indonesia" />
                                <option value="Iran, Islamic Republic of" />
                                <option value="Iraq" />
                                <option value="Ireland" />
                                <option value="Israel" />
                                <option value="Italy" />
                                <option value="Jamaica" />
                                <option value="Japan" />
                                <option value="Jordan" />
                                <option value="Kazakhstan" />
                                <option value="Kenya" />
                                <option value="Kiribati" />
                                <option value="Korea, Democratic People's Republic of" />
                                <option value="Korea, Republic of" />
                                <option value="Kuwait" />
                                <option value="Kyrgyzstan" />
                                <option value="Lao People's Democratic Republic" />
                                <option value="Latvia" />
                                <option value="Lebanon" />
                                <option value="Lesotho" />
                                <option value="Liberia" />
                                <option value="Libyan Arab Jamahiriya" />
                                <option value="Liechtenstein" />
                                <option value="Lithuania" />
                                <option value="Luxembourg" />
                                <option value="Macao" />
                                <option value="Macedonia, The Former Yugoslav Republic of" />
                                <option value="Madagascar" />
                                <option value="Malawi" />
                                <option value="Malaysia" />
                                <option value="Maldives" />
                                <option value="Mali" />
                                <option value="Malta" />
                                <option value="Marshall Islands" />
                                <option value="Martinique" />
                                <option value="Mauritania" />
                                <option value="Mauritius" />
                                <option value="Mayotte" />
                                <option value="Mexico" />
                                <option value="Micronesia, Federated States of" />
                                <option value="Moldova, Republic of" />
                                <option value="Monaco" />
                                <option value="Mongolia" />
                                <option value="Montserrat" />
                                <option value="Morocco" />
                                <option value="Mozambique" />
                                <option value="Myanmar" />
                                <option value="Namibia" />
                                <option value="Nauru" />
                                <option value="Nepal" />
                                <option value="Netherlands" />
                                <option value="Netherlands Antilles" />
                                <option value="New Caledonia" />
                                <option value="New Zealand" />
                                <option value="Nicaragua" />
                                <option value="Niger" />
                                <option value="Nigeria" />
                                <option value="Niue" />
                                <option value="Norfolk Island" />
                                <option value="Northern Mariana Islands" />
                                <option value="Norway" />
                                <option value="Oman" />
                                <option value="Pakistan" />
                                <option value="Palau" />
                                <option value="Palestinian Territory, Occupied" />
                                <option value="Panama" />
                                <option value="Papua New Guinea" />
                                <option value="Paraguay" />
                                <option value="Peru" />
                                <option value="Philippines" />
                                <option value="Pitcairn" />
                                <option value="Poland" />
                                <option value="Portugal" />
                                <option value="Puerto Rico" />
                                <option value="Qatar" />
                                <option value="Reunion" />
                                <option value="Romania" />
                                <option value="Russian Federation" />
                                <option value="Rwanda" />
                                <option value="Saint Helena" />
                                <option value="Saint Kitts and Nevis" />
                                <option value="Saint Lucia" />
                                <option value="Saint Pierre and Miquelon" />
                                <option value="Saint Vincent and The Grenadines" />
                                <option value="Samoa" />
                                <option value="San Marino" />
                                <option value="Sao Tome and Principe" />
                                <option value="Saudi Arabia" />
                                <option value="Senegal" />
                                <option value="Serbia and Montenegro" />
                                <option value="Seychelles" />
                                <option value="Sierra Leone" />
                                <option value="Singapore" />
                                <option value="Slovakia" />
                                <option value="Slovenia" />
                                <option value="Solomon Islands" />
                                <option value="Somalia" />
                                <option value="South Africa" />
                                <option value="South Georgia and The South Sandwich Islands" />
                                <option value="Spain" />
                                <option value="Sri Lanka" />
                                <option value="Sudan" />
                                <option value="Suriname" />
                                <option value="Svalbard and Jan Mayen" />
                                <option value="Swaziland" />
                                <option value="Sweden" />
                                <option value="Switzerland" />
                                <option value="Syrian Arab Republic" />
                                <option value="Taiwan, Province of China" />
                                <option value="Tajikistan" />
                                <option value="Tanzania, United Republic of" />
                                <option value="Thailand" />
                                <option value="Timor-leste" />
                                <option value="Togo" />
                                <option value="Tokelau" />
                                <option value="Tonga" />
                                <option value="Trinidad and Tobago" />
                                <option value="Tunisia" />
                                <option value="Turkey" />
                                <option value="Turkmenistan" />
                                <option value="Turks and Caicos Islands" />
                                <option value="Tuvalu" />
                                <option value="Uganda" />
                                <option value="Ukraine" />
                                <option value="United Arab Emirates" />
                                <option value="United Kingdom" />
                                <option value="United States" />
                                <option value="United States Minor Outlying Islands" />
                                <option value="Uruguay" />
                                <option value="Uzbekistan" />
                                <option value="Vanuatu" />
                                <option value="Venezuela" />
                                <option value="Viet Nam" />
                                <option value="Virgin Islands, British" />
                                <option value="Virgin Islands, U.S" />
                                <option value="Wallis and Futuna" />
                                <option value="Western Sahara" />
                                <option value="Yemen" />
                                <option value="Zambia" />
                                <option value="Zimbabwe" />


                        </datalist>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Email
                            *</label>
                        <input type="email" required class="form-control" placeholder="Work"><br>
                        <input type="email" required class="form-control" placeholder="Personal">
                    </div>


                    <div class="col-md-6 form-group">
                        <label>Address
                            *</label>
                        <input type="text" name="end_date" id="end_date" class="form-control date" value=""
                            placeholder="Address Line 1"><br>
                        <input type="text" name="end_date" id="end_date" class="form-control date" value=""
                            placeholder="Address Line 2">
                    </div>
                    <!-- <div class="col-md-6 form-group">
                                                                                        <label>Mobile No.
                                                                                            *</label><input type="text" name="end_date" id="end_date" class="form-control date"
                                                                                            value="" placeholder="Work">
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group mt-4"><input type="text" name="end_date" id="end_date" class="form-control date" value="" placeholder="Mobile"></div>
                                                                                    <div class="col-md-6 form-group"><input type="text" name="end_date" id="end_date" class="form-control date" value="" placeholder="Ext"></div>
                                                                                    <div class="col-md-6 form-group"><input type="text" name="end_date" id="end_date" class="form-control date" value="" placeholder="Home"></div> -->

                    <div class="col-md-6 form-group">
                        <label>Mobile No.
                            *</label>
                        <input type="text" name="end_date" id="end_date" class="form-control date" value=""
                            placeholder="Work"><br>
                        <input type="text" name="end_date" id="end_date" class="form-control date" value=""
                            placeholder="Mobile"><br>

                    </div>

                    <div class="col-md-6 form-group mt-4">

                        <input type="text" name="end_date" id="end_date" class="form-control date mt-1" value=""
                            placeholder="Ext"><br>
                        <input type="text" name="end_date" id="end_date" class="form-control date" value=""
                            placeholder="Home">

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
                    <table id="alter_pagination1" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Relation</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Savita Jadhav</td>
                                <td>spouse</td>
                                <td>savitaj@gmail.com</td>
                                <td>9863685634</td>
                                <td class="text-center">
                                    <a href="javascript:void(0);" data-toggle="modal" data-placement="top" title="Edit"
                                        data-target="#editmodel"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-edit-2 text-success">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                            </path>
                                        </svg></a>
                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                        title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trash-2 text-danger">
                                            <polyline points="3 6 5 6 21 6">
                                            </polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17">
                                            </line>
                                            <line x1="14" y1="11" x2="14" y2="17">
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