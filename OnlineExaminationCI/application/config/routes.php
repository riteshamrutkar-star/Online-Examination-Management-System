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
$route['default_controller'] = 'Auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'Auth/index';
$route['logout'] = 'Auth/logout';

// English route aliases mapping to existing Indonesian-named controllers
// Master data
$route['student'] = 'Student';
$route['student/(.*)'] = 'Student/$1';
// Temporary backward-compatible aliases mapping Indonesian paths to new English controller
$route['mahasiswa'] = 'Student';
$route['mahasiswa/(.*)'] = 'Student/$1';
$route['lecturer'] = 'Lecturer';
$route['lecturer/(.*)'] = 'Lecturer/$1';
// Backward-compatible Indonesian aliases
$route['dosen'] = 'Lecturer';
$route['dosen/(.*)'] = 'Lecturer/$1';
$route['department'] = 'Department';
$route['department/(.*)'] = 'Department/$1';
// Backward-compatible Indonesian aliases
$route['jurusan'] = 'Department';
$route['jurusan/(.*)'] = 'Department/$1';
$route['course'] = 'Course';
$route['course/(.*)'] = 'Course/$1';
// Backward-compatible Indonesian aliases
$route['matkul'] = 'Course';
$route['matkul/(.*)'] = 'Course/$1';
$route['class'] = 'Classes';
$route['class/(.*)'] = 'Classes/$1';
// Backward-compatible Indonesian aliases
$route['kelas'] = 'Classes';
$route['kelas/(.*)'] = 'Classes/$1';

// Relations
$route['lecturer-class'] = 'LecturerClass';
$route['lecturer-class/(.*)'] = 'LecturerClass/$1';
// Backward-compatible Indonesian aliases
$route['kelasdosen'] = 'LecturerClass';
$route['kelasdosen/(.*)'] = 'LecturerClass/$1';

$route['department-course'] = 'DepartmentCourse';
$route['department-course/(.*)'] = 'DepartmentCourse/$1';
// Backward-compatible Indonesian aliases
$route['jurusanmatkul'] = 'DepartmentCourse';
$route['jurusanmatkul/(.*)'] = 'DepartmentCourse/$1';

// Features
$route['question'] = 'Soal';
$route['question/(.*)'] = 'Soal/$1';
$route['exam'] = 'Ujian';
$route['exam/(.*)'] = 'Ujian/$1';
// Features
$route['question'] = 'Soal';
$route['question/(.*)'] = 'Soal/$1';
$route['exam'] = 'Ujian';
$route['exam/(.*)'] = 'Ujian/$1';

// Exam results routes (specific before generic)
$route['exam-results/print/(:num)'] = 'Hasilujian/cetak/$1';
$route['hasilujian/print/(:num)']   = 'Hasilujian/cetak/$1';
$route['exam-results']              = 'Hasilujian';
$route['exam-results/(.*)']         = 'Hasilujian/$1';

// Direct alias for legacy/internal links using hasilujian
$route['hasilujian']                = 'Hasilujian';
$route['hasilujian/(.*)']           = 'Hasilujian/$1';
