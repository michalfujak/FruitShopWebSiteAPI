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

/**
 *  Potrebne subory k nacitaniu dat.
 *
 * @file ConfigConnect.php
 * @file DriverConnect.php
 */
namespace model\driver;

use model\driver\ConfigConnect;
use mysqli;
use PDO;


class DriverConnect extends \model\driver\ConfigConnect
{
    // Variable
    private $dns;
    // Objects
    private $config;
    private $connect;
    private $mysqli4;
    /**
     *  @Constructor   construct->DriverConnect
     */
    public function __construct()
    {
        parent::__construct();
        $this->dns = "mysql:host=" . $this->getLocalhost() . ";dbname=" . $this->getDbName() . ";charset=" . $this->getUtfStandard();
    }

    /**
     * @public
     * @function connectRealPDO
     * @return object->connect
     * @instruct Funkcia ktora sa pripoji k database prostrednictvom PDO conectivity
     */
    public function connectRealPDO()
    {
        if(isset($this->dns))
        {
            try
            {
                $this->connect = new PDO($this->dns, $this->getAdminName(), $this->getPassword());
                $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->connect;
            }
            catch(\PDOException $e)
            {
                print "Pripojenie nie je mozne, doslo k chybe pri prihlasovani do databazoveho servera. [ ->getMessage ]" . $e->getMessage();
            }
        }
        else
        {
            print "DNS je prazdne! ";
        }
    }

    /**
     * @public
     * @function connectMySQLi
     * @return object->mysqli
     * @instruct Pripojenie k databazy cez MySQLi pre starsie sposoby. PHP 4.1.0
     */
    public function connectMySQLi()
    {
        $this->mysqli4 = new mysqli($this->getLocalhost(), $this->getAdminName(), $this->getPassword(), $this->getDbName(), $this->getPort(), $this->getSocket());
        $this->mysqli4->select_db($this->getDbName());
        $this->mysqli4->set_charset($this->getUtfStandard());
        return $this->mysqli4;
    }
}


























?>