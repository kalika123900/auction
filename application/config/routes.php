<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

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
| URI contains no data. In the above example, the 'welcome' class
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

$route['default_controller']                            =  'FrontendController';
$route['subject/(:any)']                                =  'FrontendController/subject/$1';
$route['courses']                                       =  'FrontendController/courses';
$route['product/(:any)']                                =  'FrontendController/product_landing/$1';
// $route['payment-process']                            =  'FrontendController/payment_process';
// $route['payment/success']                            =  'FrontendController/payment_success';
// $route['payment/failure']                            =  'FrontendController/payment_failure';
// $route['payment/ipn']                                =  'FrontendController/payment_ipn';
//$route['checkout']                                    =  'FrontendController/checkout/$1';
//$route['(:any)/checkout/add']                         =  'FrontendController/add/$1';
//$route['studying/(:any)']                             =  'FrontendController/study/$1';
//$route['(:any)/checkout/remove']                      =  'FrontendController/remove/$1';
$route['profile']                                       =  'FrontendController/profile';
$route['logout']                                        =  'FrontendController/logout';
$route['privacy-policy']                                =  'FrontendController/privacy_policy';
$route['pay-now']                                       =  'FrontendController/pay_now';
$route['faq']                                           =  'FrontendController/faq';
//$route['approval-wait']                               =  'FrontendController/approval_wait';
$route['search']                                        =  'FrontendController/search';
$route['contact-us']                                    =  'FrontendController/contactus';
$route['add-product']                                   =  'FrontendController/product_add';
$route['profile-setting']                               =  'FrontendController/profile_setting';
$route['profile-dashboard']                             =  'FrontendController/profile_dashboard';
$route['profile-checked']                               =  'FrontendController/profile_checked';
$route['messenger/(:any)']                              =  'FrontendController/inbox/$1';

//for url for product

$route['administrator']                                 =  'AdminController';
$route['admin/dashboard']                               =  'AdminController/dashboard';
$route['admin/logout']                                  =  'AdminController/logout';

$route['admin/user/add']                                =  'AdminController/add';
$route['admin/user/edit/(:num)']                        =  'AdminController/edit/$1';
$route['admin/user']                                    =  'AdminController/list';
$route['admin/user/new-companies']                      =  'AdminController/awaiting_companies';

$route['admin/category']                                =  'CategoryMaster';
$route['admin/category/add']                            =  'CategoryMaster/add';
$route['admin/category/update/(:num)']                  =  'CategoryMaster/getdetails/$1';
$route['admin/category/delete/(:num)']                  =  'CategoryMaster/delete/$1';

$route['admin/course/questions/(:num)']                 =  'QuestionController/index/$1';
$route['admin/course/questions/add/(:num)']             =  'QuestionController/add/$1';
$route['admin/course/questions/edit/(:num)']            =  'QuestionController/edit/$1';
$route['admin/course/questions/delete/(:num)']          =  'QuestionController/delete/$1';

$route['admin/course/delete/(:num)']                    =  'CourseMaster/deletecourse/$1';
$route['admin/course/edit/(:num)']                      =  'CourseMaster/updatecourse/$1';
$route['admin/course/add']                              =  'CourseMaster/addcourse';
$route['admin/course']                                  =  'CourseMaster';

$route['admin/course/chapter/(:num)']                   =  'ChapterMaster/index/$1';
$route['admin/course/chapter/add/(:num)']               =  'ChapterMaster/add/$1';
$route['admin/course/chapter/edit/(:num)']              =  'ChapterMaster/edit/$1';
$route['admin/course/chapter/delete/(:num)']            =  'ChapterMaster/delete/$1';

$route['admin/coupons/delete/(:num)']                   =  'CouponsMaster/delete/$1';
$route['admin/coupons/create']                          =  'CouponsMaster/create';
$route['admin/coupons']                                 =  'CouponsMaster';

$route['admin/orders']                                  =  'OrderMaster';
$route['admin/orders/(:num)']                           =  'OrderMaster/single_order';

$route['404_override']                                  =  'FrontendController/four_not_four';
$route['translate_uri_dashes']                          =  FALSE;
$route['api']                                           =  'ApiController';
