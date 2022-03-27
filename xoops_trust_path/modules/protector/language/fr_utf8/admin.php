<?php
// Syntax replace define with const v2.3.0 2021/05/15 @gigamaster XCL-PHP7

// mymenu
// Appended by Xoops Language Checker -GIJOE- in 2009-01-14 11:10:54
const _AM_ADV_DBFACTORYPATCHED = 'Your databasefactory is ready for DBLayer Trapping anti-SQL-Injection';
const _AM_ADV_DBFACTORYUNPATCHED = 'Your databasefactory is not ready for DBLayer Trapping anti-SQL-Injection. Some patches are required.';

// Appended by Xoops Language Checker -GIJOE- in 2008-12-03 11:47:20
const _AM_ADV_TRUSTPATHPUBLIC = 'If you can look an image -NG- or the link returns normal page, your XOOPS_TRUST_PATH is not placed properly. The best place for XOOPS_TRUST_PATH is outside of DocumentRoot. If you cannot do that, you have to put .htaccess (DENY FROM ALL) just under XOOPS_TRUST_PATH as the second best way.';
const _AM_ADV_TRUSTPATHPUBLICLINK = 'Check php files inside TRUST_PATH are private (it must be 404,403 or 500 error';

// Appended by Xoops Language Checker -GIJOE- in 2007-10-18 05:36:25
const _AM_LABEL_COMPACTLOG = 'Compact log';
const _AM_BUTTON_COMPACTLOG = 'Compact it!';
const _AM_JS_COMPACTLOGCONFIRM = 'Duplicated (IP,Type) records will be removed';
const _AM_LABEL_REMOVEALL = 'Remove all records';
const _AM_BUTTON_REMOVEALL = 'Remove all!';
const _AM_JS_REMOVEALLCONFIRM = 'All logs are removed absolutely. Are you really OK?';

const _MD_A_MYMENU_MYTPLSADMIN = '';
const _MD_A_MYMENU_MYBLOCKSADMIN = 'Permissions';
const _MD_A_MYMENU_MYPREFERENCES = 'Préférences';

// index.php
const _AM_TH_DATETIME = "Date";
const _AM_TH_USER = "Utilisateur";
const _AM_TH_IP = "IP";
const _AM_TH_AGENT = "Agent";
const _AM_TH_TYPE = "Type";
const _AM_TH_DESCRIPTION = "Description";

const _AM_TH_BADIPS = 'Adresses IP interdites<br /><br /><span style="font-weight:normal;">Ajoutez une adresse IP par ligne.</span><br />Laisser ce champ vide pour autoriser toute adresse IP.';

const _AM_TH_GROUP1IPS = 'Adresses IP autorisées pour le groupe=1<br /><br /><span style="font-weight:normal;">Ajoutez une IP par ligne.<br />Ex. 192.168. signifie que la régle s\'applique à toute adresse avec le prefixe 192.168.*<br />Laisser ce champ vide pour autoriser toute adresse IP</span>';

const _AM_LABEL_REMOVE = "Supprimer les enregistrements selectionnés:";
const _AM_BUTTON_REMOVE = "Supprimer!";
const _AM_JS_REMOVECONFIRM = "Veuillez confirmer la suppression?";
const _AM_MSG_IPFILESUPDATED = "Mise à jour des adresses IP";
const _AM_MSG_BADIPSCANTOPEN = "Accès impossible aux adresses IP interdites";
const _AM_MSG_GROUP1IPSCANTOPEN = "Accès impossible au fichier du groupe=1";
const _AM_MSG_REMOVED = "Suppression des messages";
const _AM_FMT_CONFIGSNOTWRITABLE = "Changez le repertoire configs en mode écriture : %s";


// prefix_manager.php
const _AM_H3_PREFIXMAN = "Gestion du préfixe";
const _AM_MSG_DBUPDATED = "Mise à Jour de la BDD avec succès!";
const _AM_CONFIRM_DELETE = "Supprimer toutes les données?";
const _AM_TXT_HOWTOCHANGEDB = "Pour changer le préfixe, veuillez éditer dans le fichier %s/mainfile.php la ligne suivante :<br />  define('XOOPS_DB_PREFIX', '<b>%s</b>');";


// advisory.php
const _AM_ADV_NOTSECURE = "Non sécurisé";

const _AM_ADV_REGISTERGLOBALS = "Protection des attaques par injection.<br />Placez un fichier .htaccess pour limiter l'accès.";
const _AM_ADV_ALLOWURLFOPEN = "Protection contre l\'exécution de scripts sur des serveurs distants.<br />Éditer php.ini ou httpd.conf.<br /><b>Exemple pour httpd.conf:<br /> php_admin_flag  allow_url_fopen off</b><br />Autrement contacter l\'administrateur du serveur.";
const _AM_ADV_USETRANSSID = "Protection contre l\'hijacking ou vol de la clé de votre session.<br />Ajouter la ligne suivante à votre fichier .htaccess dans XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>";
const _AM_ADV_DBPREFIX = "Protection contre les Injections SQL.<br />Activer l'option 'Forcer le filtrage *' dans les préférences du module.";
const _AM_ADV_LINK_TO_PREFIXMAN = "Lien pour la gestion du préfixe";
const _AM_ADV_MAINUNPATCHED = "Attention ! Modifier le fichier mainfile.php comme indiquez dans les instructions du README.";
const _AM_ADV_SUBTITLECHECK = "Contrôler Protector";
const _AM_ADV_CHECKCONTAMI = "Contaminations";
const _AM_ADV_CHECKISOCOM = "Commentaires Isolés";
