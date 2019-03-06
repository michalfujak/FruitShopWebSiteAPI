############################################################################
###                         SQL CREATE TABLE                             ###
############################################################################

#    SQL17 (MySQL 5.7/MariaDB10.2)

#
#    config [.table]
#
CREATE TABLE IF NOT EXISTS config
(
     id INTEGER(10) NOT NULL AUTO_INCREMENT,
     name_con VARCHAR(50) NOT NULL DEFAULT 'AUTO_DEFINE',
     values_con VARCHAR(255) NOT NULL DEFAULT '',
     help_con VARCHAR(255) NOT NULL DEFAULT 'help_info_automatic',
     special_code_permission INTEGER(10) NOT NULL DEFAULT 1,
     comment_values text NOT NULL DEFAULT ' Comments! ',
     PRIMARY KEY(name_con),
     UNIQUE(id)
)    ENGINE=MyISAM DEFAULT CHARACTER SET 'utf8' COLLATE 'utf8_slovak_ci';

#
#    sql_manager [.table]
#
CREATE TABLE IF NOT EXISTS sql_manager
(
     id_sql INTEGER(10) NOT NULL AUTO_INCREMENT,
     name_sql VARCHAR(50) NOT NULL DEFAULT 'name_sql',
     value_sql VARCHAR(255) NOT NULL DEFAULT '',
     comment_sql VARCHAR(255) NOT NULL DEFAULT '',
     PRIMARY KEY(id_sql)
)    ENGINE=MyISAM DEFAULT CHARACTER SET 'utf8' COLLATE 'utf8_slovak_ci';

#
#   MONITOR  [.table]
#
CREATE TABLE IF NOT EXISTS monitor_agent
(
     id_monitor INTEGER(10) NOT NULL AUTO_INCREMENT,
     id_list_monitor INTEGER(10) NOT NULL,
     name_monitor VARCHAR(50) NOT NULL DEFAULT 'UNDEFINED',
     value_user_agent_monitor VARCHAR(255) NOT NULL DEFAULT '',
     session_active_monitor VARCHAR(255) NOT NULL DEFAULT '',
     user_monitor VARCHAR(50) NOT NULL DEFAULT '',
     ip_monitor VARCHAR(50) NOT NULL DEFAULT '',
     port_monitor VARCHAR(25) NOT NULL DEFAULT '',
     time_create_monitor INTEGER(50) NOT NULL DEFAULT 0,
     date_format_monitor VARCHAR(50) NOT NULL DEFAULT '1970-01-01',
     msg_monitor VARCHAR(255) NOT NULL DEFAULT '',
     comment_monitor VARCHAR(255) NOT NULL DEFAULT 'Comment!',
     PRIMARY KEY(id_list_monitor),
     UNIQUE(id_monitor)
)    ENGINE=MyISAM DEFAULT CHARACTER SET 'utf8' COLLATE 'utf8_slovak_ci';

#
#    USERS [.table]
#
CREATE TABLE IF NOT EXISTS users
(
     id_users INTEGER(10),
     phone_users VARCHAR(20) NOT NULL DEFAULT '',
     firstname_users VARCHAR(50) NOT NULL DEFAULT '',
     lastname_users VARCHAR(50) NOT NULL DEFAULT '',
     address_users VARCHAR(30) NOT NULL DEFAULT '',
     email_users VARCHAR(30) NOT NULL DEFAULT '',
     birthdate_users DATE ,
     registration_users VARCHAR(20) NOT NULL DEFAULT '',
     timer_users INTEGER(20) NOT NULL DEFAULT 0,
     PRIMARY KEY(phone_users),
     UNIQUE(email_users)
)    ENGINE=MyISAM DEFAULT CHARACTER SET 'utf8' COLLATE 'utf8_slovak_ci';

























