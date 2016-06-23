<?php
namespace eAufgaben\DB;

# CREATE TABLE IF NOT EXISTS `eauf_assignment_attempts` (
#     `id` INT(11) NOT NULL AUTO_INCREMENT,
#     `assignment_id` INT(11) NOT NULL,
#     `user_id` CHAR(32) NOT NULL,
#     `start` TIMESTAMP NOT NULL,
#     `end` TIMESTAMP NULL,
#     `options` TEXT NOT NULL,
#     PRIMARY KEY (`id`));

/**
 * eAufgaben conforming assignment attempt definition
 */
class Attempt extends \SimpleORMap
{
    protected static function configure($config = array())
    {
        $config['db_table'] = 'eauf_assignment_attempts';

        $config['belongs_to']['assignment'] = array(
            'class_name' => 'eAufgaben\\DB\\Assignment',
            'foreign_key' => 'assignment_id');

        $config['serialized_fields']['options'] = 'JSONArrayObject';

        parent::configure($config);
    }
}
