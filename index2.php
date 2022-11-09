<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.min.css" rel="stylesheet">
        <link rel="icon" href="img/icons/mascotIcon.png">
        <title>Springolino</title>
    </head>

    <style>
        body {
            background-image: url(img/bg2Fullscreen.png);
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .start {
            position: relative;
        }

        .start .title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

    <body>
        <header class="container-lg position-fixed top-0 start-50 translate-middle-x py-3 px-4" style="z-index: 2000;">
            <nav class="navbar d-flex justify-content-between p-0">
                <a href="index2.php" class="navbar-brand m-0 p-0">
                    <img src="img/icons/logoCentered.png" height="75px">
                </a>
                <ul class="navbar-nav d-flex flex-row gap-2">
                    <a href="#" class="btn px-3 py-2 d-none d-md-block bg-primary bg-opacity-75 rounded-pill" style="backdrop-filter: blur(2px);">
                        <span class="align-middle text-white fw-bold">Buchen</span>
                    </a>
                    <a href="#offcanvas" class="btn p-2 bg-black bg-opacity-50 rounded-circle border-0" data-bs-toggle="offcanvas" role="button" aria-controls="offcanvas" style="backdrop-filter: blur(2px);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list text-white" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </a>
                </ul>
            </nav>
        </header>

        <main>
            <div class="container-fluid start" style="height: 100vh">
                <div class="offcanvas offcanvas-end w-100 bg-black bg-opacity-10" data-bs-scroll="true" tabindex="-1" id="offcanvas" style="backdrop-filter: blur(8px);">
                    <div class="offcanvas-body">
                        <div class="container-lg position-fixed top-50 start-50 translate-middle">
                            <nav class="navbar p-0 d-flex flex-column justify-content-center">
                                <ul class="navbar-nav d-flex flex-column gap-3 align-items-center">
                                    <li class="nav-item w-100 d-md-none">
                                        <a href="#" class="btn px-5 py-3 w-100 bg-primary bg-opacity-50 rounded-pill" style="backdrop-filter: blur(2px);">
                                            <span class="align-middle text-white fs-1 fw-bold">Buchen</span>
                                        </a>
                                    </li>
                                    <li class="nav-item w-100">
                                        <a href="#" class="btn px-5 py-3 w-100 bg-secondary bg-opacity-50 rounded-pill" style="backdrop-filter: blur(2px);">
                                            <span class="align-middle text-white fs-1 fw-bold">Entdecken</span>
                                        </a>
                                    </li>
                                    <li class="nav-item w-100">
                                        <a href="#" class="btn px-5 py-3 w-100 bg-info bg-opacity-50 rounded-pill" style="backdrop-filter: blur(2px);">
                                            <span class="align-middle text-white fs-1 fw-bold">Preise & Zeiten</span>
                                        </a>
                                    </li>
                                    <li class="nav-item w-100">
                                        <a href="#" class="btn px-5 py-3 w-100 bg-danger bg-opacity-50 rounded-pill" style="backdrop-filter: blur(2px);">
                                            <span class="align-middle text-white fs-1 fw-bold">Service</span>
                                        </a>
                                    </li>
                                </ul>
                                <br>
                                <ul class="navbar-nav d-flex flex-row gap-3">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link text-white">Impressum</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link text-white">AGBs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link text-white">Datenschutz</a>
                                    </li>
                                </ul>
                                <span class="text-white">&copy; Springolino <?php echo date("Y"); ?></span>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="title">
                    <h1 class="text-center text-white fw-bold" style="font-size: 4rem;">
                        SPAß.<br>
                        SPIELEN.<br>
                        JEDERZEIT.
                    </h1>
                </div>
            </div>
            <div class="container-fluid bg-white" style="height: 5000px;">
                <div class="container-lg">
                    <h1>Hallo</h1>
                </div>
            </div>
        </main>

        <footer>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>