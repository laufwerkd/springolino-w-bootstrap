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
            Dein Kindergeburtstag im Springolino
        </h1>
    </div>
    <div class="container-lg p-4 bg-white rounded">
        <div class="dropdown mb-3">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">go to</button>
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
        <h3 class="p-3 px-4 m-0 bg-secondary bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            Geburtstagspakete
        </h3>
    </div>
    <div class="container-lg p-4 bg-white rounded">
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
							<li><span class="text-primary">12,50€ Eintrittspreis</span> pro Kind</li>
							<li>eine <span class="text-primary">Tageseintrittskarte</span></li>
							<li>einen <span class="text-primary">Reserviertern Geburtstags Tisch</span> für den gesamten Aufenthalt</li>
							<li><span class="text-primary">Tischdeko</span> (Teller, Becher, Luftschlangen und Servietten)</li>
							<li>ein <span class="text-primary">Thron</span> für das Geburtstagskind mit Namen</li>
							<li><span class="text-primary">1 Slush-Eisgetränk (0,2l)</span> nach Wahl für alle Kinder</li>
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
                                und nur <span class="text-warning">bis zum 14. Geburtstag</span>.
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
							<li><span class="text-secondary">17,50€ Eintrittspreis</span> pro Kind</li>
                            <li>alles aus <span class="badge bg-primary">Geburtstagspaket 1</span></li>
                            <li>ein <span class="text-secondary">Kindermenü</span> bestehend aus:</li>
                                <ul>
                                    <li>4 Chicken Nuggets mit Pommes (Mayo und Ketchup) <span class="text-warning">oder</span> 1 Kinderpizza Ø18cm (Margherita, Salami oder Schinken)</li>
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
                                und nur <span class="text-warning">bis zum 14. Geburtstag</span>.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

		<h5>Sonstige Informationen</h5>
		<p>Gerne darfst Du Dir Deinen eigenen Geburtstagskuchen mitbringen.	Thermoskannen mit heißen Getränken oder Kerzen - auch auf dem Kuchen - sind leider nicht erlaubt, denn hier besteht ein erhöhtes Gefahrenpotenzial. Hier haben wir ein paar tolle Vorlagen für deine Geburtstagseinladung in unserem <a href="#">Downloadbereich</a>!</p>
		<p>Du hast noch Fragen? Telefonisch sind wir während der Öffnungszeiten für dich erreichbar.</p>
	</div>
</div>

<div class="modul" id="gotoFormular">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h3 class="p-3 px-4 m-0 bg-info bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            Buchungsformular
        </h3>
    </div>
    <div class="container-lg p-4 bg-white rounded-top">
        <div class="mb-3">
            <h5>Wann</h5>
            <div class="input-group mb-2">
                <span class="input-group-text bg-info" id="datum">Datum</span>
                <input type="text" class="form-control" placeholder="TT.MM.JJJJ" aria-describedby="datum">
            </div>
            <div class="input-group mb-2">
                <label class="input-group-text bg-info" for="ankunftszeit">Ankunftszeit</label>
                <select class="form-select" id="ankunftszeit">
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

        <div class="mb-3">
            <h5>Angaben zum Geburtstagskind</h5>
            <div class="input-group mb-2">
                <span class="input-group-text bg-primary" id="vorname">Vorname</span>
                <input type="text" class="form-control" aria-describedby="vorname">
            </div>
            <div class="input-group mb-2">
                <span class="input-group-text bg-primary" id="nachname">Nachname</span>
                <input type="text" class="form-control" aria-describedby="nachname">
            </div>
            <div class="input-group mb-2">
                <span class="input-group-text bg-primary" id="geburtstag">Geboren am</span>
                <input type="text" class="form-control" placeholder="TT.MM.JJJJ" aria-describedby="geburtstag">
            </div>
        </div>

        <div class="mb-3">
            <h5>Angaben zu der buchenden Person</h5>
            <div class="input-group mb-2">
                <span class="input-group-text bg-secondary" id="vorname">Vorname</span>
                <input type="text" class="form-control" aria-describedby="vorname">
            </div>
            <div class="input-group mb-2">
                <span class="input-group-text bg-secondary" id="nachname">Nachname</span>
                <input type="text" class="form-control" aria-describedby="nachname">
            </div>
            <div class="input-group mb-2">
                <span class="input-group-text bg-secondary" id="telefon">Telefon</span>
                <input type="text" class="form-control" aria-describedby="telefon">
            </div>
            <div class="input-group mb-2">
                <span class="input-group-text bg-secondary" id="email">@</span>
                <input type="mail" class="form-control" placeholder="E-Mail" aria-describedby="email">
            </div>
            <div class="input-group mb-2">
                <span class="input-group-text bg-secondary" id="emailbestaetigen">@</span>
                <input type="mail" class="form-control" placeholder="E-Mail bestätigen" aria-describedby="emailbestaetigen">
            </div>
        </div>

        <div class="mb-3">
            <h5>Angaben zur Feier</h5>
            <div class="input-group mb-2">
                <label class="input-group-text bg-info" for="ueber3">Kinder über 3 Jahre</label>
                <select class="form-select" id="ueber3">
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
            <div class="input-group mb-2">
                <label class="input-group-text bg-info" for="unter3">Kinder unter 3 Jahre</label>
                <select class="form-select" id="unter3">
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
            <div class="input-group mb-2">
                <label class="input-group-text bg-info" for="erwachsene">Erwachsene</label>
                <select class="form-select" id="erwachsene">
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
            <div class="input-group mb-2">
                <label class="input-group-text bg-info" for="geburtstagspaket">Geburtstagspaket</label>
                <select class="form-select" id="geburtstagspaket">
                    <option selected>Auswahl</option>
                    <option value="1">Geburtstagspaket 1</option>
                    <option value="2">Geburtstagspaket 2</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <h5>Tischauswahl</h5>
            <div class="row row-cols-1 row-cols-sm-3 row-cols-xl-5 justify-content-center">
                <div class="col card m-2 p-0 h-100 bg-primary bg-opacity-25 border-0 shadow">
                    <img src="img/tisch1.jpg" class="card-img-top">
                    <div class="p-3">
                        <input type="radio" class="btn-check" name="tische" id="tisch1" autocomplete="off">
                        <label class="btn btn-primary w-100" for="tisch1">Ponyhof</label>
                    </div>
                </div>
                <div class="col card m-2 p-0 h-100 bg-info bg-opacity-25 border-0 shadow">
                    <img src="img/tisch2.jpg" class="card-img-top">
                    <div class="p-3">
                        <input type="radio" class="btn-check" name="tische" id="tisch2" autocomplete="off">
                        <label class="btn btn-info w-100" for="tisch2">Formel 1</label>
                    </div>
                </div>
                <div class="col card m-2 p-0 h-100 bg-secondary bg-opacity-25 border-0 shadow">
                    <img src="img/tisch3.jpg" class="card-img-top">
                    <div class="p-3">
                        <input type="radio" class="btn-check" name="tische" id="tisch3" autocomplete="off">
                        <label class="btn btn-secondary w-100" for="tisch3">Schatzinsel</label>
                    </div>
                </div>
                <div class="col card m-2 p-0 h-100 bg-danger bg-opacity-25 border-0 shadow">
                    <img src="img/tisch4.jpg" class="card-img-top">
                    <div class="p-3">
                        <input type="radio" class="btn-check" name="tische" id="tisch4" autocomplete="off">
                        <label class="btn btn-danger w-100" for="tisch4">Halloween</label>
                    </div>
                </div>
                <div class="col card m-2 p-0 h-100 bg-info bg-opacity-25 border-0 shadow">
                    <img src="img/tisch5.jpg" class="card-img-top">
                    <div class="p-3">
                        <input type="radio" class="btn-check" name="tische" id="tisch5" autocomplete="off">
                        <label class="btn btn-info w-100" for="tisch5">Schloss</label>
                    </div>
                </div>
                <div class="col card m-2 p-0 h-100 bg-primary bg-opacity-25 border-0 shadow">
                    <img src="img/tisch6.jpg" class="card-img-top">
                    <div class="p-3">
                        <input type="radio" class="btn-check" name="tische" id="tisch6" autocomplete="off" disabled>
                        <label class="btn btn-primary w-100" for="tisch6">Fußball</label>
                    </div>
                </div>
                <div class="col card m-2 p-0 h-100 bg-primary bg-opacity-25 border-0 shadow">
                    <img src="img/tisch7.jpg" class="card-img-top">
                    <div class="p-3">
                        <input type="radio" class="btn-check" name="tische" id="tisch7" autocomplete="off" disabled>
                        <label class="btn btn-primary w-100" for="tisch7">Springobox</label>
                    </div>
                </div>
                <div class="col card m-2 p-0 h-100 bg-secondary bg-opacity-25 border-0 shadow">
                    <img src="img/tischStandart.jpg" class="card-img-top">
                    <div class="p-3">
                        <input type="radio" class="btn-check" name="tische" id="tischStandart" autocomplete="off" disabled>
                        <label class="btn btn-secondary w-100" for="tischStandart">Standart</label>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h5>Bedingungen</h5>
            <p>Tisch wird 1x eingedeckt. Für Kuchen: Pappteller/Becher mitbringen. Kuchen, Süsses, Obst/Gemüse mitbringen. Bitte keine Thermoskannen mit heißen Getränken, deftiges Essen oder Kerzen mit bringen. Stoppersocken nicht vergessen! Bei uns besteht aus hygienischen Gründen Sockenpflicht. Stoppersocken können bei uns auch käuflich erworben werden. Ansonsten gelten unsere <a href="agb.php">Nutzungsbedingungen</a>.</p>

            <h5>Hinweis</h5>
            <p>Nach Absenden des Formulares geht Ihnen eine Email zu mit einem Bestätigungslink zu. Bitte klicken Sie diesen an, um die Bestellung verbindlich zu bestätigen.<br>
            <span class="text-danger">Ohne anklicken des Links ist diese Bestellung nicht gültig!</span></p>
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="agb">
                <label class="form-check-label" for="agb">
                    Ich habe die <a href="agb.php">allgmeinen Geschäfts-Bedingungen (AGB)</a> gelesen und verstanden und bin damit einverstanden.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="datenschutz">
                <label class="form-check-label" for="datenschutz">
                    Ich habe die <a href="datenschutz.php">Datenschutzerklärung</a> zur Kenntnis genommen. Ich stimme zu, dass meine Angaben und Daten zur Beantwortung meiner Anfrage elektronisch erhoben und gespeichert werden. Hinweis: Sie können Ihre Einwilligung jederzeit für die Zukunft per E-Mail an <a href="mailto:fun@springolino.de">fun@springolino.de</a> wiederrufen.
                </label>
            </div>
        </div>

        <a href="#" class="btn btn-danger">Kostenpliflichtig bestellen</a>
    </div>
</div>

<?php include 'footer.php'; ?>