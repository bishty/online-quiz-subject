<?php
include_once 'dbconn.php';
class question extends dbconn{
    public $name;
    public $email;
    public $password;
    public $number;
    public $conn;
    public $addsubject;
    public $addquestion;
    public $subj_id;

 function __construct()
    {
        $obj = new dbconn();
        $this->conn = $obj->connect();
    }
 
    public function startest($subj_id){
        
        $sql="SELECT `id`, `subj_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer` FROM `que_tbl` WHERE subj_id='$subj_id'";
        $result=$this->conn->query($sql);
        if($result->num_rows>0){
            $i=0;
            while ($row = $result->fetch_assoc()) {
            $this->subject_arr[$i] = $row;
            ++$i;
        }
        $_SESSION['subj_id']=$subj_id;
        return $this->subject_arr;
    }

}
 public function masterdata(){
     $subjectid= $_SESSION['subj_id'];
    $sql="SELECT `id`, `subj_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer` FROM `que_tbl` WHERE `subj_id`= ' $subjectid'";
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




