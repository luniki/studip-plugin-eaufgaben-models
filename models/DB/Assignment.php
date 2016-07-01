<?php
namespace eAufgaben\DB;

# CREATE TABLE IF NOT EXISTS `eauf_assignments` (
#     `id` INT(11) NOT NULL AUTO_INCREMENT,
#     `test_id` INT(11) NOT NULL,
#     `range_type` ENUM('course', 'global', 'group', 'institute', 'user') NOT NULL,
#     `range_id` CHAR(32) NOT NULL,
#     `type` VARCHAR(64) NOT NULL,
#     `start` TIMESTAMP NOT NULL,
#     `end` TIMESTAMP NULL,
#     `active` TINYINT(1) NOT NULL,
#     `options` TEXT NOT NULL,
#     PRIMARY KEY (`id`));

/**
 * eAufgaben conforming assignment definition
 */
class Assignment extends \SimpleORMap
{
    protected static function configure($config = array())
    {
        $config['db_table'] = 'eauf_assignments';

        $config['belongs_to']['test'] = array(
            'class_name' => 'eAufgaben\\DB\\Test',
            'foreign_key' => 'test_id');

        $config['has_many']['attempts'] = array(
            'class_name' => 'eAufgaben\\DB\\Test',
            'assoc_foreign_key' => 'assignment_id',
        );

        $config['has_many']['responses'] = array(
            'class_name' => 'eAufgaben\\DB\\Response',
            'assoc_foreign_key' => 'assignment_id',
        );

        // TODO: range_type/range_id?

        $config['serialized_fields']['options'] = 'JSONArrayObject';

        parent::configure($config);
    }
}
