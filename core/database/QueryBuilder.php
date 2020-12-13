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
        return $obj = $statement->fetchAll(PDO::FETCH_OBJ);//return data  as stdclass obj  or fetchALL(PDO::Fetch_obj)=>return data as associative array
    }//$table=>user ka put chin tae table put loe ya tal.(dynamic)
    
}//QueryBuilder ka database connection shi ma work tal.So,constructor nae dbconnection put ya mal
?>