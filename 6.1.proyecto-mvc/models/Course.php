<?php

require_once 'Connection.php';

class Course extends Connection{
    public $id;
    public $name;
    public $description;
    public $start_date;
    public $end_date;

    function __construct(){
        $this->connect();
    }
    
    public function create(){
        $pre = $this->connection->prepare(
            "INSERT INTO courses(name,description,start_date,end_date) VALUES (?,?,?,?)"
        );
        $pre->bind_param("ssss",
            $this->name,
            $this->description,
            $this->start_date,
            $this->end_date
        );
        try{
            $pre->execute();
        }catch(Exception $e){
            echo "Hubo un error al insertar: ";
            echo $e->getMessage();
            exit;
        }
    }



    public function find($id){
        // Comprobar si el dato existe
        $pre = $this->connection->prepare(
            "SELECT * FROM courses WHERE id=?"
        );
        $pre->bind_param('i',$id);
        $pre->execute();
        $res = $pre->get_result();
        
        if(!$res->num_rows>1){
            echo $res->num_rows;
            return false;
        }else{
            $row = $res->fetch_assoc();
            $this->id =$row['id']; 
            $this->name = $row['name'];
            $this->description = $row['description'];
            $this->start_date = $row['start_date'];
            $this->end_date = $row['end_date'];
            return true;
        }
        
    }
}

$curso = new Course();
if($curso->find(2)){
    print_r($curso);
}else{
    echo "No se encontro el usuario";
}