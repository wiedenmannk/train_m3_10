# Übung Tag 3 – Datenbank & PDO

## Ziel

Verstehen, wie Daten aus einem Formular in einer Datenbank gespeichert werden.

---

## Hauptaufgabe

Erstelle in phpMyAdmin eine neue Datenbank:

m3_10

Führe die SQL-Datei `sql.sql` aus, um die Tabelle `kontakte` anzulegen.

Danach:

- Nutze `db.php`, um eine Verbindung zur Datenbank herzustellen
- Erweitere `save.php` (in 03-db-pdo), sodass die Daten gespeichert werden

---

## Mini-Aufgabe 1

Ergänze ein neues Feld:

- firma

Und passe an:

- Formular (`form.html`)
- SQL (Tabelle erweitern)
- `save.php` (INSERT erweitern)

---

## Mini-Aufgabe 2

Zeige nach dem Speichern eine einfache Bestätigung an:

- „Datensatz gespeichert“

Optional:

- Zeige den Namen des gespeicherten Kontakts an

---

## Schlussaufgabe / Hausaufgabe

Baue eine Seite `list.php`, die alle gespeicherten Datensätze anzeigt:

- Verwende eine HTML-Tabelle
- Zeige mindestens:
  - Name
  - E-Mail
- Nutze `foreach` zur Ausgabe
- Nutze `htmlspecialchars()` für sichere Ausgabe

---

## Hinweis

- PDO verbindet PHP mit der Datenbank
- `prepare()` schützt vor SQL-Injection
- `execute()` führt das Statement aus