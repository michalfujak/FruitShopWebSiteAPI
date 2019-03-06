<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.000
*  @copyright     Michal Fujak - Programator
*  @framework     Enterprise 2.0
*  @license       http://www.dev-droid.sk
*  @this website  http://www.framework.dev-droid.sk [ Framework ENTERPRISE 2.0 ]
*  @Copyring      17.01.2019 22:00
*  @File          index.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/

namespace enterprise;

use model\protecteds\Config;
use model\driver\ConfigConnect;
use model\driver\DriverConnect;
use model\table\Tables;
use model\sql\SqlEntity;
use model\sql\SqlVariable;
use model\sql\SqlManager;
use model\sql\SqlCreateTable;
use model\vendor\AutoLoaderList;
use model\vendor\AutoLoader;
// language
use language\sk\exception\ExceptionListVariable;


/**
 * @require
 * @debug Docasne citanie na pevno, pripravovana je funkcia autoloading
 */
require_once('composer.php');
// CONFIG FILE

$auto = new AutoLoader();
$auto->autoLoader(Config::$phpFrameworkRootPack, "index", Config::$phpEx);
// Insert code
$sqlmanager = new SqlManager(Tables::TABLE_MONITOR);
$sqlmanager->setRowCountId("id_monitor");
$sqlmanager->setRowFirstValue("id_list_monitor");
$sqlmanager->setRowLastValue("id_list_monitor");

print "Info PHP FRAMEWORK ENTERPRISE Index.php" . "<br />";
print "Version MySQLi: " . Config::infoVersion() . "<br /><br />";
print "ID ROW: " . $sqlmanager->getRowCountId();
print "<br />";
print "Prvy zaznam: " .$sqlmanager->getRowFirstValue() . "<br />";
print "Posledny zaznam: " . $sqlmanager->getRowLastValue() . "<br />";
?>

