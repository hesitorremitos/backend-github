<?php

// Definimos la clase
class Connection{
    protected $connection = null;
    private $db_host='localhost';
    private $db_user='root';
    private $db_pass='';
    private $db='6.1.proyecto-mvc';
    private $db_port=3306;


    public function connect(){
        try{
            $con = new mysqli(
                $this->db_host,
                $this->db_user,
                $this->db_pass,
                $this->db,
                $this->db_port
            );  
         }catch(Exception $e){
            echo "Error al conectar a la base de datos";
            echo $e->getMessage();
         }
         $this->connection=$con;
    }
}