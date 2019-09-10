<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.150
*  @copyright     Michal Fujak - Programator
*  @framework     Enterprise 2.0
*  @license       http://www.dev-droid.sk
*  @this website  http://www.android.dev-droid.sk [ FruitShop webSite ]
*  @Copyring      10.09.2019 21:00
*  @File          controllers/MappingMenu.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/

namespace controllers;

class MappingMenu
{
    /**
     * @static variable
     */
    public static $id = "id_cat";
    public static $name = "name_cat";
    public static $link = "link_cat";
    public static $comment = "comment_cat";

    /**
     * @const variables
     */
    public static $menuLimit = "limit_cat";
    /**
     * @const variable
     */
    const columnPrivateKey = "id_cat";

    /**
     * @var private variable
     */
    private $limit;

    /**
     * MappingUsers constructor.
     */
    public function __construct()
    {
        $this->setLimitCategory(10);
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
    /**
     * @setLimitCategory
     * @param
     */
    public function setLimitCategory($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @getLimitCategory
     */
    public function getLimitCategory()
    {
        return $this->limit;
    }
}

?>
