<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin - Dashboard </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="{{asset('assets/plugins/fontawesome/js/all.min.js')}}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/portal.css')}}">

</head>

<body class="app">

    @include('admin.layouts.header-navbar')

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <h1 class="app-page-title">User Profile</h1>
                <div class="row gy-4">
                    <div class="col-12 col-lg-6">
                        <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                            </svg>
                                        </div><!--//icon-holder-->

                                    </div><!--//col-->
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Profile</h4>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//app-card-header-->
                            <div class="app-card-body px-4 w-100">
                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="item-label mb-2"><strong>Photo</strong></div>
                                            <div class="item-data"><img class="profile-image"
                                                    src="{{asset('assets/images/user.png')}}" alt=""></div>
                                        </div><!--//col-->
                                        <div class="col text-end">
                                            {{-- <a class="btn-sm app-btn-secondary" href="#">Change</a> --}}
                                        </div><!--//col-->
                                    </div><!--//row-->
                                </div><!--//item-->
                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="item-label"><strong>Name</strong></div>
                                            <div class="item-data">{{ $user->name }}</div>
                                        </div><!--//col-->
                                        <div class="col text-end">
                                            {{-- <a class="btn-sm app-btn-secondary" href="#">Change</a> --}}
                                        </div><!--//col-->
                                    </div><!--//row-->
                                </div><!--//item-->
                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="item-label"><strong>Email</strong></div>
                                            <div class="item-data">{{ $user->email }}</div>
									    </div><!--//col-->
									    <div class="col
                                                text-end">
                                                {{-- <a class="btn-sm app-btn-secondary" href="#">Change</a> --}}
                                        </div><!--//col-->
                                    </div><!--//row-->
                                </div><!--//item-->
                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="item-label"><strong>Website</strong></div>
                                            <div class="item-data">
                                                https://johndoewebsite.com
                                            </div>
                                        </div><!--//col-->
                                        <div class="col text-end">
                                            {{-- <a class="btn-sm app-btn-secondary" href="#">Change</a> --}}
                                        </div><!--//col-->
                                    </div><!--//row-->
                                </div><!--//item-->
                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="item-label"><strong>Location</strong></div>
                                            <div class="item-data">
                                                New York
                                            </div>
                                        </div><!--//col-->
                                        <div class="col text-end">
                                            {{-- <a class="btn-sm app-btn-secondary" href="#">Change</a> --}}
                                        </div><!--//col-->
                                    </div><!--//row-->
                                </div><!--//item-->
                            </div><!--//app-card-body-->
                            <div class="app-card-footer p-4 mt-auto">
                                {{-- <a class="btn app-btn-secondary" href="#">Manage Profile</a> --}}
                            </div><!--//app-card-footer-->

                        </div><!--//app-card-->

                        <footer class="app-footer">
                            <div class="container text-center py-3">
                                <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                                <small class="copyright">Designed with <span class="sr-only">love</span><i
                                        class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link"
                                        href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for
                                    developers</small>

                            </div>
                        </footer><!--//app-footer-->

                    </div><!--//app-wrapper-->


                    <!-- Javascript -->
                    <script src="assets/plugins/popper.min.js"></script>
                    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

                    <!-- Page Specific JS -->
                    <script src="assets/js/app.js"></script>

</body>

</html>
