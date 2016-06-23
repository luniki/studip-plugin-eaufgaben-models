<?php
namespace eAufgaben\DB;

# CREATE TABLE IF NOT EXISTS `eauf_responses` (
#     `id` INT(11) NOT NULL AUTO_INCREMENT,
#     `assignment_id` INT(11) NOT NULL,
#     `task_id` INT(11) NOT NULL,
#     `user_id` CHAR(32) NOT NULL,
#     `response` TEXT NOT NULL,
#     `state` TINYINT(1) NULL,
#     `points` FLOAT NULL,
#     `feedback` TEXT NULL,
#     `grader_id` CHAR(32) NULL,
#     `created` TIMESTAMP NOT NULL,
#     `changed` TIMESTAMP NOT NULL,
#     `options` TEXT NOT NULL,
#     PRIMARY KEY (`id`));

/**
 * eAufgaben conforming assignment definition
 */
class Response extends \SimpleORMap
{
    protected static function configure($config = array())
    {
        $config['db_table'] = 'eauf_responses';

        $config['belongs_to']['assignment'] = array(
            'class_name' => 'eAufgaben\\DB\\Assignment',
            'foreign_key' => 'assignment_id');

        $config['belongs_to']['task'] = array(
            'class_name' => 'eAufgaben\\DB\\Task',
            'foreign_key' => 'task_id');

        $config['belongs_to']['user'] = array(
            'class_name' => '\\User',
            'foreign_key' => 'user_id');

        $config['belongs_to']['grader'] = array(
            'class_name' => '\\User',
            'foreign_key' => 'user_id');

        $config['serialized_fields']['options'] = 'JSONArrayObject';

        parent::configure($config);
    }
}
