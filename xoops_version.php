<?php

$modversion['name'] = _MI_POPCHAT_NAME;
$modversion['version'] = "0.14";
$modversion['description'] = _MI_POPCHAT_DESC;
$modversion['author'] = "Yoshi Sakai";
$modversion['credits'] = "Presented By Bluemoon inc. 
The original source as Marquee by Herv Thouzard http://www.herve-thouzard.com 
Sajax and Wall by ModernMethod http://www.modernmethod.com/sajax/";
$modversion['help'] = "help.html";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "popchat.png";
$modversion['dirname'] = "popchat";

//Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Menu
$modversion['hasMain'] = 1;

// Blocks
$modversion['blocks'][1]['file'] = "marquee_bloc.php";
$modversion['blocks'][1]['name'] = _MI_POPCHAT_NAME;
$modversion['blocks'][1]['description'] = _MI_POPCHAT_DESC;
$modversion['blocks'][1]['show_func'] = "chat_marquee_show";
$modversion['blocks'][1]['options'] = "1";
$modversion['blocks'][1]['edit_func'] = "chat_marquee_edit";
$modversion['blocks'][1]['template'] = 'marquee_block.html';

// Search
$modversion['hasSearch'] = 0;

// Smarty
$modversion['use_smarty'] = 1;

// Templates
$modversion['templates'][1]['file'] = 'popchat_index.html';
$modversion['templates'][1]['description'] = '';

// MySQL
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
$modversion['tables'][0] = "popchat_marquee";
$modversion['tables'][1] = "popchat_message";
$modversion['tables'][2] = "popchat_member";

//xoops comments
$modversion['hasComments'] = 1;
$modversion['comments']['itemName'] = 'task_id';
$modversion['comments']['pageName'] = 'index.php';

// Notification

$modversion['hasNotification'] = 1;

$modversion['notification']['category'][1]['name'] = 'global';
$modversion['notification']['category'][1]['title'] = _MI_POPCHAT_GLOBAL_NOTIFY;
$modversion['notification']['category'][1]['description'] = _MI_POPCHAT_GLOBAL_NOTIFYDSC;
$modversion['notification']['category'][1]['subscribe_from'] = array('index.php');

$modversion['notification']['category'][2]['name'] = 'category';
$modversion['notification']['category'][2]['title'] = _MI_POPCHAT_TASK_NOTIFY;
$modversion['notification']['category'][2]['description'] = _MI_POPCHAT_TASK_NOTIFYDSC;
$modversion['notification']['category'][2]['subscribe_from'] = array('index.php');
$modversion['notification']['category'][1]['item_name'] = 'chat_id';
$modversion['notification']['category'][1]['allow_bookmark'] = 1;

$modversion['notification']['category'][3]['name'] = 'event';
$modversion['notification']['category'][3]['title'] = _MI_POPCHAT_GLOBAL_NOTIFY;
$modversion['notification']['category'][3]['description'] = _MI_POPCHAT_GLOBAL_NOTIFYDSC;
$modversion['notification']['category'][3]['subscribe_from'] = array('index.php');
$modversion['notification']['category'][1]['item_name'] = 'event_id';
$modversion['notification']['category'][1]['allow_bookmark'] = 1;

$modversion['notification']['event'][1]['name'] = 'new_event';
$modversion['notification']['event'][1]['category'] = 'global';
$modversion['notification']['event'][1]['title'] = _MI_POPCHAT_NEWCHAT_NOTIFY;
$modversion['notification']['event'][1]['caption'] = _MI_POPCHAT_NEWCHAT_NOTIFYCAP;
$modversion['notification']['event'][1]['description'] = _MI_POPCHAT_NEWCHAT_NOTIFYDSC;
$modversion['notification']['event'][1]['mail_template'] = 'chat_new_notify';
$modversion['notification']['event'][1]['mail_subject'] = _MI_POPCHAT_NEWCHAT_NOTIFYSBJ;

$modversion['notification']['event'][2]['name'] = 'new_event';
$modversion['notification']['event'][2]['category'] = 'category';
$modversion['notification']['event'][2]['title'] = _MI_POPCHAT_NEWTASK_NOTIFY;
$modversion['notification']['event'][2]['caption'] = _MI_POPCHAT_NEWTASK_NOTIFYCAP;
$modversion['notification']['event'][2]['description'] = _MI_POPCHAT_NEWTASK_NOTIFYDSC;
$modversion['notification']['event'][2]['mail_template'] = 'chat_new_notify';
$modversion['notification']['event'][2]['mail_subject'] = _MI_POPCHAT_NEWTASK_NOTIFYSBJ;

?>
