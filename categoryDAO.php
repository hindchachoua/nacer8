<?php 
   require_once 'ProdUct.php';
   require_once 'db_cnx.php';


   class categoryDAO{
       private $db;

       public function __construct(){
           $this->db = Database::getInstance()->getConnection();
       }


       public function get_category(){
           $sql = "SELECT * FROM categories";
           $query = $this->db->query($sql);
           $query->execute();
           $result = $query->fetchAll();
           $cat = array();
           foreach($result as $row){
               $cat[] = new category($row['category_id'], $row['category_name']);
           }
           return $cat;
       }

       public function add_category($category_name){
           $sql = "INSERT INTO categories (category_name) VALUES ($category_name)";
           $query = $this->db->query($sql);
           $query->execute();
       }

    //    update category from categories
       public function update_category($category_id, $category_name){
           $sql = "UPDATE categories SET category_name = $category_name WHERE category_id = $category_id";
           $query = $this->db->query($sql);
           $query->execute();
       }


       public function delete_category($category_id){
           $delete = "DELETE FROM categories WHERE category_id = $category_id";
           $query = $this->db->query($delete);
           $query->execute();
       }
   }


?>