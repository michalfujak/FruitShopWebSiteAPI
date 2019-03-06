<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.000
*  @copyright     Michal Fujak - Programator
*  @framework     n/a
*  @license       http://www.dev-droid.sk
*  @this website  http://www.framework.dev-droid.sk [ Framework ENTERPRISE 2.0 ]
*  @Copyring      20.01.2019 22:00
*  @File          DriverConnect.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/

namespace model\driver;


use enterprise\configStatic;
use model\protecteds\Config;

class ConfigConnect
{
    // Variable
    private $localhost;
    private $adminName;
    private $dbName;
    private $password;
    private $port;
    private $socket;
    private $secure;
    private $http;
    private $utfStandard;
    private $debugging;
    /**
     * @constructor  class::ConfigConnect
     */
    public function __construct()
    {
        // Default Set
        $this->setLocalhost(Config::SERVER_LOCALHOST);
        $this->setAdminName(Config::SERVER_ADMINNAME);
        $this->setDbName(Config::SERVER_DBNAME);
        $this->setPassword(Config::SERVER_PASSWORD);
        $this->setPort(Config::SERVER_PORT);
        $this->setSocket(Config::SERVER_SOCKET);
        $this->setSecure(false);
        $this->setHttp(false);
        $this->setUtfStandard(Config::LANG_UTF8);
        $this->setDebagging(Config::DEBUG);

    }
    /**
     * @localhost SET
     * @param
     */
    public function setLocalhost($localhost)
    {
        $this->localhost = $localhost;
    }

    /**
     * @localhost GET
     */
    public function getLocalhost()
    {
        return $this->localhost;
    }

    /**
     * @adminName SET
     * @param
     */
    public function setAdminName($adminName)
    {
        $this->adminName = $adminName;
    }

    /**
     * @adminName GET
     */
    public function getAdminName()
    {
        return $this->adminName;
    }

    /**
     * @dbName SET
     * @param
     */
    public function setDbName($dbName)
    {
        $this->dbName = $dbName;
    }

    /**
     * @dbName GET
     */
    public function getDbName()
    {
        return $this->dbName;
    }

    /**
     * @password SET
     * @param
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @password GET
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @port SET
     * @param
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @port GET
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @socket SET
     * @param
     */
    public function setSocket($socket)
    {
        $this->socket = $socket;
    }

    /**
     * @socket GET
     */
    public function getSocket()
    {
        return $this->socket;
    }

    /**
     * @secure SET
     * @param
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;
    }

    /**
     * @secure GET
     */
    public function getSecure()
    {
        return $this->secure;
    }

    /**
     * @http SET
     * @param
     */
    public function setHttp($http)
    {
        $this->http = $http;
    }

    /**
     * @http GET
     */
    public function getHttp()
    {
        return $this->http;
    }

    /**
     * @utfStandard
     * @param
     */
    public function setUtfStandard($utfStandard)
    {
        $this->utfStandard = $utfStandard;
    }

    /**
     * @utfStandard
     */
    public function getUtfStandard()
    {
        return $this->utfStandard;
    }

    /**
     * @debagging
     * @param
     */
    public function setDebagging($debagging)
    {
        $this->debugging = $debagging;
    }

    /**
     * @debagging
     */
    public function getDebagging()
    {
        return $this->debugging;
    }

}



























