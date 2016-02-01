/**
 * This Tip helps to get around foreign key creation issue connected with error
 * Mysql error 1452 - Cannot add or update a child row: a foreign key constraint fails
 */

SET foreign_key_checks = 0;

-- YOUR KEY CREATION SQL HERE

SET foreign_key_checks = 1;