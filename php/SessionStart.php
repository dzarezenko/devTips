<?php

/**
 * Detect if session has already started and start it if no.
 */

// PHP >= 5.4.0
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// PHP < 5.4.0
if (session_id() == '') {
    session_start();
}