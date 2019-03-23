<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.500
*  @copyright     Michal Fujak - Programator
*  @framework     n/a
*  @license       http://www.dev-droid.sk
*  @this website  http://www.framework.dev-droid.sk [ Framework ENTERPRISE 2.0 ]
*  @Copyring      22.03.2019 20:00
*  @File          model/MappingJson.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/


namespace model\json;



class MappingJson
{
    /**
     * @static variable
     */
    public static $json_info = "Compile JSON @ Michal Fujak programmer";

    /**
     * MappingJson constructor.
     */
    public function __construct()
    {

    }

    public function JsonInfoPrint()
    {
        return self::$json_info;
    }
}

?>