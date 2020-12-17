<?php
class QueryBuilder{
    protected $db;
    public function __construct($db)
    {
       $this->db =  $db;
    }

    function selectAll($table)
    {
        $statement = $this->db->prepare("select * from $table");
        $statement->execute();
        return $obj = $statement->fetchAll(PDO::FETCH_OBJ);//return data  as stdclass obj  or fetchALL(PDO::Fetch_assoc)=>return data as associative array
    }//$table=>user ka put chin tae table put loe ya tal.(dynamic)

    function selectById($table,$conditionArray)
    {
        $conditions = array();
        foreach($conditionArray as $key=>$value)
        {
            $conditions[] = "$key = '$value'";
        }
        $condition = implode(",",$conditions);
        $statement = $this->db->query("select * from $table where $condition");
        $statement->execute();
        return $obj = $statement->fetchALL(PDO::FETCH_OBJ);
    }
    function insert($dataArr,$table)
    {
        $getDataKeys = array_keys($dataArr);

        $getDataValues = array_values($dataArr);

        $columns = implode(",",$getDataKeys);

        $questionMark = "";

        foreach($getDataKeys as $key)
        {
            $questionMark .= "?,";
        }

        $questionMark = rtrim($questionMark,",");

        $sql = "insert into $table ($columns) values ($questionMark)";

        $statement = $this->db->prepare($sql);

        $statement->execute($getDataValues);
    }

    function update($table,$dataArray,$conditionArray)
    {
        $columns = array();
        $conditions = array();
        foreach($dataArray as $key=>$value)
        {
            $columns[] = "$key = '$value'";
        }

        $cols = implode(",",$columns);
        
        foreach($conditionArray as $key=>$value)
        {
            $conditions[] = "$key = '$value'";
        }

        $condition = implode(",",$conditions);
        $sql = "update $table set $cols where $condition";
        
        $statement = $this->db->prepare($sql);
        $statement->execute();


    }

    function delete($table,$conditionArray)
    {
        $conditions = array();
        foreach($conditionArray as $key=>$value)
        {
            $conditions[] = "$key = '$value'";
        }
        $condition = implode(",",$conditions);
        $sql = "delete from $table where $condition ";
        
        $statement = $this->db->prepare($sql);
        $statement->execute();
    }
}//QueryBuilder ka database connection shi ma work tal.So,constructor nae dbconnection put ya mal
?>