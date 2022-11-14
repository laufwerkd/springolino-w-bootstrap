<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.min.css" rel="stylesheet">
        <link rel="icon" href="img/icons/mascotIcon.png">
        <title>Springolino</title>

        <style>
            @font-face {
                font-family: marker;
                src: url(font/markerFelt.ttf);
            }

            .bg1 {
                background-image: url(img/bg2Fullscreen.png);
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
            }

            .bg2 {
                background-image: url(img/bg1Fullscreen.png);
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
    </head>

    <body>
        <header>
            <div class="container-lg position-fixed top-0 start-50 translate-middle-x py-3 px-4" style="z-index: 2000;">
                <nav class="navbar d-flex justify-content-between p-0">
                    <a href="index.php" class="navbar-brand m-0 p-0">
                        <img src="img/icons/logoCentered.png" height="75px">
                    </a>
                    <ul class="navbar-nav d-flex flex-row gap-2">
                        <li class="nav-item">
                            <a href="#" class="btn d-none d-md-block px-3 py-2 h-100 bg-primary bg-opacity-75 rounded-pill border-0" style="backdrop-filter: blur(2px);">
                                <span class="align-middle text-white fw-bold">Buchen</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#offcanvas" class="btn p-2 h-100 bg-black bg-opacity-50 rounded-circle border-0" data-bs-toggle="offcanvas" role="button" aria-controls="offcanvas" style="backdrop-filter: blur(2px);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list text-white" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            <?php include 'offcanvas.php'; ?>