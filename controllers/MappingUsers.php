<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.000
*  @copyright     Michal Fujak - Programator
*  @framework     Enterprise 2.0
*  @license       http://www.dev-droid.sk
*  @this website  http://www.android.dev-droid.sk [ FruitShop webSite ]
*  @Copyring      06.03.2019 23:00
*  @File          controllers/MappingUsers.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/

namespace controllers;


class MappingUsers
{
    /**
     * @static variable
     */
    public static $id = "id_users";
    public static $phone = "phone_users";
    public static $firstname = "firstname_users";
    public static $lastname = "lastname_users";
    public static $address = "address_users";
    public static $email = "email_users";
    public static $birthdate = "birthdate_users";
    public static $register_from = "registration_users";
    public static $timer = "timer_users";
    /**
     * @const variable
     */
    const columnPrivateKey = "phone_users";
    const class_namePrivate = "Users";

    /**
     * MappingUsers constructor.
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
     * @Get
     * and
     * @Set Table USERS
     */
}

?>