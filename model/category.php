<?php

require_once("../config/db.php");
class Category
{

    public $categoryID;
    public $categoryName;
    public $categoryCount;
    public function __construct($ma, $ten, $soluong)
    {
        $this->categoryID = $ma;
        $this->categoryName = $ten;
        $this->categoryCount = $soluong;
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

class Brand
{

    public $brandID;
    public $brandName;
    public $brandCount;
    public function __construct($ma, $ten, $soluong)
    {
        $this->brandID = $ma;
        $this->brandName = $ten;
        $this->brandCount = $soluong;
    }
}

// Danh sách sản phẩm
function GetListCategory()
{
    $db = new DB();
    $sql = "SELECT * FROM categories";
    $rs = $db->select_to_array($sql);
    $listCat = array();
    for($i = 0; $i < count($rs) ; $i++)
    {
        $sqlCount = "SELECT COUNT(*) AS count_items FROM products WHERE product_cat=".$rs[$i]["cat_id"]; 
        $rsCount =  $db->select_to_array($sqlCount);
        $cat = new Category($rs[$i]["cat_id"],$rs[$i]["cat_title"],$rsCount[0]["count_items"]);
        array_push($listCat,$cat);
    }
    return $listCat;
}
// Danh sách nhãn hiệu
function GetListBrand()
{
    $db = new DB();
    $sql = "SELECT * FROM brands";
    $rs = $db->select_to_array($sql);
    $listBrand = array();
    for($i = 0; $i < count($rs) ; $i++)
    {
        $sqlCount = "SELECT COUNT(*) AS count_items FROM products WHERE product_brand=".$rs[$i]["brand_id"]; 
        $rsCount =  $db->select_to_array($sqlCount);
        $brand = new Brand($rs[$i]["brand_id"],$rs[$i]["brand_title"],$rsCount[0]["count_items"]);
        array_push($listBrand,$brand);
    }
    return $listBrand;
}
