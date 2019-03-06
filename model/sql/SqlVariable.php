<?php
/*
*  @Autor:        Michal Fujak
*  @version       2.0.000
*  @copyright     Michal Fujak - Programator
*  @framework     n/a
*  @license       http://www.dev-droid.sk
*  @this website  http://www.framework.dev-droid.sk [ Framework ENTERPRISE 2.0 ]
*  @Copyring      20.01.2019 22:00
*  @File          SqlVariable.php
*  @Update        edit:    [n/a][n/a]  version[n/a] [n/a]
*/

namespace model\sql;

use model\sql\SqlEntity;



class SqlVariable extends \model\sql\SqlEntity
{
    /**
     * @static
     * @variable
     */
    private static $trim = " ";
    /**
     * @variable
     */
     private $select;
     private $from;
     private $table;
     private $star;
     private $create;
     private $if;
     private $not;
     private $exists;
     private $like;
     private $undefined;
     private $where;
     private $orderBy;
     private $limit;
     private $and;
     private $or;
     private $update;
     private $set;
     private $insertInto;
     private $left;
     private $right;
     private $full;
     private $outer;
     private $value;
     private $join;
     private $between;
     private $delete;
     private $primary;
     private $unique;
     private $key;
     private $offset;
     private $asc;
     private $desc;

    /**
     * @SqlVariable constructor.
     */
    public function __construct()
    {
        parent::__construct();
        // default Set element
        $this->setSelect("SELECT");
        $this->setFrom("FROM");
        $this->setTable("TABLE");
        $this->setStar("*");
        $this->setCreate("CREATE");
        $this->setIf("IF");
        $this->setNot("NOT");
        $this->setExists("EXISTS");
        $this->setLike("LIKE");
        $this->setUndefined("UNDEFINED");
        $this->setWhere("WHERE");
        $this->setOrderBy("ORDER BY");
        $this->setLimit("LIMIT");
        $this->setAnd("AND");
        $this->setOr("OR");
        $this->setUpdate("UPDATE");
        $this->setSet("SET");
        $this->setInsertInto("INSERT INTO");
        $this->setLeft("LEFT");
        $this->setRight("RIGHT");
        $this->setFull("FULL");
        $this->setOuter("OUTER");
        $this->setValue("VALUE");
        $this->setJoin("JOIN");
        $this->setBetween("BETWEEN");
        $this->setDelete("DELETE");
        $this->setPrimary("PRIMARY");
        $this->setUnique("UNIQUE");
        $this->setKey("KEY");
        $this->setOffset("OFFSET");
        $this->setAsc("ASC");
        $this->setDesc("DESC");
    }

    /**
     * @setSelect
     * @param
     */
    public function setSelect($select)
    {
        $this->select = $select;
    }

    /**
     * @getSelect
     */
    public function getSelect()
    {
        return $this->select;
    }

    /**
     * @getSelectTrim
     */
    public function getSelectTrim()
    {
        return self::$trim . $this->select . self::$trim;
    }

    /**
     * @setFrom
     * @param
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @getFrom
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @getFromTrim
     */
    public function getFromTrim()
    {
        return self::$trim . $this->from . self::$trim;
    }

    /**
     * @setTable
     * @param
     */
    public function setTable($table)
    {
        $this->table = $table;
    }

    /**
     * @getTable
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @getTableTrim
     */
    public function getTableTrim()
    {
        return self::$trim . $this->table . self::$trim;
    }

    /**
     * @setStar
     * @param
     */
    public function setStar($star)
    {
        $this->star = $star;
    }

    /**
     * @getStar
     */
    public function getStar()
    {
        return $this->star;
    }

    /**
     * @getStarTrim
     */
    public function getStarTrim()
    {
        return self::$trim . $this->star . self::$trim;
    }

    /**
     * @setCreate
     * @param
     */
    public function setCreate($create)
    {
        $this->create = $create;
    }

    /**
     * @getCreate
     */
    public function getCreate()
    {
        return $this->create;
    }

    /**
     * @getCreateTrim
     */
    public function getCreateTrim()
    {
        return self::$trim . $this->create . self::$trim;
    }

    /**
     * @setIf
     * @param
     */
    public function setIf($if)
    {
        $this->if = $if;
    }

    /**
     * @getIf
     */
    public function getIf()
    {
        return $this->if;
    }

    /**
     * @getIfTrim
     */
    public function getIfTrim()
    {
        return self::$trim . $this->if . self::$trim;
    }

    /**
     * @setNot
     * @param
     */
    public function setNot($not)
    {
        $this->not = $not;
    }

    /**
     * @getNot
     */
    public function getNot()
    {
        return $this->not;
    }

    /**
     * @getNotTrim
     */
    public function getNotTrim()
    {
        return self::$trim . $this->not . self::$trim;
    }

    /**
     * @setExists
     * @param
     */
    public function setExists($exists)
    {
        $this->exists = $exists;
    }

    /**
     * @getExists
     */
    public function getExists()
    {
        return $this->exists;
    }

    /**
     * @getExistsTrim
     */
    public function getExistsTrim()
    {
        return self::$trim . $this->exists . self::$trim;
    }

    /**
     * @setLike
     * @param
     */
    public function setLike($like)
    {
        $this->like = $like;
    }

    /**
     * @getLike
     */
    public function getLike()
    {
        return $this->like;
    }

    /**
     * @getLikeTrim
     */
    public function getLikeTrim()
    {
        return self::$trim . $this->like . self::$trim;
    }

    /**
     * @setUndefined
     * @param
     */
    public function setUndefined($undefined)
    {
        $this->undefined = $undefined;
    }

    /**
     * @getUndefined
     */
    public function getUndefined()
    {
        return $this->undefined;
    }

    /**
     * @getUndefinedTrim
     */
    public function getUndefinedTrim()
    {
        return self::$trim . $this->undefined . self::$trim;
    }

    /**
     * @setWhere
     * @param
     */
    public function setWhere($where)
    {
        $this->where = $where;
    }

    /**
     * @getWhere
     */
    public function getWhere()
    {
        return $this->where;
    }

    /**
     * @getWhereTrim
     */
    public function getWhereTrim()
    {
        return self::$trim . $this->where . self::$trim;
    }

    /**
     * @setOrderBy
     * @param
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
    }

    /**
     * @getOrderBy
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @getOrderByTrim
     */
    public function getOrderByTrim()
    {
        return self::$trim . $this->orderBy . self::$trim;
    }

    /**
     * @setLimit
     * @param
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @getLimit
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @getLimitTrim
     */
    public function getLimitTrim()
    {
        return self::$trim . $this->limit . self::$trim;
    }

    /**
     * @setAnd
     * @param
     */
    public function setAnd($and)
    {
        $this->and = $and;
    }

    /**
     * @getAnd
     */
    public function getAnd()
    {
        return $this->and;
    }

    /**
     * @getAndTrim
     */
    public function getAndTrim()
    {
        return self::$trim . $this->and . self::$trim;
    }

    /**
     * @setOr
     * @param
     */
    public function setOr($or)
    {
        $this->or = $or;
    }

    /**
     * @getOr
     */
    public function getOr()
    {
        return $this->or;
    }

    /**
     * @getOrTrim
     */
    public function getOrTrim()
    {
        return self::$trim . $this->or . self::$trim;
    }

    /**
     * @setUpdate
     * @param
     */
    public function setUpdate($update)
    {
        $this->update = $update;
    }

    /**
     * @getUpdate
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * @getUpdateTrim
     */
    public function getUpdateTrim()
    {
        return self::$trim . $this->update . self::$trim;
    }

    /**
     * @setSet
     * @param
     */
    public function setSet($set)
    {
        $this->set = $set;
    }

    /**
     * @getSet
     */
    public function getSet()
    {
        return $this->set;
    }

    /**
     * @getSetTrim
     */
    public function getSetTrim()
    {
        return self::$trim . $this->set . self::$trim;
    }

    /**
     * @setInsertInto
     * @param
     */
    public function setInsertInto($insertInto)
    {
        $this->insertInto = $insertInto;
    }

    /**
     * @getInsertInto
     */
    public function getInsertInto()
    {
        return $this->insertInto;
    }

    /**
     * @getInsertInto
     */
    public function getInsertIntoTrim()
    {
        return self::$trim . $this->insertInto . self::$trim;
    }

    /**
     * @setLeft
     * @param
     */
    public function setLeft($left)
    {
        $this->left = $left;
    }

    /**
     * @getLeft
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * @getleftTrim
     */
    public function getLeftTrim()
    {
        return self::$trim . $this->left . self::$trim;
    }

    /**
     * @setRight
     * @param
     */
    public function setRight($right)
    {
        $this->right = $right;
    }

    /**
     * @getRight
     */
    public function getRight()
    {
        return $this->right;
    }

    /**
     * @getRightTrim
     */
    public function getRightTrim()
    {
        return self::$trim . $this->right . self::$trim;
    }

    /**
     * @setFull
     * @param
     */
    public function setFull($full)
    {
        $this->full = $full;
    }

    /**
     * @getFull
     */
    public function getFull()
    {
        return $this->full;
    }

    /**
     * @getFullTrim
     */
    public function getFullTrim()
    {
        return self::$trim . $this->full . self::$trim;
    }

    /**
     * @setOuter
     * @param
     */
    public function setOuter($outer)
    {
        $this->outer = $outer;
    }

    /**
     * @getOuter
     */
    public function getOuter()
    {
        return $this->outer;
    }

    /**
     * @getOuterTrim
     */
    public function getOuterTrim()
    {
        return self::$trim . $this->outer . self::$trim;
    }

    /**
     * @setValue
     * @param
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @getvalue
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @getValueTrim
     */
    public function getValueTrim()
    {
        return self::$trim . $this->value . self::$trim;
    }

    /**
     * @setJoin
     * @param
     */
    public function setJoin($join)
    {
        $this->join = $join;
    }

    /**
     * @getJoin
     */
    public function getJoin()
    {
        return $this->join;
    }

    /**
     * @getJoinTrim
     */
    public function getJoinTrim()
    {
        return self::$trim . $this->join . self::$trim;
    }

    /**
     * @setBetween
     * @param
     */
    public function setBetween($between)
    {
        $this->between = $between;
    }

    /**
     * @getBetween
     */
    public function getBetween()
    {
        return $this->between;
    }

    /**
     * @getBetweenTrim
     */
    public function getBetweenTrim()
    {
        return self::$trim . $this->between . self::$trim;
    }

    /**
     * @setDelete
     * @param
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
    }

    /**
     * @getDelete
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * @getDeleteTrim
     */
    public function getDeleteTrim()
    {
        return self::$trim . $this->delete . self::$trim;
    }

    /**
     * @setPrimary
     * @param
     */
    public function setPrimary($primary)
    {
        $this->primary = $primary;
    }

    /**
     * @getPrimary
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * @getPrimaryTrim
     */
    public function getPrimaryTrim()
    {
        return self::$trim . $this->primary . self::$trim;
    }

    /**
     * @setUnique
     * @param
     */
    public function setUnique($unique)
    {
        $this->unique = $unique;
    }

    /**
     * @getUnique
     */
    public function getUnique()
    {
        return $this->unique;
    }

    /**
     * getUniqueTrim
     */
    public function getUniqueTrim()
    {
        return self::$trim . $this->unique . self::$trim;
    }

    /**
     * @setKey
     * @param
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @getKey
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @getKeyTrim
     */
    public function getKeyTrim()
    {
        return self::$trim . $this->key . self::$trim;
    }

    /**
     * @setOffset
     * @param
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    /**
     * @getOffset
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @getOffsetTrim
     */
    public function getOffsetTrim()
    {
        return self::$trim . $this->offset . self::$trim;
    }

    /**
     * @setAsc
     * @param
     */
    public function setAsc($asc)
    {
        $this->asc = $asc;
    }

    /**
     * @getAsc
     */
    public function getAsc()
    {
        return $this->asc;
    }

    /**
     * @getAscTrim
     */
    public function getAscTrim()
    {
        return self::$trim . $this->asc . self::$trim;
    }

    /**
     * @setDesc
     * @param
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    /**
     * @getDesc
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @getDescTrim
     */
    public function getDescTrim()
    {
        return self::$trim . $this->desc . self::$trim;
    }
}














?>