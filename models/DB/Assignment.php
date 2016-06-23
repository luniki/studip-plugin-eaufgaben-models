<?php
namespace eAufgaben\DB;


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

        $config['serialized_fields']['options'] = 'JSONArrayObject';

        parent::configure($config);
    }
}
