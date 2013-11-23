<?php

/*
 *@Author: Avinash Singh Rathi
 * @Date: 23-Nov-2013
 * @Desc:
 * This is the file developed for the fetching the all classes file
 * This file is also resposible to load the configurations of the CMS
 * 
 */

function my_autoloader($class) {
    @include_once $class.'.class.php';
}

spl_autoload_register('my_autoloader');

?>
