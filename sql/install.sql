CREATE TABLE IF NOT EXISTS `eauf_tasks` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `type` VARCHAR(64) NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `task` TEXT NOT NULL,
    `user_id` CHAR(32) NOT NULL,
    `created` TIMESTAMP NULL,
    `changed` TIMESTAMP NULL,
    `options` TEXT NOT NULL,
    PRIMARY KEY (`id`));

CREATE TABLE IF NOT EXISTS `eauf_task_tags` (
    `task_id` INT(11) NOT NULL,
    `user_id` INT(11) NULL,
    `tag` VARCHAR(64) NOT NULL,
    PRIMARY KEY (`task_id`, `user_id`, `tag`));

CREATE TABLE IF NOT EXISTS `eauf_tests` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `user_id` CHAR(32) NOT NULL,
    `created` TIMESTAMP NULL,
    `changed` TIMESTAMP NULL,
    `options` TEXT NOT NULL,
    PRIMARY KEY (`id`));

CREATE TABLE IF NOT EXISTS `eauf_test_tags` (
    `test_id` INT(11) NOT NULL,
    `user_id` CHAR(32) NULL,
    `tag` VARCHAR(64) NOT NULL,
    PRIMARY KEY (`test_id`, `user_id`, `tag`));

CREATE TABLE IF NOT EXISTS `eauf_test_tasks` (
    `test_id` INT(11) NOT NULL,
    `task_id` INT(11) NOT NULL,
    `position` INT(11) NOT NULL,
    `points` FLOAT NULL,
    `options` TEXT NOT NULL,
    PRIMARY KEY (`test_id`, `task_id`));

CREATE TABLE IF NOT EXISTS `eauf_assignments` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `test_id` INT(11) NOT NULL,
    `range_type` VARCHAR(64) NOT NULL,
    `range_id` CHAR(32) NOT NULL,
    `type` VARCHAR(64) NOT NULL,
    `start` TIMESTAMP NULL,
    `end` TIMESTAMP NULL,
    `active` TINYINT(1) NOT NULL,
    `options` TEXT NOT NULL,
    PRIMARY KEY (`id`));

CREATE TABLE IF NOT EXISTS `eauf_assignment_attempts` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `assignment_id` INT(11) NOT NULL,
    `user_id` CHAR(32) NOT NULL,
    `start` TIMESTAMP NULL,
    `end` TIMESTAMP NULL,
    `options` TEXT NOT NULL,
    PRIMARY KEY (`id`));

CREATE TABLE IF NOT EXISTS `eauf_responses` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `assignment_id` INT(11) NOT NULL,
    `task_id` INT(11) NOT NULL,
    `user_id` CHAR(32) NOT NULL,
    `response` TEXT NOT NULL,
    `state` TINYINT(1) NULL,
    `points` FLOAT NULL,
    `feedback` TEXT NULL,
    `grader_id` CHAR(32) NULL,
    `created` TIMESTAMP NULL,
    `changed` TIMESTAMP NULL,
    `options` TEXT NOT NULL,
    PRIMARY KEY (`id`));
