ALTER TABLE  `t0010turmas` ADD  `anocurricular` INT NULL ,
ADD  `semestrecurricular` INT NULL;

ALTER TABLE `t0010turmas` ADD `name` VARCHAR( 255 ) NOT NULL;

ALTER TABLE `t0010turmas` CHANGE `name` `name` VARCHAR( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
