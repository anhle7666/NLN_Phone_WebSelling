<?php

use function PHPSTORM_META\type;

class Base_Model extends Core_model{
    public function select($query, $data=[]){
        $sth=$this->db->prepare($query);
        foreach($data as $key=>$value)$sth->bindParam($key, $value);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find_all(){
        $query="SELECT * FROM danh_muc JOIN san_pham JOIN anh;";
        $sth=$this->db->prepare($query);
        $sth->excute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    //Chú ý cách sử dụng implode và cách bindValue
    public function insert($table, $data){        
        $keys=implode(",", array_keys($data));
        $values=":".implode(", :", array_keys($data));        
        $sql="INSERT INTO $table($keys) VALUES ($values);";
        
        $statement=$this->db->prepare($sql);
        foreach($data as $key=>$value){        
            $statement->bindValue($key, $value);                  
            
        }        
        return $statement->execute();       
    }    

    public function update($table, $data, $cond){
        $updatekeys=null;
        foreach($data as $key=>$value){
            $updatekeys.="$key=:$key, ";
        }
        $updatekeys=rtrim($updatekeys, ", ");
        $sql="UPDATE $table SET $updatekeys WHERE $cond;";
        $statement=$this->db->prepare($sql);
        foreach($data as $key=>$value){
            $statement->bindValue(":$key", $value);                    
            
        }        
        return $statement->execute();
    }

    public function delete($table, $cond){
        $sql="DELETE FROM $table WHERE $cond;";
        return $this->db->exec($sql);
    }

    //Hàm chuyên so sánh dữ liệu
    public function affectedRows($sql, $data=[]){
        $statement=$this->db->prepare($sql);
        $statement->execute($data);
        return $statement->rowCount();
    }

    public function selectUser($sql, $user, $pass){
        $statement=$this->db->prepare($sql);
        $statement->execute(array($user, $pass));
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}