<?php

/**
 * Own extended error log  functionality.
 */

register_shutdown_function(function() {
    $error = error_get_last();

    if ($error !== null) {
        $errno = $error["type"];
        $errfile = $error["file"];
        $errline = $error["line"];
        $errstr = $error["message"];

        file_put_contents(".errors", "[" . date("Y-m-d H:i:s") . "] " . $errstr . "\n", FILE_APPEND);
        file_put_contents(".errors", "CALLED: " . $_SERVER['SCRIPT_NAME'] . "\n", FILE_APPEND);
        file_put_contents(".errors", "SOURCE: " . $errfile . " (" . $errline . ")\n", FILE_APPEND);
        file_put_contents(".errors", "------------------------------------------------------\n", FILE_APPEND);
    }
});

?>