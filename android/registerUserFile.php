<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.000
*  @copyright     Michal Fujak - Programator
*  @framework     Enterprise 2.0
*  @license       http://www.dev-droid.sk
*  @this website  http://www.android.dev-droid.sk [ FruitShop webSite ]
*  @Copyring      24.03.2019 20:00
*  @File          registerUserFile.php
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
use model\json\Json;
use model\sql\SqlManager;
use model\table\Tables;
use model\vendor\AutoLoader;
use model\protecteds\Config;

require_once('../composer.php');
$objloading = new AutoLoader();
$objloading->autoLoader(Config::$phpFruitShopRootPack, "android", Config::$phpEx);
$objSqlManager = new SqlManager(Tables::TABLE_USERS);
$objJson = new Json();
$objUser = new Users();


$response = array();
if($_POST['phone'] && $_POST['name'] && $_POST['lastname'] && $_POST['birthdate'] && $_POST['address'] && $_POST['email'])
{
    $phone = substr($_POST['phone'], 1);
    $firstName = $_POST['name'];
    $lastName = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $registerFrom = "Phone";
    $timer = time();

    if($objUser->checkUserExists($phone))
    {
        $response['error_msg'] = "User already exted with. SK(Uzivatel uz existuje. ) " . $phone;
        print $objJson->JsonEncode($response['error_msg']);
    }
    else
    {
        $user = $objUser->registerNewUsers($phone, $firstName, $lastName, $address, $email, $birthdate, $registerFrom, $timer);
        if($user)
        {
            $response['phone'] = $user['phone_users'];
            $response['firstName'] = $user['firstname_users'];
            $response['lastName'] = $user['lastname_users'];
            $response['address'] = $user['address_users'];
            $response['email'] = $user['email_users'];
            $response['birthdate'] = $user['birthdate_users'];
            $response['done'] = "Registracia uspesna.";
            print $objJson->JsonEncode($response);
        }
        else
        {
            $response['error_msg'] = "Unknow error occurred in registration! SK( Neocakavana chyba pri registracii! ) ";
            print $objJson->JsonEncode($response['error_msg']);
        }
    }
}
else
{
    $response['error_msg'] = "Required parameter (phone, name, birthdate, address) is missing! SK( Odkazujuce parametre su prazdne! ) ";
    print $objJson->JsonEncode($response['error_msg']);
}

?>