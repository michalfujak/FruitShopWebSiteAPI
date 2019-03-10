<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.000
*  @copyright     Michal Fujak - Programator
*  @framework     Enterprise 2.0
*  @license       http://www.dev-droid.sk
*  @this website  http://www.android.dev-droid.sk [ FruitShop webSite ]
*  @Copyring      06.03.2019 23:00
*  @File          controllers/Users.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/


namespace controllers;

use language\sk\exception\ExceptionListVariable;
use model\driver\DriverConnect;
use model\sql\SqlManager;
use model\table\Tables;


class Users extends MappingUsers
{
    /**
     * @variable
     */
    public $result;
    public $row;
    public $sql;

    /**
     * @var array
     */
    private $response = array();

    /**
     * @object
     */
    public $objConn;
    public $objStmt;
    public $objSqlmanager;
    private $lang;
    private $lang_exception;
    /**
     * Users constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->objConn = new DriverConnect();
        $this->objStmt = $this->objConn->connectRealPDO();
        $this->objSqlmanager = new SqlManager(Tables::TABLE_USERS);
        $this->lang_exception = new ExceptionListVariable();
        $this->lang = array_merge((array)$this->lang_exception->exceptionListUsers);
    }

    /**
     * destruct
     */
    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    /**
     * @checkUserExists($phone)
     * @param $phone
     */
    public function checkUserExists($phone)
    {
        try
        {
            // Kontrola a overenie existencie uzivatela.
            $this->sql = $this->objSqlmanager->getSelectTrim() .
                $this->objSqlmanager->getStarTrim() .
                $this->objSqlmanager->getFromTrim() .
                $this->objSqlmanager->table .
                $this->objSqlmanager->getWhereTrim() . " " . $this->checkUserExistsColumn() . "= :" . $this->checkUserExistsColumn() . "";
            $this->result = $this->objStmt->prepare($this->sql);
            $this->result->bindparam(':' . $this->checkUserExistsColumn(), $phone, \PDO::PARAM_STR);
            if(!$this->result)
            {
                print $this->lang['EXCEPTION_USERS_ERROR_MESSAGE_10010'];
            }
            $this->result->execute();

            if(intval($this->result->rowCount()) > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch(\Exception $exc)
        {
            $this->response['error_exc'] = "Chybove hlasenie: " . $exc->getMessage() . " : " . $this->lang['EXCEPTION_USERS_ERROR_MESSAGE_10011'];
            print json_encode($this->response);
        }
    }

    /**
     * @registerNewUsers()
     * @param $phone
     * @param $firstname
     * @param $lastname
     * @param $address
     * @param $email
     * @param $birthdate
     * @param $register_from
     * @param $timer
     */
    public function registerNewUsers($phone, $firstname, $lastname, $address, $email, $birthdate, $register_from, $timer)
    {
        try
        {
            // block
        }
        catch(\Exception $exp)
        {
            // Vyjimka
        }
    }

    /**
     * @checkUserExistxColumn($column)
     * @param $column
     * @return mixed
     */
    private function checkUserExistsColumn()
    {
        return self::$phone;
    }

    /**
     * @infoClassNameStatic()
     * @return string
     */
    public function infoClassNameStatic()
    {
        return self::class_namePrivate;
    }
}
?>