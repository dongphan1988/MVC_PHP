<?php
namespace Model;

class StudentDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function getAll(){
        $sql = "SELECT * FROM `Students`";
        $dataAll = $this->connection->query($sql);
         $resut = $dataAll->fetchAll();
         $studens = [];
         foreach ($resut as $row) {
             $student = new Students($row['name'], $row['phone'], $row['email']);
             $student->id = $row['id'];
             $studens[] = $student;
         }
         return $studens;
    }
    public function getStudent($id){
        $sql = "SELECT * FROM Students WHERE id = $id";
        $info = $this->connection->query($sql );
        $row = $info->fetch();
        $student = new \Model\Students($row['name'],$row['phone'],$row['email']);
        $student->id = $row['id'];
        return $student;
    }
    public function create($student){
        $sql = "INSERT INTO Students(`name`, `phone`, `email`) VALUES (?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $student->name);
        $statement->bindParam(2, $student->phone);
        $statement->bindParam(3, $student->email);
        return $statement->execute();
    }
public function delete($id){
$sql = "DELETE FROM `Students` WHERE `id` = $id";
return $this->connection->query($sql);
}
public function update($id,$student){
        $sql = "UPDATE `Students` SET `name`= ?,`phone`= ?,`email`= ? WHERE `id` = '$id'";
        $statement = $this->connection->prepare($sql);
    $statement->bindParam(1, $student->name);
    $statement->bindParam(2, $student->phone);
    $statement->bindParam(3, $student->email);
    return $statement->execute();
}
public function getSeach($name){
$sql = "SELECT * FROM `Students` WHERE `name` LIKE '%$name%'";
    $data = $this->connection->query($sql);
    $resut = $data->fetchAll();
    $listSeach = [];
    foreach ($resut as $row) {
        $student = new Students($row['name'], $row['phone'], $row['email']);
        $student->id = $row['id'];
        $listSeach[] = $student;
    }
    return $listSeach;
}
}