CREATE TABLE IF NOT EXISTS `ft_table` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `login` VARCHAR(8) NOT NULL DEFAULT 'toto',
    `group` ENUM('staff', 'student', 'other') NOT NULL,
    `creation_date` DATE NOT NULL,
    PRIMARY KEY (`id`)
);