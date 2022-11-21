<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.min.css" rel="stylesheet">
        <link rel="icon" href="img/icons/mascot.png">
        <title>Springolino</title>

        <style>
            @font-face {
                font-family: marker;
                src: url(font/markerFelt.ttf);
            }

            .bg1 {
                background-image: url(img/bg1.jpg);
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
            }

            .bg2 {
                background-image: url(img/bg2.jpg);
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
    </head>

    <body>
        <header class="container-lg position-fixed top-0 start-50 translate-middle-x px-4 py-3" style="z-index: 2000;">
            <nav class="navbar d-flex flex-row justify-content-between p-0">
                <a href="index.php" class="navbar-brand m-0 p-0">
                    <img src="img/icons/logoCentered.png" height="75px" width="auto">
                </a>
                <ul class="navbar-nav d-flex flex-row gap-2">
                    <li class="nav-item">
                        <a href="#" class="btn d-none d-sm-block px-4 py-2 h-100 bg-primary bg-opacity-75 rounded-pill" style="backdrop-filter: blur(2px);">
                            <span class="align-middle text-white fs-5 fw-bold">Buchen</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="btn d-sm-none p-2 bg-primary bg-opacity-75 rounded-circle" style="backdrop-filter: blur(2px);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-calendar-date-fill text-white" viewBox="0 0 16 16">
                                <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zm5.402 9.746c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2z"/>
                                <path d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm-2.89-5.435v5.332H5.77V8.079h-.012c-.29.156-.883.52-1.258.777V8.16a12.6 12.6 0 0 1 1.313-.805h.632z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#offcanvas" class="btn p-2 bg-black bg-opacity-50 rounded-circle" data-bs-toggle="offcanvas" role="button" aria-controls="offcanvas" style="backdrop-filter: blur(2px);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list text-white" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            <?php include 'offcanvas.php'; ?>