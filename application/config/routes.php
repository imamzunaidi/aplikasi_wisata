<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//siswa
$route['login'] = 'auth';
$route['detail-berkas'] = 'calon/data_detail_berkas';
$route['cetak-berkas'] = 'calon/data_detail_berkas/cetak_berkas';
$route['riwayat-pendaftaran'] = 'calon/data_detail_berkas/riwayat_pendaftaran';

// Auth
$route['login-siswa'] = 'auth/login_siswa';
$route['register-siswa'] = 'auth/register_siswa';
$route['lengkapi-biodata'] = 'auth/lengkapi_biodata';
$route['lengkapi-berkas'] = 'auth/lengkapi_berkas';

$route['pendaftaran'] = 'auth/pendaftaran';
$route['logout'] = 'auth/logout';

//admin
$route['dashboard'] = 'admin/dashboard';
$route['data-admin'] = 'admin/data_admin';
$route['data-member'] = 'admin/data_member';
$route['data-admin-desa'] = 'admin/data_admin_desa';
$route['data-kuliner-admin'] = 'admin/Data_kuliner';
$route['data-galeri'] = 'admin/data_galeri';
$route['data-alur'] = 'admin/data_alur';
$route['data-profile'] = 'admin/data_profile_sekolah';
$route['data-home-stay-admin'] = 'admin/data_homestay';
$route['data-informasi'] = 'admin/data_informasi';
$route['laporan-keterima'] = 'admin/data_keterima';
$route['laporan-ketolak'] = 'admin/data_ketolak';
$route['data-pesan'] = 'admin/data_pesan';



