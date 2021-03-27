<?php
include_once 'dbconn.php';


class user extends dbconn{
    public $name;
    public $email;
    public $password;
    public $number;
    public $conn;

 function __construct()
    {
        $obj = new dbconn();
        $this->conn = $obj->connect();
    }
    public function signup( $name,$email, $password, $number)
    {

        $sql="INSERT INTO `user_tbl`( `name`, `email`, `password`, `number`) VALUES ('$name','$email','$password','$number')";
        $res = $this->conn->query($sql);

        if ($res == TRUE) {
            return 1;
        } else {
            return 0;
        }
    }
    public function emailcheck($email, $password)
    {
        $sql = "SELECT * FROM `user_tbl` WHERE email='$email'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return 1;
        } else {
            return 0;
        }
    }


    public function logincheck($email, $password)
    {
       
        $sql = "SELECT * FROM `user_tbl` WHERE email= '$email'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
          
            $row = $result->fetch_assoc();
            if ($row['email'] == "admin@gmail.com" && $row['password'] == 'admin') {
                $_SESSION['admin']['email'] = $email;
                $_SESSION['admin']['password'] = $password;

                return 2;

            } 
            else if ($row['password'] == $password) {
                $_SESSION['user']['email'] = $email;
                $_SESSION['user']['password'] = $password;
            
                    $result = $this->conn->query($sql);
                    if ($result == TRUE) {
                        return 1;
                    } else {
                        return $this->conn->error;
                    }
                }

                return 1;
            } 
           else {
                return 0;
            }
        }
        
    }
    
    

