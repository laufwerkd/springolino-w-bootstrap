<?php
// Gibt Name + (falls ausgefüllt) Anschrift und E-Mail des Betreibers aus.
$lines = array_filter([OPERATOR_NAME, OPERATOR_STREET, OPERATOR_CITY]);
echo '<p>' . implode("<br>\n        ", array_map('htmlspecialchars', $lines));
if (OPERATOR_EMAIL) echo '<br>E-Mail: ' . htmlspecialchars(OPERATOR_EMAIL);
if (LEGAL_URL) echo '<br>Vollständige Angaben: <a href="' . htmlspecialchars(LEGAL_URL) . '" class="text-secondary">' . htmlspecialchars(LEGAL_URL) . '</a>';
echo "</p>\n";
