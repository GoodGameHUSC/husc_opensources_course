<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 9/23/19
 * Time: 8:57 AM
 */

namespace controller;

class Controller {
    protected function render($filename = 'index') {
        require(ROOT_DIRECTORY . '/pages/' . $filename . '.php');
    }
}

