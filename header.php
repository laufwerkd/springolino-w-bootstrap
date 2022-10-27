<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.min.css" rel="stylesheet">
        <title>Springolino</title>
    </head>

    <body>
        <header class="sticky-top shadow">
            <nav class="navbar navbar-expand-md bg-light">
                <div class="container-md">
                    <a href="" class="d-md-none ms-1 btn btn-secondary text-white fw-bold">Buchen</a>

                    <a href="index.php" class="navbar-brand m-0"><img src="img/icons/logoCentered.png" height="75" width="auto"></a>

                    <button class="btn d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-expanded="false" aria-label="Toggle offcanvas">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="offcanvas-md offcanvas-end" id="offcanvas">
                        <div class="offcanvas-header bg-light shadow">
                            <h5 class="offcanvas-title">Navigation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvas"></button>
                        </div>

                        <div class="offcanvas-body">
                            <ul class="navbar-nav gap-2">
                                <li class="navbar-item">
                                    <div class="dropdown">
                                        <a class="btn btn-primary dropdown-toggle fw-bold" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Bereiche
                                        </a>
                                        <ul class="dropdown-menu shadow">
                                            <li><a class="dropdown-item" href="">Innen</a></li>
                                            <li><a class="dropdown-item" href="">Außen</a></li>
                                            <li><a class="dropdown-item" href="">Gastronomie</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="navbar-item"><a class="btn btn-primary fw-bold" href="">Anfahrt</a></li>
                                <li class="navbar-item"><a class="btn btn-primary fw-bold" href="">Veranstaltung</a></li>
                                <li class="navbar-item">
                                    <div class="dropdown">
                                        <a class="btn btn-primary dropdown-toggle fw-bold" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Service
                                        </a>
                                        <ul class="dropdown-menu shadow">
                                            <li><a class="dropdown-item" href="">Ticketpreise</a></li>
                                            <li><a class="dropdown-item" href="">Öffnungszeiten</a></li>
                                            <li><a class="dropdown-item" href="">häufige Fragen</a></li>
                                            <li><a class="dropdown-item" href="">Jobs</a></li>
                                            <li><a class="dropdown-item" href="">Gästebuch</a></li>
                                            <li><a class="dropdown-item" href="">Kontakt</a></li>
                                            <li><a class="dropdown-item" href="">Rückblicke</a></li>
                                            <li><a class="dropdown-item" href="">Downloads</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="navbar-item">
                                    <a class="d-none d-md-block btn btn-secondary text-white fw-bold">Reservierung(löschen)</a>
                                </li>
                            </ul>

                            <div class="d-md-none">
                                <hr class="my-2">
                                <p class="mb-1 text-muted">&copy; Springolino</p>
                                <ul class="navbar-nav flex-row flex-wrap">
                                    <li class="navbar-item me-3"><a href="" class="nav-link p-0">Impressum</a></li>
                                    <li class="navbar-item me-3"><a href="" class="nav-link p-0">AGBs</a></li>
                                    <li class="navbar-item me-3"><a href="" class="nav-link p-0">Datenschutz</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>