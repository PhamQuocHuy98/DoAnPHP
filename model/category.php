<?php

require_once("config/db.php");
class Category
{

    public $categoryID;
    public $categoryName;
    public function __construct($ma, $ten)
    {
        $this->categoryID = $ma;
        $this->categoryName = $ten;
    }
    public function save()
    {
        //$db = new DB();

    }
    // Danh sách sản phẩm
    public  static function getListCategory()
    {
        $db = new DB();
        $sql = "SELECT * FROM categories";
        $rs = $db->select_to_array($sql);
        return $rs;
    }
}
