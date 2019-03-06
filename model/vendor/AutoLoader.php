<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.000
*  @copyright     Michal Fujak - Programator
*  @framework     n/a
*  @license       http://www.dev-droid.sk
*  @this website  http://www.framework.dev-droid.sk [ Framework ENTERPRISE 2.0 ]
*  @Copyring      26.01.2019 20:00
*  @File          model/vendor/AutoLoader.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/

namespace model\vendor;


use model\vendor\AutoLoaderList;

class AutoLoader extends AutoLoaderList
{
    /**
     * @variable
     */
    private $adm;
    private $tools;
    private $android;
    private $server;
    private $install;
    private $retrofit2;
    private $volley;
    /**
     * @AutoLoader constructor.
     */
    public function __construct()
    {
        parent::__construct();
        // SET
        $this->setAdmDirectory(AutoLoaderList::$ADM);
        $this->setToolsDirectory(AutoLoaderList::$TOOLS);
        $this->setInstallDirectory(AutoLoaderList::$INSTALL);
        $this->setServerDirectory(AutoLoaderList::$SERVER);
        $this->setAndroidDirectory(AutoLoaderList::$ANDROID);
        $this->setRetrofit2Directory(AutoLoaderList::$RETROFIT2);
        $this->setVolleyDirectory(AutoLoaderList::$VOLLEY);
    }

    /**
     * @autoLoaderStartingFile
     * @param    [ directory ]
     * @param    [ attr ]
     * @param    [ suffix ]
     * @return false
     */
    public function autoLoader($directory, $attr, $suffix)
    {
        switch($attr)
        {
            case 'index' :
                //
                foreach($this->array_adm as $value)
                {
                    require_once($directory . $value . $suffix);
                }
                break;

            case 'adm' :
                foreach($this->array_adm as $value)
                {
                    require_once($directory . $value . $suffix);
                }
                break;

            case 'android' :
                foreach($this->array_android as $value)
                {
                    require_once($directory . $value . $suffix);
                }
                break;
        }
    }

    /**
     * @GET
     * @and
     * @SET
     */

    /**
     * @setAdmDirectory
     * @param
     */
    public function setAdmDirectory($adm)
    {
        $this->adm = $adm;
    }

    /**
     * @getAdmDirectory
     */
    public function getAdmDirectory()
    {
        return $this->adm;
    }

    /**
     * @setToolsDirectory
     * @param
     */
    public function setToolsDirectory($tools)
    {
        $this->tools = $tools;
    }

    /**
     * @getToolsDirectory
     */
    public function getToolsDirectory()
    {
        return $this->tools;
    }

    /**
     * @setAndroidDirectory
     * @param
     */
    public function setAndroidDirectory($android)
    {
        $this->android = $android;
    }

    /**
     * @getAndroidDirectory
     */
    public function getAndroidDirectory()
    {
        return $this->android;
    }

    /**
     * @setInstallDirectory
     * @param
     */
    public function setInstallDirectory($install)
    {
        $this->install = $install;
    }

    /**
     * @getInstallDirectory
     */
    public function getInstallDirectory()
    {
        return $this->install;
    }

    /**
     * @setServerDirectory
     * @param
     */
    public function setServerDirectory($server)
    {
        $this->server = $server;
    }

    /**
     * @getServerDirectory
     */
    public function getServerDirectory()
    {
        return $this->server;
    }

    /**
     * @setRetrofit2Directory
     * @param
     */
    public function setRetrofit2Directory($retrofit2)
    {
        $this->retrofit2 = $retrofit2;
    }

    /**
     * @getRetrofit2Directory
     */
    public function getRetrofit2Directory()
    {
        return $this->retrofit2;
    }

    /**
     * @setVolleyDirectory
     * @param
     */
    public function setVolleyDirectory($volley)
    {
        $this->volley = $volley;
    }

    /**
     * @getVolleyDirectory
     */
    public function getVolleyDirectory()
    {
        return $this->volley;
    }
}









?>