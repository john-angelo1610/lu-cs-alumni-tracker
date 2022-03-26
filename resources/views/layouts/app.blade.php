<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LU CS Alumni Tracker</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../../css/app.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-maingreen fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                logo
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('list*')) ? 'active' : '' }}" href="/list/S.Y. 2006 - 2007">List of Alumni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('analytics*')) ? 'active' : '' }}" href="/analytics">Analytics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('archive*')) ? 'active' : '' }}" href="/archive">Archive</a>
                    </li>
                    <li class="nav-item dropstart">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-maingreen py-4 text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 my-3 align-self-center">
                    <img class="mx-auto d-block" src="https://lu.edu.ph/wp-content/uploads/2016/10/logo-1.png" alt="logo">
                </div>
                <div class="col-lg-4 my-3">
                    <p class="fw-bold text-uppercase"> Contact Us<p>
                    <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;Laguna Sports Complex, Bubukal, Santa Cruz, 4009 Laguna<p>
                    <p><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;&nbsp;(049) 576 4359<p>
                    <p><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;info@lu.edu.ph<p>
                </div>
                <div class="col-lg-4 my-3">
                    <p class="fw-bold text-uppercase">Connect with us</p>
                    <p><i class="fab fa-facebook"></i>&nbsp;&nbsp;&nbsp;/LagunaUniversityOfficial</p>
                    <p><i class="fab fa-instagram"></i>&nbsp;&nbsp;&nbsp;/lagunauniversityofficial</p>
                    <p><i class="fas fa-globe"></i>&nbsp;&nbsp;&nbsp;lu.edu.ph</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="../../js/app.js"></script>
</body>
</html>