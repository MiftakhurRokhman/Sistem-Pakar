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
$route['default_controller'] = 'C_admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//$route['nama-rute-baru'] = 'NamaController/nama_function';
$route['profiler'] = "Profiler_controller"; 
$route['profiler/disable'] = "Profiler_controller/disable";

$route['dashboard'] = 'C_admin';

$route['login'] = 'C_login';
$route['logout'] = 'C_login/logout';
$route['daftar'] = 'C_login/daftar';

$route['tambah_mahasiswa'] = 'C_login/tambah_aksi';

$route['aksi_login'] = 'C_login/auth';

$route['atribut'] = 'C_atribut';
$route['tambah_atribut'] = 'C_atribut/tambah_aksi';
$route['hapus_atribut'] = 'C_atribut/hapus';
$route['update_atribut'] = 'C_atribut/update';

$route['probabilitas'] = 'C_probabilitas';

$route['datatesting'] = 'C_inputdatatesting';
$route['datamahasiswa'] = 'C_user/mahasiswa';
$route['inputdatatesting'] = 'C_inputdatatesting/data_testing';


$route['nilaiatribut'] = 'C_nilaiatribut';
$route['tambah_nilaiatribut'] = 'C_nilaiatribut/tambah_aksi';
$route['hapus_nilaiatribut'] = 'C_nilaiatribut/hapus';
$route['update_nilaiatribut'] = 'C_nilaiatribut/update';

$route['tambah_aksi_mhs'] = 'C_user/tambah_aksi';

$route['tables'] = 'C_datatables';
$route['inputdatatraning'] = 'C_Inputdatatraning';
$route['tambah_data'] = 'C_Inputdatatraning/tambah_aksi';

$route['datatraning'] = 'C_datatraning';
