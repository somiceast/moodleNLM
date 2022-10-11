<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package local_o365
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Integrace Microsoft Office 365';
$string['acp_title'] = 'Ovládací panel správy Office 365';
$string['acp_healthcheck'] = 'Kontrola stavu';
$string['acp_parentsite_name'] = 'Moodle';
$string['acp_parentsite_desc'] = 'Web pro sdílená data kurzu Moodle.';
$string['calendar_user'] = 'Osobní kalendář (uživatele)';
$string['calendar_site'] = 'Kalendář pro celý web';
$string['erroracpauthoidcnotconfig'] = 'Nejprve prosím nastavte přihlašovací údaje aplikace v auth_oidc.';
$string['erroracplocalo365notconfig'] = 'Nejprve nakonfigurujte local_o365.';
$string['erroracpnosptoken'] = 'Nebyl k dispozici token SharePoint a nebylo možné žádný získat.';
$string['errorhttpclientbadtempfileloc'] = 'Nelze otevřít dočasné umístění pro uložení souboru.';
$string['errorhttpclientnofileinput'] = 'Žádný parametr souboru v httpclient::put';
$string['errorcouldnotrefreshtoken'] = 'Nelze aktualizovat token.';
$string['errorcreatingsharepointclient'] = 'Nelze získat klienta rozhraní API pro SharePoint.';
$string['errorchecksystemapiuser'] = 'Nelze získat token uživatele systémového rozhraní API. Spusťte kontrolu stavu a ověřte, zda běží proces cron v Moodlu. V případě potřeby obnovte uživatele systémového rozhraní API.';
$string['erroro365apibadcall'] = 'Chyba při volání API.';
$string['erroro365apibadcall_message'] = 'Chyba při volání API: {$a}';
$string['erroro365apibadpermission'] = 'Oprávnění nebylo nalezena.';
$string['erroro365apicouldnotcreatesite'] = 'Problém při vytváření webu.';
$string['erroro365apicoursenotfound'] = 'Kurz nebyl nalezen.';
$string['erroro365apiinvalidtoken'] = 'Token je neplatný, nebo jeho platnost vypršela.';
$string['erroro365apiinvalidmethod'] = 'Předáno neplatné httpmethod do apicall ';
$string['erroro365apinoparentinfo'] = 'Nelze najít informace o nadřazené složce.';
$string['erroro365apinotimplemented'] = 'Toto by mělo být přepsáno.';
$string['erroro365apinotoken'] = 'Nebyl k dispozici token pro zadaný zdroj a uživatele a nebylo možné žádný získat. Nevypršela platnost aktualizovaného tokenu uživatele?';
$string['erroro365apisiteexistsnolocal'] = 'Web již existuje, ale nelze najít místní záznam.';
$string['errorcouldnotcreatespgroup'] = 'Danou skupinu SharePoint nelze vytvořit.';
$string['eventapifail'] = 'Selhání API';
$string['eventcalendarsubscribed'] = 'Uživatel se přihlásil k odběru kalendáře';
$string['eventcalendarunsubscribed'] = 'Uživatel zrušil odběr kalendáře';
$string['healthcheck_fixlink'] = 'Klikněte sem a opravte to.';
$string['healthcheck_systemapiuser_title'] = 'Uživatel systémového rozhraní API';
$string['healthcheck_systemtoken_result_notoken'] = 'Moodle nemá token, aby mohl komunikovat s Office 365 jako uživatel systémového rozhraní API. Tento problém lze obvykle vyřešit resetováním uživatele systémového rozhraní API.';
$string['healthcheck_systemtoken_result_noclientcreds'] = 'V pluginu OpenID Connect nejsou žádné přihlašovací údaje aplikace. Bez těchto přihlašovacích údajů nemůže Moodle provádět žádnou komunikaci s Office 365. Kliknutím sem přejděte na stránku nastavení a zadejte své přihlašovací údaje.';
$string['healthcheck_systemtoken_result_badtoken'] = 'Nastal problém při komunikaci s Office 365 jako uživatel systémového rozhraní API. Tento problém lze obvykle vyřešit resetováním uživatele systémového rozhraní API.';
$string['healthcheck_systemtoken_result_passed'] = 'Moodle může komunikovat s Office 365 jako uživatel systémového rozhraní API.';
$string['settings_aadsync'] = 'Synchronizovat uživatele s Azure AD';
$string['settings_aadsync_details'] = 'Když je toto nastavení povoleno, uživatelé Moodle a Azure AD jsou synchronizovány podle možností výše.<br /><br /><b>Poznámka: </b>Úloha synchronizace běží v procesu cron v Moodlu a synchronizuje vždy 1000 uživatelů současně. Ve výchozím nastavení se spouští jednou denně v 01:00 časového pásma vašeho serveru. Chcete-li synchronizovat větší množství uživatelů rychleji, můžete zvýšit frekvenci spouštění úlohy <b>Synchronizovat uživatele s Azure AD</b> pomocí <a href="{$a}">stránky správy naplánovaných úloh.</a><br /><br />Podrobnější pokyny naleznete v <a href="https://docs.moodle.org/30/en/Office365#User_sync">dokumentaci k synchronizaci uživatelů</a><br /><br />';
$string['settings_aadsync_create'] = 'Vytvořit účty v Moodlu pro uživatele v Azure AD';
$string['settings_aadsync_delete'] = 'Odstranit dříve synchronizované účty v Moodlu, když jsou odstraněny z Azure AD';
$string['settings_aadsync_match'] = 'Spárovat už existující uživatele Moodlu s účty se stejnými názvy v Azure AD<br /><small>Proces se podívá na uživatelské jméno v  Office 365 a uživatelské jméno v Moodlu a pokusí se najít odpovídající (shodující se) jména. Při posuzování shody se nerozlišují malá a velká písmena a ignoruje se nájemce Office 365. Například BoB.SmiTh v Moodlu by bylo vyhodnoceno jako shodující se s bob.smith@example.onmicrosoft.com. Spárováním uživatelů dojde k propojení jejich účtů Moodle a Office a budou moci používat všechny funkce integrace Office 365/Moodle. Metoda ověření uživatele se nezmění, pokud není povoleno následující nastavení. </small>';
$string['settings_aadsync_matchswitchauth'] = 'Přepnout spárované uživatele na ověřování Office 365 (OpenID Connect)<br /><small>Tato možnost požaduje, aby bylo povoleno nastavení spárování výše. Když je uživatel spárován, povolením tohoto nastavení dojde k přepnutí jeho metody ověření na OpenID Connect. Bude se pak přihlašovat do Moodlu se svými přihlašovacími údaji pro Office 365. <b>Poznámka:</b> Pokud chcete použít toto nastavení, zajistěte, aby byl povolen plugin pro ověřování OpenID Connect.</small>';
$string['settings_aadtenant'] = 'Nájemce Azure AD';
$string['settings_aadtenant_details'] = 'Slouží k identifikaci vaší organizace v Azure AD. Příklad: „contoso.onmicrosoft.com“';
$string['settings_azuresetup'] = 'Nastavení Azure';
$string['settings_azuresetup_details'] = 'Tento nástroj kontroluje v Azure, zda je vše nastaveno správně. Může také opravit některé běžné chyby.';
$string['settings_azuresetup_update'] = 'Aktualizovat';
$string['settings_azuresetup_checking'] = 'Kontrola...';
$string['settings_azuresetup_missingperms'] = 'Chybějící oprávnění:';
$string['settings_azuresetup_permscorrect'] = 'Oprávnění jsou správná.';
$string['settings_azuresetup_errorcheck'] = 'Při pokusu o kontrolu nastavení Azure došlo k chybě.';
$string['settings_azuresetup_unifiedheader'] = 'Sjednocené rozhraní API';
$string['settings_azuresetup_unifieddesc'] = 'Sjednocené rozhraní API nahrazuje dosavadní rozhraní API, která byla specifická pro aplikace. Pokud je k dispozici, měli byste ho do své aplikace v Azure přidat, aby byla připravená na budoucnost. Sjednocené rozhraní API v budoucnu nahradí starší rozhraní API.';
$string['settings_azuresetup_unifiederror'] = 'Při kontrole podpory sjednoceného rozhraní API došlo k chybě.';
$string['settings_azuresetup_unifiedactive'] = 'Sjednocené rozhraní API je aktivní.';
$string['settings_azuresetup_unifiedmissing'] = 'Sjednocené rozhraní API nebylo v této aplikaci nalezeno.';
$string['settings_azuresetup_legacyheader'] = 'Office 365 API';
$string['settings_azuresetup_legacydesc'] = 'Rozhraní Office 365 API se skládá z rozhraní API specifických pro aplikace.';
$string['settings_azuresetup_legacyerror'] = 'Při kontrole nastavení rozhraní Office 365 API došlo k chybě.';
$string['settings_creategroups'] = 'Vytvořit skupiny uživatelů';
$string['settings_creategroups_details'] = 'Pokud je toto nastavení povoleno, vytvoří a bude udržovat v Office 365 skupinu učitele a studentů pro každý kurz na webu. Při každém spuštění procesu cron dojde k vytvoření potřebných skupin (a přidání všech aktuálních členů). Následně probíhá údržba členství ve skupině podle toho, jak se uživatelé registrují nebo ruší registraci v kurzech v Moodlu.<br /><b>Poznámka: </b>Tato funkce vyžaduje, aby do aplikace přidané v Azure bylo přidáno sjednocené rozhraní API Office 365. <a href="https://docs.moodle.org/30/en/Office365#User_groups">Pokyny a dokumentace k nastavení.</a>';
$string['settings_o365china'] = 'Office 365 pro Čínu';
$string['settings_o365china_details'] = 'Toto políčko zaškrtněte, pokud používáte Office 365 pro Čínu.';
$string['settings_debugmode'] = 'Zaznamenávat zprávy ladění';
$string['settings_debugmode_details'] = 'Pokud je toto nastavení povoleno, do protokolu Moodlu jsou zaznamenávány informace, které vám mohou pomoci identifikovat problémy.';
$string['settings_detectoidc'] = 'Přihlašovací údaje aplikace';
$string['settings_detectoidc_details'] = 'Moodle potřebuje ke komunikace s Office 365 přihlašovací údaje, aby sám sebe identifikoval. Ty se nastavují v pluginu pro ověření OpenID Connect.';
$string['settings_detectoidc_credsvalid'] = 'Přihlašovací údaje byly nastaveny.';
$string['settings_detectoidc_credsvalid_link'] = 'Změnit';
$string['settings_detectoidc_credsinvalid'] = 'Přihlašovací údaje nebyly nastaveny nebo jsou neúplné.';
$string['settings_detectoidc_credsinvalid_link'] = 'Nastavit přihlašovací údaje';
$string['settings_detectperms'] = 'Oprávnění aplikace';
$string['settings_detectperms_details'] = 'Pro aplikaci v Azure AD musí být nastavena správná oprávnění, jinak nemůže používat funkce pluginu.';
$string['settings_detectperms_nocreds'] = 'Nejprve je nutné nastavit přihlašovací údaje aplikace. Viz nastavení výše.';
$string['settings_detectperms_missing'] = 'Chybí:';
$string['settings_detectperms_errorfix'] = 'Při pokusu opravit oprávnění došlo k chybě. Nastavte je ručně v Azure.';
$string['settings_detectperms_fixperms'] = 'Opravit oprávnění';
$string['settings_detectperms_fixprereq'] = 'Chcete-li tento problém opravit automaticky, váš uživatel systémového rozhraní API musí být administrátor a v Azure musí pro aplikaci Windows Azure Active Directory být povoleno oprávnění „Přístup k adresáři vaší organizace“.';
$string['settings_detectperms_nounified'] = 'Sjednocené rozhraní API není k dispozici. Některé nové funkce nemusí fungovat.';
$string['settings_detectperms_unifiednomissing'] = 'Všechna sjednocená oprávnění jsou k dispozici.';
$string['settings_detectperms_update'] = 'Aktualizovat';
$string['settings_detectperms_valid'] = 'Oprávnění byla nastavena.';
$string['settings_detectperms_invalid'] = 'Zkontrolovat oprávnění v Azure AD';
$string['settings_enableunifiedapi'] = 'Povolit sjednocené rozhraní API';
$string['settings_enableunifiedapi_details'] = 'Sjednocené rozhraní API je ukázkové rozhraní API, které poskytuje některé nové funkce, například níže uvedené nastavení Vytvořit skupiny uživatelů. V budoucnu nahradí rozhraní Office API, která jsou specifická po aplikace, zatím jde ale stále o zkušební ukázku a může docházet k jeho změnám, což může mít dopad na některé funkce (budou fungovat jinak nebo úplně přestanou fungovat). Pokud ho chcete vyzkoušet, povolte toto nastavení a klikněte na Uložit změny. V Azure přidejte do své aplikace Unified API (Sjednocené rozhraní API) a potom se vraťte sem a spusťte níže nástroj Nastavení Azure.';
$string['settings_header_setup'] = 'Nastavení';
$string['settings_header_options'] = 'Možnosti';
$string['settings_healthcheck'] = 'Kontrola stavu';
$string['settings_healthcheck_details'] = 'Pokud něco nefunguje správně, kontrola stavu může obvykle identifikovat problém a navrhnout řešení.';
$string['settings_healthcheck_linktext'] = 'Provést kontrolu stavu';
$string['settings_odburl'] = 'URL OneDrive pro firmy';
$string['settings_odburl_details'] = 'Adresa URL používaná pro přístup k OneDrive pro firmy. Tu lze obvykle určit podle vašeho nájemce Azure AD. Pokud například váš nájemce Azure AD je „contoso.onmicrosoft.com“, tato adresa URL s největší pravděpodobností bude „contoso-my.sharepoint.com“. Zadejte pouze název domény bez http:// nebo https://';
$string['settings_serviceresourceabstract_valid'] = '{$a} je použitelné.';
$string['settings_serviceresourceabstract_invalid'] = 'Tato hodnota vypadá, že je použitelná.';
$string['settings_serviceresourceabstract_nocreds'] = 'Nejprve nastavte přihlašovací údaje aplikace.';
$string['settings_serviceresourceabstract_empty'] = 'Zadejte hodnotu nebo klikněte na Detekovat, abychom zkusili detekovat správnou hodnotu.';
$string['settings_sharepointlink'] = 'Odkaz na SharePoint';
$string['settings_sharepointlink_error'] = 'Nastal problém při nastavování SharePointu. <br /><br /><ul><li>Pokud máte povoleno protokolování po ladění (nastavení Zaznamenávat zprávy ladění), můžete najít podrobnější informace v sestavě protokolu Moodlu. (Správa webu > Sestavy > Protokoly).</li><li>Chcete-li ho zkusit nastavit znovu, klikněte na „Změnit web“, vyberte nový web SharePoint, klikněte na tlačítko Uložit změny (dole na této stránce) a spusťte proces cron Moodlu.</ul>';
$string['settings_sharepointlink_connected'] = 'Moodle je připojen k tomuto webu SharePoint.';
$string['settings_sharepointlink_changelink'] = 'Změnit web';
$string['settings_sharepointlink_initializing'] = 'Moodle nastavuje tento web SharePoint. Dojde k tomu při příštím spuštění procesu cron v Moodlu.';
$string['settings_sharepointlink_enterurl'] = 'Zadejte výše adresu URL.';
$string['settings_sharepointlink_details'] = 'Chcete-li spojit Moodle a SharePoint, zadejte úplnou adresu URL webu SharePoint, ke kterému se Moodle má připojit. Pokud web neexistuje, Moodle se pokusí jej vytvořit.<br /><a href="https://docs.moodle.org/30/en/Office365/SharePoint">Další informace o propojení Moodlu a SharePointu</a>';
$string['settings_sharepointlink_status_invalid'] = 'Toto není použitelný web SharePoint.';
$string['settings_sharepointlink_status_notempty'] = 'Tento web je použitelný, ale již existuje. Moodle se může dostat do konfliktu s existujícím obsahem. Nejlepších výsledků dosáhnete, když zadáte web SharePoint, který neexistuje, a Moodle jej vytvoří.';
$string['settings_sharepointlink_status_valid'] = 'Tento web SharePoint bude vytvořen Moodlem a bude používán pro obsah Moodlu.';
$string['settings_sharepointlink_status_checking'] = 'Kontrola zadaného webu SharePoint...';
$string['settings_systemapiuser'] = 'Uživatel systémového rozhraní API';
$string['settings_systemapiuser_details'] = 'Jakýkoli uživatel Azure AD, ale mělo by jít buď o účet administrátora, nebo o vyhrazený účet. Tento účet se používá k provádění operací, které nejsou specifické pro uživatele, například ke správě webů SharePoint kurzu.';
$string['settings_systemapiuser_change'] = 'Změnit uživatele';
$string['settings_systemapiuser_usernotset'] = 'Není nastaven žádný uživatel.';
$string['settings_systemapiuser_userset'] = '{$a}';
$string['settings_systemapiuser_setuser'] = 'Nastavit uživatele';
$string['spsite_group_contributors_name'] = 'Přispěvatelé kurzu {$a}';
$string['spsite_group_contributors_desc'] = 'Všichni uživatelé, kteří mají přístup pro správu souborů pro kurz {$a}';
$string['task_calendarsyncin'] = 'Synchronizovat události o365 do Moodlu';
$string['task_groupcreate'] = 'Vytvořit skupiny uživatelů v Office 365';
$string['task_refreshsystemrefreshtoken'] = 'Obnovit token obnovení uživatele systémového rozhraní API';
$string['task_syncusers'] = 'Synchronizovat uživatele s Azure AD.';
$string['task_sharepointinit'] = 'Inicializovat SharePoint.';
$string['ucp_connectionstatus'] = 'Stav připojení';
$string['ucp_calsync_availcal'] = 'Dostupné kalendáře Moodle';
$string['ucp_calsync_title'] = 'Synchronizace kalendáře Outlook';
$string['ucp_calsync_desc'] = 'Zaškrtnuté kalendáře budou synchronizovány z Moodlu do vašeho kalendáře Outlook.';
$string['ucp_connection_status'] = 'Připojení Office 365 je:';
$string['ucp_connection_start'] = 'Připojit k Office 365';
$string['ucp_connection_stop'] = 'Odpojit od Office 365';
$string['ucp_features'] = 'Funkce Office 365';
$string['ucp_features_intro'] = 'Níže naleznete seznam funkcí, které můžete použít ke zlepšení práce v Moodlu s Office 365.';
$string['ucp_features_intro_notconnected'] = 'Některé z nich nemusí být k dispozici, dokud se nepřipojíte k Office 365.';
$string['ucp_general_intro'] = 'Zde můžete spravovat svoje připojení k Office 365.';
$string['ucp_index_aadlogin_title'] = 'Přihlášení Office 365';
$string['ucp_index_aadlogin_desc'] = 'Můžete používat své přihlašovací údaje Office 365 k přihlašování do Moodlu.';
$string['ucp_index_calendar_title'] = 'Synchronizace kalendáře Outlook';
$string['ucp_index_calendar_desc'] = 'Zde můžete nastavit synchronizaci mezi vašimi kalendáři Moodle a Outlook. Můžete exportovat události z kalendáře Moodle do Outlooku a naopak přenést události z Outlooku do Moodlu.';
$string['ucp_index_connectionstatus_connected'] = 'Aktuálně jste připojeni k Office 365';
$string['ucp_index_connectionstatus_matched'] = 'Byli jste spárováni s uživatelem <small>„{$a}“</small> v Office 365. Chcete-li propojení dokončit, klikněte na následující odkaz a přihlaste se do Office 365.';
$string['ucp_index_connectionstatus_notconnected'] = 'Aktuálně nejste připojeni k Office 365';
$string['ucp_index_onenote_title'] = 'OneNote';
$string['ucp_index_onenote_desc'] = 'Integrace OneNote vám umožňuje používat Office 365 OneNote s Moodlem. Můžete pomocí OneNote vypracovávat úkoly a snadno si dělat poznámky ve svých kurzech.';
$string['ucp_notconnected'] = 'Před navštívením této stránky se připojte k Office 365.';
$string['settings_onenote'] = 'Zakázat Office 365 OneNote';
$string['ucp_status_enabled'] = 'Aktivní';
$string['ucp_status_disabled'] = 'Nepřipojeno';
$string['ucp_syncwith_title'] = 'Synchronizovat s:';
$string['ucp_syncdir_title'] = 'Chování synchronizace:';
$string['ucp_syncdir_out'] = 'Z Moodlu do Outlooku';
$string['ucp_syncdir_in'] = 'Z Outlooku do Moodlu';
$string['ucp_syncdir_both'] = 'Aktualizovat Outlook i Moodle';
$string['ucp_title'] = 'Ovládací panel Office 365 / Moodle';
$string['ucp_options'] = 'Možnosti';
