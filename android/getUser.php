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

use controllers\Users;
use language\sk\android\CommonAndroid;
use model\json\Json;
use model\sql\SqlManager;
use model\table\Tables;
use model\vendor\AutoLoader;
use model\protecteds\Config;

header('Content-Type: application/json');

require_once('../composer.php');
$objloading = new AutoLoader();
$objloading->autoLoader(Config::$phpFruitShopRootPack, "android", Config::$phpEx);
$objSqlManager = new SqlManager(Tables::TABLE_USERS);
$objLang = new CommonAndroid();
$lang = array_merge((array)$objLang->androidAPI);
$objJson = new Json();
$objUser = new Users();

$response = array();
// Load for POST data
if(isset($_POST['phone']))
{
    $phone = substr($_POST['phone'], 1);
    $user = $objUser->getInformationUser($phone);
    // Doprogramovat subor pre jazyky... Texty prelozit...
    if($user)
    {
        $response['phone'] = "+" . $user['phone_users'];
        $response['name'] = $user['firstname_users'];
        $response['lastName'] = $user['lastname_users'];
        $response['address'] = $user['address_users'];
        $response['email'] = $user['email_users'];
        $response['birthdate'] = $user['birthdate_users'];
        print $objJson->JsonEncode($response);
    }
    else
    {
        $response['error_msg'] = $lang['ERROR_MSG_USER_DONT_NOT_EXISTS'];
        print $objJson->JsonEncode($response);
    }
}
else
{
    $response['error_msg'] = $lang['ERROR_MSG_USER_PARAMETER_IS_MISSING'];
    print $objJson->JsonEncode($response);
}




























?>
