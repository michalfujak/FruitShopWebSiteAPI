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
    public static $id;
    public static $phone;
    public static $firstname;
    public static $lastname;
    public static $address;
    public static $email;
    public static $birthdate;
    public static $register_from;
    public static $timer;
    /**
     * @const variable
     */


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
}

?>