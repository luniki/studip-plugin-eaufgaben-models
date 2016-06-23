<?php
namespace eAufgaben\DB;

/*
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `type` VARCHAR(64) NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `description` MEDIUMTEXT NOT NULL,
    `task` MEDIUMTEXT NOT NULL,
    `user_id` CHAR(32) NOT NULL,
    `created` TIMESTAMP NOT NULL,
    `changed` TIMESTAMP NULL,
    `options` MEDIUMTEXT NOT NULL,
*/

/**
 * eAufgaben conforming task definition
 */
class Task extends \SimpleORMap
{
    protected static function configure($config = array())
    {
        $config['db_table'] = 'eauf_tasks';

        $config['has_and_belongs_to_many']['tests'] = array(
            'class_name' => 'eAufgaben\\DB\\Test',
            'thru_table' => 'eauf_test_tasks',
            'thru_key' => 'test_id',
            'thru_assoc_key' => 'task_id'
        );

        $config['serialized_fields']['options'] = 'JSONArrayObject';

        parent::configure($config);
    }
}
