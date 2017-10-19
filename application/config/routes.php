<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'frontend';
$route['profil/penjelasan-umum'] = 'frontend/penjelasan_umum';
$route['profil/personalia'] = 'frontend/personalia';
$route['profil/komite-audit'] = 'frontend/komite_audit';
$route['sk-peraturan'] = 'frontend/skp';
$route['program-kerja'] = 'frontend/proker';
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
$route['input_post']='admin/verif_post';
$route['update-post/(:num)']='admin/get_edit_post/$1';
$route['input_update/(:num)']='admin/verif_edit_post/$1';
$route['detail-post/(:num)']='admin/get_detail_post/$1';
$route['hapus-post/(:num)']='admin/delete_post/$1';
$route['message']='admin/message';
$route['Inbox']='admin/message';
$route['Sent']='admin/sent_message';
$route['Drafts']='admin/Drafts_message';
$route['Trash']='admin/Trash_message';