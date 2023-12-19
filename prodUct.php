<?php 
 
    class Product{
        private $product_id;
        private $reference;
        private $image;
        private $barcode;
        private $label;
        private $purchase_price;
        private $final_price;
        private $price_offer;
        private $description;
        private $min_quantity;
        private $stock_quantity;
        private $category;
        // private $disabled;

        public function __construct($product_id, $reference, $image, $barcode, $label, $purchase_price, $final_price , $price_offer , $description , $min_quantity ,$stock_quantity ,$category)
{
            $this->product_id = $product_id;
            $this->reference = $reference;
            $this->image = $image;
            $this->barcode = $barcode;
            $this->label = $label;
            $this->purchase_price= $purchase_price;
            $this->final_price = $final_price;
            $this->price_offer = $price_offer;
            $this->description = $description;
            $this->min_quantity = $min_quantity;
            $this->stock_quantity = $stock_quantity;
            $this->category = $category;
            // $this->disabled = $disabled;
           
}
        /**
         * Get the value of product_id
         */ 
        public function getProduct_id(){
        {
                return $this->product_id;
        }
        }

        /**
         * Get the value of reference
         */ 
        public function getReference()
        {
                return $this->reference;
        }

        /**
         * Get the value of image
         */ 
        public function getImage()
        {
                return $this->image;
        }

        /**
         * Set the value of barcode
         *
         * @return  self
         */ 
        public function setBarcode($barcode)
        {
                $this->barcode = $barcode;

                return $this;
        }

        /**
         * Get the value of barcode
         */ 
        public function getBarcode()
        {
                return $this->barcode;
        }

        /**
         * Get the value of label
         */ 
        public function getLabel()
        {
                return $this->label;
        }

        /**
         * Get the value of purchase_price
         */ 
        public function getPurchase_price()
        {
                return $this->purchase_price;
        }

        /**
         * Get the value of final_price
         */ 
        public function getFinal_price()
        {
                return $this->final_price;
        }

        /**
         * Get the value of price_offer
         */ 
        public function getPrice_offer()
        {
                return $this->price_offer;
        }

        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Get the value of min_quantity
         */ 
        public function getMin_quantity()
        {
                return $this->min_quantity;
        }

        /**
         * Get the value of stock_quantity
         */ 
        public function getStock_quantity()
        {
                return $this->stock_quantity;
        }

        /**
         * Get the value of category
         */ 
        public function getCategory()
        {
                return $this->category;
        }

        /**
         * Get the value of disabled
         */ 
        // public function getDisabled()
        // {
        //         return $this->disabled;
        // }
    }