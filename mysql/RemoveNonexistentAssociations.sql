/**
 * Remove nonexistent associations before creating foreign key.
 */

DELETE FROM `site_countries` WHERE `site_id` IN (
    SELECT * FROM (
        SELECT DISTINCT site_id
        FROM site_countries sc
        LEFT JOIN sites AS s ON s.id = sc.site_id
        WHERE s.id IS NULL
    ) AS x
);

ALTER TABLE `site_countries` ADD CONSTRAINT `site_delete` FOREIGN KEY ( `site_id` ) REFERENCES `sites` (
    `id`
) ON DELETE CASCADE ON UPDATE RESTRICT ;
