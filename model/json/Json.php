<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.500
*  @copyright     Michal Fujak - Programator
*  @framework     n/a
*  @license       http://www.dev-droid.sk
*  @this website  http://www.framework.dev-droid.sk [ Framework ENTERPRISE 2.0 ]
*  @Copyring      22.03.2019 20:00
*  @File          model/Json.php [master]
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/


namespace model\json;

use model\json\MappingJson;


class Json extends MappingJson
{
    /**
     * @Variable static
     */
    private static $nullable = 0;

    /**
     * Json constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $param
     * @return false|string
     */
    public function JsonEncode($param)
    {
        return json_encode($param, JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param $param
     * @return mixed
     */
    public function JsonDecode($param)
    {
        return json_decode($param, JSON_UNESCAPED_UNICODE);
    }


}

?>