<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Parab-Erp </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('public/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/table/datatable/custom_dt_html5.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/table/datatable/dt-global_style.css')}}">
      <!-- END PAGE LEVEL CUSTOM STYLES -->
</head>

<body class="alt-menu sidebar-noneoverflow">

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm expand-header">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <ul class="navbar-item flex-row ml-auto">

             
                <li class="nav-item dropdown message-dropdown">
                 
                    <div class="dropdown-menu position-absolute e-animated e-fadeInUp" aria-labelledby="messageDropdown">
                        <div class="">
            
                  
                     
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute e-animated e-fadeInUp" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">

                            <div class="dropdown-item">
                                <div class="media">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                    <div class="media-body">
                                        <div class="notification-para"><span class="user-name">Shaun Park</span> commented on your post.</div>
                                        <div class="notification-meta-time">5 mins ago</div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media">                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    <div class="media-body">
                                        <div class="notification-para"><span class="user-name">Kelly Young</span> likes your photo</div>
                                        <div class="notification-meta-time">8 mins ago</div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                    <div class="media-body">
                                        <div class="notification-para">Invitation successfully sent to <span class="user-name">Amy Diaz</span></div>
                                        <div class="notification-meta-time">10 mins ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                    </a>
                    <div class="dropdown-menu position-absolute e-animated e-fadeInUp" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">                            
                            <div class="media mx-auto">
                                <img src="assets/img/90x90.jpg" class="img-fluid mr-2" alt="avatar">
                                <div class="media-body">
                                    <h5>Sharique Sheikh</h5>
                                    <p>Web Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>My Profile</span>
                            </a>
                        </div>
                   
                        <div class="dropdown-item">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sbar-open" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="index.html">
                            <img src="assets/img/favicon.png" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="index.html" class="nav-link"> PARAB ERP </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu active">
                        <a href="index.html" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
                           <!--  <li class="active">
                                <a href="index.html"> Analytics </a>
                            </li>
                            <li>
                                <a href="index2.html"> Sales </a>
                            </li> -->
                        </ul>
                    </li>

                  

                    <li class="menu">
                        <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                <span>Organization</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
                            <li>
                                <a href="companies.html"> Company </a>
                            </li>
                           
                        </ul>
                    </li>


                    <li class="menu">
                        <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span>Masters</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">
                        <!--     <li>
                                <a href="element_alerts.html"> Company Masters </a>
                            </li> -->
                         <li>
                                <a href="#pages-error2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">  Company Masters <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error2" data-parent="#pages"> 
                                    <li>
                                        <a href="location.html"> Location / Branch </a>
                                    </li>
                                    <li>
                                        <a href="project.html"> Project / Cost Center </a>
                                    </li>
                                    <li>
                                        <a href="department.html"> Department </a>
                                    </li>
                                    <li>
                                        <a href="designation.html"> Designation </a>
                                    </li>
                                    <!-- <li>Center
                                        <a href="position.html"> Position </a>
                                    </li>
                                    <li>
                                        <a href="project.html"> Project </a>
                                    </li> -->
                                    <li>
                                        <a href="#"> Grade </a>
                                    </li>
                                    <li>
                                        <a href="#"> Hierarchy </a>
                                    </li>
                                </ul>
                            </li>

                             <li>
                                <a href="#pages-error3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">  Salary Masters <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error3" data-parent="#pages"> 
                                    <li>
                                        <a href="allowance.html"> Allowances / Deducation</a>
                                    </li>

                                    <li>
                                        <a href=".html"> Salary Structure </a>
                                    </li>
                                    
                                </ul>
                            </li>

                             <li>
                                <a href="#pages-error1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">  HR Masters <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error1" data-parent="#pages"> 
                                    
                                    <li>
                                        <a href="officeshift.html"> Office Shift </a>
                                    </li>
                                    <li>
                                        <a href="leave_master.html"> Leave Master </a>
                                    </li>
                                    <li>
                                        <a href="manegeholidyas.html"> Manage Holiday </a>
                                    </li>
                                    
                                    <li>
                                        <a href="emplyoee_status.html"> Employee Status </a>
                                    </li>
                                   
                                </ul>
                                  <li>
                                <a href="#pages-error4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">HR Documents <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error4" data-parent="#pages"> 
                                    <li>
                                        <a href="offer_letter.html"> Offer Letter </a>
                                    </li>
                                    <li>
                                        <a href="appointment_letter.html"> Appointment Letter </a>
                                    </li>
                                    <li>
                                        <a href="confirmation_letter.html"> Confirmation Letter </a>
                                    </li>
                                    <li>
                                        <a href="addpromotion.html"> Promotion </a>
                                    </li>
                                    <li>
                                        <a href="award.html"> Award </a>
                                    </li>
                                    <li>
                                        <a href="travell.html"> Travel </a>
                                    </li>
                                    <li>
                                        <a href="transfer_letter.html"> Transfer </a>
                                    </li>
                                    <li>
                                        <a href="resignation.html"> Resignations </a>
                                    </li>
                                     <li>
                                        <a href="complaint.html"> Complaints </a>
                                    </li>
                                    <li>
                                        <a href="warning.html"> Warnings </a>
                                    </li>
                                    <li>
                                        <a href="termination.html"> Terminations </a>
                                    </li>

                                    <li>
                                        <a href=".html"> Appreciation </a>
                                    </li>
                                    <li>
                                        <a href=".html"> Salary Slip </a>
                                    </li>
                                    <li>
                                        <a href=".html"> From 16 </a>
                                    </li>
                                    <li>
                                        <a href=".html"> Experience Letter </a>
                                    </li>
                                    <li>
                                        <a href=".html">Reviling Letter </a>
                                    </li>
                                </ul>
                            </li>
                            </li>

                            <li>
                                <a href="#pages-error6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">  Employee Masters <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error6" data-parent="#pages"> 
                                    <li>
                                        <a href="personaldetails.html">Personal Details </a>
                                    </li>
                                    <li>
                                        <a href="officialdetails.html">Official Details </a>
                                    </li>

                                    <li>
                                        <a href="statutorydetails.html"> Statutory Details </a>
                                    </li>

                                    <li>
                                        <a href="qualificationdetails.html"> Qualification Details </a>
                                    </li>

                                    <li>
                                        <a href="salarydetails.html"> Salary Details </a>
                                    </li>
                                    <li>
                                        <a href="emp_master.html">Masters </a>
                                    </li>
                                    
                                     <li>
                                        <a href="othermaster.html">Other Masters </a>
                                    </li>
                                   
                                    <li>
                                        <a href="perkdetails.html"> Asset/ Perk Details </a>
                                    </li>
                                    <!-- <li>
                                        <a href="#"> Payslip Master </a>
                                    </li> -->
                                </ul>
                            </li>
                                     <li>
                                        <a href="payslip.html" > Payslip Master </a>
                                    </li>


                                    <li>
                                        <a href="#pages-error44" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">  Bank Masters <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                        <ul class="collapse list-unstyled sub-submenu" id="pages-error44" data-parent="#pages"> 
                                            <li>
                                                <a href="Bank_master.html"> Employer Bank </a>
                                            </li>
                                            <li>
                                                <a href="salary_bank.html"> Salary Bank </a>
                                            </li>
                                           
                                        </ul>
                                    </li>

                            <li>
                                <a href="#pages-error5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">  Admin Masters <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error5" data-parent="#pages"> 
                                    <li>
                                        <a href="vendor_Category.html"> Vendor Category </a>
                                    </li>
                                    <li>
                                        <a href="expenses _category.html"> Expenses Category </a>
                                    </li>
                                    <li>
                                        <a href="#"> Vendor  </a>
                                    </li>
                                    <li>
                                        <a href="#"> Documents </a>
                                    </li>
                                     <li>
                                        <a href="#"> General </a>
                                    </li>
                                     <li>
                                        <a href="#"> Activity Category </a>
                                    </li>
                                    <li>
                                        <a href="#"> Vendor Details </a>
                                    </li>
                                    <li>
                                        <a href="#">Admin Documents </a>
                                    </li>
                                    <li>
                                        <a href="#"> Item Master </a>
                                    </li>
                                </ul>
                            </li>
                      

                      
                             <li>
                                <a href="#pages-error8" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">  Asset Masters <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error8" data-parent="#pages"> 
                                    <li>
                                        <a href="assets.html">Assets </a>
                                    </li>
                                    
                                     <li>
                                        <a href="category.html">Category</a>
                                    </li>
                                    <li>
                                        <a href="#"> Perk List </a>
                                    </li>
                                  
                                    <li>
                                        <a href="assets_master.html"> Asset Category </a>
                                    </li>

                                    <li>
                                        <a href="company_assets.html"> Company Asset</a>
                                    </li>

                                    <li>
                                        <a href="company_assets.html"> Company  Perks </a>
                                    </li>
                                    <li>
                                        <a href="uniform#"> Uniform Master </a>
                                    </li>
                                   
                                    
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="#pages-error18" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">  Statutory Masters <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error18" data-parent="#pages"> 
                                    <li>
                                        <a href="employeepfmaster.html">Employee PF </a>
                                    </li>
                                    
                                     <li>
                                        <a href="professiontaxmaster.html">Profession Tax</a>
                                    </li>
                                    <li>
                                        <a href="ESICmaster.html"> ESIC </a>
                                    </li>
                                    <li>
                                        <a href="incometaxmaster.html"> Income Tax </a>
                                    </li>
                                    <li>
                                        <a href="gratuity.html">Gratuity</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#">LWF </a>
                                    </li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </li>

                

                    <li class="menu">
                        <a href="#datatables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                <span>HR Process</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>

                        </a>

                 
                        <ul class="collapse submenu list-unstyled" id="datatables" data-parent="#accordionExample">
                            <li>
                                <a href="#pages-error22" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Core HR <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error22" data-parent="#pages"> 

                                    <li>
                                        <a href="#"> Time Sheet / Attendance </a>
                                    </li>
                                    <li>
                                        <a href="#"> Salary Process </a>
                                    </li>
                                    <li>
                                        <a href="#"> Leave Management  </a>
                                    </li>
                                    <li>
                                        <a href="#"> Offer / Appointment </a>
                                    </li>
                                    <li>
                                        <a href="#"> Asst / Perk Allotment</a>
                                    </li>
                                    <li>
                                        <a href="#"> HR Documents</a>
                                    </li>
                                    <li>
                                        <a href="#"> Loans / Advance Issue</a>
                                    </li>
                                    <li>
                                        <a href="#"> Arrears / Bouns / Exgratia</a>
                                    </li>
                                    <li>
                                        <a href="#"> Exit F/F</a>
                                    </li>
                                </ul>
                            </li>
                       
                           <li>
                                <a href="#pages-error45" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pay Slip <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error45" data-parent="#pages"> 
                                    <li>
                                        <a href="#"> Pay Slip  </a>
                                    </li>
                                    <li>
                                        <a href="#"> Salary Certificate </a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="#pages-error23" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Employee Reports<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error23" data-parent="#pages"> 
                                    <li>
                                        <a href="#"> Employee Register  </a>
                                    </li>
                                  
                                    <li>
                                        <a href="#">IT Calculator</a>
                                    </li>
                                    <li>
                                        <a href="#"> Employee History</a>
                                    </li>
                                    
                                    
                                </ul>
                            </li>
                           
                            
                        </ul>
                    </li>

                 
                   
                    <li class="menu">
                        <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span>Statutory Reports</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample">
                       
                            <li>
                                <!-- <a href="#pages-error11" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Inward / Outward <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a> -->
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error11" data-parent="#pages"> 
                                    <li>
                                        <a href="#"> PF Reports </a>
                                    </li>
                                    <li>
                                        <a href="ESICmaster.html"> ESIC Repots</a>
                                    </li>

                                    <li>
                                        <a href="#"> PT Repots</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#"> LWF Repots</a>
                                    </li>
                                    <li>
                                        <a href="incometaxmaster.html"> Income Tax Repots</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#pages-error12" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Events & Meetings <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error12" data-parent="#pages"> 
                                    <li>
                                        <a href="events.html"> Events </a>
                                    </li>
                                    <li>
                                        <a href="meeting.html"> Meetings </a>
                                    </li>
                                    
                                </ul>
                            </li>
                              <li>
                                <a href="#pages-error53" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Training <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error53" data-parent="#pages"> 
                                    <li>
                                        <a href="traininglist.html"> Training  List</a>
                                    </li>
                                    <li>
                                        <a href="trainingtype.html"> Training Type </a>
                                    </li>
                                     <li>
                                        <a href="trainers.html"> Trainers </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#pages-error03" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Admin Documents <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error03" data-parent="#pages"> 
                                    <li>
                                        <a href="#"> Purhchase Order / Work Order</a>
                                    </li>
                                    <li>
                                        <a href="#"> Agreements </a>
                                    </li>
                                     <li>
                                        <a href="#"> Payment Order </a>
                                    </li>
                                       <li>
                                        <a href="#"> Purhchase Invoice Entry</a>
                                    </li>
                                </ul>
                            </li>
                             <!-- <li>
                                <a href="#pages-error33" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Activity Documents <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error33" data-parent="#pages"> 
                                    <li>
                                        <a href="#"> Travel Arrangement</a>
                                    </li>
                                    <li>
                                        <a href="#"> Event Arrangement </a>
                                    </li>
                                     <li>
                                        <a href="#"> Meeting </a>
                                    </li>
                                       <li>
                                        <a href="#"> Marketing</a>
                                    </li>
                                    <li>
                                        <a href="#"> Training</a>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                         
                    <li class="menu">
                        <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
                                <span>Admin Reports</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
                            <li>
                                <a href="job_post_master.html"> Job Post </a>
                            </li>
                            <li>
                                <a href="#"> Purchase order/work order/ conttract report </a>
                            </li>
                            <li>
                                <a href="#"> Vendor Report </a>
                            </li>
                           
                          <li>
                                <a href="expence_report.html">Expences Report</a>
                            </li>
                           <li>
                                <a href="#">Expences /Vendor Dashboard</a>
                            </li>
                            <li>
                                <a href="#pages-error256" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">File Manager<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error256" data-parent="#pages"> 
                                    <li>
                                        <a href="documentmanagement.html">Document Management</a>
                                    </li>
                                  
                                    <li>
                                        <a href="#"> Password Management</a>
                                    </li>
                                    <li>
                                        <a href="#">Document History</a>
                                    </li>
                                  
                                   
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
              
                    </li>
                    <li class="menu">
                        <a href="#components0112" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
                                <span>General Master</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components0112" data-parent="#accordionExample">
                            <li>
                                <a href="award.html"> Award Type</a>
                            </li>
                            <li>
                                <a href="warning.html">Warning Type</a>
                            </li>
                            <li>
                                <a href="termination.html"> Termination Type </a>
                            </li>
                            <li>
                                <a href="expence.html">Expenses Type </a>
                            </li>
                            <li>
                                <a href="#">Employee Document Type </a>
                            </li>
                        </ul>
                    </li>
                           <li class="menu">
                        <a href="#components011" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
                                <span>User Management</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components011" data-parent="#accordionExample">
                            <li>
                                <a href="usermanagement.html"> User Management</a>
                            </li>
                            <li>
                                <a href="#">Password Management</a>
                            </li>
                            <li>
                                <a href="#"> Workflow Management </a>
                            </li>
                            <li>
                                <a href="#">Permission Management </a>
                            </li>
                          
                        </ul>
                    </li>

                 
                    </li>

                    <!-- <li class="menu">
                        <a href="#" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span>User</span>
                            </div>
                        </a>
                    </li> -->
                    
                </ul>
                
            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">


                <div style="margin-top: 3%;">
                    <div>
                        <div>
                            <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal"
                                data-target=".bd-example-modal-lg"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>Add Bank </button>
                             
                                
                                    <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal" data-target="#exampleModalRemoveAnimation"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                                      </svg>
                                        Bulk Delete
                                    </button> 
                                
                        </div>
                        <!-- Model Start -->
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel">Add New Bank</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="row" style="padding: 10px;">


                                        <div class="col-md-6 form-group">
                                            <label>Bank Name *</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected> Select Bank</option>
                                                <option value="corporation">HDFC</option>
                                                <option value="exempt organization">SBI</option>
                                                <option value="partnership">BOI</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Bank Account No. *</label>
                                            <input type="text" name="company_name" id="company_name" required
                                                class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Bank IFSC No. *</label>
                                            <input type="text" name="company_name" id="company_name" required
                                                class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Company *</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected>Company Type</option>
                                                <option value="corporation">Corporation</option>
                                                <option value="exempt organization">Exempt Organization</option>
                                                <option value="partnership">Partnership</option>
                                                <option value="private foundation">Private Foundation</option>
                                                <option value="limited liability company">Limited Liability Company
                                                </option>

                                            </select>
                                        </div>

                                    

                                        <div class="form-group" align="center"
                                            style="margin-top: 5%; margin-left: 45%;">

                                            <input type="submit" name="action_button" class="btn btn-warning"
                                                value=Add />
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- model end -->


                        <!--edit Model Start -->
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" id="editmodel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel">Edit</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                    </div>


                                    <div class="row" style="padding: 10px;">


                                        <div class="col-md-6 form-group">
                                            <label>Bank Name *</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected> Select Bank</option>
                                                <option value="corporation">HDFC</option>
                                                <option value="exempt organization">SBI</option>
                                                <option value="partnership">BOI</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Bank Account No. *</label>
                                            <input type="text" name="company_name" id="company_name" required
                                                class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Bank IFSC No. *</label>
                                            <input type="text" name="company_name" id="company_name" required
                                                class="form-control" placeholder="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Company *</label>
                                            <select name="company_type" id="company_type"
                                                class="form-control selectpicker" data-live-search="true"
                                                data-live-search-style="begins" title='Select Company Type...'>
                                                <option value="" disabled selected>Company Type</option>
                                                <option value="corporation">Corporation</option>
                                                <option value="exempt organization">Exempt Organization</option>
                                                <option value="partnership">Partnership</option>
                                                <option value="private foundation">Private Foundation</option>
                                                <option value="limited liability company">Limited Liability Company
                                                </option>

                                            </select>
                                        </div>

                                    

                                        <div class="form-group" align="center"
                                            style="margin-top: 5%; margin-left: 45%;">

                                            <input type="submit" name="action_button" class="btn btn-warning"
                                                value=Edit />
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- model end -->



                        <!--bulk delete Model Start -->
                       <div>
                        <div id="modalRemoveAnimation" class="col-lg-12 layout-spacing">
                                    <div id="exampleModalRemoveAnimation" class="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header" id="exampleModalPopoversLabel">
                                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                          </div> -->
                                          <div class="modal-body">
                                              <p class="modal-text">Parberp.com says<br>
                                               Please select atleast one Checkbox
                                              </p>
                                          </div>
                                          <div class="modal-footer">
                                             <button class="btn btn-dark" data-dismiss="modal"><i class="flaticon-cancel-12"></i> OK</button>
                                          </div>
                                        </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                 <!-- model end -->
             
                        
                    <div class="row" id="cancel-row">

                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-6">
                                <div class="table-responsive mb-4 mt-4">
                                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Bank Name</th>
                                                <th>Bank Ac No.</th>
                                                <th>Bank IFSC Code</th>
                                                <th>Company</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>

                                                <td>
                                                    ram nagar chandur bajar
                                                </td>
                                                <td>
                                                  
                                                    <a href="javascript:void(0);" data-toggle="modal"
                                                        data-placement="top" title="Edit" data-target="#editmodel"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-edit-2 text-success">
                                                            <path
                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg></a>

                                                    <a href="javascript:void(0);" data-toggle="tooltip"
                                                        data-placement="top" title="Delete"
                                                        ><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-trash-2 text-danger">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg></a>

                                                </td>

                                            </tr>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!--  END CONTENT AREA  -->
        </div>
        <!-- END MAIN CONTAINER -->



        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="{{ asset('public/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
        <script src="{{ asset('public/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{ asset('public/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('public/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <script src="{{ asset('public/assets/js/app.js')}}"></script>

        <script>
            $(document).ready(function () {
                App.init();
            });
        </script>
        <script src="{{ asset('public/assets/js/custom.js')}}"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
        <script src="{{ asset('public/plugins/table/datatable/datatables.js')}}"></script>
        <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
        <script src="{{ asset('public/plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('public/plugins/table/datatable/button-ext/jszip.min.js')}}"></script>
        <script src="{{ asset('public/plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('public/plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>
        <script>
            $('#html5-extension').DataTable({
                dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
                buttons: {
                    buttons: [
                        { extend: 'copy', className: 'btn' },
                        { extend: 'csv', className: 'btn' },
                        { extend: 'excel', className: 'btn' },
                        { extend: 'print', className: 'btn' }
                    ]
                },
                "oLanguage": {
                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 7
            });
        </script>
        <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
</body>

</html>