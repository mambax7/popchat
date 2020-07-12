CREATE TABLE popchat_member (
	chatid int(8) NOT NULL,
	sessionid varchar(32) NOT NULL,
	uid int(5) unsigned NOT NULL default '0',
	name text,
	host text,
	in_date TIMESTAMP NOT NULL,
	PRIMARY KEY  (chatid,sessionid)
) TYPE=MyISAM;

CREATE TABLE popchat_message (
	chatid int(8) NOT NULL,
	input_date DATETIME NOT NULL,
	uid mediumint(8) NOT NULL default '0',
	post_text text,
	view tinyint(1) NOT NULL  default '0',
	PRIMARY KEY  (chatid,input_date)
) TYPE=MyISAM;

CREATE TABLE popchat_marquee (
  chatid int(8) NOT NULL auto_increment,
  uid mediumint(8) NOT NULL default '0',
  direction smallint(6) NOT NULL default '0',
  scrollamount int(11) NOT NULL default '0',
  behaviour smallint(6) NOT NULL default '0',
  bgcolor varchar(6) NOT NULL default '',
  align smallint(6) NOT NULL default '0',
  height smallint(6) NOT NULL default '0',
  width varchar(4) NOT NULL default '',
  hspace smallint(6) NOT NULL default '0',
  scrolldelay smallint(6) NOT NULL default '0',
  stoponmouseover smallint(6) NOT NULL default '0',
  chatloop smallint(6) NOT NULL default '0',
  vspace smallint(6) NOT NULL default '0',
  content text NOT NULL,
  PRIMARY KEY  (chatid)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

INSERT INTO popchat_marquee (chatid, uid, direction, scrollamount, behaviour, bgcolor, align, height, width, hspace, scrolldelay, stoponmouseover, chatloop, vspace, content) VALUES ('1', '1', '1', '1', '0', '', '0', '10', '95%', '1', '10', '0', '0', '1', '(enter your message here)')
