<?php

require_once("../config/db.php");
class UserInfo
{
    public $userId;
    public $firstName;
    public $lastName;
    public $email;
    public $password;
    public $phone;
    public $address1;
    public $address2;
    public function __construct($dataUser)
    {
        $this->userId = $dataUser["user_id"];
        $this->firstName =$dataUser["first_name"];
        $this->lastName = $dataUser["last_name"];
        $this->email = $dataUser["email"];
        $this->password = $dataUser["password"];
        $this->phone = $dataUser["mobile"];
        $this->address1 = $dataUser["address1"];
        $this->address2 = $dataUser["address2"];
    }
}

// Danh sách suser
function GetListUser()
{
    $db = new DB();
    $sql = "SELECT * FROM user_info";
    $rs = $db->select_to_array($sql);
    $listUser = array();
    for($i = 0 ; $i <count($rs); $i++)
    {
        $user = new UserInfo($rs[$i]);
        array_push($listUser,$user);
    }

    return $listUser;
}

class Subscribers
{
    public $userId;
    public $email;
    public function __construct($id, $email)
    {
        $this->userId = $id;
        $this->email = $email;
    }
}
// Danh sách suser
function GetListSubscriber()
{
    $db = new DB();
    $sql = "SELECT * FROM email_info";
    $rs = $db->select_to_array($sql);
    $listSUser = array();
    for($i = 0 ; $i <count($rs); $i++)
    {
        $suser = new Subscribers($rs[$i]["email_id"],$rs[$i]["email"]);
        array_push($listSUser,$suser);
    }

    return $listSUser;
}
?>