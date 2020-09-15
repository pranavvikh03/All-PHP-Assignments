<?php
    require_once "../config.php";
    require_once "../Modal/StudentDetails.php";
    require_once "../Modal/Database.php";

    use Modal\DBdata\StudentDetails;
    use Modal\DBdata\Database;

    header('Content-type: application/json');
    $connect = new Database();

    $object = new StudentDetails($connect->connect());
    $result = $object->getData();
    if($result->rowCount()>0)
    {
        $DataList = array(
            "records" => array()
        );
        $DataList=array();
        while($row = $result->fetch(\PDO::FETCH_ASSOC)) {
            $DataList["records"][] = $row;
        }
        echo json_encode($DataList);
    }
    else{
       echo json_encode(["No data"]);
    }
?>