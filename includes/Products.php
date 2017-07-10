<?php
    class Products
    {
        private $link;

        function __construct()
        {
            $this->link = new MyPDO();
        }

        function listAllProducts()
        {
            $sql  = "SELECT * FROM " . DB_PREFIX . "products";

            $sql = "SELECT 
                      SHOP_products.id, 
                      SHOP_products.name, 
                      SHOP_products.price,
                      SHOP_products.stock,
                      SHOP_products.description,
                      SHOP_brands.name AS brand,
                      SHOP_category.category AS category  
                    FROM 
                      SHOP_products 
                    JOIN 
                      SHOP_brands
                    ON 
                      SHOP_products.brand = SHOP_brands.id 
                    JOIN
                      SHOP_category
                    ON
                      SHOP_products.category = SHOP_category.id
                    ORDER BY 
                      SHOP_products.id  
                    ASC";

            $result = $this->link->query($sql)->fetchAll();

            if ($result) {
                return $result;
            } else {
                return $this->link->getError();
            }
        }

        function listProductByID($id)
        {
            $sql = " SELECT * FROM " . DB_PREFIX . "products WHERE id = :id";

            $result = $this->link->query($sql)->bind(':id', $id)->fetchRow();

            if ($result) {
                return $result;
            } else {
                return false;
            }
        }

        function listProductsByCategory($category)
        {
            $sql = "SELECT 
                      SHOP_products.id, 
                      SHOP_products.name, 
                      SHOP_products.price,
                      SHOP_products.stock,
                      SHOP_products.description,
                      SHOP_brands.name AS brand,
                      SHOP_category.category AS category 
                    FROM 
                      SHOP_products 
                    JOIN 
                      SHOP_brands
                    ON 
                      SHOP_products.brand = SHOP_brands.id
                    JOIN
                      SHOP_category
                    ON
                      SHOP_products.category = SHOP_category.id
                    WHERE
                      SHOP_category.category = :category
                    ORDER BY 
                      SHOP_products.id  
                    ASC";

            return $result = $this->link->query($sql)->bind(':category', $category)->fetchAll();

        }

        function addProduct($name, $price, $stock, $description, $tmpFileName)
        {
            $table = DB_PREFIX . "products";
            $columns = array (
                "id" => "",
                "name" => "$name",
                "price" => "$price",
                "stock" => "$stock",
                "description" => "$description"
            );

            if ($this->link->insert($table, $columns)) {

                $id = $this->link->insertID();

                $targetPath = $_SERVER['DOCUMENT_ROOT']. "/learn/webstudent/sem6zl/shop/content/". $id .".png";

                if (Products::addProductImage($tmpFileName,  $targetPath)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        function addProductImage($tmpFilePath, $id)
        {

            $targetPath = $_SERVER['DOCUMENT_ROOT']. "/learn/webstudent/sem6zl/shop/content/". $id .".png";

            if (move_uploaded_file($tmpFilePath, $targetPath)) {
                return true;
            } else {
                return false;
            }

        }

        function updateProduct($id, $name, $price, $stock, $description)
        {
            $table = DB_PREFIX . "products";
            $columns = array (
                "id" => "$id",
                "name" => "$name",
                "price" => "$price",
                "stock" => "$stock",
                "description" => "$description"
            );
            $where = "id = '$id'";

            $result = $this->link->update($table, $columns, $where);

            if ($result) {
                return true;
            } else {
                return false;
            }
        }

        function deleteProduct($id)
        {
            $table = DB_PREFIX . "products";
            $where = "id = '$id'";

            $this->link->delete($table, $where);
        }

        function listProductByBrand($brand)
        {
            $sql = "SELECT 
                      SHOP_products.id, 
                      SHOP_products.name, 
                      SHOP_products.price,
                      SHOP_products.stock,
                      SHOP_products.description,
                      SHOP_brands.name AS brand,
                      SHOP_category.category AS category 
                    FROM 
                      SHOP_products 
                    JOIN 
                      SHOP_brands
                    ON 
                      SHOP_products.brand = SHOP_brands.id
                    JOIN
                      SHOP_category
                    ON
                      SHOP_products.category = SHOP_category.id
                    WHERE
                      SHOP_brands.name = :brand
                    ORDER BY 
                      SHOP_products.id  
                    ASC";

            return $result = $this->link->query($sql)->bind(':brand', $brand)->fetchAll();

        }

        function listBrands()
        {
            $sql = "SELECT * FROM SHOP_brands";

            return $this->link->query($sql)->fetchAll();
        }
        function listCategories()
        {
            $sql = "SELECT * FROM SHOP_category";

            return $this->link->query($sql)->fetchAll();
        }

        function soldOutProducts()
        {
            $sql = "SELECT * FROM `SHOP_products` WHERE stock <= 0";

            return $this->link->query($sql)->fetchAll();
        }

        function totalProductsPerCategory()
        {
            $sql = "SELECT SHOP_products.category, count(1) as Total, SHOP_category.category
                    FROM SHOP_products
                    JOIN SHOP_category
                    ON SHOP_category.id = SHOP_products.category
                    GROUP BY SHOP_products.category";

            return $this->link->query($sql)->fetchAll();
        }
    }