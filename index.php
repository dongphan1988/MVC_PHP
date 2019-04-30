<?php
include "Model/Students.php";
include "Model/DB_Connection.php";
include "Model/StudentDB.php";
include "Controller/StudentController.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$controller = new StudentController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
switch ($page){
    case "add":
        $controller->add();
        break;
    case "delete":
        $controller->delete();
        break;
    case 'update':
        $controller->update();
        break;
    case 'seach':
        $controller->seachName();
        break;
    case 'view':
        $controller->view();
        break;
    default:
        $controller->index();
        break;
}
?>
</body>
</html>