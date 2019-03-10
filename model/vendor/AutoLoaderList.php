<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.000
*  @copyright     Michal Fujak - Programator
*  @framework     n/a
*  @license       http://www.dev-droid.sk
*  @this website  http://www.framework.dev-droid.sk [ Framework ENTERPRISE 2.0 ]
*  @Copyring      26.01.2019 20:00
*  @File          model/vendor/AutoLoaderList.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/

namespace model\vendor;



class AutoLoaderList
{
    /**
     * @static
     * @variable
     */
    public static $ADM = "adm";
    public static $TOOLS = "tools";
    public static $ANDROID = "android";
    public static $SERVER = "server";
    public static $INSTALL = "install";
    public static $RETROFIT2 = "retrofit2";
    public static $VOLLEY = "volley";
    /**
     * @variable
     * @array
     */
    public $array_adm;
    public $array_tools;
    public $array_android;
    public $array_retrofit2;
    public $array_server;
    public $array_volley;
    public $array_install;
    /**
     * @AutoLoaderList constructor.
     */
    public function __construct()
    {
        $this->array_adm = array(
                                 // Config load starting
                                 'Model\Protecteds\ConfigEntityGloabal'                       => 'model/protecteds/ConfigEntityGlobal',
                                 'Model\Protecteds\Config'                                    => 'model/protecteds/Config',
                                 // Driver Connect
                                 'Model\Driver\ConfigConnect'                                 => 'model/driver/ConfigConnect',
                                 'Model\Driver\DriverConnect'                                 => 'model/driver/DriverConnect',
                                 // Tables
                                 'Model\Table\Tables'                                         => 'model/table/Tables',
                                 // Language
                                 // 'Language\SK\Common'                                         => '',
                                 'Language\SK\Exception\Expception.class'                     => 'language/sk/exception/ExceptionListVariable',
                                 // 'Language\SK\Pm'                                             => '',
                                 // 'Language\SK\Styles'                                         => '',
                                 // SQL Manager
                                 'Model\Sql\SqlEntity'                                        => 'model/sql/SqlEntity',
                                 'Model\Sql\SqlVariable'                                      => 'model/sql/SqlVariable',
                                 'Model\Sql\SqlManager'                                       => 'model/sql/SqlManager',
                                 'Model\Sql\SqlCreateTable'                                   => 'model/sql/SqlCreateTable',
                                 // Controllers adds
                                 'Controllers\MappingUsers'                                   => 'controllers/MappingUsers',
                                 'Controllers\Users'                                          => 'controllers/Users',
        );
        /**
         * @array
         */
        $this->array_android = array(
                                 // Config load starting
                                 'Model\Protecteds\ConfigEntityGloabal'                       => '../model/protecteds/ConfigEntityGlobal',
                                 'Model\Protecteds\Config'                                    => '../model/protecteds/Config',
                                 // Driver Connect
                                 'Model\Driver\ConfigConnect'                                 => '../model/driver/ConfigConnect',
                                 'Model\Driver\DriverConnect'                                 => '../model/driver/DriverConnect',
                                 // Tables
                                 'Model\Table\Tables'                                         => '../model/table/Tables',
                                 // Language
                                 // 'Language\SK\Common'                                         => '',
                                'Language\SK\Exception\Expception.class'                     => '../language/sk/exception/ExceptionListVariable',
                                 // 'Language\SK\Pm'                                             => '',
                                 // 'Language\SK\Styles'                                         => '',
                                 // SQL Manager
                                'Model\Sql\SqlEntity'                                        => '../model/sql/SqlEntity',
                                'Model\Sql\SqlVariable'                                      => '../model/sql/SqlVariable',
                                'Model\Sql\SqlManager'                                       => '../model/sql/SqlManager',
                                'Model\Sql\SqlCreateTable'                                   => '../model/sql/SqlCreateTable',
                                 // Controllers adds
                                'Controllers\MappingUsers'                                   => '../controllers/MappingUsers',
                                'Controllers\Users'                                          => '../controllers/Users',
        );
    }
}

















?>