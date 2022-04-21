<?php
// Syntax replace define with const v2.3.0 2021/05/15 @gigamaster XCL-PHP7

// Altsys admin menu and breadcrumbs
const _MD_A_MYMENU_MYTPLSADMIN = 'Templates';
const _MD_A_MYMENU_MYBLOCKSADMIN = 'Blocks Permissions';
const _MD_A_MYMENU_MYPREFERENCES = 'Preferences';

// Headings
const _AM_TH_DATETIME = 'Time';
const _AM_TH_USER = 'User';
const _AM_TH_IP = 'IP';
const _AM_TH_IP_BAN = 'System IP Ban';
const _AM_TH_AGENT = 'AGENT';
const _AM_TH_TYPE = 'Type';
const _AM_TH_DESC = 'Description';
const _AM_TH_INFO = 'Overview';
const _AM_TH_TIPS = 'Solution';

const _AM_TH_BADIPS = 'Bad IPs<br><br>Write each IP address in a different line.<br>Blank means all IPs are allowed<br>The abbreviation of IPv6 address "::" and abbreviation of "0" can not be used.';
const _AM_TH_GROUP1IPS = 'Allowed IPs for Group=1<br><br>Write each IP address in a different line.<br>The abbreviation of IPv6 address "::" and abbreviation of "0" can not be used.<br>192.168. means 192.168.*<br>Blank means all IPs are allowed</span>';

const _AM_LABEL_COMPACTLOG = 'Compact log';
const _AM_BUTTON_COMPACTLOG = 'Compact';
const _AM_JS_COMPACTLOGCONFIRM = 'Duplicated (IP,Type) records will be removed. Do you want to proceed ?';
const _AM_LABEL_REMOVEALL = 'Remove all records';
const _AM_BUTTON_REMOVEALL = 'Remove all';
const _AM_JS_REMOVEALLCONFIRM = 'All logs will be completely removed. Do you want to proceed ?';
const _AM_LABEL_REMOVE = 'Remove the selected records';
const _AM_BUTTON_REMOVE = 'Remove';
const _AM_JS_REMOVECONFIRM = '¨The logs will be completely removed. Do you want to proceed ?';
const _AM_MSG_IPFILESUPDATED = 'Files for IPs have been updated';
const _AM_MSG_BADIPSCANTOPEN = 'The file for badip cannot be opened';
const _AM_MSG_GROUP1IPSCANTOPEN = 'The file for allowing group=1 cannot be opened';
const _AM_MSG_REMOVED = 'Records were removed';
const _AM_FMT_CONFIGSNOTWRITABLE = 'Turn the configs directory writable: %s';


// prefix_manager.php
const _AM_H3_PREFIXMAN = 'Prefix Manager';
const _AM_MSG_DBUPDATED = 'Database Updated Successfully!';
const _AM_CONFIRM_DELETE = 'All data will be dropped. Do you want to proceed ?';
const _AM_TXT_HOWTOCHANGEDB = "If you want to change the database prefix, edit the file :<br><code>%s/mainfile.php </code><br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');";


// advisory.php
const _AM_ADV_NOTSECURE = 'Non sécurisé';

const _AM_ADV_TITLE = 'Protector Security Advisor';
const _AM_ADV_TITLE_TIP = 'Protector Security Advisor can make a set of security checks and detect potential security risks.<br>
    Moreover, you can get recommendations as well as remediation methods for the detected security risks.';

const _AM_ADV_NGINX ='You should keep in mind, that NginX does not manage php processes like Apache and you might need to configure either php-fpm, or php-cgi';
const _AM_ADV_NGINX_VAR ='Server software var dump';

const _AM_ADV_SERVER = 'Server Software';
const _AM_ADV_ENV = 'The entries in this table are created by the web server. There is no guarantee that every web server will provide any of these.
    servers may omit some, or provide others not listed here. These variables are accounted for in the » CGI/1.1 specification, so you should be able to expect those.';
const _AM_ADV_ENV_LABEL ='Server and execution environment information';

const _AM_ADV_APACHE = 'The Apache functions are only available when running PHP as an Apache module.<br>
    Furthermore, some web servers configuration might not return the value for';


// Mainfile
const _AM_ADV_MAINUNPATCHED = 'Both pre-check and post-check are required. Refer to the module documentation to edit your mainfile.php';
const _AM_ADV_MAIN_PRECHECK = 'Missing required precheck!';
const _AM_ADV_MAIN_POSTCHECK = 'Missing required postcheck!';


// TRUST PATH
const _AM_ADV_TRUSTPATH_PUBLIC_LINK = 'Click here !';
const _AM_ADV_TRUSTPATH_PUBLIC = 'TRUST_PATH is not installed properly if the image -NG- is visible<br>
    or the link returns a page with an alert message.<br>
    The directory must be protected to return an Error 404, 403 or 500 !';
const _AM_ADV_TRUSTPATH_DESC = 'The safest place for the TRUST_PATH is outside of public DocumentRoot.<br>
    If this is not possible, increase security using Apache .htaccess file or equivalent Nginx directives.';

const _AM_ADV_TRUSTPATH_TIPS = 'Create a .htaccess file in your TRUST_PATH directory. Then open the .htaccess file and write this directive "Deny from all"<br>
    Since Nginx does not have an equivalent to the .htaccess file (i.e. no directory level configuration files), 
    you need to update the main configuration and reload Nginx for any changes to take effect. By default, the configuration file is named <b>nginx.conf</b> and placed in the directory :
    <ul><li><code>/usr/local/nginx/conf</code>
    <li><code>/etc/nginx</code>
    <li><code>/usr/local/etc/nginx</code>
    </ul>';


// allow_url_fopen
const _AM_ADV_FOPEN = 'Allow url fopen';
const _AM_ADV_FOPEN_ON = 'It is recommended to turn off <b>allow_url_include</b><br> 
    This setting allows attackers to execute arbitrary scripts on remote servers.<br>
    Change this option or claim it to your web hosting service.';
const _AM_ADV_FOPEN_DESC = '<p>The PHP configuration directive allow_url_fopen is enabled. 
    When enabled, this directive allows data retrieval from remote locations, allowing files to be included from external sources
    (web site or FTP server). A large number of code injection vulnerabilities reported in PHP-based web applications are caused by the combination
    of enabling allow_url_fopen and bad input filtering.</p>';
const _AM_ADV_FOPEN_TIPS= '<p>You can disable <b>allow_url_fopen</b> from <b>.htaccess</b> or <b>php.ini</b><br>
    if the mod_rewrite module is enabled in Apache, you can insert this line into the .htaccess file of your public root folder:<br>
    <b>php_flag allow_url_fopen off</b></br>
    or disable this php feature in your "php.ini":<br>
    <b>allow_url_fopen = "off"</b></p>';


// session.use_trans_sid
const _AM_ADV_SESSION_ERROR ='';
const _AM_ADV_SESSION_ON = 'It is recommended to turn off <b>session.use_trans_sid</b><br>
    Otherwise PHP will pass the session ID via the URL.';
const _AM_ADV_SESSION_DESC ='When use_trans_sid is enabled, PHP will pass the session ID via the URL. This makes the application more vulnerable to session hijacking attacks.
     Session hijacking is basically a form of identity theft wherein a hacker impersonates a legitimate user by stealing his session ID.
     When the session token is transmitted in a cookie, and the request is made over SSL, the token is secure.';
const _AM_ADV_SESSION_TIPS ='You can disable <b>session.use_trans_sid</b> from <b>.htaccess</b> or <b>php.ini</b><br>
    if the mod_rewrite module is enabled in Apache, you can insert this line into the .htaccess file of your public root folder:<br>
    <b>php_flag session.use_trans_sid off</b><br>
    or disable this php feature in your "php.ini":<br>
    <b>session.use_trans_sid = "off"</b>';


// Database
const _AM_ADV_DBPREFIX_ON = "It is recommended to change the <b>database prefix</b> !";
const _AM_ADV_DBPREFIX_DESC = "This setting is a security risk of <b>SQL injection attacks</b> !<br>
    Sanitizing and validating inputs could prevent some of the most common website attacks.<br>
    Enable SQL <b>sanitization</b> options in the module's preferences.";
const _AM_ADV_DBPREFIX_TIPS = 'You can use the Prefix Manager to manage, save, and modify the database prefix.<br> <a class="button" href="index.php?page=prefix_manager">Prefix manager</a>';

// Database factory
const _AM_ADV_DBFACTORYPATCHED = 'Your databasefactory is ready for DBLayer Trapping Anti-SQL-Injection';
const _AM_ADV_DBFACTORYUNPATCHED = 'Your databasefactory is not ready !';
const _AM_ADV_DBFACTORY_ON = 'Your databasefactory is not ready for DBLayer Trapping anti-SQL-Injection.<br> A patch or update is required !';
const _AM_ADV_DBFACTORY_DESC ='SQL injection (SQLi) refers to an injection attack wherein an attacker can execute malicious SQL statements that control a web app database server.
    Protector ensures parameterized queries when dealing with SQL queries that contains user input.';
const _AM_ADV_DBFACTORY_TIPS = 'Parameterized queries allows the database to understand which parts of the SQL query should be considered as user input, therefore solving SQL injection.
    To enable this feature, an update is required. Or patch the file <b>class/database/databasefactory.php</b>';

// Test Protector
const _AM_ADV_SUBTITLECHECK = "Contrôler Protector";
const _AM_ADV_CHECKCONTAMI = "Contaminations";
const _AM_ADV_CHECKISOCOM = "Commentaires Isolés";
