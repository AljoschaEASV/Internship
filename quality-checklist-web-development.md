# Qualitätscheckliste Webentwicklung

## Allgemein

- [ ] Video und Audio wird mittels HTML5 ausgegeben.
- [ ] Alle Debug-Befehle in PHP (die, echo, print_r, …) wurden gelöscht.
- [ ] Alle Debug-Befehle in JavaScript (console.log, …) wurden gelöscht.
- [ ] Der Quellcode ist verständlich und an nötigen Stellen mit erklärenden Kommentaren versehen.
- [ ] Der PHP Quellcode ist PSR-2 kompatibel.
- [ ] In PHP werden Zeichenketten mit einem Punkt getrennt. Der Punkt hat zu beiden Seiten Leerzeichen, also: »$variableOne . ' Text ' . $variableTwo«
- [ ] Methoden haben einen Kommentar, welcher beschreibt was sie machen, wenn es nicht bereits aus dem Namen hervorgeht. [Lesenswert](https://matthiasnoback.nl/2018/08/more-code-comments/)
- [ ] Wenn keine Systemschrift verwendet, werden Schriften als Webfont geladen.
- [ ] Die Webfonts funktionieren mit der offiziellen Domain.
- [ ] Die Webfonts werden korrekt eingebunden, sodass z. B. fette Schriftschnitte mittels »font-weight: bold;« geladen werden.
- [ ] Ungenutzte Dateien sind gelöscht.
- [ ] Nicht mehr benötigter auskommentierter oder ungenutzter Quellcode wurde gelöscht.
- [ ] Der VendorName in PHP Quellcode ist »VV«.
- [ ] Eine robots.txt Datei liegt bereit.
- [ ] Alle Formulare funktionieren (auch im Fehlerfall).
- [ ] Zugangsdaten zu APIs etc sind nirgendwo öffentlich hinterlegt.
- [ ] Zugänge für Personen, die nur an der Entwicklung beteiligt waren, wurden angepasst oder gelöscht.
- [ ] Die Website ist nur über HTTPS erreichbar. Dafür ist ggf. ein Let's Encrypt SSL Zertifikat bei Mittwald eingerichtet.
- [ ] PHP ist auf einem aktuellen Stand.
- [ ] Die Einbettung von Google Analytics ist auf einem aktuellen Stand.
- [ ] Ein Backup der alten Website ist bei uns oder beim Kunden vorhanden.
- [ ] Die Website wurde im Slack Channel [#visuel-feedback](https://visuellverstehen.slack.com/messages/C86RKR2MC/) vorgestellt.
- [ ] Hosting und Domainverwaltung, sowie zugehörige Kosten sind geklärt.
- [ ] Ein Zitat des Kunden für unsere Website ist angefragt oder bereits vorhanden.
- [ ] Continous Deployment über GitLab CI ist eingerichtet.
- [ ] Den Zugang zum Rootfolder per .htaccess sperren, sofern bei Mittwald gehostet wird. [Zum Wiki Eintrag](https://git.visuellverstehen.de/visuel/webentwicklung/-/wikis/DevOps/P-Nummern-Zugang-sperren)
- [ ] Die Datei `quality-checklist-development.md` wurde komplett abgehakt und aus dem Repository entfernt.
- [ ] Die Datei `quality-checklist-editing.md` wurde komplett abgehakt und aus dem Repository entfernt.

### Performance

- [ ] Es wird ggf. ein schneller Zwischenspeicher auf dem Server genutzt (z. B. APCu über Mittwald Performance Plus).
- [ ] Die im Layout verwendeten Bilder sind komprimiert.
- [ ] Bilder sind mit der Technik »Responsive Images« eingebaut.
- [ ] JavaScript-Dateien sind minifiziert und zu einer Datei kombiniert.
- [ ] JavaScript-Dateien sind kurz vor dem schließenden Body-Tag eingebaut.
- [ ] JavaScript-Dateien werden asynchron nachgeladen.
- [ ] CSS-Dateien sind minifiziert und zu einer Datei kombiniert.
- [ ] SVG-Dateien sind minifiziert.
- [ ] Dateien werden per GZIP ausgeliefert.
- [ ] Wenn Icons mittels Webfont gebaut wurden, beinhaltet dieser nur die nötigsten Icons. Generell wollen wir SVG Icons verwenden.
- [ ] Alle Schriftschnitte der eingesetzten Webfonts werden wirklich benötigt.

### Accessibility

- [ ] Das HTML ist valide.
- [ ] Das HTML ist semantisch korrekt gewählt. Es gibt keine überflüssen HTML Elemente.
- [ ] Die verwendeten Farben haben einen guten Kontrast.
- [ ] Die Website ist mit Tastatur bedienbar.

### Multi-Device und -Browser

- [ ] Die Website ist mittels Responsive Webdesign Techniken umgesetzt.
- [ ] Das Layout ist mit prozentualen Breiten- und Höhenangaben definiert, nicht mit fixen Pixelwerten.
- [ ] Neue CSS Funktionen sind, im Sinne von Progressive Enhancement, nicht essentiell.
- [ ] Neue CSS Funktionen sind mit entsprechenden Prefixen (-webkit, -ms, …) ausgestattet.
- [ ] Die Website funktioniert in Smartphones.
- [ ] Die Website funktioniert im Hoch- und Querformat.
- [ ] Die Website funktioniert in Tablets.
- [ ] Die Website funktioniert mit großen Bildschirmen.
- [ ] Die Website funktioniert mit verschiedenen Bildschirmauflösungen.
- [ ] Die Website funktioniert mit allen, in der Nutzergruppe verbreiteten, Betriebssystemen.
- [ ] Die Website funktioniert mit allen, in der Nutzergruppe verbreiteten, Browsern.
- [ ] Die Website funktioniert bei schlechter Internetverbindung.
- [ ] Die Website funktioniert ohne JavaScript.
- [ ] Website-Benutzer mit alten Geräten werden darauf hingewiesen, sich einen neuen Webbrowser herunterzuladen.
- [ ] Die Farbe des `<meta name="theme-color" content="#fffff">` wurde auf die Primärfarbe gesetzt.

### Usability

- [ ] Im HTML-Kopf ist die richtige Sprache `(z.B. <html lang="de"> oder <html lang="en">)` hinterlegt.
- [ ] Immer und überall wird die Kodierung UTF-8 benutzt.
- [ ] Alle Links sind als Links erkennbar.
- [ ] Externe Links öffnen sich in neuen Fenstern.
- [ ] Fehlerseiten mit den Statuscodes 404 und 500 sind für das Projekt angepasst.
- [ ] Die Buttons auf der Website sind groß genug, auch für das Bedienen mit dem Finger.
- [ ] Die Website funktioniert auch mit Geräten, die keine »Hover«-Funktion besitzen.
- [ ] Formular-Elemente haben stets ein beschreibendes Label.
- [ ] Mit einem Klick auf das Logo kommt der Website-Benutzer zurück zur Startseite.
- [ ] Favicons und og:image erstellt und eingebunden laut: [Favicons vv docu](https://git.visuellverstehen.de/visuel/webentwicklung/-/wikis/Frontend/HTML/Snippets/Favicons)

### SMM (Social Media Marketing)

- [ ] Es gibt Open-Graph-Image-Tags, passend zum Inhalt der Unterseiten.
- [ ] Es gibt Twitter-Cards, passend zum Inhalt der Unterseiten.

### SEO (Search Engine Optimization)

- [ ] Jede Unterseite hat genau eine H1.
- [ ] Die eingesetzten Überschriften erscheinen in der korrekten Reihenfolge.
- [ ] Die Website hat Canonical Links.
- [ ] Es gibt einen Meta-Autor, das Unternehmen hinter der Website.
- [ ] Wenn passend, wurden Rich Snippets verwendet, um die Suchmaschinenergebnisse mit Informationen anzureichern.
- [ ] Die Website nutzt sprechende URLs.
- [ ] Die URLs enden nicht auf ».html«.
- [ ] Die Website leitet auf eine definitive Domain weiter. (z.B. example.com -> www.example.com)
- [ ] Alte Unterseiten leiten auf entsprechende URLs der neuen Seite weiter.
- [ ] Meta-Robots stehen auf »index, follow«.
- [ ] Es gibt eine XML-Sitemap.
- [ ] Die XML-Sitemap wurde bei Google eingereicht.
- [ ] Die XML-Sitemap wurde in der robots.txt verlinkt.
- [ ] Die Website ist in Google Search Console eingetragen.
- [ ] Die Website nutzt Google Analytics.
- [ ] Google Analytics ist mit Google Search Console verknüpft.

### Testing Tools

- [ ] Die Website wurde mit folgendem Tool getestet und ggf. angepasst: [https://gtmetrix.com](https://gtmetrix.com)
- [ ] Die Website wurde mit folgendem Tool getestet und ggf. angepasst: [http://seorch.de/](http://seorch.de/)
- [ ] Die Website wurde mit folgendem Tool getestet und ggf. angepasst: [http://www.checkmycolours.com](http://www.checkmycolours.com)
- [ ] Die Website wurde mit folgendem Tool getestet und ggf. angepasst: [http://www.whatsmyip.org/http-compression-test/](http://www.whatsmyip.org/http-compression-test/)
- [ ] Die Website wurde mit folgendem Tool getestet und ggf. angepasst: [http://bradfrost.com/demo/ish/](http://bradfrost.com/demo/ish/)
- [ ] Die Website wurde mit folgendem Tool getestet und ggf. angepasst: [https://developers.google.com/speed/pagespeed/insights/](https://developers.google.com/speed/pagespeed/insights/)
- [ ] Die Website wurde mit folgendem Tool getestet und ggf. angepasst: [https://search.google.com/test/mobile-friendly](https://search.google.com/test/mobile-friendly)
- [ ] Die Website wurde mit folgendem Tool getestet und ggf. angepasst: [https://testmysite.thinkwithgoogle.com/](https://testmysite.thinkwithgoogle.com/)
- [ ] Die Website wurde mit folgendem Tool getestet und ggf. angepasst: [https://www.sistrix.de/serp-snippet-generator/](https://www.sistrix.de/serp-snippet-generator/)
- [ ] Die Website wurde mit folgendem Tool getestet und ggf. angepasst: [https://cards-dev.twitter.com/validator](https://cards-dev.twitter.com/validator)
- [ ] Die Website wurde mit folgendem Tool getestet und ggf. angepasst: [https://developers.facebook.com/tools/debug/](https://developers.facebook.com/tools/debug/)
- [ ] Die Website wurde mit folgendem Tool getestet und ggf. angepasst: [https://search.google.com/test/rich-results](https://search.google.com/test/rich-results)
- [ ] Die Website wurde mit folgendem Tool getestet und ggf. angepasst: [https://developers.google.com/web/tools/lighthouse/](https://developers.google.com/web/tools/lighthouse/)

## Software-spezifisch

### TYPO3

- [ ] Bei allen erstellten Erweiterungen wurde der Status auf »stable« gestellt.
- [ ] Die caching-, log-Tabellen sind geleert.
- [ ] Der Ordner »typo3temp« wurde komplett geleert.
- [ ] In der »ext_localconf.php« befinden sich keine »use« statements.
- [ ] TYPO3 CMS ist auf einem aktuellen Stand.
- [ ] TYPO3 Erweiterungen sind auf einem aktuellen Stand.
- [ ] Beim Bearbeiten von dynamischen Inhalten sind die Attribute dem Frontend entsprechend in Tabs und Paletten strukturiert.
- [ ] Die dynamischen Inhalte sind für die Vorschaufunktion konfiguriert.
- [ ] Für jeden dynamischen Inhalt gibt es einen passend benannten Ordner.
- [ ] Alle dynamischen Inhalte sind korrekt und nachvollziehbar benannt.
- [ ] Alle dynamischen Inhalte werden in der Liste sinnvoll sortiert (default_sortby).
- [ ] Alle Attribute der dynamischen Inhalte sind korrekt und nachvollziehbar benannt.
- [ ] Neue statische und dynamische Inhalte sind automatisch deaktiviert.
- [ ] Der TYPO3-Login wurde für den Kunden angepasst (Hintergrundbild, Farben, Logo, …).
- [ ] Es sind ggf. eigene Seitenverhältnisse für den Bildeditor angelegt.
- [ ] Das Feld »Datei auswählen & hochladen« ist für alle sys_file_references deaktiviert (PageTSConfig).
- [ ] Die Qualität der generierten Bilder in TYPO3 steht auf maximal 75%.
- [ ] Die TYPO3 Erweiterung sourceopt ist installiert, um das gerenderte HTML zu minifizieren. Es ist darauf zu achten, dass Conditional Comments und das TYPO3 Kommentar drin bleibt.
- [ ] Im Install-Tool steht [FE][versionNumberInFilename] auf »embed«
- [ ] Der Wert von »config.no_cache« steht auf 0.
- [ ] Die TYPO3 Kontext Variable wird mittels .htaccess auf »Production« gestellt.
- [ ] Der Redakteur kann Bilder-Alt-Attribute im Backend pflegen.
- [ ] Der Redakteur kann Meta-Beschreibungen im Backend pflegen.
- [ ] Der Redakteur kann Title-Tags im Backend pflegen.
- [ ] Backend- / Admin-Benutzer wurden überprüft und ggf. angepasst oder gelöscht.

### Laravel

- [ ] Überflüssige Kommentare, die gegebenenfalls von Laravel kommen, wurden einschließlich der Lizenz-Kommentare entfernt.
- [ ] In `config/app.php` wurden passende Default-Werte eingetragen.
- [ ] `APP_DEBUG` wurde deaktiviert
- [ ] `APP_ENV` steht auf production oder live
- [ ] Es wird ggf. ein schneller Zwischenspeicher auf dem Server genutzt (z. B. APCu über Mittwald Performance Plus). Dieser muss manuell als `CACHE_DRIVER` aktiviert werden.

### Statamic

- [ ] Bilder werden durch glide minimiert und standardmäßig als webP Format ausgegeben. (https://git.visuellverstehen.de/visuel/webentwicklung/-/wikis/Backend/Statamic/Bilder-im-webP-Format-ausgeben)
- [ ] Redis queues sind eingerichtet (https://git.visuellverstehen.de/visuel/webentwicklung/-/wikis/Backend/Statamic/Redis-driver)
- [ ] GIT Integration korrekt eingerichtet (https://git.visuellverstehen.de/visuel/webentwicklung/-/wikis/Backend/Statamic/Git-Integration-einrichten)
- [ ] Der Lizenzschlüssel wurde auf statamic.com mit der Seite verknüpft
- [ ] OPCache ist eingerichtet
- [ ] Browser Cache-Control korrekt eingerichtet (https://git.visuellverstehen.de/visuel/webentwicklung/-/wikis/Backend/Statamic/Cache-Control-mit-nginx)
- [ ] Config, Views etc. wurden optimiert durch `php artisan optimize`
- [ ] Aktiviere static caching (in der .env datei)
- [ ] Erstelle den nginx Eintrag zur Weiterleitung zum static caching (https://statamic.dev/static-caching#nginx)
- [ ] Vor Kundenübergabe bitte prüfen, dass die aktuelleste Statamic Version eingespielt wurde.
- [ ] Eine `custom_logo_url` wurde in `config/statamic/cp.php` hinterlegt.
- [ ] Das Projekte für spätere Updates in unsere Übersichtsseite eintragen: (https://docs.google.com/spreadsheets/d/1DjS_2G9PvY8oE0U24avyuQ0aQiN1s2LSTKCVKF4X5lo/edit?usp=sharing)

### Shopware

- [ ] Shopware befindet sich auf der aktuellsten Version.
- [ ] Die Kompilierung aller Themes funktionert fehlerfrei.
- [ ] Alle Plugins sind kompatibel mit der genutzten Shopware Version.
- [ ] Testartikel und Inhalte wurden entfernt oder entsprechend angepasst.
- [ ] Alle Plugins entsprechen den [Quality Guidelines](https://docs.shopware.com/en/plugin-standard-for-community-store) von Shopware.
- [ ] Debug-Messages und Exceptions wurden in `config.php` so eingestellt, dass sie von Shopware abgefangen werden.
- [ ] In der `.htaccess` wird die `SHOPWARE_ENV` auf `prod`  gestellt.
- [ ] Freitextfelder in der Administration haben einen erklärenden Hilfe-Text, wenn nötig (Shopware 5).
- [ ] Der Shop weist in allen gewünschten Sprachen die selbe Funktionalität vor.
- [ ] Ein [Media-Optimizer](https://developers.shopware.com/developers-guide/media-optimizer/) ist installiert (Shopware 5)
- [ ] Alle Plugins sind für den Live-Betrieb vorbereitet (Sandbox-Modus ausschalten, Entwickler-Credentials entfernt, Kundendaten eingetragen)
