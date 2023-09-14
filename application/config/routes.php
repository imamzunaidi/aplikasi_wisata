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

//admin
$route['login'] = 'Auth';
$route['logout'] = 'Auth/logout';
$route['dashboard'] = 'admin/dashboard';
$route['data-admin'] = 'admin/data_admin';
$route['data-member'] = 'admin/data_member';
$route['data-admin-desa'] = 'admin/data_admin_desa';
$route['data-kuliner-admin'] = 'admin/Data_kuliner';
$route['data-galeri'] = 'admin/data_galeri';
$route['data-alur'] = 'admin/data_alur';
$route['data-profile'] = 'admin/data_profile_sekolah';
$route['data-home-stay-admin'] = 'admin/data_homestay';
$route['data-souvenir-admin'] = 'admin/data_souvenir';
$route['data-karcis-admin'] = 'admin/data_karcis';
$route['data-informasi'] = 'admin/data_informasi';
$route['laporan-keterima'] = 'admin/data_keterima';
$route['laporan-ketolak'] = 'admin/data_ketolak';
$route['data-pesan'] = 'admin/data_pesan';
$route['data-bank'] = 'admin/data_bank';
$route['data-pemesanan-homestay'] = 'admin/data_pemesanan_homestay';
$route['data-pemesanan-souvenir'] = 'admin/data_pemesanan_souvenir';
$route['data-pemesanan-kuliner'] = 'admin/data_pemesanan_kuliner';
$route['data-pemesanan-karcis'] = 'admin/data_pemesanan_karcis';
$route['data-pembayaran-admin'] = 'admin/data_pembayaran';




//pengunjung
$route['home'] = 'home';
$route['home-stay'] = 'pengunjung/Data_homestay';
$route['kuliner'] = 'pengunjung/Data_kuliner';
$route['karcis'] = 'pengunjung/Data_karcis';
$route['souvenir'] = 'pengunjung/Data_souvenir';
$route['pesanan-homestay'] = 'pengunjung/Data_pemesanan_homestay';
$route['pesanan-kuliner'] = 'pengunjung/Data_pemesanan_kuliner';
$route['pesanan-karcis'] = 'pengunjung/Data_pemesanan_karcis';
$route['pesanan-souvenir'] = 'pengunjung/Data_pemesanan_souvenir';
$route['pembayaran'] = 'pengunjung/Data_pembayaran';
$route['riwayat-homestay'] = 'pengunjung/Data_riwayat_homestay';
$route['riwayat-kuliner'] = 'pengunjung/Data_riwayat_kuliner';
$route['riwayat-karcis'] = 'pengunjung/Data_riwayat_karcis';
$route['riwayat-souvenir'] = 'pengunjung/Data_riwayat_souvenir';




