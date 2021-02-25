<?php
/*
* bearbeitet von: Anna-Lisa Merkel, Salma Alkhaiyal
*/

// TODO: add namespace again
// namespace fff\model;

abstract class Model
{
    const TYPE_STRING   = 'string';
    const TYPE_INT  = 'int';
    const TYPE_DATE = 'date';
    const TYPE_ENUM = 'enum';
    const TYPE_DECIMAL = 'decimal';

    protected $schema = [];
    protected $data = [];

    public static function tablename()
    {
        $class = get_called_class();
        if(defined($class.'::TABLENAME'))
        {
            return $class::TABLENAME;
        }
        return null;
    }

    public function __construct($values)
    {
        try
        {
            foreach($this->schema as $key => $value)
            {
                if(isset($values[$key]))
                {
                    $this->$key = $values[$key];
                }
                else
                {
                    $this->$key = null;
                }
            }
            
        }
        catch(\Exception $error)
        {
            print_r($error);
            exit(1);
        }

    }

    public function __set($key, $value)
    {
        // key available?
        if(isset($this->schema[$key]))
        {
            $this->values[$key] = $value;
        }
        else
        {
            $className = get_called_class();
            throw new \Exception(`${key} does not exists in this class ${className}`);
        }
    }
    

    public static function find($whereStr = '')
    {
        $db = $GLOBALS['db'];
        $sqlStr = 'SELECT * FROM `'.self::tablename().'` WHERE '.$whereStr.';';
        $results = [];
        try
        {
            $results = $db->query($sqlStr)->fetchAll();
            $count = count($results);
            for ($i=0; $i < $count; ++$i)
            { 
                $class = get_called_class();
                $results[$i] = new $class($results[$i]);
            }
        }
        catch(\PDOException $error)
        {
            print_r($error);
        }

        return $results;
    }


    public static function findOne($whereStr = '')
    {
        $results = self::find($whereStr);

        if(count($results) > 0)
        {
            return $results[0];
        }

        return null;
    }
    
    public function insert()
    {
        // TODO: Implement insert
        $db = $GLOBALS['db'];
        $tableName = self::tablename();
        $sqlStr = "INSERT INTO `${tableName}` (";
        $valuesStr = "(";
        foreach($this->schema as $key => $value)
        {
            $sqlStr.=$key.',';
            $valuesStr.=':'.$key.',';
        }

        $sqlStr = rtrim($sqlStr, ',');
        $valuesStr = rtrim($valuesStr, ',');

        $sqlStr = $sqlStr.') VALUES '.$valuesStr.');';

        try
        {
            $stmt=$db->prepare($sqlStr);
            $stmt->execute($this->values);
            $this->id = $db->lastInsertId();
        }
        catch(\PDOException $e)
        {
            print_r($e);
        }
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
    
}

