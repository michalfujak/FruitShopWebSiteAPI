<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.000
*  @copyright     Michal Fujak - Programator
*  @framework     Enterprise 2.0
*  @license       http://www.dev-droid.sk
*  @this website  http://www.android.dev-droid.sk [ FruitShop webSite ]
*  @Copyring      24.03.2019 20:00
*  @File          getUser.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/

/**
 * JSON
 * Methods POST
 * Param Phone
 * Compile JSON
 */


namespace android;

use controllers\Banners;
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
$objSqlManager = new SqlManager(Tables::TABLE_BANNERS);
$objBanner = new Banners();
$objLang = new CommonAndroid();
$lang = array_merge((array)$objLang->androidBanner);
$objJson = new Json();

print $objJson->JsonEncode($objBanner->getLoadBanners());


?>
