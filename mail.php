<?php
$empfaenger = "xxldario@live.de";
$betreff = "Die Mail-Funktion";
$from = "From: Vorname Nachname <absender@domain.de>";
$text = "Hier lernt Ihr, wie man mit PHP Mails verschickt";

mail($empfaenger, $betreff, $text, $from);
echo $empfaenger, $betreff, $text, $from;


?>