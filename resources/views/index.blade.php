<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PortFolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/features/">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .custom-modal-width {
            width: 60% !important;
            max-width: 100%;
            /* Ensure it doesn’t exceed the viewport width */
        }

        .card,
        .ani {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.5s ease;
        }

        .card.visible,
        .ani.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-check2" viewBox="0 0 16 16">
                <path
                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
            </svg>
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-circle-half" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 0 8 1zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16" />
            </svg>
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
                <path
                    d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                <path
                    d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
            </svg>
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-sun-fill" viewBox="0 0 16 16">
                <path
                    d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708" />
            </svg>
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-speedometer2" viewBox="0 0 16 16">
                <path
                    d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z" />
                <path fill-rule="evenodd"
                    d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3" />
            </svg>
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-folder2-open" viewBox="0 0 16 16">
                <path
                    d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7z" />
            </svg>
        </symbol>
    </svg>
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle z-3 position-absolute ">
        <button class="btn btn-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active"
                    data-bs-theme-value="auto" aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>

    <nav class="navbar navbar-expand-lg border-bottom fixed-top bg-secondary">
        <div class="container">
            <a href="" class="navbar-brand my-auto d-inline-flex">
                <h3 class="navbar-brand my-auto" style="color: #3BAFFF; font-weight: bold">PORT</h3>
                <h3 class="navbar-brand my-auto" style=" font-weight: bold; margin-left: -15px !important;">FOLIO</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skill-section">Skill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galery-section">Galery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-section">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="home" class="container text-center my-5">
        <div class="row align-items-center my-5">
            <div class="col-md-6 my-5">
                <h4 class="mb-3" style="color: #3BAFFF; font-weight: bold">Greetings, Welcome to</h4>
                <h2 class="" style=" font-weight: bold">Abdul Latip Muhyi</h2>
                <p class="mt-3">A passionate developer committed to creating impactful digital solutions. Explore my
                    portfolio to discover my journey and projects.</p>
                <a href="https://www.instagram.com/latip_muhyi?igsh=cGxjcWlxdmcyOHF3"
                    class="btn btn-outline-secondary ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                    </svg>
                </a>
                <a href="https://github.com/latipmuhyi" class="btn btn-outline-secondary mx-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-github" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/latif-muhyi-25325a30b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                    class="btn btn-outline-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                    </svg>
                </a>
            </div>
            <div class="col-md-6 my-5">
                <img src="{{ asset('assets/image/latip.jpg') }}" alt="Foto Latip" width="70%"
                    class="rounded-circle border border-2 shadow">
            </div>
        </div>
    </div>

    {{-- SKILL --}}
    <div id="skill-section" class="container my-5">
        <div class="border-top border-1 mt-5">
            <div class="text-center mt-5 ">
                <h4 style="color: #3BAFFF; font-weight: bold">SKILL</h4>
                <h5>Latest Skill I Have Learned</h5>
            </div>
            <div class="row align-items-center mx-auto">
                <div class="col my-3">
                    <div class="card shadow-lg mx-auto" style="width: 18rem;" data-title="React Native"
                        data-image="{{ asset('assets/image/react-native.png') }}"
                        data-text="I am able to use the React Native Library for Front End development and integration with Back-End. I started learning React Native while already working, beginning my studies in March 2024.">
                        <img src="{{ asset('assets/image/react-native.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #54bbff; font-weight: bold">React Native</h5>
                            <p class="card-text">I am able to use the React Native Library for Front End development
                                and integration with Back-End. I started learning React Native while already working,
                                beginning my studies in March 2024.</p>
                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">View</a>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card shadow-lg mx-auto" style="width: 18rem;" data-title="React Js"
                        data-image="{{ asset('assets/image/react-js.png') }}"
                        data-text="I am able to use the React Js Library for Front End development
                                and integration with Back-End. I started learning React Js while already working,
                                beginning my studies in January 2024.">
                        <img src="{{ asset('assets/image/react-js.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #83cdfe; font-weight: bold">React Js</h5>
                            <p class="card-text">I am able to use the React Js Library for Front End development
                                and integration with Back-End. I started learning React Js while already working,
                                beginning my studies in January 2024.</p>
                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-top border-1 mt-5">
            <div class="text-center mt-5">
                <h4 style="color: #3BAFFF; font-weight: bold">SKILL</h4>
                <h5>Another Skill I Have Learned</h5>
            </div>
            <div class="row align-items-center mx-auto">
                <div class="col my-3">
                    <div class="card shadow-lg mx-auto" style="width: 18rem;" data-title="Laravel"
                        data-image="{{ asset('assets/image/laravel.jpeg') }}"
                        data-text="I started learning Laravel during my university years and found that this framework
                                greatly simplifies web application development. During my studies, I used Laravel to
                                gain a deeper understanding of web programming concepts and their implementation.
                                Currently, Laravel remains my go-to choice for my work projects. Its ability to
                                streamline development processes and provide various advanced features allows me to work
                                more efficiently and effectively in completing my projects.">
                        <img src="{{ asset('assets/image/laravel.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #fc884d; font-weight: bold">Laravel</h5>
                            <p class="card-text">I started learning Laravel during my university years and found that
                                this framework greatly simplifies web application development. During my studies, I used
                                Laravel to
                                gain a deeper understanding of web programming concepts and their implementation.
                                Currently, Laravel remains my go-to choice for my work projects. Its ability to
                                streamline development processes and provide various advanced features allows me to work
                                more efficiently and effectively in completing my projects.</p>
                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">View</a>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card shadow-lg mx-auto" style="width: 18rem;" data-title="PHP"
                        data-image="{{ asset('assets/image/php.png') }}"
                        data-text="I started learning PHP during my vocational high school (SMK)
                                education. Later, I began studying Laravel during college and now use Laravel for
                                several projects at work.">
                        <img src="{{ asset('assets/image/php.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #9ec2e0; font-weight: bold">PHP</h5>
                            <p class="card-text">I started learning PHP during my vocational high school (SMK)
                                education. Later, I began studying Laravel during college and now use Laravel for
                                several projects at work.</p>
                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">View</a>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card shadow-lg mx-auto" style="width: 18rem;" data-title="Bootstrap"
                        data-image="{{ asset('assets/image/bootstrap.png') }}" data-text="...">
                        <img src="{{ asset('assets/image/bootstrap.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #9a7eff; font-weight: bold">Bootstrap</h5>
                            <p class="card-text">I started learning PHP during my vocational high school (SMK)
                                education. Later, I began studying Laravel during college and now use Laravel for
                                several projects at work.</p>
                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">View</a>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card shadow-lg mx-auto" style="width: 18rem;" data-title="Github"
                        data-image="{{ asset('assets/image/github.png') }}"
                        data-text="I started learning GitHub during my college studies in 2019. Since then, I've gained valuable experience with version control and collaborative development, which has been essential for my programming projects">
                        <img src="{{ asset('assets/image/github.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #9ec2e0; font-weight: bold">Github</h5>
                            <p class="card-text">I started learning GitHub during my college studies in 2019. Since
                                then, I've gained valuable experience with version control and collaborative
                                development, which has been essential for my programming projects</p>
                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">View</a>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card shadow-lg mx-auto" style="width: 18rem;" data-title="Postman"
                        data-image="{{ asset('assets/image/postman.png') }}"
                        data-text="I started learning Postman in September 2023, which coincided with the beginning of my first job. During this time, I focused on mastering Postman to efficiently manage and test API integrations between the frontend and backend. This learning experience has been crucial in helping me understand and streamline communication between different parts of the application, ensuring that data flows seamlessly and errors are minimized">
                        <img src="{{ asset('assets/image/postman.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #fc884d; font-weight: bold">Postman</h5>
                            <p class="card-text">I began learning Postman for frontend and backend integration starting
                                from September 2023, right when I started my first job</p>
                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">View</a>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card shadow-lg mx-auto" style="width: 18rem;" data-title="React Native"
                        data-image="{{ asset('assets/image/react-native.png') }}"
                        data-text="I am able to use the React Native Library for Front End development and integration with Back-End. I started learning React Native while already working, beginning my studies in March 2024.">
                        <img src="{{ asset('assets/image/react-native.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #54bbff; font-weight: bold">React Native</h5>
                            <p class="card-text">I am able to use the React Native Library for Front End development
                                and integration with Back-End. I started learning React Native while already working,
                                beginning my studies in March 2024.</p>
                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">View</a>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card shadow-lg mx-auto" style="width: 18rem;" data-title="React Js"
                        data-image="{{ asset('assets/image/react-js.png') }}"
                        data-text="I am able to use the React Js Library for Front End development
                                and integration with Back-End. I started learning React Js while already working,
                                beginning my studies in January 2024.">
                        <img src="{{ asset('assets/image/react-js.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #83cdfe; font-weight: bold">React Js</h5>
                            <p class="card-text">I am able to use the React Js Library for Front End development
                                and integration with Back-End. I started learning React Js while already working,
                                beginning my studies in January 2024.</p>
                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Galery --}}
    <div id="galery-section" class="container my-5">
        <div class="border-top border-1 mt-5">
            <div class="text-center mt-5 ">
                <h4 style="color: #3BAFFF; font-weight: bold">Galery</h4>
                <h5>Project on Progress</h5>
            </div>
            <div class="row align-items-center mx-auto">
                <div class="col my-3">
                    <div class="card shadow-lg mx-auto" style="width: 18rem;">
                        <img src="{{ asset('assets/image/galery/disentra.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BJB Disentra</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-secondary">View</a>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card shadow-lg mx-auto" style="width: 18rem;">
                        <img src="{{ asset('assets/image/galery/kampungpinter.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kampung Pinter</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-secondary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-top border-1 mt-5">
            <div class="text-center mt-5">
                <h4 style="color: #3BAFFF; font-weight: bold">Galery</h4>
                <h5>All Project</h5>
            </div>
            <div class="row align-items-center mx-auto">
                <div class="col my-3">
                    <div class="card shadow-lg mx-auto" style="width: 18rem;">
                        <img src="{{ asset('assets/image/galery/kopikental.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kopikental</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-secondary">View</a>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card shadow-lg mx-auto" style="width: 18rem;">
                        <img src="{{ asset('assets/image/galery/iris.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BJB Iris</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-secondary">View</a>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card shadow-lg mx-auto" style="width: 18rem;">
                        <img src="{{ asset('assets/image/galery/election.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Election</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-secondary">View</a>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card shadow-lg mx-auto" style="width: 18rem;">
                        <img src="{{ asset('assets/image/galery/kampungpinter.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kampung Pinter</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-secondary">View</a>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card shadow-lg mx-auto" style="width: 18rem;">
                        <img src="{{ asset('assets/image/galery/disentra.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BJB Disentra</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-secondary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- About Me --}}
    <div id="about-section" class="container my-5">
        <div class="border-top border-1 mt-5">
            <div class="text-center mt-5">
                <h4 style="color: #3BAFFF; font-weight: bold">About Me</h4>
            </div>
            <div class="row align-items-center mx-auto">
                <div class="col-md-4 my-3">
                    <img src="{{ asset('assets/image/latip.jpg') }}" alt="Foto Latip" width="70%"
                        class="ani rounded-circle shadow">
                </div>
                <div class="col-md-8 my-3 ani">
                    <p class="text-justify">
                        Hello, my name is Abdul Latip Muhyi. I am a programmer with primary expertise in web application
                        development using Laravel, a PHP framework renowned for its ease and flexibility. For
                        approximately one year, I have been working with Laravel, building various scalable and
                        efficient web applications.
                    </p>
                    <p class="mt-3">
                        In addition to Laravel, I also have strong experience in mobile application development using
                        React Native. With React Native, I have successfully created cross-platform mobile applications,
                        meaning a single codebase can run on both Android and iOS devices. This allows me to speed up
                        development time and deliver a consistent user experience across different devices.
                    </p>
                    <p class="mt-3">
                        Currently, I am deepening my knowledge of React.js, a highly popular JavaScript library for
                        building dynamic and responsive user interfaces. By mastering React.js, I aim to expand my
                        abilities in creating modern, interactive, and high-performance web applications.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog custom-modal-width modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img id="modal-image" src="" class="img-fluid" alt="...">
                        </div>
                        <div class="col-lg-8">
                            <p id="modal-description"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer bg-secondary py-3 text-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <h5>Sosial Media</h5>
                    </div>
                    <div class="d-flex mb-1">
                        <a href="" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg>
                        </a>
                        <p class="px-2 my-auto">@latip_muhyi</p>
                    </div>
                    <div class="d-flex mb-1">
                        <a href="" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                            </svg>
                        </a>
                        <p class="px-2 my-auto">latipmuhyi</p>
                    </div>
                    <div class="d-flex mb-1">
                        <a href="" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                                <path
                                    d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />
                                <path
                                    d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                            </svg>
                        </a>
                        <p class="px-2 my-auto">latipmuhyi@gmail.com</p>
                    </div>
                    <div class="d-flex mb-1">
                        <a href="" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                        </a>
                        <p class="px-2 my-auto">087846689510</p>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <h5>Address</h5>
                    </div>
                    <div class="mb-1">
                        <p class="px-2 my-auto">jl. Gatot Mangkupraja</p>
                        <p class="px-2 my-auto">Desa Nagrak</p>
                        <p class="px-2 my-auto">Kecamatan Cianjur</p>
                        <p class="px-2 my-auto">Kabupaten Cianjur</p>
                        <p class="px-2 my-auto">Provinsi Jawa Barat</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 mx-auto text-center">
            <div class="d-flex justify-content-center">
                <p style="font-size: 1.5vh" class="mx-2">© 2024</p>
                <p style="color: #3BAFFF; font-size: 1.5vh">Abdul Latip Muhyi</p>
                <p style="font-size: 1.5vh">. All Rights Reserved.</p>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
        integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets/js/color-modes.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function handleScroll() {
                const elements = document.querySelectorAll('.card, .ani');
                const windowHeight = window.innerHeight;
                elements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    if (elementTop < windowHeight - 150) {
                        element.classList.add('visible');
                    } else {
                        element.classList.remove('visible');
                    }
                });
            }

            window.addEventListener('scroll', handleScroll);
            handleScroll();

            document.querySelector('a[href="#skill-section"]').addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector('#skill-section').scrollIntoView({
                    behavior: 'smooth'
                });
            });

            const paragraphs = document.querySelectorAll('.card-text');

            paragraphs.forEach(paragraph => {
                const text = paragraph.textContent;
                const words = text.split(' ');

                if (words.length > 5) {
                    paragraph.textContent = words.slice(0, 10).join(' ') + '...';
                }
            });

            // var modal = document.getElementById('staticBackdrop');
            // var modalImage = modal.querySelector('#modal-image');
            // var modalDescription = modal.querySelector('#modal-description');

            // modal.addEventListener('show.bs.modal', function(event) {
            //     var button = event.relatedTarget;

            //     var imageSrc = button.getAttribute('data-image');
            //     var description = button.getAttribute('data-description');

            //     modalImage.src = imageSrc;
            //     modalDescription.textContent = description;
            // });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('.btn-outline-secondary[data-bs-toggle="modal"]').on('click', function() {
            var $card = $(this).closest('.card');
            var title = $card.data('title');
            var image = $card.data('image');
            var text = $card.data('text');

            $('#staticBackdropLabel').text(title);
            $('#modal-image').attr('src', image);
            $('#modal-description').text(text);
        });
    </script>


</body>

</html>
