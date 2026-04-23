# Übung Tag 2 – PHP Basics (GET / POST)

## Ziel

Verstehen, wie Formulardaten in PHP ankommen und verarbeitet werden.

---

## Hauptaufgabe

Nutze dein bestehendes Formular aus `form.html`.

Erstelle bzw. erweitere:

- `save.php`

Ziel:

- Lese die Formulardaten aus (`$_POST`)
- Gib die Daten sichtbar auf der Seite aus
- Zeige zusätzlich die Daten mit `var_dump($_POST)`

---

## Mini-Aufgabe 1

Teste GET:

- Ändere im Formular:
  method="GET"
- Leite auf `get.php` weiter

Beobachte:

- Die Daten erscheinen in der URL

---

## Mini-Aufgabe 2

Ergänze im Formular ein neues Feld:

- Hobby

Und:

- Lies es in `save.php` aus
- Gib es aus

---

## Schlussaufgabe / Hausaufgabe

Baue eine saubere Ausgabe-Seite:

- Zeige alle Werte strukturiert an (Name, E-Mail, Telefon, Nachricht, Hobby)
- Nutze `<p>` oder eine einfache Struktur
- Vermeide `var_dump()` in der finalen Ausgabe
- Nutze `htmlspecialchars()` bei der Ausgabe

---

## Hinweis

- Ohne `name`-Attribut kommen keine Daten an
- GET zeigt Daten in der URL
- POST ist Standard für Formulare