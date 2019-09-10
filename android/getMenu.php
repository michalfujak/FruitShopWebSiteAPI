<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.150
*  @copyright     Michal Fujak - Programator
*  @framework     Enterprise 2.0
*  @license       http://www.dev-droid.sk
*  @this website  http://www.android.dev-droid.sk [ FruitShop webSite ]
*  @Copyring      01.05.2019 19:00
*  @File          android/getMenu.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/

namespace android;

use controllers\Banners;
use controllers\Menu;
use language\sk\android\CommonAndroid;
use model\json\Json;
use model\protecteds\Config;
use model\sql\SqlManager;
use model\table\Tables;
use model\vendor\AutoLoader;



header('Content-Type: application/json');
require_once('../composer.php');
$objloading = new AutoLoader();
$objloading->autoLoader(Config::$phpFruitShopRootPack, "android", Config::$phpEx);
$objSqlManager = new SqlManager(Tables::TABLE_MENU);
$objMenu = new Menu();
$objJson = new Json();
//
print $objJson->JsonEncode($objMenu->getLoadMenuItems());

?>
