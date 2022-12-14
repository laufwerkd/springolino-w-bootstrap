<?php include 'header.php'; ?>

<style>
    body {
        margin-top: 25vh;
        background-image: url(img/bg/bg1.jpg);
    }
</style>

<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h1 class="p-3 px-4 m-0 bg-primary bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(7.5px);">
            Dein Kindergeburtstag im Springolino
        </h1>
    </div>
    <div class="container-lg p-4 bg-white bg-opacity-75 rounded" style="backdrop-filter: blur(15px);">
        <div class="dropdown mb-3">
            <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">go to</button>
            <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href="#gotoPakete">Geburtstagspakete</a></li>
                <li><a class="dropdown-item" href="#gotoFormular">Buchungsformular</a></li>
            </ul>
        </div>

		<h5>Dein Kindergeburtstag im Springolino</h5>
		<p>Wir machen Deinen großen Tag zum unvergesslichen Erlebnis! Keinen Stress zu Hause – Super-Spaß für die Kinder und entspannte Eltern. Lass doch einfach deine tolle Geburtstagsparty im Springolino steigen!</p>
	</div>
</div>

<div class="modul" id="gotoPakete">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h3 class="p-3 px-4 m-0 bg-secondary bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(7.5px);">
            Geburtstagspakete
        </h3>
    </div>
    <div class="container-lg p-4 bg-white bg-opacity-75 rounded" style="backdrop-filter: blur(15px);">
		<div class="accordion mb-3" id="geburtstagspakete">
            <div class="accordion-item">
                <div class="accordion-header" id="paket1Header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paket1" aria-expanded="false" aria-controls="paket1">
                    	<span class="badge bg-primary fs-6">Geburtstagspaket 1</span>
                    </button>
                </div>
                <div id="paket1" class="accordion-collapse collapse" aria-labelledby="paket1Header" data-bs-parent="geburtstagspakete">
                    <div class="accordion-body">
						<h6>Enthält</h6>
						<ul>
							<li><span class="text-secondary">12,50€ Eintrittspreis</span> pro Kind</li>
							<li>eine <span class="text-secondary">Tageseintrittskarte</span></li>
							<li>einen <span class="text-secondary">Reserviertern Geburtstags Tisch</span> für den gesamten Aufenthalt</li>
							<li><span class="text-secondary">Tischdeko</span> (Teller, Becher, Luftschlangen und Servietten)</li>
							<li>ein <span class="text-secondary">Thron</span> für das Geburtstagskind mit Namen</li>
							<li><span class="text-secondary">1 Slush-Eisgetränk (0,2l)</span> nach Wahl für alle Kinder</li>
						</ul>

						<h6>Außerdem</h6>
						<ul>
							<li>Das Geburtstagskind erhält 1 Eintritts-Gutschein für den nächsten Besuch, wenn der Geburtstag nicht länger als 10 Tage zurück liegt, oder in der Zukunft liegt.</li>
						    <li>2 Erwachsene als Begleitpersonen haben freien Eintritt.</li>
						</ul>

						<h6>Anforderung</h6>
                        <ul>
                            <li>
                                Mindestanzahl von 6 Kinder
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people text-info" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                                </svg>
                                und nur <span class="text-danger">bis zum 14. Geburtstag</span>.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header" id="paket2Header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paket2" aria-expanded="false" aria-controls="paket2">
                    	<span class="badge bg-secondary fs-6">Geburtstagspaket 2</span>
                    </button>
                </div>
                <div id="paket2" class="accordion-collapse collapse" aria-labelledby="paket2Header" data-bs-parent="geburtstagspakete">
                    <div class="accordion-body">
                        <h6>Enthält</h6>
                        <ul>
                            <li>alles aus <span class="badge bg-primary">Geburtstagspaket 1</span></li>
							<li><span class="text-secondary">17,50€ Eintrittspreis</span> pro Kind</li>
                            <li>ein <span class="text-secondary">Kindermenü</span> bestehend aus:</li>
                                <ul>
                                    <li>4 Chicken Nuggets mit Pommes (Mayo und Ketchup) <span class="text-danger">oder</span> 1 Kinderpizza Ø18cm (Margherita, Salami oder Schinken)</li>
                                    <li>Chupa Chups Lolly und Capri Sonne nach Wahl</li>
                                </ul>
                            <li>eine <span class="text-secondary">Freifahrt mit den Autoscooter</span> für alle Kinder</li>
                        </ul>

                        <h6>Anforderung</h6>
                        <ul>
                            <li>
                                Mindestanzahl von 6 Kinder
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people text-info" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                                </svg>
                                und nur <span class="text-danger">bis zum 14. Geburtstag</span>.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

		<h5>Sonstige Informationen</h5>
		<p>Gerne darfst Du Dir Deinen eigenen Geburtstagskuchen mitbringen.	Thermoskannen mit heißen Getränken oder Kerzen - auch auf dem Kuchen - sind leider nicht erlaubt, denn hier besteht ein erhöhtes Gefahrenpotenzial. Hier haben wir ein paar tolle Vorlagen für deine Geburtstagseinladung: <a href="download/einladungDL.pdf" class="text-secondary" target="_blank">Einladung Groß</a>, <a href="download/einladungA6.pdf" class="text-secondary" target="_blank">Einladung A6</a>.</p>
		<p>Du hast noch Fragen? Telefonisch sind wir während der Öffnungszeiten für dich erreichbar.</p>
	</div>
</div>

<div class="modul" id="gotoFormular">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h3 class="p-3 px-4 m-0 bg-info bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(7.5px);">
            Buchungsformular
        </h3>
    </div>
    <div class="container-lg p-4 bg-white bg-opacity-75 rounded-top" style="backdrop-filter: blur(15px);">
        <div class="mb-3" id="wann">
            <h5>Wann</h5>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                <div class="col" id="datum">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-info">Datum</span>
                        <input type="date" class="form-control" id="datumInput">
                    </div>
                </div>
                <div class="col" id="ankunftszeit">
                    <div class="input-group mb-2">
                        <label class="input-group-text bg-info" for="ankunftInput">Ankunftszeit</label>
                        <select class="form-select" id="ankunftInput">
                            <option selected>Auswählen</option>
                            <option value="1">14:30</option>
                            <option value="2">15:00</option>
                            <option value="3">15:30</option>
                            <option value="4">16:00</option>
                            <option value="5">16:30</option>
                            <option value="6">17:00</option>
                            <option value="7">17:30</option>
                            <option value="8">18:00</option>
                            <option value="9">18:30</option>
                            <option value="10">19:00</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3" id="kindForm">
            <h5>Angaben zum Geburtstagskind</h5>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                <div class="col">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-primary">Vorname</span>
                        <input type="text" class="form-control" id="vornameKindInput" placeholder="Name">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-primary">Nachname</span>
                        <input type="text" class="form-control" id="nachnameKindInput" placeholder="Name">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-primary">Geboren am</span>
                        <input type="date" class="form-control" id="gebInput">
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3" id="buchenderForm">
            <h5>Angaben zu der buchenden Person</h5>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                <div class="col">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-secondary">Vorname</span>
                        <input type="text" class="form-control" id="vornameBuchenderInput" placeholder="Name">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-secondary">Nachname</span>
                        <input type="text" class="form-control" id="nachnameBuchenderInput" placeholder="Name">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-secondary">Telefon</span>
                        <input type="text" class="form-control" id="telInput" placeholder="Nummer">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-secondary">@</span>
                        <input type="mail" class="form-control" id="emailInput" placeholder="E-Mail">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-secondary">@</span>
                        <input type="mail" class="form-control" id="emailCheckInput" placeholder="E-Mail bestätigen">
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3" id="angabenForm">
            <h5>Angaben zur Feier</h5>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                <div class="col">
                    <div class="input-group mb-2">
                        <label class="input-group-text bg-info" for="ueber3Input">Kinder über 3 Jahre</label>
                        <select class="form-select" id="ueber3Input">
                            <option selected>Anzahl</option>
                            <option value="1">6</option>
                            <option value="2">7</option>
                            <option value="3">8</option>
                            <option value="4">9</option>
                            <option value="5">10</option>
                            <option value="6">11</option>
                            <option value="7">12</option>
                            <option value="8">13</option>
                            <option value="9">14</option>
                            <option value="10">15</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-2">
                        <label class="input-group-text bg-info" for="unter3Input">Kinder unter 3 Jahre</label>
                        <select class="form-select" id="unter3Input">
                            <option selected>Anzahl</option>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                            <option value="6">5</option>
                            <option value="7">6</option>
                            <option value="8">7</option>
                            <option value="9">8</option>
                            <option value="10">9</option>
                            <option value="11">10</option>
                            <option value="12">11</option>
                            <option value="13">12</option>
                            <option value="14">13</option>
                            <option value="15">14</option>
                            <option value="16">15</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-2">
                        <label class="input-group-text bg-info" for="erwachseneInput">Erwachsene</label>
                        <select class="form-select" id="erwachseneInput">
                            <option selected>Anzahl</option>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                            <option value="6">5</option>
                            <option value="7">6</option>
                            <option value="8">7</option>
                            <option value="9">8</option>
                            <option value="10">9</option>
                            <option value="11">10</option>
                            <option value="12">11</option>
                            <option value="13">12</option>
                            <option value="14">13</option>
                            <option value="15">14</option>
                            <option value="16">15</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mb-2">
                        <label class="input-group-text bg-info" for="geburtstagspaketInput">Geburtstagspaket</label>
                        <select class="form-select" id="geburtstagspaketInput">
                            <option selected>Auswahl</option>
                            <option value="1">Geburtstagspaket 1</option>
                            <option value="2">Geburtstagspaket 2</option>
                        </select>
                    </div>
                </div>
                <div class="col" id="essenForm">
                    <div class="input-group mb-2">
                        <label class="input-group-text bg-info" for="menuInput">Menü</label>
                        <select class="form-select" id="menuInput">
                            <option selected>Auswahl</option>
                            <option value="2">Chicken Nuggets mit Pommes</option>
                            <option value="3">Pizza</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3" id="tischForm">
            <h5>Tischauswahl</h5>
            <div class="row row-cols-1 row-cols-sm-3 row-cols-xl-5 justify-content-center">
                <div class="col card m-2 p-0 h-100 bg-primary bg-opacity-25 border-0 shadow">
                    <img src="img/tisch/tisch1.jpg" class="card-img-top">
                    <div class="p-3">
                        <input type="radio" class="btn-check" name="tische" id="tisch1Input" autocomplete="off">
                        <label class="btn btn-primary w-100" for="tisch1Input">Ponyhof</label>
                    </div>
                </div>
                <div class="col card m-2 p-0 h-100 bg-info bg-opacity-25 border-0 shadow">
                    <img src="img/tisch/tisch2.jpg" class="card-img-top">
                    <div class="p-3">
                        <input type="radio" class="btn-check" name="tische" id="tisch2Input" autocomplete="off">
                        <label class="btn btn-info w-100" for="tisch2Input">Formel 1</label>
                    </div>
                </div>
                <div class="col card m-2 p-0 h-100 bg-secondary bg-opacity-25 border-0 shadow">
                    <img src="img/tisch/tisch3.jpg" class="card-img-top">
                    <div class="p-3">
                        <input type="radio" class="btn-check" name="tische" id="tisch3Input" autocomplete="off">
                        <label class="btn btn-secondary w-100" for="tisch3Input">Schatzinsel</label>
                    </div>
                </div>
                <div class="col card m-2 p-0 h-100 bg-danger bg-opacity-25 border-0 shadow">
                    <img src="img/tisch/tisch4.jpg" class="card-img-top">
                    <div class="p-3">
                        <input type="radio" class="btn-check" name="tische" id="tisch4Input" autocomplete="off">
                        <label class="btn btn-danger w-100" for="tisch4Input">Halloween</label>
                    </div>
                </div>
                <div class="col card m-2 p-0 h-100 bg-info bg-opacity-25 border-0 shadow">
                    <img src="img/tisch/tisch5.jpg" class="card-img-top">
                    <div class="p-3">
                        <input type="radio" class="btn-check" name="tische" id="tisch5Input" autocomplete="off">
                        <label class="btn btn-info w-100" for="tisch5Input">Schloss</label>
                    </div>
                </div>
                <div class="col card m-2 p-0 h-100 bg-primary bg-opacity-25 border-0 shadow">
                    <img src="img/tisch/tisch6.jpg" class="card-img-top">
                    <div class="p-3">
                        <input type="radio" class="btn-check" name="tische" id="tisch6Input" autocomplete="off">
                        <label class="btn btn-primary w-100" for="tisch6Input">Fußball</label>
                    </div>
                </div>
                <div class="col card m-2 p-0 h-100 bg-primary bg-opacity-25 border-0 shadow">
                    <img src="img/tisch/tisch7.jpg" class="card-img-top">
                    <div class="p-3">
                        <input type="radio" class="btn-check" name="tische" id="tisch7Input" autocomplete="off">
                        <label class="btn btn-primary w-100" for="tisch7Input">Springobox</label>
                    </div>
                </div>
                <div class="col card m-2 p-0 h-100 bg-secondary bg-opacity-25 border-0 shadow">
                    <img src="img/tisch/tischStandart.jpg" class="card-img-top">
                    <div class="p-3">
                        <input type="radio" class="btn-check" name="tische" id="tischStandartInput" autocomplete="off">
                        <label class="btn btn-secondary w-100" for="tischStandartInput">Standart</label>
                    </div>
                </div>
                <div class="col m-2" id="tischnummerForm">
                    <div class="input-group">
                        <label class="input-group-text bg-secondary" for="tischnummerInput">Tisch</label>
                        <select class="form-select" id="tischnummerInput">
                            <option selected>Nummer</option>
                            <option value="1">8</option>
                            <option value="2">9</option>
                            <option value="3">10</option>
                            <option value="4">11</option>
                            <option value="5">12</option>
                            <option value="6">13</option>
                            <option value="7">14</option>
                            <option value="8">15</option>
                            <option value="9">16</option>
                            <option value="10">17</option>
                            <option value="11">18</option>
                            <option value="12">19</option>
                            <option value="13">20</option>
                            <option value="14">21</option>
                            <option value="15">22</option>
                            <option value="16">23</option>
                            <option value="17">24</option>
                            <option value="18">25</option>
                            <option value="19">26</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h5>Bedingungen</h5>
            <p>Tisch wird 1x eingedeckt. Für Kuchen: Pappteller/Becher mitbringen. Kuchen, Süsses, Obst/Gemüse mitbringen. Bitte keine Thermoskannen mit heißen Getränken, deftiges Essen oder Kerzen mit bringen. Stoppersocken nicht vergessen! Bei uns besteht aus hygienischen Gründen Sockenpflicht. Stoppersocken können bei uns auch käuflich erworben werden. Ansonsten gelten unsere <a href="agb.php" class="text-secondary">Nutzungsbedingungen</a>.</p>

            <h5>Hinweis</h5>
            <p>Nach Absenden des Formulares geht Ihnen eine Email zu mit einem Bestätigungslink zu. Bitte klicken Sie diesen an, um die Bestellung verbindlich zu bestätigen.<br>
            <span class="text-danger">Ohne anklicken des Links ist diese Bestellung nicht gültig!</span></p>
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input class="checkmark form-check-input" type="checkbox" id="agb">
                <label class="form-check-label" for="agb">
                    Ich habe die <a href="agb.php" class="text-secondary">allgmeinen Geschäfts-Bedingungen (AGB)</a> gelesen und verstanden und bin damit einverstanden.
                </label>
              </div>
              <div class="form-check">
                <input class="checkmark form-check-input" type="checkbox" id="datenschutz">
                <label class="form-check-label" for="datenschutz">
                    Ich habe die <a href="datenschutz.php" class="text-secondary">Datenschutzerklärung</a> zur Kenntnis genommen. Ich stimme zu, dass meine Angaben und Daten zur Beantwortung meiner Anfrage elektronisch erhoben und gespeichert werden. Hinweis: Sie können Ihre Einwilligung jederzeit für die Zukunft per E-Mail an <a href="mailto:fun@springolino.de" class="text-secondary">fun@springolino.de</a> wiederrufen.
                </label>
            </div>
        </div>

        <div class="d-flex flex-row justify-content-between">
            <h3>Kalkulierter Preis: <span class="text-secondary" id="preis">0,00€</span></h3>
            <a href="#" class="btn btn-danger" id="bestellen">Kostenpflichtig bestellen</a>
        </div>
    </div>
</div>

<script>
    geburtstagspaketInput = document.getElementById('geburtstagspaketInput');
    essenForm = document.getElementById('essenForm');

    essenForm.style.display = "none";

    geburtstagspaketInput.addEventListener('change', function() {
        if (geburtstagspaketInput.value == 2) {
            essenForm.style.display = "unset";
        } else {
            essenForm.style.display = "none";
        }
    })

    tischStandartInput = document.getElementById('tischStandartInput');
    tischnummerForm = document.getElementById('tischnummerForm');
    tischnummerInput = document.getElementById('tischnummerInput');

    tischnummerForm.style.display = "none";

    tischStandartInput.addEventListener('change', function() {
        if (tischStandartInput.checked = true) {
            tischnummerForm.style.display = "unset";
        } else if (tischStandartInput.checked = false) {
            tischnummerForm.style.display = "none";
        }
    });
</script>

<?php include 'footer.php'; ?>