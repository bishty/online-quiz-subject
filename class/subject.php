<?php
include_once 'dbconn.php';
class subject extends dbconn{
    public $name;
    public $email;
    public $password;
    public $number;
    public $conn;
    public $addsubject;
    public $subject_arr = array();

 function __construct()
    {
        $obj = new dbconn();
        $this->conn = $obj->connect();
    }


    public function  addsubject($addsubject){
            $sql="INSERT INTO `subject_tbl`( `subj_name`) VALUES ('$addsubject')";
            
              $res = $this->conn->query($sql);

              if ($res == TRUE) {
                  return 1;
              } else {
                  return 0;
              }
          }
        public function dropdown(){
            $sql="SELECT * FROM `subject_tbl`";
            $result=$this->conn->query($sql);
            if($result->num_rows>0){
                $i=0;
                while ($row = $result->fetch_assoc()) {
                $this->subject_arr[$i] = $row;
                ++$i;
            }
            return $this->subject_arr;
        }
    }
    public function startquiz(){
        $sql="SELECT * FROM `subject_tbl`";
        $result=$this->conn->query($sql);
        if($result->num_rows>0){
            $i=0;
            while ($row = $result->fetch_assoc()) {
            $this->subject_arr[$i] = $row;
            ++$i;
        }
        return $this->subject_arr;
    }

}
}

        

    
