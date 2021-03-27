
<?php
session_start();
include_once('../class/user.php');
include_once('../class/subject.php');
include_once('../class/question.php');
if (isset($_POST['action'])) {

    $action = $_POST['action'];
    switch ($action) {

        case 'signup':
            if (isset($_POST['name'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $number = $_POST['number'];
                $obj = new user();
                $status = $obj->signup($name, $email, $password, $number);
                echo $status;
                break;
            }
        case 'emailcheck':
            $email = $_POST['email'];
            $password = $_POST['password'];
            $obj = new user();
            $status = $obj->emailcheck($email, $password);
            echo $status;
            break;

        case 'addsubject':
            $addsubject = $_POST['addsubject'];
            $obj = new subject();
            $status = $obj->addsubject($addsubject);
            echo $status;
            break;

        case 'dropdown':

            $obj = new subject();
            $status = $obj->dropdown();
            echo json_encode($status);
            break;


        case 'logincheck':
            $email = $_POST['email'];
            $password = $_POST['password'];
            $obj = new user();
            $login = $obj->logincheck($email, $password);
            echo $login;
            break;

        case 'startquiz':
            $obj = new subject();
            $status = $obj->startquiz();
            echo json_encode($status);
            break;



        case 'startest':
            $subj_id = $_POST['e'];
            $obj = new question();
            $status = $obj->startest($subj_id);
            echo json_encode($status);
            break;

        case 'masterdata':
            $obj = new question();
            $status = $obj->masterdata();
            echo json_encode($status);
            break;
    }
}
?>
