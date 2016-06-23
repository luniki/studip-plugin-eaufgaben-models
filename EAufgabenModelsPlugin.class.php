<?php

/**
 * EAufgabenModelsPlugin.class.php
 *
 * ...
 *
 * @author  ELAN e.V.
 * @version 1.0
 */

class EAufgabenModelsPlugin extends StudIPPlugin implements SystemPlugin {
    public function __construct() {
        parent::__construct();

        if (!class_exists('eAufgaben\\DB\\Task')) {
            require_once 'composer_modules/autoload.php';
        }
    }
}
