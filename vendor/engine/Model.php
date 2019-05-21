<?php

namespace Engine;

use Engine\Db\AbstractDb;

class Model extends AbstractDb
{
    public function find($id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE id = " . $id;
        $result = $this->db->query($sql);
        $obj = (object)$result->fetch_assoc();

        return $obj;
    }

    public function findAll()
    {
        $collection = [];
        $sql = "SELECT * FROM " . $this->table;
        $result = $this->db->query($sql);

        while($row = $result->fetch_assoc()){
            $collection[] = (object)$row;
        }

        return $collection;
    }

    public function insert($data)
    {
        $sql  = "INSERT INTO " . $this->table;
        $sql .= " (".implode(", ", array_keys($data)).")";
        $sql .= " VALUES ('".implode("', '", $data)."') ";

        $this->db->query($sql);

        return $this;
    }

    public function update($id, $data)
    {
        $sql  = "UPDATE " . $this->table . " SET ";
        foreach($data as $k => $v){
            $sql .= $k . " = '" . $v. "', ";
        }

        $sql = substr($sql, 0, -2);

        $sql .= " WHERE id = " . $id;

        $this->db->query($sql);

        return $this;
    }

    public function delete($id)
    {
        if(!empty($id)){

            $sql = "DELETE FROM " . $this->table . " WHERE id = " . $id;
            $this->db->query($sql);

        }else{
            throw new Exception("ID can't found");
        }
    }

}