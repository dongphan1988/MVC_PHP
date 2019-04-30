<?php

use Model\DB_Connection;
use Model\StudentDB;
use Model\Students;

class StudentController
{
    public $studentDB;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=MVC_students";
        $user = "root";
        $password = "12081988";
        $db_connection = new DB_Connection($dsn, $user, $password);
        $this->studentDB = new StudentDB($db_connection->connect());

    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'View/create.php';
        } else {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $student = new Students($name, $phone, $email);
            $this->studentDB->create($student);
            header('Location: index.php');

        }
    }


    public
    function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $student = $this->studentDB->getStudent($id);
            include 'View/delete.php';
        } else {
            $id = $_POST['id'];
            $this->studentDB->delete($id);
            header('Location: index.php');
        }

    }

    public
    function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
            $student = $this->studentDB->getStudent($id);
            include 'View/update.php';
        } else {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $student = new Students($name, $phone, $email);
            $this->studentDB->update($id, $student);
            header('Location: index.php');
        }

    }

    public function seachName()
    {
        $name = $_POST['name'];
        $listSeach = $this->studentDB->getSeach($name);
        include 'View/seach.php';

    }
public function view(){
    $id = $_GET['id'];
    $student = $this->studentDB->getStudent($id);
    $name = $student->name;
    $phone = $student->phone;
    $email = $student->email;
    include 'View/view.php';
}
    public
    function index()
    {
        $studens = $this->studentDB->getAll();
        include "View/list.php";
    }
}