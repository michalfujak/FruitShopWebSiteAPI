<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.000
*  @copyright     Michal Fujak - Programator
*  @framework     Enterprise 2.0
*  @license       http://www.dev-droid.sk
*  @this website  http://www.android.dev-droid.sk [ FruitShop webSite ]
*  @Copyring      06.03.2019 23:00
*  @File          controllers/Users.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/


namespace controllers;

use model\sql\SqlManager;


class Users extends MappingUsers
{
    /**
     * Users constructor.
     */
    public function __construct()
    {
    }

    /**
     * destruct
     */
    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    /**
     * @checkUserExists()
     * @param $phone
     */
    public function checkUserExists($phone)
    {
    }

    /**
     * @registerNewUsers()
     * @param $phone
     * @param $firstname
     * @param $lastname
     * @param $address
     * @param $email
     * @param $birthdate
     * @param $register_from
     * @param $timer
     */
    public function registerNewUsers($phone, $firstname, $lastname, $address, $email, $birthdate, $register_from, $timer)
    {
    }
}
?>