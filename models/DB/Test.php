<?php
namespace eAufgaben\DB;

# CREATE TABLE IF NOT EXISTS `eauf_tests` (
#     `id` INT(11) NOT NULL AUTO_INCREMENT,
#     `title` VARCHAR(255) NOT NULL,
#     `description` TEXT NOT NULL,
#     `user_id` CHAR(32) NOT NULL,
#     `created` TIMESTAMP NOT NULL,
#     `changed` TIMESTAMP NOT NULL,
#     `options` TEXT NOT NULL,
#     PRIMARY KEY (`id`));

/**
 * eAufgaben conforming test definition
 */
class Test extends \SimpleORMap
{
    protected static function configure($config = array())
    {
        $config['db_table'] = 'eauf_tests';

        $config['has_and_belongs_to_many']['tasks'] = array(
            'class_name' => 'eAufgaben\\DB\\Task',
            'thru_table' => 'eauf_test_tasks',
            'thru_key' => 'task_id',
            'thru_assoc_key' => 'test_id'
        );

        $config['belongs_to']['owner'] = array(
            'class_name'  => '\\User',
            'foreign_key' => 'user_id');

        $config['has_many']['assignments'] = array(
            'class_name' => 'eAufgaben\\DB\\Assignment',
            'assoc_foreign_key' => 'test_id'
        );

        $config['serialized_fields']['options'] = 'JSONArrayObject';

        parent::configure($config);
    }
}
