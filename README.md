Projekt skautské časopisy online
================================
Kontakt na autora: pif@skaut.cz

Toto je zdrojový kód celé aplikace, samotné časopisy naleznete zde: http://casopisy.skaut.cz 


Instalace
---------
1. Zkopírujte si /app/config-server.neon.sample a kopii přejmenujte na config-server.neon
2. Editujte /app/config-server.neon a vyplňte správné údaje
3. Importovat databázi z /data/data.sql
4. Přihlásit se přes /login/ či /skautis/token.php?token=...  ([dokumentace](http://is.skaut.cz/napoveda/programatori.MainPage.ashx))
5. Nahrát číslo časopisu, pokud nefunguje automatická konverze pomocí příkazu convert, možno nahrát příslušné soubory /data/img/id-strana.png, náhledy se vytvoří samy.
6. Napsat mi maila, abych měl radost :-)


## O projektu

Tento projekt má počátky asi na [Elixíru 2012](http://elixir.skauting.cz), když jsem na přednášce s [Vokinem](http://vls.skauting.cz/?page_id=317) o výchovných nástrojích pro vlčata a světlušky přišel s dotazem, jestli by se dal časopisy Světýlko stáhnout někde online. V té době se mi totiž nepovedlo na křižovatce časopisy najít vůbec. Aspoň nám tazatelům bylo příslíbeno, že se to pošle výše. O několik měsíců později jsem se na [Vlčácké lesní škole](http://vls.skauting.cz "VLŠ") potkal opět s Vokinem. Součástí lesní školy je i absolvenční projekt a jedna z možností byla právě práce pro [Odbor Vlčat a Světlušek](http://skaut.cz/ovas "OVAS"), která nesla název Zpřístupnění časopisu Světýlko.

A tak jsme se pustili do odvážného [projektu](http://goo.gl/dngzj), Vokin sehnal archivní čísla světýlek v PDF. Bohužel ročníky 10 a 11 se ztratily, ty bylo nutno půjčit a oskenovat. Na mně potom bylo udělat aplikaci, která pomůže s kategorizováním obsahu. Vydatnou pomoc při kategorizování Světýlek, testování a nápady poskytla Tété - další z instruktorů VLŠ.

Technické detaily: aplikace běží na Nette Frameworku 2.0.6 (2012-10-01), mnoho detailů dědí z mého druhého projektu [nPress CMS](http://npress.info). Grafiku celého webu obstarává [Bootstrap CSS framework](http://twitter.github.com/bootstrap/) a to hlavní PDFka - zpracovávají linuxí programy pdf-info a convert.

Všechny připomínky uvítám na mailu: [pif@skaut.cz](mailto:pif@skaut.cz)  

### Projektové cíle 2013

*   zpřístupnit časopis Světýlko
*   přehledně zobrazit pracovní listy v kategoriích
*   propagace

Plány do budoucna

*   doplnit chybějící čísla a ročníky (od 6\. výše)
*   kategorizovat nespolkový časopis (ročník 11 a níže)
*   zobrazení příloh k časopisům
*   přepracovat štítky, aby každý mohl nést ještě obrázek a metodickou informaci
*   nabídnout možnost stáhnutí pouze vybrané části PDF

Hodně do budoucna...

*   přidat do systému i další časopisy - především Skauting a Skaut-Junák, kde je velký potenciál
*   připojení skautských a vlčáckých stezek tak, že konkrétní body rovnou budou nabízet relevantní obsah z časopisů
*   po konzultaci s Pejťou na VLŠ též konkrétní stránky pro vlčky/světýlka prolinkovat na podmíny splnění
