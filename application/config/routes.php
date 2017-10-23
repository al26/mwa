<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'frontend';
$route['profil/penjelasan-umum'] = 'frontend/penjelasan_umum';
$route['profil/personalia'] = 'frontend/personalia';
$route['profil/komite-audit'] = 'frontend/komite_audit';
$route['profil/mwa-um'] = 'frontend/mwa_um';
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


$route['page/edit/(:num)'] = 'admin/edit_page/$1';
$route['edit-page/(:num)'] = 'validation/update_page/$1';
$route['kelola-personalia/(:any)/(:num)'] = 'validation/kelolaPersonalia/$1/$2';
$route['kelola-skp/(:any)/(:any)'] = 'validation/kelolaSKP/$1/$2';
$route['kelola-proker/(:any)'] = 'validation/kelolaProker/$1';


















 


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
$route['read_message/(:num)']='admin/read_message/$1';
$route['Save/(:num)']='admin/Save/$1';
$route['Delete/(:num)']='admin/sendTrash/$1';
$route['read_message_hapus/(:num)']='admin/read_message_hapus/$1';
$route['Delete-Permanent/(:num)']='admin/permanetDelete/$1';

$route['new_comment/(:any)/(:any)']='validation/new_comment/$1/$2';
$route['comment']='admin/inbox_comment';
$route['inbox-comment']='admin/inbox_comment';
$route['read_comment/(:any)']='admin/read_comment/$1';
$route['reply/(:any)']='admin/reply_comment/$1';
$route['do_reply/(:any)']='validation/reply_comment/$1';
$route['ViewReply/(:num)']='admin/ViewReply/$1';
$route['AllReply']='admin/AllReply';
$route['Deletecomment/(:any)']='admin/Delete_comment/$1';
$route['TrashComment']='admin/Trash_Comment';
$route['DeleteReply/(:any)']='admin/DeleteReply/$1';
$route['UpdateReply/(:any)']='admin/UpdateReply/$1';
$route['doUpdateReply/(:num)']='validation/doUpdate_Reply/$1';
$route['DeletePermanently/(:any)']='admin/Delete_Permanently/$1';
$route['RestorageComment/(:any)']='admin/Restorage_Comment/$1';

