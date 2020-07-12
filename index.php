<?
// $Id: indexphp,v0.14 2006/07/14 10:35:00 yoshis Exp $
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
include 'header.php';
//<script>history.go(-1);</script>
//redirect_header(XOOPS_URL.'/',0,'Back to XOOPS soon');
include XOOPS_ROOT_PATH.'/header.php';
$xoopsOption['template_main'] = 'popchat_index.html';

echo "<script language='JavaScript'>\n";echo "window.open('main.php','PopChat','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=yes,width=480,height=520');\n";
//echo "history.go(-1);\n";echo "</script>\n";

include_once XOOPS_ROOT_PATH.'/footer.php';
?>
