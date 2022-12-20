ALTER TABLE `tags` ADD `slug` VARCHAR(255) NOT NULL AFTER `tag`;
UPDATE `tags` SET `slug`=LOWER(REPLACE(`tag`," ","-"));