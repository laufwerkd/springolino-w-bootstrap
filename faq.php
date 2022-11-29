<?php include 'header.php'; ?>

<style>
    body {
        margin-top: 25vh;
        background-image: url(img/bg1.jpg);
    }
</style>

<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h1 class="p-3 px-4 m-0 bg-primary bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            FAQ
        </h1>
    </div>
    <div class="container-lg p-4 bg-white rounded">
        <div class="dropdown mb-3">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">go to</button>
            <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href="#gotoBesucherverhalten">Besucherverhalten</a></li>
                <li><a class="dropdown-item" href="#gotoEintritt">Eintritt</a></li>
                <li><a class="dropdown-item" href="#gotoMitbringsel">Mitbringsel</a></li>
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
        </h2>
    </div>
    <div class="container-lg p-4 bg-white rounded">
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
        </h2>
    </div>
    <div class="container-lg p-4 bg-white rounded">
        <div class="accordion accordion-flush" id="eintritt">
            <div class="accordion-item">
                <h2 class="accordion-header" id="stundentarifHeader">
                    <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#stundentarif" aria-expanded="false" aria-controls="stundentarif">
                        Gibt es auch Stundentarife?
                    </button>
                </h2>
                <div id="stundentarif" class="accordion-collapse collapse" aria-labelledby="stundentarifHeader" data-bs-parent="eintritt">
                    <div class="accordion-body">
                        Nein, immer nur Tageskarten.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="gebKinderHeader">
                    <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#gebKinder" aria-expanded="false" aria-controls="gebKinder">
                        Haben Geburtstagskinder freien Eintritt?
                    </button>
                </h2>
                <div id="gebKinder" class="accordion-collapse collapse" aria-labelledby="gebKinderHeader" data-bs-parent="eintritt">
                    <div class="accordion-body">
                        Nein, haben sie nicht.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="anzahlenHeader">
                    <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#anzahlen" aria-expanded="false" aria-controls="anzahlen">
                        Muss der gebuchte Geburtstag angezahlt werden?
                    </button>
                </h2>
                <div id="anzahlen" class="accordion-collapse collapse" aria-labelledby="anzahlenHeader" data-bs-parent="eintritt">
                    <div class="accordion-body">
                        Nein, es wird vor Ort bezahlt. Letztendlich auch nur die Anzahl der Kindern, die wirklich da sind, aber immer für mindestens 6 Kinder.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="karteHeader">
                    <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#karte" aria-expanded="false" aria-controls="karte">
                        Kann man bei Ihnen mit Karte bezahlen?
                    </button>
                </h2>
                <div id="karte" class="accordion-collapse collapse" aria-labelledby="karteHeader" data-bs-parent="eintritt">
                    <div class="accordion-body">
                        Ja, aber nur mit EC-Karte (Girocard). Mastercard/Visa wird nicht akzeptiert.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="familienHeader">
                    <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#familien" aria-expanded="false" aria-controls="familien">
                        Haben Sie Familien- oder Stundenkarten?
                    </button>
                </h2>
                <div id="familien" class="accordion-collapse collapse" aria-labelledby="familienHeader" data-bs-parent="eintritt">
                    <div class="accordion-body">
                        Nein, haben wir nicht.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="rentnerHeader">
                    <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#rentner" aria-expanded="false" aria-controls="rentner">
                        Gibt es Rabatte für Rentner?
                    </button>
                </h2>
                <div id="rentner" class="accordion-collapse collapse" aria-labelledby="rentnerHeader" data-bs-parent="eintritt">
                    <div class="accordion-body">
                        Nein, gibt es nicht.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="ohneKindHeader">
                    <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#ohneKind" aria-expanded="false" aria-controls="ohneKind">
                        Erhalten Erwachsene auch ohne Kinder Eintritt?
                    </button>
                </h2>
                <div id="ohneKind" class="accordion-collapse collapse" aria-labelledby="ohneKindHeader" data-bs-parent="eintritt">
                    <div class="accordion-body">
                        Nein, erhalten sie nicht.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modul" id="gotoMitbringsel">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h3 class="p-3 px-4 m-0 bg-white bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            Mitbringsel
        </h2>
    </div>
    <div class="container-lg p-4 bg-white rounded-top">
        <div class="accordion accordion-flush" id="mitbringsel">
            <div class="accordion-item">
                <h2 class="accordion-header" id="speisTrankHeader">
                    <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#speisTrank" aria-expanded="false" aria-controls="speisTrank">
                        Dürfen Speisen und Getränke mitgebracht werden?
                    </button>
                </h2>
                <div id="speisTrank" class="accordion-collapse collapse" aria-labelledby="speisTrankHeader" data-bs-parent="mitbringsel">
                    <div class="accordion-body">
                        Nein, Ausnahmen sind: reservierte Geburtstage (da nur Kuchen) oder Essen für Säuglinge, Klein- & Allergiekinder.
                        Obst & Gemüse ist jedoch erlaubt mitzubringen, solange es keine fertigen Salate sind.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="kinderwagenHeader">
                    <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#kinderwagen" aria-expanded="false" aria-controls="kinderwagen">
                        Dürfen Kinderwagen mit rein genommen werden?
                    </button>
                </h2>
                <div id="kinderwagen" class="accordion-collapse collapse" aria-labelledby="kinderwagenHeader" data-bs-parent="mitbringsel">
                    <div class="accordion-body">
                        Selbstverständlich.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="spielzeugHeader">
                    <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#spielzeug" aria-expanded="false" aria-controls="spielzeug">
                        Darf eigenes Spielzeug mitgebracht werden?
                    </button>
                </h2>
                <div id="spielzeug" class="accordion-collapse collapse" aria-labelledby="spielzeugHeader" data-bs-parent="mitbringsel">
                    <div class="accordion-body">
                        Bis auf den Lieblingsteddy nein.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="schliessfachHeader">
                    <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#schliessfach" aria-expanded="false" aria-controls="schliessfach">
                        Haben Sie Schließfächer?
                    </button>
                </h2>
                <div id="schliessfach" class="accordion-collapse collapse" aria-labelledby="schliessfachHeader" data-bs-parent="mitbringsel">
                    <div class="accordion-body">
                        Ja, die Nutzungsgebühr beträgt 1€ und ein Schlüsselpfand muss hinterlegt werden.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>