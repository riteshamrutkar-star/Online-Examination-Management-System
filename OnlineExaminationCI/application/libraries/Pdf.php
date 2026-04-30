<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Try to load TCPDF from common locations inside CodeIgniter
$candidates = [
    dirname(__FILE__) . '/tcpdf/tcpdf.php',                           // application/libraries/tcpdf/
    APPPATH . 'third_party/tcpdf/tcpdf.php',                          // application/third_party/tcpdf/
    APPPATH . 'third_party/tcpdf_min/tcpdf.php',                      // application/third_party/tcpdf_min/
    APPPATH . 'third_party/TCPDF-main/tcpdf.php',                     // application/third_party/TCPDF-main/ (manual ZIP)
    FCPATH  . 'vendor/tecnickcom/tcpdf/tcpdf.php',                    // Composer vendor path
];

$loaded = false;
foreach ($candidates as $path) {
    if (file_exists($path)) {
        require_once $path;
        $loaded = true;
        break;
    }
}

if (!$loaded) {
    $msg = "TCPDF library not found. Checked paths:\n- " . implode("\n- ", $candidates) . "\nPlease install TCPDF and place it in one of these paths (or install via Composer: tecnickcom/tcpdf).";
    show_error($msg, 500, 'TCPDF Missing');
}

class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
}