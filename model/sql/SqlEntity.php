<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.000
*  @copyright     Michal Fujak - Programator
*  @framework     n/a
*  @license       http://www.dev-droid.sk
*  @this website  http://www.framework.dev-droid.sk [ Framework ENTERPRISE 2.0 ]
*  @Copyring      20.01.2019 22:00
*  @File          SqlEntity.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/

namespace model\sql;


class SqlEntity
{
    /**
     * @variable
     * @static
     */
    public static $nameInfoEntity = "SqlEntity";
    public static $SQL_LIMIT_ONE = 1;
    public static $SQL_LIMIT_EASY = 5;
    public static $SQL_LIMIT_NORMAL = 100;
    public static $SQL_LIMIT_EXCELLENT = 1000;
    public static $SQL_LIMIT_HIGH = 5000;
    public static $SQL_DESC = "DESC";
    public static $SQL_DESC_TRIM = " DESC ";
    public static $SQL_ASC = "ASC";
    public static $SQL_ASC_TRIM = " ASC ";
    protected static $sqlVariables = 0;

    /**
     * @SqlEntity constructor.
     */
    public function __construct()
    {
        // SET
    }
}




?>