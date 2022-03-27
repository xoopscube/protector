<?php
// Syntax replace define with const v2.3.0 2021/05/15 @gigamaster XCL-PHP7

// Altsys admin menu and breadcrumbs
const _MD_A_MYMENU_MYTPLSADMIN = 'Templates';
const _MD_A_MYMENU_MYBLOCKSADMIN = 'Blocks Permissions';
const _MD_A_MYMENU_MYPREFERENCES = 'Preferences';

// index.php
const _AM_TH_DATETIME = 'Time';
const _AM_TH_USER = 'User';
const _AM_TH_IP = 'IP';
const _AM_TH_AGENT = 'AGENT';
const _AM_TH_TYPE = 'Type';
const _AM_TH_DESCRIPTION = 'Description';

const _AM_TH_BADIPS = 'Bad IPs<br><br>Write each IP address in a different line.<br>Blank means all IPs are allowed<br>The abbreviation of IPv6 address "::" and abbreviation of "0" can not be used.';

const _AM_TH_GROUP1IPS = 'Allowed IPs for Group=1<br><br>Write each IP address in a different line.<br>The abbreviation of IPv6 address "::" and abbreviation of "0" can not be used.<br>192.168. means 192.168.*<br>Blank means all IPs are allowed</span>';

const _AM_LABEL_COMPACTLOG = 'Compact log';
const _AM_BUTTON_COMPACTLOG = 'Compact it!';
const _AM_JS_COMPACTLOGCONFIRM = 'Duplicated (IP,Type) records will be removed';
const _AM_LABEL_REMOVEALL = 'Remove all records';
const _AM_BUTTON_REMOVEALL = 'Remove all!';
const _AM_JS_REMOVEALLCONFIRM = 'All logs are removed absolutely. Are you really OK?';
const _AM_LABEL_REMOVE = 'Remove the records checked:';
const _AM_BUTTON_REMOVE = 'Remove!';
const _AM_JS_REMOVECONFIRM = 'Remove OK?';
const _AM_MSG_IPFILESUPDATED = 'Files for IPs have been updated';
const _AM_MSG_BADIPSCANTOPEN = 'The file for badip cannot be opened';
const _AM_MSG_GROUP1IPSCANTOPEN = 'The file for allowing group=1 cannot be opened';
const _AM_MSG_REMOVED = 'Records are removed';
const _AM_FMT_CONFIGSNOTWRITABLE = 'Turn the configs directory writable: %s';

// prefix_manager.php
const _AM_H3_PREFIXMAN = 'Prefix Manager';
const _AM_MSG_DBUPDATED = 'Database Updated Successfully!';
const _AM_CONFIRM_DELETE = 'All data will be dropped. OK?';
const _AM_TXT_HOWTOCHANGEDB = "If you want to change prefix,<br> edit %s/mainfile.php manually.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');";

// advisory.php
const _AM_ADV_NOTSECURE = 'Not secure';

const _AM_ADV_TRUSTPATHPUBLIC = 'If you can look an image -NG- or the link returns normal page, your XOOPS_TRUST_PATH is not placed properly. The best place for XOOPS_TRUST_PATH is outside of DocumentRoot. If you cannot do that, you have to put .htaccess (DENY FROM ALL) just under XOOPS_TRUST_PATH as the second best way.';
const _AM_ADV_TRUSTPATHPUBLICLINK = 'Check php files inside TRUST_PATH are private (it must be 404,403 or 500 error';
const _AM_ADV_REGISTERGLOBALS = 'This setting invites a variety of injecting attacks.<br>If you can put .htaccess, edit or create...';
const _AM_ADV_ALLOWURLFOPEN = 'This setting allows attackers to execute arbitrary scripts on remote servers.<br>Only administrator can change this option.<br>If you are an admin, edit php.ini or httpd.conf.<br><b>Sample of httpd.conf:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>Else, claim it to your administrators.';
const _AM_ADV_USETRANSSID = 'Your Session ID will be diplayed in anchor tags etc.<br>For preventing from session hi-jacking, add a line into .htaccess in XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>';
const _AM_ADV_DBPREFIX = "This setting invites 'SQL Injections'.<br>Don't forget turning 'Force sanitizing *' on in this module's preferences.";
const _AM_ADV_LINK_TO_PREFIXMAN = 'Go to prefix manager';
const _AM_ADV_MAINUNPATCHED = 'You should edit your mainfile.php like written in README.';
const _AM_ADV_DBFACTORYPATCHED = 'Your databasefactory is ready for DBLayer Trapping anti-SQL-Injection';
const _AM_ADV_DBFACTORYUNPATCHED = 'Your databasefactory is not ready for DBLayer Trapping anti-SQL-Injection. Some patches are required.';

const _AM_ADV_SUBTITLECHECK = 'Check if Protector works well';
const _AM_ADV_CHECKCONTAMI = 'Contaminations';
const _AM_ADV_CHECKISOCOM = 'Isolated Comments';
