<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('resources/css/black-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/theme.css') }}">

    {{-- icons --}}
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/css/nucleo-icons.css') }}">

    {{-- scripts --}}
    {{-- <script src="{{ asset('resources/js/black-dashboard.js') }}"></script> --}}
    <script src="{{ asset('resources/js/theme.js') }}"></script>

    {{-- custom css e js --}}
    @yield('custom-css-js')

    <title>@yield('title')</title>
</head>

<body class="white-content">

    <div class="wrapper">
        <div class="sidebar" data="primary">
            <!--
            Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
        -->
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class=" "> {{-- active --}}
                        <a class="sidebaritems" href="{{ route('dashboard') }}">
                            {{-- <i class="tim-icons icon-chart-pie-36"></i> --}}
                            <i class="fa fa-chart-pie"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="">
                        <a class="sidebaritems" href="{{ route('users') }}">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <p>Usuários</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle d-inline">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item pt-2">
                                <a href="#" id="hrefTheme">
                                    <script>
                                        if (localStorage.getItem('theme') != undefined || localStorage.getItem('theme') != null) {
                                            document.getElementById('hrefTheme').innerHTML =
                                                `<i class="fa fa-${localStorage.getItem('theme') == 'dark' ? 'sun' : 'moon'}"></i>`;
                                        } else {
                                            document.getElementById('hrefTheme').innerHTML = `<i class="fa fa-moon"></i>`;
                                        }
                                    </script>
                                </a>
                            </li>

                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="notification d-none d-lg-block d-xl-block"></div>
                                    <i class="far fa-bell"></i>
                                    <p class="d-lg-none">
                                        Notifications
                                    </p>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                                    <li class="nav-link"><a href="#" class="nav-item dropdown-item">Mike John
                                            responded to your email</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)"
                                            class="nav-item dropdown-item">You have 5 more tasks</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)"
                                            class="nav-item dropdown-item">Your friend Michael is in town</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)"
                                            class="nav-item dropdown-item">Another notification</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)"
                                            class="nav-item dropdown-item">Another one</a></li>
                                </ul>
                            </li>

                            {{-- dropdown user image --}}
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                            alt="Profile Photo">
                                    </div>
                                    <b class="caret d-none d-lg-block d-xl-block"></b>
                                    <p class="d-lg-none">
                                        Log out
                                    </p>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link"><a href="#" class="nav-item dropdown-item">Profile</a>
                                    </li>
                                    <li class="nav-link"><a href="#" class="nav-item dropdown-item">Settings</a>
                                    </li>
                                    <li class="nav-link"><a target="_blank"
                                            href="https://demos.creative-tim.com/black-dashboard/docs/1.0/components/forms.html"
                                            class="nav-item dropdown-item">Documentation</a>
                                    </li>

                                    @auth
                                        <li class="dropdown-divider"></li>
                                        <li class="nav-link"><a href="#" class="nav-item dropdown-item">Log out</a>
                                        </li>
                                    @endauth

                                </ul>
                            </li>
                            <li class="separator d-lg-none"></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- End Navbar -->

            {{-- content --}}
            <div class="content">
                @yield('content')
            </div>
            {{-- end content --}}

            <footer class="footer">
                <div class="container-fluid">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Your_WebSite
                            </a>
                        </li>
                    </ul>
                    <div class="copyright">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> &emsp13; Feito com <i class="fas fa-heart text-primary"></i>
                        {{-- por <a href="javascript:void(0)" target="_blank">Danilo C. Soares</a>. --}}
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('resources/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('resources/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('resources/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('resources/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    {{-- Google Maps Plugin --}}
    {{-- Place this tag in your head or just before your close body tag. --}}
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
    {{-- Chart JS --}}
    <script src="{{ asset('resources/js/plugins/chartjs.min.js') }}"></script>
    {{-- Notifications Plugin --}}
    <script src="{{ asset('resources/js/plugins/bootstrap-notify.js') }}"></script>

    <script src="{{ asset('files/app.js') }}"></script>

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });

        $(function() {
            $('[data-toggle="popover"]').popover()
        });

        $(document).ready(function() {
            $("#showToast").click(function() {
                $('.toast').toast('show');
            });
        });
    </script>

    @yield('body_end_js')

</body>

</html>
