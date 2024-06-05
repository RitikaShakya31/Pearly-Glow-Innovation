<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Webiste url
$route['gallery'] = 'Home/gallery';
$route['precisionpro'] = 'Home/precisionpro';
$route['product'] = 'Home/product';
$route['contact'] = 'Home/contact';
$route['about'] = 'Home/about';
$route['checkout'] = 'Home/checkout';
$route['catalog'] = 'Home/catalog';
$route['product-details'] = 'Home/product_details';
$route['sign-up'] = 'Home/sign_up';
$route['policies'] = 'Home/policies';
$route['login'] = 'Home/login';


/////////////////////     Admin     /////////////////

$route['admin'] = 'admin/AdminAuth/admin';
$route['adminLogout'] = 'admin/AdminAuth/adminLogout';

$route['dashboard'] = 'admin/AdminHome/dashboard';
$route['banner'] = 'admin/AdminHome/banner';
$route['gallery_list'] = 'admin/AdminHome/gallery';
$route['setting'] = 'admin/AdminHome/setting';
$route['testimonial-list'] = 'admin/AdminHome/testimonial_list';
$route['blog-list'] = 'admin/AdminHome/blog_list';
$route['promoCode'] = 'admin/AdminHome/promoCode';
$route['category-featured/(:any)/(:any)'] = 'admin/AdminHome/categoryFeatured/$1/$2';
$route['setDeliveryCharges'] = 'admin/AdminHome/setDeliveryCharges';

//  =>  User

$route['activeUser'] = 'admin/AdminHome/activeUser';
$route['inactiveUser'] = 'admin/AdminHome/inactiveUser';
$route['userStatus/(:any)/(:any)'] = 'admin/AdminHome/userStatus/$1/$2';
$route['userDetails/(:any)'] = 'admin/AdminHome/userDetails/$1';

// => Orders

$route['recentOrders'] = 'admin/AdminHome/recentOrders';
$route['acceptOrder'] = 'admin/AdminHome/acceptOrder';
$route['cancelOrder'] = 'admin/AdminHome/cancelOrder';
$route['acceptedOrders'] = 'admin/AdminHome/acceptedOrders';
$route['dispatchOrder/(:any)/(:any)'] = 'admin/AdminHome/dispatchOrder/$1/$2';
$route['dispatchOrders'] = 'admin/AdminHome/dispatchOrders';
$route['completedOrders'] = 'admin/AdminHome/completedOrders';
$route['cancelOrders'] = 'admin/AdminHome/cancelOrders';
$route['allOrders'] = 'admin/AdminHome/allOrders';
$route['contact_query'] = 'admin/AdminHome/contact_query';

// => Product

$route['categoryAll'] = 'admin/AdminProduct/categoryAll';
$route['categoryAdd'] = 'admin/AdminProduct/categoryAdd';
$route['galleryAdd'] = 'admin/AdminProduct/galleryAdd';
$route['blogAdd'] = 'admin/AdminProduct/blogAdd';
$route['testimonialAdd'] = 'admin/AdminProduct/testimonialAdd';
$route['subCategoryAll'] = 'admin/AdminProduct/subCategoryAll';
$route['subCategoryAdd'] = 'admin/AdminProduct/subCategoryAdd';

$route['getSubCategory'] = 'admin/AdminProduct/getSubCategory';
$route['productAll'] = 'admin/AdminProduct/productAll';
$route['productDetails'] = 'admin/AdminProduct/productDetails';
$route['productAdd'] = 'admin/AdminProduct/productAdd';
$route['productView'] = 'admin/AdminProduct/productView';
$route['getProductSubCategory'] = 'admin/AdminProduct/getProductSubCategory';
$route['productImageD/(:any)/(:any)'] = 'admin/AdminProduct/productImageD/$1/$2';
