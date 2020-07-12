<?
		$isadmin = 0;
		echo '<table  width="100%" cellspacing="1" class="outer"><tr><th colspan="3">'._WHOSONLINE.'</th></tr>';
		$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
		$online_handler =& xoops_gethandler('online');
		$online_total =& $online_handler->getCount();
		$limit = ($online_total > 20) ? 20 : $online_total;
		$criteria = new CriteriaCompo();
		$criteria->setLimit($limit);
		$criteria->setStart($start);
		$onlines =& $online_handler->getAll($criteria);
		$count = count($onlines);
		$module_handler =& xoops_gethandler('module');
		$modules =& $module_handler->getList(new Criteria('isactive', 1));
		$onlineuids='';
		for ($i = 0; $i < $count; $i++) {
			if ($onlines[$i]['online_uid'] == 0) {
				$onlineUsers[$i]['user'] = '';
			} else {
				$onlineUsers[$i]['user'] =& new XoopsUser($onlines[$i]['online_uid']);
				if ($onlineuids) $onlineuids.=","; 
				$onlineuids .= $onlines[$i]['online_uid'];
			}
			$onlineUsers[$i]['ip'] = $onlines[$i]['online_ip'];
			$onlineUsers[$i]['updated'] = $onlines[$i]['online_updated'];
			$onlineUsers[$i]['module'] = ($onlines[$i]['online_module'] > 0) ? $modules[$onlines[$i]['online_module']] : '';
		}
//		chat::offlineMember($onlineuids);
		$isadmin = ($xoopsUser && $xoopsUser->isAdmin()) ? 1 : 0;
		$class = 'odd';
		echo '<tr valign="middle" align="left" class="'.$class.'"><td>';
		for ($i = 0; $i < $count; $i++) {
			$class = ($class == 'odd') ? 'even' : 'odd';
			if (is_object($onlineUsers[$i]['user'])) {
				if ( POPCHAT_SHOW_NAME==1 && (trim(chat::username($onlines[$i]['online_uid']))!='') ) $username = chat::username($onlines[$i]['online_uid']);
				else $username = $onlineUsers[$i]['user']->getVar('uname');
				echo "<input type='button' class='formButton' onclick='javascript:openWithSelfMain(\"".XOOPS_URL."/pmlite.php?send2=1&to_userid=".$onlineUsers[$i]['user']->getVar('uid')."\",\"pmlite\",450,380);' value='".$username."' /></form>";
			}
		}
		echo '</td></tr>';
		echo '</table>';
		if ($online_total > 20) {
			include_once XOOPS_ROOT_PATH.'/class/pagenav.php';
			$nav = new XoopsPageNav($online_total, 20, $start, 'start', 'action=showpopups&amp;type=online');
			echo '<div style="text-align: right;">'.$nav->renderNav().'</div>';
		}
?>
