<?php
class Core_model{
    //Kết nối CSDL với PDO, trong đó $db là đối tượng CSDL để thực hiện các lệnh trên CSDL
    //xem trong Base_Model
    protected $db=null;
    public function __construct()
    {
        $this->connect();
    }

    public function connect(){
        if($this->db==null){
            $config=require "config\database.php";

            $host=$config['host'];
            $username=$config['username'];
            $password=$config['password'];
            $dbname=$config['dbname'];

            try{
                $this->db=new PDO("mysql: host=$host;dbname=$dbname", $username, $password);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db->exec("set names utf8");
            }catch(PDOException $e){
                exit("Connection failed: ".$e->getMessage());
            }
        }

    }
}