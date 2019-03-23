<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.000
*  @copyright     Michal Fujak - Programator
*  @framework     Enterprise 2.0
*  @license       http://www.dev-droid.sk
*  @this website  http://www.android.dev-droid.sk [ FruitShop webSite ]
*  @Copyring      06.03.2019 20:00
*  @File          checkExistsUserFile.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/

/**
 * JSON
 * Methods POST
 * Param Phone
 * Compile JSON
 */

namespace android;



use controllers\Users;
use language\sk\exception\ExceptionListVariable;
use model\json\Json;
use model\protecteds\Config;
use model\sql\SqlManager;
use model\table\Tables;
use model\vendor\AutoLoader;

require_once('../composer.php');
$objLoading = new AutoLoader();
// Load file
$objLoading->autoLoader(Config::$phpFruitShopRootPack, "android", Config::$phpEx);
$objSqlManager = new SqlManager(Tables::TABLE_USERS);
$objJson = new Json();
$objUsers = new Users();
$objLang = new ExceptionListVariable();
$lang = $objLang;
/**
 * @Set active SqlManager
 */
$objSqlManager->setRowCountId(Users::$phone);
$objSqlManager->setRowFirstValue(Users::$firstname);

/**
 * @variable response
 */
$response = array();
if(isset($_POST['phone']))
{
    $phone = substr($_POST['phone'], 1);
    if($objUsers->checkUserExists($phone))
    {
        $response['exists'] = TRUE;
        print $objJson->JsonEncode($response['exists']);
    }
    else
    {
        $response['exists'] = FALSE;
        print $objJson->JsonEncode($response['exists']);
    }
}
else
{
    $response['error_msg'] = " Required parameter (phone) is missing! SK [ Pozadovani parameter (phone) je prazdny! ] ";
    print $objJson->JsonEncode($response['error_msg']);
}






print "<br /><br /><br />";
print "<p " . 'style="text-align: center; width:100%"' . ">" . Config::FRAMEWORK_NAME . "</p>";
print "<br /><br />";
print "<p " . 'style="text-align: center; width:100%"' . ">" . $objJson->JsonInfoPrint() . "</p>";

?>