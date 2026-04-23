# Übung Tag 4 – CRUD abschließen

## Ziel

Die Webanwendung so erweitern, dass Datensätze nicht nur gespeichert und angezeigt, sondern auch bearbeitet und gelöscht werden können.

---

## Hauptaufgabe

Erweitere `list.php` so, dass zu jedem Datensatz Aktionen angezeigt werden:

- Bearbeiten
- Löschen

Nutze dafür:

- `edit.php`
- `update.php`
- `delete.php`

---

## Mini-Aufgabe 1

Baue `edit.php` so, dass ein Datensatz über die `id` geladen und in einem Formular angezeigt wird.

Das Formular soll:

- Name
- E-Mail
- Telefon
- Nachricht

mit den vorhandenen Werten anzeigen.

---

## Mini-Aufgabe 2

Baue `update.php` so, dass geänderte Daten gespeichert werden.

Achte darauf:

- die `id` mitzusenden
- `prepare()` und `execute()` zu nutzen
- `filter_input()` für die Eingaben zu verwenden

---

## Schlussaufgabe / Hausaufgabe

Baue `delete.php` und teste den kompletten CRUD-Workflow:

1. neuen Datensatz anlegen
2. Datensatz in `list.php` sehen
3. Datensatz bearbeiten
4. Datensatz löschen

Zusatz:

- Zeige nach dem Löschen eine Bestätigung an
- Gib nach dem Bearbeiten eine Erfolgsmeldung aus

---

## Hinweis

- `list.php` = Read
- `edit.php` + `update.php` = Update
- `delete.php` = Delete

Damit ist der CRUD-Kreis vollständig.