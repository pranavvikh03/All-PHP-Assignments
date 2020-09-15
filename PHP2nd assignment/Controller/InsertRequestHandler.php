<?php
    require_once "../config.php";
    require_once "../Modal/StudentDetails.php";
    require_once "../Modal/Database.php";

    use Modal\DBdata\StudentDetails;
    use Modal\DBdata\Database;
    $data = json_decode(file_get_contents("php://input"));
    if($data!=null){
    $connect = new Database();

    $object = new StudentDetails($connect->connect());
    if($object->insertData($data)==True)
    {
        echo "<h1>Succesfull</h1>";
    }
    else
    {
        echo "<h1>Not Succesfull</h1>";
    }}
    else{
        print "No data";
    }
?>