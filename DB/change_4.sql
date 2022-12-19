ALTER TABLE `portfolio` ADD `slider` VARCHAR(10) NOT NULL AFTER `ss_image`;
UPDATE `portfolio` SET `slider`='web'; 
