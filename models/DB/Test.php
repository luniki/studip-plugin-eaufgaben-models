<?php
namespace eAufgaben\DB;


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

        $config['serialized_fields']['options'] = 'JSONArrayObject';

        parent::configure($config);
    }
}
