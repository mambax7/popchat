//  ------------------------------------------------------------------------ //
//                XooPopChat - XOOPS2 Chat module                            //
//                    Copyright (c) 2004 Bluemoon inc.                       //
//                       <http://www.bluemooninc.biz/>                       //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
This is a Popup Chat modules for XOOPS2.

Future:
1.Open a pop window for chat. You can operate XOOPS separately.
2.Call from chat window with private message.
3.Leave bihind and call anybody a recent message with marquee block in XOOPS top menu.
4.Event notification supported. You can get a notice via email.
5.Replaceable user name to real name. 

The original sources as 
  Marquee by Herv Thouzard, http://www.herve-thouzard.com 
  Sajax and Wall by ModernMethod, http://www.modernmethod.com/sajax/

Versions:
v0.00 2004/11/13 Alpha release.
v0.01 2004/11/17 Log and Input are divide to Flame. Add French by Outch.
v0.02 2004/11/26 Add Who's Online and send Private Message from chat window.
v0.03 2005/01/10 Add Marquee,Admin menu,SQL Table. Delete log folder.
rev.a 2005/01/11 Bugix for auto link and single quotation. fix multi-language.
rev.b 2005/01/11 Bugix for MySQL install error of some version of MySQL. change prameter name in modinfo.php.
v0.04 2005/01/18 Add Event Notification. Add a parameter of replace user name to real name.
rev.a 2005/01/29 Fix about the form collapses when the pop window opened was corrected. 
rev.b 2005/01/30 Update a French language by Outch.
rev.c 2005/01/31 Bugfix about double display chat message to single.
rev.d 2005/02/28 Bugfix about it couldn't use a slash char.
rev.e 2005/03/04 Bugfix about notification.
v0.10 2006/01/18 Beta release. Supoorted AJAX chat system.
v0.11 2006/01/22 Adjust time display to user time zone at chat window.
v0.12 2006/02/19 The data name changed for MySQL5 (loop to chatloop).
v0.13 2006/07/08 Login user can send message by enter key.
v0.14 2006/07/14 Security update for XSS vulnerability of system globals.

<Usage>

--- PLEASE UNINSTALL BEFORE INSTALL NEW VERSION. ---
        (revision update are unneccecsally)

Edit a config.php, if you want modify.