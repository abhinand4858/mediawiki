<?php
/** Maltese (Malti)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Chrisportelli
 * @author Giangian15
 * @author Kaganer
 * @author Malafaya
 * @author Roderick Mallia
 * @author Urhixidur
 */

$namespaceNames = [
	NS_MEDIA            => 'Medja',
	NS_SPECIAL          => 'Speċjali',
	NS_TALK             => 'Diskussjoni',
	NS_USER             => 'Utent',
	NS_USER_TALK        => 'Diskussjoni_utent',
	NS_PROJECT_TALK     => 'Diskussjoni_$1',
	NS_FILE             => 'Stampa',
	NS_FILE_TALK        => 'Diskussjoni_stampa',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Diskussjoni_MediaWiki',
	NS_TEMPLATE         => 'Mudell',
	NS_TEMPLATE_TALK    => 'Diskussjoni_mudell',
	NS_HELP             => 'Għajnuna',
	NS_HELP_TALK        => 'Diskussjoni_għajnuna',
	NS_CATEGORY         => 'Kategorija',
	NS_CATEGORY_TALK    => 'Diskussjoni_kategorija',
];

$namespaceAliases = [
	'Midja' => NS_MEDIA,
	'Diskuti' => NS_TALK,
	'Diskuti_utent' => NS_USER_TALK,
	'$1_diskuti' => NS_PROJECT_TALK,
	'$1_diskussjoni' => NS_PROJECT_TALK,
	'Diskuti_stampa' => NS_FILE_TALK,
	'MedjaWiki' => NS_MEDIAWIKI,
	'Diskuti_MedjaWiki' => NS_MEDIAWIKI_TALK,
	'Diskuti_template' => NS_TEMPLATE_TALK,
	'Diskuti_għajnuna' => NS_HELP_TALK,
	'Diskuti_kategorija' => NS_CATEGORY_TALK,
];

$specialPageAliases = [
	'Activeusers'               => [ 'UtentiAttivi' ],
	'Allmessages'               => [ 'MessaġġiKollha' ],
	'Allpages'                  => [ 'PaġniKollha' ],
	'Ancientpages'              => [ 'PaġniQodma', 'PaġniAntiki' ],
	'Badtitle'                  => [ 'TitluĦażin' ],
	'Blankpage'                 => [ 'PaġnaVojta' ],
	'Block'                     => [ 'BlokkaIP' ],
	'Booksources'               => [ 'SorsiKotba' ],
	'BrokenRedirects'           => [ 'RindirizziMiksura' ],
	'Categories'                => [ 'Kategoriji' ],
	'ChangePassword'            => [ 'BiddelPassword' ],
	'ComparePages'              => [ 'IkkomparaPaġni' ],
	'Confirmemail'              => [ 'KonfermaPostaElettronika' ],
	'Contributions'             => [ 'Kontribuzzjonijiet' ],
	'CreateAccount'             => [ 'OħloqKont' ],
	'Deadendpages'              => [ 'PaġniWieqfa' ],
	'DeletedContributions'      => [ 'KontribuzzjonijietImħassra' ],
	'DoubleRedirects'           => [ 'RindirizziDoppji' ],
	'Emailuser'                 => [ 'IbgħatUtent' ],
	'ExpandTemplates'           => [ 'EspandiMudelli' ],
	'Export'                    => [ 'Esporta' ],
	'Fewestrevisions'           => [ 'L-InqasReviżjonijiet' ],
	'FileDuplicateSearch'       => [ 'FittexFajlDuplikat' ],
	'Filepath'                  => [ 'PostFajl' ],
	'Import'                    => [ 'Importa' ],
	'Invalidateemail'           => [ 'PostaElettronikaInvalida' ],
	'BlockList'                 => [ 'ListaIPImblukkati' ],
	'LinkSearch'                => [ 'FittexĦolqa' ],
	'Listadmins'                => [ 'ListaAmmin' ],
	'Listbots'                  => [ 'ListaBots' ],
	'Listfiles'                 => [ 'ListaStampi', 'ListaFajls' ],
	'Listgrouprights'           => [ 'ListaDrittijietGruppi' ],
	'Listredirects'             => [ 'ListaRindirizzi' ],
	'Listusers'                 => [ 'Utenti', 'ListaUtenti' ],
	'Lockdb'                    => [ 'AgħlaqDB' ],
	'Log'                       => [ 'Reġistru', 'Reġistri' ],
	'Lonelypages'               => [ 'PaġniOrfni' ],
	'Longpages'                 => [ 'PaġniTwal' ],
	'MergeHistory'              => [ 'WaħħadKronoloġija' ],
	'MIMEsearch'                => [ 'FittexMIME' ],
	'Mostcategories'            => [ 'L-AktarKategoriji' ],
	'Mostimages'                => [ 'L-AktarStampiMarbuta' ],
	'Mostlinked'                => [ 'L-AktarPaġniMarbuta' ],
	'Mostlinkedcategories'      => [ 'L-AktarKategorijiMarbuta' ],
	'Mostlinkedtemplates'       => [ 'L-AktarMudelliMarbuta' ],
	'Mostrevisions'             => [ 'L-AktarReviżjonijiet' ],
	'Movepage'                  => [ 'Mexxi', 'MexxiPaġna' ],
	'Mycontributions'           => [ 'KontribuzzjonijietTiegħi' ],
	'Mypage'                    => [ 'PaġnaTiegħi' ],
	'Mytalk'                    => [ 'DiskussjonijietTiegħi' ],
	'Newimages'                 => [ 'StampiĠodda', 'FajlsĠodda' ],
	'Newpages'                  => [ 'PaġniĠodda' ],
	'Preferences'               => [ 'Preferenzi' ],
	'Prefixindex'               => [ 'IndiċiPrefiss' ],
	'Protectedpages'            => [ 'PaġniProtetti' ],
	'Protectedtitles'           => [ 'TitliProtetti' ],
	'Randompage'                => [ 'PaġnaKwalunkwe' ],
	'Randomredirect'            => [ 'RiindirizzKwalunkwe' ],
	'Recentchanges'             => [ 'TibdilRiċenti' ],
	'Recentchangeslinked'       => [ 'TibdilRelatat' ],
	'Revisiondelete'            => [ 'ĦassarReviżjoni' ],
	'Search'                    => [ 'Fittex' ],
	'Shortpages'                => [ 'PaġniQosra' ],
	'Specialpages'              => [ 'PaġniSpeċjali' ],
	'Statistics'                => [ 'Statistika' ],
	'Unblock'                   => [ 'Żblokka' ],
	'Uncategorizedcategories'   => [ 'KategorijiMhuxKategorizzati' ],
	'Uncategorizedimages'       => [ 'StampiMhuxKategorizzati' ],
	'Uncategorizedpages'        => [ 'PaġniMhuxKategorizzati' ],
	'Uncategorizedtemplates'    => [ 'MudelliMhuxKategorizzati' ],
	'Undelete'                  => [ 'Irkupra' ],
	'Unlockdb'                  => [ 'IftaħDB' ],
	'Unusedcategories'          => [ 'KategorijiMhuxUżati' ],
	'Unusedimages'              => [ 'StampiMhuxUżati', 'FajlsMhuxUżati' ],
	'Unusedtemplates'           => [ 'MudelliMhuxUżati' ],
	'Unwatchedpages'            => [ 'PaġniMhuxOsservati' ],
	'Upload'                    => [ 'Tella\'' ],
	'Userlogin'                 => [ 'UtentDħul' ],
	'Userlogout'                => [ 'UtentĦruġ' ],
	'Userrights'                => [ 'DrittijietUtent' ],
	'Version'                   => [ 'Verżjoni' ],
	'Wantedcategories'          => [ 'KategorijiRikjesti' ],
	'Wantedfiles'               => [ 'FajlsRikjesti' ],
	'Wantedpages'               => [ 'PaġniRikjesti', 'ĦoloqMiksura' ],
	'Wantedtemplates'           => [ 'MudelliRikjesti' ],
	'Watchlist'                 => [ 'ListaOsservazzjoni' ],
	'Whatlinkshere'             => [ 'XiJwassalHawn' ],
	'Withoutinterwiki'          => [ 'PaġniMingħajrInterwiki', 'BlaInterwiki' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#RINDIRIZZA', '#REDIRECT' ],
	'notoc'                     => [ '0', '__EBDAWERREJ__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__EBDAGALLERIJA__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__SFORZAWERREJ__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__WERREJ__', '__TOC__' ],
	'noeditsection'             => [ '0', '__EBDASEZZJONIMODIFIKA__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'XAHARKURRENTI', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonthname'          => [ '1', 'ISEMXAHARKURRENTI', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'ĠENISEMXAHARKURRENTI', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'ABBREVXAHARKURRENTI', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'ĠURNATAKURRENTI', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'ĠURNATAKURRENTI2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'ISEMĠURNATAKURRENTI', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'SENAKURRENTI', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'ĦINKURRENTI', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'SIEGĦAKURRENTI', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'XAHARLOKALI', 'XAHARLOKALI2', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'XAHARLOKALI1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'ISEMXAHARLOKALI', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'ĠENISEMXAHARLOKALI', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'ABBREVXAHARLOKALI', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'ĠURNATALOKALI', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'ĠURNATALOKALI2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'ISEMTAL-ĠURNATALOKALI', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'SENALOKALI', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'ĦINLOKALI', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'SIEGĦALOKALI', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'NUMRUTA\'PAĠNI', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'NUMRUTA\'ARTIKLI', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'NUMRUTA\'FAJLS', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'NUMRUTA\'UTENTI', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'NUMRUTA\'UTENTIATTIVI', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'NUMBRUTA\'MODIFIKI', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'ISEMTAL-PAĠNA', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'ISEMTAL-PAĠNAE', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'SPAZJUTAL-ISEM', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'SPAZJUTAL-ISEME', 'NAMESPACEE' ],
	'talkspace'                 => [ '1', 'SPAZJUTA\'DISKUSSJONI', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'SPAZJUTA\'DISKUSSJONIE', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'SPAZJUTAS-SUĠĠETT', 'SPAZJUTAL-ARTIKLU', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'fullpagename'              => [ '1', 'ISEMSĦIĦTAL-PAĠNA', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'ISEMTAL-PAĠNASĦIĦAE', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'ISEMTAS-SOTTOPAĠNA', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'ISEMTAS-SUBPAĠNAE', 'SUBPAGENAMEE' ],
	'basepagename'              => [ '1', 'ISEMBAŻIKUTAL-PAĠNA', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'ISEMTAL-PAĠNATAL-BAŻIE', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'ISEMPAĠNATA\'DISKUSSJONI', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'ISEMTAL-PAĠNATAD-DISKUSSJONIE', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'ISEMTAS-SUĠĠETTTAL-PAĠNA', 'ISEMTAL-ARTIKLUTAL-PAĠNA', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'ISEMTAS-SUĠĠETTTAL-PAĠNAE', 'ISEMTAL-ARTIKLUTAL-PAĠNAE', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'MSĠ:', 'MSG:' ],
	'subst'                     => [ '0', 'BIDDEL:', 'SUBST:' ],
	'msgnw'                     => [ '0', 'MSĠEW:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'daqsminuri', 'minuri', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'daqsminuri=$1', 'minuri=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'lemin', 'right' ],
	'img_left'                  => [ '1', 'xellug', 'left' ],
	'img_none'                  => [ '1', 'xejn', 'none' ],
	'img_center'                => [ '1', 'nofs', 'ċentrali', 'ċentru', 'center', 'centre' ],
	'img_framed'                => [ '1', 'tilat', 'b\'tilar', 'tilar', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'bla_tilar', 'frameless' ],
	'img_page'                  => [ '1', 'paġna=$1', 'paġna $1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'wieqaf', 'wieqaf=$1', 'wieqaf $1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'bordura', 'burdura', 'border' ],
	'img_baseline'              => [ '1', 'bażi_tal-linja', 'baseline' ],
	'img_sub'                   => [ '1', 'bid', 'sub' ],
	'img_super'                 => [ '1', 'tajjeb', 'super', 'sup' ],
	'img_top'                   => [ '1', 'fuq', 'top' ],
	'img_text_top'              => [ '1', 'test-fuq', 'text-top' ],
	'img_bottom'                => [ '1', 'taħt', 'bottom' ],
	'img_text_bottom'           => [ '1', 'test-taħt', 'text-bottom' ],
	'img_link'                  => [ '1', 'ħolqa=$1', 'link=$1' ],
	'sitename'                  => [ '1', 'ISEMTAS-SIT', 'SITENAME' ],
	'ns'                        => [ '0', 'IS:', 'NS:' ],
	'localurl'                  => [ '0', 'URLLOKALI:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'URLLOKALIE:', 'LOCALURLE:' ],
	'servername'                => [ '0', 'ISEMTAS-SERVER', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'DESTINAZZJONITA\'SKRITT', 'SCRIPTPATH' ],
	'grammar'                   => [ '0', 'GRAMMATIKA:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'SESS:', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__EBDAKONVERTURTITLU__', '__EBDAKT__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__EBDAKONVERTURKONTENUT__', '__EBDAKK__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'ĠIMGĦAKURRENTI', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'ĠTĠKURRENTI', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'ĠIMGĦALOKALI', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'ĠTĠLOKALI', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'IDTAR-REVIŻJONI', 'REVISIONID' ],
	'revisionday'               => [ '1', 'ĠURNATATAR-REVIŻJONI', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'ĠURNATATAR-REVIŻJONI2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'XAHARTAR-REVIŻJONI', 'REVISIONMONTH' ],
	'revisionyear'              => [ '1', 'SENATAR-REVIŻJONI', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'TIMBRUTAR-REVIŻJONI', 'REVISIONTIMESTAMP' ],
	'fullurl'                   => [ '0', 'URLSĦIĦA:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'URLSĦIĦAE:', 'FULLURLE:' ],
	'lcfirst'                   => [ '0', 'IBDAKŻ:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'IBDAKK:', 'UCFIRST:' ],
	'lc'                        => [ '0', 'KŻ:', 'LC:' ],
	'uc'                        => [ '0', 'KK:', 'UC:' ],
	'displaytitle'              => [ '1', 'URITITLU', 'DISPLAYTITLE' ],
	'newsectionlink'            => [ '1', '__ĦOLQASEZZJONIĠDIDA__', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '__EBDAĦOLQASEZZJONIĠDIDA__', '__NONEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'VERŻJONIKURRENTI', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'URLKODIĊI:', 'URLENCODE:' ],
	'anchorencode'              => [ '0', 'ANKRAKODIĊI', 'ANCHORENCODE' ],
	'currenttimestamp'          => [ '1', 'TIMBRUTAL-ĦINKURRENTI', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'TIMBRUTAL-ĦINLOKALI', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'MARKATAD-DIREZZJONI', 'MARKADIRE', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#LINGWA:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'LINGWATAL-KONTENUT', 'LINGKONTENUT', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'PAĠNIFL-ISPAZJUTAL-ISEM:', 'PAĠNISI:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'NUMRUTA\'AMMIN', 'NUMBEROFADMINS' ],
	'padleft'                   => [ '0', 'PADXELLUG', 'PADLEFT' ],
	'padright'                  => [ '0', 'PADLEMIN', 'PADRIGHT' ],
	'special'                   => [ '0', 'speċjali', 'special' ],
	'defaultsort'               => [ '1', 'DEFAULTSORTJA:', 'DEFAULTSORTJAĊAVETTA:', 'DEFAULTKATEGORIJISORTJA:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'DESTINAZZJONITAL-FAJL:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'tabella', 'tag' ],
	'hiddencat'                 => [ '1', '__KATMOĦBIJA__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'PAĠNIFIL-KATEGORIJA', 'PAĠNIFILK', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'DAQSTAL-PAĠNI', 'PAGESIZE' ],
	'index'                     => [ '1', '__INDIĊI__', '__INDEX__' ],
	'noindex'                   => [ '1', '__EBDAINDIĊI__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'NUMRUFIL-GRUPP', 'NUMFIL-GRUPP', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__RIINDIRIZZSTATIKU__', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'LIVELLITA\'PROTEZZJONI', 'PROTECTIONLEVEL' ],
	'formatdate'                => [ '0', 'formatdata', 'dataformat', 'formatdate', 'dateformat' ],
];

$linkPrefixCharset = 'A-\\x{10ffff}';

