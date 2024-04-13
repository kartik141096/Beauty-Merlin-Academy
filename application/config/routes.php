<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Config
$route['default_controller'] = 'web';
$route['404_override'] = 'web/custom_404';
$route['translate_uri_dashes'] = FALSE;

// Programs
$route['makeup-artist'] = "web/makeup_artist";
$route['hair-stylist'] = "web/hair_stylist";
$route['nail-technician'] = "web/nail_technician";
$route['beauty-therapy'] = "web/beauty_therapy";
$route['cosmetology'] = "web/cosmetology";

$route['about-us'] = "web/about_us";
$route['verticals'] = "web/verticals";
$route['partner-with-us'] = "web/partner_with_us";

$route['contact-us'] = "web/contact_us";
$route['contact-submit'] = "web/contact_submit";







$route['makeup-academy-in-delhi'] = "web/landing";
$route['makeup-academy-in-delhi-submit'] = "web/landing_submit";

$route['privacy-policy'] = "web/privacy_policy";
$route['terms-and-conditions'] = "web/terms_and_conditions";

$route['certificate'] = "web/certificate";