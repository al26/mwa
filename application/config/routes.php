<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'frontend';
$route['profil/personalia'] = 'frontend/personalia';
$route['sk-peraturan'] = 'frontend/skp';
$route['berita/kategori/(:any)'] = 'blog/index/$1';
$route['berita/kategori/(:any)/(:num)'] = 'blog/index/$1/$2';
$route['berita/(:any)'] = 'blog/view/$1';
$route['kotak-saran'] = 'frontend/saran';
$route['kirim-pesan'] = 'validation/send_message';
$route['create-post'] = 'validation/create_post';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

























$route['login']='auth';
$route['admin']='admin/index';
$route['logout']='auth/destroy';
$route['post']='admin/view_post';
$route['new-post']='admin/add_post';
