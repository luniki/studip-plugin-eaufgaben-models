<?php
namespace eAufgaben\DB;


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

        $config['belongs_to']['user'] = array(
            'class_name' => '\\User',
            'foreign_key' => 'user_id');

        $config['serialized_fields']['options'] = 'JSONArrayObject';

        parent::configure($config);
    }
}
