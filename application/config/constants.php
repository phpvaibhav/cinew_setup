<?php

/* Application specific constants */

//keys (session, third party API keys like google, stripe etc)  

/* Firebase API key for notifications */
define('NOTIFICATION_KEY','AAAARhoraBA:APA91bF60FScjvb-3LkAo5zyMMn24xfNRIPLA1Pc0rYI-ijRz0a1ITij6keKaz37SjVP1D5qq9Kl5FXwXaHj2fXs1qo9wkDEA4NjyXxApXFcQkqrQ7n1luy-HUElSOYTJZ8LU8w_1Vlz'); 

/* session keys */
define('USER_SESS_KEY', 'app_user_sess'); 
define('ADMIN_USER_SESS_KEY', 'app_admin_user_sess');

//DB tables
define('USERS', 'users');
define('NOTIFICATIONS', 'notifications');

//uploads path
define('USER_AVATAR_PATH', 'uploads/user_avatar/'); //user avatar
define('USER_DEFAULT_AVATAR', 'uploads/user_avatar/user_placeholder.png'); //user placeholder image

//Title, Site name, Copyright etc
define('SITE_NAME','Scenekey business'); //your project name
define('COPYRIGHT','&copy; ' . date('Y') . ' - ' . date("Y",strtotime("-1 year")). ', YOURPROJECTNAME. All rights reserved.');
define('INFO_EMAIL','info@project.com'); //your project name


//common messages
define('UNKNOWN_ERR', 'Something went wrong. Please try again');
define('FAIL', 'fail');
define('SUCCESS', 'success');
define('BAD_REQUEST',	'400');

//Asset path (In place of "APP_" you can use your own project specific prefix)
/* Frontend */
define('APP_ASSETS_JS', 'frontend_assets/js/');
define('APP_ASSETS_CSS', 'frontend_assets/css/');
define('APP_ASSETS_PLUGIN', 'frontend_assets/plugins/');
define('APP_ASSETS_IMG', 'frontend_assets/img/');

/* Admin */
define('APP_ADMIN_ASSETS_JS', 'backend_assets/js/');
define('APP_ADMIN_ASSETS_CSS', 'backend_assets/css/');
define('APP_ADMIN_ASSETS_PLUGIN', 'backend_assets/plugins/');
define('APP_ADMIN_ASSETS_IMG', 'backend_assets/img/');