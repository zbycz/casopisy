<?php

/**
 * Konfiguracni script. Zde je mozne nadefinovat jednotlive parametry.
 *
 */

/**
 * Adresa na niz bezi skautis (adresa testovaciho nebo produkcniho skautisu)
 * + id aplikace, ktere vam vytvori administratori skauisu
 */
define("applicationAdress", "https://is.skaut.cz/");

define("appId", "aaf9d387-1b92-41df-8baf-bc3267426c47");



/**
 * do techto promennych nesahejte, pouze pokud se nezmeni nastaveni serveru
 */
define("skautisPath", applicationAdress."Junak/");
define("wsdlAdress", applicationAdress."JunakWebservice/");
define("loginFormAddres", applicationAdress."Login/?appid=".appId);
//http://test-is.skaut.cz/Login/?appid=f69e9a7e-4ac5-4942-8672-39085c9ca99b


