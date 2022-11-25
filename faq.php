<?php include 'header.php'; ?>

<style>
    body {
        background-image: url(img/bg1.jpg);
    }
</style>

<div style="height: 20vh;"></div>

<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h1 class="p-3 px-4 m-0 bg-primary bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            FAQ
        </h1>
    </div>
    <div class="container-lg p-5 bg-white rounded">
        <div class="dropdown mb-3">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">go to</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#gotoBesucherverhalten">Besucherverhalten</a></li>
                <li><a class="dropdown-item" href="#gotoEintritt">Eintritt</a></li>
            </ul>
        </div>
        <h5>Häufig gestellte Fragen im Springolino</h5>
        <p>Falls Sie ihre Frage in den unten aufgefürten Listen nicht finden können, können Sie uns auch gerne kontaktieren.</p>
    </div>
</div>

<div class="modul" id="gotoBesucherverhalten">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h3 class="p-3 px-4 m-0 bg-white bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            Besucherverhalten
        </h3>
    </div>
    <div class="container-lg p-5 bg-white rounded">
        <div class="accordion accordion-flush" id="besucherverhalten">
            <div class="accordion-item">
                <h2 class="accordion-header" id="schuheHeader">
                    <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#schuhe" aria-expanded="false" aria-controls="schuhe">
                        Dürfen die Spielgeräte mit Schuhen betreten werden?
                    </button>
                </h2>
                <div id="schuhe" class="accordion-collapse collapse" aria-labelledby="schuheHeader" data-bs-parent="besucherverhalten">
                    <div class="accordion-body">
                        Nein, ausschließlich auf Strümpfen. Wir empfehlen Rutschesocken. Im Springolino können Rutschesocken außerdem für 3€ pro Paar erworben werden.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="alleineHeader">
                    <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#alleine" aria-expanded="false" aria-controls="alleine">
                        Dürfen Kinder alleine im Springolino bleiben?
                    </button>
                </h2>
                <div id="alleine" class="accordion-collapse collapse" aria-labelledby="alleineHeader" data-bs-parent="besucherverhalten">
                    <div class="accordion-body">
                        Ja, allerdings erst ab 12 Jahren, mit einer schriftlichen Erlaubnis eines Erziehungsberechtigten und unter Vorlage eines gültigen Lichtbildausweises / Schülerausweises, (siehe <a href="#">Downloads</a>).
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="schuheErwachseneHeader">
                    <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#schuheErwachsene" aria-expanded="false" aria-controls="schuheErwachsene">
                        Müssen Erwachsene auch die Schuhe ausziehen?
                    </button>
                </h2>
                <div id="schuheErwachsene" class="accordion-collapse collapse" aria-labelledby="schuheErwachseneHeader" data-bs-parent="besucherverhalten">
                    <div class="accordion-body">
                        Generell nein, nur wenn Sie die Spielgeräte betreten.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modul" id="gotoEintritt">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h3 class="p-3 px-4 m-0 bg-white bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            Eintritt
        </h3>
    </div>
    <div class="container-lg p-5 bg-white rounded">
        <h5>Hier entsteht etwas..</h5>
        <p>Dieser Bereich ist noch im Aufbau</p>
    </div>
</div>

<?php include 'footer.php'; ?>