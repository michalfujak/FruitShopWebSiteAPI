<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.000
*  @copyright     Michal Fujak - Programator
*  @framework     n/a
*  @license       http://www.dev-droid.sk
*  @this website  http://www.framework.dev-droid.sk [ Framework ENTERPRISE 2.0 ]
*  @Copyring      02.03.2019 23:00
*  @File          language/sk/android/common.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/


namespace language\sk\android;


class CommonAndroid
{

    /**
     * Variable mixed
     */
    public $androidAPI;
    public $androidBanner;

    /**
     * CommonAndroid constructor.
     */
    public function __construct()
    {
        // fill
        $this->androidAPI = array(
                                   'ERROR_MSG_USER_DONT_NOT_EXISTS'                                          => 'Uživatel neexistuje.',
                                   'ERROR_MSG_USER_PARAMETER_IS_MISSING'                                     => 'Požadovaný parameter ( phone ) je prázdny.',
        );

        $this->androidBanner = array(

        );
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}
?>