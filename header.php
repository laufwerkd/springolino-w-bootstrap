<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.min.css" rel="stylesheet">
        <link rel="icon" href="img/icon/mascot.png">
        <title>Springolino</title>

        <style>
            @font-face {
                font-family: marker;
                src: url(font/markerFelt.ttf);
            }

            body, .bg {
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
            }

            .bg-none {
                background: none;
            }

            .text-gray {
                color: #E8E8E8;
            }

            .bg-gray {
                background-color: #E8E8E8;
            }
        </style>
    </head>

    <body>
        <header class="container-lg position-fixed top-0 start-50 translate-middle-x px-4 py-3" style="z-index: 2000;">
            <nav class="navbar d-flex flex-row justify-content-between p-0">
                <a href="index.php" class="navbar-brand m-0 p-0">
                    <img src="img/icon/logoCentered.png" height="75px" width="auto">
                </a>
                <ul class="navbar-nav d-flex flex-row gap-2">
                    <li class="nav-item d-none d-sm-block">
                        <a href="buchen.php" class="btn px-4 py-2 h-100 bg-primary bg-opacity-75 rounded-pill" style="backdrop-filter: blur(2px);">
                            <span class="align-middle text-white fs-5" style="font-family: marker;">Geburtstag</span>
                        </a>
                    </li>
                    <li class="nav-item d-block d-sm-none">
                        <a href="buchen.php" class="btn p-2 bg-primary bg-opacity-75 rounded-circle" style="backdrop-filter: blur(2px);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-balloon-fill text-white" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8.48 10.901C11.211 10.227 13 7.837 13 5A5 5 0 0 0 3 5c0 2.837 1.789 5.227 4.52 5.901l-.244.487a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.244-.487ZM4.352 3.356a4.004 4.004 0 0 1 3.15-2.325C7.774.997 8 1.224 8 1.5c0 .276-.226.496-.498.542-.95.162-1.749.78-2.173 1.617a.595.595 0 0 1-.52.341c-.346 0-.599-.329-.457-.644Z"/>
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