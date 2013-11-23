<?php
/*
 * @Author: Avinash Singh Rathi
 * @Date: 23 Nov 2013
 * @Desc:
 * This file is the root file on which the urls are redirected.
 * This file is also intialising the router so that the router can fetch the exact url
 * Constants are also defined here which will be used  in the existing CMS\
 * 
 */

/*
 *  Comment below lines for the debugging and development. Uncomment the below lines for developed builds  
 */ 
//ini_set('display_errors','Off'); 
//error_reporting(0);
//error_reporting(E_ALL);


// defining the paths
define("_SITE_PATH_",  realpath('.'));
define('_BASE_URL_', '');

require_once '/classes/main.php';

//Iniatializing and calling the router
$router=new router();
$router->route();
?>