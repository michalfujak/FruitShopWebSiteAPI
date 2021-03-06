<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.000
*  @copyright     Michal Fujak - Programator
*  @framework     Enterprise 2.0
*  @license       http://www.dev-droid.sk
*  @this website  http://www.android.dev-droid.sk [ FruitShop webSite ]
*  @Copyring      06.03.2019 20:00
*  @File          index.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/


namespace android;


use controllers\Users;
use model\protecteds\Config;
use model\protecteds\ConfigEntityGlobal;
use model\driver\ConfigConnect;
use model\driver\DriverConnect;
use model\table\Tables;
use model\sql\SqlEntity;
use model\sql\SqlVariable;
use model\sql\SqlManager;
use model\sql\SqlCreateTable;
use model\vendor\AutoLoaderList;
use model\vendor\AutoLoader;

/**
 * @require composer
 * @url
 */
require_once('../composer.php');
$objLoad = new AutoLoader();
$objLoad->autoLoader(Config::$phpFruitShopRootPack, "android", Config::$phpEx);
// Obj SqlManager
$objSqlManager = new SqlManager(Tables::TABLE_MONITOR);
$objUser = new Users();
// SET COUNT
$objSqlManager->setRowCountId("id_monitor");

print "Version DB: " . Config::infoVersion();
print "<br /><br /><br />";
print "Celkovy pocet riadkov v tabulke monitor: " . $objSqlManager->getRowCountId();
print "<br /><br /><br />";
if($objUser->checkUserExists("+944517465") == true)
{
    print "Uzivatel existuje!<br />";
    print "Class name:  [ " . $objUser->infoClassNameStatic() . " ] ";
    print var_dump($objUser->registerNewUsers("+944517465", "Michal", "Fujak", "Cadca u Sihelnika 715", "michalfujak005@gmail.com", "1983-09-16", "Web", time()));
}
else
{
    print "Uzivatel neexistuje!";
}
print "<br /><br /><br />";
print "<p " . 'style="text-align: center; width:100%"' . ">" . Config::FRAMEWORK_NAME . "</p>";



?>