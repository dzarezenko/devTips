/**
 * Concatenate multiple MySQL rows field values.
 */

SELECT GROUP_CONCAT(`email` SEPARATOR ', ') FROM `users`
WHERE `age` >= 16
