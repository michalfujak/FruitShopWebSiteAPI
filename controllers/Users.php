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
    public $objMySQLi;
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
        $this->objMySQLi = $this->objConn->connectMySQLi();
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
            $this->result->bindParam(':' . $this->checkUserExistsColumn(), $phone, \PDO::PARAM_STR);
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
            return 10011;
        }
        unset($this->result);
        unset($this->sql);
    }


    /**
     * @checkUserExistsMySQLi(param)
     * @param $phone
     */
    public function checkUserExistsMySQLi($phone)
    {
        $this->sql = $this->objSqlmanager->getSelectTrim() .
                     $this->objSqlmanager->getStarTrim() .
                     $this->objSqlmanager->getFromTrim() .
                     $this->objSqlmanager->table .
                     $this->objSqlmanager->getWhereTrim() . " " . $this->checkUserExistsColumn() . "=?" . "";
        $this->result = $this->objMySQLi->prepare($this->sql);
        $this->result->bind_param("s", $phone);
        $this->result->execute();
        $this->result->store_result();
        if($this->result->num_rows > 0)
        {
            $this->result->close();
            return true;
        }
        else
        {
            $this->result->close();
            return false;
        }
        unset($this->sql);
        unset($this->result);
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
            if(isset($phone))
            {
                $this->sql = $this->objSqlmanager->getInsertIntoTrim() .
                             $this->objSqlmanager->table . " " .
                             "( " . self::$phone . ", " . self::$firstname . ", " . self::$lastname . ", " . self::$address . ", " . self::$email .
                             ", " . self::$birthdate . ", " . self::$register_from . ", " . self::$timer . ")" .
                             $this->objSqlmanager->getValuesTrim() .
                             " ( :" . self::$phone . ", :" . self::$firstname . ", :" . self::$lastname . ", :" . self::$address . ", :" . self::$email .
                             ", :" . self::$birthdate . ", :" . self::$register_from . ", :" . self::$timer . ") ";
                $this->result = $this->objStmt->prepare($this->sql);
                if(!$this->result)
                {
                    // Error connect SQL server insert into
                    return 10020;
                }
                // inject values
                $this->result->bindParam(":" . self::$phone, $phone, \PDO::PARAM_STR);
                $this->result->bindParam(":" . self::$firstname, $firstname, \PDO::PARAM_STR);
                $this->result->bindParam(":" . self::$lastname, $lastname, \PDO::PARAM_STR);
                $this->result->bindParam(":" . self::$address, $address, \PDO::PARAM_STR);
                $this->result->bindParam(":" . self::$email, $email, \PDO::PARAM_STR);
                $this->result->bindParam(":" . self::$birthdate, $birthdate, \PDO::PARAM_STR);
                $this->result->bindParam(":" . self::$register_from, $register_from, \PDO::PARAM_STR);
                $this->result->bindParam(":" . self::$timer, $timer, \PDO::PARAM_INT);
                $this->result->execute();
                unset($this->sql);
                if($this->result)
                {
                    $this->sql = $this->objSqlmanager->getSelectTrim() .
                                 $this->objSqlmanager->getStarTrim() .
                                 $this->objSqlmanager->getFromTrim() .
                                 $this->objSqlmanager->table .
                                 $this->objSqlmanager->getWhereTrim() . " " . $this->checkUserExistsColumn() . "= :" . $this->checkUserExistsColumn() . "";
                    $this->result = $this->objStmt->prepare($this->sql);
                    if($this->result)
                    {
                        // Error connect SQL server 2 check control sql
                        return 10022;
                    }
                    $this->result->bindParam(":" . $this->checkUserExistsColumn(), $phone, \PDO::PARAM_STR);
                    $this->result->execute();
                    // return value when object
                    return $this->result->fetch(\PDO::FETCH_ASSOC);
                }
                else
                {
                    return false;
                }
            }
            else
            {
                // parameter $phone is empty
                return 10024;
            }
        }
        catch(\Exception $exp)
        {
            // Global exception error connect
            return 10026;
        }
        unset($this->sql);
        unset($this->result);
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