/**
 * Remove duplicate records before creating unique index.
 * Run few times until all duplicates removed.
 */

DELETE FROM `site_countries` WHERE `site_country_id` IN (
    SELECT * FROM (
        SELECT site_country_id
        FROM `site_countries`
        GROUP BY `site_id` , `country_id`
        HAVING COUNT(*) > 1
    ) AS x
)

ALTER TABLE `site_countries` ADD UNIQUE (
    `site_id`,
    `country_id`
);
