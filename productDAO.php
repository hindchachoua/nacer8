<?php
require_once 'ProdUct.php';
require_once 'db_cnx.php';



class ProductDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }

    public function get_Product(){
        $query = "SELECT * FROM products";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $ProductData = $stmt->fetchAll();
        $Prod = array();
        foreach ($ProductData as $B) {
            $Prod[] = new product($B["product_id"],$B["reference"],$B["image"], $B["barcode"],$B["label"],$B["purchase_price"],$B["final_price"],$B["price_offer"],$B["description"],$B["min_quantity"],$B["stock_quantity"],$B["category_id"]);
        }
        return $Prod;
       

    }
    public function insertProduct($Prod) {
        $query = "INSERT INTO products  VALUES (0, ".$Prod->getreference().",'".$Prod->getimage()."','".$Prod->getbarcode()."','".$Prod->getlabel()."', ".$Prod->getpurchase_price() .",".$Prod->getfinal_price().",'".$Prod->getprice_offer()."','".$Prod->getdescription()."',".$Prod->getmin_quantity().",".$Prod->getstock_quantity().",".$Prod->getcategory_id()." )";

        echo $query;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }


    public function updateProduct($Prod) {
        $query = "UPDATE products SET `reference`=".$Prod->getreference().", `image`='".$Prod->getimage()."', `barcode`= '".$Prod->getbarcode()."', `label`= '".$Prod->getlabel()."', `purchase_price`= ".$Prod->getpurchase_price() .", final_price= ".$Prod->getfinal_price().", price_offer= '".$Prod->getprice_offer()."', description= '".$Prod->getdescription()."', min_quantity= ".$Prod->getmin_quantity().", stock_quantity= ".$Prod->getstock_quantity().", category_id= ".$Prod->getcategory_id().", disabled= ".$Prod->getdisabled()." WHERE product_id= ".$Prod->getproduct_id();

        echo $query;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        
    }


    public function delete_product($id){
        $query = "UPDATE `products` SET `bl`= 1 WHERE `reference`=" . $id ;

        echo $query;
        $stmt = $this->db->query($query);
        $stmt -> execute();
    }
    

}



?>