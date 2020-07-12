<?php
// $Id: modinfo.php,v 1.00 2005/01/11 15:47:43 Y.Sakai Exp $ 

define('_MI_POPCHAT_NAME', 'Chat');
define('_MI_POPCHAT_DESC', 'XooPopChat');
define('_MI_POPCHAT_MENU01', 'Preference');
define('_MI_POPCHAT_IMG_DESC', 'Popup Chat Module for XOOPS');

// Text for notifications

define('_MI_POPCHAT_GLOBAL_NOTIFY', 'Global');
define('_MI_POPCHAT_GLOBAL_NOTIFYDSC', 'Global forum notification options.');

define ('_MI_POPCHAT_PROJECT_NOTIFY', 'Chat');
define ('_MI_POPCHAT_PROJECT_NOTIFYDSC', 'Notification options that apply to the current chat.');

define ('_MI_POPCHAT_TASK_NOTIFY', 'Task');
define ('_MI_POPCHAT_TASK_NOTIFYDSC', 'Notification options that apply to the current task.');

define ('_MI_POPCHAT_NEWCHAT_NOTIFY', 'New Chat Opened');
define ('_MI_POPCHAT_NEWCHAT_NOTIFYCAP', 'Notify me of new chat open in the current chat.');
define ('_MI_POPCHAT_NEWCHAT_NOTIFYDSC', 'Receive notification when a new chat open to the current chat.');
define ('_MI_POPCHAT_NEWCHAT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: auto-notify : New chat opened ');

define ('_MI_POPCHAT_NEWTASK_NOTIFY', 'New Member Spoken');
define ('_MI_POPCHAT_NEWTASK_NOTIFYCAP', 'Notify me of new member in the current chat.');
define ('_MI_POPCHAT_NEWTASK_NOTIFYDSC', 'Receive notification when a new member spoken to the current chat.');
define ('_MI_POPCHAT_NEWTASK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New member in chat');

define ('_MI_POPCHAT_EDITTASK_NOTIFY', 'Edit Chat');
define ('_MI_POPCHAT_EDITTASK_NOTIFYCAP', 'Notify me of edit in the current chat.');
define ('_MI_POPCHAT_EDITTASK_NOTIFYDSC', 'Receive notification when a edit to the current chat.');
define ('_MI_POPCHAT_EDITTASK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: auto-notify : Edit in chat');
?>
