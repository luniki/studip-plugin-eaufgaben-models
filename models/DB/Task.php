<?php
namespace eAufgaben\DB;

# CREATE TABLE IF NOT EXISTS `eauf_tasks` (
#     `id` INT(11) NOT NULL AUTO_INCREMENT,
#     `type` VARCHAR(64) NOT NULL,
#     `title` VARCHAR(255) NOT NULL,
#     `description` TEXT NOT NULL,
#     `task` TEXT NOT NULL,
#     `user_id` CHAR(32) NOT NULL,
#     `created` TIMESTAMP NOT NULL,
#     `changed` TIMESTAMP NOT NULL,
#     `options` TEXT NOT NULL,
#    PRIMARY KEY (`id`));

/**
 * eAufgaben conforming task definition
 */
class Task extends \SimpleORMap
{
    protected static function configure($config = array())
    {
        $config['db_table'] = 'eauf_tasks';

        $config['belongs_to']['owner'] = array(
            'class_name' => '\\User',
            'foreign_key' => 'user_id');

        $config['has_and_belongs_to_many']['tests'] = array(
            'class_name' => 'eAufgaben\\DB\\Test',
            'thru_table' => 'eauf_test_tasks',
            'thru_key' => 'test_id',
            'thru_assoc_key' => 'task_id'
        );

        $config['has_many']['responses'] = array(
            'class_name' => 'eAufgaben\\DB\\Response',
            'assoc_foreign_key' => 'task_id'
        );

        $config['serialized_fields']['options'] = 'JSONArrayObject';

        parent::configure($config);
    }
}
