<!DOCTYPE html>
<!-- beautify ignore:start -->
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('/assets/') }}"
    data-template="vertical-menu-template-free"
>
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
        />

        <title>

        </title>

        <meta name="description" content="" />

        <!-- Favicon -->
        <link
            rel="icon"
            type="image/x-icon"
            href="{{ asset('/assets/img/favicon/favicon.ico') }}"
        />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
        />

        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/boxicons.css') }}" />

        <!-- Core CSS -->
        <link
            rel="stylesheet"
            href="{{ asset('/assets/vendor/css/core.css') }}"
            class="template-customizer-core-css"
        />
        <link
            rel="stylesheet"
            href="{{ asset('/assets/vendor/css/theme-default.css') }}"
            class="template-customizer-theme-css"
        />
        <link rel="stylesheet" href="{{ asset('/assets/css/demo.css') }}" />

        <!-- Vendors CSS -->
        <link
            rel="stylesheet"
            href="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}"
        />

        <link
            rel="stylesheet"
            href="{{ asset('/assets/vendor/libs/apex-charts/apex-charts.css') }}"
        />

        <!-- Page CSS -->

        <!-- Helpers -->
        <script src="{{ asset('/assets/vendor/js/helpers.js') }}"></script>

        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ asset('/assets/js/config.js') }}"></script>
    </head>

    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                    <div class="app-brand demo">
                        <a href="/dashboard" class="app-brand-link">
                            <span class="app-brand-text fs-4 menu-text fw-bolder ms-2">Cash<span class="text-danger">pips</span></span>
                        </a>

                        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                            <i class="bx bx-chevron-left bx-sm align-middle"></i>
                        </a>
                    </div>

                    <div class="menu-inner-shadow"></div>

                    <ul class="menu-inner py-1">
                        <!-- Dashboard -->
                        {{-- <li class="menu-item {{ $nav == 'dashboard' ? 'active' : '' }}">
                            <a href="/dashboard" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                <div data-i18n="Analytics">Dashboard</div>
                            </a>
                        </li> --}}
                        <li class="menu-item active">
                            <a href="#" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                <div data-i18n="Analytics">User</div>
                            </a>
                        </li>
                    </ul>
                </aside>
                <div class="layout-page">
                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->

                        <div class="container-xxl flex-grow-1 container-p-y">
                            <h4 class="fw-bold py-3 mb-4">
                                <span class="text-muted fw-light"></span>
                                User
                            </h4>

                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Outline -->
                                    <div class="card mb-4">
                                        <!-- Account -->
                                        <div class="card-body">
                                            <div class="table-responsive text-nowrap">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>User Id</th>
                                                            <th>User Name</th>
                                                            <th>User email</th>
                                                            <th>Email Verified</th>
                                                            <th>Created at</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-border-bottom-0">
                                                        @unless (empty($users))
                                                                                    @foreach ($users as $user)
    <tr>
                                                                                        <td>{{ $user->user_id }}</td>
                                                                                        <td>{{ $user->name }}</td>
                                                                                        <td>{{ $user->email }}</td>
                                                                                        <td>{{ $user->email_verified_at }}</td>
                                                                                        <td>{{ $user->created_at }}</td>
                                                                                    </tr>
    @endforeach
                                                        @endunless
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /Account -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Content -->

                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>

            </div>
            <!-- Menu -->
            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{ asset('/assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('/assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('/assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

        <script src="{{ asset('/assets/vendor/js/menu.js') }}"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{ asset('/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

        <!-- Main JS -->
        <script src="{{ asset('/assets/js/main.js') }}"></script>

        <!-- Page JS -->
        <script src="{{ asset('/assets/js/dashboards-analytics.js') }}"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>
