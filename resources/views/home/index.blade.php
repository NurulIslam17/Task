<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="" />
    <meta name="keywords" content="content" />

    <title>AquaLink</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />

    {{--    Data Table--}}
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700;800&display=swap"
        rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('')}}font/assets/css/style.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('')}}font/assets/images/icons/favicon.ico" />
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-blue">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('/') }}">
                <h1 class="text-warning" style="font-weight: bold">Aqua<span class="text-light">Link</span> </h1>
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


                    @if(Session::get('user_id'))

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('assessment2') }}">Assessment2</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('crud') }}">CRUD</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Todo Api
                            </a>
                            <ul class="dropdown-menu bg-info" aria-labelledby="navbarDropdown">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('todo.api') }}">Refreash Api</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('view.todo.api') }}">View Data</a>
                                </li>

                            </ul>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link" href="#">{{Session::get('user_name')}}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>

                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-white" href="{{ route('signup') }}">Sign Up</a>
                        </li>
                    @endif


                </ul>
            </div>
        </div>
    </nav>
</header>
<main></main>

@if(Session::get('apiMsg'))
    <div class="container">
        <section class="py-5">
            <p class="text-success">{{ Session::get('apiMsg') }}</p>
        </section>
    </div>

@endif



@yield('body')

<footer></footer>

<!-- Bootstrap Bundle with Popper -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


    {{--data Table--}}
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

</body>
</html>
