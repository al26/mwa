<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'frontend';
$route['profil/penjelasan-umum'] = 'frontend/penjelasan_umum';
$route['profil/personalia'] = 'frontend/personalia';
$route['profil/komite-audit'] = 'frontend/komite_audit';
$route['profil/mwa-um/(:any)'] = 'frontend/mwa_um/$1';
$route['sk-peraturan'] = 'frontend/skp';
$route['program-kerja'] = 'frontend/proker';
$route['berita/kategori/(:any)'] = 'blog/index/$1';
$route['berita/kategori/(:any)/(:num)'] = 'blog/index/$1/$2';
$route['berita/(:any)'] = 'blog/view/$1';
$route['berita/cari/(:any)'] = 'blog/showSearchResult/$1';
$route['berita/cari/(:any)/(:num)'] = 'blog/showSearchResult/$1/$2';
$route['profil/mwa-um/(:any)/read/(:any)'] = 'frontend/read_article/$2';
$route['cari-berita'] = 'blog/proses_cari';
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
$route['kelola-fk'] = 'validation/kelolaFK';
$route['delete-personalia/(:num)'] = 'admin/delete_personalia/$1';
$route['HapusPK/(:num)'] = 'admin/Hapus_PK/$1';
$route['SettingAdmin']='admin/SettingAdmin';

$route['UsersView'] = 'admin/UsersView';
$route['hapus-user/(:num)'] = 'admin/HapusUser/$1';
$route['AddUser'] = 'admin/AddUser';
$route['StatusUpdate/(:num)'] = 'validation/StatusUpdate/$1';
$route['UpdateStatus/(:num)'] = 'admin/UpdateStatus/$1';
$route['ValidationUser'] = 'validation/ValidationUser';
$route['UpdateUsername/(:num)'] = 'admin/UpdateUsername/$1';
$route['VUserUpdate/(:num)'] = 'validation/VUserUpdate/$1';
$route['UpdatePassword/(:num)'] = 'admin/UpdatePassword/$1';
$route['VpassUpdate/(:num)'] = 'validation/VpassUpdate/$1';
$route['user'] = 'User';
$route['SettingUser'] = 'user/SettingUser';
$route['post-user']='user/view_post';
$route['new-post-user'] = 'user/add_post';
$route['delete-post/(:num)'] = 'user/delete_post/$1';
$route['detail-post-user/(:num)']='user/get_detail_post/$1';
$route['update-post-user/(:num)']='user/get_edit_post/$1';
$route['PreviewUser']='user/getPreview';
$route['comment-user']='user/commentUser';
$route['AllReply_user']='user/AllReply';
















 

$route['hapus-sk-peraturan/(:num)']='admin/hapusSKPeraturan/$1';
$route['login']='auth';
$route['admin']='admin/view_post';
$route['logout']='auth/destroy';
$route['post']='admin/view_post';
$route['new-post']='admin/add_post';
$route['input_post']='admin/verif_post';
$route['update-post/(:num)']='admin/get_edit_post/$1';
$route['doUpdatePost/(:num)']='validation/do_updatePost/$1';
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
$route['reply-message'] = 'validation/reply_message';

$route['new_comment/(:any)/(:any)']='validation/new_comment/$1/$2';
$route['user-comment/(:any)/(:any)']='validation/user_comment/$1/$2';
$route['comment']='admin/inbox_comment';
$route['inbox-comment']='admin/inbox_comment';
$route['read_comment/(:any)']='admin/read_comment/$1';
$route['read_comment_user/(:any)']='user/read_comment/$1';
$route['reply/(:any)']='admin/reply_comment/$1';
$route['replyUser/(:any)']='user/reply_comment/$1';
$route['do_reply/(:any)']='validation/reply_comment/$1';
$route['ViewReply/(:num)']='admin/ViewReply/$1';
$route['AllReply']='admin/AllReply';
$route['Deletecomment/(:any)']='admin/Delete_comment/$1';
$route['DeletecommentUser/(:any)']='user/Delete_comment/$1';
$route['TrashComment']='admin/Trash_Comment';
$route['TrashComment_user']='user/Trash_Comment';
$route['DeleteReply/(:any)']='admin/DeleteReply/$1';
$route['DeleteReplyUser/(:any)']='user/DeleteReply/$1';
$route['UpdateReply/(:any)']='admin/UpdateReply/$1';
$route['UpdateReplyUser/(:any)']='user/UpdateReply/$1';
$route['doUpdateReply/(:num)']='validation/doUpdate_Reply/$1';
$route['DeletePermanently/(:any)']='admin/Delete_Permanently/$1';
$route['DeletePUser/(:any)']='user/Delete_Permanently/$1';
$route['RestorageComment/(:any)']='admin/Restorage_Comment/$1';
$route['RestorageCommentUser/(:any)']='user/Restorage_Comment/$1';
$route['viewCategory']='admin/view_Category/';
$route['addCategory']='validation/add_category';
$route['DeleteKategori/(:num)']='admin/Delete_Kategori/$1';
$route['UpdateKategori/(:num)']='validation/Update_Kategori/$1';
