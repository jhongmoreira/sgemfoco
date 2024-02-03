<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="css/main.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="cdn/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="cdn/fa/css/fontawesome.min.css">
        <link rel="stylesheet" href="cdn/fa/css/brands.min.css">
        <link rel="stylesheet" href="cdn/fa/css/solid.min.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">SANGO+</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?pg=8">Feed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Currículos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?pg=3">WebTV</a>
                            </li>
                        </ul>
                        <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2 bg-dark text-white" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-warning" type="submit">Pesquisas</button>
                    </form> -->
                    </div>
                </div>
            </nav>
        </header>

      @yield('content')
      
      <footer class="py-3 my-1">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Afilie-se</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">SAC</a></li>
        </ul>
        <p class="text-center text-body-secondary">© 2023 SG+</p>
      </footer>
      <!-- JavaScript -->
      <script src="https://unpkg.com/@popperjs/core@2"></script>
      <script src="cdn/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
