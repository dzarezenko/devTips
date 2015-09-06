<?php

/**
 * Security Notice:
 * This solution should not be used in situations where the quality of your
 * randomness can affect the security of an application. In particular, rand()
 * and uniqid() are not cryptographically secure random number generators.
 */

// If you do not need it to be absolutely unique over time:
$uniqueStr = md5(uniqid(rand(), true));

// Otherwise (given you have already determined a unique login for your user):
$uniqueStr = md5(uniqid($your_user_login, true));