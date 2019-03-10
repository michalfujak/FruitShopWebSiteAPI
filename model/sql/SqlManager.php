<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.000
*  @copyright     Michal Fujak - Programator
*  @framework     n/a
*  @license       http://www.dev-droid.sk
*  @this website  http://www.framework.dev-droid.sk [ Framework ENTERPRISE 2.0 ]
*  @Copyring      20.01.2019 22:00
*  @File          SqlManager.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/

/**
 *  Potrebne subory k nacitaniu dat.
 *
 * @file SqlEntity.php
 * @file SqlVariable.php
 * @file SqlManager.php
 */

namespace model\sql;

use model\driver\ConfigConnect;
use model\driver\DriverConnect;
use model\sql\SqlEntity;
use model\sql\SqlVariable;
use language\sk\exception\ExceptionListVariable;

class SqlManager extends \model\sql\SqlVariable
{
    /**
     * @static
     * @variable
     */
    private $idColumn;
    private $nameColumn;
    private $listColumn;
    private $valueColumn;
    private $sessionColumn;
    private $firstColumn;
    private $lastColumn;
    public $table;
    /**
     * @variable
     */
    private $sql;
    private $result;
    private $row;
    private $lang;
    /**
     * @object
     */
    private $conn;
    private $obj_stmt;
    private $objLang;
    /**
     * @SqlManager constructor.
     */
    public function __construct($table)
    {
        // Default Set
        // Connect
        parent::__construct();
        $this->table = $table;
        $this->conn = new DriverConnect();
        $this->obj_stmt = $this->conn->connectRealPDO();
        $this->objLang = new ExceptionListVariable();
        $this->lang = array_merge((array)$this->objLang->exceptionSqlManager);
    }
    /**
     * @destruct
     */
    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    /**
     * @setRowCountId($id_column)
     * @param
     * @return set
     */
    public function setRowCountId($id_column)
    {
        $this->idColumn = $id_column;
    }

    /**
     * @getRowCountId
     * @return false
     */
    public function getRowCountId()
    {
        try
        {
            if(isset($this->idColumn))
            {
                $this->sql = $this->getSelectTrim() .
                            "$this->idColumn" .
                             $this->getFromTrim() .
                             $this->table . " " .
                             $this->getOrderByTrim() . "$this->idColumn" . $this->getDescTrim();
                $this->result = $this->obj_stmt->prepare($this->sql);
                if(!$this->result)
                {
                    print $this->lang['EXCEPTION_ERROR_MESSAGE_10010'];
                }
                $this->result->execute();
                return $this->result->rowCount();
            }
            else
            {
                print $this->lang['EXCEPTION_ERROR_MESSAGE_10014'];
            }
        }
        catch(\Exception $exp)
        {
            // error message
            print $this->lang['EXCEPTION_ERROR_MESSAGE_10012'] . $exp->getMessage() . "<br />";
            print $this->lang['EXCEPTION_ERROR_CODE_10012'] . $this->sql . "<br />";
        }
        unset($this->sql);
        unset($this->result);
    }

    /**
     * @setRowFirstValue
     * @param $column
     */
    public function setRowFirstValue($column)
    {
        $this->firstColumn = $column;
    }

    /**
     * @getRowFirstValue
     */
    public function getRowFirstValue()
    {
        // Metoda ktora precita prvy zaznam z konkretneho stlpca.
        try
        {
            if(isset($this->firstColumn))
            {
                $this->sql = $this->getSelectTrim() .
                            "$this->firstColumn" .
                             $this->getFromTrim() .
                             $this->table . " " .
                             $this->getOrderByTrim() . "$this->firstColumn" . $this->getAscTrim() .
                             $this->getLimitTrim() . 1;
                $this->result = $this->obj_stmt->prepare($this->sql);
                if(!$this->result)
                {
                    print $this->lang['EXCEPTION_ERROR_MESSAGE_10020'];
                }
                $this->result->execute();
                $this->row = $this->result->fetch();
                return $this->row[$this->firstColumn];
            }
            else
            {
                print $this->lang['EXCEPTION_ERROR_MESSAGE_10022'];
            }
        }
        catch(\Exception $exp)
        {
            print $this->lang['EXCEPTION_ERROR_MESSAGE_10024'] . " " . $exp->getMessage();
            print $this->lang['EXCEPTION_ERROR_CODE_10024'] . " " . $exp->getCode();
        }
        unset($this->sql);
        unset($this->result);
        unset($this->row);
    }

    /**
     * @setRowLastValue(param)
     * @param $column
     */
    public function setRowLastValue($column)
    {
        $this->lastColumn = $column;
    }

    /**
     * @getRowLastValue()
     */
    public function getRowLastValue()
    {
        try
        {
            if(isset($this->lastColumn))
            {
                $this->sql = $this->getSelectTrim() .
                            "$this->lastColumn" .
                             $this->getFromTrim() .
                             $this->table . " " .
                             $this->getOrderByTrim() . "$this->lastColumn" . $this->getDescTrim() .
                             $this->getLimitTrim() . 1;
                $this->result = $this->obj_stmt->prepare($this->sql);
                if(!$this->result)
                {
                    print $this->lang['EXCEPTION_ERROR_MESSAGE_10030'];
                }
                $this->result->execute();
                $this->row = $this->result->fetch();
                return $this->row[$this->lastColumn];
            }
            else
            {
                print $this->lang['EXCEPTION_ERROR_MESSAGE_10032'];
            }
        }
        catch(\Exception $exp)
        {
            print $this->lang['EXCEPTION_ERROR_MESSAGE_10034'] . " " . $exp->getMessage() . "<br />";
            print $this->lang['EXCEPTION_ERROR_LINK_10034'] . " " . $exp->getCode() . "<br />";
        }
        unset($this->sql);
        unset($this->result);
        unset($this->row);
    }
}












?>