<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../../storage/cs.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LU CS Alumni Tracker</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../../css/app.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/8wag9fpltoystskrzzpklue8f7kjezfdw1jz4hzkxj51zqh4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: 'textarea#content',
        plugins: 'code table lists',
        toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright alignjustify | indent outdent | bullist numlist | code | table'
    });
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-maingreen fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="../../storage/cs-logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    @if (Auth::user())
                        @if (Auth::user()->user_type == 'Admin')
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('list*')) ? 'active' : '' }}" href="/list/S.Y. 2006 - 2007">List of Alumni</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('analytics*')) ? 'active' : '' }}" href="/analytics">Analytics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('archive*')) ? 'active' : '' }}" href="/archive">Archive</a>
                            </li>
                        @endif
                    @endif
                    @guest
                        {{-- Button --}}
                        <li class="nav-item">
                            <a type="button" href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#loginRegisterModal">Login</a>
                        </li>

                        <!-- Modal -->
                        <div class="modal fade" id="loginRegisterModal" tabindex="-1" aria-labelledby="loginRegisterModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body bg-maingreen">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Register</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                                @include('auth.login')
                                            </div>
                                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                                @include('auth.register')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <li class="nav-item dropstart">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/profile/">Profile</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-maingreen py-4 text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 my-3 align-self-center">
                    <img src="../../storage/cs-logo.png" alt="logo">
                </div>
                <div class="col-lg-4 my-3">
                    <p class="fw-bold text-uppercase"> Contact Us<p>
                    <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;Laguna Sports Complex, Bubukal, Santa Cruz, 4009 Laguna<p>
                    <p><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;&nbsp;(049) 576 4359<p>
                    <p><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;info@lu.edu.ph<p>
                </div>
                <div class="col-lg-4 my-3">
                    <p class="fw-bold text-uppercase">Connect with us</p>
                    <p><i class="fab fa-facebook"></i>&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/LagunaUniversityOfficial/" target="_blank">/LagunaUniversityOfficial</a></p>
                    <p><i class="fab fa-instagram"></i>&nbsp;&nbsp;&nbsp;<a href="https://www.instagram.com/lagunauniversityofficial/" target="_blank">/lagunauniversityofficial</a></p>
                    <p><i class="fas fa-globe"></i>&nbsp;&nbsp;&nbsp;<a href="https://lu.edu.ph/" target="_blank">lu.edu.ph</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="../../js/app.js"></script>
</body>
</html>