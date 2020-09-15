<?php
    namespace Modal\DBdata;
    class StudentDetails
    {
        private $con=null;

        public function __construct($con){
            $this->con=$con;
        }
        public function insertData($data){
            $sql = "insert into student(Name,Department,Gender,Mobile,email,Technologies) values(:name,:dept,:gender,:mobile,:email,:tech)";
            $stmt = $this->con->prepare($sql);
            $name=$data->First_Name." ".$data->Last_Name;
            $stmt->bindParam(":name",$name);
            $stmt->bindParam(":dept",$data->Department);
            $stmt->bindParam(":gender",$data->Gender);
            $stmt->bindParam(":mobile",$data->Mobile_No);
            $stmt->bindParam(":email",$data->Email);
            $stmt->bindParam(":tech",$data->Technologies_Known);
            if($stmt->execute()==TRUE){
                return true;
            }
            else{
                return false;
            }
        }

        public function getData(){
            $sql = "select * from student";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
            return $stmt;
        }

        /*public function updateData(){
        }

        public function deleteData(){
        }*/
    }
?>