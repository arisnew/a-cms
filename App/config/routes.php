<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'cms';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['article/(:any)'] = 'cms/article_single/$1'; //single article
$route['page/(:any)'] = 'cms/page_single/$1'; //single page
