<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.150
*  @copyright     Michal Fujak - Programator
*  @framework     Enterprise 2.0
*  @license       http://www.dev-droid.sk
*  @this website  http://www.android.dev-droid.sk [ FruitShop webSite ]
*  @Copyring      01.05.2019 19:00
*  @File          controllers/MappingBanners.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/

namespace controllers;


class MappingBanners
{
    /**
     * @static variable
     */
    public static $id = "id";
    public static $name = "name";
    public static $special_value = "values_special";
    public static $link = "link";
    public static $comment = "comment";

    /**
     * @const variables
     */
    public static $bannerLimitName = "limit";
    public static $bannerLimitValue = 5;
    /**
     * @const variable
     */
    const columnPrivateKey = "id";
    const class_namePrivate = "Banners";

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
