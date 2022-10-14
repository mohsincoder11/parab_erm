<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{env('PROJECT_NAME')}}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('public/assets/img/favicon.png') }}" />
    <link href="{{ asset('public/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('public/assets/js/loader.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/table/datatable/custom_dt_html5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/table/datatable/dt-global_style.css') }}">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/forms/theme-checkbox-radio.css') }}">
    <!-- BEGIN Snackbar PLUGINS -->
    <!-- toastr -->
    <link href="{{ asset('public/plugins/notification/snackbar/snackbar.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.min.css" rel="stylesheet">

    <style>
        .error {
            margin-top: 5px;
            color: #e7515a !important;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .ui-autocomplete {
            z-index: 9999;
        }

        .ui-menu .ui-menu-item :hover {
            background: #007bff !important;
            color: #FFF !important;

        }
    </style>

    <!-- END Snackbar PLUGINS -->


</head>

<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm expand-header">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <ul class="navbar-item flex-row ml-auto">


                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user-check">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <polyline points="17 11 19 13 23 9"></polyline>
                        </svg>
                    </a>
                    <div class="dropdown-menu position-absolute e-animated e-fadeInUp"
                        aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <img src="{{ asset('public/assets/img/90x90.jpg') }}" class="img-fluid mr-2"
                                    alt="avatar">
                                <div class="media-body">
                                    <h5>{{ auth()->user()->name }}</h5>
                                    <p>Web Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="{{ url('profile') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> <span>My Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="{{ url('logout') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Log Out</span>
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
        @include('layout.sidebar')

        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->

        @yield('content')
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>

    <script src="{{ asset('public/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('public/assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('public/assets/js/dashboard/dash_1.js') }}"></script>
    <script src="{{ asset('public/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('public/plugins/sweetalerts/custom-sweetalert.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->


    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{ asset('public/plugins/table/datatable/datatables.js') }}"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="{{ asset('public/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('public/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
    <script src="{{ asset('public/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('public/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

    <script>
        $('.datatable').DataTable({
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    // { extend: 'copy', className: 'btn' },
                    {
                        extend: 'csv',
                        className: 'btn'
                    },
                    {
                        extend: 'excel',
                        className: 'btn'
                    },
                    {
                        extend: 'print',
                        className: 'btn'
                    }
                ]
            },
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
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

    <script src="{{ asset('public/plugins/notification/snackbar/snackbar.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function() {

            $("#employee_name").autocomplete({
                source: function(request, response) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('search_employee') }}",
                        dataType: "json",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            search_keyword: request.term
                        },
                        success: function(data) {
                            var resp = $.map(data, function(obj) {
                                return obj.employee_name;

                            });
                            console.log(resp);
                            response(resp);
                        }
                    });
                },
                minLength: 2,
                select: function(event, ui) {
                    var value_data = ui.item.label;
                    console.log(ui.item.value)
                    $.ajax({
                        type: "POST",
                        url: "{{ route('get_employee_id') }}",
                        dataType: "json",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            search_keyword: ui.item.value
                        },
                        success: function(data) {
                            $('#employee_id').val(data.id);
                        }
                    });
                }
            });
        })
    </script>
    @yield('js')


</body>

</html>
