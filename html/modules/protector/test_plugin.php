<?php
/**
 * Comprehensive Plugin Test Tool for Protector Proxy
 *
 * @package    Protector
 * @version    XCL 2.5.0
 * @author     Nuno Luciano aka gigamaster
 * @copyright  (c) 2025 The XOOPSCube Project
 * @license    GPL v2.0
 */

require_once '../../mainfile.php';

// Check if user has permission
if (!is_object($xoopsUser) && !defined('PROXY_ALLOW_ANONYMOUS')) {
    redirect_header(XOOPS_URL, 3, _NOPERM);
    exit();
}

// Set page title
$xoopsOption['template_main'] = $mydirname . '_protector_proxy.html';
$xoopsOption['xoops_pagetitle'] = 'Proxy Plugin Test';

// Include header
require_once XOOPS_ROOT_PATH . '/header.php';

// Load Protector Proxy class
require_once XOOPS_TRUST_PATH . '/modules/protector/class/Proxy.class.php';

// Get plugin name from URL if provided
$plugin_name = isset($_GET['plugin']) ? $_GET['plugin'] : '';
$test_url = isset($_GET['url']) ? $_GET['url'] : 'https://www.wikipedia.org';

// Create proxy instance
try {
    $proxy = new ProtectorProxy();
    $config = $proxy->getConfig();
} catch (Exception $e) {
    echo '<div class="errorMsg">Proxy error: ' . $e->getMessage() . '</div>';
    require_once XOOPS_ROOT_PATH . '/footer.php';
    exit();
}

// Get list of available plugins
$plugins_dir = XOOPS_TRUST_PATH . '/modules/protector/plugins/proxy';
$available_plugins = [];
$dir = opendir($plugins_dir);
while (($file = readdir($dir)) !== false) {
    if (substr($file, -4) === '.php') {
        $available_plugins[] = substr($file, 0, -4);
    }
}
closedir($dir);

// Display test form
echo '<h2>Proxy Plugin Test Tool</h2>';

echo '<div class="admin-block">';
echo '<h3>Test Configuration</h3>';
echo '<form action="test_plugin.php" method="get">';
echo '<table class="outer" width="100%">';

// Plugin selection
echo '<tr><td class="head">Select Plugin:</td><td class="even">';
echo '<select name="plugin">';
echo '<option value="">All Enabled Plugins</option>';
foreach ($available_plugins as $plugin) {
    $selected = ($plugin === $plugin_name) ? ' selected' : '';
    echo '<option value="' . $plugin . '"' . $selected . '>' . $plugin . '</option>';
}
echo '</select>';
echo '</td></tr>';

// URL input
echo '<tr><td class="head">Test URL:</td><td class="even">';
echo '<input type="text" name="url" value="' . htmlspecialchars($test_url) . '" size="50">';
echo '</td></tr>';

// Submit button
echo '<tr><td class="head"></td><td class="even">';
echo '<input type="submit" value="Run Test" class="formButton">';
echo '</td></tr>';

echo '</table>';
echo '</form>';
echo '</div>';

// Path analysis
echo '<div class="admin-block">';
echo '<h3>Path Analysis</h3>';

$requestUri = $_SERVER['REQUEST_URI'] ?? '';
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$phpSelf = $_SERVER['PHP_SELF'] ?? '';
$documentRoot = $_SERVER['DOCUMENT_ROOT'] ?? '';

echo '<table class="outer" width="100%">';
echo '<tr><td class="head">REQUEST_URI:</td><td class="even">' . htmlspecialchars($requestUri) . '</td></tr>';
echo '<tr><td class="head">SCRIPT_NAME:</td><td class="even">' . htmlspecialchars($scriptName) . '</td></tr>';
echo '<tr><td class="head">PHP_SELF:</td><td class="even">' . htmlspecialchars($phpSelf) . '</td></tr>';
echo '<tr><td class="head">DOCUMENT_ROOT:</td><td class="even">' . htmlspecialchars($documentRoot) . '</td></tr>';

// Check for path issues
if (strpos($requestUri, '/modules/modules/') !== false) {
    echo '<tr><td class="head">Path Issue:</td><td class="even error">';
    echo 'Detected incorrect path: /modules/modules/<br>';
    echo 'This should be: /modules/protector/<br>';
    echo 'Possible fix: Check your .htaccess file or server configuration for incorrect rewrite rules.';
    echo '</td></tr>';
} else {
    echo '<tr><td class="head">Path Status:</td><td class="even success">Path structure appears correct.</td></tr>';
}

// Get current module directory
$currentDir = basename(dirname(__FILE__));
echo '<tr><td class="head">Module Directory:</td><td class="even">' . htmlspecialchars($currentDir) . '</td></tr>';

// Construct correct proxy URL
$correctProxyUrl = XOOPS_URL . '/modules/' . $currentDir . '/proxy.php';
echo '<tr><td class="head">Correct Proxy URL:</td><td class="even">' . htmlspecialchars($correctProxyUrl) . '</td></tr>';

echo '</table>';
echo '</div>';

// Run plugin test if requested
if (!empty($plugin_name) || !empty($test_url)) {
    echo '<div class="admin-block">';
    echo '<h3>Plugin Test Results</h3>';
    
    // If specific plugin selected
    if (!empty($plugin_name)) {
        $plugin_file = $plugins_dir . '/' . $plugin_name . '.php';
        
        if (file_exists($plugin_file)) {
            try {
                // Include the plugin file
                include_once $plugin_file;
                
                // Create class name from file name
                $class_name = $plugin_name;
                
                // Check if class exists
                if (class_exists($class_name)) {
                    // Create plugin instance
                    $plugin = new $class_name($proxy);
                    
                    // Test initialization
                    $init_result = $plugin->init();
                    
                    echo '<table class="outer" width="100%">';
                    echo '<tr><td class="head">Plugin Name:</td><td class="even">' . $plugin_name . '</td></tr>';
                    echo '<tr><td class="head">Initialization:</td><td class="even">' . ($init_result ? '<span class="success">Success</span>' : '<span class="error">Failed</span>') . '</td></tr>';
                    
                    // Test required methods
                    $methods = [
                        'preProcess' => method_exists($plugin, 'preProcess'),
                        'postProcess' => method_exists($plugin, 'postProcess'),
                        'handleDomain' => method_exists($plugin, 'handleDomain')
                    ];
                    
                    foreach ($methods as $method => $exists) {
                        echo '<tr><td class="head">Method ' . $method . ':</td><td class="even">' . ($exists ? '<span class="success">Exists</span>' : '<span class="error">Missing</span>') . '</td></tr>';
                    }
                    
                    // Test URL processing
                    if ($methods['preProcess']) {
                        $processed_url = $plugin->preProcess($test_url);
                        echo '<tr><td class="head">preProcess Result:</td><td class="even">' . ($processed_url !== false ? htmlspecialchars($processed_url) : '<span class="error">Blocked</span>') . '</td></tr>';
                    }
                    
                    // Test domain handling
                    if ($methods['handleDomain']) {
                        $content = $plugin->handleDomain($test_url);
                        echo '<tr><td class="head">handleDomain Result:</td><td class="even">' . ($content !== false ? '<span class="success">Content returned (' . strlen($content) . ' bytes)</span>' : '<span class="notice">Not handled by this plugin</span>') . '</td></tr>';
                    }
                    
                    echo '</table>';
                } else {
                    echo '<div class="errorMsg">Class ' . $class_name . ' not found in file.</div>';
                }
            } catch (Exception $e) {
                echo '<div class="errorMsg">Plugin test failed with error: ' . $e->getMessage() . '</div>';
            }
        } else {
            echo '<div class="errorMsg">Plugin file not found: ' . $plugin_file . '</div>';
        }
    } else {
        // Test with all enabled plugins
        echo '<p>Testing URL with all enabled plugins: ' . htmlspecialchars($test_url) . '</p>';
        
        // Process the request
        $content = $proxy->processRequest($test_url);
        
        if ($content !== false) {
            echo '<div class="success">Successfully fetched content (' . strlen($content) . ' bytes)</div>';
            
            // Show content preview
            echo '<h4>Content Preview (first 500 characters):</h4>';
            echo '<pre>' . htmlspecialchars(substr($content, 0, 500)) . '...</pre>';
        } else {
            echo '<div class="errorMsg">Failed to fetch content from URL</div>';
        }
    }
    
    echo '</div>';
}

// Include footer
require_once XOOPS_ROOT_PATH . '/footer.php';