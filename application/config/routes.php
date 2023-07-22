<?php
defined('BASEPATH') or exit('No direct script access allowed');



// Artikel
$route['artikel/(:any)'] = 'blog/artikel/$1';

// Home
$route['tentang-kami'] = 'home/tentang';
$route['visi-misi'] = 'home/visi';
$route['sejarah'] = 'home/sejarah';
$route['struktur-menteri'] = 'home/struktur';
$route['ukm'] = 'home/ukm';
$route['contact'] = 'home/contact';
$route['berita-program'] = 'home/beritap';
$route['detail-ukm/(:num)'] = 'home/detUkm/$1';
$route['detail-kem/(:num)'] = 'home/detKem/$1';

$route['default_controller'] = 'home';
$route['404_override'] = 'blog/notfound';
$route['translate_uri_dashes'] = FALSE;
